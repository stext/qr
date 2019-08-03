# qr
qrcode二维码
在线二维码API接口
 使用前请仔细查看参数说明：<br />
    <br />
    url: 二维码对应的网址<br /><br />
    m： 二维码白色边框尺寸,缺省值: 0px<br /><br />
    e: 容错级别(errorLevel)，可选参数如下(缺省值 L)：<br />
    L：水平    7%的字码可被修正<br />
    M：水平    15%的字码可被修正<br />
    Q：水平    25%的字码可被修正<br />
    H：水平    30%的字码可被修正<br />
    p: 二维码尺寸，可选范围1-10(具体大小和容错级别有关)（缺省值：3）<br /><br />
    常规用法：https://api.stext.cn/qr.php?m=0&e=L&p=10&url=https://stext.cn/
