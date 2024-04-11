<div class="modal fade" id="modalproect" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-w-custom modal-dialog-centered">
		<div class="modal-content bg-transparent" id="callbackFormPopper">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть" callbackformclose></button>
			<div class="row g-0 gap-10">
				<div class="col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom">Заказать проект</div>
				<div class="col-12 col-messages bcg--white-v1 col-md-auto order-2 order-md-1">
					<div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
						<div class="col-message__title">Написать в Whatsapp</div>
						<div class="col-message__icon">
							<a href="{{soc[4].link}}" class="sosial-link">
								<img class="icon-sosial ic-{{soc[4].title}}" src="{{base_url('public/filemanager/'~soc[4].icon)}}" loading="lazy" alt="{{soc[4].title}}"/>
							</a>
						</div>
					</div>
					<div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
						<div class="col-message__title">Написать в Telegram</div>
						<div class="col-message__icon">
							<a href="{{soc[5].link}}" class="sosial-link">
								<img class="icon-sosial ic-{{soc[5].title}}" src="{{base_url('public/filemanager/'~soc[5].icon)}}" loading="lazy" alt="{{soc[5].title}}"/>
							</a>
						</div>
					</div>
					<div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
						<div class="col-message__title">Позвонить
							{{soc[6].link}}</div>
						<div class="col-message__icon">
							<a phone  class="sosial-link">
							<span class="d-none">{{soc[6].link}}</span>
								<img class="icon-sosial ic-{{soc[6].title}}" src="{{base_url('public/filemanager/'~soc[6].icon)}}" loading="lazy" alt="{{soc[6].title}}"/>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 d-flex flex-column justify-content-center bcg--white-v1 col-md-auto order-1 order-md-2 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0">
					<div class="text-center modal-form-title mb-24 mb-lg-35">Заказать проект</div>
					<form class="sect-form--white-theme">
						<div class="mb-1">
							<input type="text" name="name" class="form-control" placeholder="Имя"/>
						</div>
						<div class="mb-20">
							<input type="tel" name="phone" class="form-control phone" placeholder="Телефон" rules="phone|empty"/>
						</div>
						<div class="row g-0 justify-content-center mb-20 mb-md-15">
							<button class="button button--black" callbackform="orderProjectForm">Отправить</button>
						</div>
						<div class="text-center corp-form">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
					</form>
				</div>
			</div>

			<div class="col-12 bcg--white-v1 ps-10 pe-10 ps-md-33 pe-md-33 pt-40 pt-md-80 pb-40 pb-md-100 d-none text-center" success>
				<img src="{{base_url('public/images/success.svg')}}" class="w-60px mb-20px" alt="">
				<h2 class="fs-2 fw-bold mb-10px">Спасибо, заявка принята!</h2>
				{% if callback['orderProjectForm']['success'] %}
					<p class="fs-2">{{callback['orderProjectForm']['success']}}</p>
				{% endif %}
			</div>
		</div>
	</div>
</div>
