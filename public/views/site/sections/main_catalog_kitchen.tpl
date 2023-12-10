<section class="section kitchen-section section--mb " {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="container-xxl g-2 g-lg-4">
		<div class="section__block-title">
			<div class="section__subtitle">{{subtitle}}</div>
			<div class="section__title">{{title}}</div>
		</div>
		<div class="section--pb border-light-white">
			<div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
				{% for index, group in kitchen_list|sortbykey %}
					<div class="col group-{{index}}">
						<div class="row {% if index==2 %}g-2 g-lg-3{% endif %}{% if index==3 %}g-0 gy-2 gy-lg-3{% endif %}">
							{% for item in group|sortby("sort") %}
								{% if item.btn_cat==0 %}
									<div class="col{% if item.position=='left' %} col-12 col-md-6{% endif %}{% if item.position=='right' %} col-12 col-md-6 offset-md-6{% endif %}{% if item.size_photo=='horizontal' %} col-12{% endif %}">
										<a href="{{base_url('/'~item.product_kitchen.seo_url)}}" class="photo{% if item.size_photo=='big' %} photo-big photo-sm-down-big{% endif %}{% if item.size_photo=='horizontal' %} photo-horizontal photo-sm-down-small{% endif %}{% if item.size_photo=='small' %} photo-small photo-sm-down-small{% endif %}{% if item.size_photo=='small-big' %} photo-sm-down-big{% endif %}">
											<img src="{{base_url('public/filemanager/__mini__/'~item.bg)}}" loading="lazy"/>
											<div class="matte photo-matte text-white-custom photo-text">
												<div class="photo-text__title">{{item.title}}</div>
												<div class="photo-text__text">{{item.subtitle}}</div>
											</div>
										</a>
									</div>
								{% endif %}
								{% if item.btn_cat==1 %}
									<div class="col-6 gy-2 gy-lg-3 d-none d-md-flex col-btn-pc">
										<a href="{{cat[0].href}}" class="button">{{text_btn}}</a>
									</div>
								{% endif %}
							{% endfor %}
						</div>
					</div>
				{% endfor %}
				<div class="col g-3 d-flex d-md-none col-btn-mobile">
					<a href="{{base_url('/kitchen')}}" class="button">{{text_btn}}</a>
				</div>
			</div>
		</div>
	</div>
</section>
