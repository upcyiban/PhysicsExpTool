<?php
/**
 * 网站接入使用Auth认证接口进行授权
 * 授权流程先通过浏览器重定向到授权服务器取得授权码（code）后
 * 再从服务器使用接口调用获取到对应用户的访问令牌
 *
 */


/**
 * 包含SDK
 */
require("classes/yb-globals.inc.php");

session_start();

/**
 * 配置文件
 */
include('config.php');

/**
 * 授权认证需要AppID、AppSecret和回调地址初
 *
 */
$api = YBOpenApi::getInstance()->init($cfg['m']['appID'], $cfg['m']['appSecret'], $cfg['m']['callback']);
$au  = $api->getAuthorize();

/**
 * 测试例程使用 session保存已获取到的访问令牌
 */
$token	= isset($_SESSION['__TOKEN__']) ? $_SESSION['__TOKEN__'] : false;

if (empty($token))		// 未获取授权
{
    /**
     * 从授权服务器回调返回时，URL中带有code（授权码）参数
     *
     */
    if (isset($_GET['code']) && !empty($_GET['code']))
    {
        /**
         * 使用授权码（code）获取访问令牌
         * 若获取成功，返回 $info['access_token']
         * 否则查看对应的 msgCN 查看错误信息
         */
        $info = $au->querytoken($_GET['code']);
        if (isset($info['access_token']))
        {
            $_SESSION['__TOKEN__']	= $info['access_token'];
            echo 'SUCCESS';
        }
        else
        {
            echo $info['msgCN'];
        }
    }
    else	// 重定向到授权服务器（这里使用header()重定向，可用使用其它方法）
    {
        header('location: ' . $au->forwardurl());
    }
}
else
{
    echo 'AUTHORIED';
}
?>