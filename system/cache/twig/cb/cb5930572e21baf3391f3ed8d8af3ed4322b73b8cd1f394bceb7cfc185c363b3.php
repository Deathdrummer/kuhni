<?php

/* views/admin/form/field.tpl */
class __TwigTemplate_60b77e7261222e359e849aa538a22b0b53e5a4f94551afcca50bd65e82829395 extends Twig_Template
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
        if (($context["name"] ?? null)) {
            // line 3
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["name"] ?? null), "|"));
            foreach ($context['_seq'] as $context["k"] => $context["item"]) {
                // line 4
                echo "\t\t";
                if (($context["k"] == 0)) {
                    // line 5
                    echo "\t\t\t";
                    $context["inpName"] = $context["item"];
                    // line 6
                    echo "\t\t\t";
                    $context["value"] = twig_get_attribute($this->env, $this->source, $context, $context["item"]);
                    // line 7
                    echo "\t\t";
                } else {
                    // line 8
                    echo "\t\t\t";
                    $context["inpName"] = (((($context["inpName"] ?? null) . "[") . $context["item"]) . "]");
                    // line 9
                    echo "\t\t\t";
                    $context["value"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["value"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["item"]] ?? null) : null);
                    // line 10
                    echo "\t\t";
                }
                // line 11
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 13
        echo "
<tr>
\t<td class=\"";
        // line 15
        if (($context["labelcls"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["labelcls"] ?? null), "html", null, true);
        } else {
            echo "default";
        }
        echo "\"><div><span>";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</span></div></td>
\t<td>
\t\t";
        // line 17
        if (($context["data"] ?? null)) {
            // line 18
            echo "\t\t\t<div class=\"row gutters-5\">
\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["fk"] => $context["field"]) {
                // line 20
                echo "\t\t\t\t\t<div class=\"col-12 col-lg-6 col-xl";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "cls", [])) {
                    echo "-auto";
                }
                echo " mb-30px mb-xl-0px\">
\t\t\t\t\t\t<div class=\"field";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["field"], "cls", [])) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cls", []), "html", null, true);
                }
                if (($context["disabled"] ?? null)) {
                    echo " disabled";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["field"], "label", [])) {
                    echo " <small class=\"label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", []), "html", null, true);
                    echo "</small>";
                }
                // line 23
                echo "\t\t\t\t\t\t\t";
                $context["v"] = twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["field"], "name", []));
                // line 24
                echo "\t\t\t\t\t\t\t";
                if ( !($context["v"] ?? null)) {
                    $context["v"] = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["value"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["field"], "name", [])] ?? null) : null);
                }
                // line 25
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "password")) {
                    echo "<i class=\"fa fa-eye\" showpassword noselect title=\"Показать пароль\"></i>";
                }
                // line 26
                echo "\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"";
                // line 27
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["field"], "type", []), "text")) : ("text")), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 28
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "number")) {
                    echo "showrows";
                }
                // line 29
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "phonemask", [])) {
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "phonemask", []) == 1)) {
                        echo " phonemask";
                    } else {
                        echo " phonemask=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "phonemask", []), "html", null, true);
                        echo "\"";
                    }
                }
                // line 30
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "mask", [])) {
                    echo "mask=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "mask", []), "html", null, true);
                    echo "\"";
                }
                // line 31
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "multicode", [])) {
                    echo "multicode=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["field"], "multicode", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["field"], "multicode", []), "rus")) : ("rus")), "html", null, true);
                    echo "\"";
                }
                // line 32
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "code", [])) {
                    echo "code=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "code", []), "html", null, true);
                    echo "\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["field"], "phonemask", [])) {
                        echo " phonemask";
                    }
                }
                // line 33
                echo "\t\t\t\t\t\t\t\tname=\"";
                if (($context["inpName"] ?? null)) {
                    echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo "]";
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                }
                echo "\"
\t\t\t\t\t\t\t\tvalue=\"";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["field"], "val", [], "any", true, true)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "val", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, (((isset($context["v"]) || array_key_exists("v", $context))) ? (_twig_default_filter(($context["v"] ?? null), twig_get_attribute($this->env, $this->source, $context["field"], "default", []))) : (twig_get_attribute($this->env, $this->source, $context["field"], "default", []))), "html", null, true);
                }
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["field"], "step", [])) {
                    echo "step=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "step", []), "html", null, true);
                    echo "\"";
                }
                // line 36
                echo "\t\t\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\t\t\t";
                // line 37
                if (($context["disabled"] ?? null)) {
                    echo "disabled";
                }
                // line 38
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) != "number")) {
                    echo "readonly";
                }
                // line 39
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "rules", [])) {
                    echo "rules=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                    echo "\"";
                }
                // line 40
                echo "\t\t\t\t\t\t\t\t";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["field"], "min", []))) {
                    echo "min=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "min", []), "html", null, true);
                    echo "\"";
                }
                // line 41
                echo "\t\t\t\t\t\t\t\t";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["field"], "max", []))) {
                    echo "max=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "max", []), "html", null, true);
                    echo "\"";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "placeholder", [])) {
                    echo " placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "placeholder", []), "html", null, true);
                    echo "\"";
                }
                echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fk'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t</div>
\t\t";
        } else {
            // line 48
            echo "\t\t\t<div class=\"field";
            if (($context["cls"] ?? null)) {
                echo " ";
                echo twig_escape_filter($this->env, ($context["cls"] ?? null), "html", null, true);
            }
            echo "\">
\t\t\t\t";
            // line 49
            if ((($context["type"] ?? null) == "password")) {
                echo "<i class=\"fa fa-eye\" showpassword noselect title=\"Показать пароль\"></i>";
            }
            // line 50
            echo "\t\t\t\t<input
\t\t\t\t\ttype=\"";
            // line 51
            echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text")), "html", null, true);
            echo "\"
\t\t\t\t\t";
            // line 52
            if ((($context["type"] ?? null) == "number")) {
                echo "showrows";
            }
            // line 53
            echo "\t\t\t\t\t";
            if (($context["phonemask"] ?? null)) {
                if ((($context["phonemask"] ?? null) == 1)) {
                    echo " phonemask";
                } else {
                    echo " phonemask=\"";
                    echo twig_escape_filter($this->env, ($context["phonemask"] ?? null), "html", null, true);
                    echo "\"";
                }
            }
            // line 54
            echo "\t\t\t\t\t";
            if (($context["multicode"] ?? null)) {
                echo "multicode=\"";
                echo twig_escape_filter($this->env, (((isset($context["multicode"]) || array_key_exists("multicode", $context))) ? (_twig_default_filter(($context["multicode"] ?? null), "rus")) : ("rus")), "html", null, true);
                echo "\"";
            }
            // line 55
            echo "\t\t\t\t\t";
            if (($context["code"] ?? null)) {
                echo "code=\"";
                echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 56
            echo "\t\t\t\t\t";
            if (($context["mask"] ?? null)) {
                echo "mask=\"";
                echo twig_escape_filter($this->env, ($context["mask"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 57
            echo "\t\t\t\t\tname=\"";
            echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
            echo "\"
\t\t\t\t\tvalue=\"";
            // line 58
            if ((isset($context["val"]) || array_key_exists("val", $context))) {
                echo twig_escape_filter($this->env, ($context["val"] ?? null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (((isset($context["value"]) || array_key_exists("value", $context))) ? (_twig_default_filter(($context["value"] ?? null), ($context["default"] ?? null))) : (($context["default"] ?? null))), "html", null, true);
            }
            echo "\"
\t\t\t\t\t";
            // line 59
            if (($context["step"] ?? null)) {
                echo "step=\"";
                echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 60
            echo "\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t";
            // line 61
            if ((($context["type"] ?? null) != "number")) {
                echo "readonly";
            }
            // line 62
            echo "\t\t\t\t\t";
            if (($context["rules"] ?? null)) {
                echo "rules=\"";
                echo twig_escape_filter($this->env, ($context["rules"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 63
            echo "\t\t\t\t\t";
            if ( !(null === ($context["min"] ?? null))) {
                echo "min=\"";
                echo twig_escape_filter($this->env, ($context["min"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 64
            echo "\t\t\t\t\t";
            if ( !(null === ($context["max"] ?? null))) {
                echo "max=\"";
                echo twig_escape_filter($this->env, ($context["max"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 65
            echo "\t\t\t\t\t";
            if (($context["placeholder"] ?? null)) {
                echo " placeholder=\"";
                echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t</div>
\t\t";
        }
        // line 68
        echo "\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/form/field.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 68,  346 => 65,  339 => 64,  332 => 63,  325 => 62,  321 => 61,  318 => 60,  312 => 59,  304 => 58,  299 => 57,  292 => 56,  285 => 55,  278 => 54,  267 => 53,  263 => 52,  259 => 51,  256 => 50,  252 => 49,  244 => 48,  240 => 46,  225 => 42,  218 => 41,  211 => 40,  204 => 39,  199 => 38,  195 => 37,  192 => 36,  186 => 35,  178 => 34,  166 => 33,  156 => 32,  149 => 31,  142 => 30,  131 => 29,  127 => 28,  123 => 27,  120 => 26,  115 => 25,  110 => 24,  107 => 23,  101 => 22,  91 => 21,  84 => 20,  80 => 19,  77 => 18,  75 => 17,  64 => 15,  60 => 13,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set inpName, value, rand = '', '', rand(0,999) %}
{% if name %}
\t{% for k, item in name|split('|') %}
\t\t{% if k == 0 %}
\t\t\t{% set inpName = item %}
\t\t\t{% set value = attribute(_context, item) %}
\t\t{% else %}
\t\t\t{% set inpName = inpName~'['~item~']' %}
\t\t\t{% set value = value[item] %}
\t\t{% endif %}
\t{% endfor %}
{% endif %}

<tr>
\t<td class=\"{% if labelcls %}{{labelcls}}{% else %}default{% endif %}\"><div><span>{{label}}</span></div></td>
\t<td>
\t\t{% if data %}
\t\t\t<div class=\"row gutters-5\">
\t\t\t\t{% for fk, field in data %}
\t\t\t\t\t<div class=\"col-12 col-lg-6 col-xl{% if field.cls %}-auto{% endif %} mb-30px mb-xl-0px\">
\t\t\t\t\t\t<div class=\"field{% if field.cls %} {{field.cls}}{% endif %}{% if disabled %} disabled{% endif %}\">
\t\t\t\t\t\t\t{% if field.label %} <small class=\"label\">{{field.label}}</small>{% endif %}
\t\t\t\t\t\t\t{% set v = attribute(_context, field.name) %}
\t\t\t\t\t\t\t{% if not v %}{% set v = value[field.name] %}{% endif %}
\t\t\t\t\t\t\t{% if field.type == 'password' %}<i class=\"fa fa-eye\" showpassword noselect title=\"Показать пароль\"></i>{% endif %}
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"{{field.type|default('text')}}\"
\t\t\t\t\t\t\t\t{% if field.type == 'number' %}showrows{% endif %}
\t\t\t\t\t\t\t\t{% if field.phonemask %}{% if field.phonemask == 1 %} phonemask{% else %} phonemask=\"{{field.phonemask}}\"{% endif %}{% endif %}
\t\t\t\t\t\t\t\t{% if field.mask %}mask=\"{{field.mask}}\"{% endif %}
\t\t\t\t\t\t\t\t{% if field.multicode %}multicode=\"{{field.multicode|default('rus')}}\"{% endif %}
\t\t\t\t\t\t\t\t{% if field.code %}code=\"{{field.code}}\"{% if not field.phonemask %} phonemask{% endif %}{% endif %}
\t\t\t\t\t\t\t\tname=\"{% if inpName %}{{inpName}}[{{field.name}}]{% else %}{{field.name}}{% endif %}\"
\t\t\t\t\t\t\t\tvalue=\"{% if field.val is defined %}{{field.val}}{% else %}{{v|default(field.default)}}{% endif %}\"
\t\t\t\t\t\t\t\t{% if field.step %}step=\"{{field.step}}\"{% endif %}
\t\t\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\t\t\t{% if disabled %}disabled{% endif %}
\t\t\t\t\t\t\t\t{% if field.type != 'number' %}readonly{% endif %}
\t\t\t\t\t\t\t\t{% if field.rules %}rules=\"{{field.rules}}\"{% endif %}
\t\t\t\t\t\t\t\t{% if field.min is not null %}min=\"{{field.min}}\"{% endif %}
\t\t\t\t\t\t\t\t{% if field.max is not null %}max=\"{{field.max}}\"{% endif %}
\t\t\t\t\t\t\t\t{% if field.placeholder %} placeholder=\"{{field.placeholder}}\"{% endif %}>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"field{% if cls %} {{cls}}{% endif %}\">
\t\t\t\t{% if type == 'password' %}<i class=\"fa fa-eye\" showpassword noselect title=\"Показать пароль\"></i>{% endif %}
\t\t\t\t<input
\t\t\t\t\ttype=\"{{type|default('text')}}\"
\t\t\t\t\t{% if type == 'number' %}showrows{% endif %}
\t\t\t\t\t{% if phonemask %}{% if phonemask == 1 %} phonemask{% else %} phonemask=\"{{phonemask}}\"{% endif %}{% endif %}
\t\t\t\t\t{% if multicode %}multicode=\"{{multicode|default('rus')}}\"{% endif %}
\t\t\t\t\t{% if code %}code=\"{{code}}\"{% endif %}
\t\t\t\t\t{% if mask %}mask=\"{{mask}}\"{% endif %}
\t\t\t\t\tname=\"{{inpName}}\"
\t\t\t\t\tvalue=\"{% if val is defined %}{{val}}{% else %}{{value|default(default)}}{% endif %}\"
\t\t\t\t\t{% if step %}step=\"{{step}}\"{% endif %}
\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t{% if type != 'number' %}readonly{% endif %}
\t\t\t\t\t{% if rules %}rules=\"{{rules}}\"{% endif %}
\t\t\t\t\t{% if min is not null %}min=\"{{min}}\"{% endif %}
\t\t\t\t\t{% if max is not null %}max=\"{{max}}\"{% endif %}
\t\t\t\t\t{% if placeholder %} placeholder=\"{{placeholder}}\"{% endif %}>
\t\t\t</div>
\t\t{% endif %}
\t</td>
</tr>", "views/admin/form/field.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\form\\field.tpl");
    }
}
