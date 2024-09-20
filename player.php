<link rel="icon" href="drive-logo.png">
<style>
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}

.plyr  {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /*object-fit: cover;
  z-index: -1;*/
}
</style>
<title>DrivePlyr - Google Drive Proxy Video Player with Many Powerful HTML5 Players</title>
    
<!-- Meta Tags for SEO -->
<meta name="description" content="DrivePlyr is a Google Drive Proxy Video Player with Many Powerful HTML5 Players, Hidden ID, and Many Features. Play your videos from Google Drive with ease.">
<meta name="keywords" content="DrivePlyr, Google Drive, Proxy, Video Player, HTML5 Player, Hidden ID, Features">
<meta name="author" content="SH20RAJ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://sh20raj.github.io/DrivePlyr/">
<meta property="og:title" content="DrivePlyr - Google Drive Proxy Video Player with Many Powerful HTML5 Players">
<meta property="og:description" content="DrivePlyr is a Google Drive Proxy Video Player with Many Powerful HTML5 Players, Hidden ID, and Many Features. Play your videos from Google Drive with ease.">
<meta property="og:image" content="https://sh20raj.github.io/DrivePlyr/drive-logo.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://sh20raj.github.io/DrivePlyr/">
<meta property="twitter:title" content="DrivePlyr - Google Drive Proxy Video Player with Many Powerful HTML5 Players">
<meta property="twitter:description" content="DrivePlyr is a Google Drive Proxy Video Player with Many Powerful HTML5 Players, Hidden ID, and Many Features. Play your videos from Google Drive with ease.">
<meta property="twitter:image" content="https://sh20raj.github.io/DrivePlyr/drive-logo.png">

<!-- Other Meta Tags -->
<link rel="icon" href="https://raw.githubusercontent.com/SH20RAJ/DrivePlyr/main/drive-logo.png">
<meta name="theme-color" content="#ffffff">
<meta name="robots" content="index, follow">


<!-- Docs styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.css" />

<!--Add a Simple HTML5 Video tag-->
<div id="container">
  <video controls poster="https://bit.ly/bbsampleposter" id="vid1">
    <!-- Video files -->
    <source src="https://rebrand.ly/sample-video" type="video/mp4" size="576" />

  </video>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.7/plyr.min.js"></script>

<script>
  var controls =
[
    'play-large', // The large play button in the center
   // 'restart', // Restart playback
   // 'rewind', // Rewind by the seek time (default 10 seconds)
    'play', // Play/pause playback
    'fast-forward', // Fast forward by the seek time (default 10 seconds)
    'progress', // The progress bar and scrubber for playback and buffering
    'current-time', // The current time of playback
    'duration', // The full duration of the media
    'mute', // Toggle mute
    'volume', // Volume control
    'captions', // Toggle captions
    'settings', // Settings menu
    'pip', // Picture-in-picture (currently Safari only)
    'airplay', // Airplay (currently Safari only)
    //'download', // Show a download button with a link to either the current source or a custom URL you specify in your options
    'fullscreen' // Toggle fullscreen
];

  const player = new Plyr('#vid1',{controls});
</script>

<style>
  :root {
  --plyr-color-main: #5776ff;
    --plyr-video-control-color  :#e8ffba;
}

</style>

<script>
  var apikey = ['AIzaSyCt3DULzE2trDJhfFUosWZT-3GEObbMqVU', 'AIzaSyCsbx8BSyLwkw6XX6Lg5OF1U0HNtI9VmCY', 'AIzaSyBLMJAT6oqTZxAMsCsMjXzoo4lkJL4MmfM', 'AIzaSyCIY6fomcJxOt0XQ_naa1rzfd5wlOMGKDY'][Math.floor(Math.random() * 4)];
 console.log(apikey);
   //apikey = 'AIzaSyD739-eb6NzS_KbVJq1K8ZAxnrMfkIqPyw';
  function getparam(a,e){return e||(e=window.location.href),new URL(e).searchParams.get(a)}

  let video = document.getElementById('vid1');
  if(getparam('id')){
    let json = JSON.parse(atob(getparam('id'))) ;
    let driveid = json.id;
    video.src = `https://www.googleapis.com/drive/v3/files/${driveid }?alt=media&key=${apikey}`;
    video.poster = 'https://lh3.googleusercontent.com/d/'+driveid;
  }
</script>


<!-- Go to www.addthis.com/dashboard to customize your tools 
https://pubgvideox.blogspot.com/
--> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6335ced4a8ebd2f2"></script>
<img style="display: none;" src="https://iplogger.com/VideoPlyr">
<script src="tracker.js"></script>