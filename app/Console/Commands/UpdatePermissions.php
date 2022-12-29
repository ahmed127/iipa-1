<?php

namespace App\Console\Commands;

use Route;
use App\Models\MenuRoute;
use App\Models\Permission;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;

class UpdatePermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permissions:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates & sync the newly created views to have granted permissions upon users and roles.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Starting synchronizing...");

        $collection = Route::getRoutes();

        $routes = [];

        $permissions = [];

        $bar = $this->output->createProgressBar(count($collection));

        $bar->start();

        $this->info('');

        foreach ($collection as $route) {

            if ($route->getPrefix() == 'en/adminPanel') {

                $routeName = $route->getName();

                $this->info('Synchronizing route ' . $routeName . '...');

                $this->info('');

                $bar->advance();

                if ($routeName && !in_array($routeName, config('permission.excluded_routes'))) {

                    $routePartials = explode('.', $routeName);

                    $page = $routePartials[1];

                    $action = $routePartials[2];


                    switch (true) {
                        case in_array($action, ['index', 'menu_index', 'item_index']):
                            MenuRoute::updateOrCreate([
                                'name'          => $page . ' ' . $action,
                                'type'          => 1,
                            ], [
                                'name'          => $page . ' ' . $action,
                                'route_name'    => 'adminPanel.' . $page . '.' . $action,
                                'url'           => $page,
                                'status'        => 1,
                                'type'          => 1,
                            ]);
                            $permissions[$page . '_view'] = [
                                'page' => $page,
                                'action' => 'view',
                                'name' => $page . ' view'
                            ];
                            break;
                        case in_array($action, ['show', 'menu_show', 'item_show']):
                            $permissions[$page . '_view'] = [
                                'page' => $page,
                                'action' => 'view',
                                'name' => $page . ' view'
                            ];
                            break;

                        case in_array($action, ['create', 'store', 'menu_create','item_create', 'menu_store', 'item_store']):
                            $permissions[$page . '_create'] = [
                                'page' => $page,
                                'action' => 'create',
                                'name' => $page . ' create'
                            ];
                            break;

                        case in_array($action, ['edit', 'update', 'menu_edit', 'item_edit', 'menu_update', 'item_update']):
                            $permissions[$page . '_edit'] = [
                                'page' => $page,
                                'action' => 'edit',
                                'name' => $page . ' edit'
                            ];
                            break;

                        case in_array($action, ['destroy', 'menu_destroy', 'item_destroy']):
                            $permissions[$page . '_delete'] = [
                                'page' => $page,
                                'action' => 'delete',
                                'name' => $page . ' delete'
                            ];
                            break;

                        default:
                            $permissions[$page . '_' . $action] = [
                                'page' => $page,
                                'action' => $action,
                                'name' => $page . ' ' . $action
                            ];
                            break;
                    }
                    $routes[] = $routeName;
                }
            }
        }

        $bar->finish();
        foreach ($permissions as $permission) {
            Permission::createOnlyNew($permission);
        }
        $this->info('');

        $this->info('Synchronizing routes of admin portal finished successfully');
    }
}
