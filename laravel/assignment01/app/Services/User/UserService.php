<?php

namespace App\Services\User;

use App\Contracts\Dao\User\UserDaoInterface;
use App\Contracts\Services\User\UserServiceInterface;

class UserService implements UserServiceInterface
{
    private $userDao;

    /**
     * Class Constructor
     * @param OperatorUserDaoInterface
     * @return
     */
    public function __construct(UserDaoInterface $userDao)
    {
        $this->userDao = $userDao;
    }

    /**
     * Get User List
     * @param $request
     * @return user lists
     */
    public function getUserList($request)
    {
        return $this->userDao->getUserList($request);
    }

    /**
     * Add New user
     * @param $request 
     * @return user 
     */
    public function getUserCreate($request)
    {
        return $this->userDao->getUserCreate($request);
    }

    /**
     * find user 
     * @param $id
     * @return user by id
     */
    public function findUser($id)
    {
        return $this->userDao->findUser($id);
    }

    /**
     * update user 
     * @param $request
     * @param $id
     * @return updated user
     */
    public function userUpdate($id, $request)
    {
        return $this->userDao->userUpdate($id, $request);
    }

    /**
     * To delete user by id
     * @param $id
     * @return user deleted
     */
    public function userDelete($id)
    {
        return $this->userDao->userDelete($id);
    }
}
