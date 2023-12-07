<section class="section closet-section section--mb "{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
	  <div class="container-xxl g-2 g-lg-4">
    <div class="section__block-title">
        <div class="section__subtitle">{{subtitle}}</div>
      <div class="section__title">{{title}}</div>
    </div>
    <div class="section--pb border-light-white">
      <div class="row g-2 g-lg-3">

      {% for item in main_catalog_closet %}
              <div class="col-closet col-12 col-lg-4">
                <a href="{{item.cat_kitchen.seo_url}}" class="photo">
                    <img	src="{{base_url('public/filemanager/'~item.bg)}}" loading="lazy" />
                  <div class="matte photo-matte photo-text">
                <div class="photo-text__title">{{item.title}}</div>
                       <div class="photo-text__text">{{item.subtitle}}</div>
                  </div>
                </a>

                {% if item.btn_true %}
                  <div class="d-none d-lg-flex col-btn-pc mt-lg-auto">
                      <a href="{{data_cat[0].href}}" class="button">{{btn_text}}</a>
                    </div>
                {% endif %}
              </div>
      {% endfor %}

        <div class="col-closet col-12 d-flex d-lg-none col-btn-mobile">
          <a href="{{data_cat[0].href}}" class="button">{{btn_text}}</a>
        </div>
      </div>
    </div>
  </div>
</section>