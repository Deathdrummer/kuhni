<?php

/* views/admin/render/sections/form.tpl */
class __TwigTemplate_92795639abe5d53f5186b53bd0ecf1dbaef28213940d2db746080dc8b25ddb07 extends Twig_Template
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
        echo "<h3 class=\"text-center\">Секция: ";
        echo twig_escape_filter($this->env, ($context["section_title"] ?? null), "html", null, true);
        echo "</h3>
<form id=\"sectionForm\">
\t<table class=\"fieldset\">
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Название секции</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"title\" rules=\"empty|length:3,100\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\" readonly placeholder=\"от 3 до 100 символов\">
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"filename\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["filename"] ?? null), "html", null, true);
        echo "\">
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 13
        if ( !($context["filename"] ?? null)) {
            // line 14
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Название файла</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input type=\"text\" name=\"filename\" rules=\"empty|length:3,50|reg:^[a-z_]+\$,i:Ошибка! Название может содержать только латинские символы!\" autocomplete=\"off\" readonly placeholder=\"от 3 до 50 символов a-z и _\">
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 23
        echo "\t\t<tr>
\t\t\t<td colspan=\"2\" class=\"text-left\">
\t\t\t\t<p class=\"mb-10px\">Поля:</p>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"w-12\">Тип</td>
\t\t\t\t\t\t\t<td class=\"w-20\">Переменная</td>
\t\t\t\t\t\t\t<td class=\"w-20\">Лейбл</td>
\t\t\t\t\t\t\t<td>Настройки и данные</td>
\t\t\t\t\t\t\t<td class=\"nowidth\">Опции</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"sectionFields\">
\t\t\t\t\t\t";
        // line 37
        if (($context["fields"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 39
                echo "\t\t\t\t\t\t\t\t";
                $this->loadTemplate("views/admin/render/sections/field.tpl", "views/admin/render/sections/form.tpl", 39)->display(array_merge($context, $context["field"]));
                // line 40
                echo "\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t\t<tr class=\"empty\">
\t\t\t\t\t\t\t\t<td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"mt-20px\">
\t\t\t\t\t<span class=\"mr-6px\">Добавить поле</span>
\t\t\t\t\t<div class=\"select nowidth\">
\t\t\t\t\t\t<select id=\"newsectionfield\">
\t\t\t\t\t\t\t<option value=\"\" selected disabled>Выбрать</option>
\t\t\t\t\t\t\t<optgroup label=\"Однострочное поле\">
\t\t\t\t\t\t\t\t<option value=\"text\">Текст</option>
\t\t\t\t\t\t\t\t<option value=\"number\">Цифры</option>
\t\t\t\t\t\t\t\t<option value=\"tel\">Телефон</option>
\t\t\t\t\t\t\t\t<option value=\"email\">E-mail</option>
\t\t\t\t\t\t\t\t<option value=\"password\">Пароль</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t<option value=\"textarea\">Многострочное поле</option>
\t\t\t\t\t\t\t<optgroup label=\"Множественный выбор\">
\t\t\t\t\t\t\t\t<option value=\"select\">Выпадающий список</option>
\t\t\t\t\t\t\t\t<option value=\"checkbox\">Чекбокс</option>
\t\t\t\t\t\t\t\t<option value=\"radio\">Радио</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t<option value=\"file\">Файл</option>
\t\t\t\t\t\t\t<option value=\"list\">Список</option>
\t\t\t\t\t\t\t<optgroup label=\"Готовые данные\">
\t\t\t\t\t\t\t\t<option value=\"catalog\">Каталог</option>
\t\t\t\t\t\t\t\t<option value=\"categories\">Категории</option>
\t\t\t\t\t\t\t\t<option value=\"pages\">Страница</option>
\t\t\t\t\t\t\t\t<option value=\"hashtags\">Хэштеги</option>
\t\t\t\t\t\t\t\t<option value=\"options\">Опции</option>
\t\t\t\t\t\t\t\t<option value=\"icons\">Значки</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/sections/form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  114 => 42,  111 => 41,  97 => 40,  94 => 39,  76 => 38,  74 => 37,  58 => 23,  47 => 14,  45 => 13,  39 => 10,  34 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3 class=\"text-center\">Секция: {{section_title}}</h3>
<form id=\"sectionForm\">
\t<table class=\"fieldset\">
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Название секции</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"title\" rules=\"empty|length:3,100\" value=\"{{title}}\" autocomplete=\"off\" readonly placeholder=\"от 3 до 100 символов\">
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"filename\" value=\"{{filename}}\">
\t\t\t</td>
\t\t</tr>
\t\t{% if not filename %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Название файла</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input type=\"text\" name=\"filename\" rules=\"empty|length:3,50|reg:^[a-z_]+\$,i:Ошибка! Название может содержать только латинские символы!\" autocomplete=\"off\" readonly placeholder=\"от 3 до 50 символов a-z и _\">
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t<tr>
\t\t\t<td colspan=\"2\" class=\"text-left\">
\t\t\t\t<p class=\"mb-10px\">Поля:</p>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"w-12\">Тип</td>
\t\t\t\t\t\t\t<td class=\"w-20\">Переменная</td>
\t\t\t\t\t\t\t<td class=\"w-20\">Лейбл</td>
\t\t\t\t\t\t\t<td>Настройки и данные</td>
\t\t\t\t\t\t\t<td class=\"nowidth\">Опции</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"sectionFields\">
\t\t\t\t\t\t{% if fields %}
\t\t\t\t\t\t\t{% for field in fields %}
\t\t\t\t\t\t\t\t{% include 'views/admin/render/sections/field.tpl' with field %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr class=\"empty\">
\t\t\t\t\t\t\t\t<td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"mt-20px\">
\t\t\t\t\t<span class=\"mr-6px\">Добавить поле</span>
\t\t\t\t\t<div class=\"select nowidth\">
\t\t\t\t\t\t<select id=\"newsectionfield\">
\t\t\t\t\t\t\t<option value=\"\" selected disabled>Выбрать</option>
\t\t\t\t\t\t\t<optgroup label=\"Однострочное поле\">
\t\t\t\t\t\t\t\t<option value=\"text\">Текст</option>
\t\t\t\t\t\t\t\t<option value=\"number\">Цифры</option>
\t\t\t\t\t\t\t\t<option value=\"tel\">Телефон</option>
\t\t\t\t\t\t\t\t<option value=\"email\">E-mail</option>
\t\t\t\t\t\t\t\t<option value=\"password\">Пароль</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t<option value=\"textarea\">Многострочное поле</option>
\t\t\t\t\t\t\t<optgroup label=\"Множественный выбор\">
\t\t\t\t\t\t\t\t<option value=\"select\">Выпадающий список</option>
\t\t\t\t\t\t\t\t<option value=\"checkbox\">Чекбокс</option>
\t\t\t\t\t\t\t\t<option value=\"radio\">Радио</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t<option value=\"file\">Файл</option>
\t\t\t\t\t\t\t<option value=\"list\">Список</option>
\t\t\t\t\t\t\t<optgroup label=\"Готовые данные\">
\t\t\t\t\t\t\t\t<option value=\"catalog\">Каталог</option>
\t\t\t\t\t\t\t\t<option value=\"categories\">Категории</option>
\t\t\t\t\t\t\t\t<option value=\"pages\">Страница</option>
\t\t\t\t\t\t\t\t<option value=\"hashtags\">Хэштеги</option>
\t\t\t\t\t\t\t\t<option value=\"options\">Опции</option>
\t\t\t\t\t\t\t\t<option value=\"icons\">Значки</option>
\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>", "views/admin/render/sections/form.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\sections\\form.tpl");
    }
}
