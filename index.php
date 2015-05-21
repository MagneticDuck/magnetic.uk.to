<?php
  $page_title = 'home';
  $page_btn = 'home-btn';
  $page_cmd = 'cat todo.txt | less';
  include 'includes/pre.php';
?>

<div class="row">
  <p> I'm a 17 year old interested in stuff.  </p>
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
