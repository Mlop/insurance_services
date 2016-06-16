<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class BaseController extends Controller
{
    public function successJson($data = '', $message = '')
    {
        return response()->json(['code' => 0, 'msg' => $message, 'data' => $data]);
    }

    public function errorJson($data = '', $message = '')
    {
        return response()->json(['code' => -1, 'msg' => $message, 'data' => $data]);
    }
}
