<?php

/* views/admin/render/categories/item.tpl */
class __TwigTemplate_0241f01918a5c2547d5368e42df18917566c3c2fb58ec873bef213ea98f2604b extends Twig_Template
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
\t\t";
        // line 3
        if ( !($context["update"] ?? null)) {
            // line 4
            echo "\t\t\t<div class=\"file small empty mr-0px\">
\t\t\t\t";
            // line 5
            $context["newrand"] = rand(0, 999);
            // line 6
            echo "\t\t\t\t<label class=\"file__block\" for=\"new";
            echo twig_escape_filter($this->env, ($context["newrand"] ?? null), "html", null, true);
            echo "\" filemanager=\"images\">
\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t<img src=\"";
            // line 8
            echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
            echo "\" alt=\"Нет картинки\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"file__name\"><span filename></span></div>
\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t</label>
\t\t\t\t<input filesrc type=\"hidden\" name=\"image\" id=\"new";
            // line 13
            echo twig_escape_filter($this->env, ($context["newrand"] ?? null), "html", null, true);
            echo "\" value=\"\" />
\t\t\t</div>
\t\t";
        } else {
            // line 16
            echo "\t\t\t";
            $context["rand"] = rand(0, 999);
            // line 17
            echo "\t\t\t<div class=\"file small";
            if ( !($context["image"] ?? null)) {
                echo " empty";
            }
            echo " mr-0px\" title=\"";
            if (($context["image"] ?? null)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["image"] ?? null)]), "html", null, true);
            }
            echo "\">
\t\t\t\t<label class=\"file__block\" for=\"";
            // line 18
            echo twig_escape_filter($this->env, (($context["k"] ?? null) . ($context["rand"] ?? null)), "html", null, true);
            echo "\" filemanager=\"images\">
\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t";
            // line 20
            if (($context["image"] ?? null)) {
                // line 21
                echo "\t\t\t\t\t\t\t";
                if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["image"] ?? null), 2])])) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [($context["image"] ?? null)]))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["image"] ?? null)]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["image"] ?? null), 2]))), "html", null, true);
                    echo ".png\" alt=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["image"] ?? null)]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
                echo "\" alt=\"Нет картинки\">
\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"file__name\"><span filename>";
            // line 30
            if (($context["image"] ?? null)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [($context["image"] ?? null), 1]), "html", null, true);
            }
            echo "</span></div>
\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t</label>
\t\t\t\t<input filesrc type=\"hidden\" name=\"image\" id=\"";
            // line 33
            echo twig_escape_filter($this->env, (($context["k"] ?? null) . ($context["rand"] ?? null)), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" />
\t\t\t</div>
\t\t";
        }
        // line 36
        echo "\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"title\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"seo_url\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["seo_url"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"seo_title\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["seo_title"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea name=\"seo_text\" rows=\"5\">";
        // line 54
        echo twig_escape_filter($this->env, ($context["seo_text"] ?? null), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"link_title\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["link_title"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea name=\"meta_keywords\" rows=\"5\">";
        // line 64
        echo twig_escape_filter($this->env, ($context["meta_keywords"] ?? null), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea name=\"meta_description\" rows=\"5\">";
        // line 69
        echo twig_escape_filter($this->env, ($context["meta_description"] ?? null), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"select\">
\t\t\t<select name=\"parent_id\">
\t\t\t\t<option value=\"0\">---</option>
\t\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
            // line 77
            echo "\t\t\t\t\t";
            if ((($context["id"] ?? null) != twig_get_attribute($this->env, $this->source, $context["sc"], "id", []))) {
                // line 78
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sc"], "id", []), "html", null, true);
                echo "\"";
                if (((twig_get_attribute($this->env, $this->source, $context["sc"], "id", []) == ($context["parent_id"] ?? null)) || (twig_get_attribute($this->env, $this->source, $context["sc"], "title", []) == ($context["parent_id"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sc"], "title", []), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t</select>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"select\">
\t\t\t<select name=\"page_id\">
\t\t\t\t<option value=\"0\">---</option>
\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 89
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", []), "html", null, true);
            echo "\"";
            if (((twig_get_attribute($this->env, $this->source, $context["p"], "id", []) == ($context["page_id"] ?? null)) || (twig_get_attribute($this->env, $this->source, $context["p"], "title", []) == ($context["page_id"] ?? null)))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", []), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t</select>
\t\t</div>
\t</td>
\t
\t";
        // line 95
        if (($context["setvarstocats"] ?? null)) {
            // line 96
            echo "\t\t<td>
\t\t\t<div class=\"field\">
\t\t\t\t<input type=\"text\" name=\"items_variable\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, (((isset($context["items_variable"]) || array_key_exists("items_variable", $context))) ? (_twig_default_filter(($context["items_variable"] ?? null), "products")) : ("products")), "html", null, true);
            echo "\" autocomplete=\"off\">
\t\t\t</div>
\t\t</td>
\t\t<td>
\t\t\t<div class=\"field\">
\t\t\t\t<input type=\"text\" name=\"subcategories_variable\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, (((isset($context["subcategories_variable"]) || array_key_exists("subcategories_variable", $context))) ? (_twig_default_filter(($context["subcategories_variable"] ?? null), "subcategories")) : ("subcategories")), "html", null, true);
            echo "\" autocomplete=\"off\">
\t\t\t</div>
\t\t</td>
\t";
        } else {
            // line 107
            echo "\t\t<input type=\"hidden\" name=\"items_variable\" value=\"products\">
\t\t<input type=\"hidden\" name=\"subcategories_variable\" value=\"subcategories\">
\t";
        }
        // line 110
        echo "\t\t
\t<td class=\"center\">
\t\t<div class=\"checkbox d-inline-block\">
\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_small checkbox__item_inline mr-0\">
\t\t\t\t<div>
\t\t\t\t\t";
        // line 115
        $context["rand"] = rand(0, 9999);
        // line 116
        echo "\t\t\t\t\t<input id=\"check";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"
\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\tname=\"navigation\"
\t\t\t\t\t";
        // line 119
        if (($context["navigation"] ?? null)) {
            echo "checked";
        }
        echo ">
\t\t\t\t\t<label for=\"check";
        // line 120
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"mr-0\"></label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"number\" showrows min=\"0\" name=\"sort\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, (((isset($context["sort"]) || array_key_exists("sort", $context))) ? (_twig_default_filter(($context["sort"] ?? null), 0)) : (0)), "html", null, true);
        echo "\">
\t\t</div>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons notop inline nowrap\">
\t\t\t";
        // line 132
        if (($context["update"] ?? null)) {
            // line 133
            echo "\t\t\t\t<button class=\"px-15px\" update=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" title=\"Редактировать\"><i class=\"fa fa-repeat\"></i></button>
\t\t\t";
        } else {
            // line 135
            echo "\t\t\t\t<button class=\"px-15px\" save=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" title=\"Сохранить\"><i class=\"fa fa-save\"></i></button>
\t\t\t";
        }
        // line 137
        echo "\t\t\t<button class=\"remove px-15px\" remove=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" title=\"Удалить\"><i class=\"fa fa-";
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
        return "views/admin/render/categories/item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 137,  318 => 135,  312 => 133,  310 => 132,  302 => 127,  292 => 120,  286 => 119,  279 => 116,  277 => 115,  270 => 110,  265 => 107,  258 => 103,  250 => 98,  246 => 96,  244 => 95,  238 => 91,  223 => 89,  219 => 88,  210 => 81,  204 => 80,  192 => 78,  189 => 77,  185 => 76,  175 => 69,  167 => 64,  159 => 59,  151 => 54,  143 => 49,  135 => 44,  127 => 39,  122 => 36,  114 => 33,  106 => 30,  103 => 29,  97 => 27,  94 => 26,  86 => 24,  78 => 22,  75 => 21,  73 => 20,  68 => 18,  57 => 17,  54 => 16,  48 => 13,  40 => 8,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
\t<td>
\t\t{% if not update %}
\t\t\t<div class=\"file small empty mr-0px\">
\t\t\t\t{% set newrand = rand(0,999) %}
\t\t\t\t<label class=\"file__block\" for=\"new{{newrand}}\" filemanager=\"images\">
\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t<img src=\"{{base_url('public/images/none_img.png')}}\" alt=\"Нет картинки\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"file__name\"><span filename></span></div>
\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t</label>
\t\t\t\t<input filesrc type=\"hidden\" name=\"image\" id=\"new{{newrand}}\" value=\"\" />
\t\t\t</div>
\t\t{% else %}
\t\t\t{% set rand = rand(0,999) %}
\t\t\t<div class=\"file small{% if not image %} empty{% endif %} mr-0px\" title=\"{% if image %}{{image|filename}}{% endif %}\">
\t\t\t\t<label class=\"file__block\" for=\"{{k~rand}}\" filemanager=\"images\">
\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t{% if image %}
\t\t\t\t\t\t\t{% if image|filename(2)|is_img_file %}
\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~image|freshfile)}}\" alt=\"{{image|filename}}\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~image|filename(2))}}.png\" alt=\"{{image|filename}}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none_img.png')}}\" alt=\"Нет картинки\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"file__name\"><span filename>{% if image %}{{image|filename(1)}}{% endif %}</span></div>
\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t</label>
\t\t\t\t<input filesrc type=\"hidden\" name=\"image\" id=\"{{k~rand}}\" value=\"{{image}}\" />
\t\t\t</div>
\t\t{% endif %}
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"title\" value=\"{{title}}\" autocomplete=\"off\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"seo_url\" value=\"{{seo_url}}\" autocomplete=\"off\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"seo_title\" value=\"{{seo_title}}\" autocomplete=\"off\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea name=\"seo_text\" rows=\"5\">{{seo_text}}</textarea>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"link_title\" value=\"{{link_title}}\" autocomplete=\"off\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea name=\"meta_keywords\" rows=\"5\">{{meta_keywords}}</textarea>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea name=\"meta_description\" rows=\"5\">{{meta_description}}</textarea>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"select\">
\t\t\t<select name=\"parent_id\">
\t\t\t\t<option value=\"0\">---</option>
\t\t\t\t{% for sc in subcategories %}
\t\t\t\t\t{% if id != sc.id %}
\t\t\t\t\t\t<option value=\"{{sc.id}}\"{% if sc.id == parent_id or sc.title == parent_id %} selected{% endif %}>{{sc.title}}</option>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"select\">
\t\t\t<select name=\"page_id\">
\t\t\t\t<option value=\"0\">---</option>
\t\t\t\t{% for p in pages %}
\t\t\t\t\t<option value=\"{{p.id}}\"{% if p.id == page_id or p.title == page_id %} selected{% endif %}>{{p.title}}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t</td>
\t
\t{% if setvarstocats %}
\t\t<td>
\t\t\t<div class=\"field\">
\t\t\t\t<input type=\"text\" name=\"items_variable\" value=\"{{items_variable|default('products')}}\" autocomplete=\"off\">
\t\t\t</div>
\t\t</td>
\t\t<td>
\t\t\t<div class=\"field\">
\t\t\t\t<input type=\"text\" name=\"subcategories_variable\" value=\"{{subcategories_variable|default('subcategories')}}\" autocomplete=\"off\">
\t\t\t</div>
\t\t</td>
\t{% else %}
\t\t<input type=\"hidden\" name=\"items_variable\" value=\"products\">
\t\t<input type=\"hidden\" name=\"subcategories_variable\" value=\"subcategories\">
\t{% endif %}
\t\t
\t<td class=\"center\">
\t\t<div class=\"checkbox d-inline-block\">
\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_small checkbox__item_inline mr-0\">
\t\t\t\t<div>
\t\t\t\t\t{% set rand = rand(0,9999) %}
\t\t\t\t\t<input id=\"check{{rand}}\"
\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\tname=\"navigation\"
\t\t\t\t\t{% if navigation %}checked{% endif %}>
\t\t\t\t\t<label for=\"check{{rand}}\" class=\"mr-0\"></label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"number\" showrows min=\"0\" name=\"sort\" value=\"{{sort|default(0)}}\">
\t\t</div>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons notop inline nowrap\">
\t\t\t{% if update %}
\t\t\t\t<button class=\"px-15px\" update=\"{{id}}\" title=\"Редактировать\"><i class=\"fa fa-repeat\"></i></button>
\t\t\t{% else %}
\t\t\t\t<button class=\"px-15px\" save=\"{{id}}\" title=\"Сохранить\"><i class=\"fa fa-save\"></i></button>
\t\t\t{% endif %}
\t\t\t<button class=\"remove px-15px\" remove=\"{{id}}\" title=\"Удалить\"><i class=\"fa fa-{% if update %}trash{% else %}ban{% endif %}\"></i></button>
\t\t</div>
\t</td>
</tr>", "views/admin/render/categories/item.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\categories\\item.tpl");
    }
}
