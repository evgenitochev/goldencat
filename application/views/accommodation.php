			<div id="about">
				<div class="about container text-center ninety-percent" style="padding-bottom: 0;">
					<div id="title">
						<h2 class="title">
							<?=lang('about.accomodationHeaderText')?>
						</h2>
					</div>

					<div id="title">
						<h4 class="title" style="font-size: 3.2em;">
							<?=lang('about.accomodationHotelName')?>
						</h4>
					</div>

					<div class="row">
						<div id"text-about" class="col-sm-12 text-center">
							<p class="text-about" data-toggle="tooltip" data-placement="bottom" title="Хотел МАК - 4 звезди">
								<span class="glyphicon glyphicon-star"></span>

								<span class="glyphicon glyphicon-star"></span>

								<span class="glyphicon glyphicon-star"></span>

								<span class="glyphicon glyphicon-star"></span>
							</p>
						</div>

						<div id"text-about" class="col-sm-6 col-sm-offset-3 text-center">
							<p class="text-about" style="text-align: justify;">
								<?=lang('about.accomodationHotelInfo')?>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div id="prices">
				<div class="prices ninety-percent">
					<div class="row text-center">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div id="circle">
								<span class="price-circle">
									<p><?=lang('about.accomodationPriceSglRoom')?></p>
								</span>
							</div>

							<div class="price-for">
								<h3>
									<?=lang('about.accomodationSingleRoom')?>
								</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12">
							<div id="circle">
								<span class="price-circle">
									<p><?=lang('about.accomodationPriceDblRoom')?></p>
								</span>
							</div>

							<div class="price-for">
								<h3>
									<?=lang('about.accomodationDoubleRoom')?>
								</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12">
							<div id="circle">
								<span class="price-circle">
									<p><?=lang('about.accomodationPriceAddLunch')?></p>
								</span>
							</div>

							<div class="price-for">
								<h3>
									<?=lang('about.accomodationAddPayLunch')?>
								</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12">
							<div id="circle">
								<span class="price-circle">
									<p><?=lang('about.accomodationPriceAddDinner')?></p>
								</span>
							</div>

							<div class="price-for">
								<h3>
									<?=lang('about.accomodationAddPayDinner')?>
								</h3>
							</div>
						</div>

						<div class="col-sm-12" style="padding-bottom: 15px;">
							<p class="further-info">
								<?=lang('about.accomodationUsefulInfo')?>
							</p>
						</div>

						<div id="read-more">
							<a href="http://www.hotelmakgabrovo.bg/" target="_blank" class="read-more"><?=lang('about.accomodationReadMoreBtn')?></a>
						</div>
					</div>
				</div>
			</div>

			<div id="gallery">
				<div class="gallery ninety-percent" style="padding-bottom: 100px;">
					<div class="row text-center">
						<div class="col-sm-10 col-sm-offset-1 col-md-12 col-sx-12">
							<div class="col-sm-4 col-md-4 col-xs-12">
								<img class="hotel-image" src="<?php echo site_url('assets/images/MAK_Restaurant.jpg'); ?>">
							</div>

							<div class="col-sm-4 col-md-4 col-xs-12">
								<img class="hotel-image" src="<?php echo site_url('assets/images/MAK_Hotel.jpg'); ?>">
							</div>
							
							<div class="col-sm-4 col-md-4 col-xs-12">
								<img class="hotel-image" src="<?php echo site_url('assets/images/MAK_Lobby.jpg'); ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--
			<div class="google-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5847.3916356701475!2d25.320235117717903!3d42.8792640666906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a91abd8fe25c87%3A0x2f9e958f90957950!2z0KXQvtGC0LXQuyDQntGA0LvQvtCy0LXRhiDQk9Cw0LHRgNC-0LLQvg!5e0!3m2!1sbg!2sbg!4v1419763210449" width="100%" height="300" frameborder="0" style="border:0"></iframe>
			</div>
			
			-->

			<div id="sponsors">
				<div class="sponsors">
					<div class="row text-center">
						<div class="col-sm-4 col-md-4 col-xs-12">
							<a target="_blank" href="http://dani-magix.wix.com/quickhandsproject">
								<img class="image quick-hands" src="<?php echo site_url('assets/images/QuickHandsProject.png'); ?>">
							</a>
						</div>

						<div class="col-sm-4 col-md-4 col-xs-12">
							<a target="_blank" href="http://www.hotelmakgabrovo.bg/">
								<img class="image" src="<?php echo site_url('assets/images/MAK_logo.png'); ?>">
							</a>
						</div>
						
						<div class="col-sm-4 col-md-4 col-xs-12">
							<a target="_blank" href="http://www.gabrovo.bg/bg">
								<img class="image gabrovo" src="<?php echo site_url('assets/images/Gabrovo.png'); ?>">	
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<a href="#" class="scroll-top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>