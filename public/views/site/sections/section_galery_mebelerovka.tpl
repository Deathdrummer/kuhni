<section class="section mt-60 mt-md-100 section_galery_mebelerovka"{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
          <div class="container-xxl g-2 g-lg-4">
            <div class="row g-0 gx-60 border-row-card">
              {% if list_mebelerovka_parent %}
                {% for index_parent, item_parent in list_mebelerovka_parent %}
                    <div class="col-12">
                      <div class="row g-0 gx-md-3 flex-column-reverse flex-md-nowrap flex-md-row flex-custom-reverse ">
                        <div class="col-12 col-swiper col-md-6">
                          {% if list_mebelerovka %}
                            {% for index_children, item_children in list_mebelerovka %}
                                {% if index_parent == index_children %}
                                  <div class="swiper-prev swiper-button-prev-{{index_children}}"></div>
                                      <div class="swiper-next swiper-button-next-{{index_children}}"></div>
                                      <div class="swiper swiper-mebelerovka  overflow-hidden"  data-id="{{index_children}}">
                                      <div class="swiper-wrapper">
                                        {% if item_children %}
                                          {% for item in item_children %}
                                            <div  data-fancybox="gallery-{{index_children}}-pc" data-src="{{base_url('public/filemanager/'~item.image_pc)}}" class="swiper-slide d-none d-md-block">
                                                  <div class="photo">
                                                    <img src="{{base_url('public/filemanager/__mini__/'~item.image_pc)}}" loading="lazy" />
                                                  </div>
                                            </div>
                                            <div data-fancybox="gallery-{{index_children}}-mobile" data-src="{{base_url('public/filemanager/'~item.image_mobile)}}" class="swiper-slide  d-block d-md-none">
                                                  <div class="photo">
                                                    <img src="{{base_url('public/filemanager/__mini__/'~item.image_mobile)}}" loading="lazy" />
                                                  </div>
                                            </div>
                                          {% endfor %}
                                        {% endif %}
                                      </div>
                                    </div>
                                {% endif %}
                             {% endfor %}
                           {% endif %}
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-center pb-20 pb-md-0">
                          <div class="col-title mb-10 mb-md-20">{{item_parent.title}}</div>
                          <div class="story">{{item_parent.text}}</div>
                              {% if list_mebelerovka %}
                                {% for index_children, item_children in list_mebelerovka %}
                                    {% if index_parent == index_children %}
                                      {% if item_children %}
                                       <div class="link-komplect mt-22 mt-md-40">
                                          <div  data-fancybox="gallery-{{index_children}}-pc" data-src="{{base_url('public/filemanager/'~item_children[0].image_pc)}}" class="d-none d-md-block">
                                              Посмотреть комплектацию
                                          </div>
                                          <div data-fancybox="gallery-{{index_children}}-mobile" data-src="{{base_url('public/filemanager/'~item_children[0].image_mobile)}}" class="d-block d-md-none">
                                              Посмотреть комплектацию
                                          </div>
                                        </div>
                                      {% endif %}
                                    {% endif %}
                                  {% endfor %}
                                {% endif %}
                            </div>
                          </div>
                        </div>
                    {% endfor %}
              {% endif %}


            </div>
          </div>
 </section>
