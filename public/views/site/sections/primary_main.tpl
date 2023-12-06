<section class="section primary_main"{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
	<div class="main__block-photo">
		<img src="{{base_url('public/filemanager/'~banner)}}" alt="" />
	</div>
	<div class="main__block-text">
		<div class="container-xxl g-2 g-lg-4">
			<h1 class="main__title">{{title}}</h1>
		</div>
	</div>
	<hr class="main__line" />
</section>