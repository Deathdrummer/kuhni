<?php

/* views/admin/render/products/item.tpl */
class __TwigTemplate_bd4f40632198c347a91e7c366078051fd91326fd02b443dc280cde566b336747 extends Twig_Template
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
        echo "<tr";
        if (($context["optional"] ?? null)) {
            echo " class=\"optional\"";
        }
        echo ">
\t<td class=\"center\">
\t\t";
        // line 3
        if (($context["main_image"] ?? null)) {
            // line 4
            echo "\t\t\t<div class=\"avatar avatar_contain\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", []))), "html", null, true);
            echo "')\"></div>
\t\t";
        } else {
            // line 6
            echo "\t\t\t<div class=\"avatar avatar_contain\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
            echo "')\"></div>
\t\t";
        }
        // line 8
        echo "\t</td>
\t<td>";
        // line 9
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</td>
\t<td>";
        // line 10
        echo twig_escape_filter($this->env, ($context["seo_url"] ?? null), "html", null, true);
        echo "</td>
\t<td>";
        // line 11
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</td>
\t<td>
\t\t";
        // line 13
        if (($context["categories"] ?? null)) {
            // line 14
            echo "\t\t\t<ul class=\"list h-46px\">
\t\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 16
                echo "\t\t\t\t\t<li>• ";
                echo twig_escape_filter($this->env, (((isset($context["cat"]) || array_key_exists("cat", $context))) ? (_twig_default_filter($context["cat"], "-")) : ("-")), "html", null, true);
                echo "</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t</ul>
\t\t";
        } else {
            // line 20
            echo "\t\t\t-
\t\t";
        }
        // line 22
        echo "\t</td>
\t";
        // line 23
        if (($context["optional"] ?? null)) {
            // line 24
            echo "\t\t<td class=\"left\">
\t\t\t<div class=\"buttons notop inline nowrap\">
\t\t\t\t<button class=\"px-16px small\" catalogsitemedit=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" catalogid=\"";
            echo twig_escape_filter($this->env, ($context["catalog_id"] ?? null), "html", null, true);
            echo "\" title=\"Редактировать\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t<button class=\"remove px-16px small\" catalogsitemremove=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
\t\t\t</div>
\t\t</td>
\t";
        } else {
            // line 31
            echo "\t\t<td class=\"center\">
\t\t\t<div class=\"buttons notop inline nowrap\">
\t\t\t\t<button class=\"px-15px\" catalogsitemedit=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" catalogid=\"";
            echo twig_escape_filter($this->env, ($context["catalog_id"] ?? null), "html", null, true);
            echo "\" title=\"Редактировать\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t<button class=\"remove px-15px\" catalogsitemremove=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t<button class=\"alt2 px-15px\" catalogsitemcopy=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" catalogid=\"";
            echo twig_escape_filter($this->env, ($context["catalog_id"] ?? null), "html", null, true);
            echo "\" title=\"Копировать\"><i class=\"fa fa-copy\"></i></button>
\t\t\t</div>
\t\t</td>
\t";
        }
        // line 39
        echo "</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/products/item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  123 => 35,  119 => 34,  113 => 33,  109 => 31,  102 => 27,  96 => 26,  92 => 24,  90 => 23,  87 => 22,  83 => 20,  79 => 18,  70 => 16,  66 => 15,  63 => 14,  61 => 13,  56 => 11,  52 => 10,  48 => 9,  45 => 8,  39 => 6,  33 => 4,  31 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr{% if optional %} class=\"optional\"{% endif %}>
\t<td class=\"center\">
\t\t{% if main_image %}
\t\t\t<div class=\"avatar avatar_contain\" style=\"background-image: url('{{base_url('public/filemanager/__thumbs__/'~main_image.file)}}')\"></div>
\t\t{% else %}
\t\t\t<div class=\"avatar avatar_contain\" style=\"background-image: url('{{base_url('public/images/none_img.png')}}')\"></div>
\t\t{% endif %}
\t</td>
\t<td>{{title}}</td>
\t<td>{{seo_url}}</td>
\t<td>{{name}}</td>
\t<td>
\t\t{% if categories %}
\t\t\t<ul class=\"list h-46px\">
\t\t\t\t{% for cat in categories %}
\t\t\t\t\t<li>• {{cat|default('-')}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t{% else %}
\t\t\t-
\t\t{% endif %}
\t</td>
\t{% if optional %}
\t\t<td class=\"left\">
\t\t\t<div class=\"buttons notop inline nowrap\">
\t\t\t\t<button class=\"px-16px small\" catalogsitemedit=\"{{id}}\" catalogid=\"{{catalog_id}}\" title=\"Редактировать\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t<button class=\"remove px-16px small\" catalogsitemremove=\"{{id}}\" title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
\t\t\t</div>
\t\t</td>
\t{% else %}
\t\t<td class=\"center\">
\t\t\t<div class=\"buttons notop inline nowrap\">
\t\t\t\t<button class=\"px-15px\" catalogsitemedit=\"{{id}}\" catalogid=\"{{catalog_id}}\" title=\"Редактировать\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t<button class=\"remove px-15px\" catalogsitemremove=\"{{id}}\" title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t<button class=\"alt2 px-15px\" catalogsitemcopy=\"{{id}}\" catalogid=\"{{catalog_id}}\" title=\"Копировать\"><i class=\"fa fa-copy\"></i></button>
\t\t\t</div>
\t\t</td>
\t{% endif %}
</tr>", "views/admin/render/products/item.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\products\\item.tpl");
    }
}
