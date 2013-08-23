<?php
/*
Template Name: homepage
*/

get_header(); ?>
<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
<div id="content" class="widecolumn">
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<div class="post">
		<!--<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>-->
		<div class="entrytext">
			<?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
<h2>Recent Posts</h2>
<p>from the <a href="http://cmdann.ca/blog/">blog</a>.</p>
<br />
<?php get_template_part( 'loop', 'page' ); ?>
<?php $temp_query = $wp_query; ?>  
<?php query_posts('category_name=&showposts=5'); ?>  
<div id="recentPostsHome">
	<?php while (have_posts()) : the_post(); ?>  
	
	<div id="post-<?php the_ID(); ?>">  
		<h2><a href="<?php the_permalink() ?>" rel="bookmark"
			title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<p><strong><?php the_date(); ?></strong></p>

			<div class="entry-summary">
				<?php the_excerpt(); ?> 
			</div>
			<br />
		</div>  

	<?php endwhile; ?>
</div>
</div>
<div style="width: 100%; margin-top: 20px; clear: both;"><p> </p></div>
<script type="text/javascript">
document.getElementsByClassName(sharedaddy).style.display = "none !important";
</script> 
<?php get_footer(); ?>