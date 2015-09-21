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
    <p> My actual name is Chris Gadzinski; I go by Magnetic Duck on the interwebs. I'm 17 and currently living in Coimbra, Portugal. Welcome to my site. </p>
    <p class="important">
      <span class="primary">  It is unproductive to defend to others </span>
      <br>
      <span class="primary">  what you have never defended to yourself. </span>
      <span class="secondary"> -Me </span>
    </p>
  </main>
</section>

<section>
  <header>
    <span class="primary"> I'm not entirely sure what to put on this page </span>
		<span class="secondary"> so here's a flowchart I made a certain time ago </span>
  </header>
  <main>
    <img class="big" src="/images/global.png"/>
  </main>
</section>

<?php include 'includes/post.php' ?>
