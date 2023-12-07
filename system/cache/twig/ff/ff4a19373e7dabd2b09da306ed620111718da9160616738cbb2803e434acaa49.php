<?php

/* views/site/sections/section_contacts.tpl */
class __TwigTemplate_6a4c43c38302efb0537885bbfcaba170cf75e4e6252305e96c2de3f410e952dd extends Twig_Template
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
        echo "<section class=\"section contacts-section mt-50 section--mb\"";
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
  <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"row g-3\">
      <div class=\"col-12 col-lg-5 col-xl-4 br-left-before\">
        <div class=\"section__block-title\">
          <div class=\"section__title\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
        </div>
        <div class=\"contacts-section__list\">
          ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_contacts_section"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                <div class=\"contacts-section__item\">
                  ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "tel", []) != "")) {
                echo "<a href=\"tel:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "tel", []), "html", null, true);
                echo "\"";
            }
            // line 12
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "mail", []) != "")) {
                echo "<a href=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "mail", []), "html", null, true);
                echo "\"";
            }
            // line 13
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, $context["item"], "mail", []) == "") && (twig_get_attribute($this->env, $this->source, $context["item"], "tel", []) == ""))) {
                echo "<div ";
            }
            echo " class=\"contacts-section__item-title\">
                      <img class=\"icon-contacts\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, $context["item"], "ic", []))), "html", null, true);
            echo "\" loading=\"lazy\" alt=\"\" />
                      <span>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
            echo "</span>

                  ";
            // line 17
            if (((twig_get_attribute($this->env, $this->source, $context["item"], "mail", []) != "") || (twig_get_attribute($this->env, $this->source, $context["item"], "tel", []) != ""))) {
                echo "</a>";
            }
            // line 18
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, $context["item"], "mail", []) == "") && (twig_get_attribute($this->env, $this->source, $context["item"], "tel", []) == ""))) {
                echo " </div> ";
            }
            // line 19
            echo "                    <div class=\"contacts-section__item-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", []), "html", null, true);
            echo "</div>
                </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
        <div class=\"contacts-section__sosials\">
          <div class=\"sosials d-flex\">
              ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["soc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sosial"]) {
            // line 26
            echo "               ";
            if ((twig_get_attribute($this->env, $this->source, $context["sosial"], "title", []) != "phone")) {
                // line 27
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sosial"], "link", []), "html", null, true);
                echo "\" class=\"sosial-link\">
                      <svg class=\"icon-sosial ic-";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sosial"], "title", []), "html", null, true);
                echo "\">
                            <use xlink:href=\"";
                // line 29
                echo twig_escape_filter($this->env, base_url(("public/svg/sprite-acvarel.svg#" . twig_get_attribute($this->env, $this->source, $context["sosial"], "sprite", []))), "html", null, true);
                echo "\"></use>
                      </svg>
                    </a>
                ";
            }
            // line 33
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sosial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-6 offset-lg-1 offset-xl-2\">
        <div class=\"map\" style=\"position: relative; overflow: hidden\">";
        // line 38
        echo ($context["map_block"] ?? null);
        echo "</div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/section_contacts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  136 => 34,  130 => 33,  123 => 29,  119 => 28,  114 => 27,  111 => 26,  107 => 25,  102 => 22,  92 => 19,  87 => 18,  83 => 17,  78 => 15,  74 => 14,  67 => 13,  60 => 12,  54 => 11,  51 => 10,  47 => 9,  41 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section contacts-section mt-50 section--mb\"{% if data_scroll_id %} id=\"{{data_scroll_id}}\"{% endif %}{% if data_scroll_block %} data-scroll-block=\"{{data_scroll_block}}\"{% endif %}>
  <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"row g-3\">
      <div class=\"col-12 col-lg-5 col-xl-4 br-left-before\">
        <div class=\"section__block-title\">
          <div class=\"section__title\">{{title}}</div>
        </div>
        <div class=\"contacts-section__list\">
          {% for item in list_contacts_section %}
                <div class=\"contacts-section__item\">
                  {% if item.tel != \"\" %}<a href=\"tel:{{item.tel}}\"{% endif %}
                  {% if item.mail != \"\" %}<a href=\"mailto:{{item.mail}}\"{% endif %}
                    {% if item.mail == \"\" and item.tel == \"\" %}<div {% endif %} class=\"contacts-section__item-title\">
                      <img class=\"icon-contacts\" src=\"{{base_url('public/filemanager/'~item.ic)}}\" loading=\"lazy\" alt=\"\" />
                      <span>{{item.title}}</span>

                  {% if item.mail != \"\" or item.tel != \"\" %}</a>{% endif %}
                    {% if item.mail == \"\" and item.tel == \"\" %} </div> {% endif %}
                    <div class=\"contacts-section__item-text\">{{item.text}}</div>
                </div>
          {% endfor %}
        </div>
        <div class=\"contacts-section__sosials\">
          <div class=\"sosials d-flex\">
              {% for sosial in soc %}
               {% if sosial.title != \"phone\" %}
                  <a href=\"{{sosial.link}}\" class=\"sosial-link\">
                      <svg class=\"icon-sosial ic-{{sosial.title}}\">
                            <use xlink:href=\"{{base_url('public/svg/sprite-acvarel.svg#'~sosial.sprite)}}\"></use>
                      </svg>
                    </a>
                {% endif %}
              {% endfor %}
          </div>
        </div>
      </div>
      <div class=\"col-12 col-lg-6 offset-lg-1 offset-xl-2\">
        <div class=\"map\" style=\"position: relative; overflow: hidden\">{{map_block | raw}}</div>
      </div>
    </div>
  </div>
</section>", "views/site/sections/section_contacts.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\section_contacts.tpl");
    }
}
