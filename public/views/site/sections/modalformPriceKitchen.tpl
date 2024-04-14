<div class="modal fade zayavka-modal" id="formPriceKitchen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-w-custom modal-dialog-centered">
		<div class="modal-content bg-transparent" id="callbackFormPopper">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть" callbackformclose></button>
			<div class="row g-0 gap-0 gap-md-10 buttons">
				<div class="col-12 bcg--white-v1 p-20 d-none d-md-block text-center modal-title-custom">
					<p>Заявка на проект кухни</p>
					<small class="modal__subtitle">Заполните форму и получите быстрый расчет стоимости по вашим размерам с учетом скидки 35%</small>
				</div>
				
				<div class="col-12 d-flex flex-column justify-content-center bcg--white-v1 ps-10 pe-10 pt-28 pb-50 ps-md-30 pe-md-30 pt-md-28 pb-md-60">
					<div class="col-12 bcg--white-v1 text-center d-block d-md-none modal-form-title pb-30 pt-0 pt-md-0">
						<p>Проект кухни</p>
						<small class="modal__subtitle">Заполните форму и получите быстрый расчет стоимости по вашим размерам с учетом скидки 35%</small>
					</div>
					{# ---------------------------------------- форма мобильная --------------------------------------- #}
					{# <form class="sect-form--white-theme d-block d-md-none">
						<div class="row g-0 gx-12 mb-30">
							<div class="col-12">
								<div class="col-title-form">Выберите конфигурацию:</div>
							</div>
							<div class="col-12 mt-15">
								<div class="row g-10 ">
									{% for index, item in list_form_konf_kitchen %}
										<div class="col-6">
											<label class="form-check-image p-8 pt-2" for="img{{index}}">
												<div class="konf-photo">
													<img src="{{base_url('public/filemanager/__mini__/'~item.img)}}" loading="lazy" alt=""/>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="configuration" value="{{item.text}}" id="img{{index}}"/>
													<div class="form-check-label text-white-custom">{{item.text}}</div>
												</div>
											</label>
										</div>
									{% endfor %}
								</div>

							</div>
						</div>
						<div class="row g-0 mb-30">
							<div class="row g-0 gap-5 col-12">
								<div class="col-12 d-flex flex-row align-items-center justify-content-between">
									<label class="me-20 text-nowrap" for="">Размер сторона А</label>
									<div
										class="itc-select" id="select-a">
										<!-- Кнопка для открытия выпадающего списка -->
										<button type="button" class="itc-select__toggle" name="side_a" value="" data-select="toggle" data-index="-1">Выбрать</button>
										<!-- Выпадающий список -->
										<div class="itc-select__dropdown">
											<ul class="itc-select__options">
												{% for index, item in list_form_storona_a %}
													<li class="itc-select__option" data-select="option" data-value="{{item.variant}}" data-index="{{index}}">{{item.variant}}</li>
												{% endfor %}
											</ul>
										</div>
									</div>
								</div>
								<div class="col-12 d-flex flex-row align-items-center justify-content-between">
									<label class="me-20 text-nowrap" for="">Размер сторона Б</label>
									<div
										class="itc-select" id="select-b">
										<!-- Кнопка для открытия выпадающего списка -->
										<button type="button" class="itc-select__toggle" name="side_b" value="" data-select="toggle" data-index="-1">Выбрать</button>
										<!-- Выпадающий список -->
										<div class="itc-select__dropdown">
											<ul class="itc-select__options">
												{% for index, item in list_form_storona_b %}
													<li class="itc-select__option" data-select="option" data-value="{{item.variant}}" data-index="{{index}}">{{item.variant}}</li>
												{% endfor %}
											</ul>
										</div>
									</div>
								</div>
								<div class="col-12 d-flex flex-row align-items-center justify-content-between">
									<label class="me-20 text-nowrap" for="">Размер сторона С</label>
									<div
										class="itc-select" id="select-c">
										<!-- Кнопка для открытия выпадающего списка -->
										<button type="button" class="itc-select__toggle" name="side_c" value="" data-select="toggle" data-index="-1">Выбрать</button>
										<!-- Выпадающий список -->
										<div class="itc-select__dropdown">
											<ul class="itc-select__options">
												{% for index, item in list_form_storona_c %}
													<li class="itc-select__option" data-select="option" data-value="{{item.variant}}" data-index="{{index}}">{{item.variant}}</li>
												{% endfor %}
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row g-0 gx-5 mb-30">
							<div class="col-12">
								<input type="tel" name="phone" class="form-control" placeholder="Телефон" rules="phone|empty"/>
							</div>
						</div>
						<div class="row g-0 justify-content-center">
							<button class="button button--black" callbackform="calcPriceKitchen">Отправить</button>
						</div>
						<div class="d-flex mt-15">
							<div class="form-check-label text-white-custom text-center m-auto" style="cursor: auto">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности
							</div>
						</div>
					</form> #}
					
					
					{# ---------------------------------------- форма десктоп --------------------------------------- #}
					<form class="sect-form--white-theme">
						<div class="row g-0 gx-26 mb-2 mb-md-0">
							<div class="col-12 col-md-4 mb-24">
								<p class="col-title-form">Форма вашей кухни</p>
								<div class="hidden-sm-down">
									{% for index, item in list_form_konf_kitchen %}
										<div class="mb-1">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="configuration" value="{{item.text}}" id="pcimg{{index}}"/>
												<div class="form-check-label text-white-custom"><label for="pcimg{{index}}">{{item.text}}</label></div>
											</div>
										</div>
									{% endfor %}
								</div>
									
								<div class="hidden-md-up">
									<div class="itc-select" id="select-closet" style="width: 100%;">
		                                <!-- Кнопка для открытия выпадающего списка -->
		                                <button type="button" class="itc-select__toggle form-select form-control" style="padding-top: 15px; padding-bottom: 15px;" name="configuration" value="" data-select="toggle" data-index="-1">Выберите вид изделия</button>
		                                <!-- Выпадающий список -->
		                                <div class="itc-select__dropdown">
		                                  <ul class="itc-select__options">
		                                  	{% for index, item in list_form_konf_kitchen %}
		                                  		<li class="itc-select__option" data-select="option" data-value="{{item.text}}" data-index="{{index}}">{{item.text}}</li>
											{% endfor %}
		                                  </ul>
		                                </div>
	                              	</div>
								</div>
							</div>
							<div class="col-12 col-md-8 mb-1">
								<p class="col-title-form mb-1">Укажите размер и пожелания</p>
								<textarea class="form-control" name="comment" placeholder="Например: 2,8 на 1,4 м" rows="4"></textarea>
							</div>
						</div>
						
						<div class="row g-0 gx-15">
							<p>Оставьте ваши контактные данные</p>
							<div class="col-12 col-md-6 mb-1 mb-md-0">
								<input type="text" name="name" class="form-control" placeholder="Имя"/>
							</div>
							<div class="col-12 col-md-6">
								<input type="tel" name="phone" class="form-control" placeholder="Телефон" rules="phone|empty"/>
							</div>
						</div>
						<div class="row g-0 mt-15 mb-3 mb-md-40">
							<div class="col">
								<label class="modal__addicticon" role="button">
									<img src="public/images/clip.svg">
									<span class="color-gray">Вы можете приложить эскиз или фото</span>
									<input type="file" name="attach" class="d-none">
								</label>
							</div>
						</div>
						<div class="row g-0 justify-content-center mb-20 mb-md-15">
							<button class="button button--black" callbackform="calcPriceKitchen">Отправить</button>
						</div>
						<div class="d-flex mt-15">
							<div class="form-check-label text-white-custom text-center m-auto" style="cursor: auto">Нажимая на кнопку «Рассчитать», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-12 bcg--white-v1 ps-10 pe-10 ps-md-33 pe-md-33 pt-40 pt-md-80 pb-40 pb-md-100 d-none text-center" success>
				<img src="{{base_url('public/images/success.svg')}}" class="w-60px mb-20px" alt="">
				<h2 class="fs-1 fw-bold mb-10px">Спасибо, заявка принята!</h2>
				{% if callback['calcPriceKitchen']['success'] %}
					<p class="fs-2">{{callback['calcPriceKitchen']['success']}}</p>
				{% endif %}
			</div>
		</div>
	</div>
</div>
