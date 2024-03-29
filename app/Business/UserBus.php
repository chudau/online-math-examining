<?php

namespace App\Business;

use App\Business\BaseBus;
use App\Business\GradeBus;
use App\Business\SchoolBus;
use App\DAL\UserDAL;
use Illuminate\Support\Facades\Hash;

class UserBus extends BaseBus
{
    private $userDAL;

    public function __construct()
    {
        $this->userDAL = new UserDAL();
        $this->gradeBus = new GradeBus();
        $this->schoolBus = new SchoolBus();
        $this->roleBus = new RoleBus();
    }

    public function getUserDAL()
    {
        return $this->userDAL;
    }

    public function getAllForAdmin()
    {
        $apiResult = $this->getUserDAL()->getAllForAdmin();
        $apiResult->grades = $this->gradeBus->getAllId()->grades;
        $apiResult->schools = $this->schoolBus->getAll()->schools;
        $apiResult->roles = $this->roleBus->getAll()->roles;

        return $apiResult;
    }

    public function getById($id)
    {
        $apiResult = $this->getUserDAL()->getById($id);

        return $apiResult;
    }

    public function insert($user)
    {
        $user['password'] = Hash::make($user['password']);
        $apiResult = $this->getUserDAL()->insert($user);

        return $apiResult;
    }

    public function update($user)
    {
        $apiResult = $this->getUserDAL()->update($user);

        return $apiResult;
    }

    public function destroy($userId)
    {
        return $this->getUserDAL()->destroy($userId);
    }
}
