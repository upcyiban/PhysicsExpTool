<?php
//ini_set("display_errors", "On");
error_reporting(0);

if (!function_exists('curl_init')) {
    throw new Exception('YiBan needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('YiBan needs the JSON PHP extension.');
}
if (!function_exists('mcrypt_decrypt')) {
    throw new Exception('YiBan needs the mcrypt PHP extension.');
}

//�����������������軻�ɱ�Ӧ�õ�
$APPID = "461cefe18ebfccb5";   //��open.yiban.cn�������ĵ�AppID
$APPSECRET = "5f050cf4c646685cb301c8e36664fb7c"; //��open.yiban.cn�������ĵ�AppSecret
$CALLBACK = "http://f.yiban.cn/iapp20719";  //��open.yiban.cn�������ĵ�oauth2.0�ص���ַ

if(isset($_GET["code"])){   //�û���Ȩ����ת���������code�������˴�code��access_token������ýӿ�ת����
    $getTokenApiUrl = "https://oauth.yiban.cn/token/info?code=".$_GET['code']."&client_id={$APPID}&client_secret={$APPSECRET}&redirect_uri={$CALLBACK}";
    $res = sendRequest($getTokenApiUrl);
    if(!$res){
        throw new Exception('Get Token Error');
    }
    $userTokenInfo = json_decode($res);
    $access_token = $userTokenInfo["access_token"];
}else{
    $postStr = pack("H*", $_GET["verify_request"]);
    if(strlen($APPID) == '16') {
        $postInfo = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $APPSECRET, $postStr, MCRYPT_MODE_CBC, $APPID);
    }else {
        $postInfo = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $APPSECRET, $postStr, MCRYPT_MODE_CBC, $APPID);
    }
    $postInfo = rtrim($postInfo);
    $postArr = json_decode($postInfo, true);
    if(!$postArr['visit_oauth']){  //˵�����û�δ��Ȩ����ת����Ȩҳ��
        header("Location: https://openapi.yiban.cn/oauth/authorize?client_id={$APPID}&redirect_uri={$CALLBACK}&display=web");
        die;
    }
    $access_token = $postArr['visit_oauth']['access_token'];
}

//�õ�access token�ˣ����������ǻ�ȡ��ǰ�û��Ļ�����Ϣ���Կ���so easy!
$userInfoJsonStr = sendRequest("https://openapi.yiban.cn/user/me?access_token={$access_token}");
$userInfo = json_decode($userInfoJsonStr);

//var_dump($userInfo);

function sendRequest($uri){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Yi OAuth2 v0.1');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $uri);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array());
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    $response = curl_exec($ch);
    return $response;
}