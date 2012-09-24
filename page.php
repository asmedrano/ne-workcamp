<?php
/**
 * @package WordPress
 * @subpackage NE-Workcamp
 */

get_header(); ?>

<div id="main" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
    <header>
      <h2 class="title font-blue"> <?php the_title(); ?></h2>
    </header>
     <div class="content">
       <?php the_content('... Read the rest'); ?>
    </div>
 
  </article>
  <?php endwhile; endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
