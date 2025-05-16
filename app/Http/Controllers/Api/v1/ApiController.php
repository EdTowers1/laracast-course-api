<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function include(string $relationship)
    {
        $param = request()->get('include');

        if (!isset($param)) {
            return false;
        }

        $incluldeValues = explode(',', strtolower($param));

        return in_array(strtolower($relationship), $incluldeValues);
    }
}
