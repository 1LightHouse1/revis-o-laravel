<?php

namespace App\Policies;

use App\Models\User;
use App\Http\Controllers\PermissionController;

class EixoPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return PermissionController::isAuthorized('eixo.index');
    }
}
