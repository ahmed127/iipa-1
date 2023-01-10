<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\User;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AdminPanel\UserRepository;

class UserController extends Controller
{

    /** @var UserRepository $userRepository*/
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    public function index()
    {
        $users = $this->userRepository->allQuery(request()->all())->paginate(request('pagination') ?? 5);
        return view('adminPanel.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('adminPanel.users.show', compact('user'));
    }

}
