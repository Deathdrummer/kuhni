<?php

/* views/site/sections/modalformPriceShkaf.tpl */
class __TwigTemplate_268e6c8482af48c09cbe6f49f5c0a278ecf390410b08bdd17f94aa7da10c9a70 extends Twig_Template
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
        echo "<div class=\"modal fade zayavka-modal\" id=\"formPriceShkaf\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
    <div class=\"modal-content bg-transparent\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\" callbackformclose></button>

      <div class=\"row g-0 gap-0 gap-md-10 buttons\">
        <div class=\"col-12 bcg--white-v1 p-20 d-none d-md-block text-center modal-title-custom\">Заявка на расчёт стоимости мебели</div>

        <div class=\"col-12 d-flex flex-column justify-content-center bcg--white-v1 ps-10 pe-10 pt-25 pb-50 ps-md-30 pe-md-30 pt-md-28 pb-md-60\" id=\"callbackFormPopper\">
          <div class=\"col-12 bcg--white-v1 text-center d-block d-md-none modal-form-title pb-30\">Расчёт стоимости мебели</div>

          ";
        // line 13
        echo "          <form class=\"sect-form--white-theme d-block d-md-none\">
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12 mb-7\">
                <div class=\"col-title-form\">Помещение</div>
              </div>
              <div class=\"col-12\">
                <div class=\"itc-select\" id=\"select-pom\">
                  <!-- Кнопка для открытия выпадающего списка -->
                  <button type=\"button\" class=\"itc-select__toggle\" name=\"room_type\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                  <!-- Выпадающий список -->
                  <div class=\"itc-select__dropdown\">
                    <ul class=\"itc-select__options\">
                      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_pomechenie"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 26
            echo "                          <li class=\"itc-select__option\" data-select=\"option\" data-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "\" data-index=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "</li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12 mb-7\">
                <div class=\"col-title-form\">Система открывания</div>
              </div>
              <div class=\"col-12\">
                <div class=\"itc-select\" id=\"select-otkryvaem\">
                  <!-- Кнопка для открытия выпадающего списка -->
                  <button type=\"button\" class=\"itc-select__toggle\" name=\"open_system\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                  <!-- Выпадающий список -->
                  <div class=\"itc-select__dropdown\">
                    <ul class=\"itc-select__options\">
                      ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_sistem_otkryvaem"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 45
            echo "                          <li class=\"itc-select__option\" data-select=\"option\" data-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "\" data-index=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "</li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12 mb-7\">
                <div class=\"col-title-form\">Общая длина мебели</div>
              </div>
              <div class=\"col-12\">
                <div class=\"itc-select\" id=\"select-dlina\">
                  <!-- Кнопка для открытия выпадающего списка -->
                  <button type=\"button\" class=\"itc-select__toggle\" name=\"total_width\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                  <!-- Выпадающий список -->
                  <div class=\"itc-select__dropdown\">
                    <ul class=\"itc-select__options\">
                     ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_lenght"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 64
            echo "                        <li class=\"itc-select__option\" data-select=\"option\" data-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lenght", []), "html", null, true);
            echo "\" data-index=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lenght", []), "html", null, true);
            echo "</li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12\">
                <div class=\"col p-0 mb-7\">
                  <div class=\"col-title-form\">Фасады:</div>
                </div>
                <div class=\"col p-0\">
                 ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_sistem_fasady"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 78
            echo "                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"facades[";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "]\" id=\"mtp";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                        <label class=\"form-check-label text-white-custom\" for=\"mtp";
            // line 80
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo " </label>
                      </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </div>
              </div>
            </div>
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12\">
                <div class=\"col p-0 mb-7\">
                  <div class=\"col-title-form\">Фурнитура:</div>
                </div>
                <div class=\"col p-0\">
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_sistem_furniture"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 93
            echo "                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"furniture[";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "]\" id=\"mpomfurn";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                        <label class=\"form-check-label text-white-custom\" for=\"mpomfurn";
            // line 95
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo " </label>
                      </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                </div>
              </div>
            </div>
            <div class=\"row g-0 gx-5 mt-40 mb-30\">
              <div class=\"col-12\">
                <input type=\"tel\" class=\"form-control\" name=\"phone\" placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
            </div>

            <div class=\"row g-0 justify-content-center\">
              <button class=\"button button--black button--220\" callbackform=\"calcPriceCloset\">Отправить</button>
            </div>
          </form>

          ";
        // line 113
        echo "          <form class=\"sect-form--white-theme d-none d-md-block\">
            <div class=\"row g-0 mb-50\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Помещение</div>
              </div>
              <div class=\"row row-pom g-0 gap-25 row-gap-10 col-12\">
                 ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_pomechenie"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 120
            echo "                    <div class=\"col-auto\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"room_type[";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "]\" id=\"pom";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                        <label class=\"form-check-label text-white-custom\" for=\"pom";
            // line 123
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "</label>
                      </div>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "              </div>
            </div>
            <div class=\"row g-0 gx-1 mb-50\">
              <div class=\"col\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Система открывания:</div>
                </div>
                <div class=\"col\">
                  ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_sistem_otkryvaem"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 136
            echo "                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"open_system[";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "]\" id=\"d";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                        <label class=\"form-check-label text-white-custom\" for=\"d";
            // line 138
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo " </label>
                      </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                </div>
              </div>
              <div class=\"col\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Фурнитура:</div>
                </div>
                <div class=\"col\">
                  ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_sistem_furniture"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 149
            echo "                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"furniture[";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "]\" id=\"pom-furn";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                        <label class=\"form-check-label text-white-custom\" for=\"pom-furn";
            // line 151
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo " </label>
                      </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                </div>
              </div>
              <div class=\"col\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Фасады:</div>
                </div>
                <div class=\"col\">
                  ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_sistem_fasady"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 162
            echo "                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"facades[";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "]\" id=\"tp";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                        <label class=\"form-check-label text-white-custom\" for=\"tp";
            // line 164
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo " </label>
                      </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                </div>
              </div>
            </div>
            <div class=\"row g-0\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Укажите общую длину и ваши пожелания:<span> (не обязательно)</span></div>
              </div>
              <div class=\"col\">
                <textarea name=\"comment\" class=\"form-control\" placeholder=\"Например, 2,65\" rows=\"5\"></textarea>
              </div>
            </div>
            <div class=\"row g-0 gx-5 mt-30\">
              <div class=\"col-4\">
                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Имя\" />
              </div>

              <div class=\"col-4\">
                <input type=\"tel\" name=\"phone\" class=\"form-control\" phone placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
              <div class=\"col-4\">
                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"E-mail\" rules=\"email\" />
              </div>
            </div>
            <div class=\"row g-0 mt-15 mb-md-60\">
              <div class=\"col\">
                <label class=\"form-label\">Прикрепить файл <span>(если есть)</span></label>

                <label class=\"button button--black btn-sm button--small\" role=\"button\">
                  Загрузить
                  <input type=\"file\" name=\"attach\" class=\"d-none\">
                </label>

                ";
        // line 204
        echo "

                ";
        // line 208
        echo "                ";
        // line 211
        echo "              </div>
            </div>
            <div class=\"row g-0 justify-content-center mb-20 mb-md-15\">
              <button class=\"button button--black\" callbackform=\"calcPriceCloset\">Отправить</button>
            </div>
          </form>

          <h2 class=\"text-center fs-1 fw-bold d-none\" success>";
        // line 218
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["callback"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["calcPriceCloset"] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["success"] ?? null) : null), "html", null, true);
        echo "</h2>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/modalformPriceShkaf.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 218,  399 => 211,  397 => 208,  393 => 204,  359 => 167,  348 => 164,  342 => 163,  339 => 162,  335 => 161,  326 => 154,  315 => 151,  309 => 150,  306 => 149,  302 => 148,  293 => 141,  282 => 138,  276 => 137,  273 => 136,  269 => 135,  259 => 127,  247 => 123,  241 => 122,  237 => 120,  233 => 119,  225 => 113,  209 => 98,  198 => 95,  192 => 94,  189 => 93,  185 => 92,  174 => 83,  163 => 80,  157 => 79,  154 => 78,  150 => 77,  137 => 66,  124 => 64,  120 => 63,  102 => 47,  89 => 45,  85 => 44,  67 => 28,  54 => 26,  50 => 25,  36 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade zayavka-modal\" id=\"formPriceShkaf\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
    <div class=\"modal-content bg-transparent\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\" callbackformclose></button>

      <div class=\"row g-0 gap-0 gap-md-10 buttons\">
        <div class=\"col-12 bcg--white-v1 p-20 d-none d-md-block text-center modal-title-custom\">Заявка на расчёт стоимости мебели</div>

        <div class=\"col-12 d-flex flex-column justify-content-center bcg--white-v1 ps-10 pe-10 pt-25 pb-50 ps-md-30 pe-md-30 pt-md-28 pb-md-60\" id=\"callbackFormPopper\">
          <div class=\"col-12 bcg--white-v1 text-center d-block d-md-none modal-form-title pb-30\">Расчёт стоимости мебели</div>

          {# ---------------------------------------- форма мобильная --------------------------------------- #}
          <form class=\"sect-form--white-theme d-block d-md-none\">
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12 mb-7\">
                <div class=\"col-title-form\">Помещение</div>
              </div>
              <div class=\"col-12\">
                <div class=\"itc-select\" id=\"select-pom\">
                  <!-- Кнопка для открытия выпадающего списка -->
                  <button type=\"button\" class=\"itc-select__toggle\" name=\"room_type\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                  <!-- Выпадающий список -->
                  <div class=\"itc-select__dropdown\">
                    <ul class=\"itc-select__options\">
                      {% for index, item in list_form_pomechenie %}
                          <li class=\"itc-select__option\" data-select=\"option\" data-value=\"{{item.variant}}\" data-index=\"{{index}}\">{{item.variant}}</li>
                      {% endfor %}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12 mb-7\">
                <div class=\"col-title-form\">Система открывания</div>
              </div>
              <div class=\"col-12\">
                <div class=\"itc-select\" id=\"select-otkryvaem\">
                  <!-- Кнопка для открытия выпадающего списка -->
                  <button type=\"button\" class=\"itc-select__toggle\" name=\"open_system\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                  <!-- Выпадающий список -->
                  <div class=\"itc-select__dropdown\">
                    <ul class=\"itc-select__options\">
                      {% for index, item in list_form_sistem_otkryvaem %}
                          <li class=\"itc-select__option\" data-select=\"option\" data-value=\"{{item.variant}}\" data-index=\"{{index}}\">{{item.variant}}</li>
                      {% endfor %}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12 mb-7\">
                <div class=\"col-title-form\">Общая длина мебели</div>
              </div>
              <div class=\"col-12\">
                <div class=\"itc-select\" id=\"select-dlina\">
                  <!-- Кнопка для открытия выпадающего списка -->
                  <button type=\"button\" class=\"itc-select__toggle\" name=\"total_width\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                  <!-- Выпадающий список -->
                  <div class=\"itc-select__dropdown\">
                    <ul class=\"itc-select__options\">
                     {% for index, item in list_form_lenght %}
                        <li class=\"itc-select__option\" data-select=\"option\" data-value=\"{{item.lenght}}\" data-index=\"{{index}}\">{{item.lenght}}</li>
                      {% endfor %}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12\">
                <div class=\"col p-0 mb-7\">
                  <div class=\"col-title-form\">Фасады:</div>
                </div>
                <div class=\"col p-0\">
                 {% for index, item in list_form_sistem_fasady %}
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"facades[{{item.variant}}]\" id=\"mtp{{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"mtp{{index}}\">{{item.variant}} </label>
                      </div>
                  {% endfor %}
                </div>
              </div>
            </div>
            <div class=\"row g-0 mb-20\">
              <div class=\"col-12\">
                <div class=\"col p-0 mb-7\">
                  <div class=\"col-title-form\">Фурнитура:</div>
                </div>
                <div class=\"col p-0\">
                {% for index, item in list_form_sistem_furniture %}
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"furniture[{{item.variant}}]\" id=\"mpomfurn{{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"mpomfurn{{index}}\">{{item.variant}} </label>
                      </div>
                  {% endfor %}
                </div>
              </div>
            </div>
            <div class=\"row g-0 gx-5 mt-40 mb-30\">
              <div class=\"col-12\">
                <input type=\"tel\" class=\"form-control\" name=\"phone\" placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
            </div>

            <div class=\"row g-0 justify-content-center\">
              <button class=\"button button--black button--220\" callbackform=\"calcPriceCloset\">Отправить</button>
            </div>
          </form>

          {# ---------------------------------------- форма десктоп --------------------------------------- #}
          <form class=\"sect-form--white-theme d-none d-md-block\">
            <div class=\"row g-0 mb-50\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Помещение</div>
              </div>
              <div class=\"row row-pom g-0 gap-25 row-gap-10 col-12\">
                 {% for index, item in list_form_pomechenie %}
                    <div class=\"col-auto\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"room_type[{{item.variant}}]\" id=\"pom{{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"pom{{index}}\"> {{item.variant}}</label>
                      </div>
                    </div>
                  {% endfor %}
              </div>
            </div>
            <div class=\"row g-0 gx-1 mb-50\">
              <div class=\"col\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Система открывания:</div>
                </div>
                <div class=\"col\">
                  {% for index, item in list_form_sistem_otkryvaem %}
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"open_system[{{item.variant}}]\" id=\"d{{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"d{{index}}\">{{item.variant}} </label>
                      </div>
                  {% endfor %}
                </div>
              </div>
              <div class=\"col\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Фурнитура:</div>
                </div>
                <div class=\"col\">
                  {% for index, item in list_form_sistem_furniture %}
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"furniture[{{item.variant}}]\" id=\"pom-furn{{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"pom-furn{{index}}\">{{item.variant}} </label>
                      </div>
                  {% endfor %}
                </div>
              </div>
              <div class=\"col\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Фасады:</div>
                </div>
                <div class=\"col\">
                  {% for index, item in list_form_sistem_fasady %}
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"facades[{{item.variant}}]\" id=\"tp{{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"tp{{index}}\">{{item.variant}} </label>
                      </div>
                  {% endfor %}
                </div>
              </div>
            </div>
            <div class=\"row g-0\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Укажите общую длину и ваши пожелания:<span> (не обязательно)</span></div>
              </div>
              <div class=\"col\">
                <textarea name=\"comment\" class=\"form-control\" placeholder=\"Например, 2,65\" rows=\"5\"></textarea>
              </div>
            </div>
            <div class=\"row g-0 gx-5 mt-30\">
              <div class=\"col-4\">
                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Имя\" />
              </div>

              <div class=\"col-4\">
                <input type=\"tel\" name=\"phone\" class=\"form-control\" phone placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
              <div class=\"col-4\">
                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"E-mail\" rules=\"email\" />
              </div>
            </div>
            <div class=\"row g-0 mt-15 mb-md-60\">
              <div class=\"col\">
                <label class=\"form-label\">Прикрепить файл <span>(если есть)</span></label>

                <label class=\"button button--black btn-sm button--small\" role=\"button\">
                  Загрузить
                  <input type=\"file\" name=\"attach\" class=\"d-none\">
                </label>

                {# <label class=\"form-label\" for=\"formFileMultiple\">
                  <button class=\"button button--black button--small\">Загрузить</button>
                  <p>dfsdfsdf</p>
                  <input class=\"d-none\" type=\"file\" id=\"formFileMultiple\">
                </label> #}


                {# <div class=\"mb-8 text-files\">Прикрепить файл <span>(если есть)</span></div>
                <input type=\"file\" class=\"button button--black button--small\" name=\"file\" id=\"calcPriceClosetFile\"> #}
                {# <label for=\"calcPriceClosetFile\">
                  <button>Загрузить</button>
                </label> #}
              </div>
            </div>
            <div class=\"row g-0 justify-content-center mb-20 mb-md-15\">
              <button class=\"button button--black\" callbackform=\"calcPriceCloset\">Отправить</button>
            </div>
          </form>

          <h2 class=\"text-center fs-1 fw-bold d-none\" success>{{callback['calcPriceCloset']['success']}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>", "views/site/sections/modalformPriceShkaf.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\modalformPriceShkaf.tpl");
    }
}
