<section class="sect-form sect-form__block{% if page_id== 25 %} section--mb{% endif %}"{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
  <div class="sect-form__block-photo">
    <img src="{{base_url('public/filemanager/'~banner)}}" alt="" />
  </div>
  <div class="sect-form__block-content">
    <div class="container-xxl g-2 g-lg-4">
      <div class="row">
        <div class="col-12 col-xl-6 br-left-before">
          <div class="section__block-title sect-form__block-title text-white-custom">
            <div class="section__title">{{title}}</div>
            <div class="section__subtitle">{{text}}</div>
          </div>
        </div>
        <div class="col-12 col-xl-6">
          <form class="sect-form__form row g-0">
           {% if time_boolean.time_true==1 %}
            <div class="col-12 mb-15">
              <div class="itc-select" id="select-time">
                <!-- Кнопка для открытия выпадающего списка -->
                <button type="button" class="itc-select__toggle form-select form-control" name="time" value="" data-select="toggle" data-index="-1">Выбрать время (не обязательно)</button>
                <!-- Выпадающий список -->
                <div class="itc-select__dropdown">
                  <ul class="itc-select__options">
                    {% for index, itemTime in list_form_time %}
                    <li class="itc-select__option" data-select="option" data-value="{{itemTime.time}}" data-index="{{index}}">{{itemTime.time}}</li>
                    {% endfor %}
                  </ul>
                </div>
              </div>
            </div>
            {% endif %}
              <div class="col-12 mb-15">
                <input type="text" name="name" class="form-control" placeholder="ФИО" />
              </div>
              <div class="col mb-15">
                <input type="text" name="phone" class="form-control" placeholder="Телефон" rules="phone|empty" />
              </div>
              <div class="col-12 mb-24">
                <div class="form-check">
                  <input name="_agreement" class="form-check-input" type="checkbox" id="gridCheck1" checked  rules="empty" />
                  <label class="form-check-label text-white-custom" for="gridCheck1"> Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности </label>
                </div>
              </div>
            <button type="submit" class="button button--white" callbackform="questionsForm">Заказать</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>