<section class="section section-catalog-v3-title section--pt bcg--black-v1 pt-4 pt-md-95 pb-35 pb-md-0" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="container-xxl g-2 g-lg-4">
		<div class="section__block-title text-white-custom mb-0">
			<div class="section__subtitle">{{subtitle}}</div>
			<div class="section__title">{{title}}</div>
		</div>
	</div>
</section>
<section class="section section-catalog-v3 section--pb section--mb bcg--black-v1">
	<div class="container-xxl g-2 g-lg-4">
		<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-15 gx-md-3 gy-55 mt-0">
			{% for item in mexan_texn_list %}
				<div class="col">
					<div class="row row-cols-2 g-1">
						<div class="col">
							<div class="photo">
								<img src="{{base_url('public/filemanager/__mini__/'~item.img_1)}}" loading="lazy" alt=""/>
							</div>
						</div>
						<div class="col">
							<div class="photo">
								<img src="{{base_url('public/filemanager/__mini__/'~item.img_2)}}" loading="lazy" alt=""/>
							</div>
						</div>
						<div class="col">
							<div class="photo">
								<img src="{{base_url('public/filemanager/__mini__/'~item.img_3)}}" loading="lazy" alt=""/>
							</div>
						</div>
						<div class="col">
							<div class="photo">
								<img src="{{base_url('public/filemanager/__mini__/'~item.img_4)}}" loading="lazy" alt=""/>
							</div>
						</div>
					</div>
					<div class="text-white-custom border-bottom border-color-custom pt-2 pt-md-3">{{item.text_images}}</div>
				</div>
			{% endfor %}
		</div>
	</div>
</section>
