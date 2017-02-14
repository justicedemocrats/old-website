<?php
  /*
  Template Name: Poll
  */

  get_header();
  the_post();

  // get post ID
  $pid = get_the_ID();
?>

<?php if (get_post_thumbnail_id()): ?>
  <div class="comp-backdrop">
    <?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'full', '0', array('class' => '') ); ?>
  </div>
<?php endif; ?>

<article class="landing-page">
  <section class="container-gr">
    <div class="row">
      <div class="col-xs-24 col-lg-auto">
        <h1 class="page__title"><?php echo get_the_title(); ?></h1>

        <div class="page__content wysiwyg">
          <?php the_content(); ?>
        </div>

        <div class="page__poll">
          <?php get_poll();?>
        </div>

        <div class="page__comments">
          <?php comments_template(); ?>
        </div>
      </div>
    </div>
  </section>
</article>

<?php get_footer(); ?>
