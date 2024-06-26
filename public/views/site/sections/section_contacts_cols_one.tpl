<section class="section contacts-section contacts-section--cols-one mt-80 mt-md-135 mb-60"{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
  <div class="container-xxl g-2 g-lg-4">
    <div class="row g-3">
      <div class="col-12">
        <div class="section__block-title mb-15 mb-md-35 ">
          <div class="section__title ">{{title}}</div>
        </div>
        <div class="contacts-section__list">
          {% for item in list_contacts_section|sortby('sort_contacts') %}
                <div class="contacts-section__item">
                  {% if item.tel != "" %}<a href="tel:{{item.tel}}"{% endif %}
                  {% if item.mail != "" %}<a href="mailto:{{item.mail}}"{% endif %}
                    {% if item.mail == "" and item.tel == "" %}<div {% endif %} class="contacts-section__item-title">
                      <img class="icon-contacts" src="{{base_url('public/filemanager/'~item.ic)}}" loading="lazy" alt="" />
                      <span>{{item.title}}</span>

                  {% if item.mail != "" or item.tel != "" %}</a>{% endif %}
                    {% if item.mail == "" and item.tel == "" %} </div> {% endif %}
                    <div class="contacts-section__item-text story">{{item.text}}</div>
                </div>
          {% endfor %}
        </div>
        <div class="contacts-section__sosials">
          <div class="sosials d-flex justify-content-center">
              {% for sosial in soc %}
               {% if sosial.title != "phone" %}
                  <a href="{{sosial.link}}" class="sosial-link">
                      <svg class="icon-sosial ic-{{sosial.title}}">
                            <use xlink:href="{{base_url('public/svg/sprite-acvarel.svg#'~sosial.sprite)}}"></use>
                      </svg>
                    </a>
                {% endif %}
              {% endfor %}
          </div>
        </div>
      </div>
      <div class="col-12 ">
        <div class="map" style="position: relative; overflow: hidden">{{map_block | raw}}</div>
      </div>
    </div>
  </div>
</section>