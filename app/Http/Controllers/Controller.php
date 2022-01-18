<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getParams(object $request, array $fields): array
    {
        if (empty($fields)) {
            return $request->all();
        }
        $result = [];
        foreach ($fields as $v) {
            $result[$v] = $request->only($v)[$v] ?? '';
        }
        return $result;
    }
}
