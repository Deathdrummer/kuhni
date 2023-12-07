<?php

/* views/admin/render/pages/page_sections.tpl */
class __TwigTemplate_e9747fe01a236093e4711983fde043361a102dfe70f53ecf969d7623e8b05059 extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col-12 col-sm-6\">
\t\t<div class=\"pagescreenslabel\">
\t\t\t<p class=\"pagescreenslabel__label\">Все секции</p>
\t\t</div>
\t\t
\t\t<ul id=\"allSections\" class=\"pagescreensblock\">
\t\t\t";
        // line 8
        if (($context["all_sections"] ?? null)) {
            // line 9
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_sections"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["als"]) {
                // line 10
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div pagesection=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["als"], "id", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<span class=\"my-handle\">";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["als"], "title", []), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<i settingssection class=\"fa fa-cog item settings\"></i>
\t\t\t\t\t\t\t<i removesection class=\"fa fa-trash item remove\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['als'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "\t\t</ul>
\t</div>
\t<div class=\"col-12 col-sm-6\">
\t\t<div class=\"pagescreenslabel\">
\t\t\t<p class=\"pagescreenslabel__label\">Секции страницы: <strong>";
        // line 23
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
        echo "</strong></p>
\t\t</div>
\t\t
\t\t<ul id=\"pageSections\" class=\"pagescreensblock\">
\t\t\t";
        // line 27
        if (($context["page_sections"] ?? null)) {
            // line 28
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["page_sections"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pgs"]) {
                // line 29
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div pagesection=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pgs"], "section_id", []), "html", null, true);
                echo "\" pagesectionid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pgs"], "page_section_id", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<span class=\"my-handle\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pgs"], "title", []), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t<i settingssection class=\"fa fa-cog item settings\"></i>
\t\t\t\t\t\t\t<i removesection class=\"fa fa-trash item remove\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pgs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t";
        }
        // line 38
        echo "\t\t</ul>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/pages/page_sections.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  102 => 37,  90 => 31,  84 => 30,  81 => 29,  76 => 28,  74 => 27,  67 => 23,  61 => 19,  58 => 18,  46 => 12,  42 => 11,  39 => 10,  34 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
\t<div class=\"col-12 col-sm-6\">
\t\t<div class=\"pagescreenslabel\">
\t\t\t<p class=\"pagescreenslabel__label\">Все секции</p>
\t\t</div>
\t\t
\t\t<ul id=\"allSections\" class=\"pagescreensblock\">
\t\t\t{% if all_sections %}
\t\t\t\t{% for als in all_sections %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<div pagesection=\"{{als.id}}\">
\t\t\t\t\t\t\t<span class=\"my-handle\">{{als.title}}</span>
\t\t\t\t\t\t\t<i settingssection class=\"fa fa-cog item settings\"></i>
\t\t\t\t\t\t\t<i removesection class=\"fa fa-trash item remove\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</ul>
\t</div>
\t<div class=\"col-12 col-sm-6\">
\t\t<div class=\"pagescreenslabel\">
\t\t\t<p class=\"pagescreenslabel__label\">Секции страницы: <strong>{{page_title}}</strong></p>
\t\t</div>
\t\t
\t\t<ul id=\"pageSections\" class=\"pagescreensblock\">
\t\t\t{% if page_sections %}
\t\t\t\t{% for pgs in page_sections %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<div pagesection=\"{{pgs.section_id}}\" pagesectionid=\"{{pgs.page_section_id}}\">
\t\t\t\t\t\t\t<span class=\"my-handle\">{{pgs.title}}</span>
\t\t\t\t\t\t\t<i settingssection class=\"fa fa-cog item settings\"></i>
\t\t\t\t\t\t\t<i removesection class=\"fa fa-trash item remove\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</ul>
\t</div>
</div>", "views/admin/render/pages/page_sections.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\pages\\page_sections.tpl");
    }
}
