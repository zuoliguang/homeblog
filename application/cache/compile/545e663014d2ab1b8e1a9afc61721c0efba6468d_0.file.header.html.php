<?php
/* Smarty version 3.1.33, created on 2018-10-30 10:36:25
  from '/home/wwwroot/homeblog/application/views/index/layout/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd7c3a9d6e376_80564409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '545e663014d2ab1b8e1a9afc61721c0efba6468d' => 
    array (
      0 => '/home/wwwroot/homeblog/application/views/index/layout/header.html',
      1 => 1540522024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd7c3a9d6e376_80564409 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人博客 - 厚德载物，自强不息</title>
    <meta name="keywords" content="个人博客, PHP高级开发工程师, Web前端, 编程技术" />
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/public/css/base.css" rel="stylesheet">
    <link href="/public/css/index.css" rel="stylesheet">
    <link href="/public/css/m.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="/public/js/modernizr.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <?php echo '<script'; ?>
 src="/public/js/page.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
<div id="mnav">
    <div class="logo"><a href="/">个人博客</a></div>
    <h2 id="mnavh"><span class="navicon"></span></h2>
    <ul id="starlist">
        <li><a href="/">网站首页</a></li>
        <li><a href="/index/about">关于我</a></li>
        <li><a href="/index/recommend">推荐列表</a></li>
        <li><a href="/index/list">文章列表</a></li>
        <li><a href="/index/info">信息</a></li>
        <li><a href="/index/article">模板内容页</a></li>
    </ul>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    window.onload = function () {
        var oH2 = document.getElementById("mnavh"); 
        var oUl = document.getElementById("starlist");  
        oH2.onclick = function () {
            var style = oUl.style;
            style.display = style.display == "block" ? "none" : "block";
            oH2.className = style.display == "block" ? "open" : ""
        }
    }
<?php echo '</script'; ?>
>
 
</header>
<div class="line46"></div>

<?php }
}
