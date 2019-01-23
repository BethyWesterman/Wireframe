<?php include 'header.php' ?>


<h2>Parks page</h2>



<div class="site">

    <div class="site-content">

        <div class="primary">




            <div class="parks-container">
                <div class="park-list-container">
                    <ul class="park-list">
                        <li><a href="#1">Disneyland</a></li>
                        <li><a href="#2">Disney's Californian Adventure</a></li>
                        <li><a href="#3">Magic Kingdom</a></li>
                        <li><a href="#4">Epcot</a></li>
                        <li><a href="#5">Hollywood Studios</a></li>
                        <li><a href="">Animal Kingdom</a></li>
                        <li><a href="">Typhoon Lagoon</a></li>
                        <li><a href="">Blizzard Beach</a></li>
                        <li><a href="">Disneyland Paris</a></li>
                        <li><a href="">OTHER DISNEY PARIS PARK</a></li>
                        <li><a href="">Disneyland Hong Kong</a></li>
                        <li><a href="">Disneyland Tokyo</a></li>
                        <li><a href="">Disneyland Shang Hai</a></li>
                    </ul>
            </div>
            <!--side-bar-->

<div class="single-park-container section" id="1">
    <img src="img/Cinderellacastleblackandwhite.jpg" alt="">
    <h2>DisneyLand</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores culpa soluta mollitia rem veniam ex, vel ipsam, qui. Quas, fugit, atque. Laboriosam tenetur omnis iure nesciunt earum eaque enim dolores.50</p>
</div>
<div class="single-park-container section" id="2">
    <img src="img/Cinderellacastleblackandwhite.jpg" alt="">
    <h2>Californian</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores culpa soluta mollitia rem veniam ex, vel ipsam, qui. Quas, fugit, atque. Laboriosam tenetur omnis iure nesciunt earum eaque enim dolores.50</p>
</div>
<div class="single-park-container section" id="3">
    <img src="img/Cinderellacastleblackandwhite.jpg" alt="">
    <h2>Magic</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores culpa soluta mollitia rem veniam ex, vel ipsam, qui. Quas, fugit, atque. Laboriosam tenetur omnis iure nesciunt earum eaque enim dolores.50</p>
</div>
<div class="single-park-container section" id="4">
    <img src="img/Cinderellacastleblackandwhite.jpg" alt="">
    <h2>park name</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores culpa soluta mollitia rem veniam ex, vel ipsam, qui. Quas, fugit, atque. Laboriosam tenetur omnis iure nesciunt earum eaque enim dolores.50</p>
</div>
<div class="single-park-container" id="5">
    <img src="img/Cinderellacastleblackandwhite.jpg" alt="">
    <h2>park name</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores culpa soluta mollitia rem veniam ex, vel ipsam, qui. Quas, fugit, atque. Laboriosam tenetur omnis iure nesciunt earum eaque enim dolores.50</p>
</div>



        </div>
        <!-- parks container ends !-->




    </div>
    <!-- primary ends !-->




</div>
<!-- site content ends !-->

</div>
<!-- site ends !-->



<script>
    //smooth scrolling
    //TODO: add offset to the top when scrolling
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>


<script>
    //this is scrollspy and doesnt work
(function() {
  'use strict';

  var section = document.querySelectorAll(".section");
  var sections = {};
  var i = 0;

  Array.prototype.forEach.call(section, function(e) {
    sections[e.id] = e.offsetTop;
  });

  window.onscroll = function() {
    var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

    for (i in sections) {
      if (sections[i] <= scrollPosition) {
        document.querySelector('.active').setAttribute('class', ' ');
        document.querySelector('a[href*=' + i + ']').setAttribute('class', 'active');
      }
    }
  };
})();
</script>

<style>
    /*this is the style for scrollspy*/
    .active {
        background-color: aquamarine;
    }
</style>


<?php include 'footer.php' ?>