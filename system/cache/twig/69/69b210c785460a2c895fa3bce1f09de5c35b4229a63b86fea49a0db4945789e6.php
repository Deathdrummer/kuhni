<?php

/* views/site/layout/hosting.tpl */
class __TwigTemplate_0491b6cad9abe00c4014d059ad99cb9ddbc01ecc304305037d77527508420688 extends Twig_Template
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
        if (($context["setting_scripts"] ?? null)) {
            echo ($context["setting_scripts"] ?? null);
        }
    }

    public function getTemplateName()
    {
        return "views/site/layout/hosting.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting_scripts %}{{setting_scripts|raw}}{% endif %}", "views/site/layout/hosting.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\site\\layout\\hosting.tpl");
    }
}
