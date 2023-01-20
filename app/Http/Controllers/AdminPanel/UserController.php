<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\User;
use App\Mail\RequestReply;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
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

    public function request_reply_mail()
    {
        Mail::to(request('email'))->send(new RequestReply(request('mail_body')));
        Flash::success(__('lang.message_sent'));
        return back();
    }
}
