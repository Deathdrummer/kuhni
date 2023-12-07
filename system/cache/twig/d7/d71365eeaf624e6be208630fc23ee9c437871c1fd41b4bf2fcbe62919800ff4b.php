<?php

/* views/admin/render/lists/items/list.tpl */
class __TwigTemplate_f0c9d966cbd016028a6edb13353994a6ea5adb5529364606c0da93d55bd011d5 extends Twig_Template
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
        if (($context["data"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["dk"] => $context["item"]) {
                // line 3
                echo "\t\t<tr>
\t\t\t";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["fk"] => $context["field"]) {
                    // line 5
                    echo "\t\t\t\t<td";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "file")) {
                        echo " class=\"nowidth\"";
                    }
                    echo ">
\t\t\t\t\t";
                    // line 6
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "text")) {
                        // line 7
                        echo "\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\tname=\"";
                        // line 10
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t";
                        // line 11
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "rules", [])) {
                            echo "rules=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                            echo "\"";
                        }
                        // line 12
                        echo "\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "mask", [])) {
                            echo "mask=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "mask", []), "html", null, true);
                            echo "\"";
                        }
                        // line 13
                        echo "\t\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\t\tvalue=\"";
                        // line 14
                        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["item"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["fields"] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["field"], "name", [])] ?? null) : null), "html", null, true);
                        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 16
$context["field"], "type", []) == "number")) {
                        // line 17
                        echo "\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\ttype=\"number\"
\t\t\t\t\t\t\tname=\"";
                        // line 20
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t";
                        // line 21
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "rules", [])) {
                            echo "rules=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                            echo "\"";
                        }
                        // line 22
                        echo "\t\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\t\tvalue=\"";
                        // line 23
                        echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["item"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["fields"] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["field"], "name", [])] ?? null) : null), "html", null, true);
                        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 25
$context["field"], "type", []) == "select")) {
                        // line 26
                        echo "\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"";
                        // line 27
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "rules", [])) {
                            echo " rules=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                            echo "\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t";
                        // line 28
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "values", [])) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t\t";
                            // line 30
                            if ((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, $context["field"], "values", [])) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[0] ?? null) : null)) {
                                // line 31
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                                    // line 32
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<option";
                                    if (((($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["item"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["fields"] ?? null) : null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["field"], "name", [])] ?? null) : null) == $context["title"])) {
                                        echo " selected";
                                    }
                                    echo " value=\"";
                                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 34
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 35
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                                foreach ($context['_seq'] as $context["val"] => $context["title"]) {
                                    // line 36
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<option";
                                    if (((($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["item"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["fields"] ?? null) : null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[twig_get_attribute($this->env, $this->source, $context["field"], "name", [])] ?? null) : null) == $context["val"])) {
                                        echo " selected";
                                    }
                                    echo " value=\"";
                                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['val'], $context['title'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 38
                                echo "\t\t\t\t\t\t\t\t\t";
                            }
                            // line 39
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            // line 40
                            echo "\t\t\t\t\t\t\t\t\t<option disabled value=\"\">Нет данных</option>
\t\t\t\t\t\t\t\t";
                        }
                        // line 41
                        echo "\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["field"], "type", []) == "checkbox")) {
                        // line 45
                        echo "\t\t\t\t\t\t";
                        $context["rand"] = rand(1, 99999);
                        // line 46
                        echo "\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t";
                        // line 47
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "values", [])) {
                            // line 48
                            echo "\t\t\t\t\t\t\t\t";
                            $context["ck"] = 0;
                            // line 49
                            echo "\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 50
                                echo "\t\t\t\t\t\t\t\t\t";
                                if ((($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = twig_get_attribute($this->env, $this->source, $context["field"], "values", [])) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[0] ?? null) : null)) {
                                    // line 51
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                    $context["value"] = $context["label"];
                                    // line 52
                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                    $context["label"] = false;
                                    // line 53
                                    echo "\t\t\t\t\t\t\t\t\t";
                                }
                                // line 54
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_inline\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\tid=\"";
                                // line 57
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                                echo "group";
                                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 59
                                if ((($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = $context["item"]) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["fields"] ?? null) : null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[$context["value"]] ?? null) : null)) {
                                    echo "checked";
                                }
                                // line 60
                                echo "\t\t\t\t\t\t\t\t\t\t\tname=\"";
                                if (twig_get_attribute($this->env, $this->source, $context["field"], "name", [])) {
                                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["field"], "name", []) . "[") . $context["value"]) . "]"), "html", null, true);
                                } else {
                                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                }
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"";
                                // line 61
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                                echo "group";
                                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                                echo "\"></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                                // line 64
                                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                                // line 65
                                $context["ck"] = (($context["ck"] ?? null) + 1);
                                // line 66
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 67
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            // line 68
                            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_inline\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\tid=\"";
                            // line 71
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["fieldId"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t";
                            // line 73
                            if ((($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = $context["item"]) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["fields"] ?? null) : null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[twig_get_attribute($this->env, $this->source, $context["field"], "name", [])] ?? null) : null)) {
                                echo "checked";
                            }
                            // line 74
                            echo "\t\t\t\t\t\t\t\t\t\tname=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<label for=\"";
                            // line 75
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["fieldId"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                            echo "\"></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        }
                        // line 79
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 80
$context["field"], "type", []) == "textarea")) {
                        // line 81
                        echo "\t\t\t\t\t\t";
                        $context["rand"] = rand(1, 99999);
                        // line 82
                        echo "\t\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t\t<textarea
\t\t\t\t\t\t\tname=\"";
                        // line 84
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\trows=\"";
                        // line 85
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["field"], "rows", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["field"], "rows", []), 3)) : (3)), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t";
                        // line 86
                        if ((twig_get_attribute($this->env, $this->source, $context["field"], "rules", []) && (twig_get_attribute($this->env, $this->source, $context["field"], "rules", []) != "editor"))) {
                            echo "rules=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                            echo "\"";
                        }
                        // line 87
                        echo "\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "placeholder", [])) {
                            echo "placeholder=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "placeholder", []), "html", null, true);
                            echo "\"";
                        }
                        // line 88
                        echo "\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["field"], "rules", []) == "editor")) {
                            echo "editor=\"listeditor";
                            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = $context["item"]) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["fields"] ?? null) : null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018[twig_get_attribute($this->env, $this->source, $context["field"], "name", [])] ?? null) : null), "html", null, true);
                        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 90
$context["field"], "type", []) == "file")) {
                        // line 91
                        echo "\t\t\t\t\t\t";
                        $context["value"] = (($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = $context["item"]) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c["fields"] ?? null) : null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7[twig_get_attribute($this->env, $this->source, $context["field"], "name", [])] ?? null) : null);
                        // line 92
                        echo "\t\t\t\t\t\t<div class=\"file small single";
                        if ( !($context["value"] ?? null)) {
                            echo " empty";
                        }
                        echo "\">
\t\t\t\t\t\t\t<label class=\"file__block\" for=\"";
                        // line 93
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo twig_escape_filter($this->env, ($context["fieldId"] ?? null), "html", null, true);
                        echo twig_escape_filter($this->env, ($context["lk"] ?? null), "html", null, true);
                        echo "\" filemanager=\"";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["field"], "rules", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "images")) : ("images")), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t";
                        // line 95
                        if (($context["value"] ?? null)) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null), 2])])) {
                                // line 97
                                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('no_file')->getCallable(), [base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [($context["value"] ?? null)]))), "public/images/deleted_mini.jpg"]), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null)]), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 99
                                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null), 2]))), "html", null, true);
                                echo ".png\" alt=\"";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null)]), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 101
                            echo "\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 102
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
                            echo "\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 104
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>";
                        // line 105
                        if (($context["value"] ?? null)) {
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["value"] ?? null)]), "html", null, true);
                        }
                        echo "</span></div>
\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\t\tfilesrc
\t\t\t\t\t\t\tname=\"";
                        // line 111
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\tvalue=\"";
                        // line 112
                        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t";
                        // line 113
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "rules", [])) {
                            echo "rules=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "rules", []), "html", null, true);
                            echo "\"";
                        }
                        // line 114
                        echo "\t\t\t\t\t\t\tid=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo twig_escape_filter($this->env, ($context["fieldId"] ?? null), "html", null, true);
                        echo twig_escape_filter($this->env, ($context["lk"] ?? null), "html", null, true);
                        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 117
$context["field"], "type", []) == "category")) {
                        // line 118
                        echo "\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"";
                        // line 119
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo "--category\">
\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t";
                        // line 121
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                        foreach ($context['_seq'] as $context["catId"] => $context["catTitle"]) {
                            // line 122
                            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, $context["catId"], "html", null, true);
                            echo "\"";
                            if (($context["catId"] == (($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = $context["item"]) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79["fields"] ?? null) : null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40[(twig_get_attribute($this->env, $this->source, $context["field"], "name", []) . "--category")] ?? null) : null))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $context["catTitle"], "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['catId'], $context['catTitle'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 124
                        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 126
$context["field"], "type", []) == "product")) {
                        // line 127
                        echo "\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"";
                        // line 128
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo "--product\">
\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t";
                        // line 130
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                        foreach ($context['_seq'] as $context["catalog"] => $context["categories"]) {
                            // line 131
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["categories"]);
                            foreach ($context['_seq'] as $context["category"] => $context["products"]) {
                                // line 132
                                echo "\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                                echo twig_escape_filter($this->env, $context["catalog"], "html", null, true);
                                echo " - ";
                                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 133
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["products"]);
                                foreach ($context['_seq'] as $context["id"] => $context["product"]) {
                                    // line 134
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                                    echo "\"";
                                    if (($context["id"] == (($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = (($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = $context["item"]) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d["fields"] ?? null) : null)) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1[(twig_get_attribute($this->env, $this->source, $context["field"], "name", []) . "--product")] ?? null) : null))) {
                                        echo " selected";
                                    }
                                    echo ">";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", []), "html", null, true);
                                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['id'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 136
                                echo "\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['category'], $context['products'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 138
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['catalog'], $context['categories'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 139
                        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 141
$context["field"], "type", []) == "list")) {
                        // line 142
                        echo "\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"";
                        // line 143
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", []), "html", null, true);
                        echo "--list\">
\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t";
                        // line 145
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["field"], "values", []));
                        foreach ($context['_seq'] as $context["listItemId"] => $context["listItemValue"]) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, $context["listItemId"], "html", null, true);
                            echo "\"";
                            if (($context["listItemId"] == (($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = (($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = $context["item"]) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c["fields"] ?? null) : null)) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0[(twig_get_attribute($this->env, $this->source, $context["field"], "name", []) . "--list")] ?? null) : null))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $context["listItemValue"], "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['listItemId'], $context['listItemValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 148
                        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 151
                    echo "\t\t\t\t</td>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['fk'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "\t\t\t<td class=\"p-0\"></td>
\t\t\t<td class=\"nowrap center\">
\t\t\t\t<div class=\"buttons notop inline\">
\t\t\t\t\t<button update=\"";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", []), "html", null, true);
                echo "\" class=\"small alt2 pl-15px pr-15px\" title=\"Обновить\"><i class=\"fa fa-repeat\"></i></button>
\t\t\t\t\t<button remove=\"";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", []), "html", null, true);
                echo "\" class=\"small remove pl-15px pr-15px\" title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['dk'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 162
        echo "\t";
    }

    public function getTemplateName()
    {
        return "views/admin/render/lists/items/list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 162,  565 => 157,  561 => 156,  556 => 153,  549 => 151,  544 => 148,  529 => 146,  525 => 145,  520 => 143,  517 => 142,  515 => 141,  511 => 139,  505 => 138,  498 => 136,  483 => 134,  479 => 133,  472 => 132,  467 => 131,  463 => 130,  458 => 128,  455 => 127,  453 => 126,  449 => 124,  434 => 122,  430 => 121,  425 => 119,  422 => 118,  420 => 117,  411 => 114,  405 => 113,  401 => 112,  397 => 111,  386 => 105,  383 => 104,  377 => 102,  374 => 101,  366 => 99,  358 => 97,  355 => 96,  353 => 95,  344 => 93,  337 => 92,  334 => 91,  332 => 90,  320 => 88,  313 => 87,  307 => 86,  303 => 85,  299 => 84,  295 => 82,  292 => 81,  290 => 80,  287 => 79,  278 => 75,  273 => 74,  269 => 73,  262 => 71,  257 => 68,  254 => 67,  248 => 66,  246 => 65,  243 => 64,  236 => 61,  227 => 60,  223 => 59,  216 => 57,  211 => 54,  208 => 53,  205 => 52,  202 => 51,  199 => 50,  194 => 49,  191 => 48,  189 => 47,  186 => 46,  183 => 45,  181 => 44,  176 => 41,  172 => 40,  169 => 39,  166 => 38,  151 => 36,  146 => 35,  143 => 34,  128 => 32,  123 => 31,  121 => 30,  118 => 29,  116 => 28,  106 => 27,  103 => 26,  101 => 25,  96 => 23,  93 => 22,  87 => 21,  83 => 20,  78 => 17,  76 => 16,  71 => 14,  68 => 13,  61 => 12,  55 => 11,  51 => 10,  46 => 7,  44 => 6,  37 => 5,  33 => 4,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data %}
\t{% for dk, item in data %}
\t\t<tr>
\t\t\t{% for fk, field in fields %}
\t\t\t\t<td{% if field.type == 'file' %} class=\"nowidth\"{% endif %}>
\t\t\t\t\t{% if field.type == 'text' %}
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\tname=\"{{field.name}}\"
\t\t\t\t\t\t\t{% if field.rules %}rules=\"{{field.rules}}\"{% endif %}
\t\t\t\t\t\t\t{% if field.mask %}mask=\"{{field.mask}}\"{% endif %}
\t\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\t\tvalue=\"{{item['fields'][field.name]}}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif field.type == 'number' %}
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\ttype=\"number\"
\t\t\t\t\t\t\tname=\"{{field.name}}\"
\t\t\t\t\t\t\t{% if field.rules %}rules=\"{{field.rules}}\"{% endif %}
\t\t\t\t\t\t\tautocomplete=\"off\"
\t\t\t\t\t\t\tvalue=\"{{item['fields'][field.name]}}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif field.type == 'select' %}
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"{{field.name}}\"{% if field.rules %} rules=\"{{field.rules}}\"{% endif %}>
\t\t\t\t\t\t\t\t{% if field.values %}
\t\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t\t{% if field.values[0] %}
\t\t\t\t\t\t\t\t\t\t{% for title in field.values %}
\t\t\t\t\t\t\t\t\t\t\t<option{% if item['fields'][field.name] == title %} selected{% endif %} value=\"{{title}}\">{{title}}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{% for val, title in field.values %}
\t\t\t\t\t\t\t\t\t\t\t<option{% if item['fields'][field.name] == val %} selected{% endif %} value=\"{{val}}\">{{title}}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option disabled value=\"\">Нет данных</option>
\t\t\t\t\t\t\t\t{% endif %}\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif field.type == 'checkbox' %}
\t\t\t\t\t\t{% set rand = rand(1,99999) %}
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t{% if field.values %}
\t\t\t\t\t\t\t\t{% set ck = 0 %}
\t\t\t\t\t\t\t\t{% for value, label in field.values %}
\t\t\t\t\t\t\t\t\t{% if field.values[0] %}
\t\t\t\t\t\t\t\t\t\t{% set value = label %}
\t\t\t\t\t\t\t\t\t\t{% set label = false %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_inline\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\tid=\"{{field.name}}group{{rand}}\"
\t\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t{% if item['fields'][value] %}checked{% endif %}
\t\t\t\t\t\t\t\t\t\t\tname=\"{% if field.name %}{{field.name~'['~value~']'}}{% else %}{{value}}{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"{{field.name}}group{{rand}}\"></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{# {% if label %}<label for=\"{{field.name}}{{fieldId}}\">{{label}}</label>{% endif %} #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% set ck = ck + 1 %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_inline\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\tid=\"{{field.name}}{{fieldId}}{{rand}}\"
\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t{% if item['fields'][field.name] %}checked{% endif %}
\t\t\t\t\t\t\t\t\t\tname=\"{{field.name}}\">
\t\t\t\t\t\t\t\t\t\t<label for=\"{{field.name}}{{fieldId}}{{rand}}\"></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif field.type == 'textarea' %}
\t\t\t\t\t\t{% set rand = rand(1,99999) %}
\t\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t\t<textarea
\t\t\t\t\t\t\tname=\"{{field.name}}\"
\t\t\t\t\t\t\trows=\"{{field.rows|default(3)}}\"
\t\t\t\t\t\t\t{% if field.rules and field.rules != 'editor' %}rules=\"{{field.rules}}\"{% endif %}
\t\t\t\t\t\t\t{% if field.placeholder %}placeholder=\"{{field.placeholder}}\"{% endif %}
\t\t\t\t\t\t\t{% if field.rules == 'editor' %}editor=\"listeditor{{rand}}\"{% endif %}>{{item['fields'][field.name]}}</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif field.type == 'file' %}
\t\t\t\t\t\t{% set value = item['fields'][field.name] %}
\t\t\t\t\t\t<div class=\"file small single{% if not value %} empty{% endif %}\">
\t\t\t\t\t\t\t<label class=\"file__block\" for=\"{{field.name}}{{fieldId}}{{lk}}\" filemanager=\"{{field.rules|default('images')}}\">
\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t{% if value %}
\t\t\t\t\t\t\t\t\t\t{% if value|filename(2)|is_img_file %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~value|freshfile)|no_file('public/images/deleted_mini.jpg')}}\" alt=\"{{value|filename}}\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~value|filename(2))}}.png\" alt=\"{{value|filename}}\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>{% if value %}{{value|filename}}{% endif %}</span></div>
\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\t\tfilesrc
\t\t\t\t\t\t\tname=\"{{field.name}}\"
\t\t\t\t\t\t\tvalue=\"{{value}}\"
\t\t\t\t\t\t\t{% if field.rules %}rules=\"{{field.rules}}\"{% endif %}
\t\t\t\t\t\t\tid=\"{{field.name}}{{fieldId}}{{lk}}\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t{% elseif field.type == 'category' %}
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"{{field.name}}--category\">
\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t{% for catId, catTitle in field.values %}
\t\t\t\t\t\t\t\t\t<option value=\"{{catId}}\"{% if catId == item['fields'][field.name~'--category'] %} selected{% endif %}>{{catTitle}}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif field.type == 'product' %}
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"{{field.name}}--product\">
\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t{% for catalog, categories in field.values %}
\t\t\t\t\t\t\t\t\t{% for category, products in categories %}
\t\t\t\t\t\t\t\t\t\t<optgroup label=\"{{catalog}} - {{category}}\">
\t\t\t\t\t\t\t\t\t\t\t{% for id, product in products %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{id}}\"{% if id == item['fields'][field.name~'--product'] %} selected{% endif %}>{{product.title}}</option>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif field.type == 'list' %}
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"{{field.name}}--list\">
\t\t\t\t\t\t\t\t<option disabled selected value=\"\">---</option>
\t\t\t\t\t\t\t\t{% for listItemId, listItemValue in field.values %}
\t\t\t\t\t\t\t\t\t<option value=\"{{listItemId}}\"{% if listItemId == item['fields'][field.name~'--list'] %} selected{% endif %}>{{listItemValue}}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t{% endfor %}
\t\t\t<td class=\"p-0\"></td>
\t\t\t<td class=\"nowrap center\">
\t\t\t\t<div class=\"buttons notop inline\">
\t\t\t\t\t<button update=\"{{item.id}}\" class=\"small alt2 pl-15px pr-15px\" title=\"Обновить\"><i class=\"fa fa-repeat\"></i></button>
\t\t\t\t\t<button remove=\"{{item.id}}\" class=\"small remove pl-15px pr-15px\" title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t{% endfor %}
{% endif %}\t", "views/admin/render/lists/items/list.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\lists\\items\\list.tpl");
    }
}
