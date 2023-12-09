<section class="section kitchen-catalog section--mt section--mb"{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
<div class="container-xxl g-2 g-lg-4">
    <div class="section__block-title">
      <div class="section__subtitle">{{subtitle}}</div>
      <div class="section__title">{{title}}</div>
    </div>
    <div class="section--pb border-light-white catalog-block">
      <div class="row row-cols-2 row-cols-lg-3 gx-8 gx-lg-3 gy-24 gy-lg-4">
      {% for product in products.items %}
      <div class="col">
          <div class="catalog-card">
            <div class="photo">
              <img src="{{base_url('public/filemanager/__mini__/'~product.main_image.file)}}" loading="lazy" alt="" />
            </div>

            <div class="photo-text border-bottom">
              <div class="photo-text__title">{{product.title}}</div>
              <div class="photo-text__text">{{product.short_desc}}</div>
              <a href="{{product.href}}"></a>
            </div>
          </div>
        </div>


          {% endfor %}

      </div>
      {# <div class="row g-0 justify-content-center mt-40 mt-md-120">
        <button class="button button--red button--all">Загрузить еще</button>
      </div> #}
    </div>
  </div>
</section>