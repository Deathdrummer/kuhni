<?php

/* views/admin/form/checkbox.tpl */
class __TwigTemplate_dbd2f6e36afbb927f20d27dd5bd2a4894630b259230c67244ff8d8711cbeb600 extends Twig_Template
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
        list($context["inpName"], $context["id"], $context["value"], $context["rand"]) =         ["", "", "", rand(0, 999)];
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["name"] ?? null), "|"));
        foreach ($context['_seq'] as $context["k"] => $context["i"]) {
            // line 3
            echo "\t";
            if (($context["k"] == 0)) {
                // line 4
                echo "\t\t";
                $context["inpName"] = $context["i"];
                // line 5
                echo "\t\t";
                $context["value"] = twig_get_attribute($this->env, $this->source, $context, $context["i"]);
                // line 6
                echo "\t\t";
                $context["id"] = $context["i"];
                // line 7
                echo "\t";
            } else {
                // line 8
                echo "\t\t";
                if ($context["i"]) {
                    // line 9
                    echo "\t\t\t";
                    $context["inpName"] = (((($context["inpName"] ?? null) . "[") . $context["i"]) . "]");
                    // line 10
                    echo "\t\t\t";
                    $context["value"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["value"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["i"]] ?? null) : null);
                    // line 11
                    echo "\t\t\t";
                    $context["id"] = (($context["id"] ?? null) . $context["i"]);
                    // line 12
                    echo "\t\t";
                }
                // line 13
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<tr>
\t";
        // line 16
        if (($context["label"] ?? null)) {
            echo "<td class=\"";
            if (($context["labelcls"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["labelcls"] ?? null), "html", null, true);
            } else {
                echo "default";
            }
            echo "\"><div><span>";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</span></div></td>";
        }
        // line 17
        echo "\t<td";
        if ( !($context["label"] ?? null)) {
            echo " colspan=\"2\"";
        }
        echo ">
\t\t<div class=\"checkbox\">
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["itemk"] => $context["item"]) {
            // line 20
            echo "\t\t\t\t";
            if (($context["inpName"] ?? null)) {
                // line 21
                echo "\t\t\t\t\t";
                $context["itemVal"] = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["value"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["item"], "name", [])] ?? null) : null);
                // line 22
                echo "\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t";
                $context["itemVal"] = twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["item"], "name", []));
                // line 24
                echo "\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t<div class=\"checkbox__item checkbox__item_ver";
            echo twig_escape_filter($this->env, (((isset($context["v"]) || array_key_exists("v", $context))) ? (_twig_default_filter(($context["v"] ?? null), "1")) : ("1")), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, $context["item"], "inline", [])) {
                echo " checkbox__item_inline";
            }
            if (twig_get_attribute($this->env, $this->source, $context["item"], "small", [])) {
                echo " checkbox__item_small";
            }
            echo "\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<input id=\"check";
            // line 27
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . $context["itemk"]), "html", null, true);
            echo "\"
\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\tname=\"";
            // line 29
            if (($context["inpName"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
                echo "]";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
            }
            echo "\"
\t\t\t\t\t\t";
            // line 30
            if (($context["itemVal"] ?? null)) {
                echo "checked";
            }
            echo ">
\t\t\t\t\t\t<label for=\"check";
            // line 31
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . $context["itemk"]), "html", null, true);
            echo "\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [])) {
                echo "<label for=\"check";
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, (($context["id"] ?? null) . $context["itemk"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
                echo "</label>";
            }
            // line 34
            echo "\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['itemk'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/form/checkbox.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 36,  158 => 34,  149 => 33,  143 => 31,  137 => 30,  126 => 29,  120 => 27,  108 => 25,  105 => 24,  102 => 23,  99 => 22,  96 => 21,  93 => 20,  89 => 19,  81 => 17,  69 => 16,  66 => 15,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set inpName, id, value, rand = '', '', '', rand(0,999) %}
{% for k, i in name|split('|') %}
\t{% if k == 0 %}
\t\t{% set inpName = i %}
\t\t{% set value = attribute(_context, i) %}
\t\t{% set id = i %}
\t{% else %}
\t\t{% if i %}
\t\t\t{% set inpName = inpName~'['~i~']' %}
\t\t\t{% set value = value[i] %}
\t\t\t{% set id = id~i %}
\t\t{% endif %}
\t{% endif %}
{% endfor %}
<tr>
\t{% if label %}<td class=\"{% if labelcls %}{{labelcls}}{% else %}default{% endif %}\"><div><span>{{label}}</span></div></td>{% endif %}
\t<td{% if not label %} colspan=\"2\"{% endif %}>
\t\t<div class=\"checkbox\">
\t\t\t{% for itemk, item in data %}
\t\t\t\t{% if inpName %}
\t\t\t\t\t{% set itemVal = value[item.name] %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set itemVal = attribute(_context, item.name) %}
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"checkbox__item checkbox__item_ver{{v|default('1')}}{% if item.inline %} checkbox__item_inline{% endif %}{% if item.small %} checkbox__item_small{% endif %}\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<input id=\"check{{rand}}{{id~itemk}}\"
\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\tname=\"{% if inpName %}{{inpName}}[{{item.name}}]{% else %}{{item.name}}{% endif %}\"
\t\t\t\t\t\t{% if itemVal %}checked{% endif %}>
\t\t\t\t\t\t<label for=\"check{{rand}}{{id~itemk}}\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t{% if item.label %}<label for=\"check{{rand}}{{id~itemk}}\">{{item.label}}</label>{% endif %}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</td>
</tr>", "views/admin/form/checkbox.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\form\\checkbox.tpl");
    }
}
