<?php
/**
 * Forwarder to doku.php
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Andreas Gohr <andi@splitbrain.org>
 */
//header("Location: doku.php");
//header("Location: im/");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首页 - 环信开发文档</title>
    <meta name="keywords" content="环信开发者文档,环信即时通讯云文档,环信客户互动云文档,环信2.0文档,环信3.0文档,环信文档,环信在线客服文档,环信easeui3.0集成,环信开发者平台">
    <meta name="description" content="环信即时通讯云最新集成文档，一天内即可帮APP快速集成聊天功能。 环信客户互动云集成文档，快速多渠道集成，为企业提供智能客服系统。">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="static/trianglify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="static/animate.min.css">
    <link rel="stylesheet" type="text/css" href="static/index.css?v=20160719">

    <!-- Baidu -->
    <script type='text/javascript'>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?3e5b3453fdcff1e4dec124ea22f1e189";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>

    <!-- GrowingIO -->
    <script type='text/javascript'>
    var _vds = _vds || [];
    (function () {
        _vds.push(['setAccountId', '8bb5da75505521d9fa9a3dea82f4e2e2']);
        (function () {
            var vds = document.createElement('script');
            vds.type = 'text/javascript';
            vds.async = true;
            vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(vds, s);
        })();
    })();
    </script>
</head>
<body>
    <div class="container cool">
        <div id="layout" class="layout">
            <div class="side side-left animated fadeIn">
                <div class="content">
                    <div class="profile"><img class="animated rotateIn" src="static/logo_white.png" alt="Logo"></div>
                    <h1><span><a href="im/">v3.x文档</a> | <a href="start/">v2.x文档</a></span><span><a href="http://www.easemob.com/product/im" target="blank">环信即时通讯云</a></span></h1>
                    <!--div class="old-release"><a href="start/">V2.x文档</a></div-->
                </div>
                <a class="hot_link im3_link" href="im/"></a>
                <a class="hot_link im2_link" href="start/"></a>
            </div>
            <div class="side side-right animated fadeIn">
                <div class="content">
                    <div class="profile"><img class="animated rotateIn" src="static/logo_white.png" alt="Logo"></div>
                    <h1><span><a href="cs/">客户互动云文档</a></span><span><a href="http://www.easemob.com/product/cs" target="blank">环信客户互动云</a></span></h1>
                </div>
                <a class="hot_link cs_link" href="cs/"></a>
            </div>
        </div>
    </div>
    <script>
        var pattern = Trianglify({
            width: window.innerWidth,
            height: window.innerHeight
        });
        document.body.appendChild(pattern.canvas())
    </script>
</body>
</html>