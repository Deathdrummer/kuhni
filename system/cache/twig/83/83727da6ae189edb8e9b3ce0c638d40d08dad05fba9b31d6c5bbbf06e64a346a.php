<?php

/* views/admin/render/common/soc_item.tpl */
class __TwigTemplate_76cd60a3247ffe600fa55a186f6a116a53c455e69fbb51ae3caa3b4976cac2eb extends Twig_Template
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
    <td class=\"center\">
        <div class=\"file single verysmall";
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [])) {
            echo " empty";
        }
        echo "\">
            <label class=\"file__block\" for=\"file";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" filemanager=\"images|svg\">
                <div class=\"file__image\" fileimage>
                    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [])) {
            // line 7
            echo "                        ";
            if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []), 2])])) {
                // line 8
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [])]))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [])])]), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 10
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []), 2]))), "html", null, true);
                echo ".png\" alt=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []), 1]), "html", null, true);
                echo " | файл ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []), 2]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []), 1]), "html", null, true);
                echo " | файл ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []), 2]), "html", null, true);
                echo "\">
                        ";
            }
            // line 12
            echo "                    ";
        } else {
            // line 13
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
            echo "\" alt=\"Нет картинки\">
                    ";
        }
        // line 15
        echo "                </div>
                <div class=\"file__name\"><span filename>";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [])) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [])])]), "html", null, true);
        }
        echo "</span></div>
                <div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
            </label>
            <input
            type=\"hidden\"
            filesrc
            name=\"setting_soc[";
        // line 22
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][icon]\"
            value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []), "html", null, true);
        echo "\"
            id=\"file";
        // line 24
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" />
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_soc[";
        // line 29
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][iconawesome]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "iconawesome", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_soc[";
        // line 34
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][sprite]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "sprite", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_soc[";
        // line 39
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][title]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_soc[";
        // line 44
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][link]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"number\" name=\"setting_soc[";
        // line 49
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "][sort]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "sort", []), "html", null, true);
        echo "\">
        </div>
    </td>
    <td class=\"center\">
        <div class=\"buttons inline notop\">
            <button class=\"small remove\" removesoc title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/common/soc_item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 49,  136 => 44,  126 => 39,  116 => 34,  106 => 29,  98 => 24,  94 => 23,  90 => 22,  79 => 16,  76 => 15,  70 => 13,  67 => 12,  53 => 10,  45 => 8,  42 => 7,  40 => 6,  35 => 4,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr index=\"{{index}}\">
    <td class=\"center\">
        <div class=\"file single verysmall{% if not item.icon %} empty{% endif %}\">
            <label class=\"file__block\" for=\"file{{index}}\" filemanager=\"images|svg\">
                <div class=\"file__image\" fileimage>
                    {% if item.icon %}
                        {% if item.icon|filename(2)|is_img_file %}
                            <img src=\"{{base_url('public/filemanager/__thumbs__/'~item.icon|freshfile)}}\" alt=\"{{item.icon|filename|decodedirsfiles}}\">
                        {% else %}
                            <img src=\"{{base_url('public/images/filetypes/'~item.icon|filename(2))}}.png\" alt=\"{{item.icon|filename(1)}} | файл {{item.icon|filename(2)}}\" title=\"{{item.icon|filename(1)}} | файл {{item.icon|filename(2)}}\">
                        {% endif %}
                    {% else %}
                        <img src=\"{{base_url('public/images/none_img.png')}}\" alt=\"Нет картинки\">
                    {% endif %}
                </div>
                <div class=\"file__name\"><span filename>{% if item.icon %}{{item.icon|filename|decodedirsfiles}}{% endif %}</span></div>
                <div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
            </label>
            <input
            type=\"hidden\"
            filesrc
            name=\"setting_soc[{{index}}][icon]\"
            value=\"{{item.icon}}\"
            id=\"file{{index}}\" />
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_soc[{{index}}][iconawesome]\" value=\"{{item.iconawesome}}\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_soc[{{index}}][sprite]\" value=\"{{item.sprite}}\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_soc[{{index}}][title]\" value=\"{{item.title}}\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"text\" name=\"setting_soc[{{index}}][link]\" value=\"{{item.link}}\">
        </div>
    </td>
    <td>
        <div class=\"field\">
            <input type=\"number\" name=\"setting_soc[{{index}}][sort]\" value=\"{{item.sort}}\">
        </div>
    </td>
    <td class=\"center\">
        <div class=\"buttons inline notop\">
            <button class=\"small remove\" removesoc title=\"Удалить\"><i class=\"fa fa-trash\"></i></button>
        </div>
    </td>
</tr>", "views/admin/render/common/soc_item.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\common\\soc_item.tpl");
    }
}
