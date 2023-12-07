<?php

/* views/site/sections/tabs.tpl */
class __TwigTemplate_72d9e36a5d8212ce41628636c79ad706bd94d6ef7bbe5b8e353c8810efeb0c47 extends Twig_Template
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
        echo "<section class=\"section section--mb advantages advantages__block\"";
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
\t\t\t<div class=\"advantages__items row row-cols-1 row-cols-md-2 row-cols-xl-4 g-1\">
\t\t\t";
        // line 4
        if (($context["tabs_list"] ?? null)) {
            // line 5
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 6
                echo "\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"advantages__item bcg--grey-v1\">
\t\t\t\t\t\t\t<div class=\"advantages__item-title\">
\t\t\t\t\t\t\t<span>";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "title", []), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<div class=\"advantages__item-icon\">
\t\t\t\t\t\t\t\t<img class=\"advantages__item-icon--1\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["tab"], "icon", []))), "html", null, true);
                echo "\" loading=\"lazy\" alt=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"advantages__item-text\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "desc", []), "html", null, true);
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "\t\t\t</div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/tabs.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  72 => 18,  62 => 14,  56 => 11,  51 => 9,  46 => 6,  41 => 5,  39 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section section--mb advantages advantages__block\"{% if data_scroll_id %} id=\"{{data_scroll_id}}\"{% endif %}{% if data_scroll_block %} data-scroll-block=\"{{data_scroll_block}}\"{% endif %}>
  <div class=\"container-xxl g-2 g-lg-4\">
\t\t\t<div class=\"advantages__items row row-cols-1 row-cols-md-2 row-cols-xl-4 g-1\">
\t\t\t{% if tabs_list %}
\t\t\t\t{% for tab in tabs_list %}
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"advantages__item bcg--grey-v1\">
\t\t\t\t\t\t\t<div class=\"advantages__item-title\">
\t\t\t\t\t\t\t<span>{{tab.title}}</span>
\t\t\t\t\t\t\t<div class=\"advantages__item-icon\">
\t\t\t\t\t\t\t\t<img class=\"advantages__item-icon--1\" src=\"{{base_url('public/filemanager/'~tab.icon)}}\" loading=\"lazy\" alt=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"advantages__item-text\">{{tab.desc}}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t\t</div>
  </div>
</section>", "views/site/sections/tabs.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\tabs.tpl");
    }
}
