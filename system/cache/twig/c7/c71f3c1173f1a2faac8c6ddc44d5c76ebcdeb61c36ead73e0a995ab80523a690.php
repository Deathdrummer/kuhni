<?php

/* views/site/sections/section_form.tpl */
class __TwigTemplate_32155787422a4a75cec7d8b789f7bb7dedd3f6e2075f650ef6c141b26170056b extends Twig_Template
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
        echo "<section class=\"sect-form sect-form__block";
        if ((($context["page_id"] ?? null) == 25)) {
            echo " section--mb";
        }
        echo "\"";
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
  <div class=\"sect-form__block-photo\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . ($context["banner"] ?? null))), "html", null, true);
        echo "\" alt=\"\" />
  </div>
  <div class=\"sect-form__block-content\">
    <div class=\"container-xxl g-2 g-lg-4\">
      <div class=\"row\">
        <div class=\"col-12 col-xl-6 br-left-before\">
          <div class=\"section__block-title sect-form__block-title text-white-custom\">
            <div class=\"section__title\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
            <div class=\"section__subtitle\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</div>
          </div>
        </div>
        <div class=\"col-12 col-xl-6\">
          <form class=\"sect-form__form row g-0\">
           ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["time_boolean"] ?? null), "time_true", []) == 1)) {
            // line 17
            echo "            <div class=\"col-12 mb-15\">
              <div class=\"itc-select\" id=\"select-time\">
                <!-- Кнопка для открытия выпадающего списка -->
                <button type=\"button\" class=\"itc-select__toggle form-select form-control\" name=\"time\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать время (не обязательно)</button>
                <!-- Выпадающий список -->
                <div class=\"itc-select__dropdown\">
                  <ul class=\"itc-select__options\">
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_form_time"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["itemTime"]) {
                // line 25
                echo "                    <li class=\"itc-select__option\" data-select=\"option\" data-value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemTime"], "time", []), "html", null, true);
                echo "\" data-index=\"";
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemTime"], "time", []), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['itemTime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                  </ul>
                </div>
              </div>
            </div>
            ";
        }
        // line 32
        echo "              <div class=\"col-12 mb-15\">
                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"ФИО\" />
              </div>
              <div class=\"col mb-15\">
                <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
              <div class=\"col-12 mb-24\">
                <div class=\"form-check\">
                  <input name=\"_agreement\" class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck1\" checked  rules=\"empty\" />
                  <label class=\"form-check-label text-white-custom\" for=\"gridCheck1\"> Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности </label>
                </div>
              </div>
            <button type=\"submit\" class=\"button button--white\" callbackform=\"questionsForm\">Заказать</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/section_form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  92 => 27,  79 => 25,  75 => 24,  66 => 17,  64 => 16,  56 => 11,  52 => 10,  42 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"sect-form sect-form__block{% if page_id== 25 %} section--mb{% endif %}\"{% if data_scroll_id %} id=\"{{data_scroll_id}}\"{% endif %}{% if data_scroll_block %} data-scroll-block=\"{{data_scroll_block}}\"{% endif %}>
  <div class=\"sect-form__block-photo\">
    <img src=\"{{base_url('public/filemanager/'~banner)}}\" alt=\"\" />
  </div>
  <div class=\"sect-form__block-content\">
    <div class=\"container-xxl g-2 g-lg-4\">
      <div class=\"row\">
        <div class=\"col-12 col-xl-6 br-left-before\">
          <div class=\"section__block-title sect-form__block-title text-white-custom\">
            <div class=\"section__title\">{{title}}</div>
            <div class=\"section__subtitle\">{{text}}</div>
          </div>
        </div>
        <div class=\"col-12 col-xl-6\">
          <form class=\"sect-form__form row g-0\">
           {% if time_boolean.time_true==1 %}
            <div class=\"col-12 mb-15\">
              <div class=\"itc-select\" id=\"select-time\">
                <!-- Кнопка для открытия выпадающего списка -->
                <button type=\"button\" class=\"itc-select__toggle form-select form-control\" name=\"time\" value=\"\" data-select=\"toggle\" data-index=\"-1\">Выбрать время (не обязательно)</button>
                <!-- Выпадающий список -->
                <div class=\"itc-select__dropdown\">
                  <ul class=\"itc-select__options\">
                    {% for index, itemTime in list_form_time %}
                    <li class=\"itc-select__option\" data-select=\"option\" data-value=\"{{itemTime.time}}\" data-index=\"{{index}}\">{{itemTime.time}}</li>
                    {% endfor %}
                  </ul>
                </div>
              </div>
            </div>
            {% endif %}
              <div class=\"col-12 mb-15\">
                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"ФИО\" />
              </div>
              <div class=\"col mb-15\">
                <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Телефон\" rules=\"phone|empty\" />
              </div>
              <div class=\"col-12 mb-24\">
                <div class=\"form-check\">
                  <input name=\"_agreement\" class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck1\" checked  rules=\"empty\" />
                  <label class=\"form-check-label text-white-custom\" for=\"gridCheck1\"> Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности </label>
                </div>
              </div>
            <button type=\"submit\" class=\"button button--white\" callbackform=\"questionsForm\">Заказать</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>", "views/site/sections/section_form.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\section_form.tpl");
    }
}
