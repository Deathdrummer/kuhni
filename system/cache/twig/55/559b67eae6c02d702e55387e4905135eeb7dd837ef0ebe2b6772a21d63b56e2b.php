<?php

/* views/admin/render/lists/listinlist/form.tpl */
class __TwigTemplate_e3b6d771507edd2d352c0c5c0d594e795b52fb9782ef35144b6c6ec3999a269d extends Twig_Template
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
        echo "<table>
\t<thead>
\t\t<tr>
\t\t\t<td class=\"w-30rem\">Поле списка</td>
\t\t\t<td>Подгружаемый список</td>
\t\t\t<td class=\"w-30rem\">Поле для вывода в списке</td>
\t\t\t<td class=\"w-30rem\">Значение для вывода на сайте</td>
\t\t\t<td class=\"w-7rem\"></td>
\t\t</tr>
\t</thead>
\t<tbody id=\"listinlistForm\">
\t\t";
        // line 12
        if (($context["table_data"] ?? null)) {
            // line 13
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["table_data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["row"]) {
                // line 14
                echo "\t\t\t\t<tr index=\"";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "\">
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"list_in_list[";
                // line 17
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "][field]\" listinlistfield rules=\"empty\">
\t\t\t\t\t\t\t\t<option value=\"\" selected disabled>---</option>
\t\t\t\t\t\t\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "value", []), "html", null, true);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "value", []) == twig_get_attribute($this->env, $this->source, $context["row"], "field", []))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", []), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"list_in_list[";
                // line 27
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "][list]\" listinlistchooselist rules=\"empty\">
\t\t\t\t\t\t\t\t<option value=\"\" selected disabled>---</option>
\t\t\t\t\t\t\t\t";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lists"] ?? null));
                foreach ($context['_seq'] as $context["listId"] => $context["list"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $context["listId"], "html", null, true);
                    echo "\"";
                    if (($context["listId"] == twig_get_attribute($this->env, $this->source, $context["row"], "list", []))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "title", []), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['listId'], $context['list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td listinlistvaluefield>
\t\t\t\t\t\t";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["row"], "list", [])) {
                    // line 37
                    echo "\t\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t\t<select name=\"list_in_list[";
                    // line 38
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "][field_to_list]\" rules=\"empty\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>---</option>
\t\t\t\t\t\t\t\t\t";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["lists"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["row"], "list", [])] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["fields"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["frow"]) {
                        // line 41
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["frow"], "name", []), "html", null, true);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["frow"], "name", []) == twig_get_attribute($this->env, $this->source, $context["row"], "field_to_list", []))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["frow"], "title", []), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frow'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td listinlistoutfield>
\t\t\t\t\t\t";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["row"], "list", [])) {
                    // line 49
                    echo "\t\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t\t<select name=\"list_in_list[";
                    // line 50
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "][field_to_output]\" rules=\"empty\">
\t\t\t\t\t\t\t\t\t<option value=\"0\"";
                    // line 51
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "field_to_output", []) === 0)) {
                        echo " selected";
                    }
                    echo ">ID элемента списка</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\"";
                    // line 52
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "field_to_output", []) === 1)) {
                        echo " selected";
                    }
                    echo ">Все значения элемента списка</option>
\t\t\t\t\t\t\t\t\t";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["lists"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["row"], "list", [])] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["fields"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["frow"]) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["frow"], "name", []), "html", null, true);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["frow"], "name", []) == twig_get_attribute($this->env, $this->source, $context["row"], "field_to_output", []))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["frow"], "title", []), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frow'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t<div class=\"buttons notop inline\">
\t\t\t\t\t\t\t<button class=\"small remove\" listinlistremove><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t
\t\t";
        } else {
            // line 69
            echo "\t\t\t<tr class=\"empty\">
\t\t\t\t<td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t</tr>
\t\t";
        }
        // line 73
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td colspan=\"5\">
\t\t\t\t<div class=\"buttons notop inline right\">
\t\t\t\t\t<button class=\"verysmall alt\" id=\"listInListAdd\">Добавить</button>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>\t
</table>


";
    }

    public function getTemplateName()
    {
        return "views/admin/render/lists/listinlist/form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 73,  211 => 69,  207 => 67,  194 => 59,  189 => 56,  174 => 54,  170 => 53,  164 => 52,  158 => 51,  154 => 50,  151 => 49,  149 => 48,  145 => 46,  140 => 43,  125 => 41,  121 => 40,  116 => 38,  113 => 37,  111 => 36,  105 => 32,  90 => 30,  86 => 29,  81 => 27,  74 => 22,  59 => 20,  55 => 19,  50 => 17,  43 => 14,  38 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table>
\t<thead>
\t\t<tr>
\t\t\t<td class=\"w-30rem\">Поле списка</td>
\t\t\t<td>Подгружаемый список</td>
\t\t\t<td class=\"w-30rem\">Поле для вывода в списке</td>
\t\t\t<td class=\"w-30rem\">Значение для вывода на сайте</td>
\t\t\t<td class=\"w-7rem\"></td>
\t\t</tr>
\t</thead>
\t<tbody id=\"listinlistForm\">
\t\t{% if table_data %}
\t\t\t{% for k, row in table_data %}
\t\t\t\t<tr index=\"{{k}}\">
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"list_in_list[{{k}}][field]\" listinlistfield rules=\"empty\">
\t\t\t\t\t\t\t\t<option value=\"\" selected disabled>---</option>
\t\t\t\t\t\t\t\t{% for field in fields %}
\t\t\t\t\t\t\t\t\t<option value=\"{{field.value}}\"{% if field.value == row.field %} selected{% endif %}>{{field.title}}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"list_in_list[{{k}}][list]\" listinlistchooselist rules=\"empty\">
\t\t\t\t\t\t\t\t<option value=\"\" selected disabled>---</option>
\t\t\t\t\t\t\t\t{% for listId, list in lists %}
\t\t\t\t\t\t\t\t\t<option value=\"{{listId}}\"{% if listId == row.list %} selected{% endif %}>{{list.title}}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td listinlistvaluefield>
\t\t\t\t\t\t{% if row.list %}
\t\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t\t<select name=\"list_in_list[{{k}}][field_to_list]\" rules=\"empty\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>---</option>
\t\t\t\t\t\t\t\t\t{% for frow in lists[row.list]['fields'] %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{frow.name}}\"{% if frow.name == row.field_to_list %} selected{% endif %}>{{frow.title}}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t<td listinlistoutfield>
\t\t\t\t\t\t{% if row.list %}
\t\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t\t<select name=\"list_in_list[{{k}}][field_to_output]\" rules=\"empty\">
\t\t\t\t\t\t\t\t\t<option value=\"0\"{% if row.field_to_output is same as(0) %} selected{% endif %}>ID элемента списка</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\"{% if row.field_to_output is same as(1) %} selected{% endif %}>Все значения элемента списка</option>
\t\t\t\t\t\t\t\t\t{% for frow in lists[row.list]['fields'] %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{frow.name}}\"{% if frow.name == row.field_to_output %} selected{% endif %}>{{frow.title}}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t<div class=\"buttons notop inline\">
\t\t\t\t\t\t\t<button class=\"small remove\" listinlistremove><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t
\t\t{% else %}
\t\t\t<tr class=\"empty\">
\t\t\t\t<td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t</tr>
\t\t{% endif %}
\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td colspan=\"5\">
\t\t\t\t<div class=\"buttons notop inline right\">
\t\t\t\t\t<button class=\"verysmall alt\" id=\"listInListAdd\">Добавить</button>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>\t
</table>


{#<table class=\"fieldset\">
\t<tbody>
\t\t{% if fields %}
\t\t\t{% include 'views/admin/form/select.tpl' with {'label': 'Выбрать поле списка', 'name': 'setting_card_variant', 'data': fields, 'labelcls': 'w-40'} %}
\t\t{% endif %}
\t\t
\t\t{% if lists %}
\t\t\t{% include 'views/admin/form/select.tpl' with {'label': 'Выбрать список', 'name': 'setting_card_variant', 'data': lists, 'labelcls': 'w-40'} %}
\t\t{% endif %}
\t</tbody>
</table>#}", "views/admin/render/lists/listinlist/form.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\lists\\listinlist\\form.tpl");
    }
}
