<section class="sect-form sect-form--white-theme sect-form__block mb-60 mb-md-80" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="container-xxl g-2 g-lg-4">
		<div class="d-flex flex-column justify-content-center border-light-white pb-60 pb-md-80">
			<div class="sect-form__title-form d-flex justify-content-center mb-40 mb-md-70">{{title}}</div>
			<form class="sect-form__form m-auto">
				<div class="row g-10 gy-10">
					<div class="col-12 col-md-4">
						<input type="text" name="name" class="form-control" placeholder="Имя"/>
					</div>
					<div class="col-12 col-md-4">
						<input type="text" name="phone" class="form-control" placeholder="Телефон" rules="phone|empty"/>
					</div>
					<div class="col-12 col-md-4">
						<input type="text" name="email" class="form-control" placeholder="E-mail" rules="email"/>
					</div>
				</div>
				<div class="row g-0">
					<div class="col g-0 gy-10 gy-md-20">
						<textarea class="form-control" name="message" placeholder="Введите ваше сообщение" rows="5"></textarea>
					</div>
				</div>
				<div class="row g-0 mt-15 mb-24 mb-md-8">
					<div class="col">
						<div class="mb-8 text-files">Прикрепить файл</div>
						<label class="button button--black btn-sm button--small" role="button">
							Загрузить
							<input type="file" name="attach" class="d-none">
						</label>
					</div>
				</div>
				<button type="submit" class="button button--black m-auto" callbackform="sendToDirector">Заказать</button>
				<div class="d-flex mt-15">
					<label class="form-check-label text-white-custom text-center m-auto">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности
					</label>
				</div>
			</form>
		</div>
	</div>
</section>
