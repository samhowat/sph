<?php get_header(); ?>
 
<section class="container">
	<ol class="articles">

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>	
	
		<li>
			<article>
				<aside class="col col-2 hidden-mobile">
					<abbr class="published">
					</abbr>
				</aside>
				<section class="entry-content col col-8">
				    <div class="article-date"><?php the_time('M j, Y'); ?></div>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
					
					<?php the_content(); ?>
					
					<div class="sharing hidden-mobile"><?php echo sharing_display(); ?><!--<a href="https://twitter.com/sph" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @sph</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>--></div>
          <?php comments_template(); ?>
				</section>
				   
			    <div class="clear"></div>			
			</article>
		</li>
		
<?php endwhile; ?> 
<?php endif; ?>  		
		
	</ol>
</section>
<section class="container">
    <div class="row"  id="pagination-nav">
    	<div class="col col-2 hidden-mobile">&nbsp;</div>
    	<div class="articles-navigation col col-8">
    		<!-- <div class="links"><a href="/">&#8634; Return Home</a></div> -->	
    	</div>
    </div>
</section>
<?php get_footer(); ?>