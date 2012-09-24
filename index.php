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
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article class="post dashed-top-border" id="post-<?php the_ID(); ?>">
          <h2 class="title"><a class="font-blue" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	  <div class="meta font-blue">
	  <span class="categories"><?php the_category(', ') ?></span> | 
          <span class="location"><?php echo(get_post_meta($post->ID,"Location", true)); ?> |
          <span class="date"><?php the_time('m.d.y') ?></span>
	  </div>
	<div class="content">
        	<?php the_content('... Read the rest'); ?>
	</div>
	<footer>
	  <div class="social">
          <span class="comments-link"> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> </span>
		
	  <div class="post-share">
	  Share: <a href="#" class="tweet-btn">Twitter</a> | <a href="#" class="facebook-btn">Facebook</a>
          </div><!--end shared-->
	</div>
        </footer>
      </article>

    <?php endwhile; ?>

    <nav>
      <div><?php next_posts_link('&laquo; Older Entries') ?></div>
      <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </nav>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


