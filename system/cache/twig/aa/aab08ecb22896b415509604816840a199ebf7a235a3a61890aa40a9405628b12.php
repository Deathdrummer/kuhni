<?php

/* views/admin/render/lists/listinlist/item.tpl */
class __TwigTemplate_bdd531151754b33839143128213635e1772a05661dd80af09cfd2b513a9bcb06 extends Twig_Template
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
        echo "<tr index=\"";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\">
\t<td>
\t\t";
        // line 3
        if (($context["fields"] ?? null)) {
            // line 4
            echo "\t\t\t<div class=\"select\">
\t\t\t\t<select name=\"list_in_list[";
            // line 5
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][field]\" listinlistfield rules=\"empty\">
\t\t\t\t\t<option value=\"\" selected disabled>Выбрать</option>
\t\t\t\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 8
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "value", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", []), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t";
        } else {
            // line 13
            echo "\t\t\t<p class=\"empty\">Нет полей списка</p>
\t\t";
        }
        // line 15
        echo "\t</td>
\t<td>
\t\t";
        // line 17
        if (($context["fields"] ?? null)) {
            // line 18
            echo "\t\t\t<div class=\"select\">
\t\t\t\t<select name=\"list_in_list[";
            // line 19
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][list]\" listinlistchooselist rules=\"empty\">
\t\t\t\t\t<option value=\"\" selected disabled>Выбрать</option>
\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lists"] ?? null));
            foreach ($context['_seq'] as $context["listId"] => $context["list"]) {
                // line 22
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["listId"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "title", []), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['listId'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t";
        } else {
            // line 27
            echo "\t\t\t<p class=\"empty\">Нет полей списка</p>
\t\t";
        }
        // line 29
        echo "\t</td>
\t<td listinlistvaluefield>
\t\t<p class=\"empty\">Выберите подгружаемый список</p>
\t</td>
\t<td listinlistoutfield>
\t\t<p class=\"empty\">Выберите подгружаемый список</p>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons notop inline\">
\t\t\t<button class=\"small remove\" listinlistremove><i class=\"fa fa-trash\"></i></button>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/lists/listinlist/item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  97 => 27,  92 => 24,  81 => 22,  77 => 21,  72 => 19,  69 => 18,  67 => 17,  63 => 15,  59 => 13,  54 => 10,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr index=\"{{index}}\">
\t<td>
\t\t{% if fields %}
\t\t\t<div class=\"select\">
\t\t\t\t<select name=\"list_in_list[{{index}}][field]\" listinlistfield rules=\"empty\">
\t\t\t\t\t<option value=\"\" selected disabled>Выбрать</option>
\t\t\t\t\t{% for field in fields %}
\t\t\t\t\t\t<option value=\"{{field.value}}\">{{field.title}}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t{% else %}
\t\t\t<p class=\"empty\">Нет полей списка</p>
\t\t{% endif %}
\t</td>
\t<td>
\t\t{% if fields %}
\t\t\t<div class=\"select\">
\t\t\t\t<select name=\"list_in_list[{{index}}][list]\" listinlistchooselist rules=\"empty\">
\t\t\t\t\t<option value=\"\" selected disabled>Выбрать</option>
\t\t\t\t\t{% for listId, list in lists %}
\t\t\t\t\t\t<option value=\"{{listId}}\">{{list.title}}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t{% else %}
\t\t\t<p class=\"empty\">Нет полей списка</p>
\t\t{% endif %}
\t</td>
\t<td listinlistvaluefield>
\t\t<p class=\"empty\">Выберите подгружаемый список</p>
\t</td>
\t<td listinlistoutfield>
\t\t<p class=\"empty\">Выберите подгружаемый список</p>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons notop inline\">
\t\t\t<button class=\"small remove\" listinlistremove><i class=\"fa fa-trash\"></i></button>
\t\t</div>
\t</td>
</tr>", "views/admin/render/lists/listinlist/item.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\lists\\listinlist\\item.tpl");
    }
}
