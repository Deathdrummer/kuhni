<?php

/* views/admin/render/sections/field.tpl */
class __TwigTemplate_1e5d99f576ae6d624652c422efb9694170ceb2a32b09fbdb1b4a79c4e8420b4b extends Twig_Template
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
\t\t<input type=\"hidden\" name=\"fields[";
        // line 3
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][type]\" value=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
\t\t<p class=\"strong\">";
        // line 4
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["fieldsnames"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[($context["type"] ?? null)] ?? null) : null), "html", null, true);
        echo "</p>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"fields[";
        // line 8
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][variable]\" value=\"";
        echo twig_escape_filter($this->env, ($context["variable"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\" rules=\"";
        if (!twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "file"])) {
            echo "empty|not:list,categories,catalog,page,var,section,varname|";
        }
        echo "reg:^\\w+\$,giu\" placeholder=\"от 3 до 50 символов\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"fields[";
        // line 13
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][label]\" value=\"";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\"";
        if (!twig_in_filter(($context["type"] ?? null), [0 => "file"])) {
            echo " rules=\"empty\"";
        }
        echo ">
\t\t</div>
\t</td>
\t
\t";
        // line 17
        if ( !($context["type"] ?? null)) {
            // line 18
            echo "\t\t<td></td>
\t";
        } elseif ((        // line 19
($context["type"] ?? null) == "text")) {
            // line 20
            echo "\t\t<td>
\t\t\t<div class=\"field\">
\t\t\t\t<input type=\"text\" name=\"fields[";
            // line 22
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][mask]\" value=\"";
            echo twig_escape_filter($this->env, ($context["mask"] ?? null), "html", null, true);
            echo "\" autocomplete=\"off\" placeholder=\"Маска: ^ - цифра & - буква * - любой символ\" rules=\"string\">
\t\t\t</div>
\t\t</td>
\t";
        } elseif ((        // line 25
($context["type"] ?? null) == "number")) {
            // line 26
            echo "\t\t<td></td>
\t";
        } elseif ((        // line 27
($context["type"] ?? null) == "tel")) {
            // line 28
            echo "\t\t<td>
\t\t\t<div class=\"row gutters-5\">
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t<p class=\"mr-5px\">Мультикод:</p>
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"fields[";
            // line 34
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][multicode]\">
\t\t\t\t\t\t\t\t<option value=\"\">Нет</option>
\t\t\t\t\t\t\t\t<option value=\"rus\"";
            // line 36
            if ((($context["multicode"] ?? null) == "rus")) {
                echo " selected";
            }
            echo ">Россия</option>
\t\t\t\t\t\t\t\t<option value=\"azr\"";
            // line 37
            if ((($context["multicode"] ?? null) == "azr")) {
                echo " selected";
            }
            echo ">Азербайджан</option>
\t\t\t\t\t\t\t\t<option value=\"arm\"";
            // line 38
            if ((($context["multicode"] ?? null) == "arm")) {
                echo " selected";
            }
            echo ">Армения</option>
\t\t\t\t\t\t\t\t<option value=\"bel\"";
            // line 39
            if ((($context["multicode"] ?? null) == "bel")) {
                echo " selected";
            }
            echo ">Белоруссия</option>
\t\t\t\t\t\t\t\t<option value=\"kaz\"";
            // line 40
            if ((($context["multicode"] ?? null) == "kaz")) {
                echo " selected";
            }
            echo ">Казахстан</option>
\t\t\t\t\t\t\t\t<option value=\"kyr\"";
            // line 41
            if ((($context["multicode"] ?? null) == "kyr")) {
                echo " selected";
            }
            echo ">Киргизия</option>
\t\t\t\t\t\t\t\t<option value=\"mol\"";
            // line 42
            if ((($context["multicode"] ?? null) == "mol")) {
                echo " selected";
            }
            echo ">Молдавия</option>
\t\t\t\t\t\t\t\t<option value=\"taj\"";
            // line 43
            if ((($context["multicode"] ?? null) == "taj")) {
                echo " selected";
            }
            echo ">Таджикистан</option>
\t\t\t\t\t\t\t\t<option value=\"uzb\"";
            // line 44
            if ((($context["multicode"] ?? null) == "uzb")) {
                echo " selected";
            }
            echo ">Узбекистан</option>
\t\t\t\t\t\t\t\t<option value=\"ukr\"";
            // line 45
            if ((($context["multicode"] ?? null) == "ukr")) {
                echo " selected";
            }
            echo ">Украина</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input type=\"text\" name=\"fields[";
            // line 52
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][code]\" mask=\"+n?nn\" value=\"";
            echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
            echo "\" autocomplete=\"off\" rules=\"^\\+\\d+\$\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_small checkbox__item_inline\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input id=\"sectionFieldPhonemask";
            // line 59
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\" type=\"checkbox\" name=\"fields[";
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][phonemask]\"";
            if (($context["phonemask"] ?? null)) {
                echo " checked";
            }
            echo ">
\t\t\t\t\t\t\t\t<label for=\"sectionFieldPhonemask";
            // line 60
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label for=\"sectionFieldPhonemask";
            // line 62
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\">Маска</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</td>
\t";
        } elseif ((        // line 68
($context["type"] ?? null) == "email")) {
            // line 69
            echo "\t\t<td></td>
\t";
        } elseif ((        // line 70
($context["type"] ?? null) == "password")) {
            // line 71
            echo "\t\t<td></td>
\t";
        } elseif ((        // line 72
($context["type"] ?? null) == "textarea")) {
            // line 73
            echo "\t\t<td>
\t\t\t<div class=\"checkbox\">
\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_small checkbox__item_inline\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<input id=\"sectionFieldEditor";
            // line 77
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\" type=\"checkbox\" name=\"fields[";
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][editor]\"";
            if (($context["editor"] ?? null)) {
                echo " checked";
            }
            echo ">
\t\t\t\t\t\t<label for=\"sectionFieldEditor";
            // line 78
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<label for=\"sectionFieldEditor";
            // line 80
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\">Визуальный редактор</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"checkbox\">
\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_small checkbox__item_inline\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<input id=\"sectionFieldMarkdown";
            // line 87
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\" type=\"checkbox\" name=\"fields[";
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][meditor]\"";
            if (($context["meditor"] ?? null)) {
                echo " checked";
            }
            echo ">
\t\t\t\t\t\t<label for=\"sectionFieldMarkdown";
            // line 88
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<label for=\"sectionFieldMarkdown";
            // line 90
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\">Markdown редактор</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</td>
\t";
        } elseif ((        // line 94
($context["type"] ?? null) == "select")) {
            // line 95
            echo "\t\t<td>
\t\t\t<div class=\"textarea\">
\t\t\t\t<textarea name=\"fields[";
            // line 97
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][data]\" rows=\"3\" rules=\"string\" ddrtextarealist=\"text;Ключ;|text;Значение\" placeholder=\"[ключ;значение][перевод строки]\">";
            echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
            echo "</textarea>
\t\t\t</div>
\t\t</td>
\t";
        } elseif ((        // line 100
($context["type"] ?? null) == "checkbox")) {
            // line 101
            echo "\t\t<td>
\t\t\t<div class=\"textarea\">
\t\t\t\t<textarea name=\"fields[";
            // line 103
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][data]\" rows=\"3\" rules=\"string\" ddrtextarealist=\"text;Переменная|text;Лейбл|text;Значение|checkbox;Инлайн\" placeholder=\"[переменная;лейбл;значение;инлайн][перевод строки]\">";
            echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
            echo "</textarea>
\t\t\t</div>
\t\t</td>
\t";
        } elseif ((        // line 106
($context["type"] ?? null) == "radio")) {
            // line 107
            echo "\t\t<td>
\t\t\t<div class=\"textarea\">
\t\t\t\t<textarea name=\"fields[";
            // line 109
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][data]\" rows=\"3\" rules=\"string\" ddrtextarealist=\"text;Лейбл|text;Значение|checkbox;Инлайн\" placeholder=\"[лейбл;значение;инлайн][перевод строки]\">";
            echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
            echo "</textarea>
\t\t\t</div>
\t\t</td>
\t";
        } elseif ((        // line 112
($context["type"] ?? null) == "file")) {
            // line 113
            echo "\t\t<td>
\t\t\t<div class=\"textarea\">
\t\t\t\t<textarea name=\"fields[";
            // line 115
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][data]\" rows=\"3\" rules=\"string\" ddrtextarealist=\"text;Переменная|text;Лейбл|text;Форматы|checkbox;Alt;;w20px\" placeholder=\"[переменная;лейбл;форматы(jpg|jpeg)][перевод строки]\">";
            echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
            echo "</textarea>
\t\t\t</div>
\t\t</td>
\t";
        } elseif ((        // line 118
($context["type"] ?? null) == "list")) {
            // line 119
            echo "\t\t<td>
\t\t\t<input type=\"hidden\" name=\"fields[";
            // line 120
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "][listid]\" value=\"";
            if (($context["listid"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["listid"] ?? null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, rand(1, 9999999), "html", null, true);
            }
            echo "\">
\t\t</td>
\t";
        } elseif ((        // line 122
($context["type"] ?? null) == "catalog")) {
            // line 123
            echo "\t\t<td></td>
\t";
        } elseif ((        // line 124
($context["type"] ?? null) == "categories")) {
            // line 125
            echo "\t\t<td></td>
\t";
        } elseif ((        // line 126
($context["type"] ?? null) == "pages")) {
            // line 127
            echo "\t\t<td></td>
\t";
        } elseif ((        // line 128
($context["type"] ?? null) == "hashtags")) {
            // line 129
            echo "\t\t<td></td>
\t";
        } elseif ((        // line 130
($context["type"] ?? null) == "options")) {
            // line 131
            echo "\t\t<td></td>
\t";
        } elseif ((        // line 132
($context["type"] ?? null) == "icons")) {
            // line 133
            echo "\t\t<td></td>
\t";
        }
        // line 135
        echo "\t<td class=\"center\">
\t\t<input type=\"hidden\" name=\"fields[";
        // line 136
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][rules]\" value=\"";
        echo twig_escape_filter($this->env, json_encode(($context["rules"] ?? null)), "html", null, true);
        echo "\" fieldrulesdata>
\t\t<div class=\"buttons inline nowrap notop\">
\t\t\t<button";
        // line 138
        if (twig_in_filter(($context["type"] ?? null), [0 => "catalog", 1 => "list", 2 => "checkbox", 3 => "radio"])) {
            echo " disabled";
        } else {
            echo " fieldsetrules=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"";
        }
        echo "><i title=\"Правила\" class=\"fa fa-shield\"></i></button>
\t\t\t<button class=\"remove\" removesectionfield";
        // line 139
        if (($context["listid"] ?? null)) {
            echo " removelistid=\"";
            echo twig_escape_filter($this->env, ($context["listid"] ?? null), "html", null, true);
            echo "\"";
        }
        echo "><i class=\"fa fa-trash\"></i></button>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/sections/field.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 139,  386 => 138,  379 => 136,  376 => 135,  372 => 133,  370 => 132,  367 => 131,  365 => 130,  362 => 129,  360 => 128,  357 => 127,  355 => 126,  352 => 125,  350 => 124,  347 => 123,  345 => 122,  334 => 120,  331 => 119,  329 => 118,  321 => 115,  317 => 113,  315 => 112,  307 => 109,  303 => 107,  301 => 106,  293 => 103,  289 => 101,  287 => 100,  279 => 97,  275 => 95,  273 => 94,  266 => 90,  261 => 88,  251 => 87,  241 => 80,  236 => 78,  226 => 77,  220 => 73,  218 => 72,  215 => 71,  213 => 70,  210 => 69,  208 => 68,  199 => 62,  194 => 60,  184 => 59,  172 => 52,  160 => 45,  154 => 44,  148 => 43,  142 => 42,  136 => 41,  130 => 40,  124 => 39,  118 => 38,  112 => 37,  106 => 36,  101 => 34,  93 => 28,  91 => 27,  88 => 26,  86 => 25,  78 => 22,  74 => 20,  72 => 19,  69 => 18,  67 => 17,  54 => 13,  40 => 8,  33 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
\t<td>
\t\t<input type=\"hidden\" name=\"fields[{{index}}][type]\" value=\"{{type}}\">
\t\t<p class=\"strong\">{{fieldsnames[type]}}</p>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"fields[{{index}}][variable]\" value=\"{{variable}}\" autocomplete=\"off\" rules=\"{% if type not in ['checkbox', 'file'] %}empty|not:list,categories,catalog,page,var,section,varname|{% endif %}reg:^\\w+\$,giu\" placeholder=\"от 3 до 50 символов\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"fields[{{index}}][label]\" value=\"{{label}}\" autocomplete=\"off\"{% if type not in ['file'] %} rules=\"empty\"{% endif %}>
\t\t</div>
\t</td>
\t
\t{% if not type %}
\t\t<td></td>
\t{% elseif type == 'text' %}
\t\t<td>
\t\t\t<div class=\"field\">
\t\t\t\t<input type=\"text\" name=\"fields[{{index}}][mask]\" value=\"{{mask}}\" autocomplete=\"off\" placeholder=\"Маска: ^ - цифра & - буква * - любой символ\" rules=\"string\">
\t\t\t</div>
\t\t</td>
\t{% elseif type == 'number' %}
\t\t<td></td>
\t{% elseif type == 'tel' %}
\t\t<td>
\t\t\t<div class=\"row gutters-5\">
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t<p class=\"mr-5px\">Мультикод:</p>
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select name=\"fields[{{index}}][multicode]\">
\t\t\t\t\t\t\t\t<option value=\"\">Нет</option>
\t\t\t\t\t\t\t\t<option value=\"rus\"{% if multicode == 'rus' %} selected{% endif %}>Россия</option>
\t\t\t\t\t\t\t\t<option value=\"azr\"{% if multicode == 'azr' %} selected{% endif %}>Азербайджан</option>
\t\t\t\t\t\t\t\t<option value=\"arm\"{% if multicode == 'arm' %} selected{% endif %}>Армения</option>
\t\t\t\t\t\t\t\t<option value=\"bel\"{% if multicode == 'bel' %} selected{% endif %}>Белоруссия</option>
\t\t\t\t\t\t\t\t<option value=\"kaz\"{% if multicode == 'kaz' %} selected{% endif %}>Казахстан</option>
\t\t\t\t\t\t\t\t<option value=\"kyr\"{% if multicode == 'kyr' %} selected{% endif %}>Киргизия</option>
\t\t\t\t\t\t\t\t<option value=\"mol\"{% if multicode == 'mol' %} selected{% endif %}>Молдавия</option>
\t\t\t\t\t\t\t\t<option value=\"taj\"{% if multicode == 'taj' %} selected{% endif %}>Таджикистан</option>
\t\t\t\t\t\t\t\t<option value=\"uzb\"{% if multicode == 'uzb' %} selected{% endif %}>Узбекистан</option>
\t\t\t\t\t\t\t\t<option value=\"ukr\"{% if multicode == 'ukr' %} selected{% endif %}>Украина</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input type=\"text\" name=\"fields[{{index}}][code]\" mask=\"+n?nn\" value=\"{{code}}\" autocomplete=\"off\" rules=\"^\\+\\d+\$\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_small checkbox__item_inline\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input id=\"sectionFieldPhonemask{{index}}\" type=\"checkbox\" name=\"fields[{{index}}][phonemask]\"{% if phonemask %} checked{% endif %}>
\t\t\t\t\t\t\t\t<label for=\"sectionFieldPhonemask{{index}}\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label for=\"sectionFieldPhonemask{{index}}\">Маска</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</td>
\t{% elseif type == 'email' %}
\t\t<td></td>
\t{% elseif type == 'password' %}
\t\t<td></td>
\t{% elseif type == 'textarea' %}
\t\t<td>
\t\t\t<div class=\"checkbox\">
\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_small checkbox__item_inline\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<input id=\"sectionFieldEditor{{index}}\" type=\"checkbox\" name=\"fields[{{index}}][editor]\"{% if editor %} checked{% endif %}>
\t\t\t\t\t\t<label for=\"sectionFieldEditor{{index}}\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<label for=\"sectionFieldEditor{{index}}\">Визуальный редактор</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"checkbox\">
\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2 checkbox__item_small checkbox__item_inline\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<input id=\"sectionFieldMarkdown{{index}}\" type=\"checkbox\" name=\"fields[{{index}}][meditor]\"{% if meditor %} checked{% endif %}>
\t\t\t\t\t\t<label for=\"sectionFieldMarkdown{{index}}\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t<label for=\"sectionFieldMarkdown{{index}}\">Markdown редактор</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</td>
\t{% elseif type == 'select' %}
\t\t<td>
\t\t\t<div class=\"textarea\">
\t\t\t\t<textarea name=\"fields[{{index}}][data]\" rows=\"3\" rules=\"string\" ddrtextarealist=\"text;Ключ;|text;Значение\" placeholder=\"[ключ;значение][перевод строки]\">{{data}}</textarea>
\t\t\t</div>
\t\t</td>
\t{% elseif type == 'checkbox' %}
\t\t<td>
\t\t\t<div class=\"textarea\">
\t\t\t\t<textarea name=\"fields[{{index}}][data]\" rows=\"3\" rules=\"string\" ddrtextarealist=\"text;Переменная|text;Лейбл|text;Значение|checkbox;Инлайн\" placeholder=\"[переменная;лейбл;значение;инлайн][перевод строки]\">{{data}}</textarea>
\t\t\t</div>
\t\t</td>
\t{% elseif type == 'radio' %}
\t\t<td>
\t\t\t<div class=\"textarea\">
\t\t\t\t<textarea name=\"fields[{{index}}][data]\" rows=\"3\" rules=\"string\" ddrtextarealist=\"text;Лейбл|text;Значение|checkbox;Инлайн\" placeholder=\"[лейбл;значение;инлайн][перевод строки]\">{{data}}</textarea>
\t\t\t</div>
\t\t</td>
\t{% elseif type == 'file' %}
\t\t<td>
\t\t\t<div class=\"textarea\">
\t\t\t\t<textarea name=\"fields[{{index}}][data]\" rows=\"3\" rules=\"string\" ddrtextarealist=\"text;Переменная|text;Лейбл|text;Форматы|checkbox;Alt;;w20px\" placeholder=\"[переменная;лейбл;форматы(jpg|jpeg)][перевод строки]\">{{data}}</textarea>
\t\t\t</div>
\t\t</td>
\t{% elseif type == 'list' %}
\t\t<td>
\t\t\t<input type=\"hidden\" name=\"fields[{{index}}][listid]\" value=\"{% if listid %}{{listid}}{% else %}{{rand(1,9999999)}}{% endif %}\">
\t\t</td>
\t{% elseif type == 'catalog' %}
\t\t<td></td>
\t{% elseif type == 'categories' %}
\t\t<td></td>
\t{% elseif type == 'pages' %}
\t\t<td></td>
\t{% elseif type == 'hashtags' %}
\t\t<td></td>
\t{% elseif type == 'options' %}
\t\t<td></td>
\t{% elseif type == 'icons' %}
\t\t<td></td>
\t{% endif %}
\t<td class=\"center\">
\t\t<input type=\"hidden\" name=\"fields[{{index}}][rules]\" value=\"{{rules|json_encode()}}\" fieldrulesdata>
\t\t<div class=\"buttons inline nowrap notop\">
\t\t\t<button{% if type in ['catalog', 'list', 'checkbox', 'radio'] %} disabled{% else %} fieldsetrules=\"{{type}}\"{% endif %}><i title=\"Правила\" class=\"fa fa-shield\"></i></button>
\t\t\t<button class=\"remove\" removesectionfield{% if listid %} removelistid=\"{{listid}}\"{% endif %}><i class=\"fa fa-trash\"></i></button>
\t\t</div>
\t</td>
</tr>", "views/admin/render/sections/field.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\sections\\field.tpl");
    }
}
