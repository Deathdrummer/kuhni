<?php

/* views/site/layout/nav_mobile.tpl */
class __TwigTemplate_06d7591cebaf1c9c4d8a3ea2b8dd4f9bb7111fe2e86644e9087f9bfbaa9df6bd extends Twig_Template
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
        echo "<div class=\"mobilenavwrap hidden-lg-up\"></div>
<div class=\"mobilenav hidden-lg-up\" id=\"mobileNavBlock\">
\t<div class=\"mobilenav__close\" id=\"mobileNavButtonClose\"></div>
\t
\t<div class=\"mobilenav__contacts\">
\t\t<p><i class=\"fa fa-phone\"></i><a phone>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["phone"] ?? null), "free1", []), "html", null, true);
        echo "</a></p>
\t\t<button 
\t\t\tcallbackform
\t\t\tcbtype=\"1\"
\t\t\tcbtitle=\"";
        // line 10
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["callbackform"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["title"] ?? null) : null), "html", null, true);
        echo "\"
\t\t\tcbsuccess=\"";
        // line 11
        echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["callbackform"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[1] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["send_success"] ?? null) : null), "html", null, true);
        echo "\"
\t\t\tcbbutton=\"";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["callbackform"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[1] ?? null) : null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["button"] ?? null) : null), "html", null, true);
        echo "\"
\t\t\tcbyandexreachgoal=\"";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["callbackform"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[1] ?? null) : null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["reachgoal"] ?? null) : null), "html", null, true);
        echo "\"
\t\t\t>Заказать звонок</button>
\t</div>
\t
\t<ul class=\"mobilenav__nav\">
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 19
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["page"], "active", [])) {
                // line 20
                echo "\t\t\t\t<li class=\"active\"><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", []), "html", null, true);
                echo "</span></li>
\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "href", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", []), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            // line 24
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</ul>
\t
\t";
        // line 28
        echo "\t
\t";
        // line 29
        if (($context["modifications"] ?? null)) {
            // line 30
            echo "\t\t<div class=\"modifications\">
\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 32
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["m"], "active", []) == false)) {
                    // line 33
                    echo "\t\t\t\t\t<div class=\"modifications__item\" modification=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "modification", []), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<span>";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "label", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 37
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t</div>
\t";
        }
        // line 40
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "views/site/layout/nav_mobile.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  120 => 38,  114 => 37,  108 => 34,  103 => 33,  100 => 32,  96 => 31,  93 => 30,  91 => 29,  88 => 28,  84 => 25,  78 => 24,  70 => 22,  64 => 20,  61 => 19,  57 => 18,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"mobilenavwrap hidden-lg-up\"></div>
<div class=\"mobilenav hidden-lg-up\" id=\"mobileNavBlock\">
\t<div class=\"mobilenav__close\" id=\"mobileNavButtonClose\"></div>
\t
\t<div class=\"mobilenav__contacts\">
\t\t<p><i class=\"fa fa-phone\"></i><a phone>{{phone.free1}}</a></p>
\t\t<button 
\t\t\tcallbackform
\t\t\tcbtype=\"1\"
\t\t\tcbtitle=\"{{callbackform[1]['title']}}\"
\t\t\tcbsuccess=\"{{callbackform[1]['send_success']}}\"
\t\t\tcbbutton=\"{{callbackform[1]['button']}}\"
\t\t\tcbyandexreachgoal=\"{{callbackform[1]['reachgoal']}}\"
\t\t\t>Заказать звонок</button>
\t</div>
\t
\t<ul class=\"mobilenav__nav\">
\t\t{% for page in navigation.pages %}
\t\t\t{% if page.active %}
\t\t\t\t<li class=\"active\"><span>{{page.title}}</span></li>
\t\t\t{% else %}
\t\t\t\t<li><a href=\"{{page.href}}\">{{page.title}}</a></li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</ul>
\t
\t{# переменная navigation в себе содержит все #}
\t
\t{% if modifications %}
\t\t<div class=\"modifications\">
\t\t\t{% for m in modifications %}
\t\t\t\t{% if m.active == false %}
\t\t\t\t\t<div class=\"modifications__item\" modification=\"{{m.modification}}\">
\t\t\t\t\t\t<span>{{m.label}}</span>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</div>
\t{% endif %}
</div>", "views/site/layout/nav_mobile.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\layout\\nav_mobile.tpl");
    }
}
