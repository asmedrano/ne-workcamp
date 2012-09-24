<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

 <h2 class="title font-blue"><?php the_title(); ?></a></h2>
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
                
          <div class="post-share">
          Share: <a href="#" class="tweet-btn">Twitter</a> | <a href="#" class="facebook-btn">Facebook</a>
          </div><!--end shared-->
        </div>
<?php if ( comments_open() && pings_open() ) {
        // Both Comments and Pings are open ?>

      <?php } elseif ( !comments_open() && pings_open() ) {
        // Only Pings are Open ?>
        Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

      <?php } elseif ( comments_open() && !pings_open() ) {
        // Comments are open, Pings are not ?>
        You can skip to the end and leave a response. Pinging is currently not allowed.

      <?php } elseif ( !comments_open() && !pings_open() ) {
        // Neither Comments, nor Pings are open ?>
        Both comments and pings are currently closed.

      <?php } ?>
      </p>
    </footer>

    <?php comments_template(); ?>

  </article>

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>
<?php get_sidebar();?>
<?php get_footer(); ?>
