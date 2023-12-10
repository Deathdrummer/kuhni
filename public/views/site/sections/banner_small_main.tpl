<section class="main main__block main__block--small" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="main__block-photo main__block-photo--small">
		<img src="{{base_url('public/filemanager/'~banner)}}" loading="lazy" alt=""/>
	</div>
	<div class="main__block-text">
		<div class="container-xxl g-2 g-lg-4">
			<h1 class="main__title main__title--small">{{title}}</h1>
		</div>
	</div>
	<hr class="main__line"/>
</section>
