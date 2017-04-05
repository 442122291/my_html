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
            <a class="blog-nav-item " href='<?php echo U("Blog/blog");?>'>主页</a>
            <a class="blog-nav-item" href='<?php echo U("About/about");?>'>关于我</a>
            <a class="blog-nav-item " href='<?php echo U("Whisper/whisper");?>'>碎言碎语</a>
            <a class="blog-nav-item active" href='<?php echo U("Diary/diary");?>'>个人日记</a>
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
            -------------------------------------------------------------------------------------------
            <div class="blog-post">
                春秋时期有一位名医，人们都叫他扁鹊。他医术高明，经常出入宫廷为君王治病。有一天，扁鹊巡诊去见蔡桓公。礼毕，他侍立于桓公身旁细心观察其面容，然后说道：“我发现君王的皮肤有病。您应及时治疗，以防病情加重。”桓公不以为然地说：“我一点病也没有，用不着什么治疗。”扁鹊走后，桓公不高兴地说：“医生总爱在没有病的人身上显能，以便把别人健康的身体说成是被医治好的。我不信这一套。”
                　　10天以后，扁鹊第二次去见桓公。他察看了桓公的脸色之后说：“您的病到肌肉里面去了。如果不治疗，病情还会加重。”桓公不信这话。扁鹊走了以后，他对“病情正在加重”的说法深感不快。
                　　又过了10天，扁鹊第三次去见桓公。他看了看桓公，说道：“您的病已经发展到肠胃里面去了。如果不赶紧医治，病情将会恶化。”桓公仍不相信。他对“病情变坏”的说法更加反感。
                　　照旧又隔了10天，扁鹊第四次去见桓公。两人刚一见面，扁鹊扭头就走。这一下倒把桓公搞糊涂了。他心想：“怎么这次扁鹊不说我有病呢？”桓公派人去找扁鹊问原因。扁鹊说：“一开始桓公皮肤患病，用汤药清洗、火热灸敷容易治愈；稍后他的病到了肌肉里面，用针刺术可以攻克；后来桓公的病患至肠胃，服草药汤剂还有疗效。可是目前他的病已入骨髓，人间医术就无能为力了。得这种病的人能否保住性命，生杀大权在阎王爷手中。我若再说自己精通医道，手到病除，必将遭来祸害。”
                　　5天过后，桓公浑身疼痛难忍。他看到情况不妙，主动要求找扁鹊来治病。派去找扁鹊的人回来后说：“扁鹊已逃往秦国去了。”桓公这时后悔莫及。他挣扎着在痛苦中死去。
                　　这个故事告诉人们，对于自身的疾病以及社会上的一切坏事，都不能讳疾忌医，而应防微杜渐，正视问题，及早采取措施，予以妥善的解决。否则，等到病入膏肓，酿成大祸之后，将会无药可救。

            </div><!-- /.Blog-post -->






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