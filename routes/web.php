<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dd', function () {
    $c = new DingTalkClient(DingTalkConstant::$CALL_TYPE_OAPI, DingTalkConstant::$METHOD_GET , DingTalkConstant::$FORMAT_JSON);
    $req01 = new OapiGettokenRequest;
    $req01->setAppkey(config('services.dingding.corpid'));
    $req01->setAppsecret(config('services.dingding.corpsecret'));
    $response = $c->execute($req01,null,"https://oapi.dingtalk.com/gettoken");
    $accessToken = $response->access_token;

    $req = new OapiUserGetRequest;
    $req->setUserid("userid");
    $resp=$c->execute($req, $accessToken,"https://oapi.dingtalk.com/user/get");
    var_dump($resp);
});
