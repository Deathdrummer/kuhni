<section class="card mt-120 mt-md-155 mt-lg-185 mb-25 mb-lg-60" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="container-xxl g-2 g-lg-4">
		<nav aria-label="breadcrumb  ">
			<ol class="breadcrumb mb-30">
				<li class="breadcrumb-item">
					<a href="/">Главная</a>
				</li>
				<li class="breadcrumb-item">
					<a href="{{base_url(''~category_seo_url)}}">{{product.prod_categories|reset}}</a>
				</li>
				<li class="breadcrumb-item" aria-current="page">{{product.name}}</li>
			</ol>
		</nav>
		<div class="row g-0 gx-3 mb-0">
			<div class="col-12 col-lg-8 col-xll-7 col-card-swiper">
				<div class="swiper swiper-card overflow-hidden">
					<div class="swiper-wrapper">
					<a data-fancybox="gallery" data-src="{{base_url('public/filemanager/'~product.main_image.file)}}" class="swiper-slide">
								<img src="{{base_url('public/filemanager/__mini__/'~product.main_image.file)}}"/>
							</a>
						{% for img in product.gallery %}
							<a data-fancybox="gallery" data-src="{{base_url('public/filemanager/'~img.file)}}" class="swiper-slide">
								<img src="{{base_url('public/filemanager/__mini__/'~img.file)}}"/>
							</a>
						{% endfor %}
					</div>
					<div class="swiper-prev"></div>
					<div class="swiper-next"></div>
				</div>
				<div class="swiper swiper-card-thumbs overflow-hidden mt-10 mt-md-15">
					<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="{{base_url('public/filemanager/__mini__/'~product.main_image.file)}}"/>
							</div>
						{% for img in product.gallery %}
							<div class="swiper-slide">
								<img src="{{base_url('public/filemanager/__mini__/'~img.file)}}"/>
							</div>
						{% endfor %}
					</div>
				</div>
			</div>
			<div class="d-flex flex-column mt-24 mt-lg-0 col-12 col-lg-4 col-xll-5 col-card-content">
				<div class="order-0">
					<div class="card__title">{{product.name}}</div>
					<div class="card__subtitle mb-10">{{product.short_desc}}</div>
				</div>
				<div class="order-2 order-lg-1">
					<ul class="property-list d-flex flex-column border-light-white pb-15 pb-md-30">
						{% for attr in product.attributes|arrnotstrtswith('_', 'name') %}
							<li>
								<span class="property-info">{{attr.name}}:</span>
								<span>{{attr.value}}</span>
							</li>
						{% endfor %}
					</ul>
					<ul class="property-list d-flex flex-column border-light-white pb-15 pb-md-10 pt-10">
						{% for attr in product.attributes|arrstrtswith('_', 'name') %}
							<li>
								<span class="property-info">{{attr.name|slice(1)}}:</span>
								<span>{{attr.value}}</span>
							</li>
						{% endfor %}
						<strong class="card__price">{{product.price|number_format(0, '', ' ')}} {{currency}}</strong>
					</ul>
					<div class="property-list d-flex flex-column border-md-none pb-0 pb-md-35 pt-20">Доставка и установка по Москве и М.О.</div>
				</div>
				<div class="order-1 order-lg-2 mb-20 mb-lg-0 d-flex">
					<button class="button button--black" data-bs-toggle="modal" data-bs-target="#modalraschet">{{buutton_calc_text}}</button>
					<button class="ms-5 d-block d-lg-none button-share" data-bs-toggle="modal" data-bs-target="#modalshare">
						<img src="{{base_url('public/filemanager/'~icon_share)}}" alt="share"/>
					</button>
				</div>
				
				
				
				<div class="modal fade zayavka-modal" id="modalraschet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
										<p>Расчет стоимости кухни</p>
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
																<input class="form-check-input" type="radio" name="configuration"{{item.default ? ' checked' : ''}} value="{{item.text}}" id="pcimg{{index}}"/>
																<div class="form-check-label text-white-custom"><label for="pcimg{{index}}">{{item.text}}</label></div>
															</div>
														</div>
													{% endfor %}
												</div>
													
												<div class="hidden-md-up">
													<div class="itc-select" id="select-closet" style="width: 100%;">
						                                <!-- Кнопка для открытия выпадающего списка -->
						                                {% set default = '' %}
					                                	{% for index, item in list_form_konf_kitchen %}
					                                		{% if item.default %}
					                                  			{% set default = item.text %}
					                                		{% endif %}
														{% endfor %}
						                                <button type="button" class="itc-select__toggle form-select form-control" style="padding-top: 15px; padding-bottom: 15px;" name="configuration" value="{{default}}" data-select="toggle" data-index="-1">{{default}}</button>
						                                <!-- Выпадающий список -->
						                                <div class="itc-select__dropdown">
						                                  <ul class="itc-select__options">
						                                  	{% for index, item in list_form_konf_kitchen %}
						                                  		<li class="itc-select__option{{item.default ? ' itc-select__option_selected' : ''}}" data-select="option" data-value="{{item.text}}" data-index="{{index}}">{{item.text}}</li>
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
													<span class="color-gray" replacer>Вы можете приложить эскиз или фото</span>
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
				
				
				
				
				
				
				
				
				
				
				{# <div class="modal fade" id="modalraschet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-w-custom modal-dialog-centered">
						<div class="modal-content bg-transparent" id="callbackFormPopper">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть" callbackformclose></button>
							<div class="row g-0 gap-10">
								<div class="col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom">Заказать расчет</div>
								<div class="col-12 col-messages bcg--white-v1 col-md-auto order-2 order-md-1">
									<div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
										<div class="col-message__title">Написать в Whatsapp</div>
										<div class="col-message__icon">
											<a href="{{soc[4].link}}" class="sosial-link">
												<img class="icon-sosial ic-{{soc[4].title}}" src="{{base_url('public/filemanager/'~soc[4].icon)}}" alt="{{soc[4].title}}"/>
											</a>
										</div>
									</div>
									<div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
										<div class="col-message__title">Написать в Telegram</div>
										<div class="col-message__icon">
											<a href="{{soc[5].link}}" class="sosial-link">
												<img class="icon-sosial ic-{{soc[5].title}}" src="{{base_url('public/filemanager/'~soc[5].icon)}}" alt="{{soc[5].title}}"/>
											</a>
										</div>
									</div>


									<div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
										<div class="col-message__title">Позвонить
											{{soc[6].link}}</div>
										<div class="col-message__icon">
											<a phone class="sosial-link">
												<p class="d-none">{{soc[6].link}}</p>
												<img class="icon-sosial ic-{{soc[6].title}}" src="{{base_url('public/filemanager/'~soc[6].icon)}}" alt="{{soc[6].title}}"/>
											</a>
										</div>
									</div>
								</div>

								<div class="col-12 d-flex flex-column justify-content-center bcg--white-v1 col-md-auto order-1 order-md-2 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0">
									<div class="text-center modal-form-title mb-24 mb-lg-35">Заказать расчет</div>
									<form class="sect-form--white-theme">
										<input type="hidden" name="product" value="{{product.name}}">

										<div class="mb-1">
											<input type="text" name="name" class="form-control" placeholder="Имя"/>
										</div>
										<div class="mb-20">
											<input type="tel" name="phone" class="form-control phone" placeholder="Телефон" rules="phone|empty"/>
										</div>
										<div class="row g-0 justify-content-center mb-20 mb-md-15">
											<button class="button button--black" callbackform="orderCalcForm">Отправить</button>
										</div>
										<div class="text-center corp-form">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
									</form>
								</div>
							</div>

							<div class="col-12 bcg--white-v1 ps-10 pe-10 ps-md-33 pe-md-33 pt-40 pt-md-80 pb-40 pb-md-100 d-none text-center" success>
								<img src="{{base_url('public/images/success.svg')}}" class="w-60px mb-20px" alt="">
								<h2 class="fs-1 fw-bold mb-10px">Спасибо, заявка принята!</h2>
								{% if callback['orderCalcForm']['success'] %}
									<p class="fs-2">{{callback['orderCalcForm']['success']}}</p>
								{% endif %}
							</div>
						</div>
					</div>
				</div> #}
				
				
				
				
				
				
				
				
				
				
				
				
				<div class="modal fade" id="modalshare" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content share-card">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
							<div class="p-11 pb-15">
								<div class="mb-1 share-title d-flex justify-content-center align-items-center">
									<img class="me-10" src="{{base_url('public/filemanager/'~icon_share)}}" alt="" style="width: 27px; height: 27px"/>
									{{text_share}}
								</div>
								<div class="share-text mb-25 text-center">{{text_share_desc}}</div>
								<div class="sosials d-flex justify-content-center gap-10">
									{% for sosial in soc %}
										{% if sosial.title == "whatsapp" %}
											<a href="https://wa.me/?text={{base_url(item_seo_url)}}%0A{{page_title}}: {{short_desc}}" target="_blank" class="sosial-link" title="Поделиться в Whatsapp">
												<img class="icon-sosial ic-{{sosial.title}}" src="{{base_url('public/filemanager/'~sosial.icon)}}" alt="{{sosial.title}}"/>
											</a>
										{% elseif sosial.title == "telegram" %}
											<a href="https://t.me/share/url?url={{base_url(item_seo_url)}}&text={{page_title}}: {{short_desc}}" target="_blank" class="sosial-link" title="Поделиться в Telegram">
												<img class="icon-sosial ic-{{sosial.title}}" src="{{base_url('public/filemanager/'~sosial.icon)}}" alt="{{sosial.title}}"/>
											</a>
										{% endif %}
									{% endfor %}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 mt-0 mt-lg-10">
				<div class="p-11 pb-15 share-card bcg--grey-v1 d-none d-lg-block">
					<div class="mb-1 mb-lg-10 share-title">
						<img class="me-10" src="{{base_url('public/filemanager/'~icon_share)}}" alt="" style="width: 27px; height: 27px"/>
						{{text_share}}
					</div>
					<div class="share-text mb-25 mb-lg-17">{{text_share_desc}}</div>
					<div class="sosials d-flex justify-content-lg-start gap-10">
						{% for sosial in soc %}
							{% if sosial.title == "whatsapp" %}
								<a href="https://wa.me/?text={{base_url(item_seo_url)}}%0A{{page_title}}: {{short_desc}}" target="_blank" class="sosial-link" title="Поделиться в Whatsapp">
									<img class="icon-sosial ic-{{sosial.title}}" src="{{base_url('public/filemanager/'~sosial.icon)}}" alt="{{sosial.title}}"/>
								</a>
							{% elseif sosial.title == "telegram" %}
								<a href="https://t.me/share/url?url={{base_url(item_seo_url)}}&text={{page_title}}: {{short_desc}}" target="_blank" class="sosial-link" title="Поделиться в Telegram">
									<img class="icon-sosial ic-{{sosial.title}}" src="{{base_url('public/filemanager/'~sosial.icon)}}" alt="{{sosial.title}}"/>
								</a>
							{% endif %}
						{% endfor %}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section mb-100">
	<div class="container-xxl g-2 g-lg-4">
		<div class="row g-0 gx-60 border-row-card">
			{{product.description|raw}}
		</div>
	</div>
</section>
