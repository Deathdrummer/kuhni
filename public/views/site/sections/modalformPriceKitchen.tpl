<div class="modal fade zayavka-modal" id="formPriceKitchen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-w-custom modal-dialog-centered">
		<div class="modal-content bg-transparent">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть" callbackformclose></button>
			<div class="row g-0 gap-0 gap-md-10 buttons">
				<div class="col-12 bcg--white-v1 p-20 d-none d-md-block text-center modal-title-custom">Заявка на расчёт стоимости кухни</div>
				<div class="col-12 d-flex flex-column justify-content-center bcg--white-v1 ps-10 pe-10 pt-28 pb-50 ps-md-30 pe-md-30 pt-md-28 pb-md-60" id="callbackFormPopper">
					<div class="col-12 bcg--white-v1 text-center d-block d-md-none modal-form-title pb-30 pt-0 pt-md-0">Расчёт стоимости кухни</div>
					{# ---------------------------------------- форма мобильная --------------------------------------- #}
					<form class="sect-form--white-theme d-block d-md-none">
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
					</form>
					{# ---------------------------------------- форма десктоп --------------------------------------- #}
					<form class="sect-form--white-theme d-none d-md-block">
						<div class="row g-0 gx-26 mb-50">
							<div class="col-12 mb-24">
								<div class="col-title-form">Выберите конфигурацию:</div>
							</div>
							<div class="col-12 row gx-24 row-cols-4 g-0">
								{% for index, item in list_form_konf_kitchen %}
									<div class="col">
										<label class="form-check-image p-8" for="img{{index}}">
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
						<div class="row g-0 mb-50">
							<div class="col-12 mb-24">
								<div class="col-title-form">Укажите размеры:<span>
										(например 2,65)</span>
								</div>
							</div>
							<div class="row g-0 gap-30 col-12">
								<div class="col d-flex flex-row align-items-center">
									<label class="me-20 text-nowrap" for="">Сторона
										<span class="fw-bold">A</span>
									</label>
									<input type="text" placeholder="" name="side_a" class="form-control h-40"/>
								</div>
								<div class="col d-flex flex-row align-items-center">
									<label class="me-20 text-nowrap" for="">Сторона
										<span class="fw-bold">B</span>
									</label>
									<input type="text" placeholder="" name="side_b" class="form-control h-40"/>
								</div>
								<div class="col d-flex flex-row align-items-center">
									<label class="me-20 text-nowrap" for="">Сторона
										<span class="fw-bold">C</span>
									</label>
									<input type="text" placeholder="" name="side_c" class="form-control h-40"/>
								</div>
							</div>
						</div>
						<div class="row g-0 gx-1 mb-50">
							<div class="col col-lg-auto">
								<div class="col mb-24">
									<div class="col-title-form">Укажите высоту</div>
								</div>
								<div class="col">
									{% for index, item in list_form_height_kitchen %}
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="height[{{item.variant}}]" id="h{{index}}"/>
											<label class="form-check-label text-white-custom" for="h{{index}}">
												{{item.variant}}
											</label>
										</div>
									{% endfor %}
								</div>
							</div>
							<div class="col col-lg-auto">
								<div class="col mb-24">
									<div class="col-title-form">Техника:</div>
								</div>
								<div class="col">
									{% for index, item in list_form_texnika_kitchen %}
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="tech[{{item.variant}}]" id="t{{index}}"/>
											<label class="form-check-label text-white-custom" for="t{{index}}">
												{{item.variant}}
											</label>
										</div>
									{% endfor %}
								</div>
							</div>
							<div class="col col-lg-auto">
								<div class="col mb-24">
									<div class="col-title-form">Фурнитура:</div>
								</div>
								<div class="col">
									{% for index, item in list_form_furnitura_kitchen %}
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="furniture[{{item.variant}}]" id="p{index}}"/>
											<label class="form-check-label text-white-custom" for="p{{index}}">
												{{item.variant}}
											</label>
										</div>
									{% endfor %}
								</div>
							</div>
						</div>
						<div class="row g-0">
							<div class="col-12 mb-24">
								<div class="col-title-form">Дополнительные пожелания:<span>
										(не обязательно)</span>
								</div>
							</div>
							<div class="col">
								<textarea class="form-control" name="comment" placeholder="Введите ваше сообщение" rows="5"></textarea>
							</div>
						</div>
						<div class="row g-0 gx-5 mt-30">
							<div class="col-4">
								<input type="text" name="name" class="form-control" placeholder="Имя"/>
							</div>
							<div class="col-4">
								<input type="tel" name="phone" class="form-control" placeholder="Телефон" rules="phone|empty"/>
							</div>
							<div class="col-4">
								<input type="text" name="email" class="form-control" placeholder="E-mail" rules="email"/>
							</div>
						</div>
						<div class="row g-0 mt-15 mb-md-60">
							<div class="col">
								<div class="mb-8 text-files">Прикрепить файл
									<span>(если есть)</span>
								</div>
								<label class="button button--black btn-sm button--small" role="button">
									Загрузить
									<input type="file" name="attach" class="d-none">
								</label>
							</div>
						</div>
						<div class="row g-0 justify-content-center mb-20 mb-md-15">
							<button class="button button--black" callbackform="calcPriceKitchen">Отправить</button>
						</div>
					</form>
					<h2 class="text-center fs-1 fw-bold d-none" success>{{callback['calcPriceKitchen']['success']}}</h2>
				</div>
			</div>
		</div>
	</div>
</div>
