<?php
  $page_title = 'music';
  $page_btn = 'music-btn';
  $page_cmd = 'ffplay *';
  include 'includes/pre.php';
?>

<section>
  <header>
    <span class="primary"> music is a thing I do! </span>
    <span class="secondary"> apparently, it's really hard and takes a lot of time </span>
  </header>
  <main>

  <p> Here are some places on the internet where you can hear music I make. </p>

  <div class="wrapper-2">
    <div class="column">
      <a class="row btn" href="https://soundcloud.com/magneticduck/sets/favourites-1"> 
        <span> things on soundcloud </span>
        <span class="small"> where I post stuff I make when I make it </span>
      </a>
    </div>
    <div class="column">
      <a class="row btn" href="http://magneticduck.bandcamp.com"> 
        <span> bandcamp </span>
        <span class="small"> where I post stuff when <span style="text-decoration:line-through; display:inline;"> I finish it</span> I'm tired of making it better </span>
      </a>
    </div>
  </div>
  </main>
</section>

<section>
  <header>
    <span class="secondary"> I just released my first </span>
    <span class="primary"> silly little EP </span>
  </header>
  <main>
    <p> I would love to know what you think of it! </p>
    <div>
      <iframe style="display: block; margin: auto; border: 0; width: 350px; height: 470px;" src="https://bandcamp.com/EmbeddedPlayer/album=2425434919/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/transparent=true/" seamless><a href="http://magneticduck.bandcamp.com/album/album-0">Album 0 by magneticDuck</a></iframe>
    </div>
  </main>
</section>


<?php include 'includes/post.php' ?>

