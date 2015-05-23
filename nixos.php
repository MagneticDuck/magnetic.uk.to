<?php
  $page_title = 'nixos';
  $page_btn = 'nixos-btn';
  $page_cmd = 'uname -a';
  include 'includes/pre.php';
?>

<div class="row">
  <p> Sometimes it's a very good idea to take a deep breath and a step back, and decide whether what you're doing now is the best way to do things. </p>
  <p> I think anybody who does so will come to a fast conclusion: </p>
  <p class="important"> Everybody should be using nixos! </p>

  <a class="btn" href="introduction/0.php">
    <p> click here for my own introduction to nixos (with extra flowcharts) </p>
    <p class="small"> ...and click below for more material </p>
  </a>
</div>

<div class="wrapper-3">
  <div class="column"> 
    <a class="btn" href="http://nixos.org">
      <p> the nixos homepage </p>
    </a>
  </div>
  <div class="column"> 
    <a class="btn" href="http://nixos.org/docs/SCR-2005-091.pdf">
      <p> Eelco Dolstra's paper </p>
      <p class="small"> highly reccomended </p>
    </a>
  </div>
  <div class="column"> 
    <a class="btn" href="http://lethalman.blogspot.it/2014/07/nix-pill-1-why-you-should-give-it-try.html"> 
      <p> the most excellent nix-pills series by Lethalman</p>
    </a> 
  </div>
</div>

<?php include 'includes/post.php' ?>
