<?php

namespace App\Dao\User;

use App\Models\User;
use App\Contracts\Dao\User\UserDaoInterface;

class UserDao implements UserDaoInterface
{
    /**
     * To get user list
     * @param $request
     * @return array $users 
     */
    public function getUserList($request)
    {
        $users = User::orderBy('created_at', 'asc')->get();
        return $users;
    }

    /**
     * Add New User
     * 
     * @param $request value from request
     * @return $user
     */
    public function getUserCreate($request)
    {
        $user = new User;
        $user->author = $request->name;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->save();

        return $user;
    }

    /**
     * To find user
     * 
     * @param $id user id
     * @return $user 
     */
    public function findUser($id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * To update user
     * @param $id user id for update
     * @param $request
     * @return $user updated user
     */
    public function userUpdate($id, $request)
    {

        $user = User::find($id);
        $user->author =  $request->get('name');
        $user->gender = $request->get('gender');
        $user->address = $request->get('address');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->password = $request->get('password');
        $user->save();

        return $user;
    }

    /**
     * To delete user by id
     * @param $id
     * @return $user
     */
    public function userDelete($id)
    {
        $user = User::findOrFail($id)->delete();
        return $user;
    }
}
