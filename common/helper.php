<?php

function success($data = [], $isObj = false): \Illuminate\Http\JsonResponse
{
    if (true === $isObj && empty($data)) {
        $data = new \stdClass();
    }
    $result = [
        'code' => \App\Constant\CodeConstant::SUCCESS_CODE,
        'msg' => 'success',
        'data' => $data
    ];
    return response()->json($result);
}

function fail($msg = 'fail', $code = \App\Constant\CodeConstant::FAIL_CODE, $isObj = false): \Illuminate\Http\JsonResponse
{
    $data = [];
    if (true === $isObj) {
        $data = new \stdClass();
    }
    $result = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data
    ];
    return response()->json($result);
}
