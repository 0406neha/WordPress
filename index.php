

<?php get_header(); ?>

<div class="page-banner">
      <div
        class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/marvel.jpg')?>)"
      ></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">
          We think you&rsquo;ll like it here.
        </h2>
        <h3 class="headline headline--small">
        XPLORE THE UNIVERSE! - Dive into the dazzling domain of all the classic characters you love - and those you&rsquo;ll soon discover!
        </h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Madness</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">
            Upcoming Events
          </h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
         
              <span class="event-summary__day">01</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">
                <a href="#">MOVIES</a>
              </h5>
              <p>
              Journey into the cosmic depths of the mighty Marvel Cinematic Universe!
                <a href="#" class="nu gray">Learn more</a>
              </p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
        
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">
                <a href="#">MARVEL MUSIC PLAYLIST</a>
              </h5>
              <p>
                Live music, a taco truck and more can found in our third annual
                quad picnic day. <a href="#" class="nu gray">Learn more</a>
              </p>
            </div>
          </div>

          <p class="t-center no-margin">
            <a href="#" class="btn btn--blue">View All Events</a>
          </p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Marvel Insider</h2>

          <div class="event-summary">
            <a
              class="event-summary__date event-summary__date--beige t-center"
              href="#"
            >

              <span class="event-summary__day">01</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">
                <a href="#">AN <em>INSIDER</em></a>
              </h5>
              <p>
               Marvel Insider Loyalty Rewards Program gives you the permit to become an insider.
                <a href="#" class="nu gray">Terms of Use</a>
              </p>
            </div>
          </div>
          <div class="event-summary">
            <a
              class="event-summary__date event-summary__date--beige t-center"
              href="#"
            >

              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">
                <a href="#">Marvel HQ</a>
              </h5>
              <p>
              Packed with activities, videos, books, comics and more, featuring your favorite Marvel characters!
                <a href="#" class="nu gray">Read more</a>
              </p>
            </div>
          </div>

          <p class="t-center no-margin">
            <a href="#" class="btn btn--yellow">Become An Insider</a>
          </p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div
            class="hero-slider__slide"
            style="background-image: url(<?php echo get_theme_file_uri('images/im2.jpg')?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">
              Iron Man
                </h2>
                <p class="t-center">
               
            Genius. Billionaire. Philanthropist. 
                </p>
                <p class="t-center no-margin">
                  <a href="#" class="btn btn--blue">Learn more</a>
                </p>
              </div>
            </div>
          </div>
          <div
            class="hero-slider__slide"
            style="background-image: url(<?php echo get_theme_file_uri('images/ms-marvel.jpg')?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">
             Ms. Marvel
                </h2>
                <p class="t-center">
                Kamala KhanMs. Marvel. 
                </p>
                <p class="t-center no-margin">
                  <a href="#" class="btn btn--blue">Learn more</a>
                </p>
              </div>
            </div>
          </div>
          <div
            class="hero-slider__slide"
            style="background-image: url(<?php echo get_theme_file_uri('images/black-panther.jpg')?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Black Panther</h2>
                <p class="t-center">
                Black Panther: Wakanda Forever 
                </p>
                <p class="t-center no-margin">
                  <a href="#" class="btn btn--blue">Learn more</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="slider__bullets glide__bullets"
          data-glide-el="controls[nav]"
        ></div>
      </div>
    </div>
  
 <?php get_footer(); ?>
  ?>
