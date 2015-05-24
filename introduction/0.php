<?php
  $page_title = 'nixos';
  $page_btn = '';
  $page_cmd = 'man nix';
  include '/app/includes/pre.php';
?>

<section>
  <header>
  </header>
  <main>
    <p> Hi! Welcome to nix. You're here because right now, package management for you looks like this: </p>
    <img src="/images/introduction/normal.png" />
    <p> ... and there are a few problems with that, not limited to: </p>
    <img src="/images/introduction/problems.png" />
    <p> Frankly, I don't think anybody's happy with how package managers work. The nice thing about this problem, however, is that there's a solution! </p>
    <p class="important"> 
      <span class="primary"> Nix is the solution to package management! </span>
    </p>
    <p> Nix is not another feature or another intelligent algorithm to make package management a bit easier. It's a completely different way of doing things, and it provides all sorts of benefits. </p>
    <img src="/images/introduction/solutions.png" />
    <a class="btn" href="1.php">
      <span> So what are you waiting for? Let's get moving. </span>
    </a>
  </main>
</section>

<?php include '/app/includes/post.php'; ?>
