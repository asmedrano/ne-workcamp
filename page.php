<?php
/**
 * @package WordPress
 * @subpackage NE-Workcamp
 */

get_header(); ?>

<div id="main" role="main">
 <? // this section should really be included in smarter way than just adding it to every template ?>
  <div id="main-content-head">
  <img src="<?=$GLOBALS["TEMPLATE_RELATIVE_URL"]?>images/Perminent-Photos-wc.jpg" />
  </div>
  <? // end of should be include ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post dashed-top-border" id="post-<?php the_ID(); ?>">
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
