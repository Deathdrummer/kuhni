<?php

/* views/admin/sections/pages.tpl */
class __TwigTemplate_a38aaa78c219bbab8ae8e0e947a846dad3b1b59fe9d18bf511816cf0d8c8ec0a extends Twig_Template
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
        echo "<form class=\"section mb-20px\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\">
\t<div class=\"section_title\">
\t\t<h2>Наполнение контента</h2>
\t\t<div class=\"buttons notop\">
\t\t\t<button class=\"large\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "Save\" disabled title=\"Сохранить настройки\"><i class=\"fa fa-save\"></i> <span>Сохранить</span></button>
\t\t</div>
\t</div>
\t
\t
\t";
        // line 10
        if (($context["pages"] ?? null)) {
            // line 11
            echo "\t\t<h3 class=\"mb-10px\">Страницы</h3>
\t\t<ul class=\"tabstitles mb-20px\">
\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            foreach ($context['_seq'] as $context["pageId"] => $context["pageData"]) {
                // line 14
                echo "\t\t\t\t<li id=\"tabPage";
                echo twig_escape_filter($this->env, $context["pageId"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageData"], "page_title", []), "html", null, true);
                echo "</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pageId'], $context['pageData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t
\t\t</ul>
\t\t
\t\t<div class=\"tabscontent\">
\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["pageId"] => $context["pageData"]) {
                // line 20
                echo "\t\t\t\t<div tabid=\"tabPage";
                echo twig_escape_filter($this->env, $context["pageId"], "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["pageData"], "sections", [])) {
                    // line 22
                    echo "\t\t\t\t\t\t";
                    $context["i"] = 1;
                    // line 23
                    echo "\t\t\t\t\t\t<h4 class=\"mb-10px\">Секции</h4>
\t\t\t\t\t\t<ul class=\"tabstitles sub\">
\t\t\t\t\t\t\t";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pageData"], "sections", []));
                    foreach ($context['_seq'] as $context["sId"] => $context["sData"]) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t<li id=\"tabSection";
                        echo twig_escape_filter($this->env, $context["sId"], "html", null, true);
                        echo "\" class=\"left numeric\"><span>";
                        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                        echo "</span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sData"], "section_title", []), "html", null, true);
                        echo "</li>\t
\t\t\t\t\t\t\t\t";
                        // line 27
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 28
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['sId'], $context['sData'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tabscontent\">
\t\t\t\t\t\t\t";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pageData"], "sections", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["sId"] => $context["sData"]) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t<div tabid=\"tabSection";
                        echo twig_escape_filter($this->env, $context["sId"], "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 34
                        if (twig_get_attribute($this->env, $this->source, $context["sData"], "fields", [])) {
                            // line 35
                            echo "\t\t\t\t\t\t\t\t\t\t<table class=\"fieldset\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 36
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sData"], "fields", []));
                            $context['loop'] = [
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            ];
                            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                                $length = count($context['_seq']);
                                $context['loop']['revindex0'] = $length - 1;
                                $context['loop']['revindex'] = $length;
                                $context['loop']['length'] = $length;
                                $context['loop']['last'] = 1 === $length;
                            }
                            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                                // line 37
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "text")) {
                                    // line 38
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/pages.tpl", 38)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 39
$context["field"], "label", []), "type" => "text", "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 41
$context["sData"], "varname", []) . "|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "mask" => twig_get_attribute($this->env, $this->source,                                     // line 42
$context["field"], "mask", []), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 43
$context["field"], "rules", [])]));
                                    // line 45
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "tel")) {
                                    // line 46
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/pages.tpl", 46)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 47
$context["field"], "label", []), "type" => "tel", "multicode" => twig_get_attribute($this->env, $this->source,                                     // line 49
$context["field"], "multicode", []), "phonemask" => twig_get_attribute($this->env, $this->source,                                     // line 50
$context["field"], "phonemask", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 51
$context["sData"], "varname", []) . "|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "code" => twig_get_attribute($this->env, $this->source,                                     // line 52
$context["field"], "code", []), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 53
$context["field"], "rules", [])]));
                                    // line 55
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "password")) {
                                    // line 56
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/pages.tpl", 56)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 57
$context["field"], "label", []), "type" => "password", "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 59
$context["sData"], "varname", []) . "|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 60
$context["field"], "rules", [])]));
                                    // line 62
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "number")) {
                                    // line 63
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/pages.tpl", 63)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 64
$context["field"], "label", []), "type" => "number", "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 66
$context["sData"], "varname", []) . "|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "mask" => twig_get_attribute($this->env, $this->source,                                     // line 67
$context["field"], "mask", []), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 68
$context["field"], "rules", [])]));
                                    // line 70
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 71
$context["field"], "type", []) == "textarea")) {
                                    // line 72
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $this->loadTemplate((($context["form"] ?? null) . "textarea.tpl"), "views/admin/sections/pages.tpl", 72)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 73
$context["field"], "label", []), "editor" => twig_get_attribute($this->env, $this->source,                                     // line 74
$context["field"], "editor", []), "markdown" => twig_get_attribute($this->env, $this->source,                                     // line 75
$context["field"], "meditor", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 76
$context["sData"], "varname", []) . "|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 77
$context["field"], "rules", [])]));
                                    // line 79
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "select")) {
                                    // line 80
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $this->loadTemplate((($context["form"] ?? null) . "select.tpl"), "views/admin/sections/pages.tpl", 80)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 81
$context["field"], "label", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 82
$context["sData"], "varname", []) . "|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "data" => twig_get_attribute($this->env, $this->source,                                     // line 83
$context["field"], "data", []), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 84
$context["field"], "rules", [])]));
                                    // line 86
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "checkbox")) {
                                    // line 87
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $this->loadTemplate((($context["form"] ?? null) . "checkbox.tpl"), "views/admin/sections/pages.tpl", 87)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 88
$context["field"], "label", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 89
$context["sData"], "varname", []) . "|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "v" => 2, "data" => twig_get_attribute($this->env, $this->source,                                     // line 91
$context["field"], "data", [])]));
                                    // line 93
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "radio")) {
                                    // line 94
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $this->loadTemplate((($context["form"] ?? null) . "radio.tpl"), "views/admin/sections/pages.tpl", 94)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 95
$context["field"], "label", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 96
$context["sData"], "varname", []) . "|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "data" => twig_get_attribute($this->env, $this->source,                                     // line 97
$context["field"], "data", [])]));
                                    // line 99
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "file")) {
                                    // line 100
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $this->loadTemplate((($context["form"] ?? null) . "file.tpl"), "views/admin/sections/pages.tpl", 100)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 101
$context["field"], "label", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 102
$context["sData"], "varname", []) . "|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "alt" => twig_get_attribute($this->env, $this->source,                                     // line 103
$context["field"], "alt", []), "data" => twig_get_attribute($this->env, $this->source,                                     // line 104
$context["field"], "data", []), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 105
$context["field"], "rules", [])]));
                                    // line 107
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "list")) {
                                    // line 108
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 109
                                    $this->loadTemplate((($context["form"] ?? null) . "select.tpl"), "views/admin/sections/pages.tpl", 109)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 110
$context["field"], "label", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 111
$context["sData"], "varname", []) . "|list|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "data" => twig_get_attribute($this->env, $this->source,                                     // line 112
$context["field"], "data", []), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 113
$context["field"], "rules", [])]));
                                    // line 115
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 116
$context["field"], "type", []) == "catalog")) {
                                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 117
                                    $this->loadTemplate((($context["form"] ?? null) . "select.tpl"), "views/admin/sections/pages.tpl", 117)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 118
$context["field"], "label", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 119
$context["sData"], "varname", []) . "|catalog|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "data" => twig_get_attribute($this->env, $this->source,                                     // line 120
$context["field"], "data", []), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 121
$context["field"], "rules", [])]));
                                    // line 123
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "categories")) {
                                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 124
                                    $this->loadTemplate((($context["form"] ?? null) . "select.tpl"), "views/admin/sections/pages.tpl", 124)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 125
$context["field"], "label", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 126
$context["sData"], "varname", []) . "|categories|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "multiple" => 1, "data" => twig_get_attribute($this->env, $this->source,                                     // line 128
$context["field"], "data", []), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 129
$context["field"], "rules", [])]));
                                    // line 131
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "pages")) {
                                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 132
                                    $this->loadTemplate((($context["form"] ?? null) . "select.tpl"), "views/admin/sections/pages.tpl", 132)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 133
$context["field"], "label", []), "name" => ((twig_get_attribute($this->env, $this->source,                                     // line 134
$context["sData"], "varname", []) . "|page|") . twig_get_attribute($this->env, $this->source, $context["field"], "variable", [])), "data" => twig_get_attribute($this->env, $this->source,                                     // line 135
$context["field"], "data", []), "rules" => twig_get_attribute($this->env, $this->source,                                     // line 136
$context["field"], "rules", [])]));
                                    // line 138
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "hashtags")) {
                                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 140
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 141
                                    $this->loadTemplate((($context["form"] ?? null) . "checkbox.tpl"), "views/admin/sections/pages.tpl", 141)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 142
$context["field"], "label", []), "name" => (twig_get_attribute($this->env, $this->source,                                     // line 143
$context["sData"], "varname", []) . "|hashtags|"), "v" => 2, "data" => [0 => ["name" => twig_get_attribute($this->env, $this->source,                                     // line 145
$context["field"], "variable", [])]]]));
                                    // line 147
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source,                                 // line 148
$context["field"], "type", []) == "options")) {
                                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 149
                                    $this->loadTemplate((($context["form"] ?? null) . "checkbox.tpl"), "views/admin/sections/pages.tpl", 149)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 150
$context["field"], "label", []), "name" => (twig_get_attribute($this->env, $this->source,                                     // line 151
$context["sData"], "varname", []) . "|options|"), "v" => 2, "data" => [0 => ["name" => twig_get_attribute($this->env, $this->source,                                     // line 153
$context["field"], "variable", [])]]]));
                                    // line 155
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ((twig_get_attribute($this->env, $this->source, $context["field"], "type", []) == "icons")) {
                                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 156
                                    $this->loadTemplate((($context["form"] ?? null) . "checkbox.tpl"), "views/admin/sections/pages.tpl", 156)->display(array_merge($context, ["label" => twig_get_attribute($this->env, $this->source,                                     // line 157
$context["field"], "label", []), "name" => (twig_get_attribute($this->env, $this->source,                                     // line 158
$context["sData"], "varname", []) . "|icons|"), "v" => 2, "data" => [0 => ["name" => twig_get_attribute($this->env, $this->source,                                     // line 160
$context["field"], "variable", [])]]]));
                                    // line 162
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 163
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                ++$context['loop']['index0'];
                                ++$context['loop']['index'];
                                $context['loop']['first'] = false;
                                if (isset($context['loop']['length'])) {
                                    --$context['loop']['revindex0'];
                                    --$context['loop']['revindex'];
                                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 164
                            echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 166
                            echo "\t\t\t\t\t\t\t\t\t\t<p class=\"empty mt-20px\">Нет ни одного поля</p>\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 168
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['sId'], $context['sData'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 170
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                } else {
                    // line 172
                    echo "\t\t\t\t\t\t<p class=\"empty mt-20px\">Нет ни одной секции</p>
\t\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t</div>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pageId'], $context['pageData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "\t\t</div>
\t";
        } else {
            // line 178
            echo "\t\t<p class=\"empty center mt-20px\">Пусто</p>
\t";
        }
        // line 180
        echo "</form>




<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\t//--------------------------------------------- Файлменеджер
\tclientFileManager({
\t\tonChooseFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\t\$(item).closest('tr').find('[update]:disabled, [save]:disabled').removeAttrib('disabled');
\t\t\tenableScroll();
\t\t},
\t\tonRemoveFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\t\$(item).closest('tr').find('[update]:disabled, [save]:disabled').removeAttrib('disabled');
\t\t}
\t});
\t
\t
\t\$('#pagesSave').scrollFix({
\t\tpos: 500// \$('#settingsSave').offset().top - 15
\t});
\t
\t// --------------------------------------------------------------------------------------- Сохранение основных настроек
\t\$('#pagesSave').on(tapEvent, function() {
\t\t\$('#pages').formSubmit({
\t\t\turl: 'admin/save_settings',
\t\t\tfields: {inner: 'setting_|rool_'},
\t\t\tignore: '[list]',
\t\t\tsuccess: function(response) {
\t\t\t\tif (response) {
\t\t\t\t\tnotify('Настройки сохранены!');
\t\t\t\t\t\$('table.fieldset').find('.changed').removeClass('changed');
\t\t\t\t} 
\t\t\t\telse notify('Ошибка сохранения данных', 'error');
\t\t\t},
\t\t\terror: function(e) {
\t\t\t\tnotify('Системная ошибка!', 'error');
\t\t\t\tshowError(e);
\t\t\t},
\t\t\tformError: function(fields) {
\t\t\t\tif (fields) {
\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t
});




\$(document).on('rendersection', function() {

\tif (\$('#pages').find('[name]').length > 0) {
\t\t\$('#pagesSave').removeAttrib('disabled');
\t}
\t
\t
\t\$('body').find('[ddrcrudlist]').each(function() {
\t\tvar thisSelectorId = \$(this).attr('id'),
\t\t\tdata = \$(this).attr('ddrcrudlistdata'),
\t\t\tlistId = \$(this).attr('ddrcrudlistid'),
\t\t\tcountCols = \$(this).attr('ddrcrudlist') + 1;
\t\t\t
\t\t
\t\tdata = data && {data: JSON.parse(data), listid: listId};
\t\t
\t\t\$(this).ddrCRUD({
\t\t\taddSelector: '#'+thisSelectorId+listId+'Add',
\t\t\tfunctions: 'admin/list', // get,add,save,update,remove
\t\t\temptyList: '<tr><td colspan=\"'+countCols+'\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\t\tsortField: 'sort',
\t\t\tremoveConfirm: true,
\t\t\tdata: {
\t\t\t\tgetList: data, //Данные при получении списка записей
\t\t\t\tadd: data, // Данные при добавлении записи
\t\t\t\tsave: data, // Данные при сохранении записи
\t\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\t\tremove: {} // Данные при удалении записи
\t\t\t},
\t\t\tconfirms: {
\t\t\t\tadd: function(item) {
\t\t\t\t\tinitEditors();
\t\t\t\t},
\t\t\t\tsave: function(row) {
\t\t\t\t\t
\t\t\t\t},
\t\t\t\tupdate: function(row) {
\t\t\t\t\t
\t\t\t\t},
\t\t\t\tremove: function(row) {
\t\t\t\t\t
\t\t\t\t}
\t\t\t}
\t\t});
\t});
});
\t
//--></script>";
    }

    public function getTemplateName()
    {
        return "views/admin/sections/pages.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 180,  409 => 178,  405 => 176,  390 => 174,  386 => 172,  382 => 170,  367 => 168,  363 => 166,  359 => 164,  345 => 163,  342 => 162,  340 => 160,  339 => 158,  338 => 157,  337 => 156,  332 => 155,  330 => 153,  329 => 151,  328 => 150,  327 => 149,  323 => 148,  320 => 147,  318 => 145,  317 => 143,  316 => 142,  315 => 141,  312 => 140,  307 => 138,  305 => 136,  304 => 135,  303 => 134,  302 => 133,  301 => 132,  296 => 131,  294 => 129,  293 => 128,  292 => 126,  291 => 125,  290 => 124,  285 => 123,  283 => 121,  282 => 120,  281 => 119,  280 => 118,  279 => 117,  275 => 116,  272 => 115,  270 => 113,  269 => 112,  268 => 111,  267 => 110,  266 => 109,  263 => 108,  260 => 107,  258 => 105,  257 => 104,  256 => 103,  255 => 102,  254 => 101,  252 => 100,  249 => 99,  247 => 97,  246 => 96,  245 => 95,  243 => 94,  240 => 93,  238 => 91,  237 => 89,  236 => 88,  234 => 87,  231 => 86,  229 => 84,  228 => 83,  227 => 82,  226 => 81,  224 => 80,  221 => 79,  219 => 77,  218 => 76,  217 => 75,  216 => 74,  215 => 73,  213 => 72,  211 => 71,  208 => 70,  206 => 68,  205 => 67,  204 => 66,  203 => 64,  201 => 63,  198 => 62,  196 => 60,  195 => 59,  194 => 57,  192 => 56,  189 => 55,  187 => 53,  186 => 52,  185 => 51,  184 => 50,  183 => 49,  182 => 47,  180 => 46,  177 => 45,  175 => 43,  174 => 42,  173 => 41,  172 => 39,  170 => 38,  167 => 37,  150 => 36,  147 => 35,  145 => 34,  140 => 33,  123 => 32,  118 => 29,  112 => 28,  110 => 27,  101 => 26,  97 => 25,  93 => 23,  90 => 22,  88 => 21,  83 => 20,  66 => 19,  60 => 15,  49 => 14,  45 => 13,  41 => 11,  39 => 10,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"section mb-20px\" id=\"{{id}}\" autocomplete=\"off\">
\t<div class=\"section_title\">
\t\t<h2>Наполнение контента</h2>
\t\t<div class=\"buttons notop\">
\t\t\t<button class=\"large\" id=\"{{id}}Save\" disabled title=\"Сохранить настройки\"><i class=\"fa fa-save\"></i> <span>Сохранить</span></button>
\t\t</div>
\t</div>
\t
\t
\t{% if pages %}
\t\t<h3 class=\"mb-10px\">Страницы</h3>
\t\t<ul class=\"tabstitles mb-20px\">
\t\t\t{% for pageId, pageData in pages %}
\t\t\t\t<li id=\"tabPage{{pageId}}\">{{pageData.page_title}}</li>
\t\t\t{% endfor %}\t
\t\t</ul>
\t\t
\t\t<div class=\"tabscontent\">
\t\t\t{% for pageId, pageData in pages %}
\t\t\t\t<div tabid=\"tabPage{{pageId}}\">
\t\t\t\t\t{% if pageData.sections %}
\t\t\t\t\t\t{% set i = 1 %}
\t\t\t\t\t\t<h4 class=\"mb-10px\">Секции</h4>
\t\t\t\t\t\t<ul class=\"tabstitles sub\">
\t\t\t\t\t\t\t{% for sId, sData in pageData.sections %}
\t\t\t\t\t\t\t\t<li id=\"tabSection{{sId}}\" class=\"left numeric\"><span>{{i}}</span>{{sData.section_title}}</li>\t
\t\t\t\t\t\t\t\t{% set i = i + 1 %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tabscontent\">
\t\t\t\t\t\t\t{% for sId, sData in pageData.sections %}
\t\t\t\t\t\t\t\t<div tabid=\"tabSection{{sId}}\">
\t\t\t\t\t\t\t\t\t{% if sData.fields %}
\t\t\t\t\t\t\t\t\t\t<table class=\"fieldset\">
\t\t\t\t\t\t\t\t\t\t\t{% for field in sData.fields %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if field.type == 'text' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'field.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'type': 'text',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'mask': field.mask,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'tel' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'field.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'type': 'tel',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'multicode': field.multicode,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'phonemask': field.phonemask,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'code': field.code,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'password' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'field.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'type': 'password',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'number' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'field.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'type': 'number',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'mask': field.mask,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'textarea' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'textarea.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'editor': field.editor,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'markdown': field.meditor,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'select' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'select.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': field.data,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'checkbox' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'checkbox.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'v': 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': field.data
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'radio' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'radio.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': field.data
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'file' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'file.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'alt': field.alt,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': field.data,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'list' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'select.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|list|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': field.data,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'catalog' %}\t
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'select.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|catalog|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': field.data,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'categories' %}\t
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'select.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|categories|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'multiple': 1,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': field.data,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'pages' %}\t
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'select.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|page|'~field.variable,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': field.data,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'rules': field.rules
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'hashtags' %}\t
\t\t\t\t\t\t\t\t\t\t\t\t\t{#<input type=\"checkbox\" name=\"{{sData.varname~'[--hashtags]['~field.variable~']'}}\" checked>#}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'checkbox.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|hashtags|',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'v': 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': [{'name': field.variable}]
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'options' %}\t
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'checkbox.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|options|',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'v': 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': [{'name': field.variable}]
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif field.type == 'icons' %}\t
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include form~'checkbox.tpl' with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'label': field.label,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'name': sData.varname~'|icons|',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'v': 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'data': [{'name': field.variable}]
\t\t\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<p class=\"empty mt-20px\">Нет ни одного поля</p>\t
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p class=\"empty mt-20px\">Нет ни одной секции</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t{% else %}
\t\t<p class=\"empty center mt-20px\">Пусто</p>
\t{% endif %}
</form>




<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\t//--------------------------------------------- Файлменеджер
\tclientFileManager({
\t\tonChooseFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\t\$(item).closest('tr').find('[update]:disabled, [save]:disabled').removeAttrib('disabled');
\t\t\tenableScroll();
\t\t},
\t\tonRemoveFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\t\$(item).closest('tr').find('[update]:disabled, [save]:disabled').removeAttrib('disabled');
\t\t}
\t});
\t
\t
\t\$('#pagesSave').scrollFix({
\t\tpos: 500// \$('#settingsSave').offset().top - 15
\t});
\t
\t// --------------------------------------------------------------------------------------- Сохранение основных настроек
\t\$('#pagesSave').on(tapEvent, function() {
\t\t\$('#pages').formSubmit({
\t\t\turl: 'admin/save_settings',
\t\t\tfields: {inner: 'setting_|rool_'},
\t\t\tignore: '[list]',
\t\t\tsuccess: function(response) {
\t\t\t\tif (response) {
\t\t\t\t\tnotify('Настройки сохранены!');
\t\t\t\t\t\$('table.fieldset').find('.changed').removeClass('changed');
\t\t\t\t} 
\t\t\t\telse notify('Ошибка сохранения данных', 'error');
\t\t\t},
\t\t\terror: function(e) {
\t\t\t\tnotify('Системная ошибка!', 'error');
\t\t\t\tshowError(e);
\t\t\t},
\t\t\tformError: function(fields) {
\t\t\t\tif (fields) {
\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t
});




\$(document).on('rendersection', function() {

\tif (\$('#pages').find('[name]').length > 0) {
\t\t\$('#pagesSave').removeAttrib('disabled');
\t}
\t
\t
\t\$('body').find('[ddrcrudlist]').each(function() {
\t\tvar thisSelectorId = \$(this).attr('id'),
\t\t\tdata = \$(this).attr('ddrcrudlistdata'),
\t\t\tlistId = \$(this).attr('ddrcrudlistid'),
\t\t\tcountCols = \$(this).attr('ddrcrudlist') + 1;
\t\t\t
\t\t
\t\tdata = data && {data: JSON.parse(data), listid: listId};
\t\t
\t\t\$(this).ddrCRUD({
\t\t\taddSelector: '#'+thisSelectorId+listId+'Add',
\t\t\tfunctions: 'admin/list', // get,add,save,update,remove
\t\t\temptyList: '<tr><td colspan=\"'+countCols+'\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\t\tsortField: 'sort',
\t\t\tremoveConfirm: true,
\t\t\tdata: {
\t\t\t\tgetList: data, //Данные при получении списка записей
\t\t\t\tadd: data, // Данные при добавлении записи
\t\t\t\tsave: data, // Данные при сохранении записи
\t\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\t\tremove: {} // Данные при удалении записи
\t\t\t},
\t\t\tconfirms: {
\t\t\t\tadd: function(item) {
\t\t\t\t\tinitEditors();
\t\t\t\t},
\t\t\t\tsave: function(row) {
\t\t\t\t\t
\t\t\t\t},
\t\t\t\tupdate: function(row) {
\t\t\t\t\t
\t\t\t\t},
\t\t\t\tremove: function(row) {
\t\t\t\t\t
\t\t\t\t}
\t\t\t}
\t\t});
\t});
});
\t
//--></script>", "views/admin/sections/pages.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\sections\\pages.tpl");
    }
}
