<?php

/* views/site/index.tpl */
class __TwigTemplate_f835236d47bf4421843a7517bd530556da610735988e72b35bbe421ec4fa0ab5 extends Twig_Template
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
<html dir=\"ltr\" lang=\"ru\" prefix=\"og: http://ogp.me/ns#\" class=\"page\">
<head itemscope itemtype=\"http://schema.org/WPHeader\">
\t<meta charset=\"UTF-8\" />
\t<meta name=\"author\" content=\"Дмитрий Калюжнный\" />
\t<meta name=\"copyright\" content=\"Deathdrumer &copy; Web разработка\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<meta name=\"format-detection\" content=\"telephone=no\"> <!-- отключение автоопределения номеров для Safari (iPhone / IPod / IPad) и Android браузера -->
\t<meta http-equiv=\"x-rim-auto-match\" content=\"none\"> <!-- отключение автоопределения номеров для BlackBerry -->
\t<meta itemprop=\"keywords\" name=\"keywords\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, (((isset($context["meta_keywords"]) || array_key_exists("meta_keywords", $context))) ? (_twig_default_filter(($context["meta_keywords"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
\t<meta itemprop=\"description\" name=\"description\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, (((isset($context["meta_description"]) || array_key_exists("meta_description", $context))) ? (_twig_default_filter(($context["meta_description"] ?? null), "")) : ("")), "html", null, true);
        echo "\">

\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:title\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["og"] ?? null), "title", []), "html", null, true);
        echo "\">
\t<meta property=\"og:description\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["og"] ?? null), "description", []), "html", null, true);
        echo "\">
\t<meta property=\"og:url\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["og"] ?? null), "url", []), "html", null, true);
        echo "\">
\t<meta property=\"og:image\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, ($context["og"] ?? null), "image", []))), "html", null, true);
        echo "\">
\t<meta property=\"og:site_name\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["og"] ?? null), "site_name", []), "html", null, true);
        echo "\">

\t";
        // line 25
        if ( !($context["hosting"] ?? null)) {
            echo "<meta http-equiv=\"cache-control\" content=\"no-cache\">";
        }
        // line 26
        echo "\t";
        if ( !($context["hosting"] ?? null)) {
            echo "<meta http-equiv=\"expires\" content=\"1\">";
        }
        // line 27
        echo "\t";
        if (($context["metatags"] ?? null)) {
            echo ($context["metatags"] ?? null);
        }
        // line 28
        echo "\t<link rel=\"shortcut icon\" href=\"";
        if (($context["favicon"] ?? null)) {
            echo twig_escape_filter($this->env, base_url(("public/filemanager/" . ($context["favicon"] ?? null))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, base_url("public/images/favicon.png"), "html", null, true);
        }
        echo "\" />

\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, base_url("public/css/assets.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url("public/css/plugins.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url("public/css/components.min.css"), "html", null, true);
        echo "\">
\t";
        // line 33
        if (is_file((("public/css/" . ($context["controller"] ?? null)) . ".min.css"))) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, base_url((("public/css/" . ($context["controller"] ?? null)) . ".min.css")), "html", null, true);
            echo "\">";
        }
        // line 34
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url("public/css/aquarel/vendor.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url("public/css/aquarel/main.css"), "html", null, true);
        echo "\">
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
\t<link href=\"https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap\" rel=\"stylesheet\" />


\t<script src=\"https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js\"></script>
\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, base_url("public/js/plugins.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, base_url("public/js/functions.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, base_url("public/js/common.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, base_url("public/js/components.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, base_url("public/js/ddrFormSubmit.js"), "html", null, true);
        echo "\"></script>

\t";
        // line 49
        if (($context["hosting"] ?? null)) {
            $this->loadTemplate((("views/" . ($context["controller"] ?? null)) . "/layout/hosting.tpl"), "views/site/index.tpl", 49)->display($context);
        }
        echo " <!-- Если сайт на хостинге - выполнять функции -->
\t<title itemprop=\"headline\">";
        // line 50
        echo twig_escape_filter($this->env, (((isset($context["page_title"]) || array_key_exists("page_title", $context))) ? (_twig_default_filter(($context["page_title"] ?? null), "Страница без заголовка")) : ("Страница без заголовка")), "html", null, true);
        echo "</title>
</head>
<body data-scroll-block=\"body\" id=\"body\" class=\"page__body\">

\t";
        // line 54
        if (($context["svg_sprite"] ?? null)) {
            echo ($context["svg_sprite"] ?? null);
        }
        echo " ";
        // line 55
        echo "\t";
        if (($context["header"] ?? null)) {
            $this->loadTemplate((("views/" . ($context["controller"] ?? null)) . "/layout/header.tpl"), "views/site/index.tpl", 55)->display($context);
        }
        // line 56
        echo "\t";
        if (($context["nav_mobile"] ?? null)) {
            $this->loadTemplate((("views/" . ($context["controller"] ?? null)) . "/layout/nav_mobile.tpl"), "views/site/index.tpl", 56)->display($context);
        }
        // line 57
        echo "\t<main class=\"main\">
\t\t";
        // line 58
        if (($context["sections"] ?? null)) {
            // line 59
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 60
                echo "\t\t\t\t";
                $this->loadTemplate(((("views/" . ($context["controller"] ?? null)) . "/sections/") . call_user_func_array($this->env->getFilter('ext')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["section"], "filename", []), "tpl"])), "views/site/index.tpl", 60)->display(array_merge($context, twig_get_attribute($this->env, $this->source, $context["section"], "data", [])));
                // line 61
                echo "\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t";
        }
        // line 63
        echo "\t</main>
\t";
        // line 64
        if (($context["footer"] ?? null)) {
            $this->loadTemplate((("views/" . ($context["controller"] ?? null)) . "/layout/footer.tpl"), "views/site/index.tpl", 64)->display($context);
        }
        // line 65
        echo "\t";
        if (($context["scrolltop"] ?? null)) {
            echo "<div scrolltop class=\"hidden-sm-down\"><svg><use xlink:href=\"";
            echo twig_escape_filter($this->env, ($context["scrolltop"] ?? null), "html", null, true);
            echo "\"></use></svg></div>";
        }
        // line 66
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["stockicon"] ?? null), "url", []) && (($context["seo_url"] ?? null) != twig_get_attribute($this->env, $this->source, ($context["stockicon"] ?? null), "url", [])))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stockicon"] ?? null), "url", []), "html", null, true);
            echo "\" class=\"stockicon\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stockicon"] ?? null), "link_title", []), "html", null, true);
            echo "\"><span class=\"stockicon__icon\">%</span></a>";
        }
        // line 67
        echo "

\t<script defer src=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js\"></script>
  \t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css\" />


\t<script defer src=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js\"></script>
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css\" />
\t<script defer src=\"";
        // line 75
        echo twig_escape_filter($this->env, base_url("public/js/aquarel/main.js"), "html", null, true);
        echo "\"></script>

\t";
        // line 78
        echo "
\t";
        // line 79
        if (($context["scripts_head"] ?? null)) {
            echo ($context["scripts_head"] ?? null);
        }
        // line 80
        echo "
\t";
        // line 81
        if (is_file((("public/js/" . ($context["controller"] ?? null)) . ".js"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, base_url((("public/js/" . ($context["controller"] ?? null)) . ".js")), "html", null, true);
            echo "\"></script>";
        }
        // line 82
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "views/site/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 82,  269 => 81,  266 => 80,  262 => 79,  259 => 78,  254 => 75,  244 => 67,  235 => 66,  228 => 65,  224 => 64,  221 => 63,  218 => 62,  204 => 61,  201 => 60,  183 => 59,  181 => 58,  178 => 57,  173 => 56,  168 => 55,  163 => 54,  156 => 50,  150 => 49,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  119 => 36,  115 => 35,  112 => 34,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  84 => 28,  79 => 27,  74 => 26,  70 => 25,  65 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  43 => 16,  39 => 15,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"ltr\" lang=\"ru\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"ltr\" lang=\"ru\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"ltr\" lang=\"ru\" prefix=\"og: http://ogp.me/ns#\" class=\"page\">
<head itemscope itemtype=\"http://schema.org/WPHeader\">
\t<meta charset=\"UTF-8\" />
\t<meta name=\"author\" content=\"Дмитрий Калюжнный\" />
\t<meta name=\"copyright\" content=\"Deathdrumer &copy; Web разработка\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<meta name=\"format-detection\" content=\"telephone=no\"> <!-- отключение автоопределения номеров для Safari (iPhone / IPod / IPad) и Android браузера -->
\t<meta http-equiv=\"x-rim-auto-match\" content=\"none\"> <!-- отключение автоопределения номеров для BlackBerry -->
\t<meta itemprop=\"keywords\" name=\"keywords\" content=\"{{meta_keywords|default('')}}\">
\t<meta itemprop=\"description\" name=\"description\" content=\"{{meta_description|default('')}}\">

\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:title\" content=\"{{og.title}}\">
\t<meta property=\"og:description\" content=\"{{og.description}}\">
\t<meta property=\"og:url\" content=\"{{og.url}}\">
\t<meta property=\"og:image\" content=\"{{base_url('public/filemanager/'~og.image)}}\">
\t<meta property=\"og:site_name\" content=\"{{og.site_name}}\">

\t{% if not hosting %}<meta http-equiv=\"cache-control\" content=\"no-cache\">{% endif %}
\t{% if not hosting %}<meta http-equiv=\"expires\" content=\"1\">{% endif %}
\t{% if metatags %}{{metatags|raw}}{% endif %}
\t<link rel=\"shortcut icon\" href=\"{% if favicon %}{{base_url('public/filemanager/'~favicon)}}{% else %}{{base_url('public/images/favicon.png')}}{% endif %}\" />

\t<link rel=\"stylesheet\" href=\"{{base_url('public/css/assets.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{base_url('public/css/plugins.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{base_url('public/css/components.min.css')}}\">
\t{% if is_file('public/css/'~controller~'.min.css') %}<link rel=\"stylesheet\" href=\"{{base_url('public/css/'~controller~'.min.css')}}\">{% endif %}

\t<link rel=\"stylesheet\" href=\"{{base_url('public/css/aquarel/vendor.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{base_url('public/css/aquarel/main.css')}}\">
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
\t<link href=\"https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap\" rel=\"stylesheet\" />


\t<script src=\"https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js\"></script>
\t<script src=\"{{base_url('public/js/plugins.min.js')}}\"></script>
\t<script src=\"{{base_url('public/js/functions.js')}}\"></script>
\t<script src=\"{{base_url('public/js/common.js')}}\"></script>
\t<script src=\"{{base_url('public/js/components.min.js')}}\"></script>
\t<script src=\"{{base_url('public/js/ddrFormSubmit.js')}}\"></script>

\t{% if hosting %}{% include 'views/'~controller~'/layout/hosting.tpl' %}{% endif %} <!-- Если сайт на хостинге - выполнять функции -->
\t<title itemprop=\"headline\">{{page_title|default('Страница без заголовка')}}</title>
</head>
<body data-scroll-block=\"body\" id=\"body\" class=\"page__body\">

\t{% if svg_sprite %}{{svg_sprite|raw}}{% endif %} {# Вставляем SVG спрайт #}
\t{% if header %}{% include 'views/'~controller~'/layout/header.tpl' %}{% endif %}
\t{% if nav_mobile %}{% include 'views/'~controller~'/layout/nav_mobile.tpl' %}{% endif %}
\t<main class=\"main\">
\t\t{% if sections %}
\t\t\t{% for section in sections %}
\t\t\t\t{% include 'views/'~controller~'/sections/'~section.filename|ext('tpl') with section.data %}
\t\t\t{% endfor %}
\t\t{% endif %}
\t</main>
\t{% if footer %}{% include 'views/'~controller~'/layout/footer.tpl' %}{% endif %}
\t{% if scrolltop %}<div scrolltop class=\"hidden-sm-down\"><svg><use xlink:href=\"{{scrolltop}}\"></use></svg></div>{% endif %}
\t{% if stockicon.url and seo_url != stockicon.url %}<a href=\"{{stockicon.url}}\" class=\"stockicon\" title=\"{{stockicon.link_title}}\"><span class=\"stockicon__icon\">%</span></a>{% endif %}


\t<script defer src=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js\"></script>
  \t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css\" />


\t<script defer src=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js\"></script>
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css\" />
\t<script defer src=\"{{base_url('public/js/aquarel/main.js')}}\"></script>

\t{# <script type=\"module\" src=\"{{base_url('public/js/modelViewer.js')}}\"></script> #}

\t{% if scripts_head %}{{scripts_head|raw}}{% endif %}

\t{% if is_file('public/js/'~controller~'.js') %}<script src=\"{{base_url('public/js/'~controller~'.js')}}\"></script>{% endif %}
</body>
</html>", "views/site/index.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\index.tpl");
    }
}
