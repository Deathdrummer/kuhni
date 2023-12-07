<?php

/* views/site/sections/main_catalog_closet.tpl */
class __TwigTemplate_eb449cf212985fcc787ab1f607fa93048108c94d9b16248be5453b1ed7f34746 extends Twig_Template
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
        echo "<section class=\"section closet-section section--mb \"";
        if (($context["data_scroll_id"] ?? null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["data_scroll_id"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["data_scroll_block"] ?? null)) {
            echo " data-scroll-block=\"";
            echo twig_escape_filter($this->env, ($context["data_scroll_block"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
\t  <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"section__block-title\">
        <div class=\"section__subtitle\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        echo "</div>
      <div class=\"section__title\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
    </div>
    <div class=\"section--pb border-light-white\">
      <div class=\"row g-2 g-lg-3\">

      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["main_catalog_closet"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "              <div class=\"col-closet col-12 col-lg-4\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cat_kitchen", []), "seo_url", []), "html", null, true);
            echo "\" class=\"photo\">
                    <img\tsrc=\"";
            // line 13
            echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["item"], "bg", []))), "html", null, true);
            echo "\" loading=\"lazy\" />
                  <div class=\"matte photo-matte photo-text\">
                <div class=\"photo-text__title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
            echo "</div>
                       <div class=\"photo-text__text\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "subtitle", []), "html", null, true);
            echo "</div>
                  </div>
                </a>

                ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["item"], "btn_true", [])) {
                // line 21
                echo "                  <div class=\"d-none d-lg-flex col-btn-pc mt-lg-auto\">
                      <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["data_cat"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "href", []), "html", null, true);
                echo "\" class=\"button\">";
                echo twig_escape_filter($this->env, ($context["btn_text"] ?? null), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 25
            echo "              </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        <div class=\"col-closet col-12 d-flex d-lg-none col-btn-mobile\">
          <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["data_cat"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null), "href", []), "html", null, true);
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, ($context["btn_text"] ?? null), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/main_catalog_closet.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  98 => 27,  91 => 25,  83 => 22,  80 => 21,  78 => 20,  71 => 16,  67 => 15,  62 => 13,  58 => 12,  55 => 11,  51 => 10,  43 => 5,  39 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section closet-section section--mb \"{% if data_scroll_id %} id=\"{{data_scroll_id}}\"{% endif %}{% if data_scroll_block %} data-scroll-block=\"{{data_scroll_block}}\"{% endif %}>
\t  <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"section__block-title\">
        <div class=\"section__subtitle\">{{subtitle}}</div>
      <div class=\"section__title\">{{title}}</div>
    </div>
    <div class=\"section--pb border-light-white\">
      <div class=\"row g-2 g-lg-3\">

      {% for item in main_catalog_closet %}
              <div class=\"col-closet col-12 col-lg-4\">
                <a href=\"{{item.cat_kitchen.seo_url}}\" class=\"photo\">
                    <img\tsrc=\"{{base_url('public/filemanager/'~item.bg)}}\" loading=\"lazy\" />
                  <div class=\"matte photo-matte photo-text\">
                <div class=\"photo-text__title\">{{item.title}}</div>
                       <div class=\"photo-text__text\">{{item.subtitle}}</div>
                  </div>
                </a>

                {% if item.btn_true %}
                  <div class=\"d-none d-lg-flex col-btn-pc mt-lg-auto\">
                      <a href=\"{{data_cat[0].href}}\" class=\"button\">{{btn_text}}</a>
                    </div>
                {% endif %}
              </div>
      {% endfor %}

        <div class=\"col-closet col-12 d-flex d-lg-none col-btn-mobile\">
          <a href=\"{{data_cat[0].href}}\" class=\"button\">{{btn_text}}</a>
        </div>
      </div>
    </div>
  </div>
</section>", "views/site/sections/main_catalog_closet.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\main_catalog_closet.tpl");
    }
}
