<div class="modal fade" id="modalproect" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-w-custom modal-dialog-centered">
    <div class="modal-content bg-transparent">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть" callbackformclose></button>
      <div class="row g-0 gap-10" id="callbackFormPopper">
        <div class="col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom">Заказать проект</div>
        <div class="col-12 col-messages bcg--white-v1 col-md-auto order-2 order-md-1">
          <div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
            <div class="col-message__title">Написать в Whatsapp</div>
            <div class="col-message__icon">
              <a href="{{soc[2].link}}" class="sosial-link">
               <img class="icon-sosial ic-{{soc[2].title}}" src="{{base_url('public/filemanager/'~soc[2].icon)}}" loading="lazy" alt="{{soc[2].title}}" />
             </a>
            </div>
          </div>
          <div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
            <div class="col-message__title">Написать в Telegram</div>
            <div class="col-message__icon">
              <a href="{{soc[2].link}}" class="sosial-link">
                <img class="icon-sosial ic-{{soc[2].title}}" src="{{base_url('public/filemanager/'~soc[2].icon)}}" loading="lazy" alt="{{soc[2].title}}" />
              </a>
            </div>
          </div>
          <div class="col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25">
            <div class="col-message__title">Позвонить {{soc[3].link}}</div>
            <div class="col-message__icon">
               <a href="https://tel:~{{soc[3].link}}" class="sosial-link">
                 <img class="icon-sosial ic-{{soc[3].title}}" src="{{base_url('public/filemanager/'~soc[3].icon)}}" loading="lazy" alt="{{soc[3].title}}" />
                </a>
            </div>
          </div>
        </div>
        <div class="col-12 d-flex flex-column justify-content-center bcg--white-v1 col-md-auto order-1 order-md-2 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0">
          <div class="text-center modal-form-title mb-24 mb-lg-35">Заказать проект</div>
          <form class="sect-form--white-theme">
            <div class="mb-1">
              <input type="text" name="name" class="form-control" placeholder="Имя" />
            </div>
            <div class="mb-20">
              <input type="tel" name="phone" class="form-control phone" placeholder="Телефон" rules="phone|empty" />
            </div>
            <div class="row g-0 justify-content-center mb-20 mb-md-15">
              <button class="button button--black" callbackform="orderProjectForm">Отправить</button>
            </div>
            <div class="text-center corp-form">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
          </form>
        </div>
        <div class="col-12 bcg--white-v1 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0 d-none" success>
          <h2 class="text-center mt-25 fs-1 fw-bold">{{callback['orderProjectForm']['success']}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>