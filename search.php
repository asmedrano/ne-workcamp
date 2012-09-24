<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="blog-wrap"> 
  <?php if (have_posts()) : ?>
	
    <h2 id="search-ttl">Search Results</h2>

    <?php while (have_posts()) : the_post(); ?>
	    <div class="post result">

            <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <div class = "meta">
                <span class="category"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span> |
                <span class="location"><?php echo(get_post_meta($post->ID,"Location", true)); ?>
                </span> |
                <span class="post-date">
                    <?php the_time('F j, Y'); ?>
                </span>
            </div>

            <div class="post-content">
            <?php the_content(__('Read more'));?>

            </div><!--end post-content-->

            <div class="post-social">

            <p>Posted in: <a href=""><?php the_category(', ') ?></a> | <a href="#"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></a></p>

            </div><!--end post-social-->
    


	</div><!--end post-->


    <?php endwhile; ?>

  <?php else : ?>

    <h2 id="search-ttl">No posts found. Try a different search?</h2>
	<div id="no-search-results">
    <?php get_search_form(); ?>
	</div>

  <?php endif; ?>
</div> <!--end blog-wrap-->

	<?php get_sidebar();?>

	<div class="clearfix"></div>

<?php get_footer(); ?>
