<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
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
