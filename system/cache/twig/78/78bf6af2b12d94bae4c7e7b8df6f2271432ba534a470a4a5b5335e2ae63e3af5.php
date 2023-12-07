<?php

/* views/site/sections/primary_main.tpl */
class __TwigTemplate_98df473fb274334cf80d5d8e603005e3e215438c07fca3178a2ca9860d39eeb0 extends Twig_Template
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
        echo "<section class=\"section primary_main\"";
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
\t<div class=\"main__block-photo\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url(("public/filemanager/" . ($context["banner"] ?? null))), "html", null, true);
        echo "\" alt=\"\" />
\t</div>
\t<div class=\"main__block-text\">
\t\t<div class=\"container-xxl g-2 g-lg-4\">
\t\t\t<h1 class=\"main__title\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t\t</div>
\t</div>
\t<hr class=\"main__line\" />
</section>";
    }

    public function getTemplateName()
    {
        return "views/site/sections/primary_main.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  38 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section primary_main\"{% if data_scroll_id %} id=\"{{data_scroll_id}}\"{% endif %}{% if data_scroll_block %} data-scroll-block=\"{{data_scroll_block}}\"{% endif %}>
\t<div class=\"main__block-photo\">
\t\t<img src=\"{{base_url('public/filemanager/'~banner)}}\" alt=\"\" />
\t</div>
\t<div class=\"main__block-text\">
\t\t<div class=\"container-xxl g-2 g-lg-4\">
\t\t\t<h1 class=\"main__title\">{{title}}</h1>
\t\t</div>
\t</div>
\t<hr class=\"main__line\" />
</section>", "views/site/sections/primary_main.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\sections\\primary_main.tpl");
    }
}
