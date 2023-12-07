<?php

/* views/admin/form/file.tpl */
class __TwigTemplate_40526cf8135e65244a3e22cdb76b1ec2b450ac5f0e3b016022d1690be442cced extends Twig_Template
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
        echo "
<tr>
\t<td class=\"";
        // line 17
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
        // line 19
        if (($context["data"] ?? null)) {
            // line 20
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["item"]) {
                // line 21
                echo "\t\t\t\t";
                $context["v"] = twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["item"], "name", []));
                // line 22
                echo "\t\t\t\t";
                if ( !($context["v"] ?? null)) {
                    $context["v"] = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["value"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["item"], "name", [])] ?? null) : null);
                }
                // line 23
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "file", [])) {
                    // line 24
                    echo "\t\t\t\t\t";
                    list($context["file"], $context["altvalue"]) =                     [twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "file", []), twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "alt", [])];
                    // line 25
                    echo "\t\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t\t";
                    list($context["file"], $context["altvalue"]) =                     [($context["v"] ?? null), null];
                    // line 27
                    echo "\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"file";
                // line 30
                if ( !($context["file"] ?? null)) {
                    echo " empty";
                }
                echo "\">
\t\t\t\t\t";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [])) {
                    echo "<span class=\"file__label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
                    echo "</span>";
                }
                // line 32
                echo "\t\t\t\t\t<label class=\"file__block\" for=\"file";
                echo twig_escape_filter($this->env, (($context["id"] ?? null) . $context["k"]), "html", null, true);
                echo "\" filemanager=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ext", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t";
                // line 34
                if (($context["file"] ?? null)) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t";
                    if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null), 2])])) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [($context["file"] ?? null)]))), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, (((isset($context["altvalue"]) || array_key_exists("altvalue", $context))) ? (_twig_default_filter(($context["altvalue"] ?? null), call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]))) : (call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null), 2]))), "html", null, true);
                        echo ".png\" alt=\"";
                        echo twig_escape_filter($this->env, (((isset($context["altvalue"]) || array_key_exists("altvalue", $context))) ? (_twig_default_filter(($context["altvalue"] ?? null), call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]))) : (call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 40
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t";
                    if (preg_match("/images|jpg|png|jpeg|ico|bmp/", twig_get_attribute($this->env, $this->source, $context["item"], "ext", []))) {
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
                        echo "\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
                        echo "\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"file__name\"><span filename>";
                // line 48
                if (($context["file"] ?? null)) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]), "html", null, true);
                }
                echo "</span></div>
\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t</label>
\t\t\t\t\t
\t\t\t\t\t";
                // line 52
                if (($context["inpName"] ?? null)) {
                    // line 53
                    echo "\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tfilesrc
\t\t\t\t\t\tname=\"";
                    // line 56
                    echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
                    echo "]";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "alt", [])) {
                        echo "[file]";
                    }
                    echo "\"
\t\t\t\t\t\tvalue=\"";
                    // line 57
                    echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
                    echo "\"
\t\t\t\t\t\tid=\"file";
                    // line 58
                    echo twig_escape_filter($this->env, (($context["id"] ?? null) . $context["k"]), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 60
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "alt", [])) {
                        // line 61
                        echo "\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\tname=\"";
                        // line 64
                        echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
                        echo "][alt]\"
\t\t\t\t\t\t\t\tvalue=\"";
                        // line 65
                        echo twig_escape_filter($this->env, ($context["altvalue"] ?? null), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\tplaceholder=\"Атрибут alt\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 69
                    echo "\t\t\t\t\t";
                } else {
                    // line 70
                    echo "\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tfilesrc
\t\t\t\t\t\tname=\"";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "alt", [])) {
                        echo "[file]";
                    }
                    echo "\"
\t\t\t\t\t\tvalue=\"";
                    // line 74
                    echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
                    echo "\"
\t\t\t\t\t\tid=\"file";
                    // line 75
                    echo twig_escape_filter($this->env, (($context["id"] ?? null) . $context["k"]), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "alt", [])) {
                        // line 78
                        echo "\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\tname=\"";
                        // line 81
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", []), "html", null, true);
                        echo "[alt]\"
\t\t\t\t\t\t\t\tvalue=\"";
                        // line 82
                        echo twig_escape_filter($this->env, ($context["altvalue"] ?? null), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\tplaceholder=\"Атрибут alt\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 86
                    echo "\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t";
        } else {
            // line 91
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "file", [])) {
                // line 92
                echo "\t\t\t\t";
                list($context["file"], $context["altvalue"]) =                 [twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "file", []), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "alt", [])];
                // line 93
                echo "\t\t\t";
            } else {
                // line 94
                echo "\t\t\t\t";
                list($context["file"], $context["altvalue"]) =                 [($context["value"] ?? null), null];
                // line 95
                echo "\t\t\t";
            }
            // line 96
            echo "\t\t\t
\t\t\t<div class=\"file";
            // line 97
            if ( !($context["file"] ?? null)) {
                echo " empty";
            }
            echo "\">
\t\t\t\t<label class=\"file__block\" for=\"file";
            // line 98
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" filemanager=\"";
            echo twig_escape_filter($this->env, ($context["ext"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t";
            // line 100
            if (($context["file"] ?? null)) {
                // line 101
                echo "\t\t\t\t\t\t\t";
                if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null), 2])])) {
                    // line 102
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [($context["file"] ?? null)]))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((isset($context["altvalue"]) || array_key_exists("altvalue", $context))) ? (_twig_default_filter(($context["altvalue"] ?? null), call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]))) : (call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                } else {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null), 2]))), "html", null, true);
                    echo ".png\" alt=\"";
                    echo twig_escape_filter($this->env, (((isset($context["altvalue"]) || array_key_exists("altvalue", $context))) ? (_twig_default_filter(($context["altvalue"] ?? null), call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]))) : (call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t\t";
            } else {
                // line 107
                echo "\t\t\t\t\t\t\t";
                if (preg_match("/images|jpg|png|jpeg|ico|bmp/", ($context["ext"] ?? null))) {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
                    echo "\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t";
                } else {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
                    echo "\" alt=\"Нет файла\">
\t\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"file__name\"><span filename>";
            // line 114
            if (($context["file"] ?? null)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["file"] ?? null)])]), "html", null, true);
            }
            echo "</span></div>
\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t</label>
\t\t\t\t<input
\t\t\t\ttype=\"hidden\"
\t\t\t\tfilesrc
\t\t\t\tname=\"";
            // line 120
            echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
            if (($context["alt"] ?? null)) {
                echo "[file]";
            }
            echo "\"
\t\t\t\tvalue=\"";
            // line 121
            echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
            echo "\"
\t\t\t\tid=\"file";
            // line 122
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" />
\t\t\t\t
\t\t\t\t";
            // line 124
            if (($context["alt"] ?? null)) {
                // line 125
                echo "\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\tname=\"";
                // line 128
                echo twig_escape_filter($this->env, ($context["inpName"] ?? null), "html", null, true);
                echo "[alt]\"
\t\t\t\t\t\tvalue=\"";
                // line 129
                echo twig_escape_filter($this->env, ($context["altvalue"] ?? null), "html", null, true);
                echo "\"
\t\t\t\t\t\tplaceholder=\"Атрибут alt\" />
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 133
            echo "\t\t\t</div>
\t\t";
        }
        // line 135
        echo "\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/form/file.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 135,  412 => 133,  405 => 129,  401 => 128,  396 => 125,  394 => 124,  389 => 122,  385 => 121,  378 => 120,  367 => 114,  364 => 113,  361 => 112,  355 => 110,  349 => 108,  346 => 107,  343 => 106,  335 => 104,  327 => 102,  324 => 101,  322 => 100,  315 => 98,  309 => 97,  306 => 96,  303 => 95,  300 => 94,  297 => 93,  294 => 92,  291 => 91,  288 => 90,  280 => 87,  277 => 86,  270 => 82,  266 => 81,  261 => 78,  259 => 77,  254 => 75,  250 => 74,  243 => 73,  238 => 70,  235 => 69,  228 => 65,  222 => 64,  217 => 61,  215 => 60,  210 => 58,  206 => 57,  196 => 56,  191 => 53,  189 => 52,  180 => 48,  177 => 47,  174 => 46,  168 => 44,  162 => 42,  159 => 41,  156 => 40,  148 => 38,  140 => 36,  137 => 35,  135 => 34,  127 => 32,  121 => 31,  115 => 30,  111 => 28,  108 => 27,  105 => 26,  102 => 25,  99 => 24,  96 => 23,  91 => 22,  88 => 21,  83 => 20,  81 => 19,  70 => 17,  66 => 15,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  25 => 2,  23 => 1,);
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
\t<td class=\"{% if labelcls %}{{labelcls}}{% else %}default{% endif %}\"><div><span>{{label}}</span></div></td>
\t<td>
\t\t{% if data %}
\t\t\t{% for k, item in data %}
\t\t\t\t{% set v = attribute(_context, item.name) %}
\t\t\t\t{% if not v %}{% set v = value[item.name] %}{% endif %}
\t\t\t\t{% if v.file %}
\t\t\t\t\t{% set file, altvalue = v.file, v.alt %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set file, altvalue = v, null %}
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"file{% if not file %} empty{% endif %}\">
\t\t\t\t\t{% if item.label %}<span class=\"file__label\">{{item.label}}</span>{% endif %}
\t\t\t\t\t<label class=\"file__block\" for=\"file{{id~k}}\" filemanager=\"{{item.ext}}\">
\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t{% if file %}
\t\t\t\t\t\t\t\t{% if file|filename(2)|is_img_file %}
\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~file|freshfile)}}\" alt=\"{{altvalue|default(file|filename|decodedirsfiles)}}\">
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~file|filename(2))}}.png\" alt=\"{{altvalue|default(file|filename|decodedirsfiles)}}\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{% if preg_match('/images|jpg|png|jpeg|ico|bmp/', item.ext) %}
\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none_img.png')}}\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"file__name\"><span filename>{% if file %}{{file|filename|decodedirsfiles}}{% endif %}</span></div>
\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t</label>
\t\t\t\t\t
\t\t\t\t\t{% if inpName %}
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tfilesrc
\t\t\t\t\t\tname=\"{{inpName}}[{{item.name}}]{% if item.alt %}[file]{% endif %}\"
\t\t\t\t\t\tvalue=\"{{file}}\"
\t\t\t\t\t\tid=\"file{{id~k}}\" />
\t\t\t\t\t\t
\t\t\t\t\t\t{% if item.alt %}
\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\tname=\"{{inpName}}[{{item.name}}][alt]\"
\t\t\t\t\t\t\t\tvalue=\"{{altvalue}}\"
\t\t\t\t\t\t\t\tplaceholder=\"Атрибут alt\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tfilesrc
\t\t\t\t\t\tname=\"{{item.name}}{% if item.alt %}[file]{% endif %}\"
\t\t\t\t\t\tvalue=\"{{file}}\"
\t\t\t\t\t\tid=\"file{{id~k}}\" />
\t\t\t\t\t\t
\t\t\t\t\t\t{% if item.alt %}
\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\tname=\"{{item.name}}[alt]\"
\t\t\t\t\t\t\t\tvalue=\"{{altvalue}}\"
\t\t\t\t\t\t\t\tplaceholder=\"Атрибут alt\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t
\t\t\t{% endfor %}
\t\t{% else %}
\t\t\t{% if value.file %}
\t\t\t\t{% set file, altvalue = value.file, value.alt %}
\t\t\t{% else %}
\t\t\t\t{% set file, altvalue = value, null %}
\t\t\t{% endif %}
\t\t\t
\t\t\t<div class=\"file{% if not file %} empty{% endif %}\">
\t\t\t\t<label class=\"file__block\" for=\"file{{id}}\" filemanager=\"{{ext}}\">
\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t{% if file %}
\t\t\t\t\t\t\t{% if file|filename(2)|is_img_file %}
\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~file|freshfile)}}\" alt=\"{{altvalue|default(file|filename|decodedirsfiles)}}\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~file|filename(2))}}.png\" alt=\"{{altvalue|default(file|filename|decodedirsfiles)}}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% if preg_match('/images|jpg|png|jpeg|ico|bmp/', ext) %}
\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none_img.png')}}\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"file__name\"><span filename>{% if file %}{{file|filename|decodedirsfiles}}{% endif %}</span></div>
\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t</label>
\t\t\t\t<input
\t\t\t\ttype=\"hidden\"
\t\t\t\tfilesrc
\t\t\t\tname=\"{{inpName}}{% if alt %}[file]{% endif %}\"
\t\t\t\tvalue=\"{{file}}\"
\t\t\t\tid=\"file{{id}}\" />
\t\t\t\t
\t\t\t\t{% if alt %}
\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\tname=\"{{inpName}}[alt]\"
\t\t\t\t\t\tvalue=\"{{altvalue}}\"
\t\t\t\t\t\tplaceholder=\"Атрибут alt\" />
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endif %}
\t</td>
</tr>", "views/admin/form/file.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\form\\file.tpl");
    }
}
