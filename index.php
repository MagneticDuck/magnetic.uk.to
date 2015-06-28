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
          <span> work on nix-rice </span>
          <span class="small"> to the point of eventual usability </span>
        </a>
        <a class="btn" href="https://github.com/cobbpg/elerea"> 
          <span> learn elrea </span>
          <span class="small"> check out Helm </span>
        </a>
      </div>
      <div class="column"> 
        <a class="btn" href="https://github.com/MagneticDuck/altitude-mods"> 
          <span> work on 'flight club' </span>
          <span class="small"> to help bring life back to TBD altitude </span>
        </a>
        <a class="btn" href="http://www.amazon.com/Introduction-Topology-Modern-Analysis-Simmons/dp/1575242389">
          <span> do some math  </span>
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
