<?php
  $page_title = 'nixos';
  $page_btn = '';
  $page_cmd = 'man nixos';
  include '/app/includes/pre.php';
?>


<div class="row">
  <h1> MagneticDuck's Introduction to Nixos </h1>
  <p> Hi! Welcome to nix. You're here because right now, package management for you looks like this: </p>
  <img src="/images/introduction/normal.png" />
  <p> ... and there are a few problems with that. To name a few: </p>
  <img src="/images/introduction/problems.png" />
  <p> Frankly, I don't think anybody's happy with how package managers work.. and if you've had any experience with cabal, well, I've said enough. The nice thing about this problem, however, is that there's a solution! </p>
  <p class="important"> Nix is literally the solution to package management! </p>
  <a class="btn" href="2.php">
    <p> click here to read more </p>
  </a>
</div>

<?php include '/app/includes/post.php'; ?>
