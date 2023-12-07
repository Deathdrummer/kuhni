<?php

/* views/site/layout/footer.tpl */
class __TwigTemplate_f35b00020242fb3b0b740f65dc54adea84fc14140ea1b717d4a652c9a91820f1 extends Twig_Template
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
        echo "<footer class=\"footer\">
  <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"row g-0 gx-3\">
      <div class=\"col-12 col-md-6 col-lg-4 g-0 gx-3\">
        ";
        // line 5
        if (($context["logo_footer"] ?? null)) {
            // line 6
            echo "          ";
            if ((($context["seo_url"] ?? null) == "index")) {
                // line 7
                echo "            <div class=\"logo\">
              <img src=\"";
                // line 8
                echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, ($context["logo_footer"] ?? null), "file", []))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logo_footer"] ?? null), "alt", []), "html", null, true);
                echo "\" />
            </div>
          ";
            } else {
                // line 11
                echo "            <a href=\"/\" class=\"logo\">
              <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, base_url(("public/filemanager/" . twig_get_attribute($this->env, $this->source, ($context["logo_footer"] ?? null), "file", []))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logo_footer"] ?? null), "alt", []), "html", null, true);
                echo "\" />
            </a>
          ";
            }
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div class=\"footer__desc\">";
        echo twig_escape_filter($this->env, ($context["footer__desc"] ?? null), "html", null, true);
        echo "</div>
      </div>
      <div class=\"col-12 col-md-6 g-0 offset-lg-2 row\">
        <div class=\"col-12 col-lg-7 g-0 gx-3 footer__menu-block\">
          <div class=\"menu-block__item\">
            <div class=\"menu-block__title\">Каталог</div>
            <nav class=\"nav\">
              <ul>
              \t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "categories", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "                      <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "href", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
              </ul>
            </nav>
          </div>
          <div class=\"menu-block__item\">
           <div class=\"menu-block__title\">Покупателю</div>
            <nav class=\"nav\">
              <ul>
              ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "pages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                  <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "href", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              </ul>
            </nav>


            <!-- <nav class=\"nav\">
              <ul>
                <li class=\"menu-block__link-pc-none\">
                  <a href=\"/\">Замер замещения</a>
                </li>
                <li class=\"menu-block__link-pc-none\">
                  <a href=\"/\">Оплата и сроки</a>
                </li>
                <li class=\"menu-block__link-pc-none\">
                  <a href=\"/\">Доставка и монтаж</a>
                </li>
                <li class=\"menu-block__link-pc-none\">
                  <a href=\"/\">Гарантия</a>
                </li>
                <li><a href=\"/\">О компании</a></li>
                <li><a href=\"/\">Контакты</a></li>
              </ul>
            </nav> -->
          </div>
        </div>
        <div class=\"col-12 col-lg-5 g-0 gx-3 block-button\">
          <a class=\"button button--number\" href=\"tel:8 495 120-18-66\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["phone"] ?? null), "city1", []), "html", null, true);
        echo "</a>
          <button class=\"button button--red\" data-bs-toggle=\"modal\" data-bs-target=\"#modalproect\">Заказать проект</button>
        </div>
      </div>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "views/site/layout/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 63,  111 => 38,  100 => 36,  96 => 35,  86 => 27,  75 => 25,  71 => 24,  59 => 16,  56 => 15,  48 => 12,  45 => 11,  37 => 8,  34 => 7,  31 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"footer\">
  <div class=\"container-xxl g-2 g-lg-4\">
    <div class=\"row g-0 gx-3\">
      <div class=\"col-12 col-md-6 col-lg-4 g-0 gx-3\">
        {% if logo_footer %}
          {% if seo_url == 'index' %}
            <div class=\"logo\">
              <img src=\"{{base_url('public/filemanager/'~logo_footer.file)}}\" alt=\"{{logo_footer.alt}}\" />
            </div>
          {% else %}
            <a href=\"/\" class=\"logo\">
              <img src=\"{{base_url('public/filemanager/'~logo_footer.file)}}\" alt=\"{{logo_footer.alt}}\" />
            </a>
          {% endif %}
        {% endif %}
        <div class=\"footer__desc\">{{footer__desc}}</div>
      </div>
      <div class=\"col-12 col-md-6 g-0 offset-lg-2 row\">
        <div class=\"col-12 col-lg-7 g-0 gx-3 footer__menu-block\">
          <div class=\"menu-block__item\">
            <div class=\"menu-block__title\">Каталог</div>
            <nav class=\"nav\">
              <ul>
              \t{% for item in navigation.categories %}
                      <li><a href=\"{{item.href}}\">{{item.title}}</a></li>
                {% endfor %}

              </ul>
            </nav>
          </div>
          <div class=\"menu-block__item\">
           <div class=\"menu-block__title\">Покупателю</div>
            <nav class=\"nav\">
              <ul>
              {% for item in navigation.pages %}
                  <li><a href=\"{{item.href}}\">{{item.title}}</a></li>
                {% endfor %}
              </ul>
            </nav>


            <!-- <nav class=\"nav\">
              <ul>
                <li class=\"menu-block__link-pc-none\">
                  <a href=\"/\">Замер замещения</a>
                </li>
                <li class=\"menu-block__link-pc-none\">
                  <a href=\"/\">Оплата и сроки</a>
                </li>
                <li class=\"menu-block__link-pc-none\">
                  <a href=\"/\">Доставка и монтаж</a>
                </li>
                <li class=\"menu-block__link-pc-none\">
                  <a href=\"/\">Гарантия</a>
                </li>
                <li><a href=\"/\">О компании</a></li>
                <li><a href=\"/\">Контакты</a></li>
              </ul>
            </nav> -->
          </div>
        </div>
        <div class=\"col-12 col-lg-5 g-0 gx-3 block-button\">
          <a class=\"button button--number\" href=\"tel:8 495 120-18-66\">{{phone.city1}}</a>
          <button class=\"button button--red\" data-bs-toggle=\"modal\" data-bs-target=\"#modalproect\">Заказать проект</button>
        </div>
      </div>
    </div>
  </div>
</footer>
", "views/site/layout/footer.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\layout\\footer.tpl");
    }
}
