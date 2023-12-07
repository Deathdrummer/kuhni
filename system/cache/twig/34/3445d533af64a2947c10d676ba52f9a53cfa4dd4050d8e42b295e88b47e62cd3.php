<?php

/* views/site/error.tpl */
class __TwigTemplate_0a9543c8426ba6c904a10e0ce5cd908c80ad26b6ea34d04ce73f600ac378da09 extends Twig_Template
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
\t<meta name=\"copyright\" content=\"Deathdrumer &copy; Web разработка\" />
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
        echo "\t<link rel=\"shortcut icon\" href=\"";
        if (($context["favicon"] ?? null)) {
            echo twig_escape_filter($this->env, base_url(("public/filemanager/" . ($context["favicon"] ?? null))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, base_url("public/images/favicon.png"), "html", null, true);
        }
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url("public/css/assets.min.css"), "html", null, true);
        echo "\">
\t";
        // line 19
        if (is_file((("public/css/" . ($context["controller"] ?? null)) . ".min.css"))) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, base_url((("public/css/" . ($context["controller"] ?? null)) . ".min.css")), "html", null, true);
            echo "\">";
        }
        // line 20
        echo "\t
\t<title>";
        // line 21
        echo twig_escape_filter($this->env, (((isset($context["page_title"]) || array_key_exists("page_title", $context))) ? (_twig_default_filter(($context["page_title"] ?? null), ($context["error_404_lang"] ?? null))) : (($context["error_404_lang"] ?? null))), "html", null, true);
        echo "</title> 
</head>
<body data-scroll-block=\"body\" id=\"body\">
\t<section class=\"section errorsection\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"errorsection__title\">Ошибка 404</h1>
\t\t\t<p class=\"errorsection__text\">Такой страницы не существует</p>
\t\t\t<a style=\"color: #15728e; text-align: center; display: block; font-family: roboto-regular; margin-top: 30px; text-decoration: underline\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">На главную</a>
\t\t</div>
\t</section>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "views/site/error.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  70 => 21,  67 => 20,  61 => 19,  57 => 18,  48 => 17,  43 => 16,  39 => 15,  23 => 1,);
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
\t<meta name=\"copyright\" content=\"Deathdrumer &copy; Web разработка\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<meta name=\"format-detection\" content=\"telephone=no\"> <!-- отключение автоопределения номеров для Safari (iPhone / IPod / IPad) и Android браузера -->
\t<meta http-equiv=\"x-rim-auto-match\" content=\"none\"> <!-- отключение автоопределения номеров для BlackBerry -->
\t{% if not hosting %}<meta http-equiv=\"cache-control\" content=\"no-cache\">{% endif %}
\t{% if not hosting %}<meta http-equiv=\"expires\" content=\"1\">{% endif %}
\t<link rel=\"shortcut icon\" href=\"{% if favicon %}{{base_url('public/filemanager/'~favicon)}}{% else %}{{base_url('public/images/favicon.png')}}{% endif %}\" />
\t<link rel=\"stylesheet\" href=\"{{base_url('public/css/assets.min.css')}}\">
\t{% if is_file('public/css/'~controller~'.min.css') %}<link rel=\"stylesheet\" href=\"{{base_url('public/css/'~controller~'.min.css')}}\">{% endif %}
\t
\t<title>{{page_title|default(error_404_lang)}}</title> 
</head>
<body data-scroll-block=\"body\" id=\"body\">
\t<section class=\"section errorsection\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"errorsection__title\">Ошибка 404</h1>
\t\t\t<p class=\"errorsection__text\">Такой страницы не существует</p>
\t\t\t<a style=\"color: #15728e; text-align: center; display: block; font-family: roboto-regular; margin-top: 30px; text-decoration: underline\" href=\"{{base_url()}}\">На главную</a>
\t\t</div>
\t</section>
</body>
</html>", "views/site/error.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\error.tpl");
    }
}
