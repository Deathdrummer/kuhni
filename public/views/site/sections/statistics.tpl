<section class="section statistics statistics-section" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="container-xxl g-2 g-lg-4">
		<div class="statistics__items row row-cols-1 row-cols-md-2 row-cols-xxl-4 g-1">
			{% if statistics %}
				{% for statistic in statistics %}
					<div class="col">
						<div class="statistics__item col bcg--grey-v1  justify-content-md-start pt-md-100">
							<div class="statistics__item-title">{{statistic.title}}</div>
							<div class="statistics__item-text">{{statistic.text}}</div>
						</div>
					</div>
				{% endfor %}
			{% endif %}
		</div>
	</div>
</section>
