<?php

/* views/admin/render/sections/item.tpl */
class __TwigTemplate_fc9eb249899d8ebeaaa34a45670b6b9a910bb59ad6b9ec2c3e52c8d37fd8ec52 extends Twig_Template
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
        echo "<tr>
\t<td>";
        // line 2
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</td>
\t<td>";
        // line 3
        echo twig_escape_filter($this->env, ($context["filename"] ?? null), "html", null, true);
        echo ".tpl</td>
\t<td>";
        // line 4
        if (($context["navigation"] ?? null)) {
            echo "<i class=\"fa fa-check\"></i>";
        }
        echo "</td>
\t<td class=\"center\">
\t\t<div class=\"buttons nowrap notop\">
\t\t\t<button sectionedit=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" sectiontitle=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i></button>
\t\t\t<button sectionremove=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" sectiontitle=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/sections/item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  42 => 7,  34 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
\t<td>{{title}}</td>
\t<td>{{filename}}.tpl</td>
\t<td>{% if navigation %}<i class=\"fa fa-check\"></i>{% endif %}</td>
\t<td class=\"center\">
\t\t<div class=\"buttons nowrap notop\">
\t\t\t<button sectionedit=\"{{id}}\" sectiontitle=\"{{title}}\"><i class=\"fa fa-edit\"></i></button>
\t\t\t<button sectionremove=\"{{id}}\" sectiontitle=\"{{title}}\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t</div>
\t</td>
</tr>", "views/admin/render/sections/item.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\sections\\item.tpl");
    }
}
