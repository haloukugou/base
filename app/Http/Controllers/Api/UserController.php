<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Logic\Api\UserLogic;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info(Request $request, UserLogic $userLogic)
    {
        throw new \Exception('123');
//        $params = $this->getParams($request, ['id', 'name', 'age']);
//        return success();
    }
}
