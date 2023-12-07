<?php

/* views/admin/render/common/callback_item.tpl */
class __TwigTemplate_41ec227d108db0545d8e89d544f2b5f29d94ef3ad02c418f9be2f9c30de52cc2 extends Twig_Template
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
        echo "<tr index=\"";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\">
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_callback[";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][id]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_callback[";
        // line 9
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][success]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "success", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_callback[";
        // line 14
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][subject]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subject", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_callback[";
        // line 19
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][title]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td></td>
    <td class=\"center\">
        <div class=\"buttons inline notop\">
            <button class=\"small remove\" removecb title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/common/callback_item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  50 => 14,  40 => 9,  30 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr index=\"{{index}}\">
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_callback[{{index}}][id]\" value=\"{{item.id}}\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_callback[{{index}}][success]\" value=\"{{item.success}}\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_callback[{{index}}][subject]\" value=\"{{item.subject}}\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_callback[{{index}}][title]\" value=\"{{item.title}}\">
        </div>
    </td>
    <td></td>
    <td class=\"center\">
        <div class=\"buttons inline notop\">
            <button class=\"small remove\" removecb title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
        </div>
    </td>
</tr>", "views/admin/render/common/callback_item.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\common\\callback_item.tpl");
    }
}
