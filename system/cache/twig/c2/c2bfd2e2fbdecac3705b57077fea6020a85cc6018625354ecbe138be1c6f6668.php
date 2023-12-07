<?php

/* views/site/sections/statistics.tpl */
class __TwigTemplate_12daa03835256bfb727adc063a0a6714940df99ee0df4bc3a8916740f92eb746 extends Twig_Template
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
        echo "<section class=\"section statistics statistics-section\"";
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
\t<div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"statistics__items row row-cols-1 row-cols-md-2 row-cols-xxl-4 g-1\">
      ";
        // line 4
        if (($context["statistics"] ?? null)) {
            // line 5
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["statistics"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                // line 6
                echo "              <div class=\"col\">
                <div class=\"statistics__item col bcg--grey-v1  justify-content-md-start pt-md-100\">
                  <div class=\"statistics__item-title\">";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "title", []), "html", null, true);
                echo "</div>
                  <div class=\"statistics__item-text\">";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statistic"], "text", []), "html", null, true);
                echo "</div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "     </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/statistics.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  64 => 13,  54 => 9,  50 => 8,  46 => 6,  41 => 5,  39 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section statistics statistics-section\"{% if data_scroll_id %} id=\"{{data_scroll_id}}\"{% endif %}{% if data_scroll_block %} data-scroll-block=\"{{data_scroll_block}}\"{% endif %}>
\t<div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"statistics__items row row-cols-1 row-cols-md-2 row-cols-xxl-4 g-1\">
      {% if statistics %}
            {% for statistic in statistics %}
              <div class=\"col\">
                <div class=\"statistics__item col bcg--grey-v1  justify-content-md-start pt-md-100\">
                  <div class=\"statistics__item-title\">{{statistic.title}}</div>
                  <div class=\"statistics__item-text\">{{statistic.text}}</div>
                </div>
              </div>
            {% endfor %}
        {% endif %}
     </div>
  </div>
</section>", "views/site/sections/statistics.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\statistics.tpl");
    }
}
