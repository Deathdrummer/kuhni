<section class="main main__block main__block--small banner_contacts" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="mt-60 mt-md-90 mt-lg-120 mb-25 mb-lg-60">

		<div class="container-xxl g-1 g-lg-4">
			<div class="row row-cols-1 row-cols-md-2 g-0 ">
					<div class="col button--red pt-60 pt-md-110 pb-60 pb-md-110">
						<h1 class="main__title main__title--small mb-15 mb-md-35">{{title}}</h1>
						<div class="story contacts-col-text">{{text}}</div>
					</div>
				<div class="col">
					<div class="main__block-photo main__block-photo--small main__block-photo--cols-2">
						<img class="img-bcg-contacts" src="{{base_url('public/filemanager/'~banner)}}" loading="lazy" alt=""/>
						<div class="main-swiper">
						<div class="swiper swiper-contacts  overflow-hidden" data-speed="{{speed}}" >
							<div class="swiper-wrapper">
										{% for item in gallery %}
											<div class="swiper-slide">
												<div class="photo">
													<img src="{{base_url('public/filemanager/__mini__/'~item.image)}}" loading="lazy"/>
												</div>
											</div>
										{% endfor %}
								</div>
							</div>
						</div>
						</div>

				</div>
			</div>
		</div>
	</div>

</section>
