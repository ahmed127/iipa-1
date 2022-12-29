<?php

namespace App\Http\Controllers\AdminPanel;

use Response;
use Flash;
use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdminPanel\AdminRepository;
use App\Http\Requests\AdminPanel\CreateAdminRequest;
use App\Http\Requests\AdminPanel\UpdateAdminRequest;

class AdminController extends AppBaseController
{
    /** @var  AdminRepository */
    private $adminRepository;

    public function __construct(AdminRepository $adminRepo)
    {
        $this->adminRepository = $adminRepo;
    }

    /**
     * Display a listing of the Admin.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $admins = $this->adminRepository->allQuery($request->all())->paginate(request('pagination')??5);
        $status= [
            "" => __('lang.all'),
            "0"=> __('lang.inactive'),
            "1"=> __('lang.active'),
        ];
        return view('adminPanel.admins.index', compact('admins', 'status'));
    }

    /**
     * Show the form for creating a new Admin.
     *
     * @return Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id');
        return view('adminPanel.admins.create', compact('roles'));
    }

    /**
     * Store a newly created Admin in storage.
     *
     * @param CreateAdminRequest $request
     *
     * @return Response
     */
    public function store(CreateAdminRequest $request)
    {
        // return $request;
        $admin = $this->adminRepository->create($request->all());

        $admin->syncRoles([request('role')]);

        Flash::success(__('messages.saved', ['model' => __('models/admins.singular')]));

        return redirect(route('adminPanel.admins.index'));
    }

    /**
     * Display the specified Admin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/admins.singular')]));

            return redirect(route('adminPanel.admins.index'));
        }

        return view('adminPanel.admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified Admin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // $admin = $this->adminRepository->find($id);
        $admin = Admin::with('roles')->find($id);

        $roles = Role::pluck('name', 'id');

        if (empty($admin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/admins.singular')]));

            return redirect(route('adminPanel.admins.index'));
        }

        return view('adminPanel.admins.edit', compact('admin','roles'));
    }

    /**
     * Update the specified Admin in storage.
     *
     * @param int $id
     * @param UpdateAdminRequest $request
     *
     * @return Response
     */
    public function update(UpdateAdminRequest $request, $id)
    {
        // $admin = $this->adminRepository->find($id);
        $admin = Admin::with('roles')->find($id);
        $admin->syncRoles([request('role')]);

        if (empty($admin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/admins.singular')]));

            return redirect(route('adminPanel.admins.index'));
        }

        $admin = $this->adminRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/admins.singular')]));

        return redirect()->back();
    }

    /**
     * Remove the specified Admin from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/admins.singular')]));

            return redirect(route('adminPanel.admins.index'));
        }

        $this->adminRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/admins.singular')]));

        return redirect(route('adminPanel.admins.index'));
    }


    public function profile()
    {
        $admin = $this->adminRepository->find(auth('admin')->id());

        if (empty($admin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/admins.singular')]));

            return redirect(route('adminPanel.admins.index'));
        }

        return view('adminPanel.admins.profile', compact('admin'));
    }

    public function passwordForm()
    {
        $admin = $this->adminRepository->find(auth('admin')->id());
        return view('adminPanel.admins.password', compact('admin'));
    }

    public function updatePassword()
    {
        // validate the password
        $this->validate(request(), [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        // check if old password is correct
        $admin = $this->adminRepository->find(auth('admin')->id());
        // dd($admin);
        if (!Hash::check(request('old_password'), $admin->password)) {
            return redirect()->back()->withErrors(['old_password' => __('messages.old_password_incorrect')]);
        }

        // update password
        $admin->update([
            'password' => request('password')
        ]);

        Flash::success(__('messages.updated', ['model' => __('models/admins.singular')]));

        return redirect()->back();

    }

}
