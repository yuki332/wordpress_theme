	</div>
	<footer>
		<div class="sitemap">
			<div class="sitemap__col">
				<h4>Global Template</h4>
				<p>This is template for wordpress. It is created in class assignments of Utah Valley University DGM3740.</p>
			</div>
			<ul class="sitemap__col">
				<h4>LINKS</h4>
				<li class="sitemap__item"><a href="#">HOME</a></li>
				<li class="sitemap__item"><a href="#">PRODUCTS</a></li>
				<li class="sitemap__item"><a href="#">ABOUT</a></li>
				<li class="sitemap__item"><a href="#">GARALLY</a></li>
				<li class="sitemap__item"><a href="#">CONTACT</a></li>
				<li class="sitemap__item"><a href="#">LOCATION</a></li>
				<li class="sitemap__item"><a href="/wp-admin">Client Login</a></li>
			</ul>
			<div class="sitemap__col">
				<h4>CONTACT</h4>
				<p class="sitemap__item"><a href="tel:8013333333">801-333-3333</a></p>
				<p class="sitemap__item">global@sample.com</p>
				<address class="sitemap__item">123 S 456 E Salt Lake City, Utah</address>
			</div>
		</div>
		<hr>
		<p class="copyright">Copyright &copy; 2017 Global Template</p>
	</footer>
	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

	<!-- FlexSlider -->
	<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>

	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide"
			});
		});
	</script>
</body>
</html>