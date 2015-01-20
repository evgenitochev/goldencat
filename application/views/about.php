			<div id="about">
				<div class="about container text-center ninety-percent">
					<div id="title">
						<h2 class="title">
							<?=lang('about.aboutusPageHeader')?> 
						</h2>
					</div>

					<div class="row">
						<div id"text-about" class="col-sm-6 col-sm-offset-3 text-justified">
							<p class="text-about" style="text-align: justify;">
								<?=lang('about.aboutusPageText')?> 
							</p>
						</div>
					</div>

					<div id="competitor">	
						<div class="row">
							<div id"text-about" class="col-sm-6 col-sm-offset-3 text-justified">
								<p>
									<?=lang('about.aboutusUsefulText')?>
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="col-sm-6">
									<a href="<?php echo site_url('rules'); ?>" class="download"><?=lang('about.aboutusRulesBtn')?></a>
								</div>

								<div class="col-sm-6">
									<a href="<?php echo site_url('techinfo'); ?>" class="download"><?=lang('about.aboutusTechInfoBtn')?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

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