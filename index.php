<?php
  $page_title = 'home';
  $page_btn = 'home-btn';
  $page_cmd = 'cat /etc/motd';
  include 'includes/pre.php';
?>

<section>
  <header>
    <span class="primary"> $ whoami </span>
  </header>
  <main>
    <p> My actual name is Chris Gadzinski, but I go by magneticDuck on the interwebs. I'm 17 and currently living in Coimbra, Portugal. When I'm not schooling at school, practicing rowing or doing .. other things, I'm probably doing esoteric stuff with computers and math. </p>
    <p class="important">
      <span class="secondary"> it's become increasingly evident to me that </span>
      <span class="primary"> cross-cutting mutable state is the way of the past! </span>
    </p>
  </main>
</section>
<section>
  <header>
    <span class="primary"> todo list </span>
    <span class="secondary"> "todo"? perhaps more accurately, "do too". </span>
  </header>
  <main>
    <div class="wrapper-2">
      <div class="column"> 
        <a class="btn" href="http://www.github.com/magneticduck/nix-rice"> 
          <span> get cracking on that nix-rice idea </span>
          <span class="small"> currently in progress </span>
        </a>
        <a class="btn" href="blag/nix1.php"> 
          <span> write a big-picture nix tutorial, with flowcharts </span>
        </a>
      </div>
      <div class="column"> 
        <a class="btn" href="http://renoise.com"> 
          <span> make some packages at home on nixos </span>
          <span class="small"> submit some pull requests to nixpkgs! </span>
        </a>
      </div>
    </div>  
  </main>
</section>

<section>
  <header>
    <span class="primary"> flowchart of myself </span>
  </header>
  <main>
    <p> It's hard to put even a fraction of the things that surround me and have led me to where I am now into a flowchart, but here's a half-assed attempt at it! </p>
    <img class="big" src="/images/global.png"/>
  </main>
</section>

<?php include 'includes/post.php' ?>
