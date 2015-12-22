</div>
<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
					<div class="copyright">
						<p>
						OzHadou - Australia's fighting game community</p>
						<p>&copy; OzHadou <?php echo date('Y'); ?>. All rights reserved.</p>
					</div>
				</div>

				<!-- /copyright -->

			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<!-- foundation -->
		<script>
      $(document).foundation();

			// Reduce the size of the header on scroll
			$(document).on("scroll",function(){
				if($(document).scrollTop()>160){
					$(".top-bar").addClass("small");
				} else{
					$(".top-bar").removeClass("small");
				}
			});

			// Style region tags for post titles
			$(document).ready(function() {
				$(".post-title a").each(function() {
					var title = $(this);
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
