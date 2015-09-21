<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <link type="text/css" rel="stylesheet" href="/includes/css/nav.css"/>
    <link type="text/css" rel="stylesheet" href="/includes/css/contents.css"/>
    <link type="text/css" rel="stylesheet" href="/includes/css/footer.css"/>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title> <?= $page_title ?> </title>
<?php
  if ($page_btn != ''):
?>
    <style type="text/css">
      <?= '#links #' . $page_btn ?>
      {
        background-color: #FFF056;
        margin-top: -2px;
      }
    </style>
<?php
  endif;
?>
  </head>
  <body>
    <div id="nav">
      <div id="leftside">
        <div id="text">
          <div id="title"> <span class="title-accent">Magne</span>ticDuck </div>
          <div id="desc"> :: (a -&gt; a) -&gt; a </div>
        </div>
      </div>
      <div id="rightside">
        <div id="links">
          <a class="link" id="home-btn" href="/index.php"> home </a>
          <a class="link" id="blag-btn" href="/blag.php"> blag </a>
          <a class="link" id="github-btn" href="/github.php"> github </a>
          <a class="link" id="music-btn" href="/music.php"> music </a>
        </div>
      </div>
    </div>
    <div id="outer-contents">
      <div id="page-title">
        <span class="accent">user@magnetic.uk.to~$</span><?= ' ' . $page_cmd ?>
      </div>
      <div id="contents">
        <div class="head"></div>
<!-- end pre.php -->
