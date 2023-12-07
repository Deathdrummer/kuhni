<?php

/* views/admin/render/filemanager/files.tpl */
class __TwigTemplate_aa354856f99c27a79233df28297f3dd4f0cfc7555da90a4aeb79de4b46796b8d extends Twig_Template
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
        if (($context["files"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 3
                echo "\t\t<div class=\"";
                if (($context["to_client"] ?? null)) {
                    echo "clientfilemanager__file";
                } else {
                    echo "filmanager__file";
                }
                echo "\" dirfile=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "src", []), "html", null, true);
                echo "\" namefile=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", []), "html", null, true);
                echo "\" extfile=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "ext", []), "html", null, true);
                echo "\">
\t\t\t<div class=\"image noselect\">
\t\t\t\t";
                // line 5
                if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "name", []), 2])])) {
                    // line 6
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "src", [])]))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "name", []), 1]), "html", null, true);
                    echo " | файл ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "name", []), 2]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "name", []), 1]), "html", null, true);
                    echo " | файл ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "name", []), 2]), "html", null, true);
                    echo "\">
\t\t\t\t";
                } else {
                    // line 8
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "src", []), 2]))), "html", null, true);
                    echo ".png\" alt=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "name", []), 1]), "html", null, true);
                    echo " | файл ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "name", []), 2]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "name", []), 1]), "html", null, true);
                    echo " | файл ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["file"], "name", []), 2]), "html", null, true);
                    echo "\">
\t\t\t\t";
                }
                // line 10
                echo "\t\t\t</div>
\t\t\t<span>";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", []), "html", null, true);
                echo "</span>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 14
        echo "\t";
    }

    public function getTemplateName()
    {
        return "views/admin/render/filemanager/files.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  79 => 11,  76 => 10,  62 => 8,  48 => 6,  46 => 5,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if files %}
\t{% for file in files %}
\t\t<div class=\"{% if to_client %}clientfilemanager__file{% else %}filmanager__file{% endif %}\" dirfile=\"{{file.src}}\" namefile=\"{{file.name}}\" extfile=\"{{file.ext}}\">
\t\t\t<div class=\"image noselect\">
\t\t\t\t{% if file.name|filename(2)|is_img_file %}
\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~file.src|freshfile)}}\" alt=\"{{file.name|filename(1)}} | файл {{file.name|filename(2)}}\" title=\"{{file.name|filename(1)}} | файл {{file.name|filename(2)}}\">
\t\t\t\t{% else %}
\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~file.src|filename(2))}}.png\" alt=\"{{file.name|filename(1)}} | файл {{file.name|filename(2)}}\" title=\"{{file.name|filename(1)}} | файл {{file.name|filename(2)}}\">
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<span>{{file.name}}</span>
\t\t</div>
\t{% endfor %}
{% endif %}\t", "views/admin/render/filemanager/files.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\filemanager\\files.tpl");
    }
}
