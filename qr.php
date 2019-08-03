<?php
//载入qrcode类
include "./phpqrcode.php";

//取得GET参数
$url        = isset($_GET["url"]) ? $_GET["url"] : 'help';
$errorLevel = isset($_GET["e"]) ? $_GET["e"] : 'L';
$Pointp  = isset($_GET["p"]) ? $_GET["p"] : '10';
$margin     = isset($_GET["m"]) ? $_GET["m"] : '0';
preg_match('/http:\/\/([\w\W]*?)\//si', $url, $matches);
//简单判断
if ( $url == 'help'){
    header("Content-type: text/html; charset=utf-8");
    echo '<title>在线二维码API接口| 时光博客</title>';
    echo '<h1>欢迎使用时光博客在线二维码API服务！</h1>
    使用前请仔细查看参数说明：<br />
    <br />
    url: 二维码对应的网址<br /><br />
    m&nbsp&nbsp: 二维码白色边框尺寸,缺省值: 0px<br /><br />
    e&nbsp&nbsp: 容错级别(errorLevel)，可选参数如下(缺省值 L)：<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbspL水平    7%的字码可被修正<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbspM水平    15%的字码可被修正<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbspQ水平    25%的字码可被修正<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbspH水平    30%的字码可被修正<br />
    p&nbsp&nbsp: 二维码尺寸，可选范围1-10(具体大小和容错级别有关)（缺省值：3）<br /><br />
    常规用法：<a href="https://api.stext.cn/qr.php?m=0&e=L&p=10&url=https://stext.cn/" target="_blank">http://api.stext.cn/qr.php?m=0&e=L&p=10&url=http://stext.cn/</a><br /><br />
    ';
	exit();
} else  {
    //调用二维码生成函数
    createqr($url, $errorLevel, $Pointp, $margin);
}

//简单二维码生成函数
function createqr($value,$errorCorrectionLevel,$matrixPointp,$margin) {
    QRcode::png($value, false, $errorCorrectionLevel, $matrixPointp, $margin);
}
?>