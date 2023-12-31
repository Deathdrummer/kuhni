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
					</ul>
					<div class="property-list d-flex flex-column border-md-none pb-0 pb-md-35 pt-20">Доставка и установка по Москве и М.О.</div>
				</div>
				<div class="order-1 order-lg-2 mb-20 mb-lg-0 d-flex">
					<button class="button button--black" data-bs-toggle="modal" data-bs-target="#modalraschet">Заказать расчет</button>
					<button class="ms-5 d-block d-lg-none button-share" data-bs-toggle="modal" data-bs-target="#modalshare">
						<img src="{{base_url('public/filemanager/'~icon_share)}}" alt="share"/>
					</button>
				</div>
				<div class="modal fade" id="modalraschet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-w-custom modal-dialog-centered">
						<div class="modal-content bg-transparent" id="callbackFormPopper">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть" callbackformclose></button>
							<div class="row g-0 gap-10">
								<div class="col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom">Заказать расчет</div>
								<div class="col-12 col-messages bcg--white-v1 col-md-auto order-2 order-md-1">
									<div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
										<div class="col-message__title">Написать в Telegram</div>
										<div class="col-message__icon">
											<a href="{{soc[1].link}}" class="sosial-link">
												<img class="icon-sosial ic-{{soc[1].title}}" src="{{base_url('public/filemanager/'~soc[1].icon)}}" alt="{{soc[1].title}}"/>
											</a>
										</div>
									</div>

									<div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
										<div class="col-message__title">Написать в Whatsapp</div>
										<div class="col-message__icon">
											<a href="{{soc[2].link}}" class="sosial-link">
												<img class="icon-sosial ic-{{soc[2].title}}" src="{{base_url('public/filemanager/'~soc[2].icon)}}" alt="{{soc[2].title}}"/>
											</a>
										</div>
									</div>
									<div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
										<div class="col-message__title">Позвонить
											{{soc[3].link}}</div>
										<div class="col-message__icon">
											<a phone class="sosial-link">
												<p class="d-none">{{soc[3].link}}</p>
												<img class="icon-sosial ic-{{soc[3].title}}" src="{{base_url('public/filemanager/'~soc[3].icon)}}" alt="{{soc[3].title}}"/>
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
				</div>
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
