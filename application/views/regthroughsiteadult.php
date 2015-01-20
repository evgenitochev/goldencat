			<div id="about">
				<div class="about container text-center ninety-percent" style="padding: 100px 0 50px 0;">
					<div id="title">
						<h2 class="title">
							Регистрация през сайта<br>
							Възрастни
						</h2>
					</div>
				</div>
			</div>

			<div id="register-through-site">
				<div class="register-through-site ninety-percent text-center">
					<div class="row">
						<div id="hours">
							<div class="hours ninety-percent">
								<div class="row text-center">
									<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
										<div class="line"></div>
										<div class="col-sm-4">
											<div id="register-steps">
												<div class="register-steps">
													<div id="circle">
														<span class="hour-circle  active outer-first">
															<span class="hour-circle  active inner-first">
															</span>

															<p>1 стъпка</p>
														</span>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div id="register-steps">
												<div class="register-steps">
													<div id="circle">
														<span class="hour-circle outer-second">
															<span class="hour-circle  active inner-second">
															</span>

															<p>2 стъпка</p>
														</span>
													</div>
												</div>
											</div>
										</div>


										<div class="col-sm-4">
											<div id="register-steps">
												<div class="register-steps">
													<div id="circle">
														<span class="hour-circle outer-third adult-circle">
															<span class="hour-circle  active inner-third">
															</span>

															<p>3 стъпка</p>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
										<div class="col-sm-12 col-md-12 col-xs-12">
											<div id="title first">
												<h2 class="part-one title">
													Регистрация за срещата
												</h2>
											</div>

											<div id="title second">
												<h2 class="part-two title">
													Настаняване в хотел "МАК" 
												</h2>
											</div>

											<div id="title third">
												<h2 class="part-three title">
													Плащане
												</h2>
											</div>

											<p class="red error-message">Моля попълнете грешните/празните полета!</p>

											<p class="red congratulations-message">Избраните от вас услуги са на цена <span class="adultAccount" style="text-decoration: underline; font-weight: bold;"></span> лв. ще получите билета за галата вечер вашия бадж на адреса ви .</p>

											<form class="registration-form" action="">
												<!-- First Part -->
												<div class="first-part">
													<!-- Type Of Person -->
													<div class="form-group type-of-person">
														<label for="type-of-register">Изберете като какъв ще се регистрирате</label>
														<br>
														<input  type="radio" name="type-of-register" class="competitor" id="competitor" style="margin: 0 0 0 -2%" autofocus="autofocus">
														<label for="competitor" style="font-size: 1.5em; font-weight: bold;">Участник</label>

														<input  type="radio" name="type-of-register" class="dealer" id="dealer" style="margin: 0 0 0 2%">
														<label for="dealer" style="font-size: 1.5em; font-weight: bold;">Дилър</label>

														<input  type="radio" name="type-of-register" class="viewer" id="viewer" style="margin: 0 0 0 2%"> 
														<label for="viewer" style="font-size: 1.5em; font-weight: bold;">Наблюдател</label>
													</div>

													<!-- Basic Information -->
													<div class="basic-information">
														<div id="title">
															<h3 class="title">
																Основна информация
															</h3>
														</div>

														<div class="form-group">
															<input  type="text" class="required form-control" placeholder="Име" name="name" maxlength="50" >
														</div>

														<div class="form-group">
															<input  type="text" class="form-control" placeholder="Сценично име" name="nickname" maxlength="50" >
														</div>

														<div class="form-group">
															<input  type="text" class="form-control" placeholder="Град" name="town" maxlength="80" >
														</div>

														<div class="form-group" style="min-width: 20%; max-width: 48%; float: left;">
															<input  type="text" class="form-control" placeholder="Години" name="age" maxlength="3">
														</div>

														<div class="form-group" style="min-width: 35%; max-width: 48%; float: left; margin-left: 4%;">
															<input  type="text" class="required form-control" placeholder="Телефон" name="phone" maxlength="14">
														</div>

														<div class="form-group">
															<input  type="text" class="required form-control" placeholder="Имейл" name="email" maxlength="50">
														</div>

														<div class="form-group textarea">
															<textarea type="text" rows="6" class="form-control" placeholder="Асистенти" name="assistants" maxlength="1000"></textarea>
														</div>

														<div class="form-group">
															<select name="category" class="form-control">
																<option selected disabled>Категории на изпълнението</option>

																<option value="value"  >макромагия</option>

																<option value="value"  >сцена</option>
															</select>
														</div>

														<div class="form-group">
															<input  type="text" class="form-control" placeholder="Продължителност на изпълнението" name="performance-duration">
														</div>

														<div class="form-group">
															<input  type="text" class="form-control" placeholder="Време за нагласяне на реквизита" name="prepare-duration">
														</div>
													</div>

													<!-- Sound -->
													<div class="sound">
														<div id="title">
															<h3 class="title">
																Звук
															</h3>
														</div>

														<div class="form-group">
															<label for="microphone-yes">Микрофон на стойка</label>
															<br>
															<input  type="radio" name="microphone" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="microphone" style="margin: 0 0 0 2%"> Не
														</div>

														<div class="form-group">
															<label for="headset-yes">Хедсет</label>
															<br>
															<input  type="radio" name="headset" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="headset" style="margin: 0 0 0 2%"> Не
														</div>

														<div class="form-group textarea">
															<textarea type="text" rows="4" class="form-control" placeholder="Допълнителна медиа" name="additional-media" maxlength="1000"></textarea>
														</div>
													</div>

													<!-- Auxiliary resources -->
													<div class="auxiliary-resources">
														<div id="title">
															<h3 class="title">
																Помощни средства
															</h3>
														</div>

														<div class="form-group chairs">
															<label for="chairs-yes">Столове</label>
															<br>
															<input  type="radio" name="chairs-yes" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="chairs" style="margin: 0 0 0 2%"> Не
															<input  type="text" class="form-control" placeholder="Брой" name="chairs-number" maxlength="5" style="min-width: 10%;
															max-width: 30%;
															margin: 0 auto;">
														</div>

														<div class="form-group tables">
															<input  type="text" class="form-control" placeholder="Брой маси" name="tables-number" maxlength="5" style="min-width: 20%;
															max-width: 40%;
															margin: 0 auto;">
														</div>

														<div class="form-group electricity">
															<label for="electricity-yes">Електричество</label>
															<br>
															<input  type="radio" name="electricity" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="electricity" style="margin: 0 0 0 2%"> Не
														</div>

														<div class="form-group smoke-machine">
															<label for="smoke-machine-yes">Пушек машина</label>
															<br>
															<input  type="radio" name="smoke-machine" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="smoke-machine" style="margin: 0 0 0 2%"> Не
														</div>

														<!-- Stage -->
														<div class="stage">
															<div id="title">
																<h3 class="title">
																	Сцена
																</h3>
															</div>

															<div class="form-group">
																<select name="go-in" class="form-control">
																	<option selected disabled>Вие влизате на сцената от..</option>

																	<option value="value"  >Ляво</option>

																	<option value="value"  >Дясно</option>

																	<option value="value"  >Аз съм на сцената когато се включат светлините</option>
																</select>
															</div>

															<div class="form-group">
																<select name="music" class="form-control">
																	<option selected disabled>Музика</option>

																	<option value="value"  >Без музика</option>

																	<option value="value"  >Започва и аз излизам на сцената</option>

																	<option value="value"  >Излизам на сцената заставам в поза и тогава започва музиката</option>
																</select>
															</div>

															<div class="form-group">
																<select name="music-end" class="form-control">
																	<option selected disabled>Край на музиката</option>

																	<option value="value"  >Свършва сама</option>

																	<option value="value"  >Излизам от сцената</option>
																	
																	<option value="value"  >След като..</option>
																</select>
															</div>

															<div class="form-group">
																<select name="go-out" class="form-control">
																	<option selected disabled>Вие излизате от сцената</option>

																	<option value="value"  >Ляво</option>

																	<option value="value"  >Дясно</option>
																	
																	<option value="value"  >Оставам на сцената и светлините изгасват</option>
																</select>
															</div>

															<div class="form-group textarea">
																<textarea type="text" rows="4" class="form-control" placeholder="Моля опишете края на своя акт" name="performance-end" maxlength="1000"></textarea>
															</div>
														</div>
													</div>

													<!-- Lighting -->
													<div class="lighting">
														<div id="title">
															<h3 class="title">
																Осветление
															</h3>
														</div>

														<div class="col-sm-12">
															<p class="further-info">
																Моля опишете настроението на вашето представяне(Ако има промяна в осветлението ви , моля отбележете промените като ги номерирате , и отбележите кога трябва да бъдат направени по секунди и действия(например , 2:12 магьосникът появява червен бастун и превключваме от „Сумрак” на „Диско осветление” ).)
															</p>
														</div>

														<div class="form-group textarea">
															<textarea type="text" rows="4" class="form-control" placeholder="Осветление" name="lighting-type" maxlength="1000"></textarea>
														</div>

														<div class="form-group">
															<label for="blackout-begin-yes">Изпълнението ми започва с блекаут</label>
															<br>
															<input  type="radio" name="blackout-begin" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="blackout-begin" style="margin: 0 0 0 2%"> Не
														</div>

														<div class="form-group">
															<label for="blackout-end-yes">Изпълнението ми свършва с блекаут</label>
															<br>
															<input  type="radio" name="blackout-end" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="blackout-end" style="margin: 0 0 0 2%"> Не
														</div>

														<div class="form-group">
															<label for="invisible-thread-yes">Искам да използвам светлина подходяща за невидима нишка</label>
															<br>
															<input  type="radio" name="invisible-thread" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="invisible-thread" style="margin: 0 0 0 2%"> Не
														</div>

														<div class="form-group">
															<label for="disco-yes">Искам да използвам „Диско осветление”</label>
															<br>
															<input  type="radio" name="disco" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="disco" style="margin: 0 0 0 2%"> Не
														</div>

														<div class="form-group">
															<label for="salon-yes">Искам да използвам осветление в салона със зрителите</label>
															<br>
															<input  type="radio" name="salon" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="salon" style="margin: 0 0 0 2%"> Не
														</div>

														<div class="form-group">
															<label for="tracker-yes">Искам да използвам следач</label>
															<br>
															<input  type="radio" name="tracker" style="margin: 0 0 0 -2%"> Да
															<input  type="radio" name="tracker" style="margin: 0 0 0 2%"> Не
														</div>
													</div>
												</div>

												<button type="button" class="submit submit-first" style="margin: auto">Нататък</button>

												<!-- Second Part -->
												<div class="second-part">
													<div class="form-group">
														<label for="hotel-prices-yes">Искате ли да ползвате префернциални цени за хотел?</label>
														<br>
														<input  type="radio" name="hotel-prices-yes" style="margin: 0 0 0 -2%"> Да
														<input  type="radio" name="hotel-prices" class="hotel-price-no" style="margin: 0 0 0 2%"> Не
													</div>

													<div class="form-group room-prices">
														<input  type="radio" name="room-prices" style="margin: 0 0 0 -2%" class="one" id="one-room"> 38 лв. - Единична стая
														<input  type="radio" name="room-prices" style="margin: 0 0 0 2%" class="double" id="two-rooms"> 22.50 лв. - място в двойна стая
													</div>

													<div class="form-group dates">
														<input type="checkbox" name="dates" id="day-27"> 27 март
														<br>
														<input type="checkbox" name="dates" id="day-28"> 28 март
														<br>
														<input type="checkbox" name="dates" id="day-29"> 29 март
													</div>

													<div class="form-group food">
														<label for="food-prices-yes">Искате ли да ползвате префернциални цени за ядене?</label>
														<br>
														<input  type="radio" name="food-prices-yes" style="margin: 0 0 0 -2%"> Да
														<input  type="radio" name="food-prices" style="margin: 0 0 0 2%"> Не
													</div>

													<div class="form-group food-prices">
														<input type="checkbox" name="food" id="dinner-27"> 27 март вечеря
														<br>
														<input type="checkbox" name="food" id="lunch-28"> 28 март обяд
														<br>
														<input type="checkbox" name="food" id="dinner-28"> 28 март вечеря
														<br>
														<input type="checkbox" name="food" id="lunch-29"> 29 март обяд
													</div>
												</div>

												<button type="button" class="submit pull-left two" style="margin-bottom: 20px;">Назад</button>

												<button type="button" class="submit submit-second pull-right">Нататък</button>

												<!-- Final Part -->
												<button type="button" class="submit three" style="margin: auto">Назад</button>
</form>


<script>
	var submitForPayment = function () {
			console.log('atan');
			var url = "https://www.paypal.com/cgi-bin/webscr";
		}

</script>

												<div id="payment" class="register-through" style="margin-top: 75px;">
													<div class="payment ninety-percent">
														<div class="row text-center">
															<div id="title">
																<h2 class="title">
																	Начини на плащане
																</h2>
															</div>
															<!-- <div class="col-sm-12 col-xs-12">
																<div id="read-more">
																<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" onSubmit="submitForPayment()" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="dani_magix@yahoo.com">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="item_name" value="GoldenCat">
<input type="hidden" name="amount" id='amount_value' value="0">
<input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>
<img src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"/>

																</div> -->
															</div>

															<div class="col-sm-12 col-xs-12">
																<div id="read-more">
																	<button href="/lecturers" class="read-more">Наложен</button>

																	<p style="color: #fff; padding: 15px 0;">
																		Офис на Еконт Габрово
																		<br>
																		Йордан Белев
																		<br>
																		0888 888 888
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											
										</div>
									</div>
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