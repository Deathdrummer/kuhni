<section class="section mb-105" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="container-xxl g-2 g-lg-4">
		<div class="border-light-white pb-100">
			<div class="row row-cols-1 row-cols-lg-2 g-0 gy-40 gy-md-55 gx-40">
				{% for item in info_list %}
					<div class="col">
						<div class="d-flex flex-column flex-md-row">
							<div class="photo photo-bcg-black  photo-vertical bg-black">
								<img class="opacity-50" src="{{base_url('public/filemanager/__mini__/'~item.images)}}" loading="lazy" alt=""/>
							</div>
							<div class="col mt-40 mt-md-0 ms-md-20">
								<div class="col-title mb-15 mb-md-40">{{item.title}}</div>
								<div class="story col-text">{{item.text}}</div>
							</div>
						</div>
					</div>
				{% endfor %}
			</div>
		</div>
	</div>
</section>
