<?php get_header(); ?>
<main>
  <section class="hero">
    <h1>Welcome to My Custom Theme</h1>
    <p>This content is loaded from front-page.php</p>
  </section>
  
  <section class="testimonials">
    <h2>Testimonials</h2>
    <?php
    $args = ['post_type' => 'testimonial', 'posts_per_page' => 3];
    $testimonials = new WP_Query($args);
    while($testimonials->have_posts()) : $testimonials->the_post();
        get_template_part('template-parts/content', 'testimonial');
    endwhile;
    wp_reset_postdata();
    ?>
  </section>
</main>
<?php get_footer(); ?>
