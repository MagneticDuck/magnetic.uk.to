<?php
  $page_title = 'github';
  $page_btn = 'github-btn';
  $page_cmd = 'git remote -v';
  include 'includes/pre.php';
?>

<section>
  <header>
    <span class="primary"> the things I'm currently making </span>
    <span class="secondary"> (or should be anyways) </span>
  </header>
  <main>
    <div class="wrapper-2">
      <div class="column">
        <div class="btn"> 
          <p> Nix-rice is my current project. Hopefully I'll start filling a bit of a gap left in nixos, help make things generally more spectacular, and learn some nix in the meanwhile. </p> 
          <a class="btn" href="https://github.com/MagneticDuck/nix-rice"> 
            <span> nix-rice </span> 
          </a>
        </div>
      </div>
      <div class="column">
        <div class="btn"> 
          <p> I'm in the progress of making a nice little tutorial to nix on this site, feel free to suggest changes and corrections on github. </p>
          <a class="btn" href="https://github.com/MagneticDuck/magnetic.uk.to"> 
            <span> this site </span> 
          </a>
        </div>
      </div>
    </div>
  </main>
</section>

<?php include 'includes/post.php' ?>
