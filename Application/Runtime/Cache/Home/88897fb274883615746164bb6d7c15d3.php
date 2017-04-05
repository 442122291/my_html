<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">


<title>我的博客</title>

<!-- Bootstrap core CSS -->
<link href="/my_html/Public/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/my_html/Public/css/blog.css" rel="stylesheet">



<script src="/my_html/Public/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>


<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href='<?php echo U("Blog/blog");?>'>主页</a>
            <a class="blog-nav-item" href='<?php echo U("About/about");?>'>关于我</a>
            <a class="blog-nav-item" href='<?php echo U("Whisper/whisper");?>'>碎言碎语</a>
            <a class="blog-nav-item" href='<?php echo U("Diary/diary");?>'>个人日记</a>
            <a class="blog-nav-item" href='<?php echo U("Guestbook/guestbook");?>'>留言板</a>
        </nav>
    </div>
    <div class="btn-group pull-right">

            <?php echo W('UserInfo/getUserinfo');?>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">个人博客</h1>
        <p class="lead blog-description">真正的友谊不是一株瓜蔓，会在一夜之间蹿起来，一天之内枯萎下去。</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">

                <p class="blog-post-meta"> <?php echo ($content["time"]); ?> <a href="#"><?php echo ($content["writer"]); ?></a></p>
                <?php echo ($content["content"]); ?>

            </div><!-- /.Blog-post -->

            <form class="form-signin" role="form" action="<?php echo U('Guestbook/post_comment?id',array('id'=>$content['id']));?>" method="post">
                <textarea cols="70" name="msg" rows="5" id="comment_text" placeholder="请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论。" class="b-input ipt-txt" required autofocus></textarea>
                <button type="submit" class="b-btn submit-comment">发表评论</button>
            </form>
            <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <form action="<?php echo U('Guestbook/del_comment?blog_id?id',array('blog_id'=>$content['id'],'id'=>$vo['id']));?>" method="post">
                <div class="t">
                    <a href="#" target="_blank" ><?php echo ($vo["user"]); ?></a>
                </div>
                <div class="content">评论：<?php echo ($vo["comment"]); ?></div>
                <div class="elinfo">
                    <span class="floor-date">时间：<?php echo ($vo["time"]); ?></span>
                    <?php if($_SESSION['level'] == 1){ ?>
                    <div>
                        <button type="submit" class="btn">删除此评论</button>
                    </div>
                    <?php } ?>

                </div>
                    </form>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>






</div><!-- /.Blog-main -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>刘老板  喜欢写文档和研究算法</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <li><a href="http://www.cnblogs.com/end/p/3848740.html">支持向量机（SVM）算法</a></li>
            <li><a href="http://tech.sina.com.cn/i/2016-02-23/doc-ifxprucu3124795.shtml">关于深度学习，看这一篇就够了</a></li>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">QQ</a></li>
            <li><a href="#">微信</a></li>
        </ol>
    </div>
</div><!-- /.Blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

<div class="blog-footer">
    <p>Blog template built for <a href="http://getbootstrap.com">Blog</a> by <a href="https://twitter.com/mdo">sai</a>.</p>
    <p>
        <a href="#">回到顶部</a>
    </p>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/my_html/Public/js/bootstrap.min.js"></script>
<script src="/my_html/PublicPublic/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/my_html/Public/js/ie10-viewport-bug-workaround.js"></script>
<script src="/my_html/Public/js/checkform.js"></script>
<script src="/my_html/Public/js/dev.main.js"></script>
</body>
</html>