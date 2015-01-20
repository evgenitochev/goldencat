		</div>

		<!-- Footer -->
		<footer>
	        <div class="content-wrapper">
	            <div class="footer">
		            <div class="row">
		            	<div class="col-md-6">
				            	<p>
				            		© 2015, 
				            		<a class="more-info" target="_blank" href="http://www.quickhands.pro">Quick Hands Project</a>
				            	</p>
			            </div>

		            	<div class="col-md-6">
		            		<p class="social-media">
								<a target="_blank" href="https://www.facebook.com/QuickHandsProject">
									<i class="fa fa-facebook"></i>
								</a>
		            		</p>
		            	</div>
		            </div>
		        </div>
	        </div>
	    </footer>
	</div>

	<!-- JavaScript Scripts -->
		<!-- Boostrap JavaScript -->
	    <script type="text/javascript"  src="<?php echo site_url('assets/plugins/js/bootstrap.min.js'); ?>"></script>

	    <!-- Custom JavaScript -->
	    <script type="text/javascript"  src="<?php echo site_url('assets/js/scrollmenu.js'); ?>"></script>

	    <script type="text/javascript"  src="<?php echo site_url('assets/js/scrollToTop.js'); ?>"></script>

	    <script type="text/javascript"  src="<?php echo site_url('assets/js/register.js'); ?>"></script>

	    <script type="text/javascript"  src="<?php echo site_url('assets/js/smoothScroll.js'); ?>"></script>
	<!-- JavaScript Scripts -->

	<script>
		$(function() {
			if (location.pathname == "/")
			{
				$('header a').removeClass('active');
				$('a.home').parent().addClass('active');
			}

			else
			{
				$('header a[href^="/' + location.pathname.split("/")[1] + '"]').parent().addClass('active');
			}
		});
	</script>

	<script>
		$(document).ready(function() {
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		})
	</script>
</body>
</html>