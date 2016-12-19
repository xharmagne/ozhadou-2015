</div>
<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
					<div class="copyright">
						<p>
						OzHadou - Bringing fighting gamers together since 2001</p>
						<p>&copy; OzHadou <?php echo date('Y'); ?>. All rights reserved.</p>
					</div>
				</div>

				<!-- /copyright -->

			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-69521714-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<!-- foundation -->
		<script>
      jQuery(document).foundation();

			// Reduce the size of the header on scroll
			jQuery(document).on("scroll",function(){
				if(jQuery(document).scrollTop()>160){
					jQuery(".top-bar").addClass("small");
				} else{
					jQuery(".top-bar").removeClass("small");
				}
			});

			// Style region tags for post titles
			jQuery(document).ready(function() {
				jQuery(".post-title a").each(function() {
					var title = jQuery(this);
					var titleHtml = title.html();
					var titleTag = titleHtml.match(/\[\w+\]/);
					if (titleTag && titleTag.length > 0) {
						title.html(titleHtml.replace(/\[.+\]/, '<div class="title-tag">'+titleTag+'</div>'));
					}
				})
			});
    </script>

	</body>
</html>
