<?php

/* views/site/sections/main_catalog_kitchen.tpl */
class __TwigTemplate_9c1dd79b1118610fddad2eba48667627251275d13d6ecfbf36b5b596c8d455b0 extends Twig_Template
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
        echo "<section class=\"section kitchen-section section--mb \"";
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
\t<div class=\"container-xxl g-2 g-lg-4\">
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
      <div class=\"row row-cols-1 row-cols-lg-2 g-2 g-lg-3\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sortbykey')->getCallable(), [($context["kitchen_list"] ?? null)]));
        foreach ($context['_seq'] as $context["index"] => $context["group"]) {
            // line 10
            echo "          <div class=\"col group-";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">
             <div class=\"row ";
            // line 11
            if (($context["index"] == 2)) {
                echo "g-2 g-lg-3";
            }
            if (($context["index"] == 3)) {
                echo "g-0 gy-2 gy-lg-3";
            }
            echo "\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sortby')->getCallable(), [$context["group"], "sort"]));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "btn_cat", []) == 0)) {
                    // line 14
                    echo "                      <div class=\"col";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "position", []) == "left")) {
                        echo " col-12 col-md-6";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "position", []) == "right")) {
                        echo " col-12 col-md-6 offset-md-6";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "size_photo", []) == "horizontal")) {
                        echo " col-12";
                    }
                    echo "\">
                        <a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, base_url(("/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product_kitchen", []), "seo_url", []))), "html", null, true);
                    echo "\" class=\"photo";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "size_photo", []) == "big")) {
                        echo " photo-big photo-sm-down-big";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "size_photo", []) == "horizontal")) {
                        echo " photo-horizontal photo-sm-down-small";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "size_photo", []) == "small")) {
                        echo " photo-small photo-sm-down-small";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "size_photo", []) == "small-big")) {
                        echo " photo-sm-down-big";
                    }
                    echo "\">
                            <img src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["item"], "bg", []))), "html", null, true);
                    echo "\" loading=\"lazy\" />
                            <div class=\"matte photo-matte text-white-custom photo-text\">
                              <div class=\"photo-text__title\">";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
                    echo "</div>
                              <div class=\"photo-text__text\">";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "subtitle", []), "html", null, true);
                    echo "</div>
                            </div>
                          </a>
                        </div>
                    ";
                }
                // line 24
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "btn_cat", []) == 1)) {
                    // line 25
                    echo "                         <div class=\"col-6 gy-2 gy-lg-3 d-none d-md-flex col-btn-pc\">
                          <a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, base_url("/kitchen"), "html", null, true);
                    echo "\" class=\"button\">";
                    echo twig_escape_filter($this->env, ($context["text_btn"] ?? null), "html", null, true);
                    echo "</a>
                        </div>
                    ";
                }
                // line 29
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "              </div>
           </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        <div class=\"col g-3 d-flex d-md-none col-btn-mobile\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, base_url("/kitchen"), "html", null, true);
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, ($context["text_btn"] ?? null), "html", null, true);
        echo "</a>
          </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/main_catalog_kitchen.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 34,  150 => 33,  142 => 30,  136 => 29,  128 => 26,  125 => 25,  122 => 24,  114 => 19,  110 => 18,  105 => 16,  88 => 15,  75 => 14,  72 => 13,  68 => 12,  59 => 11,  54 => 10,  50 => 9,  43 => 5,  39 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section kitchen-section section--mb \"{% if data_scroll_id %} id=\"{{data_scroll_id}}\"{% endif %}{% if data_scroll_block %} data-scroll-block=\"{{data_scroll_block}}\"{% endif %}>
\t<div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"section__block-title\">
      <div class=\"section__subtitle\">{{subtitle}}</div>
      <div class=\"section__title\">{{title}}</div>
    </div>
    <div class=\"section--pb border-light-white\">
      <div class=\"row row-cols-1 row-cols-lg-2 g-2 g-lg-3\">
      {% for index, group in kitchen_list|sortbykey %}
          <div class=\"col group-{{index}}\">
             <div class=\"row {% if index==2 %}g-2 g-lg-3{% endif %}{% if index==3 %}g-0 gy-2 gy-lg-3{% endif %}\">
                {% for item in group|sortby(\"sort\") %}
                    {% if item.btn_cat==0 %}
                      <div class=\"col{% if item.position=='left' %} col-12 col-md-6{% endif %}{% if item.position=='right' %} col-12 col-md-6 offset-md-6{% endif %}{% if item.size_photo=='horizontal' %} col-12{% endif %}\">
                        <a href=\"{{base_url('/'~item.product_kitchen.seo_url)}}\" class=\"photo{% if item.size_photo=='big' %} photo-big photo-sm-down-big{% endif %}{% if item.size_photo=='horizontal' %} photo-horizontal photo-sm-down-small{% endif %}{% if item.size_photo=='small' %} photo-small photo-sm-down-small{% endif %}{% if item.size_photo=='small-big' %} photo-sm-down-big{% endif %}\">
                            <img src=\"{{base_url('public/filemanager/'~item.bg)}}\" loading=\"lazy\" />
                            <div class=\"matte photo-matte text-white-custom photo-text\">
                              <div class=\"photo-text__title\">{{item.title}}</div>
                              <div class=\"photo-text__text\">{{item.subtitle}}</div>
                            </div>
                          </a>
                        </div>
                    {% endif %}
                    {% if item.btn_cat==1 %}
                         <div class=\"col-6 gy-2 gy-lg-3 d-none d-md-flex col-btn-pc\">
                          <a href=\"{{base_url('/kitchen')}}\" class=\"button\">{{text_btn}}</a>
                        </div>
                    {% endif %}
                {% endfor %}
              </div>
           </div>
       {% endfor %}
        <div class=\"col g-3 d-flex d-md-none col-btn-mobile\">
            <a href=\"{{base_url('/kitchen')}}\" class=\"button\">{{text_btn}}</a>
          </div>
      </div>
    </div>
  </div>
</section>", "views/site/sections/main_catalog_kitchen.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\main_catalog_kitchen.tpl");
    }
}
