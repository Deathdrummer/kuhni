<?php

/* views/admin/index.tpl */
class __TwigTemplate_3829b8d12369d4460561c39fd5127c5b9f0139b5b7e7ecc8a90415d3e0216c68 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"ltr\" lang=\"ru\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"ltr\" lang=\"ru\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"ltr\" lang=\"ru\">
<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"author\" content=\"Дмитрий Сайтотворец\" />
\t<meta name=\"copyright\" content=\"ShopDevelop &copy; Web разработка\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<meta name=\"format-detection\" content=\"telephone=no\"> <!-- отключение автоопределения номеров для Safari (iPhone / IPod / IPad) и Android браузера -->
\t<meta http-equiv=\"x-rim-auto-match\" content=\"none\"> <!-- отключение автоопределения номеров для BlackBerry -->
\t";
        // line 15
        if ( !($context["hosting"] ?? null)) {
            echo "<meta http-equiv=\"cache-control\" content=\"no-cache\">";
        }
        // line 16
        echo "\t";
        if ( !($context["hosting"] ?? null)) {
            echo "<meta http-equiv=\"expires\" content=\"1\">";
        }
        // line 17
        echo "\t
\t";
        // line 19
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css\">
\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js\"></script>
\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js\"></script>
\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js\"></script>
\t
\t
\t<link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url("public/images/favicon.png"), "html", null, true);
        echo "\" />
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url("public/css/assets.min.css"), "html", null, true);
        echo "\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, base_url("public/css/plugins.min.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url("public/js/plugins.min.js"), "html", null, true);
        echo "\"></script>
\t
\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, base_url("public/js/functions.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, base_url("public/js/common.js"), "html", null, true);
        echo "\"></script>
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url("public/css/components.min.css"), "html", null, true);
        echo "\">
\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, base_url("public/js/components.min.js"), "html", null, true);
        echo "\"></script>
\t
\t";
        // line 39
        if (is_file((("./public/css/" . ($context["controller"] ?? null)) . ".min.css"))) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, base_url((("public/css/" . ($context["controller"] ?? null)) . ".min.css")), "html", null, true);
            echo "\">";
        }
        // line 40
        echo "\t";
        if (is_file((("./public/js/" . ($context["controller"] ?? null)) . ".js"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, base_url((("public/js/" . ($context["controller"] ?? null)) . ".js")), "html", null, true);
            echo "\"></script>";
        }
        // line 41
        echo "\t
\t<title>Административная панель</title> 
</head>
<body>
\t<header class=\"header\">
\t\t<div class=\"header__container\">
\t\t\t<div class=\"header__item mr-2rem\">
\t\t\t\t<button id=\"openNav\" touch=\"opened\"><i class=\"navigation fa fa-bars\"></i></button>
\t\t\t\t<nav class=\"main_nav noselect\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-block=\"settings\">Общие настройки</li>
\t\t\t\t\t\t<li data-block=\"pages\">Наполнение контента</li>
\t\t\t\t\t\t<li data-block=\"catalogs\">Товары</li>
\t\t\t\t\t\t<li data-block=\"lists\">Списки</li>
\t\t\t\t\t\t<li data-block=\"structure\">Структура сайта</li>
\t\t\t\t\t\t<li data-block=\"modifications\">Модификации</li>
\t\t\t\t\t\t";
        // line 58
        echo "\t\t\t\t\t\t";
        // line 59
        echo "\t\t\t\t\t\t<li data-block=\"filemanager\">Менеджер файлов</li>
\t\t\t\t\t\t";
        // line 61
        echo "\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div class=\"header__item mr-auto\">
\t\t\t\t<p>Административная панель</p>
\t\t\t</div>
\t\t\t<div class=\"header__item mr-4rem\">
\t\t\t\t<small>Очистить кэш:</small>
\t\t\t\t<button title=\"Очистить\" onclick=\"\$.clearCache(this)\"><i class=\"fa fa-trash\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"header__item mr-4rem\">
\t\t\t\t<small>Модификация:</small>
\t\t\t\t<div class=\"select\">
\t\t\t\t\t<select name=\"\" id=\"adminSetModifications\">
\t\t\t\t\t\t";
        // line 75
        if (($context["modifications"] ?? null)) {
            // line 76
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["modName"] => $context["modTitle"]) {
                // line 77
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                echo "\"";
                if ((($context["mod_active"] ?? null) == $context["modName"])) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["modTitle"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['modName'], $context['modTitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"header__item\">
\t\t\t\t<button id=\"goToSite\" class=\"home\" title=\"Перейти на сайт\"><i class=\"fa fa-home\"></i></button>
\t\t\t\t<button id=\"adminLogout\" title=\"Выход\"><i class=\"fa fa-sign-out\"></i></button>
\t\t\t</div>
\t\t</div>
\t</header>
\t
\t<main class=\"main\">
\t\t<div class=\"main__container\">
\t\t\t<div id=\"sectionWait\">
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<i class=\"fa fa-spinner fa-pulse fa-fw\"></i>
\t\t\t\t\t<p></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<section id=\"section\"></section>
\t\t</div>
\t</main>
\t
\t
\t<footer class=\"footer\">
\t\t<div class=\"footer__container\">
\t\t\t<p>© <a href=\"https://shopdevelop.ru\" target=\"_blank\" title=\"Перейти на сайт shopdevelop.ru\">SaytotvoretsCMS</a> ";
        // line 105
        echo twig_escape_filter($this->env, date("Y"), "html", null, true);
        echo " г.</p>
\t\t</div>
\t</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "views/admin/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 105,  174 => 80,  171 => 79,  156 => 77,  151 => 76,  149 => 75,  133 => 61,  130 => 59,  128 => 58,  110 => 41,  103 => 40,  97 => 39,  92 => 37,  88 => 36,  83 => 34,  79 => 33,  74 => 31,  70 => 30,  65 => 28,  60 => 26,  51 => 19,  48 => 17,  43 => 16,  39 => 15,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"ltr\" lang=\"ru\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"ltr\" lang=\"ru\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"ltr\" lang=\"ru\">
<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"author\" content=\"Дмитрий Сайтотворец\" />
\t<meta name=\"copyright\" content=\"ShopDevelop &copy; Web разработка\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<meta name=\"format-detection\" content=\"telephone=no\"> <!-- отключение автоопределения номеров для Safari (iPhone / IPod / IPad) и Android браузера -->
\t<meta http-equiv=\"x-rim-auto-match\" content=\"none\"> <!-- отключение автоопределения номеров для BlackBerry -->
\t{% if not hosting %}<meta http-equiv=\"cache-control\" content=\"no-cache\">{% endif %}
\t{% if not hosting %}<meta http-equiv=\"expires\" content=\"1\">{% endif %}
\t
\t{# Оформление коды summernote #}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css\">
\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js\"></script>
\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js\"></script>
\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js\"></script>
\t
\t
\t<link rel=\"shortcut icon\" href=\"{{base_url('public/images/favicon.png')}}\" />
\t
\t<link rel=\"stylesheet\" href=\"{{base_url('public/css/assets.min.css')}}\">
\t
\t<link rel=\"stylesheet\" href=\"{{base_url('public/css/plugins.min.css')}}\">
\t<script src=\"{{base_url('public/js/plugins.min.js')}}\"></script>
\t
\t<script src=\"{{base_url('public/js/functions.js')}}\"></script>
\t<script src=\"{{base_url('public/js/common.js')}}\"></script>
\t
\t<link rel=\"stylesheet\" href=\"{{base_url('public/css/components.min.css')}}\">
\t<script src=\"{{base_url('public/js/components.min.js')}}\"></script>
\t
\t{% if is_file('./public/css/'~controller~'.min.css') %}<link rel=\"stylesheet\" href=\"{{base_url('public/css/'~controller~'.min.css')}}\">{% endif %}
\t{% if is_file('./public/js/'~controller~'.js') %}<script src=\"{{base_url('public/js/'~controller~'.js')}}\"></script>{% endif %}
\t
\t<title>Административная панель</title> 
</head>
<body>
\t<header class=\"header\">
\t\t<div class=\"header__container\">
\t\t\t<div class=\"header__item mr-2rem\">
\t\t\t\t<button id=\"openNav\" touch=\"opened\"><i class=\"navigation fa fa-bars\"></i></button>
\t\t\t\t<nav class=\"main_nav noselect\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li data-block=\"settings\">Общие настройки</li>
\t\t\t\t\t\t<li data-block=\"pages\">Наполнение контента</li>
\t\t\t\t\t\t<li data-block=\"catalogs\">Товары</li>
\t\t\t\t\t\t<li data-block=\"lists\">Списки</li>
\t\t\t\t\t\t<li data-block=\"structure\">Структура сайта</li>
\t\t\t\t\t\t<li data-block=\"modifications\">Модификации</li>
\t\t\t\t\t\t{# <li data-block=\"promo\">Промо</li> #}
\t\t\t\t\t\t{# <li data-block=\"reviews\">Отзывы</li> #}
\t\t\t\t\t\t<li data-block=\"filemanager\">Менеджер файлов</li>
\t\t\t\t\t\t{#<li data-block=\"\"></li>#}
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div class=\"header__item mr-auto\">
\t\t\t\t<p>Административная панель</p>
\t\t\t</div>
\t\t\t<div class=\"header__item mr-4rem\">
\t\t\t\t<small>Очистить кэш:</small>
\t\t\t\t<button title=\"Очистить\" onclick=\"\$.clearCache(this)\"><i class=\"fa fa-trash\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"header__item mr-4rem\">
\t\t\t\t<small>Модификация:</small>
\t\t\t\t<div class=\"select\">
\t\t\t\t\t<select name=\"\" id=\"adminSetModifications\">
\t\t\t\t\t\t{% if modifications %}
\t\t\t\t\t\t\t{% for modName, modTitle in modifications %}
\t\t\t\t\t\t\t\t<option value=\"{{modName}}\"{% if mod_active == modName %} selected{% endif %}>{{modTitle}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"header__item\">
\t\t\t\t<button id=\"goToSite\" class=\"home\" title=\"Перейти на сайт\"><i class=\"fa fa-home\"></i></button>
\t\t\t\t<button id=\"adminLogout\" title=\"Выход\"><i class=\"fa fa-sign-out\"></i></button>
\t\t\t</div>
\t\t</div>
\t</header>
\t
\t<main class=\"main\">
\t\t<div class=\"main__container\">
\t\t\t<div id=\"sectionWait\">
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<i class=\"fa fa-spinner fa-pulse fa-fw\"></i>
\t\t\t\t\t<p></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<section id=\"section\"></section>
\t\t</div>
\t</main>
\t
\t
\t<footer class=\"footer\">
\t\t<div class=\"footer__container\">
\t\t\t<p>© <a href=\"https://shopdevelop.ru\" target=\"_blank\" title=\"Перейти на сайт shopdevelop.ru\">SaytotvoretsCMS</a> {{date('Y')}} г.</p>
\t\t</div>
\t</footer>
</body>
</html>", "views/admin/index.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\index.tpl");
    }
}
