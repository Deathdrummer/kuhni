<section class="section section-catalog-v2 section--mb"{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
  <div class="container-xxl g-2 g-lg-4">
    <div class="section__block-title row">
      <div class="col-12 col-lg-10">
       <div class="section__subtitle">{{subtitle}}</div>
       <div class="section__title">{{title}}</div>
      </div>
    </div>
    <div class="section--pb border-light-white">
      <div class="row g-8 gx-lg-3">
         {% for groupId, data in images_mexan %}
               <div class="col-12 row g-0{% if groupId==1 %} col-lg-8 col-l-v2{% endif %}{% if groupId==2 %} col-lg-4 col-r-v2{% endif %}">
                 {% for item in data %}
                     <div class="{% if groupId == 1 and (item.size_photo=='small' or item.size_photo=='') %}col-6 g-8 g-lg-3{% endif %}{% if item.size_photo=='horizontal' %}col-12 g-8 g-lg-3{% endif %}{% if groupId == 2 and item.size_photo=='small'  %} col-6 col-lg-12 g-8 g-lg-3 {% endif %}{% if item.size_photo=='small-big' %} col-6 col-lg-12 g-8 g-lg-3 {% endif %}{% if item.size_photo=='big' %} col-12 g-8 g-lg-3 {% endif %}">
                       <div class="photo{% if item.size_photo=='big' %} photo-big{% endif %}{% if item.size_photo=='horizontal' %} photo-horizontal{% endif %}{% if item.size_photo=='small' %} photo-small {% endif %}{% if item.size_photo=='small-big' %} photo-small-big {% endif %}">
                         <img src="{{base_url('public/filemanager/'~item.images)}}" loading="lazy" alt="" />
                       </div>
                     </div>
                   {% endfor %}
               </div>
         {% endfor %}
      </div>
    </div>
  </div>
</section>
