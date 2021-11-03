<?php

namespace App\Contracts\Dao\User;

/**
 * Interface for Data Accessing Object of User
 */
interface UserDaoInterface
{
    /**
     * To get user list
     * @param $request 
     */
    public function getUserList($request);

    /**
     * Add New user
     * @param $request 
     */
    public function getUserCreate($request);

    /**
     * find user 
     * @param $id
     */
    public function findUser($id);

    /**
     * update user 
     * @param $request
     * @param $id
     */
    public function userUpdate($id, $request);

    /**
     * To delete user by id
     * @param $id
     */
    public function userDelete($id);
}
