<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Models\User\Settlement;
use Log;

/**
 * todo controller example
 * Class UserController
 * @package App\Http\Controllers\User
 */
class UserController extends BaseController
{
    //url: xxx/user/get
    public function getInfo()
    {
        Log::info("API: finance/settlement/create, params: ");
        $model = new Settlement();
        $res = $model->firstOrNew(["settlement_id"=>1208]);
        return $this->successJson($model->getTimeString());
        var_dump(config('services'));exit;
        return 'abc info';
    }
}
