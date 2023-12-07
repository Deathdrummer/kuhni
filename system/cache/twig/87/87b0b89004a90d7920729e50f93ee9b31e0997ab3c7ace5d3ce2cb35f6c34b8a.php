<?php

/* views/admin/render/catalogs/list.tpl */
class __TwigTemplate_cc2781623f0cfcc5cc8376a48afc66451df63427b0254b2d09c06e24c964686f extends Twig_Template
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
        if (($context["catalogs"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["catalogs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["catalog"]) {
                // line 3
                echo "\t\t";
                $this->loadTemplate("views/admin/render/catalogs/item.tpl", "views/admin/render/catalogs/list.tpl", 3)->display(array_merge($context, $context["catalog"]));
                // line 4
                echo "\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 5
        echo "\t";
    }

    public function getTemplateName()
    {
        return "views/admin/render/catalogs/list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 5,  46 => 4,  43 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if catalogs %}
\t{% for catalog in catalogs %}
\t\t{% include 'views/admin/render/catalogs/item.tpl' with catalog %}
\t{% endfor %}
{% endif %}\t", "views/admin/render/catalogs/list.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\catalogs\\list.tpl");
    }
}
