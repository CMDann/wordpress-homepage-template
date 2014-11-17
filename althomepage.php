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
Template Name: althomepage
*/
get_header(); ?>

</div>

<div class="top_wrapper">
	<div class="container">
		<!-- Slide show -->
		<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
	</div>
</div>

<div id="container" class="container">

	<div id="content" class="widecolumn box">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<h2 class="comic_title_big">Maxx Collectibles!</h2>

			<div class="row">
				<div class="col-md-8 post">
					<!--<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>-->
					<div class="entrytext">
						<?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
					</div>
				</div>

				<div class="col-md-4">
					<p>p</p>
				</div>
			</div>

		<?php endwhile; endif; ?>

	<br />

	<h2 class="comic_title_home">Action News!</h2>

	<?php get_template_part( 'loop', 'page' ); ?>
	<?php $temp_query = $wp_query; ?>
	<?php query_posts('category_name=&showposts=6'); ?>
	<div class="row panes" id="recentPostsHome">
		<?php while (have_posts()) : the_post(); ?>

		<div class="col-lg-4 article" id="post-<?php the_ID(); ?>">

			<div class="pane">
				<h2 class="homepage_title"><a href="<?php the_permalink() ?>" rel="bookmark"
					title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<div class="post_featured">
					<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
				</div>

				<div class="article-pane">

					<p class="post_info"><?php the_time("F d, Y"); ?></p>
					<br />

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div>
					<br />

					<!-- <p><a class="btn btn-primary" href="<?php the_permalink() ?>" role="button">Read &raquo;</a></p> -->
				</div>
			</div>
		</div>

		<?php endwhile; ?>
	</div>

	<div class="row" id="homepage_widgets">

		<?php if ( is_active_sidebar( 'homepage1' ) ) : ?>

			<?php dynamic_sidebar( 'homepage1' ); ?>

		<?php endif; ?>

	</div>
</div>
<div style="width: 100%; margin-top: 20px; clear: both;"><p> </p></div>
<script type="text/javascript">
document.getElementsByClassName(sharedaddy).style.display = "none !important";
</script>
<?php get_footer(); ?>
