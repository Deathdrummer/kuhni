<section class="section section-catalog-v1 section--mb section--mt" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="container-xxl g-2 g-lg-4">
		<div class="section__block-title row mb-90 mb-lg-3">
			<div class="col-12 col-lg-10">
				<div class="section__subtitle">{{subtitle}}</div>
				<div class="section__title">{{title}}</div>
			</div>
		</div>

		<div class="section--pb border-light-white">
			<div class="row g-0 gx-lg-3">
				<div class="col-12 col-lg-4 position-relative">
					<div class="col-l-v1" id="rool">
						<div class="col modal-custom p-0" id="formPrice">
							<div>
								<div class="modal-content content-l-v1 bcg--black-v1">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
									<div class="col-v1__title text-center mb-24 mb-lg-50">Рассчитать стоимость</div>
									<form>
										<div class="mb-3">
											<label class="form-label">Выберите вид изделия</label>

											<div
												class="itc-select" id="select-closet">
												<!-- Кнопка для открытия выпадающего списка -->
												<button type="button" class="itc-select__toggle form-select form-control" name="product_type" value="" data-select="toggle" data-index="-1">Выберите вид изделия</button>
												<!-- Выпадающий список -->
												<div class="itc-select__dropdown">
													<ul class="itc-select__options">
														{% for index, item in list_form_vid_closet %}
															<li class="itc-select__option" data-select="option" data-price="{{item.price}}" data-value="{{item.variant}}" data-index="{{index}}">{{item.variant}}</li>
														{% endfor %}
													</ul>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label for="price-closet" class="form-label">Стоимость</label>
											<input type="text" name="price" class="form-control" id="price-closet" placeholder="от 29 000 метр погонный" disabled/>
										</div>
										<div class="mb-3">
											<label for="exampleFormControlTextarea1" class="form-label">Размер и пожелания</label>
											<textarea name="size_comment" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="{{placeholder}}"></textarea>
										</div>
										<div class="mb-1">
											<input type="text" name="name" class="form-control" placeholder="Имя"/>
										</div>
										<div class="mb-3">
											<input type="tel" name="phone" class="form-control phone" placeholder="Телефон" rules="phone|empty"/>
										</div>
										<div class="row g-0 justify-content-center mb-15">
											<button class="button button--white" callbackform="calcCatalogForm">Отправить</button>
										</div>
										<div class="text-white-custom text-center corp-form">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col modal-custom p-0" id="modalMessege">
							<div>
								<div class="modal-content content-l-v1 bcg--black-v1">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
									<div class="col-v1__title text-center mb-1 mb-lg-40">Написать в мессенджер</div>
									<div class="sosials d-flex">
										{% for sosial in soc %}
											{% if sosial.title != "phone" %}
												<a href="{{sosial.link}}" class="sosial-link">
													<img class="icon-sosial ic-{{sosial.title}}" src="{{base_url('public/filemanager/'~sosial.icon)}}" alt="{{sosial.title}}"/>
												</a>
											{% endif %}
										{% endfor %}
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex position-absolute z-1 gap-8 d-lg-none btns-l-v1">
							<button type="button" class="button" data-bs-toggle="modal" data-bs-target="#formPrice">Рассчитать стоимость</button>
							<button type="button" class="button" data-bs-toggle="modal" data-bs-target="#modalMessege">Написать в мессенджер</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-8 col-r-v1">
					<div class="row g-1 g-md-3 gy-20 gy-md-55">
						{% for index, product in products.items %}
							<div class="col-6 gallery-closet">
								<div class="photo" data-fancybox="gallery-{{index}}" data-src="{{base_url('public/filemanager/'~product.gallery.0.file)}}" data-scroll-block="{{product.seo_url}}">
									<img src="{{base_url('public/filemanager/__mini__/'~product.gallery.0.file)}}" alt="{{gallery.0.alt}}"/>
								</div>
							</div>
							<div class="col-6">
								<div class="photo" data-fancybox="gallery-{{index}}" data-src="{{base_url('public/filemanager/'~product.gallery.1.file)}}">
									<img src="{{base_url('public/filemanager/__mini__/'~product.gallery.1.file)}}" alt="{{gallery.1.alt}}"/>
								</div>
							</div>
						{% endfor %}
					</div>

					{# <div class="row g-0 mt-40 mt-md-100 justify-content-center">
					                    <button class="button button--red button--all">Загрузить еще</button>
					                  </div> #}
				</div>
			</div>
		</div>
	</div>

</section>
