<?php

/* views/site/layout/header.tpl */
class __TwigTemplate_a013473ce175b4379d8982e3306d8eeb8d406abd92151fab9dcad375845dab9a extends Twig_Template
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
        echo "<header class=\"header matte ";
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page_vars"] ?? null), ($context["page_id"] ?? null), [], "array", false, true), "shadow", [], "array", true, true) &&  !(null === (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["page_vars"] ?? null), ($context["page_id"] ?? null), [], "array", false, true)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["shadow"] ?? null) : null)))) ? ((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["page_vars"] ?? null), ($context["page_id"] ?? null), [], "array", false, true)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["shadow"] ?? null) : null)) : (false))) {
            echo "shadow";
        }
        echo "\">
  <div class=\"container-xxl g-40 g-lg-4\">
\t<div class=\"header__block\">
\t  <div class=\"col-auto p-0\">

\t\t";
        // line 6
        if (($context["logo"] ?? null)) {
            // line 7
            echo "\t\t  ";
            if ((($context["seo_url"] ?? null) == "index")) {
                // line 8
                echo "\t\t\t<div class=\"logo\">
\t\t\t\t<img src=\"";
                // line 9
                echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "file", []))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "alt", []), "html", null, true);
                echo "\" />
\t\t\t</div>
\t\t  ";
            } else {
                // line 12
                echo "\t\t\t<a href=\"/\" class=\"logo\">
\t\t\t\t<img src=\"";
                // line 13
                echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "file", []))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "alt", []), "html", null, true);
                echo "\" />
\t\t\t</a>
\t\t  ";
            }
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "\t  </div>
\t  <div class=\"header__block-col header__block-col--pcMenu\">
\t\t<nav class=\"nav nav__header d-none d-xl-block\">
\t\t  <ul>
\t\t\t\t<li class=\"nav__menu-item\">
\t\t\t\t\t<div class=\"nav__title-link\">Каталог</div>
\t\t\t\t\t<div class=\"nav__sub-menu position-absolute pt-50\">
\t\t\t\t\t\t<ul class=\"matte\">
\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "categories", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "href", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t\t</ul>
\t\t\t  \t</div>
\t\t\t\t</li>
\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "  \t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "href", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
            echo "</a></li>
      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t  </ul>
\t\t</nav>
\t\t<div class=\"header__contacts\">
\t\t  <div class=\"time d-none d-lg-block\">
\t\t  \t";
        // line 38
        echo ($context["header_label"] ?? null);
        echo "
\t\t  </div>
\t\t  <div class=\"block-button d-none d-md-flex\">
\t\t\t<a class=\"button button--number\" phone>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["phone"] ?? null), "city1", []), "html", null, true);
        echo "</a>
\t\t\t<button class=\"button button--red\" data-bs-toggle=\"modal\" data-bs-target=\"#modalraschetPrice\">Расчет стоимости</button>
\t\t  </div>
\t\t</div>
\t  </div>
\t  <div class=\"header__block-col header__block-col--mobileMenu\" data-menu>
\t\t<nav class=\"nav nav__header\">
\t\t  <ul>
\t\t\t\t<li class=\"pc-none\"><a href=\"/\">Главная</a></li>
\t\t\t\t<li class=\"nav__menu-item\">
\t\t\t\t\t<div class=\"nav__title-link\">Каталог</div>
\t\t\t\t\t<div class=\"nav__sub-menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "categories", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "href", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "href", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t  </ul>
\t\t</nav>
\t\t<div class=\"header__contacts d-flex d-lg-none\">
\t\t  <div class=\"time\">
\t\t\t";
        // line 67
        echo ($context["header_label"] ?? null);
        echo "
\t\t  </div>
\t\t  <div class=\"block-button d-flex d-md-none\">
\t\t\t<a class=\"button button--number\" href=\"tel:8 495 120-18-66\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["phone"] ?? null), "city1", []), "html", null, true);
        echo "</a>
\t\t\t<button class=\"button button--red\" data-bs-toggle=\"modal\" data-bs-target=\"#modalraschetPrice\">Расчет стоимости</button>
\t\t  </div>
\t\t</div>
\t  </div>
\t  <div class=\"burger-block d-flex d-xl-none\">
\t\t<button class=\"burger d-block\" aria-label=\"Открыть меню\" aria-expanded=\"false\" data-burger>
\t\t  <span class=\"burger__line\"></span>
\t\t</button>
\t  </div>
\t</div>
  </div>
</header>";
    }

    public function getTemplateName()
    {
        return "views/site/layout/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 70,  178 => 67,  172 => 63,  161 => 61,  157 => 60,  152 => 57,  141 => 55,  137 => 54,  121 => 41,  115 => 38,  109 => 34,  98 => 32,  94 => 31,  89 => 28,  78 => 26,  74 => 25,  64 => 17,  61 => 16,  53 => 13,  50 => 12,  42 => 9,  39 => 8,  36 => 7,  34 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"header matte {% if page_vars[page_id][\"shadow\"] ?? false %}shadow{% endif %}\">
  <div class=\"container-xxl g-40 g-lg-4\">
\t<div class=\"header__block\">
\t  <div class=\"col-auto p-0\">

\t\t{% if logo %}
\t\t  {% if seo_url == 'index' %}
\t\t\t<div class=\"logo\">
\t\t\t\t<img src=\"{{base_url('public/filemanager/'~logo.file)}}\" alt=\"{{logo.alt}}\" />
\t\t\t</div>
\t\t  {% else %}
\t\t\t<a href=\"/\" class=\"logo\">
\t\t\t\t<img src=\"{{base_url('public/filemanager/'~logo.file)}}\" alt=\"{{logo.alt}}\" />
\t\t\t</a>
\t\t  {% endif %}
\t\t{% endif %}
\t  </div>
\t  <div class=\"header__block-col header__block-col--pcMenu\">
\t\t<nav class=\"nav nav__header d-none d-xl-block\">
\t\t  <ul>
\t\t\t\t<li class=\"nav__menu-item\">
\t\t\t\t\t<div class=\"nav__title-link\">Каталог</div>
\t\t\t\t\t<div class=\"nav__sub-menu position-absolute pt-50\">
\t\t\t\t\t\t<ul class=\"matte\">
\t\t\t\t\t\t\t{% for item in navigation.categories %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{item.href}}\">{{item.title}}</a></li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t  \t</div>
\t\t\t\t</li>
\t\t\t\t{% for item in navigation.pages %}
  \t\t\t\t\t<li><a href=\"{{item.href}}\">{{item.title}}</a></li>
      \t{% endfor %}
\t\t  </ul>
\t\t</nav>
\t\t<div class=\"header__contacts\">
\t\t  <div class=\"time d-none d-lg-block\">
\t\t  \t{{header_label|raw}}
\t\t  </div>
\t\t  <div class=\"block-button d-none d-md-flex\">
\t\t\t<a class=\"button button--number\" phone>{{phone.city1}}</a>
\t\t\t<button class=\"button button--red\" data-bs-toggle=\"modal\" data-bs-target=\"#modalraschetPrice\">Расчет стоимости</button>
\t\t  </div>
\t\t</div>
\t  </div>
\t  <div class=\"header__block-col header__block-col--mobileMenu\" data-menu>
\t\t<nav class=\"nav nav__header\">
\t\t  <ul>
\t\t\t\t<li class=\"pc-none\"><a href=\"/\">Главная</a></li>
\t\t\t\t<li class=\"nav__menu-item\">
\t\t\t\t\t<div class=\"nav__title-link\">Каталог</div>
\t\t\t\t\t<div class=\"nav__sub-menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for item in navigation.categories %}
\t\t\t\t\t\t\t\t<li><a href=\"{{item.href}}\">{{item.title}}</a></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{% for item in navigation.pages %}
\t\t\t\t\t\t<li><a href=\"{{item.href}}\">{{item.title}}</a></li>
\t\t\t\t{% endfor %}
\t\t  </ul>
\t\t</nav>
\t\t<div class=\"header__contacts d-flex d-lg-none\">
\t\t  <div class=\"time\">
\t\t\t{{header_label|raw}}
\t\t  </div>
\t\t  <div class=\"block-button d-flex d-md-none\">
\t\t\t<a class=\"button button--number\" href=\"tel:8 495 120-18-66\">{{phone.city1}}</a>
\t\t\t<button class=\"button button--red\" data-bs-toggle=\"modal\" data-bs-target=\"#modalraschetPrice\">Расчет стоимости</button>
\t\t  </div>
\t\t</div>
\t  </div>
\t  <div class=\"burger-block d-flex d-xl-none\">
\t\t<button class=\"burger d-block\" aria-label=\"Открыть меню\" aria-expanded=\"false\" data-burger>
\t\t  <span class=\"burger__line\"></span>
\t\t</button>
\t  </div>
\t</div>
  </div>
</header>", "views/site/layout/header.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\layout\\header.tpl");
    }
}
