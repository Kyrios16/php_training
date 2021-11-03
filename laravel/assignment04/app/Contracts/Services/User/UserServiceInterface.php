<?php

namespace App\Contracts\Services\User;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of User
 */
interface UserServiceInterface
{
    /**
     * To get user list
     * @param $request
     */
    public function getUserList($request);

    /**
     * Add new user
     * @param $request
     */
    public function getUserCreate($request);

    /**
     * edit user 
     * @param $id
     */
    public function findUser($id);

    /**
     * update user 
     * @param $id 
     * @param $request
     */
    public function userUpdate($request, $id);

    /**
     * To delete user by id
     * @param $id
     */
    public function userDelete($id);
}
