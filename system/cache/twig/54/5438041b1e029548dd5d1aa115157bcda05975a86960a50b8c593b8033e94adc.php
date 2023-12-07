<?php

/* views/admin/form/select.tpl */
class __TwigTemplate_93616ddfe15342c070e32a19f9f570541b44b1066cb947b1b5991d6aa4d683e0 extends Twig_Template
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
\t<td>
\t\t<div class=\"select";
        // line 15
        if (($context["cls"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["cls"] ?? null), "html", null, true);
        }
        echo "\">
\t\t\t<select name=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
        echo "\"";
        if (($context["rules"] ?? null)) {
            echo " rules=\"";
            echo twig_escape_filter($this->env, ($context["rules"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["multiple"] ?? null)) {
            echo " multiple";
        }
        echo ">
\t\t\t\t";
        // line 17
        if (($context["data"] ?? null)) {
            // line 18
            echo "\t\t\t\t\t";
            if (( !($context["multiple"] ?? null) && ($context["empty"] ?? null))) {
                // line 19
                echo "\t\t\t\t\t\t<option selected value=\"\">---</option>
\t\t\t\t\t";
            } elseif (            // line 20
($context["multiple"] ?? null)) {
                // line 21
                echo "\t\t\t\t\t\t";
                $context["value"] = twig_split_filter($this->env, ($context["value"] ?? null), ",");
                echo " ";
                // line 22
                echo "\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["item"]) {
                // line 26
                echo "\t\t\t\t\t\t";
                if (($context["multiple"] ?? null)) {
                    // line 27
                    echo "\t\t\t\t\t\t\t<option";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "value", []), ($context["value"] ?? null))) {
                        echo " selected";
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "desabled", [])) {
                        echo " desabled";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t";
                } else {
                    // line 29
                    echo "\t\t\t\t\t\t\t<option";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "value", []) == ($context["value"] ?? null))) {
                        echo " selected";
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "desabled", [])) {
                        echo " desabled";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t</select>
\t\t</div>
\t</td>
</tr>


<script>
\$(document).ready(function() {
\tlet multiple = '";
        // line 43
        echo twig_escape_filter($this->env, ($context["multiple"] ?? null), "html", null, true);
        echo "';
\t
\t
\tif (multiple == 1) {
\t\tlet selector = \$('[name=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
        echo "\"]');
\t\t
\t\t\$(selector).selectize({
\t\t    create: false,
\t\t    onChange: function(data) {}
\t\t});
\t}
\t
\t
});
\t
</script>";
    }

    public function getTemplateName()
    {
        return "views/admin/form/select.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 47,  170 => 43,  160 => 35,  156 => 33,  153 => 32,  147 => 31,  132 => 29,  117 => 27,  114 => 26,  110 => 25,  106 => 23,  103 => 22,  99 => 21,  97 => 20,  94 => 19,  91 => 18,  89 => 17,  76 => 16,  69 => 15,  58 => 13,  54 => 11,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  25 => 2,  23 => 1,);
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
\t<td>
\t\t<div class=\"select{% if cls %} {{cls}}{% endif %}\">
\t\t\t<select name=\"{{inpName}}\"{% if rules %} rules=\"{{rules}}\"{% endif %}{% if multiple %} multiple{% endif %}>
\t\t\t\t{% if data %}
\t\t\t\t\t{% if not multiple and empty %}
\t\t\t\t\t\t<option selected value=\"\">---</option>
\t\t\t\t\t{% elseif multiple %}
\t\t\t\t\t\t{% set value = value|split(',') %} {# <- selectric отдает данные, разделенные \",\" #}
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t{% for k, item in data %}
\t\t\t\t\t\t{% if multiple %}
\t\t\t\t\t\t\t<option{% if item.value in value %} selected{% endif %}{% if item.desabled %} desabled{% endif %} value=\"{{item.value}}\">{{item.title}}</option>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<option{% if item.value == value %} selected{% endif %}{% if item.desabled %} desabled{% endif %} value=\"{{item.value}}\">{{item.title}}</option>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% else %}
\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t{% endif %}
\t\t\t</select>
\t\t</div>
\t</td>
</tr>


<script>
\$(document).ready(function() {
\tlet multiple = '{{multiple}}';
\t
\t
\tif (multiple == 1) {
\t\tlet selector = \$('[name=\"{{inpName}}\"]');
\t\t
\t\t\$(selector).selectize({
\t\t    create: false,
\t\t    onChange: function(data) {}
\t\t});
\t}
\t
\t
});
\t
</script>", "views/admin/form/select.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\form\\select.tpl");
    }
}
