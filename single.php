<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<div class="post-date"><?php the_time('j M'); ?></div>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<div class="post-metadata">

				<?php if ( count( get_the_category() ) ) : ?>

					Posted by  <?php the_author_posts_link(); ?> <?php printf( __( 'in %2$s', 'html5blank' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>

								<?php edit_post_link(); ?>

				<?php endif; ?>

				<?php

					$tags_list = get_the_tag_list( '<div class="post-tag">','</div><div class="post-tag">','</div>' );

					if ( $tags_list ):

				?>

				<div class="post-tags clearfix">
					<?php printf( __( '%2$s', 'html5blank' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
				</div>


				<?php endif; ?>


			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
