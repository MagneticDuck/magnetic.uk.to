<?php
  $page_title = 'home';
  $page_btn = 'home-btn';
  $page_cmd = 'cat todo.txt | less';
  include 'includes/pre.php';
?>

<div class="row">
  <p> My actual name is Chris Gadzinski, but I go by magneticDuck on the interwebs. I'm 17 and currently living in Coimbra, Portugal. When I'm not "spending time" at school, practicing rowing or doing .. other things, I'm probably doing esoteric stuff with computers and math. </p>
  <p class="important"> 
    Cross-cutting mutable state is the way of the past! 
  </p>
  <p> Here's my current todo list: </p> 
</div>

<div class="wrapper-2">
  <div class="column"> 
    <a class="row btn" href="http://www.github.com/magneticduck/nix-rice"> 
      <span> get cracking on that nix-rice idea </span>
    </a>
    <a class="row btn" href="introduction/0.php"> 
      <span> write a big-picture nix tutorial, with flowcharts </span>
      <span class="small"> currently in progress </span>
    </a>
  </div>
  <div class="column"> 
    <a class="row btn" href="http://renoise.com"> 
      <span> make renoise at home on nixos </span>
      <span class="small"> tools for native bandlimited sampling for HQ chiptunes? utility to manage renoise projects as git repositories? </span>
    </a>
    <a class="row btn" href="music.php"> 
      <span> try to finish some music for a change </span>
    </a>
  </div>
</div>  

<?php include 'includes/post.php' ?>
