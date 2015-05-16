<?php
  $page_title = 'home';
  $page_btn = 'home-btn';
  $page_cmd = 'cat todo.txt | less';
  include 'includes/pre.php';
?>

<div class="row">
  <p> If anybody could adequately explain to me what being "bored" is, thatdbegreat. For now though, I'll just assume it doesn't exist. Welcome to my life! </p>
</div>

<div class="row">
  <p class="important"> here are some things I'm planning to do </p>
</div>

<div class="wrapper-2">
  <div class="column"> 
    <a class="btn" href="http://www.github.com/magneticduck/nix-rice"> Get cracking on that nix-rice idea. </a>
    <div class="row btn"> Write a big-picture nix tutorial, with flowcharts! </div>
    <div class="row btn"> Write some decent music, for a change. </div>
  </div>
  <div class="column"> 
    <div class="row btn"> Learn inkscape for the flowchart tutorial thing. Rebind keys to a <a href="http://www.teamliquid.net/forum/sc2-strategy/341878-thecore-advanced-keyboard-layout">TheCore-style</a> mapping? </div>
    <a class="btn" href="http://renoise.com"> Port renoise to Nixos! </a>
  </div>
</div>  

<?php include 'includes/post.php' ?>
