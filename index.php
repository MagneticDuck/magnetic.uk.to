<?php
  $page_title = 'home';
  $page_btn = 'home-btn';
  $page_cmd = 'cat /etc/motd';
  include 'includes/pre.php';
?>

<section>
  <header>
    <span class="primary"> whoami </span>
  </header>
  <main>
    <p> My actual name is Chris Gadzinski, but I go by magneticDuck on the interwebs. I'm 17 and currently living in Coimbra, Portugal. Welcome to my site. </p>
    <p class="important">
      <span class="secondary"> the most important choice we will ever make </span>
      <span class="primary"> is between that which is easy and that which is hard </span>
    </p>
  </main>
</section>

<section>
  <header>
    <span class="primary"> things I make happen</span>
  </header>
  <main>
    <div class="wrapper-2">
      <div class="column"> 
        <a class="btn" href="https://github.com/MagneticDuck/altitude-mods"> 
          <span> flight club  </span>
          <span class="small"> the thing that keeps altitude alive outside of ladder </span>
        </a>
        <a class="btn" href="https://github.com/magneticduck/nix-rice"> 
          <span> the much reknown </span>
          <span class="small"> nix-rice </span>
        </a>
      </div>
      <div class="column"> 
        <a class="btn" href="http://www.github.com/solemnsky/solemnsky.github.io"> 
					<div style="padding-top: 30px; padding-bottom: 30px">
						<span class="small"> the mysterious </span>
						<span> SolemnSky project </span>
					</div>
        </a>
      </div>
    </div>  
  </main>
</section>

<section>
  <header>
    <span class="primary"> a flowchart </span>
		<span class="secondary"> ... :) </span>
  </header>
  <main>
    <img class="big" src="/images/global.png"/>
  </main>
</section>

<?php include 'includes/post.php' ?>
