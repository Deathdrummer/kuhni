<footer class="footer">
  <div class="container-xxl g-2 g-lg-4">
    <div class="row g-0 gx-3">
      <div class="col-12 col-md-6 col-lg-4 g-0 gx-3">
        {% if logo_footer %}
          {% if seo_url == 'index' %}
            <div class="logo">
              <img src="{{base_url('public/filemanager/'~logo_footer.file)}}" alt="{{logo_footer.alt}}" />
            </div>
          {% else %}
            <a href="/" class="logo">
              <img src="{{base_url('public/filemanager/'~logo_footer.file)}}" alt="{{logo_footer.alt}}" />
            </a>
          {% endif %}
        {% endif %}
        <div class="footer__desc">{{footer__desc}}</div>
      </div>
      <div class="col-12 col-md-6 g-0 offset-lg-2 row">
        <div class="col-12 col-lg-7 g-0 gx-3 footer__menu-block">
          <div class="menu-block__item">
            <div class="menu-block__title">Каталог</div>
            <nav class="nav">
              <ul>
              	{% for item in navigation.categories %}
                      <li><a href="{{item.href}}">{{item.title}}</a></li>
                {% endfor %}

              </ul>
            </nav>
          </div>
          <div class="menu-block__item">
           <div class="menu-block__title">Покупателю</div>
            <nav class="nav">
              <ul>
              {% for item in navigation.pages %}
                  <li><a href="{{item.href}}">{{item.title}}</a></li>
                {% endfor %}
              </ul>
            </nav>


            <!-- <nav class="nav">
              <ul>
                <li class="menu-block__link-pc-none">
                  <a href="/">Замер замещения</a>
                </li>
                <li class="menu-block__link-pc-none">
                  <a href="/">Оплата и сроки</a>
                </li>
                <li class="menu-block__link-pc-none">
                  <a href="/">Доставка и монтаж</a>
                </li>
                <li class="menu-block__link-pc-none">
                  <a href="/">Гарантия</a>
                </li>
                <li><a href="/">О компании</a></li>
                <li><a href="/">Контакты</a></li>
              </ul>
            </nav> -->
          </div>
        </div>
        <div class="col-12 col-lg-5 g-0 gx-3 block-button">
          <a class="button button--number" phone>{{phone.city1}}</a>
          <button class="button button--red" data-bs-toggle="modal" data-bs-target="#modalproect">Заказать проект</button>
        </div>
      </div>
    </div>
  </div>
</footer>
