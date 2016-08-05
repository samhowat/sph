<section class="container">
	<div class="row" id="topics">
    	<div class="col col-1 hidden-mobile">
    		<br>
    	</div>
    	<aside class="col col-3">
    		<div>Topics</div>
    		<i title="Topics" class="hidden-mobile"></i>
    	</aside>
    	
    	<div class="col col-8">
    		<ul>
    			<?php wp_list_categories('title_li='); ?>
    		</ul>
    	</div>
	</div>
</section>

<section class="container">
	<div class="row" id="footer">
    	<div class="col col-1 hidden-mobile">
    		<br>
    	</div>
    	<aside class="col col-3">
    		<div>Hello</div> 
    		<a href="https://twitter.com/sph" target="_blank" rel="twitter" class="hidden-mobile sam-link">@sph</a>
    	</aside>
    	
    	<div class="col col-6">
    		<p>I'm a partner at <a href="http://avelient.co" target="_blank">Avelient</a>, an autodidact, <a href="http://www.linkedin.com/in/samhowat" target="_blank">entrepreneur</a>, adventurer and aspiring husband. I am not a guru, but you can still follow me on <a href="http://twitter.com/sph" target="_blank">Twitter</a>.</p>
    		<p>&copy; 1998 - <?php echo date("Y"); ?>, Sam Howat.</p>
    	</div>	
	</div>
</section>

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"%3E%3C/script%3E'))</script>

<!-- jQuery functions, document ready & window load -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.function.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.docready.js"></script>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8319770-1");
pageTracker._trackPageview();
} catch(err) {}</script>

<?php wp_footer(); ?>

</body>
</html>