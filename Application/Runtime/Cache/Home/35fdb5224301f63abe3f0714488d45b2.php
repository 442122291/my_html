<?php if (!defined('THINK_PATH')) exit();?>
<h3><?php echo ($_SESSION['user']); ?>
    <button class="btn dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href='<?php echo U("User/logout");?>'>退出</a></li>
    </ul>
</h3>