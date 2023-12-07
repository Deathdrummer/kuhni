<?php

/* views/site/sections/card.tpl */
class __TwigTemplate_09ec8fd4b11707f9de6b0627b2c22a3fb41601c33d1881dad11da0cb7507a52e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section class=\"card mt-120 mt-md-155 mt-lg-185 mb-25 mb-lg-60\"";
        if (($context["data_scroll_id"] ?? null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["data_scroll_id"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["data_scroll_block"] ?? null)) {
            echo " data-scroll-block=\"";
            echo twig_escape_filter($this->env, ($context["data_scroll_block"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
          <div class=\"container-xxl g-2 g-lg-4\">
            <nav aria-label=\"breadcrumb  \">
              <ol class=\"breadcrumb mb-30\">
                <li class=\"breadcrumb-item\"><a href=\"/\">Главная</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url(("" . ($context["category_seo_url"] ?? null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('reset')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "prod_categories", [])]), "html", null, true);
        echo "</a></li>
                <li class=\"breadcrumb-item\" aria-current=\"page\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", []), "html", null, true);
        echo "</li>
              </ol>
            </nav>
            <div class=\"row g-0 gx-3 mb-0\">
              <div class=\"col-12 col-lg-8 col-xll-7 col-card-swiper\">
                <div class=\"swiper swiper-card overflow-hidden\">
                  <div class=\"swiper-wrapper\">
                  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "gallery", []));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 15
            echo "                    <a data-fancybox=\"gallery\" data-src=\"";
            echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["img"], "file", []))), "html", null, true);
            echo "\" class=\"swiper-slide\">
                      <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["img"], "file", []))), "html", null, true);
            echo "\" />
                    </a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                  </div>
                  <div class=\"swiper-prev\"></div>
                  <div class=\"swiper-next\"></div>
                </div>
                <div class=\"swiper swiper-card-thumbs overflow-hidden mt-10 mt-md-15\">
                  <div class=\"swiper-wrapper\">
                   ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "gallery", []));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 26
            echo "                    <div class=\"swiper-slide\">
                      <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["img"], "file", []))), "html", null, true);
            echo "\" />
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                  </div>
                </div>
              </div>
              <div class=\"d-flex flex-column mt-24 mt-lg-0 col-12 col-lg-4 col-xll-5 col-card-content\">
                <div class=\"order-0\">
                  <div class=\"card__title\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", []), "html", null, true);
        echo "</div>
                  <div class=\"card__subtitle mb-10\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "short_desc", []), "html", null, true);
        echo "</div>
                </div>
                <div class=\"order-2 order-lg-1\">
                  <ul class=\"property-list d-flex flex-column border-light-white pb-15 pb-md-30\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "attributes", []));
        foreach ($context['_seq'] as $context["_key"] => $context["attr"]) {
            // line 41
            echo "                        <li><span class=\"property-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attr"], "name", []), "html", null, true);
            echo ":</span> <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attr"], "value", []), "html", null, true);
            echo "</span></li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                  </ul>
                  <ul class=\"property-list d-flex flex-column border-light-white pb-15 pb-md-10 pt-10\">
                      ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes_custom"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attr_custom"]) {
            // line 46
            echo "                        <li><span class=\"property-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attr_custom"], "property_name", []), "html", null, true);
            echo ":</span> <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attr_custom"], "property_value", []), "html", null, true);
            echo "</span></li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr_custom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                  </ul>
                  <div class=\"property-list d-flex flex-column border-md-none pb-0 pb-md-35 pt-20\">Доставка и установка по Москве и М.О.</div>
                </div>
                <div class=\"order-1 order-lg-2 mb-20 mb-lg-0 d-flex\">
                  <button class=\"button button--black\" data-bs-toggle=\"modal\" data-bs-target=\"#modalraschet\">Заказать расчет</button>
                  <button class=\"ms-5 d-block d-lg-none button-share\" data-bs-toggle=\"modal\" data-bs-target=\"#modalshare\"><img src=\"./img/icon-share.svg\" alt=\"share\" /></button>
                </div>
                <div class=\"modal fade\" id=\"modalraschet\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
                    <div class=\"modal-content bg-transparent\">
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\"></button>
                      <div class=\"row g-0 gap-10\" id=\"callbackFormPopper\">
                        <div class=\"col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom\">Заказать расчет</div>
                        <div class=\"col-12 col-messages bcg--white-v1 col-md-auto order-2 order-md-1\">
                          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
                            <div class=\"col-message__title\">Написать в Whatsapp</div>
                            <div class=\"col-message__icon\">
                                <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["soc"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[2] ?? null) : null), "link", []), "html", null, true);
        echo "\" class=\"sosial-link\">
                                  <img class=\"icon-sosial ic-";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["soc"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[2] ?? null) : null), "title", []), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["soc"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[2] ?? null) : null), "icon", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["soc"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[2] ?? null) : null), "title", []), "html", null, true);
        echo "\" />
                                </a>
                            </div>
                          </div>

                          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
                            <div class=\"col-message__title\">Написать в Telegram</div>
                            <div class=\"col-message__icon\">
                                <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["soc"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[1] ?? null) : null), "link", []), "html", null, true);
        echo "\" class=\"sosial-link\">
                                  <img class=\"icon-sosial ic-";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["soc"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[1] ?? null) : null), "title", []), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["soc"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[1] ?? null) : null), "icon", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["soc"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[1] ?? null) : null), "title", []), "html", null, true);
        echo "\" />
                                </a>
                            </div>
                          </div>
                          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
                            <div class=\"col-message__title\">Позвонить ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["soc"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[3] ?? null) : null), "link", []), "html", null, true);
        echo "</div>
                            <div class=\"col-message__icon\">
                              <a href=\"tel:";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["soc"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[3] ?? null) : null), "link", []), "html", null, true);
        echo "\" class=\"sosial-link\">
                                  <img class=\"icon-sosial ic-";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["soc"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[3] ?? null) : null), "title", []), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["soc"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[3] ?? null) : null), "icon", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["soc"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[3] ?? null) : null), "title", []), "html", null, true);
        echo "\" />
                                </a>
                             </div>
                          </div>
                        </div>

                        <div class=\"col-12 d-flex flex-column justify-content-center bcg--white-v1 col-md-auto order-1 order-md-2 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0\">
                          <div class=\"text-center modal-form-title mb-24 mb-lg-35\">Заказать расчет</div>
                          <form class=\"sect-form--white-theme\">
                            <input type=\"hidden\" name=\"product\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", []), "html", null, true);
        echo "\">

                            <div class=\"mb-1\">
                              <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Имя\" />
                            </div>
                            <div class=\"mb-20\">
                              <input type=\"text\" name=\"phone\" class=\"form-control phone\" placeholder=\"Телефон\" rules=\"phone|empty\" />
                            </div>
                            <div class=\"row g-0 justify-content-center mb-20 mb-md-15\">
                              <button class=\"button button--black\"callbackform=\"orderCalcForm\">Отправить</button>
                            </div>
                            <div class=\"text-center corp-form\">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
                          </form>
                        </div>
                      </div>
                      <div class=\"col-12 bcg--white-v1 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0 mt-10 d-none\" success>
                        <h2 class=\"text-center mt-25 fs-1 fw-bold\">";
        // line 108
        echo twig_escape_filter($this->env, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["callback"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["orderCalcForm"] ?? null) : null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["success"] ?? null) : null), "html", null, true);
        echo "</h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"modal fade\" id=\"modalshare\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                  <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content share-card\">
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\"></button>
                      <div class=\"p-11 pb-15\">
                        <div class=\"mb-1 share-title d-flex justify-content-center align-items-center\">
                        <img class=\"me-10\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . ($context["icon_share"] ?? null))), "html", null, true);
        echo "\" alt=\"\" style=\"width: 27px; height: 27px\" />
                         ";
        // line 120
        echo twig_escape_filter($this->env, ($context["text_share"] ?? null), "html", null, true);
        echo "
                        </div>
                        <div class=\"share-text mb-25 text-center\">";
        // line 122
        echo twig_escape_filter($this->env, ($context["text_share_desc"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"sosials d-flex justify-content-center gap-10\">
                           ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["soc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sosial"]) {
            // line 125
            echo "                             ";
            if ((twig_get_attribute($this->env, $this->source, $context["sosial"], "title", []) != "phone")) {
                // line 126
                echo "                                 <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sosial"], "link", []), "html", null, true);
                echo "\" class=\"sosial-link\">
                                     <img class=\"icon-sosial ic-";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sosial"], "title", []), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["sosial"], "icon", []))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sosial"], "title", []), "html", null, true);
                echo "\" />
                                 </a>
                             ";
            }
            // line 130
            echo "                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sosial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12 mt-0 mt-lg-10\">
                <div class=\"p-11 pb-15 share-card bcg--grey-v1 d-none d-lg-block\">
                  <div class=\"mb-1 mb-lg-10 share-title\">

                    <img class=\"me-10\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . ($context["icon_share"] ?? null))), "html", null, true);
        echo "\" alt=\"\" style=\"width: 27px; height: 27px\" />
                    ";
        // line 142
        echo twig_escape_filter($this->env, ($context["text_share"] ?? null), "html", null, true);
        echo "
                  </div>
                  <div class=\"share-text mb-25 mb-lg-17\">";
        // line 144
        echo twig_escape_filter($this->env, ($context["text_share_desc"] ?? null), "html", null, true);
        echo "</div>
                  <div class=\"sosials d-flex justify-content-lg-start gap-10\">
                   ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["soc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sosial"]) {
            // line 147
            echo "                   ";
            if ((twig_get_attribute($this->env, $this->source, $context["sosial"], "title", []) != "phone")) {
                // line 148
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sosial"], "link", []), "html", null, true);
                echo "\" class=\"sosial-link\">
                           <img class=\"icon-sosial ic-";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sosial"], "title", []), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["sosial"], "icon", []))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sosial"], "title", []), "html", null, true);
                echo "\" />
                       </a>
                       ";
            }
            // line 152
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sosial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                  </div>
                </div>
              </div>
            </div>
          </div>
</section>

<section class=\"section mb-100\">
  <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"row g-0 gx-60 border-row-card\">
      ";
        // line 163
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", []);
        echo "
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/card.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 163,  359 => 153,  353 => 152,  343 => 149,  338 => 148,  335 => 147,  331 => 146,  326 => 144,  321 => 142,  317 => 141,  305 => 131,  299 => 130,  289 => 127,  284 => 126,  281 => 125,  277 => 124,  272 => 122,  267 => 120,  263 => 119,  249 => 108,  230 => 92,  214 => 83,  210 => 82,  205 => 80,  193 => 75,  189 => 74,  174 => 66,  170 => 65,  151 => 48,  140 => 46,  136 => 45,  132 => 43,  121 => 41,  117 => 40,  110 => 36,  106 => 35,  99 => 30,  90 => 27,  87 => 26,  83 => 25,  75 => 19,  66 => 16,  61 => 15,  57 => 14,  47 => 7,  41 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"card mt-120 mt-md-155 mt-lg-185 mb-25 mb-lg-60\"{% if data_scroll_id %} id=\"{{data_scroll_id}}\"{% endif %}{% if data_scroll_block %} data-scroll-block=\"{{data_scroll_block}}\"{% endif %}>
          <div class=\"container-xxl g-2 g-lg-4\">
            <nav aria-label=\"breadcrumb  \">
              <ol class=\"breadcrumb mb-30\">
                <li class=\"breadcrumb-item\"><a href=\"/\">Главная</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{base_url(''~category_seo_url)}}\">{{product.prod_categories|reset}}</a></li>
                <li class=\"breadcrumb-item\" aria-current=\"page\">{{product.name}}</li>
              </ol>
            </nav>
            <div class=\"row g-0 gx-3 mb-0\">
              <div class=\"col-12 col-lg-8 col-xll-7 col-card-swiper\">
                <div class=\"swiper swiper-card overflow-hidden\">
                  <div class=\"swiper-wrapper\">
                  {% for img in product.gallery %}
                    <a data-fancybox=\"gallery\" data-src=\"{{base_url('public/filemanager/'~img.file)}}\" class=\"swiper-slide\">
                      <img src=\"{{base_url('public/filemanager/'~img.file)}}\" />
                    </a>
                  {% endfor %}
                  </div>
                  <div class=\"swiper-prev\"></div>
                  <div class=\"swiper-next\"></div>
                </div>
                <div class=\"swiper swiper-card-thumbs overflow-hidden mt-10 mt-md-15\">
                  <div class=\"swiper-wrapper\">
                   {% for img in product.gallery %}
                    <div class=\"swiper-slide\">
                      <img src=\"{{base_url('public/filemanager/'~img.file)}}\" />
                  </div>
                  {% endfor %}
                  </div>
                </div>
              </div>
              <div class=\"d-flex flex-column mt-24 mt-lg-0 col-12 col-lg-4 col-xll-5 col-card-content\">
                <div class=\"order-0\">
                  <div class=\"card__title\">{{product.name}}</div>
                  <div class=\"card__subtitle mb-10\">{{product.short_desc}}</div>
                </div>
                <div class=\"order-2 order-lg-1\">
                  <ul class=\"property-list d-flex flex-column border-light-white pb-15 pb-md-30\">
                    {% for attr in product.attributes %}
                        <li><span class=\"property-info\">{{attr.name}}:</span> <span>{{attr.value}}</span></li>
                      {% endfor %}
                  </ul>
                  <ul class=\"property-list d-flex flex-column border-light-white pb-15 pb-md-10 pt-10\">
                      {% for attr_custom in attributes_custom %}
                        <li><span class=\"property-info\">{{attr_custom.property_name}}:</span> <span>{{attr_custom.property_value}}</span></li>
                      {% endfor %}
                  </ul>
                  <div class=\"property-list d-flex flex-column border-md-none pb-0 pb-md-35 pt-20\">Доставка и установка по Москве и М.О.</div>
                </div>
                <div class=\"order-1 order-lg-2 mb-20 mb-lg-0 d-flex\">
                  <button class=\"button button--black\" data-bs-toggle=\"modal\" data-bs-target=\"#modalraschet\">Заказать расчет</button>
                  <button class=\"ms-5 d-block d-lg-none button-share\" data-bs-toggle=\"modal\" data-bs-target=\"#modalshare\"><img src=\"./img/icon-share.svg\" alt=\"share\" /></button>
                </div>
                <div class=\"modal fade\" id=\"modalraschet\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
                    <div class=\"modal-content bg-transparent\">
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\"></button>
                      <div class=\"row g-0 gap-10\" id=\"callbackFormPopper\">
                        <div class=\"col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom\">Заказать расчет</div>
                        <div class=\"col-12 col-messages bcg--white-v1 col-md-auto order-2 order-md-1\">
                          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
                            <div class=\"col-message__title\">Написать в Whatsapp</div>
                            <div class=\"col-message__icon\">
                                <a href=\"{{soc[2].link}}\" class=\"sosial-link\">
                                  <img class=\"icon-sosial ic-{{soc[2].title}}\" src=\"{{base_url('public/filemanager/'~soc[2].icon)}}\" alt=\"{{soc[2].title}}\" />
                                </a>
                            </div>
                          </div>

                          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
                            <div class=\"col-message__title\">Написать в Telegram</div>
                            <div class=\"col-message__icon\">
                                <a href=\"{{soc[1].link}}\" class=\"sosial-link\">
                                  <img class=\"icon-sosial ic-{{soc[1].title}}\" src=\"{{base_url('public/filemanager/'~soc[1].icon)}}\" alt=\"{{soc[1].title}}\" />
                                </a>
                            </div>
                          </div>
                          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
                            <div class=\"col-message__title\">Позвонить {{soc[3].link}}</div>
                            <div class=\"col-message__icon\">
                              <a href=\"tel:{{soc[3].link}}\" class=\"sosial-link\">
                                  <img class=\"icon-sosial ic-{{soc[3].title}}\" src=\"{{base_url('public/filemanager/'~soc[3].icon)}}\" alt=\"{{soc[3].title}}\" />
                                </a>
                             </div>
                          </div>
                        </div>

                        <div class=\"col-12 d-flex flex-column justify-content-center bcg--white-v1 col-md-auto order-1 order-md-2 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0\">
                          <div class=\"text-center modal-form-title mb-24 mb-lg-35\">Заказать расчет</div>
                          <form class=\"sect-form--white-theme\">
                            <input type=\"hidden\" name=\"product\" value=\"{{product.name}}\">

                            <div class=\"mb-1\">
                              <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Имя\" />
                            </div>
                            <div class=\"mb-20\">
                              <input type=\"text\" name=\"phone\" class=\"form-control phone\" placeholder=\"Телефон\" rules=\"phone|empty\" />
                            </div>
                            <div class=\"row g-0 justify-content-center mb-20 mb-md-15\">
                              <button class=\"button button--black\"callbackform=\"orderCalcForm\">Отправить</button>
                            </div>
                            <div class=\"text-center corp-form\">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
                          </form>
                        </div>
                      </div>
                      <div class=\"col-12 bcg--white-v1 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0 mt-10 d-none\" success>
                        <h2 class=\"text-center mt-25 fs-1 fw-bold\">{{callback['orderCalcForm']['success']}}</h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"modal fade\" id=\"modalshare\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                  <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content share-card\">
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\"></button>
                      <div class=\"p-11 pb-15\">
                        <div class=\"mb-1 share-title d-flex justify-content-center align-items-center\">
                        <img class=\"me-10\" src=\"{{base_url('public/filemanager/'~icon_share)}}\" alt=\"\" style=\"width: 27px; height: 27px\" />
                         {{text_share}}
                        </div>
                        <div class=\"share-text mb-25 text-center\">{{text_share_desc}}</div>
                        <div class=\"sosials d-flex justify-content-center gap-10\">
                           {% for sosial in soc %}
                             {% if sosial.title != \"phone\" %}
                                 <a href=\"{{sosial.link}}\" class=\"sosial-link\">
                                     <img class=\"icon-sosial ic-{{sosial.title}}\" src=\"{{base_url('public/filemanager/'~sosial.icon)}}\" alt=\"{{sosial.title}}\" />
                                 </a>
                             {% endif %}
                           {% endfor %}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-12 mt-0 mt-lg-10\">
                <div class=\"p-11 pb-15 share-card bcg--grey-v1 d-none d-lg-block\">
                  <div class=\"mb-1 mb-lg-10 share-title\">

                    <img class=\"me-10\" src=\"{{base_url('public/filemanager/'~icon_share)}}\" alt=\"\" style=\"width: 27px; height: 27px\" />
                    {{text_share}}
                  </div>
                  <div class=\"share-text mb-25 mb-lg-17\">{{text_share_desc}}</div>
                  <div class=\"sosials d-flex justify-content-lg-start gap-10\">
                   {% for sosial in soc %}
                   {% if sosial.title != \"phone\" %}
                      <a href=\"{{sosial.link}}\" class=\"sosial-link\">
                           <img class=\"icon-sosial ic-{{sosial.title}}\" src=\"{{base_url('public/filemanager/'~sosial.icon)}}\" alt=\"{{sosial.title}}\" />
                       </a>
                       {% endif %}
                  {% endfor %}
                  </div>
                </div>
              </div>
            </div>
          </div>
</section>

<section class=\"section mb-100\">
  <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"row g-0 gx-60 border-row-card\">
      {{product.description|raw}}
    </div>
  </div>
</section>", "views/site/sections/card.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\card.tpl");
    }
}
