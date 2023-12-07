<?php

/* views/site/sections/mexanizm.tpl */
class __TwigTemplate_2a10cb49f4685c19493e73265835874c60196b618871486e77b77e0aeb38238b extends Twig_Template
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
        echo "<section class=\"section mmexanizm-section\"";
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
\t <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"section__block-title row mb-25 mb-md-30\">
      <div class=\"col-12 col-lg-10\">
        <div class=\"section__subtitle\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        echo "</div>
        <div class=\"section__title\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
      </div>
      <div class=\"swiper-block-button col-12 col-lg-2\">
        <div class=\"swiper-prev\"></div>
        <div class=\"swiper-next\"></div>
      </div>
    </div>
    <div class=\"section--pb border-light-white\">
      <div class=\"swiper swiper-mexanizm-section\">
        <div class=\"swiper-wrapper\">
          ";
        // line 16
        if (($context["slider_mexanizm"] ?? null)) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_mexanizm"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 18
                echo "              <div class=\"swiper-slide ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "class_photo", []), "html", null, true);
                echo "\">
                    <div class=\"photo\">
                      <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["slider"], "img", []))), "html", null, true);
                echo "\" loading=\"lazy\" />
                    </div>
                  </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "          ";
        }
        // line 25
        echo "        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/mexanizm.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  80 => 24,  70 => 20,  64 => 18,  59 => 17,  57 => 16,  44 => 6,  40 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section mmexanizm-section\"{% if data_scroll_id %} id=\"{{data_scroll_id}}\"{% endif %}{% if data_scroll_block %} data-scroll-block=\"{{data_scroll_block}}\"{% endif %}>
\t <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"section__block-title row mb-25 mb-md-30\">
      <div class=\"col-12 col-lg-10\">
        <div class=\"section__subtitle\">{{subtitle}}</div>
        <div class=\"section__title\">{{title}}</div>
      </div>
      <div class=\"swiper-block-button col-12 col-lg-2\">
        <div class=\"swiper-prev\"></div>
        <div class=\"swiper-next\"></div>
      </div>
    </div>
    <div class=\"section--pb border-light-white\">
      <div class=\"swiper swiper-mexanizm-section\">
        <div class=\"swiper-wrapper\">
          {% if slider_mexanizm %}
            {% for slider in slider_mexanizm %}
              <div class=\"swiper-slide {{slider.class_photo}}\">
                    <div class=\"photo\">
                      <img src=\"{{base_url('public/filemanager/'~slider.img)}}\" loading=\"lazy\" />
                    </div>
                  </div>
            {% endfor %}
          {% endif %}
        </div>
      </div>
    </div>
  </div>
</section>", "views/site/sections/mexanizm.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\mexanizm.tpl");
    }
}
