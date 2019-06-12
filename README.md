# laravel-Dingding
laravel框架使用钉钉

1. 安装laravel 
2. 下载钉钉sdk。    
这里不需要用到aliyun,QimenCloud的文件夹，删除。将文件夹重名名为dingdingSdk，放入到app/Libs目录下。   
3. 加载钉钉sdk   
（1）在composer.json文件的“autoload”字段，加上值："files" : ["app/Libs/dingdingSdk/TopSdk.php"]    
（2）运行composer dump-autoload，更新加载器。    
4. 然后就可以根据钉钉文档直接使用了。

### 钉钉sdk使用示例
```
$c = new DingTalkClient(DingTalkConstant::$CALL_TYPE_OAPI, DingTalkConstant::$METHOD_GET , DingTalkConstant::$FORMAT_JSON);
$req = new OapiUserGetRequest;
$req->setUserid("154126542935680843");
$resp=$c->execute($req, $accessToken,"https://oapi.dingtalk.com/user/get");
var_dump($resp);
```
