<header class="header matte {% if page_vars[page_id]["shadow"] ?? false %}shadow{% endif %}">
  <div class="container-xxl g-40 g-lg-4">
	<div class="header__block">
	  <div class="col-auto p-0">

		{% if logo %}
		  {% if seo_url == 'index' %}
			<div class="logo">
				<img src="{{base_url('public/filemanager/'~logo.file)}}" alt="{{logo.alt}}" />
			</div>
		  {% else %}
			<a href="/" class="logo">
				<img src="{{base_url('public/filemanager/'~logo.file)}}" alt="{{logo.alt}}" />
			</a>
		  {% endif %}
		{% endif %}
	  </div>
	  <div class="header__block-col header__block-col--pcMenu">
		<nav class="nav nav__header d-none d-xl-block">
		  <ul>
				<li class="nav__menu-item">
					<div class="nav__title-link{{navigation.categories|hasinarr('active', 1) is not same as(false) ? ' active' : '' }}">Каталог</div>
					<div class="nav__sub-menu position-absolute pt-50">
						<ul class="matte">
							{% for item in navigation.categories %}
									<li><a {% if item.active %}class="active"{% endif %} href="{{item.href}}">{{item.title}}</a></li>
							{% endfor %}
						</ul>
			  	</div>
				</li>
				{% for item in navigation.pages %}
  					<li><a {% if item.active %}class="active"{% endif %} href="{{item.href}}">{{item.title}}</a></li>
      	{% endfor %}
		  </ul>
		</nav>
		<div class="header__contacts">
		  <div class="time d-none d-lg-block">
		  	{{header_label|raw}}
		  </div>
		  <div class="block-button d-none d-md-flex">
			<a class="button button--number" phone>{{phone.city1}}</a>
			<button class="button button--red" data-bs-toggle="modal" data-bs-target="#modalraschetPrice">Расчет стоимости</button>
		  </div>
		</div>
	  </div>
	  <div class="header__block-col header__block-col--mobileMenu" data-menu>
		<nav class="nav nav__header">
		  <ul>
				<li class="pc-none"><a href="/">Главная</a></li>
				<li class="nav__menu-item">
					<div class="nav__title-link">Каталог</div>
					<div class="nav__sub-menu">
					<ul>
						{% for item in navigation.categories %}
								<li><a href="{{item.href}}">{{item.title}}</a></li>
						{% endfor %}
					</ul>
					</div>
				</li>
				{% for item in navigation.pages %}
						<li><a href="{{item.href}}">{{item.title}}</a></li>
				{% endfor %}
		  </ul>
		</nav>
		<div class="header__contacts d-flex d-lg-none">
		  <div class="time">
			{{header_label|raw}}
		  </div>
		  <div class="block-button d-flex d-md-none">
			<a class="button button--number" phone>{{phone.city1}}</a>
			<button class="button button--red" data-bs-toggle="modal" data-bs-target="#modalraschetPrice">Расчет стоимости</button>
		  </div>
		</div>
	  </div>
	  <div class="burger-block d-flex d-xl-none">
		<button class="burger d-block" aria-label="Открыть меню" aria-expanded="false" data-burger>
		  <span class="burger__line"></span>
		</button>
	  </div>
	</div>
  </div>
</header>