<?php

/* views/site/sections/modalproect.tpl */
class __TwigTemplate_fa252c7c5f4e188a6aa2913ea32e798ee2882c6190e9118a9c3b48b4dda31498 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"modalproect\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
    <div class=\"modal-content bg-transparent\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\" callbackformclose></button>
      <div class=\"row g-0 gap-10\" id=\"callbackFormPopper\">
        <div class=\"col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom\">Заказать проект</div>
        <div class=\"col-12 col-messages bcg--white-v1 col-md-auto order-2 order-md-1\">
          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
            <div class=\"col-message__title\">Написать в Whatsapp</div>
            <div class=\"col-message__icon\">
              <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["soc"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[2] ?? null) : null), "link", []), "html", null, true);
        echo "\" class=\"sosial-link\">
               <img class=\"icon-sosial ic-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["soc"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[2] ?? null) : null), "title", []), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["soc"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[2] ?? null) : null), "icon", []))), "html", null, true);
        echo "\" loading=\"lazy\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["soc"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[2] ?? null) : null), "title", []), "html", null, true);
        echo "\" />
             </a>
            </div>
          </div>
          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
            <div class=\"col-message__title\">Написать в Telegram</div>
            <div class=\"col-message__icon\">
              <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["soc"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[2] ?? null) : null), "link", []), "html", null, true);
        echo "\" class=\"sosial-link\">
                <img class=\"icon-sosial ic-";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["soc"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[2] ?? null) : null), "title", []), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["soc"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[2] ?? null) : null), "icon", []))), "html", null, true);
        echo "\" loading=\"lazy\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["soc"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[2] ?? null) : null), "title", []), "html", null, true);
        echo "\" />
              </a>
            </div>
          </div>
          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
            <div class=\"col-message__title\">Позвонить ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["soc"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[3] ?? null) : null), "link", []), "html", null, true);
        echo "</div>
            <div class=\"col-message__icon\">
               <a href=\"https://tel:~";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["soc"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[3] ?? null) : null), "link", []), "html", null, true);
        echo "\" class=\"sosial-link\">
                 <img class=\"icon-sosial ic-";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["soc"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[3] ?? null) : null), "title", []), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["soc"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[3] ?? null) : null), "icon", []))), "html", null, true);
        echo "\" loading=\"lazy\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["soc"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[3] ?? null) : null), "title", []), "html", null, true);
        echo "\" />
                </a>
            </div>
          </div>
        </div>
        <div class=\"col-12 d-flex flex-column justify-content-center bcg--white-v1 col-md-auto order-1 order-md-2 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0\">
          <div class=\"text-center modal-form-title mb-24 mb-lg-35\">Заказать проект</div>
          <form class=\"sect-form--white-theme\">
            <div class=\"mb-1\">
              <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Имя\" />
            </div>
            <div class=\"mb-20\">
              <input type=\"tel\" name=\"phone\" class=\"form-control phone\" placeholder=\"Телефон\" rules=\"phone|empty\" />
            </div>
            <div class=\"row g-0 justify-content-center mb-20 mb-md-15\">
              <button class=\"button button--black\" callbackform=\"orderProjectForm\">Отправить</button>
            </div>
            <div class=\"text-center corp-form\">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
          </form>
        </div>
        <div class=\"col-12 bcg--white-v1 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0 d-none\" success>
          <h2 class=\"text-center mt-25 fs-1 fw-bold\">";
        // line 49
        echo twig_escape_filter($this->env, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["callback"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["orderProjectForm"] ?? null) : null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["success"] ?? null) : null), "html", null, true);
        echo "</h2>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/modalproect.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 49,  78 => 28,  74 => 27,  69 => 25,  57 => 20,  53 => 19,  39 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"modalproect\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
    <div class=\"modal-content bg-transparent\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\" callbackformclose></button>
      <div class=\"row g-0 gap-10\" id=\"callbackFormPopper\">
        <div class=\"col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom\">Заказать проект</div>
        <div class=\"col-12 col-messages bcg--white-v1 col-md-auto order-2 order-md-1\">
          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
            <div class=\"col-message__title\">Написать в Whatsapp</div>
            <div class=\"col-message__icon\">
              <a href=\"{{soc[2].link}}\" class=\"sosial-link\">
               <img class=\"icon-sosial ic-{{soc[2].title}}\" src=\"{{base_url('public/filemanager/'~soc[2].icon)}}\" loading=\"lazy\" alt=\"{{soc[2].title}}\" />
             </a>
            </div>
          </div>
          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
            <div class=\"col-message__title\">Написать в Telegram</div>
            <div class=\"col-message__icon\">
              <a href=\"{{soc[2].link}}\" class=\"sosial-link\">
                <img class=\"icon-sosial ic-{{soc[2].title}}\" src=\"{{base_url('public/filemanager/'~soc[2].icon)}}\" loading=\"lazy\" alt=\"{{soc[2].title}}\" />
              </a>
            </div>
          </div>
          <div class=\"col-12 col-message d-flex flex-column align-items-center gap-10 gap-md-25\">
            <div class=\"col-message__title\">Позвонить {{soc[3].link}}</div>
            <div class=\"col-message__icon\">
               <a href=\"https://tel:~{{soc[3].link}}\" class=\"sosial-link\">
                 <img class=\"icon-sosial ic-{{soc[3].title}}\" src=\"{{base_url('public/filemanager/'~soc[3].icon)}}\" loading=\"lazy\" alt=\"{{soc[3].title}}\" />
                </a>
            </div>
          </div>
        </div>
        <div class=\"col-12 d-flex flex-column justify-content-center bcg--white-v1 col-md-auto order-1 order-md-2 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0\">
          <div class=\"text-center modal-form-title mb-24 mb-lg-35\">Заказать проект</div>
          <form class=\"sect-form--white-theme\">
            <div class=\"mb-1\">
              <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Имя\" />
            </div>
            <div class=\"mb-20\">
              <input type=\"tel\" name=\"phone\" class=\"form-control phone\" placeholder=\"Телефон\" rules=\"phone|empty\" />
            </div>
            <div class=\"row g-0 justify-content-center mb-20 mb-md-15\">
              <button class=\"button button--black\" callbackform=\"orderProjectForm\">Отправить</button>
            </div>
            <div class=\"text-center corp-form\">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>
          </form>
        </div>
        <div class=\"col-12 bcg--white-v1 ps-10 pe-10 pb-25 ps-md-33 pe-md-33 pt-25 pt-md-0 d-none\" success>
          <h2 class=\"text-center mt-25 fs-1 fw-bold\">{{callback['orderProjectForm']['success']}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>", "views/site/sections/modalproect.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\modalproect.tpl");
    }
}
