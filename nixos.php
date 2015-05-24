<?php
  $page_title = 'nixos';
  $page_btn = 'nixos-btn';
  $page_cmd = 'uname -a';
  include 'includes/pre.php';
?>

<section>
  <header>
    <span class="primary"> $ nixos-rebuild switch </span>
  </header>
  <main>
    <p> Sometimes it's a very good idea to take a deep breath and a step back, and decide whether what you're doing now is the best way to do things. </p>

    <p class="important"> 
      <span class="secondary"> cognitive inertia aside, I don't think it's easy to avoid the conclusion that </span>
      <span class="primary"> Everybody should be using nixos! </span>
    </p>

    <a class="row btn" href="introduction/0.php">
      <span> click here for my own introduction to nixos (with extra flowcharts) </span>
      <span class="small"> ...and click below for more material </span>
    </a>

    <div class="wrapper-3">
      <div class="column"> 
        <a class="row btn" href="http://nixos.org">
          <span> the nixos homepage </span>
        </a>
      </div>
      <div class="column"> 
        <a class="row btn" href="http://nixos.org/docs/SCR-2005-091.pdf">
          <span> Eelco Dolstra's paper </span>
          <span class="small"> highly reccomended </span>
        </a>
      </div>
      <div class="column"> 
        <a class="row btn" href="http://lethalman.blogspot.it/2014/07/nix-pill-1-why-you-should-give-it-try.html"> 
          <span> the most excellent nix-pills series by Lethalman</span>
        </a> 
      </div>
    </div>
  </main>
</section>

<?php include 'includes/post.php' ?>
