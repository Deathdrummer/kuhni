<section class="section mexanizm-section" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="container-xxl g-2 g-lg-4">
		<div class="section__block-title row mb-25 mb-md-30">
			<div class="col-12 col-lg-10">
				<div class="section__subtitle">{{subtitle}}</div>
				<div class="section__title">{{title}}</div>
			</div>
			<div class="swiper-block-button col-12 col-lg-2">
				<div class="swiper-prev"></div>
				<div class="swiper-next"></div>
			</div>
		</div>
		<div class="section--pb border-light-white">
			<div class="swiper swiper-mexanizm-section  overflow-hidden">
				<div class="swiper-wrapper">
					{% if slider_mexanizm %}
						{% for slider in slider_mexanizm %}
							<div class="swiper-slide {{slider.class_photo}}">
								<div class="photo">
									<img src="{{base_url('public/filemanager/__mini__/'~slider.img)}}" loading="lazy"/>
								</div>
							</div>
						{% endfor %}
					{% endif %}
				</div>
			</div>
		</div>
	</div>
</section>
