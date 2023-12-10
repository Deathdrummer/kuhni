<section class="section contacts-section mt-50 section--mb" {% if data_scroll_id %} id="{{data_scroll_id}}" {% endif %} {% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}" {% endif %}>
	<div class="container-xxl g-2 g-lg-4">
		<div class="row g-3">
			<div class="col-12 col-lg-5 col-xl-4 br-left-before">
				<div class="section__block-title">
					<div class="section__title">{{title}}</div>
				</div>
				<div class="contacts-section__list">
					{% for item in list_contacts_section %}
						<div class="contacts-section__item">
							{% if item.tel != "" %}
								<a href="tel:{{item.tel}}" {% endif %} {% if item.mail != "" %}
