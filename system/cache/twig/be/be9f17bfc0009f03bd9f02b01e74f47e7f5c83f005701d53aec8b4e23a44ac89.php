<?php

/* views/site/sections/modalformPriceKitchen.tpl */
class __TwigTemplate_61b9b79fd86c5f726f61e0fde197ba9fa4e32baae604aaf8d362e6f53e64036c extends Twig_Template
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
        echo "<div class=\"modal fade zayavka-modal\" id=\"formPriceKitchen\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
    <div class=\"modal-content bg-transparent\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\" callbackformclose></button>

      <div class=\"row g-0 gap-0 gap-md-10 buttons\">
        <div class=\"col-12 bcg--white-v1 p-20 d-none d-md-block text-center modal-title-custom\">Заявка на расчёт стоимости кухни</div>

        <div class=\"col-12 d-flex flex-column justify-content-center bcg--white-v1 ps-10 pe-10 pt-28 pb-50 ps-md-30 pe-md-30 pt-md-28 pb-md-60\" id=\"callbackFormPopper\">
          <div class=\"col-12 bcg--white-v1 text-center d-block d-md-none modal-form-title pb-30 pt-0 pt-md-0\">Расчёт стоимости кухни</div>

          ";
        // line 13
        echo "          <form class=\"sect-form--white-theme d-block d-md-none\">
            <div class=\"row g-0 gx-12 mb-30\">
              <div class=\"col-12\">
                <div class=\"col-title-form\">Выберите конфигурацию:</div>
              </div>
              <div class=\"row g-10 col-12 mt-15\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_konf_kitchen"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 20
            echo "                  <div class=\"col-6\">
                    <label class=\"form-check-image p-8 pt-2\" for=\"img";
            // line 21
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">
                      <div class=\"konf-photo\">
                        <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["item"], "img", []))), "html", null, true);
            echo "\" loading=\"lazy\" alt=\"\" />
                      </div>

                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"configuration\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", []), "html", null, true);
            echo "\" id=\"img";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                        <div class=\"form-check-label text-white-custom\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", []), "html", null, true);
            echo "</div>
                      </div>
                    </label>
                  </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "              </div>
            </div>
            <div class=\"row g-0 mb-30\">
              <div class=\"row g-0 gap-5 col-12\">
                <div class=\"col-12 d-flex flex-row align-items-center justify-content-between\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Размер сторона А</label>
                  <div class=\"itc-select\" id=\"select-a\">
                    <!-- Кнопка для открытия выпадающего списка -->
                    <button type=\"button\" class=\"itc-select__toggle\" name=\"side_a\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                    <!-- Выпадающий список -->
                    <div class=\"itc-select__dropdown\">
                      <ul class=\"itc-select__options\">
                       ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_storona_a"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 46
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
        // line 48
        echo "                     </ul>
                    </div>
                  </div>
                </div>
                <div class=\"col-12 d-flex flex-row align-items-center justify-content-between\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Размер сторона Б</label>
                  <div class=\"itc-select\" id=\"select-b\">
                    <!-- Кнопка для открытия выпадающего списка -->
                    <button type=\"button\" class=\"itc-select__toggle\" name=\"side_b\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                    <!-- Выпадающий список -->
                    <div class=\"itc-select__dropdown\">
                      <ul class=\"itc-select__options\">
                          ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_storona_b"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 61
            echo "                              <li class=\"itc-select__option\" data-select=\"option\" data-value=\"";
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
        // line 63
        echo "                       </ul>
                    </div>
                  </div>
                </div>
                <div class=\"col-12 d-flex flex-row align-items-center justify-content-between\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Размер сторона С</label>
                  <div class=\"itc-select\" id=\"select-c\">
                    <!-- Кнопка для открытия выпадающего списка -->
                    <button type=\"button\" class=\"itc-select__toggle\" name=\"side_c\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                    <!-- Выпадающий список -->
                    <div class=\"itc-select__dropdown\">
                      <ul class=\"itc-select__options\">
                       ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_storona_c"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 76
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
        // line 78
        echo "                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row g-0 gx-5 mb-30\">
              <div class=\"col-12\">
                <input type=\"tel\" name=\"phone\" class=\"form-control\" placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
            </div>

            <div class=\"row g-0 justify-content-center\">
              <button class=\"button button--black\" callbackform=\"calcPriceKitchen\">Отправить</button>
            </div>
          </form>

          ";
        // line 97
        echo "          <form class=\"sect-form--white-theme d-none d-md-block\">
            <div class=\"row g-0 gx-26 mb-50\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Выберите конфигурацию:</div>
              </div>
              <div class=\"col-12 row gx-24 row-cols-4 g-0\">
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_konf_kitchen"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 104
            echo "                    <div class=\"col\">
                      <label class=\"form-check-image p-8\" for=\"img";
            // line 105
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">
                        <div class=\"konf-photo\">
                          <img src=\"";
            // line 107
            echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["item"], "img", []))), "html", null, true);
            echo "\" loading=\"lazy\" alt=\"\" />
                        </div>

                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"radio\" name=\"configuration\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", []), "html", null, true);
            echo "\" id=\"img";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                          <div class=\"form-check-label text-white-custom\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", []), "html", null, true);
            echo "</div>
                        </div>
                      </label>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "               </div>
            </div>
            <div class=\"row g-0 mb-50\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Укажите размеры:<span> (например 2,65)</span></div>
              </div>
              <div class=\"row g-0 gap-30 col-12\">
                <div class=\"col d-flex flex-row align-items-center\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Сторона <span class=\"fw-bold\">A</span></label> <input type=\"text\" placeholder=\"\" name=\"side_a\" class=\"form-control h-40\" />
                </div>
                <div class=\"col d-flex flex-row align-items-center\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Сторона <span class=\"fw-bold\">B</span></label> <input type=\"text\" placeholder=\"\" name=\"side_b\" class=\"form-control h-40\" />
                </div>
                <div class=\"col d-flex flex-row align-items-center\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Сторона <span class=\"fw-bold\">C</span></label> <input type=\"text\" placeholder=\"\" name=\"side_c\" class=\"form-control h-40\" />
                </div>
              </div>
            </div>
            <div class=\"row g-0 gx-1 mb-50\">
              <div class=\"col col-lg-auto\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Укажите высоту</div>
                </div>
                <div class=\"col\">
                  ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_height_kitchen"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 142
            echo "                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"height[";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "]\" id=\"h";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                        <label class=\"form-check-label text-white-custom\" for=\"h";
            // line 144
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo " </label>
                      </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                 </div>
              </div>
              <div class=\"col col-lg-auto\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Техника:</div>
                </div>
                <div class=\"col\">
                ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_texnika_kitchen"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 155
            echo "                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"tech[";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "]\" id=\"t";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" />
                        <label class=\"form-check-label text-white-custom\" for=\"t";
            // line 157
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo " </label>
                      </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                </div>
              </div>
              <div class=\"col col-lg-auto\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Фурнитура:</div>
                </div>
                <div class=\"col\">
                 ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_form_furnitura_kitchen"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 168
            echo "                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"furniture[";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo "]\" id=\"p{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"p";
            // line 170
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "variant", []), "html", null, true);
            echo " </label>
                      </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                  </div>
              </div>
            </div>

            <div class=\"row g-0\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Дополнительные пожелания:<span> (не обязательно)</span></div>
              </div>
              <div class=\"col\">
                <textarea class=\"form-control\" name=\"comment\" placeholder=\"Введите ваше сообщение\" rows=\"5\"></textarea>
              </div>
            </div>
            <div class=\"row g-0 gx-5 mt-30\">
              <div class=\"col-4\">
                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Имя\" />
              </div>

              <div class=\"col-4\">
                <input type=\"tel\" name=\"phone\" class=\"form-control\" placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
              <div class=\"col-4\">
                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"E-mail\" rules=\"email\" />
              </div>
            </div>
            <div class=\"row g-0 mt-15 mb-md-60\">
              <div class=\"col\">
                <div class=\"mb-8 text-files\">Прикрепить файл <span>(если есть)</span></div>
                <label class=\"button button--black btn-sm button--small\" role=\"button\">
                  Загрузить
                  <input type=\"file\" name=\"attach\" class=\"d-none\">
                </label>
              </div>
            </div>
            <div class=\"row g-0 justify-content-center mb-20 mb-md-15\">
              <button class=\"button button--black\" callbackform=\"calcPriceKitchen\">Отправить</button>
            </div>
          </form>
          <h2 class=\"text-center fs-1 fw-bold d-none\" success>";
        // line 210
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["callback"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["calcPriceKitchen"] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["success"] ?? null) : null), "html", null, true);
        echo "</h2>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/modalformPriceKitchen.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 210,  351 => 173,  340 => 170,  336 => 169,  333 => 168,  329 => 167,  320 => 160,  309 => 157,  303 => 156,  300 => 155,  296 => 154,  287 => 147,  276 => 144,  270 => 143,  267 => 142,  263 => 141,  237 => 117,  226 => 112,  220 => 111,  213 => 107,  208 => 105,  205 => 104,  201 => 103,  193 => 97,  173 => 78,  160 => 76,  156 => 75,  142 => 63,  129 => 61,  125 => 60,  111 => 48,  98 => 46,  94 => 45,  80 => 33,  69 => 28,  63 => 27,  56 => 23,  51 => 21,  48 => 20,  44 => 19,  36 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade zayavka-modal\" id=\"formPriceKitchen\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-w-custom modal-dialog-centered\">
    <div class=\"modal-content bg-transparent\">
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Закрыть\" callbackformclose></button>

      <div class=\"row g-0 gap-0 gap-md-10 buttons\">
        <div class=\"col-12 bcg--white-v1 p-20 d-none d-md-block text-center modal-title-custom\">Заявка на расчёт стоимости кухни</div>

        <div class=\"col-12 d-flex flex-column justify-content-center bcg--white-v1 ps-10 pe-10 pt-28 pb-50 ps-md-30 pe-md-30 pt-md-28 pb-md-60\" id=\"callbackFormPopper\">
          <div class=\"col-12 bcg--white-v1 text-center d-block d-md-none modal-form-title pb-30 pt-0 pt-md-0\">Расчёт стоимости кухни</div>

          {# ---------------------------------------- форма мобильная --------------------------------------- #}
          <form class=\"sect-form--white-theme d-block d-md-none\">
            <div class=\"row g-0 gx-12 mb-30\">
              <div class=\"col-12\">
                <div class=\"col-title-form\">Выберите конфигурацию:</div>
              </div>
              <div class=\"row g-10 col-12 mt-15\">
                {% for index, item in list_form_konf_kitchen %}
                  <div class=\"col-6\">
                    <label class=\"form-check-image p-8 pt-2\" for=\"img{{index}}\">
                      <div class=\"konf-photo\">
                        <img src=\"{{base_url('public/filemanager/'~item.img)}}\" loading=\"lazy\" alt=\"\" />
                      </div>

                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"configuration\" value=\"{{item.text}}\" id=\"img{{index}}\" />
                        <div class=\"form-check-label text-white-custom\">{{item.text}}</div>
                      </div>
                    </label>
                  </div>
               {% endfor %}
              </div>
            </div>
            <div class=\"row g-0 mb-30\">
              <div class=\"row g-0 gap-5 col-12\">
                <div class=\"col-12 d-flex flex-row align-items-center justify-content-between\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Размер сторона А</label>
                  <div class=\"itc-select\" id=\"select-a\">
                    <!-- Кнопка для открытия выпадающего списка -->
                    <button type=\"button\" class=\"itc-select__toggle\" name=\"side_a\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                    <!-- Выпадающий список -->
                    <div class=\"itc-select__dropdown\">
                      <ul class=\"itc-select__options\">
                       {% for index, item in list_form_storona_a %}
                          <li class=\"itc-select__option\" data-select=\"option\" data-value=\"{{item.variant}}\" data-index=\"{{index}}\">{{item.variant}}</li>
                      {% endfor %}
                     </ul>
                    </div>
                  </div>
                </div>
                <div class=\"col-12 d-flex flex-row align-items-center justify-content-between\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Размер сторона Б</label>
                  <div class=\"itc-select\" id=\"select-b\">
                    <!-- Кнопка для открытия выпадающего списка -->
                    <button type=\"button\" class=\"itc-select__toggle\" name=\"side_b\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                    <!-- Выпадающий список -->
                    <div class=\"itc-select__dropdown\">
                      <ul class=\"itc-select__options\">
                          {% for index, item in list_form_storona_b %}
                              <li class=\"itc-select__option\" data-select=\"option\" data-value=\"{{item.variant}}\" data-index=\"{{index}}\">{{item.variant}}</li>
                          {% endfor %}
                       </ul>
                    </div>
                  </div>
                </div>
                <div class=\"col-12 d-flex flex-row align-items-center justify-content-between\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Размер сторона С</label>
                  <div class=\"itc-select\" id=\"select-c\">
                    <!-- Кнопка для открытия выпадающего списка -->
                    <button type=\"button\" class=\"itc-select__toggle\" name=\"side_c\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать</button>
                    <!-- Выпадающий список -->
                    <div class=\"itc-select__dropdown\">
                      <ul class=\"itc-select__options\">
                       {% for index, item in list_form_storona_c %}
                          <li class=\"itc-select__option\" data-select=\"option\" data-value=\"{{item.variant}}\" data-index=\"{{index}}\">{{item.variant}}</li>
                      {% endfor %}
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row g-0 gx-5 mb-30\">
              <div class=\"col-12\">
                <input type=\"tel\" name=\"phone\" class=\"form-control\" placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
            </div>

            <div class=\"row g-0 justify-content-center\">
              <button class=\"button button--black\" callbackform=\"calcPriceKitchen\">Отправить</button>
            </div>
          </form>

          {# ---------------------------------------- форма десктоп --------------------------------------- #}
          <form class=\"sect-form--white-theme d-none d-md-block\">
            <div class=\"row g-0 gx-26 mb-50\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Выберите конфигурацию:</div>
              </div>
              <div class=\"col-12 row gx-24 row-cols-4 g-0\">
                {% for index, item in list_form_konf_kitchen %}
                    <div class=\"col\">
                      <label class=\"form-check-image p-8\" for=\"img{{index}}\">
                        <div class=\"konf-photo\">
                          <img src=\"{{base_url('public/filemanager/'~item.img)}}\" loading=\"lazy\" alt=\"\" />
                        </div>

                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"radio\" name=\"configuration\" value=\"{{item.text}}\" id=\"img{{index}}\" />
                          <div class=\"form-check-label text-white-custom\">{{item.text}}</div>
                        </div>
                      </label>
                    </div>
                {% endfor %}
               </div>
            </div>
            <div class=\"row g-0 mb-50\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Укажите размеры:<span> (например 2,65)</span></div>
              </div>
              <div class=\"row g-0 gap-30 col-12\">
                <div class=\"col d-flex flex-row align-items-center\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Сторона <span class=\"fw-bold\">A</span></label> <input type=\"text\" placeholder=\"\" name=\"side_a\" class=\"form-control h-40\" />
                </div>
                <div class=\"col d-flex flex-row align-items-center\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Сторона <span class=\"fw-bold\">B</span></label> <input type=\"text\" placeholder=\"\" name=\"side_b\" class=\"form-control h-40\" />
                </div>
                <div class=\"col d-flex flex-row align-items-center\">
                  <label class=\"me-20 text-nowrap\" for=\"\">Сторона <span class=\"fw-bold\">C</span></label> <input type=\"text\" placeholder=\"\" name=\"side_c\" class=\"form-control h-40\" />
                </div>
              </div>
            </div>
            <div class=\"row g-0 gx-1 mb-50\">
              <div class=\"col col-lg-auto\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Укажите высоту</div>
                </div>
                <div class=\"col\">
                  {% for index, item in list_form_height_kitchen %}
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"height[{{item.variant}}]\" id=\"h{{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"h{{index}}\"> {{item.variant}} </label>
                      </div>
                  {% endfor %}
                 </div>
              </div>
              <div class=\"col col-lg-auto\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Техника:</div>
                </div>
                <div class=\"col\">
                {% for index, item in list_form_texnika_kitchen %}
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"tech[{{item.variant}}]\" id=\"t{{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"t{{index}}\"> {{item.variant}} </label>
                      </div>
                  {% endfor %}
                </div>
              </div>
              <div class=\"col col-lg-auto\">
                <div class=\"col mb-24\">
                  <div class=\"col-title-form\">Фурнитура:</div>
                </div>
                <div class=\"col\">
                 {% for index, item in list_form_furnitura_kitchen %}
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"furniture[{{item.variant}}]\" id=\"p{index}}\" />
                        <label class=\"form-check-label text-white-custom\" for=\"p{{index}}\"> {{item.variant}} </label>
                      </div>
                  {% endfor %}
                  </div>
              </div>
            </div>

            <div class=\"row g-0\">
              <div class=\"col-12 mb-24\">
                <div class=\"col-title-form\">Дополнительные пожелания:<span> (не обязательно)</span></div>
              </div>
              <div class=\"col\">
                <textarea class=\"form-control\" name=\"comment\" placeholder=\"Введите ваше сообщение\" rows=\"5\"></textarea>
              </div>
            </div>
            <div class=\"row g-0 gx-5 mt-30\">
              <div class=\"col-4\">
                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Имя\" />
              </div>

              <div class=\"col-4\">
                <input type=\"tel\" name=\"phone\" class=\"form-control\" placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
              <div class=\"col-4\">
                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"E-mail\" rules=\"email\" />
              </div>
            </div>
            <div class=\"row g-0 mt-15 mb-md-60\">
              <div class=\"col\">
                <div class=\"mb-8 text-files\">Прикрепить файл <span>(если есть)</span></div>
                <label class=\"button button--black btn-sm button--small\" role=\"button\">
                  Загрузить
                  <input type=\"file\" name=\"attach\" class=\"d-none\">
                </label>
              </div>
            </div>
            <div class=\"row g-0 justify-content-center mb-20 mb-md-15\">
              <button class=\"button button--black\" callbackform=\"calcPriceKitchen\">Отправить</button>
            </div>
          </form>
          <h2 class=\"text-center fs-1 fw-bold d-none\" success>{{callback['calcPriceKitchen']['success']}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>", "views/site/sections/modalformPriceKitchen.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\modalformPriceKitchen.tpl");
    }
}
