<?php

/* views/admin/render/lists/items/item.tpl */
class __TwigTemplate_afbfaa5de085a7c123675f2f2a5ca9ef3b32bcb078d451ada3913294f6782121 extends Twig_Template
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
\t";
        // line 2
        if (($context["fields"] ?? null)) {
            // line 3
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["fieldId"] => $context["field"]) {
                // line 4
                echo "\t\t\t<td";
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "file")) {
                    echo " class=\"nowidth\"";
                }
                echo ">
\t\t\t\t";
                // line 5
                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "text")) {
                    // line 6
                    echo "\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t";
                    // line 9
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "rules", [])) {
                        echo "rules=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                        echo "\"";
                    }
                    // line 10
                    echo "\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\tname=\"";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo "\"
\t\t\t\t\t\tvalue=\"";
                    // line 12
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["field"], "name", [])), "html", null, true);
                    echo "\">
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 14
$context["field"], "type", []) == "number")) {
                    // line 15
                    echo "\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"number\"
\t\t\t\t\t\t";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "rules", [])) {
                        echo "rules=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                        echo "\"";
                    }
                    // line 19
                    echo "\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\tname=\"";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo "\"
\t\t\t\t\t\tvalue=\"";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["field"], "name", [])), "html", null, true);
                    echo "\">
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 23
$context["field"], "type", []) == "select")) {
                    // line 24
                    echo "\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select name=\"";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "rules", [])) {
                        echo " rules=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                        echo "\"";
                    }
                    echo ">
\t\t\t\t\t\t\t";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "values", [])) {
                        // line 27
                        echo "\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t";
                        // line 28
                        if ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["field"], "values", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null)) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                                // line 30
                                echo "\t\t\t\t\t\t\t\t\t\t<option";
                                if ((twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["field"], "name", [])) == $context["title"])) {
                                    echo " selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 32
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            // line 33
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                            foreach ($context['_seq'] as $context["val"] => $context["title"]) {
                                // line 34
                                echo "\t\t\t\t\t\t\t\t\t\t<option";
                                if ((twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["field"], "name", [])) == $context["val"])) {
                                    echo " selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['val'], $context['title'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 36
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 37
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t<option disabled value=\"\">Нет данных</option>
\t\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 42
$context["field"], "type", []) == "checkbox")) {
                    // line 43
                    echo "\t\t\t\t\t";
                    $context["rand"] = rand(1, 99999);
                    // line 44
                    echo "\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "values", [])) {
                        // line 46
                        echo "\t\t\t\t\t\t\t";
                        $context["ck"] = 0;
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                        $context["mainvar"] = twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["field"], "name", []));
                        // line 48
                        echo "\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 49
                            echo "\t\t\t\t\t\t\t\t";
                            if ((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, $context["field"], "values", [])) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null)) {
                                // line 50
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["value"] = $context["label"];
                                // line 51
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["label"] = false;
                                // line 52
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 53
                            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_inline\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\tid=\"";
                            // line 56
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                            echo "group";
                            echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["ck"] ?? null), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t";
                            // line 58
                            if (((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["mainvar"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["field"], "name", [])] ?? null) : null) || twig_get_attribute($this->env, $this->source, $context, $context["value"]))) {
                                echo "checked";
                            }
                            // line 59
                            echo "\t\t\t\t\t\t\t\t\t\tname=\"";
                            if (twig_get_attribute($this->env, $this->source, $context["field"], "name", [])) {
                                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["field"], "name", []) . "[") . $context["value"]) . "]"), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<label for=\"";
                            // line 60
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                            echo "group";
                            echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["ck"] ?? null), "html", null, true);
                            echo "\"></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            // line 63
                            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                            // line 64
                            $context["ck"] = (($context["ck"] ?? null) + 1);
                            // line 65
                            echo "\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 67
                        echo "\t\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_inline\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\tid=\"";
                        // line 70
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t";
                        // line 72
                        if (twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["field"], "name", []))) {
                            echo "checked";
                        }
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\tname=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t<label for=\"";
                        // line 74
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                        echo "\"></label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        // line 77
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 80
$context["field"], "type", []) == "textarea")) {
                    // line 81
                    echo "\t\t\t\t\t";
                    $context["rand"] = rand(1, 99999);
                    // line 82
                    echo "\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t<textarea
\t\t\t\t\t\tname=\"";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo "\"
\t\t\t\t\t\trows=\"";
                    // line 85
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["field"], "rows", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["field"], "rows", []), 3)) : (3)), "html", null, true);
                    echo "\"
\t\t\t\t\t\t";
                    // line 86
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "rules", []) && (twig_get_attribute($this->env, $this->source, $context["field"], "rules", []) != "editor"))) {
                        echo "rules=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                        echo "\"";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "placeholder", [])) {
                        echo "placeholder=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "placeholder", []), "html", null, true);
                        echo "\"";
                    }
                    // line 88
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "rules", []) == "editor")) {
                        echo "editor=\"listeditor";
                        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["field"], "name", [])), "html", null, true);
                    echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 90
$context["field"], "type", []) == "file")) {
                    // line 91
                    echo "\t\t\t\t\t";
                    $context["value"] = twig_get_attribute($this->env, $this->source, $context, twig_get_attribute($this->env, $this->source, $context["field"], "name", []));
                    // line 92
                    echo "\t\t\t\t\t<div class=\"file small single";
                    if ( !($context["value"] ?? null)) {
                        echo " empty";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"file__block\" for=\"";
                    // line 93
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                    echo "\" filemanager=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["field"], "rules", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "images")) : ("images")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t";
                    // line 95
                    if (($context["value"] ?? null)) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null), 2])])) {
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('no_file')->getCallable(), [base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [($context["value"] ?? null)]))), "public/images/deleted_mini.jpg"]), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null)]), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 99
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null), 2]))), "html", null, true);
                            echo ".png\" alt=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null)]), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 101
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
                        echo "\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 104
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>";
                    // line 105
                    if (($context["value"] ?? null)) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null)]), "html", null, true);
                    }
                    echo "</span></div>
\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tfilesrc
\t\t\t\t\t\tname=\"";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo "\"
\t\t\t\t\t\tvalue=\"";
                    // line 112
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "\"
\t\t\t\t\t\tid=\"";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo twig_escape_filter($this->env, $context["fieldId"], "html", null, true);
                    echo "\" />
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 115
$context["field"], "type", []) == "category")) {
                    // line 116
                    echo "\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select name=\"";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo "--category\">
\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                    foreach ($context['_seq'] as $context["catId"] => $context["catTitle"]) {
                        // line 120
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $context["catId"], "html", null, true);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context, (twig_get_attribute($this->env, $this->source, $context["field"], "name", []) . "--category")) == $context["catId"])) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["catTitle"], "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['catId'], $context['catTitle'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 124
$context["field"], "type", []) == "product")) {
                    // line 125
                    echo "\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select name=\"";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo "--product\">
\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t";
                    // line 128
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                    foreach ($context['_seq'] as $context["catalog"] => $context["categories"]) {
                        // line 129
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["categories"]);
                        foreach ($context['_seq'] as $context["category"] => $context["products"]) {
                            // line 130
                            echo "\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                            echo twig_escape_filter($this->env, $context["catalog"], "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 131
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["products"]);
                            foreach ($context['_seq'] as $context["id"] => $context["product"]) {
                                // line 132
                                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                                echo "\"";
                                if ((twig_get_attribute($this->env, $this->source, $context, (twig_get_attribute($this->env, $this->source, $context["field"], "name", []) . "--product")) == $context["id"])) {
                                    echo " selected";
                                }
                                echo ">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", []), "html", null, true);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['id'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 134
                            echo "\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['category'], $context['products'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 136
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['catalog'], $context['categories'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 139
$context["field"], "type", []) == "list")) {
                    // line 140
                    echo "\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select name=\"";
                    // line 141
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                    echo "--list\">
\t\t\t\t\t\t\t";
                    // line 142
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                    foreach ($context['_seq'] as $context["listItemId"] => $context["listItemValue"]) {
                        // line 143
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $context["listItemId"], "html", null, true);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context, (twig_get_attribute($this->env, $this->source, $context["field"], "name", []) . "--list")) == $context["listItemId"])) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["listItemValue"], "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['listItemId'], $context['listItemValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 148
                echo "\t\t\t</td>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldId'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "\t";
        }
        // line 151
        echo "\t<td class=\"p-0\"></td>
\t<td class=\"nowrap center\">
\t\t<div class=\"buttons notop inline\">
\t\t\t<button class=\"small alt2 pl-15px pr-15px\" ";
        // line 154
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
        // line 155
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"small remove pl-15px pr-15px\" title=\"Удалить\"><i class=\"fa fa-";
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
        return "views/admin/render/lists/items/item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 155,  551 => 154,  546 => 151,  543 => 150,  536 => 148,  531 => 145,  516 => 143,  512 => 142,  508 => 141,  505 => 140,  503 => 139,  499 => 137,  493 => 136,  486 => 134,  471 => 132,  467 => 131,  460 => 130,  455 => 129,  451 => 128,  446 => 126,  443 => 125,  441 => 124,  437 => 122,  422 => 120,  418 => 119,  413 => 117,  410 => 116,  408 => 115,  402 => 113,  398 => 112,  394 => 111,  383 => 105,  380 => 104,  374 => 102,  371 => 101,  363 => 99,  355 => 97,  352 => 96,  350 => 95,  342 => 93,  335 => 92,  332 => 91,  330 => 90,  318 => 88,  311 => 87,  305 => 86,  301 => 85,  297 => 84,  293 => 82,  290 => 81,  288 => 80,  285 => 79,  281 => 77,  274 => 74,  269 => 73,  265 => 72,  258 => 70,  253 => 67,  250 => 66,  244 => 65,  242 => 64,  239 => 63,  230 => 60,  221 => 59,  217 => 58,  208 => 56,  203 => 53,  200 => 52,  197 => 51,  194 => 50,  191 => 49,  186 => 48,  183 => 47,  180 => 46,  178 => 45,  175 => 44,  172 => 43,  170 => 42,  165 => 39,  161 => 38,  158 => 37,  155 => 36,  140 => 34,  135 => 33,  132 => 32,  117 => 30,  112 => 29,  110 => 28,  107 => 27,  105 => 26,  95 => 25,  92 => 24,  90 => 23,  85 => 21,  81 => 20,  78 => 19,  72 => 18,  67 => 15,  65 => 14,  60 => 12,  56 => 11,  53 => 10,  47 => 9,  42 => 6,  40 => 5,  33 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
\t{% if fields %}
\t\t{% for fieldId, field in fields %}
\t\t\t<td{% if field.type == 'file' %} class=\"nowidth\"{% endif %}>
\t\t\t\t{% if field.type == 'text' %}
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t{% if field.rules %}rules=\"{{field.rules}}\"{% endif %}
\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\tname=\"{{field.name}}\"
\t\t\t\t\t\tvalue=\"{{attribute(_context, field.name)}}\">
\t\t\t\t\t</div>
\t\t\t\t{% elseif field.type == 'number' %}
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"number\"
\t\t\t\t\t\t{% if field.rules %}rules=\"{{field.rules}}\"{% endif %}
\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\tname=\"{{field.name}}\"
\t\t\t\t\t\tvalue=\"{{attribute(_context, field.name)}}\">
\t\t\t\t\t</div>
\t\t\t\t{% elseif field.type == 'select' %}
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select name=\"{{field.name}}\"{% if field.rules %} rules=\"{{field.rules}}\"{% endif %}>
\t\t\t\t\t\t\t{% if field.values %}
\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t{% if field.values[0] %}
\t\t\t\t\t\t\t\t\t{% for title in field.values %}
\t\t\t\t\t\t\t\t\t\t<option{% if attribute(_context, field.name) == title %} selected{% endif %} value=\"{{title}}\">{{title}}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% for val, title in field.values %}
\t\t\t\t\t\t\t\t\t\t<option{% if attribute(_context, field.name) == val %} selected{% endif %} value=\"{{val}}\">{{title}}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<option disabled value=\"\">Нет данных</option>
\t\t\t\t\t\t\t{% endif %}\t
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t{% elseif field.type == 'checkbox' %}
\t\t\t\t\t{% set rand = rand(1,99999) %}
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t{% if field.values %}
\t\t\t\t\t\t\t{% set ck = 0 %}
\t\t\t\t\t\t\t{% set mainvar = attribute(_context, field.name) %}
\t\t\t\t\t\t\t{% for value, label in field.values %}
\t\t\t\t\t\t\t\t{% if field.values[0] %}
\t\t\t\t\t\t\t\t\t{% set value = label %}
\t\t\t\t\t\t\t\t\t{% set label = false %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_inline\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\tid=\"{{field.name}}group{{fieldId}}{{rand}}{{ck}}\"
\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t{% if mainvar[field.name] or attribute(_context, value) %}checked{% endif %}
\t\t\t\t\t\t\t\t\t\tname=\"{% if field.name %}{{field.name~'['~value~']'}}{% else %}{{value}}{% endif %}\">
\t\t\t\t\t\t\t\t\t\t<label for=\"{{field.name}}group{{fieldId}}{{rand}}{{ck}}\"></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{# {% if label %}<label for=\"{{field.name}}group{{fieldId}}{{rand}}{{ck}}\">{{label}}</label>{% endif %} #}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% set ck = ck + 1 %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_inline\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\tid=\"{{field.name}}{{fieldId}}{{rand}}\"
\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t{% if attribute(_context, field.name) %}checked{% endif %}
\t\t\t\t\t\t\t\t\tname=\"{{field.name}}\">
\t\t\t\t\t\t\t\t\t<label for=\"{{field.name}}{{fieldId}}{{rand}}\"></label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{# {% if field.label %}<label for=\"{{field.name}}{{fieldId}}{{rand}}\">{{field.label}}</label>{% endif %} #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t{% elseif field.type == 'textarea' %}
\t\t\t\t\t{% set rand = rand(1,99999) %}
\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t<textarea
\t\t\t\t\t\tname=\"{{field.name}}\"
\t\t\t\t\t\trows=\"{{field.rows|default(3)}}\"
\t\t\t\t\t\t{% if field.rules and field.rules != 'editor' %}rules=\"{{field.rules}}\"{% endif %}
\t\t\t\t\t\t{% if field.placeholder %}placeholder=\"{{field.placeholder}}\"{% endif %}
\t\t\t\t\t\t{% if field.rules == 'editor' %}editor=\"listeditor{{rand}}\"{% endif %}>{{attribute(_context, field.name)}}</textarea>
\t\t\t\t\t</div>
\t\t\t\t{% elseif field.type == 'file' %}
\t\t\t\t\t{% set value = attribute(_context, field.name) %}
\t\t\t\t\t<div class=\"file small single{% if not value %} empty{% endif %}\">
\t\t\t\t\t\t<label class=\"file__block\" for=\"{{field.name}}{{fieldId}}\" filemanager=\"{{field.rules|default('images')}}\">
\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t{% if value %}
\t\t\t\t\t\t\t\t\t{% if value|filename(2)|is_img_file %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~value|freshfile)|no_file('public/images/deleted_mini.jpg')}}\" alt=\"{{value|filename}}\">
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~value|filename(2))}}.png\" alt=\"{{value|filename}}\">
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>{% if value %}{{value|filename}}{% endif %}</span></div>
\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\tfilesrc
\t\t\t\t\t\tname=\"{{field.name}}\"
\t\t\t\t\t\tvalue=\"{{value}}\"
\t\t\t\t\t\tid=\"{{field.name}}{{fieldId}}\" />
\t\t\t\t\t</div>
\t\t\t\t{% elseif field.type == 'category' %}
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select name=\"{{field.name}}--category\">
\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t{% for catId, catTitle in field.values %}
\t\t\t\t\t\t\t\t<option value=\"{{catId}}\"{% if attribute(_context, field.name~'--category') == catId %} selected{% endif %}>{{catTitle}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t{% elseif field.type == 'product' %}
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select name=\"{{field.name}}--product\">
\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t{% for catalog, categories in field.values %}
\t\t\t\t\t\t\t\t{% for category, products in categories %}
\t\t\t\t\t\t\t\t\t<optgroup label=\"{{catalog}} - {{category}}\">
\t\t\t\t\t\t\t\t\t\t{% for id, product in products %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{id}}\"{% if attribute(_context, field.name~'--product') == id %} selected{% endif %}>{{product.title}}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t{% elseif field.type == 'list' %}
\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t<select name=\"{{field.name}}--list\">
\t\t\t\t\t\t\t{% for listItemId, listItemValue in field.values %}
\t\t\t\t\t\t\t\t<option value=\"{{listItemId}}\"{% if attribute(_context, field.name~'--list') == listItemId %} selected{% endif %}>{{listItemValue}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</td>
\t\t{% endfor %}
\t{% endif %}
\t<td class=\"p-0\"></td>
\t<td class=\"nowrap center\">
\t\t<div class=\"buttons notop inline\">
\t\t\t<button class=\"small alt2 pl-15px pr-15px\" {% if update %}update=\"{{id}}\" title=\"Обновить\"{% else %}save=\"{{id}}\" title=\"Сохранить\"{% endif %}><i class=\"fa fa-{% if update %}repeat{% else %}save{% endif %}\"></i></button>
\t\t\t<button remove=\"{{id}}\" class=\"small remove pl-15px pr-15px\" title=\"Удалить\"><i class=\"fa fa-{% if update %}trash{% else %}ban{% endif %}\"></i></button>
\t\t</div>
\t</td>
</tr>", "views/admin/render/lists/items/item.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\lists\\items\\item.tpl");
    }
}
