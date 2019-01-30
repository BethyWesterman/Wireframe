<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

 <script>
    $(document).ready(function(){
      $('.slider').bxSlider({
          speed: 1500,
          easing: 'ease-in-out',
          autoControls: true
      });
    });
</script>


<script>
    jQuery(document).ready(function() {
        jQuery(".nav-toggle").click(function() {
            jQuery(".main-navigation").toggle('5000', 'swing');
        });


        jQuery(window).resize(function() {
            if (jQuery(window).width() > 800) {
                jQuery(".main-navigation").css('display', "flex");
            } else {
                jQuery(".main-navigation").css('display', "none");
            }
        });
    });
</script>



<script>
Amplitude.init({
		"songs": [
			{
				"name": "Song Name 1",
				"artist": "Artist Name",
				"album": "Album Name",
				"url": "/song/url.mp3",
				"cover_art_url": "/cover/art/url.jpg",
		"made_up_key": "I'm made up completely"
			},
			{
				"name": "Song Name 2",
				"artist": "Artist Name",
				"album": "Album Name",
				"url": "/song/url.mp3",
				"cover_art_url": "/cover/art/url.jpg"
			},
			{
				"name": "Song Name 3",
				"artist": "Artist Name",
				"album": "Album Name",
				"url": "/song/url.mp3",
				"cover_art_url": "/cover/art/url.jpg"
			}
		]
	});

</script>

</body>

</html>