<?php
  $page_title = 'nixos';
  $page_btn = '';
  $page_cmd = 'man nix';
  include '/app/includes/pre.php';
?>

<section>
  <header>
    <span class="secondary"> this whole page is </span>
    <span class="primary"> under heavy development </span>
  </header>
  <main>
    <p> Sometimes it's a very good idea to take a deep breath and a step back, and decide whether what you're doing now is the best way to do things. </p>

    <p class="important"> 
      <span class="secondary"> cognitive inertia aside, it's not easy for me to avoid the conclusion that </span>
      <span class="primary"> Everybody should be using nixos! </span>
    </p>

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

<section>
  <header>
    <span class="secondary"> magneticDuck's home brewed </span>
    <span class="primary"> introduction to nix(os) </span>
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
  </main>
</section>

<section>
  <header>
    <span class="secondary"> sound good? </span>
    <span class="primary"> let's see how it works! </span>
  </header>
  <main>
    <p> When I first learned
  </main>
</section>

<section>
  <header>
    <span class="secondary"> a preliminary word about </span>
    <span class="primary"> the nix language </span>
  </header>
  <main>
    <p> The nix language is a functional, untyped, pure and simple language. <a href="https://medium.com/@MrJamesFisher/nix-by-example-a0063a1a4c55">The "Nix by example" blog post by James Fisher</a> is a good explanation of it.  Don't worry, it's quite simple, and if you already know a functional language you won't be out of your element. </p>
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
    <p> 'derivation' is one of the few nix language builtin functions. It takes a set, minimally containing a name, a builder and a system. 'name' and 'system' are values for book-keeping; 'builder' is where the action happens. It points to a program, and is expected to fill the $out path (passed as an environment variable) with information. </p>
    <p> </p>
  </main>
</section>

<?php include '/app/includes/post.php'; ?>
