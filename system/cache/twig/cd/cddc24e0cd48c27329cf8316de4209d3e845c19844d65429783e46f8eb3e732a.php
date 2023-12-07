<?php

/* views/site/sections/modalraschetPrice.tpl */
class __TwigTemplate_4a995125543b5249afee1d798a13225aef82c6cb4ab356d57701e86b4a55e63f extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"modalraschetPrice\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
    <div class=\"modal-content bg-transparent\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\"></button>
      <div class=\"row g-0 gap-0 gap-md-10 buttons\">
        <div class=\"col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom\">Расчёт стоимости</div>
        <div class=\"col-12 bcg--white-v1 text-center d-block d-md-none modal-form-title pb-40 pt-25\">Расчёт стоимости</div>
        <div class=\"col-12 d-flex flex-column align-items-center bcg--white-v1 col-md-auto pb-10 pt-md-50 pb-md-50 ps-10 ps-md-0 pe-10 pe-md-0\">
          <button class=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#formPriceKitchen\">Расчёт стоимости кухни</button>
        </div>
        <div class=\"col-12 d-flex flex-column align-items-center bcg--white-v1 col-md-auto pt-md-50 pb-md-50 ps-10 ps-md-0 pe-10 pe-md-0 pb-40 pb-md-0\">
          <button class=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#formPriceShkaf\">Расчёт стоимости шкафа</button>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/modalraschetPrice.tpl";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"modalraschetPrice\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
    <div class=\"modal-content bg-transparent\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\"></button>
      <div class=\"row g-0 gap-0 gap-md-10 buttons\">
        <div class=\"col-12 bcg--white-v1 order-0 p-20 d-none d-md-block text-center modal-title-custom\">Расчёт стоимости</div>
        <div class=\"col-12 bcg--white-v1 text-center d-block d-md-none modal-form-title pb-40 pt-25\">Расчёт стоимости</div>
        <div class=\"col-12 d-flex flex-column align-items-center bcg--white-v1 col-md-auto pb-10 pt-md-50 pb-md-50 ps-10 ps-md-0 pe-10 pe-md-0\">
          <button class=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#formPriceKitchen\">Расчёт стоимости кухни</button>
        </div>
        <div class=\"col-12 d-flex flex-column align-items-center bcg--white-v1 col-md-auto pt-md-50 pb-md-50 ps-10 ps-md-0 pe-10 pe-md-0 pb-40 pb-md-0\">
          <button class=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#formPriceShkaf\">Расчёт стоимости шкафа</button>
        </div>
      </div>
    </div>
  </div>
</div>", "views/site/sections/modalraschetPrice.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\modalraschetPrice.tpl");
    }
}
