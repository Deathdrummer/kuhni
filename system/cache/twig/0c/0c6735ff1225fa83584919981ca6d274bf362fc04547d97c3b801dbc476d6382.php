<?php

/* views/admin/sections/settings.tpl */
class __TwigTemplate_0d5c8ae80748ef0388a93a7de3a89b1517980437d4dcfdd7031063c239141a63 extends Twig_Template
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
        echo "<form class=\"section mb-20px\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\">
\t<div class=\"section_title\">
\t\t<h2>Общие настройки</h2>
\t\t<div class=\"buttons notop\">
\t\t\t<button class=\"large\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "Save\" title=\"Сохранить настройки\"><i class=\"fa fa-save\"></i> <span>Сохранить</span></button>
\t\t</div>
\t</div>
\t
\t
\t<ul class=\"tabstitles\">
\t\t<li id=\"tabContent\">Контент</li>
\t\t<li id=\"tabSoc\">Соц. сети</li>
\t\t<li id=\"tabOpenGraph\">Open Graph</li>
\t\t<li id=\"tabCallback\">Формы обратной связи</li>
\t\t<li id=\"tabSettings\">Системные настройки</li>
\t\t<li id=\"tabPageVars\">Переменные страниц</li>
\t</ul>
\t
\t
\t<div class=\"tabscontent\">
\t\t<div tabid=\"tabContent\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t
\t\t\t\t";
        // line 24
        $this->loadTemplate((($context["form"] ?? null) . "file.tpl"), "views/admin/sections/settings.tpl", 24)->display(array_merge($context, ["label" => "Изображения и иконки", "data" => [0 => ["name" => "setting_logo", "label" => "Логотип", "ext" => "images|svg", "alt" => 1], 1 => ["name" => "setting_logo_footer", "label" => "Логотип в футере", "ext" => "images|svg", "alt" => 1], 2 => ["name" => "setting_favicon", "label" => "Фавикон", "ext" => "images"]]]));
        // line 29
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 32
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 32)->display(array_merge($context, ["label" => "телефоны", "name" => "setting_phone", "rules" => "empty", "data" => [0 => ["name" => "mobile1", "label" => "Мобильный телефон 1", "phonemask" => 1], 1 => ["name" => "mobile12", "label" => "Мобильный телефон 2", "phonemask" => 1], 2 => ["name" => "free1", "label" => "Бесплатный телефон 1", "mask" => "8 (800) ^^^-^^-^^"], 3 => ["name" => "free2", "label" => "Бесплатный телефон 2", "mask" => "8 (800) ^^^-^^-^^"], 4 => ["name" => "city1", "label" => "Городской телефон 1", "mask" => "8 (^^^) ^^^-^^-^^"], 5 => ["name" => "city2", "label" => "Городской телефон 2", "mask" => "8 (^^^) ^^^-^^-^^"]]]));
        // line 40
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 42
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 42)->display(array_merge($context, ["label" => "E-mail адреса", "name" => "setting_email", "rules" => "empty", "data" => [0 => ["name" => "from", "label" => "От кого приходят письма", "rules" => "email", "placeholder" => "example@site.ru"], 1 => ["name" => "to", "label" => "Куда приходят письма", "rules" => "email", "placeholder" => "example@site.ru"], 2 => ["name" => "subject", "label" => "Заголовок письма", "rules" => "string", "placeholder" => "Новая заявка"], 3 => ["name" => "from_name", "label" => "Отправитель", "rules" => "string", "placeholder" => "site.ru"], 4 => ["name" => "contact", "label" => "Отобразить на сайте", "rules" => "email", "placeholder" => "example@site.ru"]]]));
        // line 49
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 51
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 51)->display(array_merge($context, ["label" => "настройки SMPT", "name" => "setting_smtp", "rules" => "empty", "data" => [0 => ["name" => "host", "label" => "Хост", "rules" => "string", "placeholder" => "Имя сервера"], 1 => ["name" => "user", "label" => "Пользователь", "rules" => "string", "placeholder" => ""], 2 => ["name" => "pass", "label" => "Пароль", "rules" => "string", "type" => "password", "placeholder" => "Пароль от почты"], 3 => ["name" => "port", "label" => "Порт", "rules" => "string", "placeholder" => ""], 4 => ["name" => "crypto", "label" => "Шифрование", "rules" => "string", "placeholder" => "STARTTLS"]]]));
        // line 58
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 61
        $this->loadTemplate((($context["form"] ?? null) . "textarea.tpl"), "views/admin/sections/settings.tpl", 61)->display(array_merge($context, ["label" => "Мета-теги", "rows" => 10, "name" => "setting_metatags"]));
        // line 62
        echo "\t\t\t\t";
        $this->loadTemplate((($context["form"] ?? null) . "textarea.tpl"), "views/admin/sections/settings.tpl", 62)->display(array_merge($context, ["label" => "JS функции (работают только на хостинге)", "rows" => 20, "name" => "setting_scripts"]));
        // line 63
        echo "\t\t\t\t";
        $this->loadTemplate((($context["form"] ?? null) . "textarea.tpl"), "views/admin/sections/settings.tpl", 63)->display(array_merge($context, ["label" => "Скрипты в <head>", "rows" => 10, "name" => "setting_scripts_head"]));
        // line 64
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 66
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 66)->display(array_merge($context, ["label" => "Количество товаров на странице", "name" => "setting_count_products", "type" => "number", "cls" => "w-60px"]));
        // line 67
        echo "\t\t\t\t
\t\t\t\t";
        // line 68
        $this->loadTemplate((($context["form"] ?? null) . "select.tpl"), "views/admin/sections/settings.tpl", 68)->display(array_merge($context, ["label" => "Тип карточки товара", "name" => "setting_card_variant", "data" => [0 => ["value" => "vertical", "title" => "Вертикальные изображения"], 1 => ["value" => "horizontal", "title" => "Горионтальные изображения"]], "cls" => "w-40rem"]));
        // line 72
        echo "\t\t\t\t
\t\t\t\t";
        // line 73
        $this->loadTemplate((($context["form"] ?? null) . "select.tpl"), "views/admin/sections/settings.tpl", 73)->display(array_merge($context, ["label" => "Отображение 3D модели в вертикальном типе карточки", "name" => "setting_show_3d_variant", "data" => [0 => ["value" => "in_main", "title" => "Иконка в главной картинке"], 1 => ["value" => "standalone", "title" => "Отдельный элемент"]], "cls" => "w-40rem"]));
        // line 77
        echo "\t\t\t\t
\t\t\t\t";
        // line 78
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 78)->display(array_merge($context, ["label" => "Знак валюты", "name" => "setting_currency", "cls" => "w-60px"]));
        // line 79
        echo "\t\t\t\t
\t\t\t\t";
        // line 80
        $this->loadTemplate((($context["form"] ?? null) . "file.tpl"), "views/admin/sections/settings.tpl", 80)->display(array_merge($context, ["label" => "PDF каталог", "name" => "setting_pdf_catalog", "ext" => "docs"]));
        // line 81
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 83
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 83)->display(array_merge($context, ["label" => "Плавающая иконка", "name" => "setting_stockicon", "data" => [0 => ["name" => "url", "label" => "URL страницы", "rules" => "string", "placeholder" => "URL страницы", "cls" => "w-60rem"], 1 => ["name" => "link_title", "label" => "Title ссылки", "rules" => "string", "placeholder" => "Title ссылки", "cls" => "w-60rem"]]]));
        // line 87
        echo "\t\t\t\t
\t\t\t\t";
        // line 88
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 88)->display(array_merge($context, ["label" => "ID иконки прокрутки вверх", "name" => "setting_scrolltop", "cls" => "w-20rem"]));
        // line 89
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 91
        $this->loadTemplate((($context["form"] ?? null) . "textarea.tpl"), "views/admin/sections/settings.tpl", 91)->display(array_merge($context, ["label" => "Надпись в шапке сайта", "markdown" => 1, "rows" => 4, "name" => "setting_header_label"]));
        // line 92
        echo "\t\t\t\t
\t\t\t\t";
        // line 93
        $this->loadTemplate((($context["form"] ?? null) . "textarea.tpl"), "views/admin/sections/settings.tpl", 93)->display(array_merge($context, ["label" => "Описание в футере", "rows" => 2, "name" => "setting_footer__desc"]));
        // line 94
        echo "\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t";
        // line 123
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 131
        echo "\t\t\t</table>
\t\t</div>
\t\t
\t\t<div tabid=\"tabSoc\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"default\">Социальные сети</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-66px\">Иконка</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Иконка fontawesome</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Иконка sprite</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-40rem\">Название</td>
\t\t\t\t\t\t\t\t\t\t<td>Ссылка</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-60px\">Сортировка</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-60px\">Опции</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"socList\">
\t\t\t\t\t\t\t\t\t";
        // line 153
        if (($context["setting_soc"] ?? null)) {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["setting_soc"] ?? null));
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
            foreach ($context['_seq'] as $context["index"] => $context["item"]) {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("views/admin/render/common/soc_item.tpl", "views/admin/sections/settings.tpl", 155)->display(array_merge($context, ["index" => $context["index"], "item" => $context["item"]]));
                // line 156
                echo "\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t\t\t\t\t\t<tr class=\"empty\">
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons right notop\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"addSocItem\">Добавить</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabOpenGraph\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t";
        // line 183
        $this->loadTemplate((($context["form"] ?? null) . "file.tpl"), "views/admin/sections/settings.tpl", 183)->display(array_merge($context, ["label" => "Картинка", "name" => "setting_og|image", "ext" => "images"]));
        // line 184
        echo "\t\t\t\t
\t\t\t\t";
        // line 185
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 185)->display(array_merge($context, ["label" => "Заголовок", "name" => "setting_og|title", "cls" => "w-60rem"]));
        // line 186
        echo "\t\t\t\t";
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 186)->display(array_merge($context, ["label" => "URL", "name" => "setting_og|url", "cls" => "w-60rem"]));
        // line 187
        echo "\t\t\t\t";
        $this->loadTemplate((($context["form"] ?? null) . "field.tpl"), "views/admin/sections/settings.tpl", 187)->display(array_merge($context, ["label" => "Название сайта", "name" => "setting_og|site_name", "cls" => "w-60rem"]));
        // line 188
        echo "\t\t\t\t
\t\t\t\t";
        // line 189
        $this->loadTemplate((($context["form"] ?? null) . "textarea.tpl"), "views/admin/sections/settings.tpl", 189)->display(array_merge($context, ["label" => "Описание", "rows" => 4, "name" => "setting_og|description", "cls" => "w-60rem"]));
        // line 190
        echo "\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabCallback\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"default\">Формы обратной связи</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-20rem\">Идентификатор формы</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Текст успешной отправки</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Тема письма</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Заголовок письма</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-60px\">Опции</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"cbList\">
\t\t\t\t\t\t\t\t\t";
        // line 212
        if (($context["setting_callback"] ?? null)) {
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["setting_callback"] ?? null));
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
            foreach ($context['_seq'] as $context["index"] => $context["item"]) {
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("views/admin/render/common/callback_item.tpl", "views/admin/sections/settings.tpl", 214)->display(array_merge($context, ["index" => $context["index"], "item" => $context["item"]]));
                // line 215
                echo "\t\t\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t<tr class=\"empty\">
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons right notop\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"addCbItem\">Добавить</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t\t";
        // line 298
        echo "\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabSettings\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t";
        // line 303
        $this->loadTemplate((($context["form"] ?? null) . "checkbox.tpl"), "views/admin/sections/settings.tpl", 303)->display(array_merge($context, ["label" => "Задавать переменные в категориях", "v" => 2, "data" => [0 => ["name" => "setting_setvarstocats", "value" => "insta", "inline" => 0]]]));
        // line 306
        echo "\t\t\t\t
\t\t\t\t";
        // line 307
        $this->loadTemplate((($context["form"] ?? null) . "checkbox.tpl"), "views/admin/sections/settings.tpl", 307)->display(array_merge($context, ["label" => "Задавать переменную для страницы карточки товара в каталогах", "v" => 2, "data" => [0 => ["name" => "setting_setvarstocatalogs", "value" => "insta", "inline" => 0]]]));
        // line 310
        echo "\t\t\t\t
\t\t\t\t";
        // line 311
        $this->loadTemplate((($context["form"] ?? null) . "checkbox.tpl"), "views/admin/sections/settings.tpl", 311)->display(array_merge($context, ["label" => "Строгий режим фильтров товаров в каталоге", "name" => "setting_strict_filters", "v" => 2, "data" => [0 => ["name" => "tags", "label" => "Теги", "value" => 1], 1 => ["name" => "icons", "label" => "Значки", "value" => 1]]]));
        // line 315
        echo "\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabPageVars\">
\t\t\t<ul class=\"tabstitles sub mt-30px mb-20px\">
\t\t\t\t";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 322
            echo "\t\t\t\t\t<li id=\"subTabPage";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "page_title", []), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        echo "\t\t\t</ul>
\t\t\t
\t\t\t<div class=\"tabscontent\">
\t\t\t\t";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_pages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 328
            echo "\t\t\t\t\t<div tabid=\"subTabPage";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 329
            $this->loadTemplate((($context["form"] ?? null) . "textarea.tpl"), "views/admin/sections/settings.tpl", 329)->display(array_merge($context, ["label" => "Переменные", "rows" => 10, "name" => ("setting_page_vars|" . twig_get_attribute($this->env, $this->source, $context["page"], "id", [])), "cls" => "w-60rem"]));
            // line 330
            echo "\t\t\t\t\t</div>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t
\t\t
\t
</form>




<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\t// ---------------------------------------- Соц. сети
\t\$('#addSocItem').on(tapEvent, function() {
\t\tlet index = \$('#socList').find('tr:not(.empty):last').attr('index') || 0;
\t\tgetAjaxHtml('admin/common/get_soc_item', {index: parseInt(index) + 1}, function(html) {
\t\t\tlet emptyRow = \$('#socList').find('tr.empty');
\t\t\tif (emptyRow.length) {
\t\t\t\t\$(emptyRow).remove();
\t\t\t}
\t\t\t\$('#socList').append(html);
\t\t}, function() {
\t\t\t
\t\t});
\t});
\t
\t
\t\$('#socList').on(tapEvent, '[removesoc]', function() {
\t\t\$(this).closest('tr').remove();
\t});
\t
\t
\t
\t
\t
\t
\t// ---------------------------------------- Формы обр. связи
\t\$('#addCbItem').on(tapEvent, function() {
\t\tlet index = \$('#cbList').find('tr:not(.empty):last').attr('index') || 0;
\t\tgetAjaxHtml('admin/common/get_cb_item', {index: parseInt(index) + 1}, function(html) {
\t\t\tlet emptyRow = \$('#cbList').find('tr.empty');
\t\t\tif (emptyRow.length) {
\t\t\t\t\$(emptyRow).remove();
\t\t\t}
\t\t\t\$('#cbList').append(html);
\t\t}, function() {
\t\t\t
\t\t});
\t});
\t
\t
\t
\t\$('#cbList').on(tapEvent, '[removecb]', function() {
\t\t\$(this).closest('tr').remove();
\t});
\t
\t
\t
\t
\t
\t
\t
\t//--------------------------------------------- Файлменеджер
\tclientFileManager({
\t\tonChooseFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\tenableScroll();
\t\t}
\t});
\t
\t\$('#settingsSave').scrollFix({pos: 500});
\t
\t// --------------------------------------------------------------------------------------- Сохранение основных настроек
\t\$('#settingsSave').on(tapEvent, function() {
\t\t\$('#settings').formSubmit({
\t\t\turl: 'admin/save_settings',
\t\t\tfields: {outer: 'setting_'},
\t\t\tignoreNames: 'files',
\t\t\tsuccess: function(response) {
\t\t\t\tif (response) {
\t\t\t\t\tnotify('Настройки сохранены!');
\t\t\t\t\t\$('table.fieldset').find('.file__block_changed').removeClass('file__block_changed');
\t\t\t\t\t\$('table.fieldset').find('.changed').removeClass('changed');
\t\t\t\t} 
\t\t\t\telse notify('Ошибка сохранения данных', 'error');
\t\t\t},
\t\t\terror: function(e) {
\t\t\t\tnotify('Системная ошибка!', 'error');
\t\t\t\tshowError(e);
\t\t\t},
\t\t\tformError: function(fields) {
\t\t\t\tif (fields) {
\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t
\t
\t
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "views/admin/sections/settings.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 332,  424 => 330,  422 => 329,  417 => 328,  400 => 327,  395 => 324,  384 => 322,  380 => 321,  372 => 315,  370 => 311,  367 => 310,  365 => 307,  362 => 306,  360 => 303,  353 => 298,  325 => 221,  319 => 217,  316 => 216,  302 => 215,  299 => 214,  281 => 213,  279 => 212,  255 => 190,  253 => 189,  250 => 188,  247 => 187,  244 => 186,  242 => 185,  239 => 184,  237 => 183,  214 => 162,  208 => 158,  205 => 157,  191 => 156,  188 => 155,  170 => 154,  168 => 153,  144 => 131,  139 => 123,  135 => 94,  133 => 93,  130 => 92,  128 => 91,  124 => 89,  122 => 88,  119 => 87,  117 => 83,  113 => 81,  111 => 80,  108 => 79,  106 => 78,  103 => 77,  101 => 73,  98 => 72,  96 => 68,  93 => 67,  91 => 66,  87 => 64,  84 => 63,  81 => 62,  79 => 61,  74 => 58,  72 => 51,  68 => 49,  66 => 42,  62 => 40,  60 => 32,  55 => 29,  53 => 24,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"section mb-20px\" id=\"{{id}}\" autocomplete=\"off\">
\t<div class=\"section_title\">
\t\t<h2>Общие настройки</h2>
\t\t<div class=\"buttons notop\">
\t\t\t<button class=\"large\" id=\"{{id}}Save\" title=\"Сохранить настройки\"><i class=\"fa fa-save\"></i> <span>Сохранить</span></button>
\t\t</div>
\t</div>
\t
\t
\t<ul class=\"tabstitles\">
\t\t<li id=\"tabContent\">Контент</li>
\t\t<li id=\"tabSoc\">Соц. сети</li>
\t\t<li id=\"tabOpenGraph\">Open Graph</li>
\t\t<li id=\"tabCallback\">Формы обратной связи</li>
\t\t<li id=\"tabSettings\">Системные настройки</li>
\t\t<li id=\"tabPageVars\">Переменные страниц</li>
\t</ul>
\t
\t
\t<div class=\"tabscontent\">
\t\t<div tabid=\"tabContent\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t
\t\t\t\t{% include form~'file.tpl' with {'label': 'Изображения и иконки', 'data': [
\t\t\t\t\t{'name': 'setting_logo', 'label': 'Логотип', 'ext': 'images|svg', 'alt': 1},
\t\t\t\t\t{'name': 'setting_logo_footer', 'label': 'Логотип в футере', 'ext': 'images|svg', 'alt': 1},
\t\t\t\t\t{'name': 'setting_favicon', 'label': 'Фавикон', 'ext': 'images'}
\t\t\t\t]} %}
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'телефоны', 'name': 'setting_phone', 'rules': 'empty', 'data': [
\t\t\t\t\t{'name': 'mobile1', 'label': 'Мобильный телефон 1', 'phonemask': 1},
\t\t\t\t\t{'name': 'mobile12', 'label': 'Мобильный телефон 2', 'phonemask': 1},
\t\t\t\t\t{'name': 'free1', 'label': 'Бесплатный телефон 1', 'mask': '8 (800) ^^^-^^-^^'},
\t\t\t\t\t{'name': 'free2', 'label': 'Бесплатный телефон 2', 'mask': '8 (800) ^^^-^^-^^'},
\t\t\t\t\t{'name': 'city1', 'label': 'Городской телефон 1', 'mask': '8 (^^^) ^^^-^^-^^'},
\t\t\t\t\t{'name': 'city2', 'label': 'Городской телефон 2', 'mask': '8 (^^^) ^^^-^^-^^'}
\t\t\t\t]} %}
\t\t\t\t
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'E-mail адреса', 'name': 'setting_email', 'rules': 'empty', 'data': [
\t\t\t\t\t{'name': 'from', 'label': 'От кого приходят письма', 'rules': 'email', 'placeholder': 'example@site.ru'},
\t\t\t\t\t{'name': 'to', 'label': 'Куда приходят письма', 'rules': 'email', 'placeholder': 'example@site.ru'},
\t\t\t\t\t{'name': 'subject', 'label': 'Заголовок письма', 'rules': 'string', 'placeholder': 'Новая заявка'},
\t\t\t\t\t{'name': 'from_name', 'label': 'Отправитель', 'rules': 'string', 'placeholder': 'site.ru'},
\t\t\t\t\t{'name': 'contact', 'label': 'Отобразить на сайте', 'rules': 'email', 'placeholder': 'example@site.ru'},
\t\t\t\t]} %}
\t\t\t\t
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'настройки SMPT', 'name': 'setting_smtp', 'rules': 'empty', 'data': [
\t\t\t\t\t{'name': 'host', 'label': 'Хост', 'rules': 'string', 'placeholder': 'Имя сервера'},
\t\t\t\t\t{'name': 'user', 'label': 'Пользователь', 'rules': 'string', 'placeholder': ''},
\t\t\t\t\t{'name': 'pass', 'label': 'Пароль', 'rules': 'string', 'type': 'password', 'placeholder': 'Пароль от почты'},
\t\t\t\t\t{'name': 'port', 'label': 'Порт', 'rules': 'string', 'placeholder': ''},
\t\t\t\t\t{'name': 'crypto', 'label': 'Шифрование', 'rules': 'string', 'placeholder': 'STARTTLS'},
\t\t\t\t]} %}
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t{% include form~'textarea.tpl' with {'label': 'Мета-теги', 'rows': 10, 'name': 'setting_metatags'} %}
\t\t\t\t{% include form~'textarea.tpl' with {'label': 'JS функции (работают только на хостинге)', 'rows': 20, 'name': 'setting_scripts'} %}
\t\t\t\t{% include form~'textarea.tpl' with {'label': 'Скрипты в <head>', 'rows': 10, 'name': 'setting_scripts_head'} %}
\t\t\t\t
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'Количество товаров на странице', 'name': 'setting_count_products', 'type': 'number', 'cls': 'w-60px'} %}
\t\t\t\t
\t\t\t\t{% include form~'select.tpl' with {'label': 'Тип карточки товара', 'name': 'setting_card_variant', 'data': [
\t\t\t\t\t{'value': 'vertical', 'title': 'Вертикальные изображения'},
\t\t\t\t\t{'value': 'horizontal', 'title': 'Горионтальные изображения'}
\t\t\t\t], 'cls': 'w-40rem'} %}
\t\t\t\t
\t\t\t\t{% include form~'select.tpl' with {'label': 'Отображение 3D модели в вертикальном типе карточки', 'name': 'setting_show_3d_variant', 'data': [
\t\t\t\t\t{'value': 'in_main', 'title': 'Иконка в главной картинке'},
\t\t\t\t\t{'value': 'standalone', 'title': 'Отдельный элемент'}
\t\t\t\t], 'cls': 'w-40rem'} %}
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'Знак валюты', 'name': 'setting_currency', 'cls': 'w-60px'} %}
\t\t\t\t
\t\t\t\t{% include form~'file.tpl' with {'label': 'PDF каталог', 'name': 'setting_pdf_catalog', 'ext': 'docs'} %}
\t\t\t\t
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'Плавающая иконка', 'name': 'setting_stockicon', 'data': [
\t\t\t\t\t{'name': 'url', 'label': 'URL страницы', 'rules': 'string', 'placeholder': 'URL страницы', 'cls': 'w-60rem'},
\t\t\t\t\t{'name': 'link_title', 'label': 'Title ссылки', 'rules': 'string', 'placeholder': 'Title ссылки', 'cls': 'w-60rem'}
\t\t\t\t]} %}
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'ID иконки прокрутки вверх', 'name': 'setting_scrolltop', 'cls': 'w-20rem'} %}
\t\t\t\t
\t\t\t\t
\t\t\t\t{% include form~'textarea.tpl' with {'label': 'Надпись в шапке сайта', 'markdown': 1, 'rows': 4, 'name': 'setting_header_label'} %}
\t\t\t\t
\t\t\t\t{% include form~'textarea.tpl' with {'label': 'Описание в футере', 'rows': 2, 'name': 'setting_footer__desc'} %}
\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t{#{% include form~'field.tpl' with {'label': 'тест', 'name': 'setting_site|foo'} %}
\t\t\t\t{% include form~'field.tpl' with {'label': 'Просто переменная', 'name': 'setting_site|variable'} %}
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'тест 2', 'name': 'setting_site|title'} %}
\t\t\t\t{% include form~'field.tpl' with {'label': 'Просто переменная 2', 'name': 'setting_site|variable'} %}\t\t\t
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'Заголовок сайта', 'type': 'tel', 'phonemask': 1, 'code': '+7', 'name': 'setting_site_tool'} %}
\t\t\t\t
\t\t\t\t{% include form~'textarea.tpl' with {'label': 'Meta description', 'editor': 1, 'name': 'setting_description'} %}
\t\t\t\t
\t\t\t\t{% include form~'select.tpl' with {'label': 'Тип Карточки товара', 'name': 'setting_card_variant', 'data': [
\t\t\t\t\t{'value': 'vertical', 'title': 'Вертикальные изображения'},
\t\t\t\t\t{'value': 'horizontal', 'title': 'Горионтальные изображения'}
\t\t\t\t], 'cls': 'w-40rem'} %}
\t\t\t\t
\t\t\t\t{% include form~'checkbox.tpl' with {'label': 'checkbox', 'v': 2, 'data': [
\t\t\t\t\t{'name': 'setting_first', 'label': 'Инстаграм', 'value': 'insta', 'inline': 0},
\t\t\t\t\t{'name': 'setting_second', 'label': 'Инстаграм2', 'value': 'insta2', 'inline': 0},
\t\t\t\t\t{'name': 'setting_third', 'label': 'Инстаграм3', 'value': 'insta3', 'inline': 0}
\t\t\t\t]} %}
\t\t\t\t
\t\t\t\t{% include form~'radio.tpl' with {'label': 'Заголовок radio', 'name': 'setting_site|radio', 'data': [
\t\t\t\t\t{'label': 'Инстаграм 4', 'value': 'insta4', 'inline': 1},
\t\t\t\t\t{'label': 'Инстаграм 5', 'value': 'insta5', 'inline': 1},
\t\t\t\t\t{'label': 'Инстаграм 6', 'value': 'insta6', 'inline': 0},
\t\t\t\t\t{'label': 'Инстаграм 7', 'value': 'insta7', 'inline': 0}
\t\t\t\t]} %}#}
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t{#{% include form~'file.tpl' with {'label': 'Это лейбл для файла', 'data': [
\t\t\t\t\t{'name': 'foo', 'label': 'Инстаграм', 'ext': 'images'},
\t\t\t\t\t{'name': 'bar', 'label': 'Инстаграм2', 'ext': 'images'},
\t\t\t\t\t{'name': 'rool', 'label': 'Инстаграм3', 'ext': 'jpg|jpeg|png|gif'}
\t\t\t\t]} %}#}
\t\t\t</table>
\t\t</div>
\t\t
\t\t<div tabid=\"tabSoc\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"default\">Социальные сети</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-66px\">Иконка</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Иконка fontawesome</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Иконка sprite</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-40rem\">Название</td>
\t\t\t\t\t\t\t\t\t\t<td>Ссылка</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-60px\">Сортировка</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-60px\">Опции</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"socList\">
\t\t\t\t\t\t\t\t\t{% if setting_soc %}
\t\t\t\t\t\t\t\t\t\t{% for index, item in setting_soc %}
\t\t\t\t\t\t\t\t\t\t\t{% include 'views/admin/render/common/soc_item.tpl' with {index: index, item: item} %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr class=\"empty\">
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons right notop\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"addSocItem\">Добавить</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabOpenGraph\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t{% include form~'file.tpl' with {'label': 'Картинка', 'name': 'setting_og|image', 'ext': 'images'} %}
\t\t\t\t
\t\t\t\t{% include form~'field.tpl' with {'label': 'Заголовок', 'name': 'setting_og|title', 'cls': 'w-60rem'} %}
\t\t\t\t{% include form~'field.tpl' with {'label': 'URL', 'name': 'setting_og|url', 'cls': 'w-60rem'} %}
\t\t\t\t{% include form~'field.tpl' with {'label': 'Название сайта', 'name': 'setting_og|site_name', 'cls': 'w-60rem'} %}
\t\t\t\t
\t\t\t\t{% include form~'textarea.tpl' with {'label': 'Описание', 'rows': 4, 'name': 'setting_og|description', 'cls': 'w-60rem'} %}
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabCallback\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"default\">Формы обратной связи</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-20rem\">Идентификатор формы</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Текст успешной отправки</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Тема письма</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-30rem\">Заголовок письма</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"w-60px\">Опции</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody id=\"cbList\">
\t\t\t\t\t\t\t\t\t{% if setting_callback %}
\t\t\t\t\t\t\t\t\t\t{% for index, item in setting_callback %}
\t\t\t\t\t\t\t\t\t\t\t{% include 'views/admin/render/common/callback_item.tpl' with {index: index, item: item} %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr class=\"empty\">
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons right notop\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"addCbItem\">Добавить</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t\t{# <ul class=\"tabstitles sub mt-30px mb-20px\">
\t\t\t\t<li id=\"subTabHeaderCallback\">Заказать звонок в шапке сайте</li>
\t\t\t\t<li id=\"subTabPromoCallback\">Получить промокод</li>
\t\t\t\t<li id=\"subTabIndividualCallback\">Индивидульный подход</li>
\t\t\t\t<li id=\"subTabCardCallback\">Заказать в карточке товара</li>
\t\t\t\t<li id=\"subTabOtherEquipment\">Желаете в другой комплектации</li>
\t\t\t\t<li id=\"subTabCommonCallback\">Кнопка обратной связи</li>
\t\t\t</ul>
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t<div class=\"tabscontent\">
\t\t\t\t{% for k, tabid in ['subTabHeaderCallback', 'subTabPromoCallback', 'subTabIndividualCallback', 'subTabCardCallback', 'subTabOtherEquipment', 'subTabCommonCallback'] %}
\t\t\t\t\t<div tabid=\"{{tabid}}\">
\t\t\t\t\t\t<table class=\"fieldset\">
\t\t\t\t\t\t\t{% include form~'field.tpl' with {'label': 'Заголовок в форме на сайте', 'name': 'setting_callbackform|'~(k+1)~'|title', 'cls': 'w-100rem'} %}
\t\t\t\t\t\t\t{% include form~'field.tpl' with {'label': 'Заголовок в письме', 'name': 'setting_callbackform|'~(k+1)~'|title_mail', 'cls': 'w-100rem'} %}
\t\t\t\t\t\t\t{% include form~'field.tpl' with {'label': 'Сообщение при успешной отправке', 'name': 'setting_callbackform|'~(k+1)~'|send_success', 'cls': 'w-100rem'} %}
\t\t\t\t\t\t\t{% include form~'field.tpl' with {'label': 'Текст кнопки', 'name': 'setting_callbackform|'~(k+1)~'|button', 'cls': 'w-100rem'} %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% include form~'textarea.tpl' with {'label': 'Описание в форме', 'name': 'setting_callbackform|'~(k+1)~'|desc', 'cls': 'w-100rem'} %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if k == 1 %}
\t\t\t\t\t\t\t\t{% include form~'field.tpl' with {'label': 'Заголовок в письме для клиента', 'name': 'setting_title_promo', 'cls': 'w-100rem'} %}
\t\t\t\t\t\t\t\t{% include form~'field.tpl' with {'label': 'Тема письма для клиента', 'name': 'setting_subject_promo', 'cls': 'w-100rem'} %}
\t\t\t\t\t\t\t\t{% include form~'field.tpl' with {'label': 'Промокод маска: * - буква с нижним регистром, # - буква с верхним регистром, ? - цифра', 'name': 'setting_promocode', 'cls': 'w-30rem'} %}
\t\t\t\t\t\t\t\t{% include form~'textarea.tpl' with {'label': 'текст по промокоду в письме', 'name': 'setting_promo_desc', 'cls': 'w-100rem'} %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% include form~'field.tpl' with {'label': 'Цель Яндекс метрики', 'name': 'setting_callbackform|'~(k+1)~'|reachgoal', 'cls': 'w-100rem'} %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% include form~'checkbox.tpl' with {'label': 'Отобразить поля в форме', 'name': 'setting_callbackform|'~(k+1)~'|fields', 'v': 2, 'data': [
\t\t\t\t\t\t\t\t{'name': 'name', 'label': 'Имя', 'value': 1, 'small': 1, 'inline': 1},
\t\t\t\t\t\t\t\t{'name': 'phone', 'label': 'Телефон', 'value': 1, 'small': 1, 'inline': 1},
\t\t\t\t\t\t\t\t{'name': 'email', 'label': 'E-mail', 'value': 1, 'small': 1, 'inline': 1},
\t\t\t\t\t\t\t\t{'name': 'city', 'label': 'Город', 'value': 1, 'small': 1, 'inline': 1}
\t\t\t\t\t\t\t]} %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% include form~'checkbox.tpl' with {'label': 'Обязательное поле', 'name': 'setting_callbackform|'~(k+1)~'|required', 'v': 2, 'data': [
\t\t\t\t\t\t\t\t{'name': 'name', 'label': 'Имя', 'value': 1, 'small': 1, 'inline': 1},
\t\t\t\t\t\t\t\t{'name': 'phone', 'label': 'Телефон', 'value': 1, 'small': 1, 'inline': 1},
\t\t\t\t\t\t\t\t{'name': 'email', 'label': 'E-mail', 'value': 1, 'small': 1, 'inline': 1},
\t\t\t\t\t\t\t\t{'name': 'city', 'label': 'Город', 'value': 1, 'small': 1, 'inline': 1}
\t\t\t\t\t\t\t]} %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div> #}
\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabSettings\">
\t\t\t<table class=\"fieldset\">
\t\t\t\t{% include form~'checkbox.tpl' with {'label': 'Задавать переменные в категориях', 'v': 2, 'data': [
\t\t\t\t\t{'name': 'setting_setvarstocats', 'value': 'insta', 'inline': 0}
\t\t\t\t]} %}
\t\t\t\t
\t\t\t\t{% include form~'checkbox.tpl' with {'label': 'Задавать переменную для страницы карточки товара в каталогах', 'v': 2, 'data': [
\t\t\t\t\t{'name': 'setting_setvarstocatalogs', 'value': 'insta', 'inline': 0}
\t\t\t\t]} %}
\t\t\t\t
\t\t\t\t{% include form~'checkbox.tpl' with {'label': 'Строгий режим фильтров товаров в каталоге', 'name': 'setting_strict_filters', 'v': 2, 'data': [
\t\t\t\t\t{'name': 'tags', 'label': 'Теги', 'value': 1},
\t\t\t\t\t{'name': 'icons', 'label': 'Значки', 'value': 1}
\t\t\t\t]} %}
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabPageVars\">
\t\t\t<ul class=\"tabstitles sub mt-30px mb-20px\">
\t\t\t\t{% for page in all_pages %}
\t\t\t\t\t<li id=\"subTabPage{{page.id}}\">{{page.page_title}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t
\t\t\t<div class=\"tabscontent\">
\t\t\t\t{% for page in all_pages %}
\t\t\t\t\t<div tabid=\"subTabPage{{page.id}}\">
\t\t\t\t\t\t{% include form~'textarea.tpl' with {'label': 'Переменные', 'rows': 10, 'name': 'setting_page_vars|'~page.id, 'cls': 'w-60rem'} %}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t
\t\t
\t
</form>




<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\t// ---------------------------------------- Соц. сети
\t\$('#addSocItem').on(tapEvent, function() {
\t\tlet index = \$('#socList').find('tr:not(.empty):last').attr('index') || 0;
\t\tgetAjaxHtml('admin/common/get_soc_item', {index: parseInt(index) + 1}, function(html) {
\t\t\tlet emptyRow = \$('#socList').find('tr.empty');
\t\t\tif (emptyRow.length) {
\t\t\t\t\$(emptyRow).remove();
\t\t\t}
\t\t\t\$('#socList').append(html);
\t\t}, function() {
\t\t\t
\t\t});
\t});
\t
\t
\t\$('#socList').on(tapEvent, '[removesoc]', function() {
\t\t\$(this).closest('tr').remove();
\t});
\t
\t
\t
\t
\t
\t
\t// ---------------------------------------- Формы обр. связи
\t\$('#addCbItem').on(tapEvent, function() {
\t\tlet index = \$('#cbList').find('tr:not(.empty):last').attr('index') || 0;
\t\tgetAjaxHtml('admin/common/get_cb_item', {index: parseInt(index) + 1}, function(html) {
\t\t\tlet emptyRow = \$('#cbList').find('tr.empty');
\t\t\tif (emptyRow.length) {
\t\t\t\t\$(emptyRow).remove();
\t\t\t}
\t\t\t\$('#cbList').append(html);
\t\t}, function() {
\t\t\t
\t\t});
\t});
\t
\t
\t
\t\$('#cbList').on(tapEvent, '[removecb]', function() {
\t\t\$(this).closest('tr').remove();
\t});
\t
\t
\t
\t
\t
\t
\t
\t//--------------------------------------------- Файлменеджер
\tclientFileManager({
\t\tonChooseFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\tenableScroll();
\t\t}
\t});
\t
\t\$('#settingsSave').scrollFix({pos: 500});
\t
\t// --------------------------------------------------------------------------------------- Сохранение основных настроек
\t\$('#settingsSave').on(tapEvent, function() {
\t\t\$('#settings').formSubmit({
\t\t\turl: 'admin/save_settings',
\t\t\tfields: {outer: 'setting_'},
\t\t\tignoreNames: 'files',
\t\t\tsuccess: function(response) {
\t\t\t\tif (response) {
\t\t\t\t\tnotify('Настройки сохранены!');
\t\t\t\t\t\$('table.fieldset').find('.file__block_changed').removeClass('file__block_changed');
\t\t\t\t\t\$('table.fieldset').find('.changed').removeClass('changed');
\t\t\t\t} 
\t\t\t\telse notify('Ошибка сохранения данных', 'error');
\t\t\t},
\t\t\terror: function(e) {
\t\t\t\tnotify('Системная ошибка!', 'error');
\t\t\t\tshowError(e);
\t\t\t},
\t\t\tformError: function(fields) {
\t\t\t\tif (fields) {
\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t
\t
\t
});
//--></script>", "views/admin/sections/settings.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\sections\\settings.tpl");
    }
}
