<?php
namespace App\Http\Requests\Api;

use Illuminate\Support\Facades\Config;

trait  ApiRequestsTrait
{
    public function validationApiError($error){
        $respond = array();
        $respond['error']['message'] = trans('api.Validation Error!');
        $respond['error']['error'] = $error;
        $respond['status'] =  Config::get('error_code')['validation'];
        return $respond;
    }
}