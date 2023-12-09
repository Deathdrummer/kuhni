<section class="section our-advantages our-advantages-section section--mb section--mt"{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
   <div class="container-xxl g-2 g-lg-4">
     <div class="section__block-title">
      <div class="section__subtitle">{{subtitle}}</div>
        <div class="section__title">{{title}}</div>
     </div>
     <div class="our-advantages__items row row-cols-1 row-cols-md-2 row-cols-xl-4 g-15 g-md-1">
       {% for item in our_advantages_list %}
         {% if item.images %}
             <div class="col">
               <div class="our-advantages__item col bcg--grey-v1 photo">
                 <img src="{{base_url('public/filemanager/__mini__/'~item.images)}}" loading="lazy" alt="" />
                 <div class="our-advantages__item-text text-white-custom">{{item.text}}</div>
               </div>
             </div>
           {% else %}
             <div class="col">
               <div class="our-advantages__item col bcg--grey-v1 photo photo--null">
                 <div class="our-advantages__item-text">{{item.text}}</div>
               </div>
             </div>
           {% endif %}
         {% endfor %}
     </div>
   </div>
</section>