<section class="section section--mb advantages advantages__block"{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
  <div class="container-xxl g-2 g-lg-4">
			<div class="advantages__items row row-cols-1 row-cols-md-2 row-cols-xl-4 g-1">
			{% if tabs_list %}
				{% for tab in tabs_list %}
					<div class="col">
						<div class="advantages__item bcg--grey-v1">
							<div class="advantages__item-title">
							<span>{{tab.title}}</span>
							<div class="advantages__item-icon">
								<img class="advantages__item-icon--svg" src="{{base_url('public/filemanager/'~tab.icon)}}" loading="lazy" alt="" />
							</div>
							</div>
							<div class="advantages__item-text">{{tab.desc}}</div>
						</div>
						</div>
				{% endfor %}
			{% endif %}
			</div>
  </div>
</section>