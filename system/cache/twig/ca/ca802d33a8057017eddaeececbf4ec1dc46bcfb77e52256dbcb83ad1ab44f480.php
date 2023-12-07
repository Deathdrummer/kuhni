<?php

/* views/admin/render/lists/item.tpl */
class __TwigTemplate_d42bbe170149e8ea96e01fa9b9334666552737a8fe21ec69b09729617edfd2a3 extends Twig_Template
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
        echo "<tr>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"title\" rules=\"empty|string|length:3,100\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea
\t\t\tname=\"fields\"
\t\t\trules=\"empty|string\" 
\t\t\trows=\"3\"
\t\t\tddrtextarealist=\"select;тип;text:однострочное поле,number:цифровое поле,checkbox:чекбокс,select:выпад. список,textarea:многострочное поле,file:файл,category:категория,product:продукт,list:список;w-10|text;имя поля;;w-15|text;лейбл;;w-15|text;значения|text;правила|text;маска\"
\t\t\tjoin=\";\"
\t\t\tload=\"list|admin/lists/get|test\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["fields"] ?? null), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea
\t\t\tname=\"regroup\"
\t\t\trules=\"string\" 
\t\t\trows=\"3\"
\t\t\tddrtextarealist=\"text;Указать поле для реструктуризации;;\"
\t\t\tjoin=\";\">";
        // line 25
        echo twig_escape_filter($this->env, ($context["regroup"] ?? null), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons nowrap inline notop\">
\t\t\t<button listinlist=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"alt2\"";
        if ( !($context["update"] ?? null)) {
            echo " enabled";
        }
        echo "><i class=\"fa fa-object-group\"></i></button>
\t\t</div>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons nowrap inline notop\">
\t\t\t";
        // line 35
        if (($context["update"] ?? null)) {
            // line 36
            echo "\t\t\t\t<button update=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-repeat\"></i></button>
\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t<button save><i class=\"fa fa-save\"></i></button>
\t\t\t";
        }
        // line 40
        echo "\t\t\t<button remove=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/lists/item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 40,  83 => 38,  77 => 36,  75 => 35,  63 => 30,  55 => 25,  42 => 15,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
\t<td>
\t\t<div class=\"field\">
\t\t\t<input type=\"text\" name=\"title\" rules=\"empty|string|length:3,100\" value=\"{{title}}\">
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea
\t\t\tname=\"fields\"
\t\t\trules=\"empty|string\" 
\t\t\trows=\"3\"
\t\t\tddrtextarealist=\"select;тип;text:однострочное поле,number:цифровое поле,checkbox:чекбокс,select:выпад. список,textarea:многострочное поле,file:файл,category:категория,product:продукт,list:список;w-10|text;имя поля;;w-15|text;лейбл;;w-15|text;значения|text;правила|text;маска\"
\t\t\tjoin=\";\"
\t\t\tload=\"list|admin/lists/get|test\">{{fields}}</textarea>
\t\t</div>
\t</td>
\t<td>
\t\t<div class=\"textarea\">
\t\t\t<textarea
\t\t\tname=\"regroup\"
\t\t\trules=\"string\" 
\t\t\trows=\"3\"
\t\t\tddrtextarealist=\"text;Указать поле для реструктуризации;;\"
\t\t\tjoin=\";\">{{regroup}}</textarea>
\t\t</div>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons nowrap inline notop\">
\t\t\t<button listinlist=\"{{id}}\" class=\"alt2\"{% if not update %} enabled{% endif %}><i class=\"fa fa-object-group\"></i></button>
\t\t</div>
\t</td>
\t<td class=\"center\">
\t\t<div class=\"buttons nowrap inline notop\">
\t\t\t{% if update %}
\t\t\t\t<button update=\"{{id}}\"><i class=\"fa fa-repeat\"></i></button>
\t\t\t{% else %}
\t\t\t\t<button save><i class=\"fa fa-save\"></i></button>
\t\t\t{% endif %}
\t\t\t<button remove=\"{{id}}\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t</div>
\t</td>
</tr>", "views/admin/render/lists/item.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\lists\\item.tpl");
    }
}
