<?php

/* views/admin/render/catalogs/item.tpl */
class __TwigTemplate_06a3478b62a7cbc11ef3015de24fff753f1884999220d55fa4552f68639286f9 extends Twig_Template
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
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"title\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" rules=\"empty|length:3,255\">
\t\t</div>
\t</td>
\t";
        // line 12
        echo "\t<td>
\t\t<div class=\"select\">
\t\t\t<select name=\"page\" rules=\"empty\">
\t\t\t\t";
        // line 15
        if (($context["pages"] ?? null)) {
            // line 16
            echo "\t\t\t\t\t<option disabled>---</option>
\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            foreach ($context['_seq'] as $context["pval"] => $context["ptitle"]) {
                // line 18
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["pval"], "html", null, true);
                echo "\"";
                if ((($context["pval"] == ($context["page"] ?? null)) || ($context["ptitle"] == ($context["page"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["ptitle"], "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pval'], $context['ptitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t<option disabled>Нет данных</option>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t</select>
\t\t</div>
\t</td>
\t
\t<td class=\"center\">
\t\t";
        // line 28
        $context["rand"] = rand(0, 999);
        // line 29
        echo "\t\t<div class=\"labelsrow noselect\">
\t\t\t<div class=\"labelsrow__item\">
\t\t\t\t<input type=\"checkbox\" id=\"sPCat";
        // line 31
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" name=\"simular_products_category\"";
        if (($context["simular_products_category"] ?? null)) {
            echo " checked";
        }
        echo ">
\t\t\t\t<label class=\"labelsrow__label\" for=\"sPCat";
        // line 32
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"><span class=\"labelsrow__title\">По категории</span></label>
\t\t\t</div>
\t\t\t<div class=\"labelsrow__item\">
\t\t\t\t<input type=\"checkbox\" id=\"sPOps";
        // line 35
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" name=\"simular_products_options\"";
        if (($context["simular_products_options"] ?? null)) {
            echo " checked";
        }
        echo ">
\t\t\t\t<label class=\"labelsrow__label\" for=\"sPOps";
        // line 36
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"><span class=\"labelsrow__title\">По опциям</span></label>
\t\t\t</div>
\t\t\t<div class=\"labelsrow__item\">
\t\t\t\t<input type=\"checkbox\" id=\"sPTgs";
        // line 39
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" name=\"simular_products_tags\"";
        if (($context["simular_products_tags"] ?? null)) {
            echo " checked";
        }
        echo ">
\t\t\t\t<label class=\"labelsrow__label\" for=\"sPTgs";
        // line 40
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"><span class=\"labelsrow__title\">По тегам</span></label>
\t\t\t</div>
\t\t</div>
\t</td>
\t
\t";
        // line 45
        if (($context["setvarstocatalogs"] ?? null)) {
            // line 46
            echo "\t\t<td>
\t\t\t<div class=\"field\">
\t\t\t\t<input type=\"text\" name=\"item_variable\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["item_variable"] ?? null), "html", null, true);
            echo "\" rules=\"empty|length:3,100|reg:^\\w+\$,gi:Ошибка! Только лат. символы, цифры и нижнее подчеркивание\">
\t\t\t</div>
\t\t</td>\t
\t";
        } else {
            // line 52
            echo "\t\t<input type=\"hidden\" name=\"item_variable\" value=\"product\">
\t";
        }
        // line 54
        echo "\t
\t<td>
\t\t<input type=\"hidden\" name=\"fields\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["fields"] ?? null), "html", null, true);
        echo "\" rules=\"empty\" catfieldsdata>
\t\t<input type=\"hidden\" name=\"vars\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["vars"] ?? null), "html", null, true);
        echo "\" ";
        echo " catvarsdata>
\t\t<div class=\"buttons notop inline\">
\t\t\t<button catalogssetfields=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "id", []), "html", null, true);
        echo "\" class=\"alt2 pl-15px pr-15px\"><i class=\"fa fa-sliders\" title=\"Указать поля для каталога\"></i></button>
\t\t\t<button catalogssetvars=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "id", []), "html", null, true);
        echo "\" class=\"alt2 pl-15px pr-15px\"><i class=\"fa fa-th-list\" title=\"Добавить переменные для каталога\"></i></button>
\t\t</div>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons notop inline\">
\t\t\t<button class=\"alt2 pl-15px pr-15px\" ";
        // line 65
        if (($context["update"] ?? null)) {
            echo "update=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" title=\"Обновить\"";
        } else {
            echo "save=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" title=\"Сохранить\"";
        }
        echo "><i class=\"fa fa-";
        if (($context["update"] ?? null)) {
            echo "repeat";
        } else {
            echo "save";
        }
        echo "\"></i></button>
\t\t\t<button remove=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"remove pl-15px pr-15px\" title=\"Удалить\"><i class=\"fa fa-";
        if (($context["update"] ?? null)) {
            echo "trash";
        } else {
            echo "ban";
        }
        echo "\"></i></button>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/catalogs/item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 66,  170 => 65,  162 => 60,  158 => 59,  152 => 57,  148 => 56,  144 => 54,  140 => 52,  133 => 48,  129 => 46,  127 => 45,  119 => 40,  111 => 39,  105 => 36,  97 => 35,  91 => 32,  83 => 31,  79 => 29,  77 => 28,  70 => 23,  66 => 21,  63 => 20,  48 => 18,  44 => 17,  41 => 16,  39 => 15,  34 => 12,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"title\" value=\"{{title}}\" rules=\"empty|length:3,255\">
\t\t</div>
\t</td>
\t{#<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"variable\" value=\"{{variable}}\" rules=\"empty|length:3,100|reg:^\\w+\$,gi:Ошибка! Только лат. символы, цифры и нижнее подчеркивание\">
\t\t</div>
\t</td>#}
\t<td>
\t\t<div class=\"select\">
\t\t\t<select name=\"page\" rules=\"empty\">
\t\t\t\t{% if pages %}
\t\t\t\t\t<option disabled>---</option>
\t\t\t\t\t{% for pval, ptitle in pages %}
\t\t\t\t\t\t<option value=\"{{pval}}\"{% if pval == page or ptitle == page %} selected{% endif %}>{{ptitle}}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% else %}
\t\t\t\t\t<option disabled>Нет данных</option>
\t\t\t\t{% endif %}
\t\t\t</select>
\t\t</div>
\t</td>
\t
\t<td class=\"center\">
\t\t{% set rand = rand(0,999) %}
\t\t<div class=\"labelsrow noselect\">
\t\t\t<div class=\"labelsrow__item\">
\t\t\t\t<input type=\"checkbox\" id=\"sPCat{{rand}}\" name=\"simular_products_category\"{% if simular_products_category %} checked{% endif %}>
\t\t\t\t<label class=\"labelsrow__label\" for=\"sPCat{{rand}}\"><span class=\"labelsrow__title\">По категории</span></label>
\t\t\t</div>
\t\t\t<div class=\"labelsrow__item\">
\t\t\t\t<input type=\"checkbox\" id=\"sPOps{{rand}}\" name=\"simular_products_options\"{% if simular_products_options %} checked{% endif %}>
\t\t\t\t<label class=\"labelsrow__label\" for=\"sPOps{{rand}}\"><span class=\"labelsrow__title\">По опциям</span></label>
\t\t\t</div>
\t\t\t<div class=\"labelsrow__item\">
\t\t\t\t<input type=\"checkbox\" id=\"sPTgs{{rand}}\" name=\"simular_products_tags\"{% if simular_products_tags %} checked{% endif %}>
\t\t\t\t<label class=\"labelsrow__label\" for=\"sPTgs{{rand}}\"><span class=\"labelsrow__title\">По тегам</span></label>
\t\t\t</div>
\t\t</div>
\t</td>
\t
\t{% if setvarstocatalogs %}
\t\t<td>
\t\t\t<div class=\"field\">
\t\t\t\t<input type=\"text\" name=\"item_variable\" value=\"{{item_variable}}\" rules=\"empty|length:3,100|reg:^\\w+\$,gi:Ошибка! Только лат. символы, цифры и нижнее подчеркивание\">
\t\t\t</div>
\t\t</td>\t
\t{% else %}
\t\t<input type=\"hidden\" name=\"item_variable\" value=\"product\">
\t{% endif %}
\t
\t<td>
\t\t<input type=\"hidden\" name=\"fields\" value=\"{{fields}}\" rules=\"empty\" catfieldsdata>
\t\t<input type=\"hidden\" name=\"vars\" value=\"{{vars}}\" {# rules=\"empty\" #} catvarsdata>
\t\t<div class=\"buttons notop inline\">
\t\t\t<button catalogssetfields=\"{{c.id}}\" class=\"alt2 pl-15px pr-15px\"><i class=\"fa fa-sliders\" title=\"Указать поля для каталога\"></i></button>
\t\t\t<button catalogssetvars=\"{{c.id}}\" class=\"alt2 pl-15px pr-15px\"><i class=\"fa fa-th-list\" title=\"Добавить переменные для каталога\"></i></button>
\t\t</div>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons notop inline\">
\t\t\t<button class=\"alt2 pl-15px pr-15px\" {% if update %}update=\"{{id}}\" title=\"Обновить\"{% else %}save=\"{{id}}\" title=\"Сохранить\"{% endif %}><i class=\"fa fa-{% if update %}repeat{% else %}save{% endif %}\"></i></button>
\t\t\t<button remove=\"{{id}}\" class=\"remove pl-15px pr-15px\" title=\"Удалить\"><i class=\"fa fa-{% if update %}trash{% else %}ban{% endif %}\"></i></button>
\t\t</div>
\t</td>
</tr>", "views/admin/render/catalogs/item.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\catalogs\\item.tpl");
    }
}
