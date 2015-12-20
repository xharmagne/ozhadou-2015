<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<div class="post-date"><?php the_time('j M'); ?></div>
		<div class="post-content"><?php the_content(); ?></div>

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
		<!-- /post details -->

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
