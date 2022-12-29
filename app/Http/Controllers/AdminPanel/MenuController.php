<?php

namespace App\Http\Controllers\AdminPanel;

use Response;
use App\Models\Menu;
use App\Models\MenuItem;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdminPanel\MenuRepository;
use App\Http\Requests\AdminPanel\CreateMenuRequest;
use App\Http\Requests\AdminPanel\UpdateMenuRequest;
use App\Models\MenuRoute;

class MenuController extends AppBaseController
{

    /**
     * Display a listing of the Menu.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function menu_index(Request $request)
    {
        $menus = Menu::withCount('items')->paginate(10);

        return view('adminPanel.menus.menu_index', compact('menus'));
    }

    /**
     * Show the form for creating a new Menu.
     *
     * @return Response
     */
    public function menu_create()
    {
        return view('adminPanel.menus.menu_create');
    }

    /**
     * Store a newly created Menu in storage.
     *
     * @param CreateMenuRequest $request
     *
     * @return Response
     */
    public function menu_store(CreateMenuRequest $request)
    {
        $input = $request->all();

        $menu = Menu::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/menus.singular')]));

        return redirect(route('adminPanel.menus.index'));
    }

    /**
     * Display a listing of the Item.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function item_index(Menu $menu, Request $request)
    {
        $query = MenuItem::query();

        if (request()->filled('parent_id')) {
            $query->where('parent_id', request('parent_id'));
        } else {
            $query->whereNull('parent_id');
        }
        if (request()->filled('name')) {
            $query->whereTranslationLike('name', "%$request->name%");
        }

        $items = $query->withCount('routes')->paginate(request('pagination')??5);

        if (request()->filled('parent_id')) {
            $parentID = request('parent_id');
            do {
                $category = MenuItem::find($parentID);
                $parent[] = [
                    'id' => $category->id,
                    'name' => $category->name,
                ];
                $parentID = $category->parent_id ?? 0;
            } while ($parentID > 0);
        } else {
            $parent[] = [
                'id' => 0,
                'name' => __('models/menus.fields.not_have'),
            ];
        }

        // $items = MenuItem::where('menu_id', $menu->id)->withCount('routes')->paginate(10);

        return view('adminPanel.menus.item_index', compact('menu', 'items'));
    }

    /**
     * Show the form for creating a new Item.
     *
     * @return Response
     */
    public function item_create(Menu $menu)
    {
        $parents = MenuItem::categories()->get()->pluck('name', 'id');
        $routes = MenuRoute::admin()->get()->pluck('name', 'id');

        return view('adminPanel.menus.item_create', compact('menu', 'parents', 'routes'));
    }

    /**
     * Store a newly created Menu in storage.
     *
     * @param Request $request
     * @param Menu $menu
     *
     * @return Response
     */
    public function item_store(Menu $menu, Request $request)
    {
        $request->validate([
            'type'          => 'required|in:1,2',
            'name'          => 'required',
            'menu_route_id' => 'requiredIf:type,2|exists:menu_routes,id',
            'parent_id'     => 'requiredIf:type,2|exists:menu_items,id',
            'status'        => 'required',
        ]);

        MenuItem::create([
            'menu_id'       => $menu->id,
            'menu_route_id' => $request->menu_route_id??null,
            'parent_id'     => $request->parent_id??null,
            'status'        => $request->status??2,
            'type'          => $request->type??2,
        ]);

        Flash::success(__('messages.saved', ['model' => __('models/menus.singular')]));

        return redirect(route('adminPanel.menus.item_index', $menu->id));
    }

    /**
     * Display the specified Menu.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);

        if (empty($menu)) {
            Flash::error(__('messages.not_found', ['model' => __('models/menus.singular')]));

            return redirect(route('adminPanel.menus.index'));
        }

        return view('adminPanel.menus.show')->with('menu', $menu);
    }

    /**
     * Show the form for editing the specified Menu.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);

        if (empty($menu)) {
            Flash::error(__('messages.not_found', ['model' => __('models/menus.singular')]));

            return redirect(route('adminPanel.menus.index'));
        }

        return view('adminPanel.menus.edit')->with('menu', $menu);
    }

    /**
     * Update the specified Menu in storage.
     *
     * @param int $id
     * @param UpdateMenuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMenuRequest $request)
    {
        $menu = Menu::find($id);

        if (empty($menu)) {
            Flash::error(__('messages.not_found', ['model' => __('models/menus.singular')]));

            return redirect(route('adminPanel.menus.index'));
        }

        $menu->update($request->all());

        Flash::success(__('messages.updated', ['model' => __('models/menus.singular')]));

        return redirect(route('adminPanel.menus.index'));
    }

    /**
     * Remove the specified Menu from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);

        if (empty($menu)) {
            Flash::error(__('messages.not_found', ['model' => __('models/menus.singular')]));

            return redirect(route('adminPanel.menus.index'));
        }

        Menu::delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/menus.singular')]));

        return redirect(route('adminPanel.menus.index'));
    }
}
