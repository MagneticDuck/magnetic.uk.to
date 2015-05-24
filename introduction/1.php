<?php
  $page_title = 'nixos';
  $page_btn = '';
  $page_cmd = 'man nix';
  $index = 0;
  include '/app/includes/pre.php';
?>

<section>
  <main>
    <p> The nix language is a functional, untyped, pure and simple language. <a href=https://medium.com/@MrJamesFisher/nix-by-example-a0063a1a4c55">The "Nix by example" blog post by James Fisher</a> is a good explanation of it.  Don't worry, it's quite simple, and if you already know a functional language you won't be out of your element. </p>
    <p class="important">
      <span class="primary"> It's not necessary that you understand the it for this tutorial! </span>
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
    <p> Let's walk through the way that an expression in the nix language ends up causing a file to be made in a strange place called the nix store. First things first, let's check out our nix expression! </p>
    <p class="code">
derivation {
  wait, I still haven't written this part!   
}
    </p>
  </main>
</section>

<?php include '/app/includes/post.php'; ?>
