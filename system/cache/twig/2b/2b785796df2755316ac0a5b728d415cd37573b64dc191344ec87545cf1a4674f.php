<?php

/* views/admin/form/textarea.tpl */
class __TwigTemplate_b484238cc97f3be24e1f16e38cf9c4e58e128fffa6438dc4c1e4b73e390f0bf2 extends Twig_Template
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
        list($context["inpName"], $context["value"], $context["rand"]) =         ["", "", rand(0, 999)];
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["name"] ?? null), "|"));
        foreach ($context['_seq'] as $context["k"] => $context["item"]) {
            // line 3
            echo "\t";
            if (($context["k"] == 0)) {
                // line 4
                echo "\t\t";
                $context["inpName"] = $context["item"];
                // line 5
                echo "\t\t";
                $context["value"] = twig_get_attribute($this->env, $this->source, $context, $context["item"]);
                // line 6
                echo "\t";
            } else {
                // line 7
                echo "\t\t";
                $context["inpName"] = (((($context["inpName"] ?? null) . "[") . $context["item"]) . "]");
                // line 8
                echo "\t\t";
                $context["value"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["value"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["item"]] ?? null) : null);
                // line 9
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
<tr>
\t<td class=\"";
        // line 13
        if (($context["labelcls"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["labelcls"] ?? null), "html", null, true);
        } else {
            echo "default";
        }
        echo "\"><div><span>";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</span></div></td>
\t<td><div class=\"textarea";
        // line 14
        if (($context["cls"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["cls"] ?? null), "html", null, true);
        }
        echo "\"><textarea
\t\tname=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
        echo "\"
\t\tid=\"textarea";
        // line 16
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"
\t\t";
        // line 17
        if (($context["markdown"] ?? null)) {
            echo "markdown";
        }
        // line 18
        echo "\t\trows=\"";
        echo twig_escape_filter($this->env, (((isset($context["rows"]) || array_key_exists("rows", $context))) ? (_twig_default_filter(($context["rows"] ?? null), 6)) : (6)), "html", null, true);
        echo "\"
\t\t";
        // line 19
        if (($context["rules"] ?? null)) {
            echo "rules=\"";
            echo twig_escape_filter($this->env, ($context["rules"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "\t\t";
        if (($context["placeholder"] ?? null)) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "\t\t";
        if (($context["ddrtextarealist"] ?? null)) {
            echo "ddrtextarealist=\"";
            echo twig_escape_filter($this->env, ($context["ddrtextarealist"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 22
        echo "\t\t";
        if (($context["editor"] ?? null)) {
            echo "editor=\"";
            echo twig_escape_filter($this->env, (((isset($context["editor"]) || array_key_exists("editor", $context))) ? (_twig_default_filter(($context["editor"] ?? null), ($context["rand"] ?? null))) : (($context["rand"] ?? null))), "html", null, true);
            echo "\"";
        }
        echo ">";
        if (((isset($context["value"]) || array_key_exists("value", $context)) &&  !twig_test_empty(($context["value"] ?? null)))) {
            echo twig_escape_filter($this->env, (((isset($context["value"]) || array_key_exists("value", $context))) ? (_twig_default_filter(($context["value"] ?? null), ($context["default"] ?? null))) : (($context["default"] ?? null))), "html", null, true);
        }
        echo "</textarea></div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/form/textarea.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  105 => 21,  98 => 20,  92 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  68 => 14,  58 => 13,  54 => 11,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set inpName, value, rand = '', '', rand(0,999) %}
{% for k, item in name|split('|') %}
\t{% if k == 0 %}
\t\t{% set inpName = item %}
\t\t{% set value = attribute(_context, item) %}
\t{% else %}
\t\t{% set inpName = inpName~'['~item~']' %}
\t\t{% set value = value[item] %}
\t{% endif %}
{% endfor %}

<tr>
\t<td class=\"{% if labelcls %}{{labelcls}}{% else %}default{% endif %}\"><div><span>{{label}}</span></div></td>
\t<td><div class=\"textarea{% if cls %} {{cls}}{% endif %}\"><textarea
\t\tname=\"{{inpName}}\"
\t\tid=\"textarea{{rand}}\"
\t\t{% if markdown %}markdown{% endif %}
\t\trows=\"{{rows|default(6)}}\"
\t\t{% if rules %}rules=\"{{rules}}\"{% endif %}
\t\t{% if placeholder %}placeholder=\"{{placeholder}}\"{% endif %}
\t\t{% if ddrtextarealist %}ddrtextarealist=\"{{ddrtextarealist}}\"{% endif %}
\t\t{% if editor %}editor=\"{{editor|default(rand)}}\"{% endif %}>{% if value is defined and value is not empty %}{{value|default(default)}}{% endif %}</textarea></div>
\t</td>
</tr>", "views/admin/form/textarea.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\form\\textarea.tpl");
    }
}
