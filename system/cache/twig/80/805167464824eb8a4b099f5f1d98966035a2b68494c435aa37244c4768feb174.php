<?php

/* views/admin/sections/structure.tpl */
class __TwigTemplate_e4b0d810b1f653ec6bcbcacf558f507026563ab0179b8bce5e597c114f4330d8 extends Twig_Template
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
        echo "<div class=\"section\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
\t<div class=\"section_title\">
\t\t<h2>Структура сайта</h2>
\t</div>
\t
\t
\t<ul class=\"tabstitles mb-20px\">
\t\t<li id=\"tabPages\">Страницы</li>
\t\t<li id=\"tabSections\">Секции</li>
\t\t<li id=\"tabPatterns\">Паттерны</li>
\t\t<li id=\"tabCategories\">Категории</li>
\t\t<li id=\"tabCatalogs\">Каталоги</li>
\t\t<li id=\"tabLists\">Списки</li>
\t\t<li id=\"tabOptions\">Опции</li>
\t\t<li id=\"tabIcons\">Иконки</li>
\t</ul>
\t
\t<div class=\"tabscontent\">
\t\t<div tabid=\"tabPages\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td class=\"w-40\">SEO URL</td>
\t\t\t\t\t\t<td class=\"nowidth nowrap w-72px\">Шапка</td>
\t\t\t\t\t\t<td class=\"nowidth nowrap w-72px\">Подвал</td>
\t\t\t\t\t\t<td class=\"nowidth nowrap w-72px\">М. меню</td>
\t\t\t\t\t\t<td class=\"nowidth nowrap w-72px\" title=\"Отображать в навигационном меню\">Навиг.</td>
\t\t\t\t\t\t<td class=\"nowidth center nowrap w-72px\">Секции</td>
\t\t\t\t\t\t<td class=\"nowidth w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"pagesList\">
\t\t\t\t\t";
        // line 34
        if (($context["pages"] ?? null)) {
            // line 35
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 36
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "page_title", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "seo_url", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["p"], "header", [])) {
                    echo "<i class=\"fa fa-check\"></i>";
                }
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["p"], "footer", [])) {
                    echo "<i class=\"fa fa-check\"></i>";
                }
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["p"], "nav_mobile", [])) {
                    echo "<i class=\"fa fa-check\"></i>";
                }
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["p"], "navigation", [])) {
                    echo "<i class=\"fa fa-check\"></i>";
                }
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop inline\">
\t\t\t\t\t\t\t\t\t\t<button class=\"alt2\" pagessections=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", []), "html", null, true);
                echo "\" pagetitle=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "page_title", []), "html", null, true);
                echo "\" title=\"Привязать секции\"><i class=\"fa fa-bars\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons nowrap notop\">
\t\t\t\t\t\t\t\t\t\t<button pagesedit=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", []), "html", null, true);
                echo "\" pagetitle=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "page_title", []), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button pagesremove=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", []), "html", null, true);
                echo "\" pagetitle=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "page_title", []), "html", null, true);
                echo "\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t
\t\t\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t\t\t<tr class=\"empty\"><td colspan=\"8\"><p class=\"center empty\">Нет данных</p></td></tr>
\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button id=\"newPage\" class=\"small alt\">Новая страница</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t<div tabid=\"tabSections\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-40\">Название</td>
\t\t\t\t\t\t<td>Файл</td>
\t\t\t\t\t\t<td title=\"Выводить в навигационном меню\">Навиг.</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"sectionsList\">
\t\t\t\t\t";
        // line 83
        if (($context["sections"] ?? null)) {
            // line 84
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 85
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "title", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "filename", []), "html", null, true);
                echo ".tpl</td>
\t\t\t\t\t\t\t\t<td class=\"w-9rem center\">";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["s"], "navigation", [])) {
                    echo "<i class=\"fa fa-check\"></i>";
                }
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons nowrap notop\">
\t\t\t\t\t\t\t\t\t\t<button sectionedit=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", []), "html", null, true);
                echo "\" sectiontitle=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "title", []), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button sectionremove=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", []), "html", null, true);
                echo "\" sectiontitle=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "title", []), "html", null, true);
                echo "\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t
\t\t\t\t\t";
        } else {
            // line 97
            echo "\t
\t\t\t\t\t\t<tr class=\"empty\"><td colspan=\"4\"><p class=\"empty center\">Нет секций</p></td></tr>
\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button id=\"newSection\" class=\"small alt\">Новая секция</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabPatterns\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-40\">Название</td>
\t\t\t\t\t\t<td>Шаблон паттерна</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"patternsList\">
\t\t\t\t\t";
        // line 125
        if (($context["patterns"] ?? null)) {
            // line 126
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["patterns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 127
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"w-45\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 129
                echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["patterns_names"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["p"], "filename", [])] ?? null) : null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons nowrap notop\">
\t\t\t\t\t\t\t\t\t\t<button patternedit=\"";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", []), "html", null, true);
                echo "\" patterntitle=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", []), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button patternremove=\"";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", []), "html", null, true);
                echo "\" patterntitle=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", []), "html", null, true);
                echo "\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "\t\t\t\t\t";
        } else {
            echo "\t
\t\t\t\t\t\t<tr class=\"empty\">
\t\t\t\t\t\t\t<td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button id=\"newPattern\" class=\"small alt\">Новый паттерн</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabCategories\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"nowidth\">Иконка</td>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td>SEO URL</td>
\t\t\t\t\t\t<td>SEO Заголовок</td>
\t\t\t\t\t\t<td>SEO текст</td>
\t\t\t\t\t\t<td>Title ссылки</td>
\t\t\t\t\t\t<td>META keywords</td>
\t\t\t\t\t\t<td>META description</td>
\t\t\t\t\t\t<td>Родительская категория</td>
\t\t\t\t\t\t<td>Страница категории</td>
\t\t\t\t\t\t";
        // line 171
        if (($context["setting_setvarstocats"] ?? null)) {
            // line 172
            echo "\t\t\t\t\t\t\t<td class=\"w-20rem\">Переменная для вывода товаров</td>
\t\t\t\t\t\t\t<td class=\"w-20rem\">Переменная для вывода подкатегорий</td>
\t\t\t\t\t\t";
        }
        // line 175
        echo "\t\t\t\t\t\t<td title=\"Отображать в навигационном меню\">Нав.</td>
\t\t\t\t\t\t<td class=\"w-76px\">Сорт.</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"categorieslist\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"13\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"categoriesAdd\">Новая категория</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabCatalogs\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td class=\"w-40rem\">Страница карточки</td>
\t\t\t\t\t\t";
        // line 200
        if (($context["setting_setvarstocatalogs"] ?? null)) {
            // line 201
            echo "\t\t\t\t\t\t\t<td class=\"w-20\">Перменная на странице карточки</td>
\t\t\t\t\t\t";
        }
        // line 203
        echo "\t\t\t\t\t\t<td class=\"w-36rem\">Подобные товары</td>
\t\t\t\t\t\t<td class=\"w-13rem center\">Настройки</td>
\t\t\t\t\t\t<td class=\"w-13rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"catalogslist\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"catalogsAdd\">Новый каталог</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabLists\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-60rem\">Название</td>
\t\t\t\t\t\t<td>Поля</td>
\t\t\t\t\t\t<td class=\"w-30rem\">Реструктуризация данных</td>
\t\t\t\t\t\t<td class=\"w-10rem\">Список в списке</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"listsList\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"listsAdd\">Новый список</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabOptions\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-70px\">Иконка</td>
\t\t\t\t\t\t<td class=\"w-80px\">Цвет</td>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"optionsList\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"optionsAdd\">Новая опция</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabIcons\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-70px\">Иконка</td>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"iconsList\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"iconsAdd\">Новая иконка</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t";
        // line 338
        echo "\t</div>\t
</div>



<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\t
\tclientFileManager({
\t\tonChooseFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\t\$(item).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\tenableScroll();
\t\t},
\t\tonRemoveFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\t\$(item).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t}
\t});
\t
\t
\t//--------------------------------------------------------- Новая страница
\t\$('#newPage').on(tapEvent, function() {
\t\tddrPopUp({
\t\t\ttitle: 'Новая страница|4',
\t\t\twidth: 1000,
\t\t\tbuttons: [{id: 'addPage', title: 'Создать'}],
\t\t\tdisabledButtons: true,
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена',
\t\t\ttopClose: true,
\t\t}, function(newPageWin) {
\t\t\tnewPageWin.setData('admin/pages/get_form', {new: 1}, function() {
\t\t\t\tnewPageWin.enabledButtons();
\t\t\t\t\$('#addPage').on(tapEvent, function() {
\t\t\t\t\t//newPageWin.wait();
\t\t\t\t\t\$('#newPageForm').formSubmit({
\t\t\t\t\t\turl: 'admin/pages/save',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\tif (row != '') {
\t\t\t\t\t\t\t\t\$('#pagesList').find('tr.empty').remove();
\t\t\t\t\t\t\t\t\$('#pagesList').append(row);
\t\t\t\t\t\t\t\tnotify('Страница успешно создана!');
\t\t\t\t\t\t\t\tnewPageWin.close();
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar pageId = \$('#pagesList').children('tr:last').find('[pagesedit]').attr('pagesedit'),
\t\t\t\t\t\t\t\t\tpageTitle = \$('#pagesList').children('tr:last').children('td:first').text();
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$('#categorieslist').find('select[name=\"page_id\"]').append('<option value=\"'+pageId+'\">'+pageTitle+'</option>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка! Страница с таким URL уже существует!', 'error');
\t\t\t\t\t\t\t\tnewPageWin.wait(false);
\t\t\t\t\t\t\t\t\$('#newPageForm').find('input[name=\"seo_url\"]').parent().addClass('error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function() {
\t\t\t\t\t\t\tnotify('Ошибка создания страницы!', 'error');
\t\t\t\t\t\t\tnewPageWin.wait(false);
\t\t\t\t\t\t},
\t\t\t\t\t\tformError: function(fields) {
\t\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tnewPageWin.wait(false);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t\t
\t\t});
\t});
\t
\t
\t
\t
\t//--------------------------------------------------------- Редактирование страницы
\t\$('body').off(tapEvent, '[pagesedit]').on(tapEvent, '[pagesedit]', function() {
\t\tvar thisRow = \$(this).closest('tr'),
\t\t\tpageId = \$(this).attr('pagesedit'),
\t\t\tpageTitle = \$(this).attr('pagetitle');
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Редактировать страницу|4',
\t\t\twidth: 1000,
\t\t\tbuttons: [{id: 'editPage', title: 'Обновить'}],
\t\t\tdisabledButtons: true,
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена',
\t\t\ttopClose: true,
\t\t}, function(editPageWin) {
\t\t\teditPageWin.setData('admin/pages/get_form', {page_id: pageId, page_title: pageTitle}, function() {
\t\t\t\teditPageWin.enabledButtons();
\t\t\t\t\$('#editPage').on(tapEvent, function() {
\t\t\t\t\teditPageWin.wait();
\t\t\t\t\t\$('#newPageForm').formSubmit({
\t\t\t\t\t\turl: 'admin/pages/update',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tfields: {id: pageId},
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\tif (row != 0) {
\t\t\t\t\t\t\t\t\$(thisRow).replaceWith(row);
\t\t\t\t\t\t\t\tnotify('Страница успешно обновлена!');
\t\t\t\t\t\t\t\teditPageWin.close();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка! Страница не обновлена!', 'error');
\t\t\t\t\t\t\t\teditPageWin.wait(false);
\t\t\t\t\t\t\t\t\$('#newPageForm').find('input[name=\"seo_url\"]').parent().addClass('error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function() {
\t\t\t\t\t\t\tnotify('Ошибка создания страницы!', 'error');
\t\t\t\t\t\t\teditPageWin.wait(false);
\t\t\t\t\t\t},
\t\t\t\t\t\tformError: function(fields) {
\t\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\teditPageWin.wait(false);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
\t//--------------------------------------------------------- Удаление страницы
\t\$('body').off(tapEvent, '[pagesremove]').on(tapEvent, '[pagesremove]', function() {
\t\tvar thisRow = \$(this).closest('tr'),
\t\t\tcountRows = \$(thisRow).closest('tbody').find('tr').length,
\t\t\tpageId = \$(this).attr('pagesremove'),
\t\t\tpageTitle = \$(this).attr('pagetitle');;
\t\tddrPopUp({
\t\t\ttitle: 'Удалить страницу|4',
\t\t\twidth: 400,
\t\t\thtml: '<p class=\"empty center\">Вы действительно хотите удалить страницу?</p>',
\t\t\tbuttons: [{id: 'removePage', title: 'Удалить'}],
\t\t\tclose: 'Отмена'
\t\t}, function(removePageWin) {
\t\t\t\$('#removePage').on(tapEvent, function() {
\t\t\t\tremovePageWin.wait();
\t\t\t\t\$.post('/admin/pages/remove', {page_id: pageId}, function(response) {
\t\t\t\t\tif (response) {
\t\t\t\t\t\tif (countRows == 1) \$(thisRow).replaceWith('<tr class=\"empty\"><td colspan=\"8\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\telse \$(thisRow).remove();
\t\t\t\t\t\tnotify('Страница успешно удалена');
\t\t\t\t\t\tremovePageWin.close()
\t\t\t\t\t} else {
\t\t\t\t\t\tremovePageWin.wait(false);
\t\t\t\t\t\tnotify('ошибка удаления страницы', 'error');
\t\t\t\t\t}
\t\t\t\t}, 'json');
\t\t\t\t
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t//--------------------------------------------------------- Привязка секций к странице
\t\$('body').off(tapEvent, '[pagessections]').on(tapEvent, '[pagessections]', function() {
\t\tvar pageId = \$(this).attr('pagessections'),
\t\t\tpageTitle = \$(this).attr('pagetitle');;
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Привязать секции|4',
\t\t\twidth: 800,
\t\t\tbuttons: false,
\t\t\tdisabledButtons: false,
\t\t\tcloseByButton: false,
\t\t\tclose: 'Закрыть',
\t\t\ttopClose: true,
\t\t\taddClass: false,
\t\t}, function(pageSectionsWin) {
\t\t\tpageSectionsWin.setData('admin/pages/get_sections', {page_id: pageId, page_title: pageTitle}, function() {
\t\t\t\tSortable.create(\$('#allSections')[0], {
\t\t\t\t\tremoveCloneOnHide: true,
\t\t\t\t\tgroup: {
\t\t\t\t\t\tname: \"shared1\",
\t\t\t\t\t\tpull: \"clone\",
\t\t\t\t\t\trevertClone: false,
\t\t\t\t\t},
\t\t\t\t\tsort: false
\t\t\t\t});

\t\t\t\tSortable.create(\$('#pageSections')[0], {
\t\t\t\t\tdirection: 'vertical',
\t\t\t\t\tanimation: 200,
\t\t\t\t\ttouchStartThreshold: 1,
\t\t\t\t\tfilter: \"[removesection], [settingssection]\",
\t\t\t\t\tpreventOnFilter: false,
\t\t\t\t\tgroup: {
\t\t\t\t\t\tname: 'shared2',
\t\t\t\t\t\tput: ['shared1']
\t\t\t\t\t},
\t\t\t\t\tsort: true,
\t\t\t\t\tonSort: function (evt) {
\t\t\t\t\t\tvar data = [];
\t\t\t\t\t\tif (\$('#pageSections').children().length > 0) {
\t\t\t\t\t\t\t\$('#pageSections').children().each(function(k) {
\t\t\t\t\t\t\t\tvar sectionId = \$(this).find('[pagesection]').attr('pagesection'),
\t\t\t\t\t\t\t\t\tpageSectionId = \$(this).find('[pagesectionid]').attr('pagesectionid') || null;

\t\t\t\t\t\t\t\tdata.push({
\t\t\t\t\t\t\t\t\tid: pageSectionId,
\t\t\t\t\t\t\t\t\tpage_id: pageId,
\t\t\t\t\t\t\t\t\tsection_id: sectionId,
\t\t\t\t\t\t\t\t\tsort: (k + 1)
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\$.post('/admin/pages/save_page_sections', {data: data}, function(response) {
\t\t\t\t\t\t\tif (response != true) {
\t\t\t\t\t\t\t\t\$('#pageSections').find('li:nth-child('+response.sort+')').children('div').setAttrib('pagesectionid', response.id);
\t\t\t\t\t\t\t\tnotify('Новая секция добавлена!');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Секции отсортированы!');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, 'json');
\t\t\t\t\t},\t\t\t  \t
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\tvar sectionsTooltip,
\t\t\t\tsectionsToolTipOps = {
\t\t\t\t\tattach: '[settingssection]',
\t\t\t\t\ttrigger: 'click',
\t\t\t\t\twidth: 450,
\t\t\t\t\tcloseOnClick: 'body', //body, box
\t\t\t\t\t//closeOnMouseleave: true,
\t\t\t\t\taddClass: 'ddrtooltip',
\t\t\t\t\toutside: 'x',
\t\t\t\t\toffset: {x: 10},
\t\t\t\t\t//ignoreDelay: true,
\t\t\t\t\t//pointer: 'left',
\t\t\t\t\t//pointTo: 'left',
\t\t\t\t\tposition: {
\t\t\t\t\t  x: 'left',
\t\t\t\t\t  y: 'center'
\t\t\t\t\t},
\t\t\t\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t\t\t\t};
\t\t\t\t
\t\t\t\tsectionsTooltip = new jBox('Tooltip', sectionsToolTipOps);
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('body').off(tapEvent, '[settingssection]').on(tapEvent, '[settingssection]', function() {
\t\t\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tvar pageSectionId = \$(this).closest('[pagesectionid]').attr('pagesectionid');
\t\t\t\t\tgetAjaxHtml('admin/pages/get_section_nav', {psid: pageSectionId}, function(html) {
\t\t\t\t\t\tsectionsTooltip.setContent(html);
\t\t\t\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#sectionSettings').changeInputs(function(item, data) {
\t\t\t\t\t\t\t\$(item).parent().addClass('changed');
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$(document).on('ddrpopup:close', function() {
\t\t\t\t\tif (sectionsTooltip != undefined) sectionsTooltip.destroy();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('body').off(tapEvent, '[sectionsettingssave]').on(tapEvent, '[sectionsettingssave]', function() {
\t\t\t\t\t\$(this).closest('.ddrtooltip').find('#sectionSettings').formSubmit({
\t\t\t\t\t\turl: 'admin/pages/save_section_nav',
\t\t\t\t\t\tbefore: function() {
\t\t\t\t\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\t\t\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(result) {
\t\t\t\t\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (result) {
\t\t\t\t\t\t\t\tnotify('Настройки секции успешно сохранены!');
\t\t\t\t\t\t\t\tsectionsTooltip.close();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#allSections, #pageSections').off('mousedown').on('mousedown', function() {
\t\t\t\t\tsectionsTooltip.close();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//--------- Настройки секции
\t\t\t\t/*\$('#pageSections').on(tapEvent, '[settingssection]', function() {
\t\t\t\t\tvar thisItem = this,
\t\t\t\t\t\tthisPageSection = \$(thisItem).closest('[pagesection]').attr('pagesection'),
\t\t\t\t\t\tsort = parseInt(\$(thisItem).closest('li').index()) + 1;
\t\t\t\t\t
\t\t\t\t\tpageSectionsWin.wait();
\t\t\t\t\tpageSectionsWin.setTitle('Настройка секции');
\t\t\t\t\tpageSectionsWin.setButtons([{id: 'saveSectionSettings', title: 'Сохранить'}, {id: 'saveSectionCancel', title: 'Отмена', close: 1}]);
\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/sections/get_section_settings', {page: thisPageId, section: thisPageSection, sort: sort}, function(html) {
\t\t\t\t\t\tpageSectionsWin.setData(html, false);
\t\t\t\t\t\tpageSectionsWin.wait(false);
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$('#saveSectionSettings').on(tapEvent, function() {
\t\t\t\t\t\t\$('#SectionSettingsForm').formSubmit({
\t\t\t\t\t\t\turl: 'admin/sections/save_section_settings',
\t\t\t\t\t\t\tsuccess: function() {
\t\t\t\t\t\t\t\tnotify('Настройки секции охранены!');
\t\t\t\t\t\t\t\t_getSections((sort - 1));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t// ----- код
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$('#saveSectionCancel').on(tapEvent, function() {
\t\t\t\t\t\t_getSections();
\t\t\t\t\t});
\t\t\t\t});*/
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//--------- Удалить секцию
\t\t\t\t\$('#pageSections').on(tapEvent, '[removesection]', function() {
\t\t\t\t\tvar thisItem = this;
\t\t\t\t\tpageSectionsWin.dialog('<p>Удалить секцию?</p>', 'Удалить', 'Отмена', function() {
\t\t\t\t\t\tvar pageSectionId = \$(thisItem).closest('[pagesectionid]').attr('pagesectionid');
\t\t\t\t\t\t\$.post('/admin/pages/remove_page_section', {id: pageSectionId}, function(response) {
\t\t\t\t\t\t\tif (response) {
\t\t\t\t\t\t\t\tnotify('Секции успешно удалена!');
\t\t\t\t\t\t\t\t\$(thisItem).closest('li').remove();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка удаления секции!', 'error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tpageSectionsWin.dialog(false);
\t\t\t\t\t\t}, 'json');
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t});\t
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//----------------------------------------------------------------------------------------------------------------------------
\t
\t
\tvar fieldRulesTooltip,
\ttoolTipOps = {
\t\tattach: '[fieldsetrules]',
\t\ttrigger: 'click',
\t\twidth: 600,
\t\tcloseOnClick: 'body', //body, box
\t\t//closeOnMouseleave: true,
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\t//ignoreDelay: true,
\t\t//pointer: 'left',
\t\t//pointTo: 'left',
\t\tposition: {
\t\t  x: 'left',
\t\t  y: 'center'
\t\t},
\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t};
\t
\t\$(document).on('ddrpopup:close', function() {
\t\tif (fieldRulesTooltip != undefined) fieldRulesTooltip.destroy();
\t});
\t
\t
\t
\t
\t
\t//--------------------------------------------------------- Новая секция
\t\$('#newSection').on(tapEvent, function() {
\t\tddrPopUp({
\t\t\ttitle: 'Новая секция|4',
\t\t\twidth: 1200,
\t\t\tbuttons: [{id: 'newSectionSave', title: 'Создать'}],
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена'
\t\t}, function(newSectionWin) {
\t\t\tnewSectionWin.setData('admin/sections/get_form', function() {
\t\t\t\tvar index = \$('#sectionFields').children('tr:not(.empty)').length;
\t\t\t\t\$('#newsectionfield').on('change', function() {
\t\t\t\t\tvar thisSelect = this,
\t\t\t\t\t\ttype = \$(thisSelect).val();
\t\t\t\t\tgetAjaxHtml('admin/sections/get_field', {type: type, index: index}, function(html) {
\t\t\t\t\t\tif (\$('#sectionFields').children('tr.empty').length > 0) {
\t\t\t\t\t\t\t\$('#sectionFields').children('tr.empty').remove();
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#sectionFields').append(html);
\t\t\t\t\t\tindex++;
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\tfieldRulesTooltip.destroy();
\t\t\t\t\t\tfieldRulesTooltip = new jBox('Tooltip', toolTipOps);
\t\t\t\t\t\t\$(thisSelect).children('option:eq(0)').prop('selected', true);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#sectionFields').on(tapEvent, '[removesectionfield]', function() {
\t\t\t\t\tvar thisitem = this;
\t\t\t\t\tnewSectionWin.dialog('<p class=\"center remove\">Вы действительно хотите удалить поле?</p>', 'Удалить', 'Отмена', function() {
\t\t\t\t\t\t\$(thisitem).closest('tr').remove();
\t\t\t\t\t\tif (\$('#sectionFields').children('tr').length == 0) {
\t\t\t\t\t\t\t\$('#sectionFields').append('<tr class=\"empty\"><td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\t\tindex = 0;
\t\t\t\t\t\t}
\t\t\t\t\t\tnewSectionWin.dialog(false);
\t\t\t\t\t});\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#newSectionSave').on(tapEvent, function() {
\t\t\t\t\t\$('#sectionForm').formSubmit({
\t\t\t\t\t\turl: 'admin/sections/save',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tbefore: function() {
\t\t\t\t\t\t\tnewSectionWin.wait();
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\tif (row != 0) {
\t\t\t\t\t\t\t\tif (\$('#sectionsList').find('tr.empty').length) \$('#sectionsList').find('tr.empty').remove();
\t\t\t\t\t\t\t\t\$('#sectionsList').append(row);
\t\t\t\t\t\t\t\tnotify('Секция успешно создана!');
\t\t\t\t\t\t\t\tnewSectionWin.close();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка! Секция не создана!', 'error');
\t\t\t\t\t\t\t\tnewSectionWin.wait(false);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function() {
\t\t\t\t\t\t\tnotify('Ошибка создания секции!', 'error');
\t\t\t\t\t\t\tnewSectionWin.wait(false);
\t\t\t\t\t\t}\t
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\tfieldRulesTooltip = new jBox('Tooltip', toolTipOps);
\t\t\t\t
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
\t
\t
\t//--------------------------------------------------------- Редактировать секцию
\t\$('body').off(tapEvent, '[sectionedit]').on(tapEvent, '[sectionedit]', function() {
\t\tvar sectionId = \$(this).attr('sectionedit'),
\t\t\tthisRow = \$(this).closest('tr'),
\t\t\tsectionTitle = \$(thisRow).find('td:first').text();
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Редактировать секцию|4',
\t\t\twidth: 1200,
\t\t\tbuttons: [{id: 'sectionUpdate', title: 'Обновить'}],
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена'
\t\t}, function(updateSectionWin) {
\t\t\tupdateSectionWin.setData('admin/sections/get_form', {id: sectionId, section_title: sectionTitle}, function() {
\t\t\t\tvar index = \$('#sectionFields').children('tr:not(.empty)').length,
\t\t\t\t\tlistsToRemove = [];
\t\t\t\t
\t\t\t\t\$('#newsectionfield').on('change', function() {
\t\t\t\t\tvar thisSelect = this,
\t\t\t\t\t\ttype = \$(thisSelect).val();
\t\t\t\t\tgetAjaxHtml('admin/sections/get_field', {type: type, index: index}, function(html) {
\t\t\t\t\t\tif (\$('#sectionFields').children('tr.empty').length > 0) {
\t\t\t\t\t\t\t\$('#sectionFields').children('tr.empty').remove();
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#sectionFields').append(html);
\t\t\t\t\t\tindex++;
\t\t\t\t\t\t
\t\t\t\t\t\tfieldRulesTooltip.destroy();
\t\t\t\t\t\tfieldRulesTooltip = new jBox('Tooltip', toolTipOps);
\t\t\t\t\t\t\$(thisSelect).children('option:eq(0)').prop('selected', true);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#sectionFields').on(tapEvent, '[removesectionfield]', function() {
\t\t\t\t\tvar thisitem = this,
\t\t\t\t\t\tremoveListId = \$(thisitem).attr('removelistid') || false;
\t\t\t\t\tupdateSectionWin.dialog('<p class=\"center remove\">Вы действительно хотите удалить поле?</p>', 'Удалить', 'Отмена', function() {
\t\t\t\t\t\tupdateSectionWin.dialog(false);
\t\t\t\t\t\tupdateSectionWin.wait();
\t\t\t\t\t\t
\t\t\t\t\t\t// Если это список - то добавить в список ID
\t\t\t\t\t\tif (removeListId) listsToRemove.push(removeListId);
\t\t\t\t\t\t\$(thisitem).closest('tr').remove();
\t\t\t\t\t\tif (\$('#sectionFields').children('tr').length == 0) {
\t\t\t\t\t\t\t\$('#sectionFields').append('<tr class=\"empty\"><td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\t\tindex = 0;
\t\t\t\t\t\t}
\t\t\t\t\t\tupdateSectionWin.wait(false);
\t\t\t\t\t});\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#sectionUpdate').on(tapEvent, function() {
\t\t\t\t\t\$('#sectionForm').formSubmit({
\t\t\t\t\t\turl: 'admin/sections/update',
\t\t\t\t\t\tfields: {id: sectionId},
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tbefore: function() {
\t\t\t\t\t\t\tupdateSectionWin.wait();
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\tif (row != 0) {
\t\t\t\t\t\t\t\t\$(thisRow).replaceWith(row);
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif (listsToRemove.length > 0) {
\t\t\t\t\t\t\t\t\t\$.post('/admin/list/remove_list', {list_id: listsToRemove}, function(response) {
\t\t\t\t\t\t\t\t\t\tif (response) {
\t\t\t\t\t\t\t\t\t\t\tnotify('Секция успешно обновлена!');
\t\t\t\t\t\t\t\t\t\t\tupdateSectionWin.close();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}, 'json');
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tupdateSectionWin.close();
\t\t\t\t\t\t\t\t}\t\t\t
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка! Секция не обновлена!', 'error');
\t\t\t\t\t\t\t\tupdateSectionWin.wait(false);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function() {
\t\t\t\t\t\t\tnotify('Ошибка создания секции!', 'error');
\t\t\t\t\t\t\tupdateSectionWin.wait(false);
\t\t\t\t\t\t},
\t\t\t\t\t\tformError: function(fields) {
\t\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}\t
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\tfieldRulesTooltip = new jBox('Tooltip', toolTipOps);
\t\t\t\t
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t//--------------------------------------------------------- Удалить секцию
\t\$('body').off(tapEvent, '[sectionremove]').on(tapEvent, '[sectionremove]', function() {
\t\tvar sectionId = \$(this).attr('sectionremove'),
\t\t\tthisRow = \$(this).closest('tr');
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Удалить секцию|4',
\t\t\twidth: 400,
\t\t\thtml: '<p class=\"dialog dialog_remove\">Вы действительно хотите удалить секцию?</p>',
\t\t\tbuttons: [{id: 'removeSection', title: 'Удалить'}],
\t\t\tclose: 'Отмена'
\t\t}, function(removeSectionWin) {
\t\t\t\$('#removeSection').on(tapEvent, function() {
\t\t\t\tremoveSectionWin.wait();
\t\t\t\t\$.post('/admin/sections/remove', {id: sectionId}, function(response) {
\t\t\t\t\tif (response) {
\t\t\t\t\t\tif (\$('#sectionsList').find('tr').length == 1) {
\t\t\t\t\t\t\t\$(thisRow).remove();
\t\t\t\t\t\t\t\$('#sectionsList').append('<tr class=\"empty\"><td colspan=\"4\"><p class=\"empty center\">Нет секций</p></td></tr>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(thisRow).remove();
\t\t\t\t\t\t}
\t\t\t\t\t\tremoveSectionWin.close();
\t\t\t\t\t\tnotify('Секция успешно удалена!');
\t\t\t\t\t} else {
\t\t\t\t\t\tnotify('Ошибка удаления секции!', 'error');
\t\t\t\t\t\tremoveSectionWin.wait(false);
\t\t\t\t\t}
\t\t\t\t}, 'json');
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t//--------------------------------------------------------- Задать правила для полей секции
\t\$('body').off(tapEvent, '[fieldsetrules]').on(tapEvent, '[fieldsetrules]', function() {
\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t}
\t\t
\t\tvar type = \$(this).attr('fieldsetrules'),
\t\t\tthisRowIndex = \$(this).closest('tr').index(),
\t\t\trules = \$('#sectionFields tr').eq(thisRowIndex).find('[fieldrulesdata]').val() ? JSON.parse(\$('#sectionFields tr').eq(thisRowIndex).find('[fieldrulesdata]').val()) : false,
\t\t\trulesData = {};
\t\t
\t\trulesData['type'] = type;
\t\trulesData['index'] = thisRowIndex;
\t\t
\t\tif (rules) {
\t\t\t\$.each(rules, function(field, value) {
\t\t\t\trulesData[field] = value;
\t\t\t});
\t\t}
\t\t
\t\tgetAjaxHtml('admin/sections/get_rules', rulesData, function(html) {
\t\t\tfieldRulesTooltip.setContent(html);
\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t}
\t\t\t\$('#fieldRulesForm').changeInputs(function(item, data) {
\t\t\t\t\$(item).parent().addClass('changed');
\t\t\t});
\t\t});\t
\t});
\t
\t
\t
\t//--------------------------------------------------------- Закрыть или сохранить правила для полей секции
\t\$('body').off(tapEvent, '[fieldrulestooltipclose]').on(tapEvent, '[fieldrulestooltipclose]', function() {
\t\tvar stat = \$(this).attr('fieldrulestooltipclose'),
\t\t\trulesInp = \$('#sectionFields tr').eq(\$(this).attr('index')).find('[fieldrulesdata]');
\t\t\t
\t\tif (stat == 'close') fieldRulesTooltip.close();
\t\telse if (stat == 'save') {
\t\t\t\$('#fieldRulesForm').formSubmit({
\t\t\t\turl: 'admin/sections/format_rules',
\t\t\t\tsuccess: function(rules) {
\t\t\t\t\t\$(rulesInp).val(JSON.stringify(rules));
\t\t\t\t\tfieldRulesTooltip.close();
\t\t\t\t},
\t\t\t\tformError: function(fields) {
\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t//-----------------------------------------------------------------------------------------------------
\t
\t
\t
\t
\t//---------------------------- Категории
\t\$('#categorieslist').ddrCRUD({
\t\taddSelector: '#categoriesAdd',
\t\t//sortField: 'sort',
\t\tfunctions: 'admin/categories', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"12\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {},
\t\t\tadd: function(item) {},
\t\t\tsave: function(row) {},
\t\t\tupdate: function(row) {},
\t\t\tremove: function(row) {}
\t\t}
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Каталоги
\tvar catalogsFieldsTooltip,
\ttoolTipOps2 = {
\t\tattach: '[catalogssetfields]',
\t\ttrigger: 'click',
\t\twidth: 400,
\t\tcloseOnClick: 'body', //body, box
\t\t//appendTo: '[catalogssetfields]',
\t\t//closeOnMouseleave: true,
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\t//ignoreDelay: true,
\t\t//pointer: 'left',
\t\t//pointTo: 'left',
\t\tposition: {
\t\t  x: 'left',
\t\t  y: 'center'
\t\t},
\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t};
\t
\t
\tvar catalogsVarsTooltip,
\ttoolTipOps3 = {
\t\tattach: '[catalogssetvars]',
\t\ttrigger: 'click',
\t\twidth: 700,
\t\tcloseOnClick: 'body', //body, box
\t\t//appendTo: '[catalogssetfields]',
\t\t//closeOnMouseleave: true,
\t\t//closeButton: false,
\t\t//closeOnEsc: false,
\t\t
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\t//ignoreDelay: true,
\t\t//pointer: 'left',
\t\t//pointTo: 'left',
\t\tposition: {
\t\t  x: 'left',
\t\t  y: 'center'
\t\t},
\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t};
\t
\t
\t
\t
\t
\t\$('#catalogslist').ddrCRUD({
\t\taddSelector: '#catalogsAdd',
\t\tsortField: 'sort',
\t\tfunctions: 'admin/catalogs', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\tif (\$(item.field).attr('name') == 'fields') {
\t\t\t\t\t\tnotify('Ошибка! Необходимо задать поля для товаров каталога!', 'error');
\t\t\t\t\t\t\$(row).find('button[catalogssetfields]').addClass('error fail');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {
\t\t\t\tif (catalogsFieldsTooltip != undefined) catalogsFieldsTooltip.destroy();
\t\t\t\tcatalogsFieldsTooltip = new jBox('Tooltip', toolTipOps2);
\t\t\t\t
\t\t\t\tif (catalogsVarsTooltip != undefined) catalogsVarsTooltip.destroy();
\t\t\t\tcatalogsVarsTooltip = new jBox('Tooltip', toolTipOps3);
\t\t\t},
\t\t\tadd: function(item) {
\t\t\t\tif (catalogsFieldsTooltip != undefined) catalogsFieldsTooltip.destroy();
\t\t\t\tcatalogsFieldsTooltip = new jBox('Tooltip', toolTipOps2);
\t\t\t\t
\t\t\t\tif (catalogsVarsTooltip != undefined) catalogsVarsTooltip.destroy();
\t\t\t\tcatalogsVarsTooltip = new jBox('Tooltip', toolTipOps3);
\t\t\t},
\t\t\tsave: function(row) {
\t\t\t\t//console.log(row);
\t\t\t},
\t\t\tupdate: function(row) {
\t\t\t\t//console.log(row);
\t\t\t},
\t\t\tremove: function(row) {
\t\t\t\t
\t\t\t}
\t\t}
\t});
\t
\t
\t
\t
\t
\t//--------------------------------------------------- Управление кнопкой \"Поля\"
\t\$('body').off(tapEvent, '[catalogssetfields]').on(tapEvent, '[catalogssetfields]', function() {
\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t}
\t\t
\t\tvar thisRowIndex = \$(this).closest('tr').index(),
\t\t\tfields = \$('#catalogslist tr').eq(thisRowIndex).find('[catfieldsdata]').val() ? JSON.parse(\$('#catalogslist tr').eq(thisRowIndex).find('[catfieldsdata]').val()) : false,
\t\t\tfieldsData = {};
\t\t
\t\tfieldsData['index'] = thisRowIndex;
\t\tif (fields) {
\t\t\t\$.each(fields, function(field, value) {
\t\t\t\tfieldsData[field] = value;
\t\t\t});
\t\t}
\t\t
\t\tgetAjaxHtml('admin/catalogs/get_fields', fieldsData, function(html) {
\t\t\tcatalogsFieldsTooltip.setContent(html);
\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t}
\t\t});\t
\t});
\t
\t
\t//--------------------------------------------------------- Закрыть тултип и сохранить данные
\t\$('body').off(tapEvent, '[catalogssetfieldssave]').on(tapEvent, '[catalogssetfieldssave]', function() {
\t\tvar catFieldsRow = \$('#catalogslist tr').eq(\$(this).attr('index'));
\t\t\$('#catalogsFieldsForm').formSubmit({
\t\t\turl: 'admin/sections/format_rules',
\t\t\tsuccess: function(fields) {
\t\t\t\t\$(catFieldsRow).find('[catfieldsdata]').val(JSON.stringify(fields));
\t\t\t\tcatalogsFieldsTooltip.close();
\t\t\t\t\$(catFieldsRow).find('[save], [update]').removeAttrib('disabled');
\t\t\t\t\$(catFieldsRow).find('button[catalogssetfields]').removeClass('error fail');
\t\t\t},
\t\t\tformError: function(fields) {
\t\t\t\tif (fields) {
\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t\t//catalogsFieldsTooltip.close();
\t});
\t
\t
\t
\t
\t
\t
\t
\t//--------------------------------------------------- Управление кнопкой \"Переменные\"
\t\$('body').off(tapEvent, '[catalogssetvars]').on(tapEvent, '[catalogssetvars]', function() {
\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t}
\t\t
\t\tvar thisRowIndex = \$(this).closest('tr').index(),
\t\t\tvars = \$('#catalogslist tr').eq(thisRowIndex).find('[catvarsdata]').val() ? JSON.parse(\$('#catalogslist tr').eq(thisRowIndex).find('[catvarsdata]').val()) : false,
\t\t\tvarsData = {vars: {}, index: null};
\t\t
\t\tvarsData['index'] = thisRowIndex;
\t\tif (vars) {
\t\t\t\$.each(vars, function(field, value) {
\t\t\t\tvarsData['vars'][field] = value;
\t\t\t});
\t\t}
\t\t
\t\tgetAjaxHtml('admin/catalogs/get_vars', varsData, function(html) {
\t\t\tcatalogsVarsTooltip.setContent(html);
\t\t\tlet test = \$('#catalogsVarsFormTable').ddrScrollTableY({height: '70vh', wrapBorderColor: '#d7dbde'}),
\t\t\t\tform = \$('#catalogsVarsForm');
\t\t\t
\t\t\tcatalogsVarsTooltip.open();
\t\t\t
\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t}
\t\t\t
\t\t\t\$('#catalogVarsAddRowBtn').off(tapEvent).on(tapEvent, function() {
\t\t\t\tlet rowIndex = \$(form).find('tr').length
\t\t\t\t\thesEmptyRow = \$(form).find('tr.empty');
\t\t\t\t
\t\t\t\tif (hesEmptyRow.length) {
\t\t\t\t\t\$(hesEmptyRow).remove();
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$(form).append('<tr>\\
\t\t\t\t\t<td class=\"top\">\\
\t\t\t\t\t\t<div class=\"field\">\\
\t\t\t\t\t\t\t<input type=\"text\" name=\"vars['+rowIndex+'][field]\" value=\"\" autocomplete=\"off\" placeholder=\"Введите название переменной\">\\
\t\t\t\t\t\t</div>\\
\t\t\t\t\t</td>\\
\t\t\t\t\t<td>\\
\t\t\t\t\t\t<div class=\"textarea\">\\
\t\t\t\t\t\t\t<textarea name=\"vars['+rowIndex+'][value]\" rows=\"3\" autocomplete=\"off\" placeholder=\"Введите значение\"></textarea>\\
\t\t\t\t\t\t</div>\\
\t\t\t\t\t</td>\\
\t\t\t\t\t<td class=\"center top\">\\
\t\t\t\t\t\t<div class=\"buttons inline notop mt-8px\">\\
\t\t\t\t\t\t\t<button class=\"verysmall remove\" catalogvardelete><i class=\"fa fa-trash\"></i></button>\\
\t\t\t\t\t\t</div>\\
\t\t\t\t\t</td>\\
\t\t\t\t</tr>');
\t\t\t\ttest.reInit();
\t\t\t\tcatalogsVarsTooltip.open();
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(form).off(tapEvent, '[catalogvardelete]').on(tapEvent, '[catalogvardelete]', function(e) {
\t\t\t\te.stopPropagation();
\t\t\t\tlet tr = \$(this).closest('tr'),
\t\t\t\t\tcountRows = \$(this).closest('tbody').find('tr').length;
\t\t\t\tif (countRows > 1) {
\t\t\t\t\t\$(tr).remove();
\t\t\t\t} else {
\t\t\t\t\t\$(tr).replaceWith('<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty\">Нет данных</p></td></tr>');
\t\t\t\t}
\t\t\t\t
\t\t\t\ttest.reInit();
\t\t\t\tcatalogsVarsTooltip.open();
\t\t\t});
\t\t});\t
\t});
\t
\t
\t//--------------------------------------------------------- Закрыть тултип и сохранить данные
\t\$('body').off(tapEvent, '[catalogssetvarssave]').on(tapEvent, '[catalogssetvarssave]', function() {
\t\tvar catVarsRow = \$('#catalogslist tr').eq(\$(this).attr('index'));
\t\t\$('#catalogsVarsForm').formSubmit({
\t\t\turl: 'admin/sections/format_rules',
\t\t\tsuccess: function(data) {
\t\t\t\tlet varsToSave = {};
\t\t\t\t\$.each(data.vars, function(k, item) {
\t\t\t\t\tvarsToSave[item['field']] = item['value'];
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$(catVarsRow).find('[catvarsdata]').val(JSON.stringify(varsToSave));
\t\t\t\tcatalogsVarsTooltip.close();
\t\t\t\t\$(catVarsRow).find('[save], [update]').removeAttrib('disabled');
\t\t\t\t\$(catVarsRow).find('button[catalogssetvars]').removeClass('error fail');
\t\t\t},
\t\t\tformError: function(vars) {
\t\t\t\tif (vars) {
\t\t\t\t\t\$.each(vars, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t\t//catalogsVarsTooltip.close();
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Списки
\t\$('#listsList').ddrCRUD({
\t\taddSelector: '#listsAdd',
\t\tsortField: 'sort',
\t\tfunctions: 'admin/lists', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {},
\t\t\tadd: function(item) {
\t\t\t\t\$(item).changeInputs(function(selector) {
\t\t\t\t\t//\$(selector).remove();
\t\t\t\t\t\$(selector).closest('tr.warning').removeClass('warning');
\t\t\t\t});
\t\t\t},
\t\t\tsave: function(row) {},
\t\t\tupdate: function(row) {},
\t\t\tremove: function(row) {}
\t\t}
\t});
\t
\t
\t\$('#listsList').on(tapEvent, '[listinlist]', function() {
\t\tlet listId = \$(this).attr('listinlist'),
\t\t\tisEnabled = \$(this).hasAttr('enabled'),
\t\t\tthisRow = \$(this).closest('tr'),
\t\t\tfieldsString = \$(thisRow).find('[name=\"fields\"]').val(),
\t\t\tlistInListSelector = \$(thisRow).find('[name=\"list_in_list\"]');
\t\t\t
\t\tif (isEnabled) {
\t\t\tnotify('Необходимо заполнить поле \"поля\" и сохранить запись!', 'info');
\t\t\t\$(thisRow).addClass('warning');
\t\t} else if (!fieldsString) {
\t\t\t\$(thisRow).find('[name=\"fields\"]').errorLabel('Необходимо заполнить поля!');
\t\t\tnotify('Необходимо заполнить поле \"поля\"!', 'error');
\t\t} else {
\t\t\tddrPopUp({
\t\t\t\ttitle: 'Список в списке|4',
\t\t\t\twidth: 1200,
\t\t\t\tbuttons: [{id: 'setList', title: 'Сохранить'}],
\t\t\t\tdisabledButtons: true,
\t\t\t\tcloseByButton: false,
\t\t\t\tclose: 'Отмена',
\t\t\t}, function(listInListWin) {
\t\t\t\tlistInListWin.setData('admin/listinlist/get_form', {fields_string: fieldsString, list_id: listId, list_in_list: listInListSelector.val()}, function(html) {
\t\t\t\t\tif (html == '-2') {
\t\t\t\t\t\tlistInListWin.setWidth(400);
\t\t\t\t\t\tlistInListWin.setData('<p class=\"error\">Ошибка! Некорректное заполнение поля \"поля\"</p>', false);
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listinlistForm').on('change', '[listinlistchooselist]', function() {
\t\t\t\t\t\tlet thisRow = \$(this).closest('tr'),
\t\t\t\t\t\t\tvalueFieldTd = \$(thisRow).find('[listinlistvaluefield]'),
\t\t\t\t\t\t\tvalueOutTd = \$(thisRow).find('[listinlistoutfield]'),
\t\t\t\t\t\t\tloadListId = \$(this).val(),
\t\t\t\t\t\t\tindex = parseInt(\$('#listinlistForm').find('tr:last').attr('index') || 0);
\t\t\t\t\t\t
\t\t\t\t\t\t\$.post('/admin/listinlist/get_list_fields', {list_id: loadListId}, function(fields) {
\t\t\t\t\t\t\tlet selectValField = '<div class=\"select\">';
\t\t\t\t\t\t\t\tselectValField += '<select name=\"list_in_list['+index+'][field_to_list]\" rules=\"empty\">';
\t\t\t\t\t\t\t\tselectValField += \t'<option value=\"\" selected disabled>Выбрать</option>';
\t\t\t\t\t\t\t\t\$.each(fields, function() {
\t\t\t\t\t\t\t\t\tselectValField += '<option value=\"'+this.value+'\">'+this.title+'</option>';
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tselectValField += '</select>';
\t\t\t\t\t\t\t\tselectValField += '</div>';
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(valueFieldTd).html(selectValField);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tlet selectOutField = '<div class=\"select\">';
\t\t\t\t\t\t\t\tselectOutField += '<select name=\"list_in_list['+index+'][field_to_output]\" rules=\"empty\">';
\t\t\t\t\t\t\t\tselectOutField += \t'<option value=\"0\">ID элемента списка</option>';
\t\t\t\t\t\t\t\tselectOutField += \t'<option value=\"1\">Все значения элемента списка</option>';
\t\t\t\t\t\t\t\t\$.each(fields, function() {
\t\t\t\t\t\t\t\t\tselectOutField += '<option value=\"'+this.value+'\">'+this.title+'</option>';
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tselectOutField += '</select>';
\t\t\t\t\t\t\t\tselectOutField += '</div>';
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(valueOutTd).html(selectOutField);
\t\t\t\t\t\t}, 'json');
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listinlistForm').on('change', '[listinlistfield]', function() {
\t\t\t\t\t\tlet thisVal = \$(this).val();
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#listinlistForm').find('[listinlistfield]').each(function() {
\t\t\t\t\t\t\t\$(this).find('option[value=\"'+thisVal+'\"]:not(:selected)').remove();
\t\t\t\t\t\t\tif (!\$(this).find('option:not(:disabled)').length) {
\t\t\t\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listinlistForm').changeInputs(function() {
\t\t\t\t\t\tlistInListWin.enabledButtons();
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listinlistForm').on(tapEvent, '[listinlistremove]', function() {
\t\t\t\t\t\tlet rowLength = \$('#listinlistForm').find('tr:not(.empty)').length;
\t\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\t\tif (rowLength == 1) \$('#listinlistForm').html('<tr class=\"empty\"><td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\tlistInListWin.enabledButtons();
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listInListAdd').on(tapEvent, function() {
\t\t\t\t\t\tlet index = \$('#listinlistForm').find('tr:last').attr('index'),
\t\t\t\t\t\t\thasEmptyRow = \$('#listinlistForm').find('tr.empty').length;
\t\t\t\t\t\t
\t\t\t\t\t\tchoosedFieldsNames = [];
\t\t\t\t\t\t\$('#listinlistForm').find('[listinlistfield]').each(function() {
\t\t\t\t\t\t\tchoosedFieldsNames.push(\$(this).val());
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\tgetAjaxHtml('admin/listinlist/get_form_item', {
\t\t\t\t\t\t\tfields_string: fieldsString,
\t\t\t\t\t\t\tlist_id: listId,
\t\t\t\t\t\t\tindex: (index ? (parseInt(index) + 1) : 0),
\t\t\t\t\t\t\tchoosed_fields: choosedFieldsNames
\t\t\t\t\t\t}, function(rowHtml) {
\t\t\t\t\t\t\tif (rowHtml == -2) {
\t\t\t\t\t\t\t\tnotify('Нет свободных или подходящих полей списков!', 'info');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif (hasEmptyRow) \$('#listinlistForm').html(rowHtml);
\t\t\t\t\t\t\t\telse \$('#listinlistForm').append(rowHtml);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, function() {
\t\t\t\t\t\t\t
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#setList').on(tapEvent, function() {
\t\t\t\t\t\$('#listinlistForm').formSubmit({
\t\t\t\t\t\turl: 'admin/listinlist/save',
\t\t\t\t\t\tfields: {list_id: listId},
\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\tlistInListWin.wait();
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function() {
\t\t\t\t\t\t\t//listInListWin.wait(false);
\t\t\t\t\t\t\tlistInListWin.close();
\t\t\t\t\t\t\tnotify('Данные успешно сохранены!');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(e) {
\t\t\t\t\t\t\tnotify('Ошибка отправки формы!', 'error');
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\tlistInListWin.wait(false);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t
\t\t\t});
\t\t}\t\t
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Опции
\t\$('#optionsList').ddrCRUD({
\t\taddSelector: '#optionsAdd',
\t\tsortField: 'sort',
\t\tfunctions: 'admin/options', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"4\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {},
\t\t\tadd: function(item) {},
\t\t\tsave: function(row) {},
\t\t\tupdate: function(row) {},
\t\t\tremove: function(row) {}
\t\t}
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Иконки
\t\$('#iconsList').ddrCRUD({
\t\taddSelector: '#iconsAdd',
\t\tsortField: 'sort',
\t\tfunctions: 'admin/icons', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"4\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {},
\t\t\tadd: function(item) {},
\t\t\tsave: function(row) {},
\t\t\tupdate: function(row) {},
\t\t\tremove: function(row) {}
\t\t}
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Паттерны
\t\$('#newPattern').on(tapEvent, function() {
\t\tddrPopUp({
\t\t\ttitle: 'Новый паттерн|4',
\t\t\twidth: 800,
\t\t\tbuttons: [{id : 'addPattern', title: 'Добавить'}],
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена'
\t\t}, function(newPatternWin) {
\t\t\tnewPatternWin.setData('admin/patterns/get_form');
\t\t\t
\t\t\t
\t\t\t\$('#addPattern').on(tapEvent, function() {
\t\t\t\t\$('#newPatternForm').formSubmit({
\t\t\t\t\turl: 'admin/patterns/save',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tbefore: function() {
\t\t\t\t\t\tnewPatternWin.wait();
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\tif (data == 0) {
\t\t\t\t\t\t\tnotify('Ошибка! паттерн с таким названием уже существует!');
\t\t\t\t\t\t\t\$('#newPatternForm').find('[name=\"title\"]').parent().addClass('error');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif (\$('#patternsList').find('tr.empty').length > 0) \$('#patternsList').find('tr.empty').remove();
\t\t\t\t\t\t\t\$('#patternsList').append(data);
\t\t\t\t\t\t\tnewPatternWin.close();
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(data) {
\t\t\t\t\t\tconsole.log(data);
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\tnewPatternWin.wait(false);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
\t\$('body').off(tapEvent, '[patternedit]').on(tapEvent, '[patternedit]', function() {
\t\tvar patternId = \$(this).attr('patternedit'),
\t\t\tpatternRow = \$(this).closest('tr');
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Редактировать паттерн|4',
\t\t\twidth: 800,
\t\t\tbuttons: [{id : 'updatePattern', title: 'Обновить'}],
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена'
\t\t}, function(updatePatternWin) {
\t\t\tupdatePatternWin.setData('admin/patterns/get_form', {id: patternId});
\t\t\t
\t\t\t
\t\t\t\$('#updatePattern').on(tapEvent, function() {
\t\t\t\t\$('#newPatternForm').formSubmit({
\t\t\t\t\turl: 'admin/patterns/update',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tfields: {id: patternId},
\t\t\t\t\tbefore: function() {
\t\t\t\t\t\tupdatePatternWin.wait();
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\tif (data == 0) {
\t\t\t\t\t\t\tnotify('Ошибка! паттерн с таким названием уже существует!');
\t\t\t\t\t\t\t\$('#newPatternForm').find('[name=\"title\"]').parent().addClass('error');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(patternRow).replaceWith(data);
\t\t\t\t\t\t\tupdatePatternWin.close();
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(data) {
\t\t\t\t\t\tconsole.log(data);
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\tupdatePatternWin.wait(false);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
\t
\t\$('body').off(tapEvent, '[patternremove]').on(tapEvent, '[patternremove]', function() {
\t\tvar patternId = \$(this).attr('patternremove'),
\t\t\tpatternRow = \$(this).closest('tr');
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Удаление паттерна|4',
\t\t\twidth: 400,
\t\t\thtml: '<p class=\"red\">Вы действительно хотите удалить паттерн?</p>',
\t\t\tbuttons: [{id: 'deletePattern', title: 'Удалить'}],
\t\t\tclose: 'Отмена',
\t\t\tcontentToCenter: true
\t\t}, function(removePatternWin) {
\t\t\t\$('#deletePattern').on(tapEvent, function() {
\t\t\t\tremovePatternWin.wait();
\t\t\t\t\$.post('/admin/patterns/remove', {id: patternId}, function(response) {
\t\t\t\t\tif (response) {
\t\t\t\t\t\tif (\$('#patternsList').find('tr').length == 1) {
\t\t\t\t\t\t\t\$(patternRow).remove();
\t\t\t\t\t\t\t\$('#patternsList').append('<tr><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(patternRow).remove();
\t\t\t\t\t\t}
\t\t\t\t\t\tremovePatternWin.close();
\t\t\t\t\t} else {
\t\t\t\t\t\tnotify('Ошибка удаления паттерна!', 'error');
\t\t\t\t\t\tremovePatternWin.wait(false);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "views/admin/sections/structure.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 338,  366 => 203,  362 => 201,  360 => 200,  333 => 175,  328 => 172,  326 => 171,  296 => 143,  287 => 138,  274 => 133,  268 => 132,  262 => 129,  258 => 128,  255 => 127,  250 => 126,  248 => 125,  221 => 100,  216 => 97,  212 => 96,  199 => 92,  193 => 91,  185 => 88,  181 => 87,  177 => 86,  174 => 85,  169 => 84,  167 => 83,  141 => 59,  137 => 57,  133 => 55,  120 => 51,  114 => 50,  104 => 45,  96 => 42,  90 => 41,  84 => 40,  78 => 39,  74 => 38,  70 => 37,  67 => 36,  62 => 35,  60 => 34,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"{{id}}\">
\t<div class=\"section_title\">
\t\t<h2>Структура сайта</h2>
\t</div>
\t
\t
\t<ul class=\"tabstitles mb-20px\">
\t\t<li id=\"tabPages\">Страницы</li>
\t\t<li id=\"tabSections\">Секции</li>
\t\t<li id=\"tabPatterns\">Паттерны</li>
\t\t<li id=\"tabCategories\">Категории</li>
\t\t<li id=\"tabCatalogs\">Каталоги</li>
\t\t<li id=\"tabLists\">Списки</li>
\t\t<li id=\"tabOptions\">Опции</li>
\t\t<li id=\"tabIcons\">Иконки</li>
\t</ul>
\t
\t<div class=\"tabscontent\">
\t\t<div tabid=\"tabPages\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td class=\"w-40\">SEO URL</td>
\t\t\t\t\t\t<td class=\"nowidth nowrap w-72px\">Шапка</td>
\t\t\t\t\t\t<td class=\"nowidth nowrap w-72px\">Подвал</td>
\t\t\t\t\t\t<td class=\"nowidth nowrap w-72px\">М. меню</td>
\t\t\t\t\t\t<td class=\"nowidth nowrap w-72px\" title=\"Отображать в навигационном меню\">Навиг.</td>
\t\t\t\t\t\t<td class=\"nowidth center nowrap w-72px\">Секции</td>
\t\t\t\t\t\t<td class=\"nowidth w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"pagesList\">
\t\t\t\t\t{% if pages %}
\t\t\t\t\t\t{% for p in pages %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{p.page_title}}</td>
\t\t\t\t\t\t\t\t<td>{{p.seo_url}}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">{% if p.header %}<i class=\"fa fa-check\"></i>{% endif %}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">{% if p.footer %}<i class=\"fa fa-check\"></i>{% endif %}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">{% if p.nav_mobile %}<i class=\"fa fa-check\"></i>{% endif %}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">{% if p.navigation %}<i class=\"fa fa-check\"></i>{% endif %}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop inline\">
\t\t\t\t\t\t\t\t\t\t<button class=\"alt2\" pagessections=\"{{p.id}}\" pagetitle=\"{{p.page_title}}\" title=\"Привязать секции\"><i class=\"fa fa-bars\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons nowrap notop\">
\t\t\t\t\t\t\t\t\t\t<button pagesedit=\"{{p.id}}\" pagetitle=\"{{p.page_title}}\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button pagesremove=\"{{p.id}}\" pagetitle=\"{{p.page_title}}\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}\t
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr class=\"empty\"><td colspan=\"8\"><p class=\"center empty\">Нет данных</p></td></tr>
\t\t\t\t\t{% endif %}
\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button id=\"newPage\" class=\"small alt\">Новая страница</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t<div tabid=\"tabSections\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-40\">Название</td>
\t\t\t\t\t\t<td>Файл</td>
\t\t\t\t\t\t<td title=\"Выводить в навигационном меню\">Навиг.</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"sectionsList\">
\t\t\t\t\t{% if sections %}
\t\t\t\t\t\t{% for s in sections %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{s.title}}</td>
\t\t\t\t\t\t\t\t<td>{{s.filename}}.tpl</td>
\t\t\t\t\t\t\t\t<td class=\"w-9rem center\">{% if s.navigation %}<i class=\"fa fa-check\"></i>{% endif %}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons nowrap notop\">
\t\t\t\t\t\t\t\t\t\t<button sectionedit=\"{{s.id}}\" sectiontitle=\"{{s.title}}\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button sectionremove=\"{{s.id}}\" sectiontitle=\"{{s.title}}\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}\t
\t\t\t\t\t{% else %}\t
\t\t\t\t\t\t<tr class=\"empty\"><td colspan=\"4\"><p class=\"empty center\">Нет секций</p></td></tr>
\t\t\t\t\t{% endif %}
\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button id=\"newSection\" class=\"small alt\">Новая секция</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabPatterns\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-40\">Название</td>
\t\t\t\t\t\t<td>Шаблон паттерна</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"patternsList\">
\t\t\t\t\t{% if patterns %}
\t\t\t\t\t\t{% for p in patterns %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"w-45\">{{p.title}}</td>
\t\t\t\t\t\t\t\t<td>{{patterns_names[p.filename]}}</td>
\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons nowrap notop\">
\t\t\t\t\t\t\t\t\t\t<button patternedit=\"{{p.id}}\" patterntitle=\"{{p.title}}\"><i class=\"fa fa-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button patternremove=\"{{p.id}}\" patterntitle=\"{{p.title}}\" class=\"remove\"><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}\t
\t\t\t\t\t\t<tr class=\"empty\">
\t\t\t\t\t\t\t<td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button id=\"newPattern\" class=\"small alt\">Новый паттерн</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabCategories\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"nowidth\">Иконка</td>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td>SEO URL</td>
\t\t\t\t\t\t<td>SEO Заголовок</td>
\t\t\t\t\t\t<td>SEO текст</td>
\t\t\t\t\t\t<td>Title ссылки</td>
\t\t\t\t\t\t<td>META keywords</td>
\t\t\t\t\t\t<td>META description</td>
\t\t\t\t\t\t<td>Родительская категория</td>
\t\t\t\t\t\t<td>Страница категории</td>
\t\t\t\t\t\t{% if setting_setvarstocats %}
\t\t\t\t\t\t\t<td class=\"w-20rem\">Переменная для вывода товаров</td>
\t\t\t\t\t\t\t<td class=\"w-20rem\">Переменная для вывода подкатегорий</td>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<td title=\"Отображать в навигационном меню\">Нав.</td>
\t\t\t\t\t\t<td class=\"w-76px\">Сорт.</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"categorieslist\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"13\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"categoriesAdd\">Новая категория</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t<div tabid=\"tabCatalogs\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td class=\"w-40rem\">Страница карточки</td>
\t\t\t\t\t\t{% if setting_setvarstocatalogs %}
\t\t\t\t\t\t\t<td class=\"w-20\">Перменная на странице карточки</td>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<td class=\"w-36rem\">Подобные товары</td>
\t\t\t\t\t\t<td class=\"w-13rem center\">Настройки</td>
\t\t\t\t\t\t<td class=\"w-13rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"catalogslist\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"catalogsAdd\">Новый каталог</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabLists\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-60rem\">Название</td>
\t\t\t\t\t\t<td>Поля</td>
\t\t\t\t\t\t<td class=\"w-30rem\">Реструктуризация данных</td>
\t\t\t\t\t\t<td class=\"w-10rem\">Список в списке</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"listsList\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"listsAdd\">Новый список</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabOptions\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-70px\">Иконка</td>
\t\t\t\t\t\t<td class=\"w-80px\">Цвет</td>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"optionsList\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"optionsAdd\">Новая опция</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t<div tabid=\"tabIcons\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"w-70px\">Иконка</td>
\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t<td class=\"w-14rem\">Опции</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"iconsList\"></tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t<button class=\"small alt\" id=\"iconsAdd\">Новая иконка</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t{#<div tabid=\"tabPatterns\">
\t\t\t<fieldset>
\t\t\t\t<legend>Паттерны</legend>
\t\t\t</fieldset>
\t\t</div>
\t\t<div tabid=\"tabPages\">
\t\t\t<fieldset>
\t\t\t\t<legend>Подключение страниц</legend>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Заголовок</td>
\t\t\t\t\t\t\t<td class=\"w-30\">URL</td>
\t\t\t\t\t\t\t<td class=\"nowidth nowrap\">Шаблон страницы</td>
\t\t\t\t\t\t\t<td class=\"nowidth\">Секции</td>
\t\t\t\t\t\t\t<td class=\"w-70px\">Шапка</td>
\t\t\t\t\t\t\t<td class=\"w-70px\">Подвал</td>
\t\t\t\t\t\t\t<td class=\"w-70px\">М. меню</td>
\t\t\t\t\t\t\t<td class=\"nowidth\">Опции</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"pagesList\"></tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"8\">
\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t<button id=\"addPage\">Добавить страницу</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>#}
\t</div>\t
</div>



<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\t
\tclientFileManager({
\t\tonChooseFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\t\$(item).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\tenableScroll();
\t\t},
\t\tonRemoveFile: function(item) {
\t\t\t\$(item).addClass('file__block_changed');
\t\t\t\$(item).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t}
\t});
\t
\t
\t//--------------------------------------------------------- Новая страница
\t\$('#newPage').on(tapEvent, function() {
\t\tddrPopUp({
\t\t\ttitle: 'Новая страница|4',
\t\t\twidth: 1000,
\t\t\tbuttons: [{id: 'addPage', title: 'Создать'}],
\t\t\tdisabledButtons: true,
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена',
\t\t\ttopClose: true,
\t\t}, function(newPageWin) {
\t\t\tnewPageWin.setData('admin/pages/get_form', {new: 1}, function() {
\t\t\t\tnewPageWin.enabledButtons();
\t\t\t\t\$('#addPage').on(tapEvent, function() {
\t\t\t\t\t//newPageWin.wait();
\t\t\t\t\t\$('#newPageForm').formSubmit({
\t\t\t\t\t\turl: 'admin/pages/save',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\tif (row != '') {
\t\t\t\t\t\t\t\t\$('#pagesList').find('tr.empty').remove();
\t\t\t\t\t\t\t\t\$('#pagesList').append(row);
\t\t\t\t\t\t\t\tnotify('Страница успешно создана!');
\t\t\t\t\t\t\t\tnewPageWin.close();
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar pageId = \$('#pagesList').children('tr:last').find('[pagesedit]').attr('pagesedit'),
\t\t\t\t\t\t\t\t\tpageTitle = \$('#pagesList').children('tr:last').children('td:first').text();
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$('#categorieslist').find('select[name=\"page_id\"]').append('<option value=\"'+pageId+'\">'+pageTitle+'</option>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка! Страница с таким URL уже существует!', 'error');
\t\t\t\t\t\t\t\tnewPageWin.wait(false);
\t\t\t\t\t\t\t\t\$('#newPageForm').find('input[name=\"seo_url\"]').parent().addClass('error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function() {
\t\t\t\t\t\t\tnotify('Ошибка создания страницы!', 'error');
\t\t\t\t\t\t\tnewPageWin.wait(false);
\t\t\t\t\t\t},
\t\t\t\t\t\tformError: function(fields) {
\t\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tnewPageWin.wait(false);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t\t
\t\t});
\t});
\t
\t
\t
\t
\t//--------------------------------------------------------- Редактирование страницы
\t\$('body').off(tapEvent, '[pagesedit]').on(tapEvent, '[pagesedit]', function() {
\t\tvar thisRow = \$(this).closest('tr'),
\t\t\tpageId = \$(this).attr('pagesedit'),
\t\t\tpageTitle = \$(this).attr('pagetitle');
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Редактировать страницу|4',
\t\t\twidth: 1000,
\t\t\tbuttons: [{id: 'editPage', title: 'Обновить'}],
\t\t\tdisabledButtons: true,
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена',
\t\t\ttopClose: true,
\t\t}, function(editPageWin) {
\t\t\teditPageWin.setData('admin/pages/get_form', {page_id: pageId, page_title: pageTitle}, function() {
\t\t\t\teditPageWin.enabledButtons();
\t\t\t\t\$('#editPage').on(tapEvent, function() {
\t\t\t\t\teditPageWin.wait();
\t\t\t\t\t\$('#newPageForm').formSubmit({
\t\t\t\t\t\turl: 'admin/pages/update',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tfields: {id: pageId},
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\tif (row != 0) {
\t\t\t\t\t\t\t\t\$(thisRow).replaceWith(row);
\t\t\t\t\t\t\t\tnotify('Страница успешно обновлена!');
\t\t\t\t\t\t\t\teditPageWin.close();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка! Страница не обновлена!', 'error');
\t\t\t\t\t\t\t\teditPageWin.wait(false);
\t\t\t\t\t\t\t\t\$('#newPageForm').find('input[name=\"seo_url\"]').parent().addClass('error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function() {
\t\t\t\t\t\t\tnotify('Ошибка создания страницы!', 'error');
\t\t\t\t\t\t\teditPageWin.wait(false);
\t\t\t\t\t\t},
\t\t\t\t\t\tformError: function(fields) {
\t\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\teditPageWin.wait(false);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
\t//--------------------------------------------------------- Удаление страницы
\t\$('body').off(tapEvent, '[pagesremove]').on(tapEvent, '[pagesremove]', function() {
\t\tvar thisRow = \$(this).closest('tr'),
\t\t\tcountRows = \$(thisRow).closest('tbody').find('tr').length,
\t\t\tpageId = \$(this).attr('pagesremove'),
\t\t\tpageTitle = \$(this).attr('pagetitle');;
\t\tddrPopUp({
\t\t\ttitle: 'Удалить страницу|4',
\t\t\twidth: 400,
\t\t\thtml: '<p class=\"empty center\">Вы действительно хотите удалить страницу?</p>',
\t\t\tbuttons: [{id: 'removePage', title: 'Удалить'}],
\t\t\tclose: 'Отмена'
\t\t}, function(removePageWin) {
\t\t\t\$('#removePage').on(tapEvent, function() {
\t\t\t\tremovePageWin.wait();
\t\t\t\t\$.post('/admin/pages/remove', {page_id: pageId}, function(response) {
\t\t\t\t\tif (response) {
\t\t\t\t\t\tif (countRows == 1) \$(thisRow).replaceWith('<tr class=\"empty\"><td colspan=\"8\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\telse \$(thisRow).remove();
\t\t\t\t\t\tnotify('Страница успешно удалена');
\t\t\t\t\t\tremovePageWin.close()
\t\t\t\t\t} else {
\t\t\t\t\t\tremovePageWin.wait(false);
\t\t\t\t\t\tnotify('ошибка удаления страницы', 'error');
\t\t\t\t\t}
\t\t\t\t}, 'json');
\t\t\t\t
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t//--------------------------------------------------------- Привязка секций к странице
\t\$('body').off(tapEvent, '[pagessections]').on(tapEvent, '[pagessections]', function() {
\t\tvar pageId = \$(this).attr('pagessections'),
\t\t\tpageTitle = \$(this).attr('pagetitle');;
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Привязать секции|4',
\t\t\twidth: 800,
\t\t\tbuttons: false,
\t\t\tdisabledButtons: false,
\t\t\tcloseByButton: false,
\t\t\tclose: 'Закрыть',
\t\t\ttopClose: true,
\t\t\taddClass: false,
\t\t}, function(pageSectionsWin) {
\t\t\tpageSectionsWin.setData('admin/pages/get_sections', {page_id: pageId, page_title: pageTitle}, function() {
\t\t\t\tSortable.create(\$('#allSections')[0], {
\t\t\t\t\tremoveCloneOnHide: true,
\t\t\t\t\tgroup: {
\t\t\t\t\t\tname: \"shared1\",
\t\t\t\t\t\tpull: \"clone\",
\t\t\t\t\t\trevertClone: false,
\t\t\t\t\t},
\t\t\t\t\tsort: false
\t\t\t\t});

\t\t\t\tSortable.create(\$('#pageSections')[0], {
\t\t\t\t\tdirection: 'vertical',
\t\t\t\t\tanimation: 200,
\t\t\t\t\ttouchStartThreshold: 1,
\t\t\t\t\tfilter: \"[removesection], [settingssection]\",
\t\t\t\t\tpreventOnFilter: false,
\t\t\t\t\tgroup: {
\t\t\t\t\t\tname: 'shared2',
\t\t\t\t\t\tput: ['shared1']
\t\t\t\t\t},
\t\t\t\t\tsort: true,
\t\t\t\t\tonSort: function (evt) {
\t\t\t\t\t\tvar data = [];
\t\t\t\t\t\tif (\$('#pageSections').children().length > 0) {
\t\t\t\t\t\t\t\$('#pageSections').children().each(function(k) {
\t\t\t\t\t\t\t\tvar sectionId = \$(this).find('[pagesection]').attr('pagesection'),
\t\t\t\t\t\t\t\t\tpageSectionId = \$(this).find('[pagesectionid]').attr('pagesectionid') || null;

\t\t\t\t\t\t\t\tdata.push({
\t\t\t\t\t\t\t\t\tid: pageSectionId,
\t\t\t\t\t\t\t\t\tpage_id: pageId,
\t\t\t\t\t\t\t\t\tsection_id: sectionId,
\t\t\t\t\t\t\t\t\tsort: (k + 1)
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\$.post('/admin/pages/save_page_sections', {data: data}, function(response) {
\t\t\t\t\t\t\tif (response != true) {
\t\t\t\t\t\t\t\t\$('#pageSections').find('li:nth-child('+response.sort+')').children('div').setAttrib('pagesectionid', response.id);
\t\t\t\t\t\t\t\tnotify('Новая секция добавлена!');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Секции отсортированы!');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, 'json');
\t\t\t\t\t},\t\t\t  \t
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\tvar sectionsTooltip,
\t\t\t\tsectionsToolTipOps = {
\t\t\t\t\tattach: '[settingssection]',
\t\t\t\t\ttrigger: 'click',
\t\t\t\t\twidth: 450,
\t\t\t\t\tcloseOnClick: 'body', //body, box
\t\t\t\t\t//closeOnMouseleave: true,
\t\t\t\t\taddClass: 'ddrtooltip',
\t\t\t\t\toutside: 'x',
\t\t\t\t\toffset: {x: 10},
\t\t\t\t\t//ignoreDelay: true,
\t\t\t\t\t//pointer: 'left',
\t\t\t\t\t//pointTo: 'left',
\t\t\t\t\tposition: {
\t\t\t\t\t  x: 'left',
\t\t\t\t\t  y: 'center'
\t\t\t\t\t},
\t\t\t\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t\t\t\t};
\t\t\t\t
\t\t\t\tsectionsTooltip = new jBox('Tooltip', sectionsToolTipOps);
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('body').off(tapEvent, '[settingssection]').on(tapEvent, '[settingssection]', function() {
\t\t\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tvar pageSectionId = \$(this).closest('[pagesectionid]').attr('pagesectionid');
\t\t\t\t\tgetAjaxHtml('admin/pages/get_section_nav', {psid: pageSectionId}, function(html) {
\t\t\t\t\t\tsectionsTooltip.setContent(html);
\t\t\t\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#sectionSettings').changeInputs(function(item, data) {
\t\t\t\t\t\t\t\$(item).parent().addClass('changed');
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$(document).on('ddrpopup:close', function() {
\t\t\t\t\tif (sectionsTooltip != undefined) sectionsTooltip.destroy();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('body').off(tapEvent, '[sectionsettingssave]').on(tapEvent, '[sectionsettingssave]', function() {
\t\t\t\t\t\$(this).closest('.ddrtooltip').find('#sectionSettings').formSubmit({
\t\t\t\t\t\turl: 'admin/pages/save_section_nav',
\t\t\t\t\t\tbefore: function() {
\t\t\t\t\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\t\t\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(result) {
\t\t\t\t\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (result) {
\t\t\t\t\t\t\t\tnotify('Настройки секции успешно сохранены!');
\t\t\t\t\t\t\t\tsectionsTooltip.close();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#allSections, #pageSections').off('mousedown').on('mousedown', function() {
\t\t\t\t\tsectionsTooltip.close();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//--------- Настройки секции
\t\t\t\t/*\$('#pageSections').on(tapEvent, '[settingssection]', function() {
\t\t\t\t\tvar thisItem = this,
\t\t\t\t\t\tthisPageSection = \$(thisItem).closest('[pagesection]').attr('pagesection'),
\t\t\t\t\t\tsort = parseInt(\$(thisItem).closest('li').index()) + 1;
\t\t\t\t\t
\t\t\t\t\tpageSectionsWin.wait();
\t\t\t\t\tpageSectionsWin.setTitle('Настройка секции');
\t\t\t\t\tpageSectionsWin.setButtons([{id: 'saveSectionSettings', title: 'Сохранить'}, {id: 'saveSectionCancel', title: 'Отмена', close: 1}]);
\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/sections/get_section_settings', {page: thisPageId, section: thisPageSection, sort: sort}, function(html) {
\t\t\t\t\t\tpageSectionsWin.setData(html, false);
\t\t\t\t\t\tpageSectionsWin.wait(false);
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$('#saveSectionSettings').on(tapEvent, function() {
\t\t\t\t\t\t\$('#SectionSettingsForm').formSubmit({
\t\t\t\t\t\t\turl: 'admin/sections/save_section_settings',
\t\t\t\t\t\t\tsuccess: function() {
\t\t\t\t\t\t\t\tnotify('Настройки секции охранены!');
\t\t\t\t\t\t\t\t_getSections((sort - 1));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t// ----- код
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$('#saveSectionCancel').on(tapEvent, function() {
\t\t\t\t\t\t_getSections();
\t\t\t\t\t});
\t\t\t\t});*/
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//--------- Удалить секцию
\t\t\t\t\$('#pageSections').on(tapEvent, '[removesection]', function() {
\t\t\t\t\tvar thisItem = this;
\t\t\t\t\tpageSectionsWin.dialog('<p>Удалить секцию?</p>', 'Удалить', 'Отмена', function() {
\t\t\t\t\t\tvar pageSectionId = \$(thisItem).closest('[pagesectionid]').attr('pagesectionid');
\t\t\t\t\t\t\$.post('/admin/pages/remove_page_section', {id: pageSectionId}, function(response) {
\t\t\t\t\t\t\tif (response) {
\t\t\t\t\t\t\t\tnotify('Секции успешно удалена!');
\t\t\t\t\t\t\t\t\$(thisItem).closest('li').remove();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка удаления секции!', 'error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tpageSectionsWin.dialog(false);
\t\t\t\t\t\t}, 'json');
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t});\t
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//----------------------------------------------------------------------------------------------------------------------------
\t
\t
\tvar fieldRulesTooltip,
\ttoolTipOps = {
\t\tattach: '[fieldsetrules]',
\t\ttrigger: 'click',
\t\twidth: 600,
\t\tcloseOnClick: 'body', //body, box
\t\t//closeOnMouseleave: true,
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\t//ignoreDelay: true,
\t\t//pointer: 'left',
\t\t//pointTo: 'left',
\t\tposition: {
\t\t  x: 'left',
\t\t  y: 'center'
\t\t},
\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t};
\t
\t\$(document).on('ddrpopup:close', function() {
\t\tif (fieldRulesTooltip != undefined) fieldRulesTooltip.destroy();
\t});
\t
\t
\t
\t
\t
\t//--------------------------------------------------------- Новая секция
\t\$('#newSection').on(tapEvent, function() {
\t\tddrPopUp({
\t\t\ttitle: 'Новая секция|4',
\t\t\twidth: 1200,
\t\t\tbuttons: [{id: 'newSectionSave', title: 'Создать'}],
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена'
\t\t}, function(newSectionWin) {
\t\t\tnewSectionWin.setData('admin/sections/get_form', function() {
\t\t\t\tvar index = \$('#sectionFields').children('tr:not(.empty)').length;
\t\t\t\t\$('#newsectionfield').on('change', function() {
\t\t\t\t\tvar thisSelect = this,
\t\t\t\t\t\ttype = \$(thisSelect).val();
\t\t\t\t\tgetAjaxHtml('admin/sections/get_field', {type: type, index: index}, function(html) {
\t\t\t\t\t\tif (\$('#sectionFields').children('tr.empty').length > 0) {
\t\t\t\t\t\t\t\$('#sectionFields').children('tr.empty').remove();
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#sectionFields').append(html);
\t\t\t\t\t\tindex++;
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\tfieldRulesTooltip.destroy();
\t\t\t\t\t\tfieldRulesTooltip = new jBox('Tooltip', toolTipOps);
\t\t\t\t\t\t\$(thisSelect).children('option:eq(0)').prop('selected', true);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#sectionFields').on(tapEvent, '[removesectionfield]', function() {
\t\t\t\t\tvar thisitem = this;
\t\t\t\t\tnewSectionWin.dialog('<p class=\"center remove\">Вы действительно хотите удалить поле?</p>', 'Удалить', 'Отмена', function() {
\t\t\t\t\t\t\$(thisitem).closest('tr').remove();
\t\t\t\t\t\tif (\$('#sectionFields').children('tr').length == 0) {
\t\t\t\t\t\t\t\$('#sectionFields').append('<tr class=\"empty\"><td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\t\tindex = 0;
\t\t\t\t\t\t}
\t\t\t\t\t\tnewSectionWin.dialog(false);
\t\t\t\t\t});\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#newSectionSave').on(tapEvent, function() {
\t\t\t\t\t\$('#sectionForm').formSubmit({
\t\t\t\t\t\turl: 'admin/sections/save',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tbefore: function() {
\t\t\t\t\t\t\tnewSectionWin.wait();
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\tif (row != 0) {
\t\t\t\t\t\t\t\tif (\$('#sectionsList').find('tr.empty').length) \$('#sectionsList').find('tr.empty').remove();
\t\t\t\t\t\t\t\t\$('#sectionsList').append(row);
\t\t\t\t\t\t\t\tnotify('Секция успешно создана!');
\t\t\t\t\t\t\t\tnewSectionWin.close();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка! Секция не создана!', 'error');
\t\t\t\t\t\t\t\tnewSectionWin.wait(false);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function() {
\t\t\t\t\t\t\tnotify('Ошибка создания секции!', 'error');
\t\t\t\t\t\t\tnewSectionWin.wait(false);
\t\t\t\t\t\t}\t
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\tfieldRulesTooltip = new jBox('Tooltip', toolTipOps);
\t\t\t\t
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
\t
\t
\t//--------------------------------------------------------- Редактировать секцию
\t\$('body').off(tapEvent, '[sectionedit]').on(tapEvent, '[sectionedit]', function() {
\t\tvar sectionId = \$(this).attr('sectionedit'),
\t\t\tthisRow = \$(this).closest('tr'),
\t\t\tsectionTitle = \$(thisRow).find('td:first').text();
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Редактировать секцию|4',
\t\t\twidth: 1200,
\t\t\tbuttons: [{id: 'sectionUpdate', title: 'Обновить'}],
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена'
\t\t}, function(updateSectionWin) {
\t\t\tupdateSectionWin.setData('admin/sections/get_form', {id: sectionId, section_title: sectionTitle}, function() {
\t\t\t\tvar index = \$('#sectionFields').children('tr:not(.empty)').length,
\t\t\t\t\tlistsToRemove = [];
\t\t\t\t
\t\t\t\t\$('#newsectionfield').on('change', function() {
\t\t\t\t\tvar thisSelect = this,
\t\t\t\t\t\ttype = \$(thisSelect).val();
\t\t\t\t\tgetAjaxHtml('admin/sections/get_field', {type: type, index: index}, function(html) {
\t\t\t\t\t\tif (\$('#sectionFields').children('tr.empty').length > 0) {
\t\t\t\t\t\t\t\$('#sectionFields').children('tr.empty').remove();
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#sectionFields').append(html);
\t\t\t\t\t\tindex++;
\t\t\t\t\t\t
\t\t\t\t\t\tfieldRulesTooltip.destroy();
\t\t\t\t\t\tfieldRulesTooltip = new jBox('Tooltip', toolTipOps);
\t\t\t\t\t\t\$(thisSelect).children('option:eq(0)').prop('selected', true);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#sectionFields').on(tapEvent, '[removesectionfield]', function() {
\t\t\t\t\tvar thisitem = this,
\t\t\t\t\t\tremoveListId = \$(thisitem).attr('removelistid') || false;
\t\t\t\t\tupdateSectionWin.dialog('<p class=\"center remove\">Вы действительно хотите удалить поле?</p>', 'Удалить', 'Отмена', function() {
\t\t\t\t\t\tupdateSectionWin.dialog(false);
\t\t\t\t\t\tupdateSectionWin.wait();
\t\t\t\t\t\t
\t\t\t\t\t\t// Если это список - то добавить в список ID
\t\t\t\t\t\tif (removeListId) listsToRemove.push(removeListId);
\t\t\t\t\t\t\$(thisitem).closest('tr').remove();
\t\t\t\t\t\tif (\$('#sectionFields').children('tr').length == 0) {
\t\t\t\t\t\t\t\$('#sectionFields').append('<tr class=\"empty\"><td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\t\tindex = 0;
\t\t\t\t\t\t}
\t\t\t\t\t\tupdateSectionWin.wait(false);
\t\t\t\t\t});\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#sectionUpdate').on(tapEvent, function() {
\t\t\t\t\t\$('#sectionForm').formSubmit({
\t\t\t\t\t\turl: 'admin/sections/update',
\t\t\t\t\t\tfields: {id: sectionId},
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tbefore: function() {
\t\t\t\t\t\t\tupdateSectionWin.wait();
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\tif (row != 0) {
\t\t\t\t\t\t\t\t\$(thisRow).replaceWith(row);
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif (listsToRemove.length > 0) {
\t\t\t\t\t\t\t\t\t\$.post('/admin/list/remove_list', {list_id: listsToRemove}, function(response) {
\t\t\t\t\t\t\t\t\t\tif (response) {
\t\t\t\t\t\t\t\t\t\t\tnotify('Секция успешно обновлена!');
\t\t\t\t\t\t\t\t\t\t\tupdateSectionWin.close();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}, 'json');
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tupdateSectionWin.close();
\t\t\t\t\t\t\t\t}\t\t\t
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tnotify('Ошибка! Секция не обновлена!', 'error');
\t\t\t\t\t\t\t\tupdateSectionWin.wait(false);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function() {
\t\t\t\t\t\t\tnotify('Ошибка создания секции!', 'error');
\t\t\t\t\t\t\tupdateSectionWin.wait(false);
\t\t\t\t\t\t},
\t\t\t\t\t\tformError: function(fields) {
\t\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}\t
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\tfieldRulesTooltip = new jBox('Tooltip', toolTipOps);
\t\t\t\t
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t//--------------------------------------------------------- Удалить секцию
\t\$('body').off(tapEvent, '[sectionremove]').on(tapEvent, '[sectionremove]', function() {
\t\tvar sectionId = \$(this).attr('sectionremove'),
\t\t\tthisRow = \$(this).closest('tr');
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Удалить секцию|4',
\t\t\twidth: 400,
\t\t\thtml: '<p class=\"dialog dialog_remove\">Вы действительно хотите удалить секцию?</p>',
\t\t\tbuttons: [{id: 'removeSection', title: 'Удалить'}],
\t\t\tclose: 'Отмена'
\t\t}, function(removeSectionWin) {
\t\t\t\$('#removeSection').on(tapEvent, function() {
\t\t\t\tremoveSectionWin.wait();
\t\t\t\t\$.post('/admin/sections/remove', {id: sectionId}, function(response) {
\t\t\t\t\tif (response) {
\t\t\t\t\t\tif (\$('#sectionsList').find('tr').length == 1) {
\t\t\t\t\t\t\t\$(thisRow).remove();
\t\t\t\t\t\t\t\$('#sectionsList').append('<tr class=\"empty\"><td colspan=\"4\"><p class=\"empty center\">Нет секций</p></td></tr>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(thisRow).remove();
\t\t\t\t\t\t}
\t\t\t\t\t\tremoveSectionWin.close();
\t\t\t\t\t\tnotify('Секция успешно удалена!');
\t\t\t\t\t} else {
\t\t\t\t\t\tnotify('Ошибка удаления секции!', 'error');
\t\t\t\t\t\tremoveSectionWin.wait(false);
\t\t\t\t\t}
\t\t\t\t}, 'json');
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t//--------------------------------------------------------- Задать правила для полей секции
\t\$('body').off(tapEvent, '[fieldsetrules]').on(tapEvent, '[fieldsetrules]', function() {
\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t}
\t\t
\t\tvar type = \$(this).attr('fieldsetrules'),
\t\t\tthisRowIndex = \$(this).closest('tr').index(),
\t\t\trules = \$('#sectionFields tr').eq(thisRowIndex).find('[fieldrulesdata]').val() ? JSON.parse(\$('#sectionFields tr').eq(thisRowIndex).find('[fieldrulesdata]').val()) : false,
\t\t\trulesData = {};
\t\t
\t\trulesData['type'] = type;
\t\trulesData['index'] = thisRowIndex;
\t\t
\t\tif (rules) {
\t\t\t\$.each(rules, function(field, value) {
\t\t\t\trulesData[field] = value;
\t\t\t});
\t\t}
\t\t
\t\tgetAjaxHtml('admin/sections/get_rules', rulesData, function(html) {
\t\t\tfieldRulesTooltip.setContent(html);
\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t}
\t\t\t\$('#fieldRulesForm').changeInputs(function(item, data) {
\t\t\t\t\$(item).parent().addClass('changed');
\t\t\t});
\t\t});\t
\t});
\t
\t
\t
\t//--------------------------------------------------------- Закрыть или сохранить правила для полей секции
\t\$('body').off(tapEvent, '[fieldrulestooltipclose]').on(tapEvent, '[fieldrulestooltipclose]', function() {
\t\tvar stat = \$(this).attr('fieldrulestooltipclose'),
\t\t\trulesInp = \$('#sectionFields tr').eq(\$(this).attr('index')).find('[fieldrulesdata]');
\t\t\t
\t\tif (stat == 'close') fieldRulesTooltip.close();
\t\telse if (stat == 'save') {
\t\t\t\$('#fieldRulesForm').formSubmit({
\t\t\t\turl: 'admin/sections/format_rules',
\t\t\t\tsuccess: function(rules) {
\t\t\t\t\t\$(rulesInp).val(JSON.stringify(rules));
\t\t\t\t\tfieldRulesTooltip.close();
\t\t\t\t},
\t\t\t\tformError: function(fields) {
\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t//-----------------------------------------------------------------------------------------------------
\t
\t
\t
\t
\t//---------------------------- Категории
\t\$('#categorieslist').ddrCRUD({
\t\taddSelector: '#categoriesAdd',
\t\t//sortField: 'sort',
\t\tfunctions: 'admin/categories', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"12\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {},
\t\t\tadd: function(item) {},
\t\t\tsave: function(row) {},
\t\t\tupdate: function(row) {},
\t\t\tremove: function(row) {}
\t\t}
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Каталоги
\tvar catalogsFieldsTooltip,
\ttoolTipOps2 = {
\t\tattach: '[catalogssetfields]',
\t\ttrigger: 'click',
\t\twidth: 400,
\t\tcloseOnClick: 'body', //body, box
\t\t//appendTo: '[catalogssetfields]',
\t\t//closeOnMouseleave: true,
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\t//ignoreDelay: true,
\t\t//pointer: 'left',
\t\t//pointTo: 'left',
\t\tposition: {
\t\t  x: 'left',
\t\t  y: 'center'
\t\t},
\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t};
\t
\t
\tvar catalogsVarsTooltip,
\ttoolTipOps3 = {
\t\tattach: '[catalogssetvars]',
\t\ttrigger: 'click',
\t\twidth: 700,
\t\tcloseOnClick: 'body', //body, box
\t\t//appendTo: '[catalogssetfields]',
\t\t//closeOnMouseleave: true,
\t\t//closeButton: false,
\t\t//closeOnEsc: false,
\t\t
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\t//ignoreDelay: true,
\t\t//pointer: 'left',
\t\t//pointTo: 'left',
\t\tposition: {
\t\t  x: 'left',
\t\t  y: 'center'
\t\t},
\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t};
\t
\t
\t
\t
\t
\t\$('#catalogslist').ddrCRUD({
\t\taddSelector: '#catalogsAdd',
\t\tsortField: 'sort',
\t\tfunctions: 'admin/catalogs', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\tif (\$(item.field).attr('name') == 'fields') {
\t\t\t\t\t\tnotify('Ошибка! Необходимо задать поля для товаров каталога!', 'error');
\t\t\t\t\t\t\$(row).find('button[catalogssetfields]').addClass('error fail');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {
\t\t\t\tif (catalogsFieldsTooltip != undefined) catalogsFieldsTooltip.destroy();
\t\t\t\tcatalogsFieldsTooltip = new jBox('Tooltip', toolTipOps2);
\t\t\t\t
\t\t\t\tif (catalogsVarsTooltip != undefined) catalogsVarsTooltip.destroy();
\t\t\t\tcatalogsVarsTooltip = new jBox('Tooltip', toolTipOps3);
\t\t\t},
\t\t\tadd: function(item) {
\t\t\t\tif (catalogsFieldsTooltip != undefined) catalogsFieldsTooltip.destroy();
\t\t\t\tcatalogsFieldsTooltip = new jBox('Tooltip', toolTipOps2);
\t\t\t\t
\t\t\t\tif (catalogsVarsTooltip != undefined) catalogsVarsTooltip.destroy();
\t\t\t\tcatalogsVarsTooltip = new jBox('Tooltip', toolTipOps3);
\t\t\t},
\t\t\tsave: function(row) {
\t\t\t\t//console.log(row);
\t\t\t},
\t\t\tupdate: function(row) {
\t\t\t\t//console.log(row);
\t\t\t},
\t\t\tremove: function(row) {
\t\t\t\t
\t\t\t}
\t\t}
\t});
\t
\t
\t
\t
\t
\t//--------------------------------------------------- Управление кнопкой \"Поля\"
\t\$('body').off(tapEvent, '[catalogssetfields]').on(tapEvent, '[catalogssetfields]', function() {
\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t}
\t\t
\t\tvar thisRowIndex = \$(this).closest('tr').index(),
\t\t\tfields = \$('#catalogslist tr').eq(thisRowIndex).find('[catfieldsdata]').val() ? JSON.parse(\$('#catalogslist tr').eq(thisRowIndex).find('[catfieldsdata]').val()) : false,
\t\t\tfieldsData = {};
\t\t
\t\tfieldsData['index'] = thisRowIndex;
\t\tif (fields) {
\t\t\t\$.each(fields, function(field, value) {
\t\t\t\tfieldsData[field] = value;
\t\t\t});
\t\t}
\t\t
\t\tgetAjaxHtml('admin/catalogs/get_fields', fieldsData, function(html) {
\t\t\tcatalogsFieldsTooltip.setContent(html);
\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t}
\t\t});\t
\t});
\t
\t
\t//--------------------------------------------------------- Закрыть тултип и сохранить данные
\t\$('body').off(tapEvent, '[catalogssetfieldssave]').on(tapEvent, '[catalogssetfieldssave]', function() {
\t\tvar catFieldsRow = \$('#catalogslist tr').eq(\$(this).attr('index'));
\t\t\$('#catalogsFieldsForm').formSubmit({
\t\t\turl: 'admin/sections/format_rules',
\t\t\tsuccess: function(fields) {
\t\t\t\t\$(catFieldsRow).find('[catfieldsdata]').val(JSON.stringify(fields));
\t\t\t\tcatalogsFieldsTooltip.close();
\t\t\t\t\$(catFieldsRow).find('[save], [update]').removeAttrib('disabled');
\t\t\t\t\$(catFieldsRow).find('button[catalogssetfields]').removeClass('error fail');
\t\t\t},
\t\t\tformError: function(fields) {
\t\t\t\tif (fields) {
\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t\t//catalogsFieldsTooltip.close();
\t});
\t
\t
\t
\t
\t
\t
\t
\t//--------------------------------------------------- Управление кнопкой \"Переменные\"
\t\$('body').off(tapEvent, '[catalogssetvars]').on(tapEvent, '[catalogssetvars]', function() {
\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length == 0 || \$('.ddrtooltip').find('.ddrtooltip__wait').length == 0) {
\t\t\t\$('.ddrtooltip').find('.jBox-content').after('<div class=\"ddrtooltip__wait ddrtooltip__wait_abs\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t}
\t\t
\t\tvar thisRowIndex = \$(this).closest('tr').index(),
\t\t\tvars = \$('#catalogslist tr').eq(thisRowIndex).find('[catvarsdata]').val() ? JSON.parse(\$('#catalogslist tr').eq(thisRowIndex).find('[catvarsdata]').val()) : false,
\t\t\tvarsData = {vars: {}, index: null};
\t\t
\t\tvarsData['index'] = thisRowIndex;
\t\tif (vars) {
\t\t\t\$.each(vars, function(field, value) {
\t\t\t\tvarsData['vars'][field] = value;
\t\t\t});
\t\t}
\t\t
\t\tgetAjaxHtml('admin/catalogs/get_vars', varsData, function(html) {
\t\t\tcatalogsVarsTooltip.setContent(html);
\t\t\tlet test = \$('#catalogsVarsFormTable').ddrScrollTableY({height: '70vh', wrapBorderColor: '#d7dbde'}),
\t\t\t\tform = \$('#catalogsVarsForm');
\t\t\t
\t\t\tcatalogsVarsTooltip.open();
\t\t\t
\t\t\tif (\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').length > 0) {
\t\t\t\t\$('.ddrtooltip').find('.jBox-content').siblings('.ddrtooltip__wait_abs').remove();
\t\t\t}
\t\t\t
\t\t\t\$('#catalogVarsAddRowBtn').off(tapEvent).on(tapEvent, function() {
\t\t\t\tlet rowIndex = \$(form).find('tr').length
\t\t\t\t\thesEmptyRow = \$(form).find('tr.empty');
\t\t\t\t
\t\t\t\tif (hesEmptyRow.length) {
\t\t\t\t\t\$(hesEmptyRow).remove();
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$(form).append('<tr>\\
\t\t\t\t\t<td class=\"top\">\\
\t\t\t\t\t\t<div class=\"field\">\\
\t\t\t\t\t\t\t<input type=\"text\" name=\"vars['+rowIndex+'][field]\" value=\"\" autocomplete=\"off\" placeholder=\"Введите название переменной\">\\
\t\t\t\t\t\t</div>\\
\t\t\t\t\t</td>\\
\t\t\t\t\t<td>\\
\t\t\t\t\t\t<div class=\"textarea\">\\
\t\t\t\t\t\t\t<textarea name=\"vars['+rowIndex+'][value]\" rows=\"3\" autocomplete=\"off\" placeholder=\"Введите значение\"></textarea>\\
\t\t\t\t\t\t</div>\\
\t\t\t\t\t</td>\\
\t\t\t\t\t<td class=\"center top\">\\
\t\t\t\t\t\t<div class=\"buttons inline notop mt-8px\">\\
\t\t\t\t\t\t\t<button class=\"verysmall remove\" catalogvardelete><i class=\"fa fa-trash\"></i></button>\\
\t\t\t\t\t\t</div>\\
\t\t\t\t\t</td>\\
\t\t\t\t</tr>');
\t\t\t\ttest.reInit();
\t\t\t\tcatalogsVarsTooltip.open();
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(form).off(tapEvent, '[catalogvardelete]').on(tapEvent, '[catalogvardelete]', function(e) {
\t\t\t\te.stopPropagation();
\t\t\t\tlet tr = \$(this).closest('tr'),
\t\t\t\t\tcountRows = \$(this).closest('tbody').find('tr').length;
\t\t\t\tif (countRows > 1) {
\t\t\t\t\t\$(tr).remove();
\t\t\t\t} else {
\t\t\t\t\t\$(tr).replaceWith('<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty\">Нет данных</p></td></tr>');
\t\t\t\t}
\t\t\t\t
\t\t\t\ttest.reInit();
\t\t\t\tcatalogsVarsTooltip.open();
\t\t\t});
\t\t});\t
\t});
\t
\t
\t//--------------------------------------------------------- Закрыть тултип и сохранить данные
\t\$('body').off(tapEvent, '[catalogssetvarssave]').on(tapEvent, '[catalogssetvarssave]', function() {
\t\tvar catVarsRow = \$('#catalogslist tr').eq(\$(this).attr('index'));
\t\t\$('#catalogsVarsForm').formSubmit({
\t\t\turl: 'admin/sections/format_rules',
\t\t\tsuccess: function(data) {
\t\t\t\tlet varsToSave = {};
\t\t\t\t\$.each(data.vars, function(k, item) {
\t\t\t\t\tvarsToSave[item['field']] = item['value'];
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$(catVarsRow).find('[catvarsdata]').val(JSON.stringify(varsToSave));
\t\t\t\tcatalogsVarsTooltip.close();
\t\t\t\t\$(catVarsRow).find('[save], [update]').removeAttrib('disabled');
\t\t\t\t\$(catVarsRow).find('button[catalogssetvars]').removeClass('error fail');
\t\t\t},
\t\t\tformError: function(vars) {
\t\t\t\tif (vars) {
\t\t\t\t\t\$.each(vars, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t\t//catalogsVarsTooltip.close();
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Списки
\t\$('#listsList').ddrCRUD({
\t\taddSelector: '#listsAdd',
\t\tsortField: 'sort',
\t\tfunctions: 'admin/lists', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {},
\t\t\tadd: function(item) {
\t\t\t\t\$(item).changeInputs(function(selector) {
\t\t\t\t\t//\$(selector).remove();
\t\t\t\t\t\$(selector).closest('tr.warning').removeClass('warning');
\t\t\t\t});
\t\t\t},
\t\t\tsave: function(row) {},
\t\t\tupdate: function(row) {},
\t\t\tremove: function(row) {}
\t\t}
\t});
\t
\t
\t\$('#listsList').on(tapEvent, '[listinlist]', function() {
\t\tlet listId = \$(this).attr('listinlist'),
\t\t\tisEnabled = \$(this).hasAttr('enabled'),
\t\t\tthisRow = \$(this).closest('tr'),
\t\t\tfieldsString = \$(thisRow).find('[name=\"fields\"]').val(),
\t\t\tlistInListSelector = \$(thisRow).find('[name=\"list_in_list\"]');
\t\t\t
\t\tif (isEnabled) {
\t\t\tnotify('Необходимо заполнить поле \"поля\" и сохранить запись!', 'info');
\t\t\t\$(thisRow).addClass('warning');
\t\t} else if (!fieldsString) {
\t\t\t\$(thisRow).find('[name=\"fields\"]').errorLabel('Необходимо заполнить поля!');
\t\t\tnotify('Необходимо заполнить поле \"поля\"!', 'error');
\t\t} else {
\t\t\tddrPopUp({
\t\t\t\ttitle: 'Список в списке|4',
\t\t\t\twidth: 1200,
\t\t\t\tbuttons: [{id: 'setList', title: 'Сохранить'}],
\t\t\t\tdisabledButtons: true,
\t\t\t\tcloseByButton: false,
\t\t\t\tclose: 'Отмена',
\t\t\t}, function(listInListWin) {
\t\t\t\tlistInListWin.setData('admin/listinlist/get_form', {fields_string: fieldsString, list_id: listId, list_in_list: listInListSelector.val()}, function(html) {
\t\t\t\t\tif (html == '-2') {
\t\t\t\t\t\tlistInListWin.setWidth(400);
\t\t\t\t\t\tlistInListWin.setData('<p class=\"error\">Ошибка! Некорректное заполнение поля \"поля\"</p>', false);
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listinlistForm').on('change', '[listinlistchooselist]', function() {
\t\t\t\t\t\tlet thisRow = \$(this).closest('tr'),
\t\t\t\t\t\t\tvalueFieldTd = \$(thisRow).find('[listinlistvaluefield]'),
\t\t\t\t\t\t\tvalueOutTd = \$(thisRow).find('[listinlistoutfield]'),
\t\t\t\t\t\t\tloadListId = \$(this).val(),
\t\t\t\t\t\t\tindex = parseInt(\$('#listinlistForm').find('tr:last').attr('index') || 0);
\t\t\t\t\t\t
\t\t\t\t\t\t\$.post('/admin/listinlist/get_list_fields', {list_id: loadListId}, function(fields) {
\t\t\t\t\t\t\tlet selectValField = '<div class=\"select\">';
\t\t\t\t\t\t\t\tselectValField += '<select name=\"list_in_list['+index+'][field_to_list]\" rules=\"empty\">';
\t\t\t\t\t\t\t\tselectValField += \t'<option value=\"\" selected disabled>Выбрать</option>';
\t\t\t\t\t\t\t\t\$.each(fields, function() {
\t\t\t\t\t\t\t\t\tselectValField += '<option value=\"'+this.value+'\">'+this.title+'</option>';
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tselectValField += '</select>';
\t\t\t\t\t\t\t\tselectValField += '</div>';
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(valueFieldTd).html(selectValField);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tlet selectOutField = '<div class=\"select\">';
\t\t\t\t\t\t\t\tselectOutField += '<select name=\"list_in_list['+index+'][field_to_output]\" rules=\"empty\">';
\t\t\t\t\t\t\t\tselectOutField += \t'<option value=\"0\">ID элемента списка</option>';
\t\t\t\t\t\t\t\tselectOutField += \t'<option value=\"1\">Все значения элемента списка</option>';
\t\t\t\t\t\t\t\t\$.each(fields, function() {
\t\t\t\t\t\t\t\t\tselectOutField += '<option value=\"'+this.value+'\">'+this.title+'</option>';
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tselectOutField += '</select>';
\t\t\t\t\t\t\t\tselectOutField += '</div>';
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(valueOutTd).html(selectOutField);
\t\t\t\t\t\t}, 'json');
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listinlistForm').on('change', '[listinlistfield]', function() {
\t\t\t\t\t\tlet thisVal = \$(this).val();
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#listinlistForm').find('[listinlistfield]').each(function() {
\t\t\t\t\t\t\t\$(this).find('option[value=\"'+thisVal+'\"]:not(:selected)').remove();
\t\t\t\t\t\t\tif (!\$(this).find('option:not(:disabled)').length) {
\t\t\t\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listinlistForm').changeInputs(function() {
\t\t\t\t\t\tlistInListWin.enabledButtons();
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listinlistForm').on(tapEvent, '[listinlistremove]', function() {
\t\t\t\t\t\tlet rowLength = \$('#listinlistForm').find('tr:not(.empty)').length;
\t\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\t\tif (rowLength == 1) \$('#listinlistForm').html('<tr class=\"empty\"><td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\tlistInListWin.enabledButtons();
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\$('#listInListAdd').on(tapEvent, function() {
\t\t\t\t\t\tlet index = \$('#listinlistForm').find('tr:last').attr('index'),
\t\t\t\t\t\t\thasEmptyRow = \$('#listinlistForm').find('tr.empty').length;
\t\t\t\t\t\t
\t\t\t\t\t\tchoosedFieldsNames = [];
\t\t\t\t\t\t\$('#listinlistForm').find('[listinlistfield]').each(function() {
\t\t\t\t\t\t\tchoosedFieldsNames.push(\$(this).val());
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\tgetAjaxHtml('admin/listinlist/get_form_item', {
\t\t\t\t\t\t\tfields_string: fieldsString,
\t\t\t\t\t\t\tlist_id: listId,
\t\t\t\t\t\t\tindex: (index ? (parseInt(index) + 1) : 0),
\t\t\t\t\t\t\tchoosed_fields: choosedFieldsNames
\t\t\t\t\t\t}, function(rowHtml) {
\t\t\t\t\t\t\tif (rowHtml == -2) {
\t\t\t\t\t\t\t\tnotify('Нет свободных или подходящих полей списков!', 'info');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif (hasEmptyRow) \$('#listinlistForm').html(rowHtml);
\t\t\t\t\t\t\t\telse \$('#listinlistForm').append(rowHtml);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, function() {
\t\t\t\t\t\t\t
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#setList').on(tapEvent, function() {
\t\t\t\t\t\$('#listinlistForm').formSubmit({
\t\t\t\t\t\turl: 'admin/listinlist/save',
\t\t\t\t\t\tfields: {list_id: listId},
\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\tlistInListWin.wait();
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function() {
\t\t\t\t\t\t\t//listInListWin.wait(false);
\t\t\t\t\t\t\tlistInListWin.close();
\t\t\t\t\t\t\tnotify('Данные успешно сохранены!');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(e) {
\t\t\t\t\t\t\tnotify('Ошибка отправки формы!', 'error');
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\tlistInListWin.wait(false);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t
\t\t\t});
\t\t}\t\t
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Опции
\t\$('#optionsList').ddrCRUD({
\t\taddSelector: '#optionsAdd',
\t\tsortField: 'sort',
\t\tfunctions: 'admin/options', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"4\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {},
\t\t\tadd: function(item) {},
\t\t\tsave: function(row) {},
\t\t\tupdate: function(row) {},
\t\t\tremove: function(row) {}
\t\t}
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Иконки
\t\$('#iconsList').ddrCRUD({
\t\taddSelector: '#iconsAdd',
\t\tsortField: 'sort',
\t\tfunctions: 'admin/icons', // get,add,save,update,remove
\t\temptyList: '<tr><td colspan=\"4\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\terrorFields: function(row, fields) {
\t\t\tif (fields) {
\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t});
\t\t\t}
\t\t},
\t\tremoveConfirm: true,
\t\t/*data: {
\t\t\tgetList: data, //Данные при получении списка записей
\t\t\tadd: data, // Данные при добавлении записи
\t\t\tsave: data, // Данные при сохранении записи
\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\tremove: {} // Данные при удалении записи
\t\t},*/
\t\tconfirms: {
\t\t\tgetList: function() {},
\t\t\tadd: function(item) {},
\t\t\tsave: function(row) {},
\t\t\tupdate: function(row) {},
\t\t\tremove: function(row) {}
\t\t}
\t});
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t//---------------------------- Паттерны
\t\$('#newPattern').on(tapEvent, function() {
\t\tddrPopUp({
\t\t\ttitle: 'Новый паттерн|4',
\t\t\twidth: 800,
\t\t\tbuttons: [{id : 'addPattern', title: 'Добавить'}],
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена'
\t\t}, function(newPatternWin) {
\t\t\tnewPatternWin.setData('admin/patterns/get_form');
\t\t\t
\t\t\t
\t\t\t\$('#addPattern').on(tapEvent, function() {
\t\t\t\t\$('#newPatternForm').formSubmit({
\t\t\t\t\turl: 'admin/patterns/save',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tbefore: function() {
\t\t\t\t\t\tnewPatternWin.wait();
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\tif (data == 0) {
\t\t\t\t\t\t\tnotify('Ошибка! паттерн с таким названием уже существует!');
\t\t\t\t\t\t\t\$('#newPatternForm').find('[name=\"title\"]').parent().addClass('error');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tif (\$('#patternsList').find('tr.empty').length > 0) \$('#patternsList').find('tr.empty').remove();
\t\t\t\t\t\t\t\$('#patternsList').append(data);
\t\t\t\t\t\t\tnewPatternWin.close();
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(data) {
\t\t\t\t\t\tconsole.log(data);
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\tnewPatternWin.wait(false);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
\t\$('body').off(tapEvent, '[patternedit]').on(tapEvent, '[patternedit]', function() {
\t\tvar patternId = \$(this).attr('patternedit'),
\t\t\tpatternRow = \$(this).closest('tr');
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Редактировать паттерн|4',
\t\t\twidth: 800,
\t\t\tbuttons: [{id : 'updatePattern', title: 'Обновить'}],
\t\t\tcloseByButton: true,
\t\t\tclose: 'Отмена'
\t\t}, function(updatePatternWin) {
\t\t\tupdatePatternWin.setData('admin/patterns/get_form', {id: patternId});
\t\t\t
\t\t\t
\t\t\t\$('#updatePattern').on(tapEvent, function() {
\t\t\t\t\$('#newPatternForm').formSubmit({
\t\t\t\t\turl: 'admin/patterns/update',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tfields: {id: patternId},
\t\t\t\t\tbefore: function() {
\t\t\t\t\t\tupdatePatternWin.wait();
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\tif (data == 0) {
\t\t\t\t\t\t\tnotify('Ошибка! паттерн с таким названием уже существует!');
\t\t\t\t\t\t\t\$('#newPatternForm').find('[name=\"title\"]').parent().addClass('error');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(patternRow).replaceWith(data);
\t\t\t\t\t\t\tupdatePatternWin.close();
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(data) {
\t\t\t\t\t\tconsole.log(data);
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\tupdatePatternWin.wait(false);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
\t
\t\$('body').off(tapEvent, '[patternremove]').on(tapEvent, '[patternremove]', function() {
\t\tvar patternId = \$(this).attr('patternremove'),
\t\t\tpatternRow = \$(this).closest('tr');
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Удаление паттерна|4',
\t\t\twidth: 400,
\t\t\thtml: '<p class=\"red\">Вы действительно хотите удалить паттерн?</p>',
\t\t\tbuttons: [{id: 'deletePattern', title: 'Удалить'}],
\t\t\tclose: 'Отмена',
\t\t\tcontentToCenter: true
\t\t}, function(removePatternWin) {
\t\t\t\$('#deletePattern').on(tapEvent, function() {
\t\t\t\tremovePatternWin.wait();
\t\t\t\t\$.post('/admin/patterns/remove', {id: patternId}, function(response) {
\t\t\t\t\tif (response) {
\t\t\t\t\t\tif (\$('#patternsList').find('tr').length == 1) {
\t\t\t\t\t\t\t\$(patternRow).remove();
\t\t\t\t\t\t\t\$('#patternsList').append('<tr><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(patternRow).remove();
\t\t\t\t\t\t}
\t\t\t\t\t\tremovePatternWin.close();
\t\t\t\t\t} else {
\t\t\t\t\t\tnotify('Ошибка удаления паттерна!', 'error');
\t\t\t\t\t\tremovePatternWin.wait(false);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t});
\t});
\t
\t
\t
\t
\t
});
//--></script>", "views/admin/sections/structure.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\sections\\structure.tpl");
    }
}
