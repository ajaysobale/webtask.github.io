<article class="testimonial">
  <h3><?php the_title(); ?></h3>
  <div><?php the_content(); ?></div>
  <?php if (has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" loading="lazy">
  <?php endif; ?>
</article>
