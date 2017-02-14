<?php
  get_header();
  the_post();

  // get post ID
  $pid = get_the_ID();

  // custom fields
  $enable_video = get_post_meta( $pid, 'enable_video', true );
  $video_embed_code = get_post_meta( $pid, 'video_embed_code', true );
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
        <h1 class="page__title page__title--post"><?php echo get_the_title(); ?></h1>
        <div class="page__meta">
          Posted: <time><?php echo get_the_date(); ?></time>
        </div>
        <div class="page__content wysiwyg">
          <?php the_content(); ?>
        </div>
        <?php if ($enable_video): ?>
          <div class="page__video">
            <div class="flex-video">
              <?php echo $video_embed_code; ?>
            </div>
          </div>
        <?php endif; ?>

        <div class="page__comments">
          <?php comments_template(); ?>
        </div>
      </div>
      <div class="col-xs-24 col-lg-3 first-lg">
        <div class="page-sidebar">
          <h4 class="page-sidebar__parent">Categories</h4>
          <?php echo get_the_category_list(); ?>
        </div>
      </div>
    </div>
  </section>
</article>

<?php get_footer(); ?>
