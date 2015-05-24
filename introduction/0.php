<?php
  $page_title = 'nixos';
  $page_btn = '';
  $page_cmd = 'man nix';
  include '/app/includes/pre.php';
?>

<section>
  <header>
    <span class="secondary"> magneticDuck's home brewed </span>
    <span class="primary"> introduction to nix </span>
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
    <img src="/images/introduction/solutions.png" class="big"/>
    <p> So what are you waiting for? Let's get moving. </p>
  </main>
</section>

<section>
  <header>
    <span class="secondary"> a preliminary word about </span>
    <span class="primary"> the nix language </span>
  </header>
  <main>
    <p> The nix language is a functional, untyped, pure and simple language. <a href=https://medium.com/@MrJamesFisher/nix-by-example-a0063a1a4c55">The "Nix by example" blog post by James Fisher</a> is a good explanation of it.  Don't worry, it's quite simple, and if you already know a functional language you won't be out of your element. </p>
    <p class="important">
      <span class="primary"> you don't need more than a minimal understanding of it for this tutorial! </span>
      <span class="secondary"> (but you should learn it before you try to start using nix) </span>
    </p>
  </main>
</section>

<section>
  <header>
    <span class="primary"> a walk through nix </span>
    <span class="secondary"> from a nix expression to the nix store </span>
  </header>
  <main>
    <p> To start off on our journey into nix-land, let's take a little walk. </p>
    <p> But we won't be walking down the yellow brick road; we're going to be walking through the path that an expression in the nix language takes to eventually cause a file to be made in a strange place called the nix store. </p>
    <img src="/images/introduction/walk/1.png"/>
    <p> First things first, let's check out our nix expression! </p>
    <p class="code">derivation {
  name = "hello-world";
  builder = "./builder";
  system = "x86_64-linux";
} </p>
  </main>
</section>

<?php include '/app/includes/post.php'; ?>
