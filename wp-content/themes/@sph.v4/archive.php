<?php get_header(); ?>

<?php if(have_posts()) : ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <?php /* If this is a category archive */ if (is_category()) { ?>
		<section class="container archive">
			<ol class="topics-intro">        
				<li>
					<article class="row">
						<aside class="col col-2 hidden-mobile">
							<abbr class="published">
								<br>
							</abbr>
						</aside>
						<section class="entry-content col col-8">
							<h1><?php single_tag_title(); ?></h1>
							<h2><?php echo category_description(); ?></h2>
						</section>
						<div class="clear"></div>
					</article>
				</li>        
			</ol>
		</section>        
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2>Blog Archives</h2>
    <?php } ?>
 
<section class="container archive">
	<ol class="topics">

<?php while(have_posts()) : the_post(); ?>	

		<li>
			<article class="row">
				<aside class="col col-2">
					<abbr class="published">
					</abbr>
				</aside>
				<aside class="col col-2">
					<abbr class="published">
						<?php the_time('M j, Y'); ?>
					</abbr>
				</aside>
				<section class="entry-content col col-6">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
				</section>
				<div class="clear"></div>
			</article>
		</li>
		
<?php endwhile; ?> 

	</ol>
</section>

<section class="container">
    <div class="row"  id="pagination-nav">
    	<div class="col col-2 hidden-mobile">&nbsp;</div>
    	<div class="articles-navigation col col-6">
    		<?php 
    			$pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1; 
    			$pageTotal = $wp_query->max_num_pages;
    		?>
    		
    		<div class="icon-prev"><?php previous_posts_link( 'Newer Posts' ); ?></div>
    		<div class="icon-next"><?php next_posts_link( 'Older Posts' ); ?></div>
    		
    	</div>
    </div>
</section>

<?php endif; ?>  

<?php get_sidebar(); ?>   
<?php get_footer(); ?>