<?php
  /*
  Template Name: Home
  */

  get_header();

  // get post ID
  $pid = get_the_ID();

  // fields
  $intro_heading = get_post_meta( $pid, 'home_intro_heading', true );
  $intro_newsletter = get_post_meta( $pid, 'home_newsletter_description', true );
?>

<article class="landing-home">
  <section class="block-intro">
    <div class="block-intro__backdrop">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner/banner-home.jpg" alt="">
    </div>
    <div class="block-intro__content">
      <div class="container-gr">
        <div class="row between-md">
          <?php if (!empty($intro_heading)): ?>
            <div class="col-xs-24 col-md-12">
              <h2 class="block-intro__heading">
                <?php echo nl2br($intro_heading); ?>
              </h2>
            </div>
          <?php endif; ?>
            <div class="col-xs-24 col-md-12 col-lg-11" id="home-signup">
              <form class="block-intro__form" action="https://api.justicedemocrats.com/people" method="post" onsubmit="return trackSignup();">
                <p class="block-intro__form-description">
                  <?php echo nl2br($intro_newsletter); ?>
                </p>
                <div class="block-intro__form-fieldset">
                  <input type="hidden" name="source" value="justicedemocrats">
                  <input type="hidden" name="redirect" value="https://secure.actblue.com/contribute/page/jdsignup">
                  <input type="hidden" name="utmSource">
                  <input type="hidden" name="utmMedium">
                  <input type="hidden" name="utmCampaign">
                  <input type="email" name="email" value="" placeholder="Email" pattern='(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)' title="Must enter a valid e-mail address" required>
                  <input type="num" name="zip" value=""placeholder="Zip" required>
                  <button type="submit" name="" class="button button--large button--full button--yellow">Sign me up</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section class="block-landing">
    <div class="container-gr">
      <div class="row between-lg">
        <?php

        // check if the flexible content field has rows of data
        if( have_rows('sections') ):

          $is_left = true;
          $left_buff = "";
          $right_buff = "";

          // loop through the rows of data
          while ( have_rows('sections') ) : the_row();

            ob_start();

            // check current row layout
            switch( get_row_layout() ){

              case 'general_content': 
                ?>

                <div class="block-landing__post">

                  <div class="block-landing__post-preview wysiwyg">
                    <?php the_sub_field('content'); ?>
                  </div>

                  <div class="row middle-xs between-xs">
                    <?php
                    $post_link = get_sub_field('learn_more_link');
                    if (!empty($post_link)):
                      ?>
                      <div class="col-sm-reset">
                        <a href="<?php echo $post_link; ?>" class="button">Learn More</a>
                      </div>
                      <?php
                    endif;
                    
                    $post_date = get_sub_field('date');
                    if (!empty($post_date)):
                      ?>
                      <div class="col-sm-reset">
                        <time class="block-landing__post-time"><?php echo $post_date; ?></time>
                      </div>
                      <?php
                    endif;
                    ?>
                  </div>

                </div>

                <?php
              break;
              case 'act_now':
                ?>

                <div class="block-landing__post">
                  <h2 class="heading-section">Act Now</h2>
                  <div class="block-landing__post-preview wysiwyg">
                    <div class="act-now">
                      <?php the_sub_field('content'); ?>
                    </div>
                  </div>                  
                </div>

                <?php
              break;

              case 'video': 
                $post_video = get_sub_field('video_embed_code');
                ?>

                <div class="block-landing__post">
                  <div class="block-landing__post-video">
                    <div class="flex-video">
                      <?php echo $post_video; ?>
                    </div>
                  </div>
                </div>

                <?php
              break;

              case 'shortcode': 

                $shortcode = get_sub_field('shortcode');
                
                echo '<div class="block-landing__post-preview wysiwyg">';
                echo do_shortcode($shortcode);
                echo '</div>';

              break;

              case 'poll': 
                $poll_id = get_sub_field('poll_id');
                get_poll($poll_id);
              break;

            }

            if($is_left)
              $left_buff .= ob_get_contents();
            else
              $right_buff .= ob_get_contents();

            $is_left = !$is_left;
            ob_end_clean();

          endwhile;

        endif;

        ?>


        <div class="col-xs-24 col-lg-11">
          <?php echo $left_buff ?>
        </div>
        <div class="col-xs-24 col-lg-11">
          <?php echo $right_buff ?>
        </div>
      </div>
    </div>
  </section>

  <section class="comp-content">
    <div class="container-gr">
      <header class="comp-picture-header" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/images/header/american-flag.jpg')">
        <h1>F.A.Q.</h1>
      </header>
      <div class="row between-sm">
        <div class="col-xs-24 col-md-7 col-lg-6">
          <h3 class="aside-heading">Quick Links</h3>
          <p class="aside-heading-sub">About Justice Democrats</p>
          <ul class="aside-list">
            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a></li>
            <li><a href="#">Nam ac lectus nibh. Maecenas a mollis neque, ut ornare tortor Ut nec nisl est?</a></li>
            <li><a href="#">Fusce ipsum lacus, vehicula porta ex eget?</a></li>
            <li><a href="#">Ornare dapibus nibh nibh ut est?</a></li>
          </ul>
          <p class="aside-heading-sub">About The Candidates</p>
          <ul class="aside-list">
            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a></li>
            <li><a href="#">Nam ac lectus nibh. Maecenas a mollis neque, ut ornare tortor Ut nec nisl est?</a></li>
            <li><a href="#">Fusce ipsum lacus, vehicula porta ex eget?</a></li>
            <li><a href="#">Ornare dapibus nibh nibh ut est?</a></li>
          </ul>
        </div>
        <div class="col-xs-24 col-md-16">
          <h2 class="content-heading">About Justice Democrats</h2>
          <dl class="comp-faq">
            <dt>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</dt>
            <dd>Donec efficitur ipsum non bibendum lacinia. Vivamus dignissim diam sed dolor vulputate ultrices. Suspendisse id massa vitae lectus viverra efficitur id nec orci. Morbi volutpat aliquet sapien eget pharetra. Etiam nec viverra nunc, eget tincidunt dui. Suspendisse sapien orci, hendrerit a lorem eu, dictum vulputate purus. Proin condimentum purus nec lorem hendrerit, eu scelerisque purus sollicitudin. </dd>

            <dt>Nam ac lectus nibh. Maecenas a mollis neque, ut ornare tortor Ut nec nisl est?</dt>
            <dd>Suspendisse sapien orci, hendrerit a lorem eu, dictum vulputate purus. Proin condimentum purus nec lorem hendrerit, eu scelerisque purus sollicitudin. Nam ac lectus nibh. Maecenas a mollis neque, ut ornare tortor. Ut nec nisl est. Duis porttitor dolor et cursus tincidunt. Praesent tempor lacus semper, finibus urna ac, mollis orci. Etiam maximus, tortor ac viverra iaculis, nulla eros facilisis lectus, vel tempus quam nunc ornare diam. Morbi congue risus eu nulla interdum, ut bibendum libero venenatis. Suspendisse ut erat quis tellus viverra rutrum.</dd>

            <dt>Fusce ipsum lacus, vehicula porta ex eget?</dt>
            <dd>Aenean in malesuada erat, vel iaculis magna. Suspendisse auctor ligula et sem porttitor, in gravida nisl vestibulum. Integer ac sollicitudin augue. Proin pulvinar ligula et gravida pharetra. </dd>
            
            <dt>Ornare dapibus nibh nibh ut est?</dt>
            <dd>Phasellus elit dui, sagittis dictum turpis ac, luctus pulvinar odio. Maecenas congue maximus mauris at congue. Nunc eget rutrum mauris. Pellentesque vestibulum nisi pretium lorem pretium lacinia. Curabitur blandit tellus neque, non vehicula velit cursus a. Maecenas tellus lacus, tincidunt a leo vel, commodo facilisis elit. Nam id sapien sed lacus blandit mollis sit amet a tellus. Curabitur volutpat egestas lorem, facilisis sodales neque ullamcorper ac. Etiam faucibus tortor et eros tristique, id dictum nibh tincidunt.</dd>
          </dl>

          <h2 class="content-heading">About The Candidates</h2>
          <dl class="comp-faq">
            <dt>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</dt>
            <dd>Donec efficitur ipsum non bibendum lacinia. Vivamus dignissim diam sed dolor vulputate ultrices. Suspendisse id massa vitae lectus viverra efficitur id nec orci. Morbi volutpat aliquet sapien eget pharetra. Etiam nec viverra nunc, eget tincidunt dui. Suspendisse sapien orci, hendrerit a lorem eu, dictum vulputate purus. Proin condimentum purus nec lorem hendrerit, eu scelerisque purus sollicitudin. </dd>

            <dt>Nam ac lectus nibh. Maecenas a mollis neque, ut ornare tortor Ut nec nisl est?</dt>
            <dd>Suspendisse sapien orci, hendrerit a lorem eu, dictum vulputate purus. Proin condimentum purus nec lorem hendrerit, eu scelerisque purus sollicitudin. Nam ac lectus nibh. Maecenas a mollis neque, ut ornare tortor. Ut nec nisl est. Duis porttitor dolor et cursus tincidunt. Praesent tempor lacus semper, finibus urna ac, mollis orci. Etiam maximus, tortor ac viverra iaculis, nulla eros facilisis lectus, vel tempus quam nunc ornare diam. Morbi congue risus eu nulla interdum, ut bibendum libero venenatis. Suspendisse ut erat quis tellus viverra rutrum.</dd>

            <dt>Fusce ipsum lacus, vehicula porta ex eget?</dt>
            <dd>Aenean in malesuada erat, vel iaculis magna. Suspendisse auctor ligula et sem porttitor, in gravida nisl vestibulum. Integer ac sollicitudin augue. Proin pulvinar ligula et gravida pharetra. </dd>
            
            <dt>Ornare dapibus nibh nibh ut est?</dt>
            <dd>Phasellus elit dui, sagittis dictum turpis ac, luctus pulvinar odio. Maecenas congue maximus mauris at congue. Nunc eget rutrum mauris. Pellentesque vestibulum nisi pretium lorem pretium lacinia. Curabitur blandit tellus neque, non vehicula velit cursus a. Maecenas tellus lacus, tincidunt a leo vel, commodo facilisis elit. Nam id sapien sed lacus blandit mollis sit amet a tellus. Curabitur volutpat egestas lorem, facilisis sodales neque ullamcorper ac. Etiam faucibus tortor et eros tristique, id dictum nibh tincidunt.</dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

</article>

<?php get_footer(); ?>
