# laravel-Dingding
laravel框架使用钉钉。

## 基本使用
1. 安装laravel 
2. 下载钉钉sdk。    
这里不需要用到aliyun,QimenCloud的文件夹，删除。将文件夹重名名为dingdingSdk，放入到app/Libs目录下。   
3. 加载钉钉sdk   
（1）在composer.json文件的“autoload”字段，加上值："files" : ["app/Libs/dingdingSdk/TopSdk.php"]    
（2）运行composer dump-autoload，更新加载器。    
4. 然后就可以根据钉钉文档直接使用了。

#### 钉钉sdk使用示例
```
$c = new DingTalkClient(DingTalkConstant::$CALL_TYPE_OAPI, DingTalkConstant::$METHOD_GET , DingTalkConstant::$FORMAT_JSON);
$req = new OapiUserGetRequest;
$req->setUserid("154126542935680843");
$resp=$c->execute($req, $accessToken,"https://oapi.dingtalk.com/user/get");
var_dump($resp);
```

## 使用钉钉业务回调事件
钉钉官网提供的业务回调事件加密解密php7.1已经抛弃不能使用。所以我们使用openssl进行加密解密信息。    
解密回调示例: app\Http\Controllers\DingdingController.php中callBackDecryptMsg()方法。    
解密代码包：app\Libs\crypto  


### 注意
本项目只是简单介绍laravel如何更好的使用钉钉接口开发。如laravel问题和钉钉问题请参考[laravel官网文档](https://laravel.com/docs)和[钉钉开发文档](https://open-doc.dingtalk.com/microapp/serverapi2)。
