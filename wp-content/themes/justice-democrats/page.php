<?php
  get_header();
  the_post();

  // get post ID
  $pid = get_the_ID();

  // enable sidebar
  $enable_sidebar = get_post_meta( $pid, 'enable_sidebar', true );
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
      </div>
      <?php if (!empty($enable_sidebar)): ?>
        <div class="col-xs-24 col-lg-6 first-lg">
          <div class="page-sidebar">
            <?php if ($post->post_parent): ?>
              <h4 class="page-sidebar__parent"><?php echo get_the_title($post->post_parent); ?></h4>
              <ul class="page-sidebar__siblings">
                <?php echo wp_list_pages('title_li=&child_of='.$post->post_parent); ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
</article>

<?php get_footer(); ?>
