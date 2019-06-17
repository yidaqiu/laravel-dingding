<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DingdingController extends Controller
{
    /**
     * 获取accessToken并缓存。
     * 缓存accessToken。accessToken有效期为两小时，需要在失效前请求新的accessToken（注意：以下代码没有在失效前刷新缓存的accessToken）。
     */
    public function getDingdingAccessToken(){
        $accessToken =  Cache::get('corp_access_token');
        if (!$accessToken)
        {
            $c = new \DingTalkClient(\DingTalkConstant::$CALL_TYPE_OAPI, \DingTalkConstant::$METHOD_GET , \DingTalkConstant::$FORMAT_JSON);
            $req01 = new \OapiGettokenRequest;
            $req01->setAppkey(config('services.dingding.corpid'));
            $req01->setAppsecret(config('services.dingding.corpsecret'));
            $response = $c->execute($req01,null,"https://oapi.dingtalk.com/gettoken");
            $accessToken = $response->access_token;
            Cache::put('corp_access_token', $accessToken,110);
        }
        return $accessToken;
    }

    /**
     * 获取钉钉用户详细信息
     */
    public function getDingdingUser(){
        $accessToken = $this->getDingdingAccessToken();
        $c = new \DingTalkClient(\DingTalkConstant::$CALL_TYPE_OAPI, \DingTalkConstant::$METHOD_GET , \DingTalkConstant::$FORMAT_JSON);
        $req = new \OapiUserGetRequest;
        //$req->setUserid("userid");
        $req->setUserid("1540281625673045");
        $resp=$c->execute($req, $accessToken,"https://oapi.dingtalk.com/user/get");
        var_dump($resp);
    }

    /**
     * 处理业务事件回调。回调信息需解密。
     * 因为钉钉提供的示例，解密方法已过时不能用，所以特意抓出解密步骤。
     * 当然需先注册该回调路径及事件，具体请参考钉钉文档。
     * @param $request
     */
    public function callBackDecryptMsg(Request $request){
        $signature = $request->get('signature');
        $timeStamp = $request->get('timestamp');
        $nonce = $request->get('nonce');
        $postdata = file_get_contents("php://input");
        $postList = json_decode($postdata, true);
        $encrypt = $postList['encrypt'];

        $callBackToken = config('services.dingding.cb_token');
        $callBackAseKey = config('services.dingding.cb_aes_key');
        $callBackCorpid = config('services.dingding.corpid');
        $crypt = new \DingtalkCrypt($callBackToken, $callBackAseKey, $callBackCorpid);
        $msg = "";
        $errCode = $crypt->DecryptMsg($signature, $timeStamp, $nonce, $encrypt, $msg);
        $eventMsg = json_decode($msg);
        $eventType = $eventMsg->EventType;
        if ($errCode == 0 && $eventType != 'check_url') {
            switch ($eventType) {
                case 'user_add_org':   //通讯录用户增加
                  //处理user_add_org回调事件
                default :
                    break;
            }
        } else {

        }

        //reponse to dingding
        $encryptMsg = '';
        $res = "success";
        $errCode = $crypt->EncryptMsg($res, $timeStamp, $nonce, $encryptMsg);
        if ($errCode == 0) {
            echo $encryptMsg;
            //Log::info("RESPONSE: " . $encryptMsg);
        } else {
            //Log::info("RESPONSE ERR: " . $errCode);
        }
        exit;
    }

    /**
     * 调用机器人发消息
     */
    public function Robet(){
        $accessToken = $this->getDingdingAccessToken();
        $c = new \DingTalkClient(\DingTalkConstant::$CALL_TYPE_OAPI, \DingTalkConstant::$METHOD_POST , \DingTalkConstant::$FORMAT_JSON);
        $req = new \OapiRobotSendRequest();
        $req->setText( array(
            "content" => '大家好！我是球球机器人，来撩骚啊！'
        ));
        $resp=$c->execute($req, $accessToken,"https://oapi.dingtalk.com/robot/send");
        var_dump($resp);
    }
}
