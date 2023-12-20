<div class="modal fade zayavka-modal" id="formPriceShkaf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-w-custom modal-dialog-centered">
		<div class="modal-content bg-transparent" id="callbackFormPopper">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть" callbackformclose></button>
			<div class="row g-0 gap-0 gap-md-10 buttons">
				<div class="col-12 bcg--white-v1 p-20 d-none d-md-block text-center modal-title-custom">Заявка на расчёт стоимости мебели</div>
				<div class="col-12 d-flex flex-column justify-content-center bcg--white-v1 ps-10 pe-10 pt-25 pb-50 ps-md-30 pe-md-30 pt-md-28 pb-md-60">
					<div class="col-12 bcg--white-v1 text-center d-block d-md-none modal-form-title pb-30">Расчёт стоимости мебели</div>
					{# ---------------------------------------- форма мобильная --------------------------------------- #}
					<form class="sect-form--white-theme d-block d-md-none">
						<div class="row g-0 mb-20">
							<div class="col-12 mb-7">
								<div class="col-title-form">Помещение</div>
							</div>
							<div class="col-12">
								<div
									class="itc-select" id="select-pom">
									<!-- Кнопка для открытия выпадающего списка -->
									<button type="button" class="itc-select__toggle" name="room_type" value="" data-select="toggle" data-index="-1">Выбрать</button>
									<!-- Выпадающий список -->
									<div class="itc-select__dropdown">
										<ul class="itc-select__options">
											{% for index, item in list_form_pomechenie %}
												<li class="itc-select__option" data-select="option" data-value="{{item.variant}}" data-index="{{index}}">{{item.variant}}</li>
											{% endfor %}
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row g-0 mb-20">
							<div class="col-12 mb-7">
								<div class="col-title-form">Система открывания</div>
							</div>
							<div class="col-12">
								<div
									class="itc-select" id="select-otkryvaem">
									<!-- Кнопка для открытия выпадающего списка -->
									<button type="button" class="itc-select__toggle" name="open_system" value="" data-select="toggle" data-index="-1">Выбрать</button>
									<!-- Выпадающий список -->
									<div class="itc-select__dropdown">
										<ul class="itc-select__options">
											{% for index, item in list_form_sistem_otkryvaem %}
												<li class="itc-select__option" data-select="option" data-value="{{item.variant}}" data-index="{{index}}">{{item.variant}}</li>
											{% endfor %}
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row g-0 mb-20">
							<div class="col-12 mb-7">
								<div class="col-title-form">Общая длина мебели</div>
							</div>
							<div class="col-12">
								<div
									class="itc-select" id="select-dlina">
									<!-- Кнопка для открытия выпадающего списка -->
									<button type="button" class="itc-select__toggle" name="total_width" value="" data-select="toggle" data-index="-1">Выбрать</button>
									<!-- Выпадающий список -->
									<div class="itc-select__dropdown">
										<ul class="itc-select__options">
											{% for index, item in list_form_lenght %}
												<li class="itc-select__option" data-select="option" data-value="{{item.lenght}}" data-index="{{index}}">{{item.lenght}}</li>
											{% endfor %}
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row g-0 mb-20">
							<div class="col-12">
								<div class="col p-0 mb-7">
									<div class="col-title-form">Фасады:</div>
								</div>
								<div class="col p-0">
									{% for index, item in list_form_sistem_fasady %}
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="facades[{{item.variant}}]" id="mtp{{index}}"/>
											<label class="form-check-label text-white-custom" for="mtp{{index}}">{{item.variant}}
											</label>
										</div>
									{% endfor %}
								</div>
							</div>
						</div>
						<div class="row g-0 mb-20">
							<div class="col-12">
								<div class="col p-0 mb-7">
									<div class="col-title-form">Фурнитура:</div>
								</div>
								<div class="col p-0">
									{% for index, item in list_form_sistem_furniture %}
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="furniture[{{item.variant}}]" id="mpomfurn{{index}}"/>
											<label class="form-check-label text-white-custom" for="mpomfurn{{index}}">{{item.variant}}
											</label>
										</div>
									{% endfor %}
								</div>
							</div>
						</div>
						<div class="row g-0 gx-5 mt-40 mb-30">
							<div class="col-12">
								<input type="tel" class="form-control" name="phone" placeholder="Телефон" rules="phone|empty"/>
							</div>
						</div>

						<div class="row g-0 justify-content-center">
							<button class="button button--black button--220" callbackform="calcPriceCloset">Отправить</button>
						</div>
					</form>
					{# ---------------------------------------- форма десктоп --------------------------------------- #}
					<form class="sect-form--white-theme d-none d-md-block">
						<div class="row g-0 mb-50">
							<div class="col-12 mb-24">
								<div class="col-title-form">Помещение</div>
							</div>
							<div class="row row-pom g-0 gap-25 row-gap-10 col-12">
								{% for index, item in list_form_pomechenie %}
									<div class="col-auto">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="room_type[{{item.variant}}]" id="pom{{index}}"/>
											<label class="form-check-label text-white-custom" for="pom{{index}}">
												{{item.variant}}</label>
										</div>
									</div>
								{% endfor %}
							</div>
						</div>
						<div class="row g-0 gx-1 mb-50">
							<div class="col">
								<div class="row">
									<div class="col-12 mb-24">
										<div class="col-title-form">Система открывания:</div>
									</div>
									<div class="col-12">
										{% for index, item in list_form_sistem_otkryvaem %}
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="open_system[{{item.variant}}]" id="d{{index}}"/>
												<label class="form-check-label text-white-custom" for="d{{index}}">{{item.variant}}
												</label>
											</div>
										{% endfor %}
									</div>
								</div>
							</div>
							<div class="col">
								<div class="row">
									<div class="col-12 mb-24">
										<div class="col-title-form">Фурнитура:</div>
									</div>
									<div class="col-12">
										{% for index, item in list_form_sistem_furniture %}
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="furniture[{{item.variant}}]" id="pom-furn{{index}}"/>
												<label class="form-check-label text-white-custom" for="pom-furn{{index}}">{{item.variant}}
												</label>
											</div>
										{% endfor %}
									</div>
								</div>
							</div>
							<div class="col">
								<div class="row">
									<div class="col-12 mb-24">
										<div class="col-title-form">Фасады:</div>
									</div>
									<div class="col-12">
										{% for index, item in list_form_sistem_fasady %}
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="facades[{{item.variant}}]" id="tp{{index}}"/>
												<label class="form-check-label text-white-custom" for="tp{{index}}">{{item.variant}}
												</label>
											</div>
										{% endfor %}
									</div>
								</div>
							</div>
						</div>
						<div class="row g-0">
							<div class="col-12 mb-24">
								<div class="col-title-form">Укажите общую длину и ваши пожелания:<span>
										(не обязательно)</span>
								</div>
							</div>
							<div class="col">
								<textarea name="comment" class="form-control" placeholder="Например, 2,65" rows="5"></textarea>
							</div>
						</div>
						<div class="row g-0 gx-5 mt-30">
							<div class="col-4">
								<input type="text" name="name" class="form-control" placeholder="Имя"/>
							</div>
							<div class="col-4">
								<input type="tel" name="phone" class="form-control" phone placeholder="Телефон" rules="phone|empty"/>
							</div>
							<div class="col-4">
								<input type="text" name="email" class="form-control" placeholder="E-mail" rules="email"/>
							</div>
						</div>
						<div class="row g-0 mt-15 mb-md-60">
							<div class="col">
								<label class="form-label">Прикрепить файл
									<span>(если есть)</span>
								</label>
								<label class="button button--black btn-sm button--small" role="button">
									Загрузить
									<input type="file" name="attach" class="d-none">
								</label>
								{# <label class="form-label" for="formFileMultiple">
																																																																                  <button class="button button--black button--small">Загрузить</button>
																																																																                  <p>dfsdfsdf</p>
																																																																                  <input class="d-none" type="file" id="formFileMultiple">
																																																																                </label> #}
							{# <div class="mb-8 text-files">Прикрепить файл <span>(если есть)</span></div>
																																																								                <input type="file" class="button button--black button--small" name="file" id="calcPriceClosetFile"> #}
								{# <label for="calcPriceClosetFile">
																																																																                  <button>Загрузить</button>
																																																																                </label> #}
							</div>
						</div>
						<div class="row g-0 justify-content-center mb-20 mb-md-15">
							<button class="button button--black" callbackform="calcPriceCloset">Отправить</button>
						</div>
					</form>
				</div>
			</div>
			
			<div class="col-12 bcg--white-v1 ps-10 pe-10 ps-md-33 pe-md-33 pt-40 pt-md-70 pb-40 pb-md-70 d-none text-center" success>
				<img src="{{base_url('public/images/success.svg')}}" class="w-60px mb-20px" alt="">
				<h2 class="fs-1 fw-bold mb-10px">Спасибо, заявка принята!</h2>
				<p class="fs-2">{{callback['calcPriceCloset']['success']}}</p>
			</div>
		</div>
	</div>
</div>
