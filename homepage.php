<!-- 
Copyright 2013 Daniel Blair

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
-->
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
			<p><strong><?php the_time("l, F d, Y"); ?> @ <?php the_time("g:i a"); ?></strong></p>
			<br />
			
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