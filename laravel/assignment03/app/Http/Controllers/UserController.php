<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserDetailMail;
use App\Models\User;
use App\Contracts\Services\User\UserServiceInterface;


class UserController extends Controller
{

    /**
     *user interface
     */
    private $userInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserServiceInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    /**
     * show all users
     * @param $request
     * @return user list to index blade
     */
    public function index(Request $request)
    {
        $users = $this->userInterface->getUserList($request);
        return view('users.index-user', ['users' => $users]);
    }

    /**
     * create new user
     * @return create blade
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store New User
     * 
     * @param $request value from request
     * @return $user
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $post = $this->userInterface->getUserCreate($request);

        $userDetails = [
            'heading' => "You successfully created new user.",
            'name' => $post['author'],
            'gender' => $post['gender'],
            'address' => $post['address'],
            'phone' => $post['phone'],
            'email' => $post['email'],

        ];
        Mail::to($userDetails['email'])->send(new UserDetailMail($userDetails));

        return redirect('/users')->with('message', 'User Addedd!');
    }

    /**
     * To edit user
     * 
     * @param $id user id
     * @return edit blade with $user
     */
    public function edit($id)
    {
        $user = $this->userInterface->findUser($id);
        return view('users.edit', ['user' => $user]);
    }

    /**
     * To update user
     * @param $id user id for update
     * @param $request
     * @return user updated user
     */
    public function update(Request $request, $id)
    {
        $user = $this->userInterface->userUpdate($id, $request);
        return redirect('/users')->with('message', 'User Updated!');
    }

    /**
     * To delete user by id
     * @param $id
     * @return user
     */
    public function destroy($id)
    {
        $user = $this->userInterface->userDelete($id);
        return redirect('/users')->with('message', 'User deleted!');
    }
}
