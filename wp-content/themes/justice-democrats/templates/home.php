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
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner/banner-home.jpg" alt="Two young apprentice mechanics repairing an engine in a garage.">
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

  <?php
  if(get_field('display_faq_section')):
    ?>
    <section class="comp-content">
      <div class="container-gr">
        <header class="comp-picture-header" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/assets/images/header/american-flag.jpg')">
          <h1>F.A.Q.</h1>
        </header>
        <div class="row between-sm">
          <div class="col-xs-24 col-md-7 col-lg-6">
            <h3 class="aside-heading">Quick Links</h3>
            <?php
            $quick_links = get_field('quick_links');
            foreach($quick_links as $section):
              ?>
              <p class="aside-heading-sub"><?php echo $section['section_title'] ?></p>
              <ul class="aside-list">
                <?php
                foreach($section['links'] as $link)
                  echo '<li><a href="' . $link['link_url'] . '">' . $link['link_label'] . '</a></li>';
                ?>
              </ul>
              <?php
            endforeach;
            ?>
          </div>
          <div class="col-xs-24 col-md-16">
            <?php
            $faq_sections = get_field('faq_sections');
            foreach($faq_sections as $section):
              ?>
              <h2 class="content-heading"><?php echo $section['section_title'] ?></h2>
              <dl class="comp-faq">
                <?php
                foreach($section['questions'] as $question){
                  echo '<dt>' . $question['question'] . '</dt>';
                  echo '<dd>' . $question['answer'] . '</dd>';
                }
                ?>
              </dl>
              <?php
            endforeach;
            ?>
          </div>
        </div>
      </div>
    </section>
    <?php
  endif;
  ?>

</article>

<?php get_footer(); ?>
