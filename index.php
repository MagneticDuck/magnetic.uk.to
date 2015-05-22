<?php
  $page_title = 'home';
  $page_btn = 'home-btn';
  $page_cmd = 'cat todo.txt | less';
  include 'includes/pre.php';
?>

<div class="row">
  <p> My actual name is Chris Gadzinski, but I go by magneticDuck on the interwebs. I'm 17 and currently living in Coimbra, Portugal. When I'm not "spending time" at school, practicing rowing or doing .. other things, I'm probably doing esoteric stuff with computers and math. </p>
  <p class="important"> Cross-cutting mutable state is the way of the past! </p>
  <p> Here's my current todo list: </p> 
</div>

<div class="wrapper-2">
  <div class="column"> 
    <a class="btn" href="http://www.github.com/magneticduck/nix-rice"> 
      <p> get cracking on that nix-rice idea </p>
    </a>
    <div class="row btn"> 
      <p> write a big-picture nix tutorial, with flowcharts </p>
      <p class="small"> I guess I'll just use inkscape </p>
    </div>
  </div>
  <div class="column"> 
    <a class="btn" href="http://renoise.com"> 
      <p> make renoise at home on nixos </p>
      <p class="small"> tools for native bandlimited sampling for HQ chiptunes? utility to manage renoise projects as git repositories? </p>
    </a>
    <a class="btn" href="music.php"> 
      <p> try to finish some music for a change </p>
    </a>
  </div>
</div>  

<?php include 'includes/post.php' ?>
