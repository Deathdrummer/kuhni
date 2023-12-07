<?php

/* views/admin/sections/catalogs.tpl */
class __TwigTemplate_ba9e028e85856a772b25ae81a15206bf0141a3b02cccee0ca7d6ed42d84fc94e extends Twig_Template
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
\t\t<h2>Товары</h2>
\t</div>
\t";
        // line 5
        $context["colspan"] = 1;
        // line 6
        echo "\t";
        if (($context["catalogs"] ?? null)) {
            // line 7
            echo "\t\t<h4 class=\"mb-4px\">Каталоги</h4>
\t\t<ul class=\"tabstitles mb-20px\">
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["catalogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 10
                echo "\t\t\t\t<li id=\"tabCatalog";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", []), "html", null, true);
                echo "</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t</ul>
\t\t
\t\t<div class=\"tabscontent mb-20px\">
\t\t\t";
            // line 15
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
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 16
                echo "\t\t\t\t<div tabid=\"tabCatalog";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", []), "html", null, true);
                echo "\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"w-46px\"></td>
\t\t\t\t\t\t\t\t<td>Заголовок страницы</td>
\t\t\t\t\t\t\t\t<td>SEO URL</td>
\t\t\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t\t\t<td>Категория</td>
\t\t\t\t\t\t\t\t<td class=\"w-13rem\">Опции</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"catalogList";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 29
                if ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["products"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["items"] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["c"], "id", [])] ?? null) : null)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["products"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["items"] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["c"], "id", [])] ?? null) : null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t";
                        $this->loadTemplate("views/admin/render/products/item.tpl", "views/admin/sections/catalogs.tpl", 31)->display(array_merge($context, $context["item"]));
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "ops_prods", [])) {
                            // line 33
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "ops_prods", []));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["optItem"]) {
                                // line 34
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                $this->loadTemplate("views/admin/render/products/item.tpl", "views/admin/sections/catalogs.tpl", 34)->display(array_merge($context, call_user_func_array($this->env->getFilter('merge')->getCallable(), [$context["optItem"], "optional", 1])));
                                // line 35
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optItem'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo "\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 37
                        echo "\t\t\t\t\t\t\t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<tr class=\"empty\"><td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td></tr>
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t<button catalogitemnew=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", []), "html", null, true);
                echo "\" class=\"small\">Новая позиция</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t</div>
\t";
        } else {
            // line 56
            echo "\t\t<p class=\"empty center\">Нет ни одного каталога</p>
\t\t<p class=\"empty center\"><small onclick=\"location.href='";
            // line 57
            echo twig_escape_filter($this->env, base_url("admin#structure.tabCatalogs"), "html", null, true);
            echo "';location.reload();\">Создать</small></p>
\t";
        }
        // line 59
        echo "</div>





<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\tclientFileManager({
\t\tonOpenFilemanager: function() {},
\t\tonChooseFile: function(selector) {
\t\t\tif (\$(selector).attr('prodopt') !== undefined) {
\t\t\t\t\$(selector).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t}
\t\t\t
\t\t\tif (\$(selector).attr('mainimage') !== undefined) {
\t\t\t\tlet imgSrc = \$(selector).find('[fileimage]').children('img').attr('src');
\t\t\t\t\$('[mainimageoption]').attr('style', 'background-image: url('+imgSrc+')');
\t\t\t}
\t\t}
\t});
\t
\t
\t// Tooltip для выбора товара для опции
\tvar prodOpsTooltip,
\tprodOpsTooltipOps = {
\t\tattach: '[shooseprodopsprod]',
\t\ttrigger: 'click',
\t\twidth: 600,
\t\tcloseOnClick: 'body', //body, box
\t\t//closeOnMouseleave: true,
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\toffset: {x: 10},
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
\t// Tooltip для выбора цвета опции
\tvar colorOpsTooltip,
\tcolorOpsTooltipOps = {
\t\tattach: '[shooseprodopscolor]',
\t\ttrigger: 'click',
\t\twidth: 600,
\t\tcloseOnClick: 'body', //body, box
\t\t//closeOnMouseleave: true,
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\toffset: {x: 10},
\t\t//ignoreDelay: true,
\t\t//pointer: 'left',
\t\t//pointTo: 'left',
\t\tposition: {
\t\t  x: 'right',
\t\t  y: 'center'
\t\t},
\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t};
\t
\t
\t
\t
\t
\t//------------------------------------------------------------------------- Новая позиция
\t\$('[catalogitemnew]').on(tapEvent, function() {
\t\tvar catalogId = \$(this).attr('catalogitemnew'), // ID каталога
\t\t\titemId = false,
\t\t\titemRow;
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Новая позиция|4',
\t\t\twidth: 1192,
\t\t\tbuttons: [{id: 'сatalogItemAdd', title: 'Добавить'}],
\t\t\tcloseByButton: true, 
\t\t\tclose: 'Отмена'
\t\t}, function(catalogItemAddWin) {
\t\t\tcatalogItemAddWin.setData('admin/products/new', {catalog_id: catalogId}, function() {
\t\t\t\t
\t\t\t\t
\t\t\t\tcatalogItemAddWin.onScroll(function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.close();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.close();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Хэштеги
\t\t\t\t\$('#selectHashtags').selectize({
\t\t        \tdelimiter: ',',
\t\t            placeholder: 'Введите хэштег',
\t\t            addPrecedence: 'добавить',
\t\t            //maxOptions: 3,
\t\t            create: function(input) {
\t\t                return {
\t\t                    value: input,
\t\t                    text: input
\t\t                }
\t\t            },
\t\t            onChange: function(data) {}
\t\t        });
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addGalleryFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\t//html += \t'<span class=\"file__label\">'+index+'</span>';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"images\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"";
        // line 177
        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
        echo "\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"gallery['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += \t'<div class=\"field file__alt\">';
\t\t\t\t\thtml +=\t\t\t'<input type=\"text\" name=\"gallery['+index+'][alt]\" value=\"\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />';
\t\t\t\t\thtml += \t'</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addSimpleFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"all\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"";
        // line 201
        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
        echo "\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"files['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Атрибуты
\t\t\t\t\$('#addAttribute').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#attributesList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_attribute', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#attributesList').find('tr.empty').length) \$('#attributesList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#attributesList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#attributesList').on(tapEvent, '[removeattribute]', function() {
\t\t\t\t\tlet countRows = \$('#attributesList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#attributesList').append('<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Видео
\t\t\t\t\$('#addVideo').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#videosList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_video', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#videosList').find('tr.empty').length) \$('#videosList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#videosList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#videosList').on(tapEvent, '[removevideo]', function() {
\t\t\t\t\tlet countRows = \$('#videosList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#videosList').append('<tr class=\"empty\"><td colspan=\"2\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t
\t\t\t\t\$('#saveProdAndAddoption').on(tapEvent, function() {
\t\t\t\t\tvar categories = [];
\t\t\t\t\tif (\$('#productCategories').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\t\$('#productCategories').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\t\tcategories.push(parseInt(\$(this).val()));
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\turl: 'admin/products/save',
\t\t\t\t\t\tfields: {catalog_id: catalogId, categories: JSON.stringify(categories)},
\t\t\t\t\t\tignore: '[name=\"files\"]',
\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\t\$('#catalogList'+catalogId).find('tr.empty').remove();
\t\t\t\t\t\t\t\$('#catalogList'+catalogId).append(row);
\t\t\t\t\t\t\titemId = \$(row).find('[catalogsitemedit]').attr('catalogsitemedit');
\t\t\t\t\t\t\titemRow = \$('#catalogList'+catalogId).find('[catalogsitemedit=\"'+itemId+'\"]').closest('tr');
\t\t\t\t\t\t\t\$('#сatalogItemAdd').text('Обновить');
\t\t\t\t\t\t\tnotify('Товар автоматически добавлился!');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#productOptions').ddrCRUD({
\t\t\t\t\t\t\t\taddSelector: '#productAddoption',
\t\t\t\t\t\t\t\tautoAdd: true,
\t\t\t\t\t\t\t\temptyList: '<tr><td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\t\t\t\t\t\t\tfunctions: 'admin/products_options', // get,add,save,update,remove
\t\t\t\t\t\t\t\tsortField: 'position',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tgetList: {id: parseInt(itemId)},
\t\t\t\t\t\t\t\t\tadd: {id: parseInt(itemId)}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tconfirms: {
\t\t\t\t\t\t\t\t\tgetList: function() {
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t\t\t\t\$('#saveProdAndAddoption').replaceWith('<button class=\"verysmall alt2 px-15px py-7px\" id=\"productAddoption\">Добавить опцию</button>');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tadd: function() {
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tsave: function() {
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$('[mainoptionclear]:not(:disabled)').setAttrib('disabled');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tremove: function() {
\t\t\t\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 1) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terrorFields: function(row, fields) {
\t\t\t\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tremoveConfirm: true,
\t\t\t\t\t\t\t\tpopup: catalogItemAddWin
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t
\t\t\t\t\t\t},
\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\tnotify('Для добавления опции необходимо заполнить поле \"Название\"', 'error');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор товара
\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\$('#productOptions').on(tapEvent, '[shooseprodopsprod]', function() {
\t\t\t\t\tprodOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet insProds = [],
\t\t\t\t\t\tthisBlock = \$(this).closest('td'),
\t\t\t\t\t\tcurrentCat = lscache.get('product_options_category') || false;;
\t\t\t\t\t\t
\t\t\t\t\tif (\$('#productOptions').find('[name=\"product_option_id\"]').length) {
\t\t\t\t\t\t\$('#productOptions').find('[name=\"product_option_id\"]').each(function(k, item) {
\t\t\t\t\t\t\tinsProds.push(parseInt(\$(item).val()))
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/products_options/get_products_to_option', {catalog_id: catalogId, product_id: false, inst_prods: insProds, category_id: currentCat}, function(html) {
\t\t\t\t\t\tprodOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('#productopsblock').on(tapEvent, '[chooseproducttoopt]', function() {
\t\t\t\t\t\t\tlet thisProd = this,
\t\t\t\t\t\t\t\tthisId = \$(thisProd).attr('chooseproducttoopt'),
\t\t\t\t\t\t\t\tthisImgSrc = \$(thisProd).find('[prodimage]').attr('style'),
\t\t\t\t\t\t\t\tthisTitle = \$(thisProd).find('[prodtitle]').text();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(thisBlock).find('[name=\"product_option_id\"]').val(thisId);
\t\t\t\t\t\t\t\$(thisBlock).find('[avatar]').attr('style', thisImgSrc);
\t\t\t\t\t\t\t\$(thisBlock).find('[prodopttitle]').text(thisTitle);
\t\t\t\t\t\t\t\$(thisBlock).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\tprodOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#productopscategories').on(tapEvent, '[prodopscategory]:not(.active)', function() {
\t\t\t\t\t\t\tlet thisCat = this,
\t\t\t\t\t\t\t\tcategoryId = \$(thisCat).attr('prodopscategory');
\t\t\t\t\t\t\tlscache.set('product_options_category', categoryId);
\t\t\t\t\t\t\t\$('#productopsblockWait').addClass('visible');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#productopscategories').find('[prodopscategory]').removeClass('active');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tgetAjaxHtml('admin/products_options/get_cat_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: categoryId}, function(html) {
\t\t\t\t\t\t\t\t\$(thisCat).addClass('active');
\t\t\t\t\t\t\t\t\$('#productopsblock').html(html);
\t\t\t\t\t\t\t\t\$('#productopsblockWait').removeClass('visible');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор опции из списка
\t\t\t\t\$('#productOptions, [mainoption]').on(tapEvent, '[shooseprodopscolor]', function() {
\t\t\t\t\tcolorOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet thisItem = this;
\t\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/options/get_variants', function(html) {
\t\t\t\t\t\tcolorOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('[shooseoptvariant]').on(tapEvent, function() {
\t\t\t\t\t\t\tlet thisData = \$(this).attr('shooseoptvariant').split('|');
\t\t\t\t\t\t\t\$(thisItem).css('background-color', thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_color\"], [name=\"color\"]').val(thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_title\"]').val(thisData[1]);
\t\t\t\t\t\t\tif (\$(thisItem).closest('tr').find('[name=\"product_option_id\"]').val()) {
\t\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcolorOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('[mainoptionclear]').on(tapEvent, function() {
\t\t\t\t\tlet row = \$(this).closest('[mainoption]'),
\t\t\t\t\t\tcolorInput = \$(row).find('input[name=\"option_color\"]'),
\t\t\t\t\t\tcolorAvatar = \$(row).find('[shooseprodopscolor]'),
\t\t\t\t\t\tnameInput = \$(row).find('input[name=\"option_title\"]'),
\t\t\t\t\t\tfile = \$(row).find('.file');
\t\t\t\t\t
\t\t\t\t\t\$(file).find('[fileimage]').children('img').attr('src', 'public/images/none_img.png');
\t\t\t\t\t\$(file).find('[filesrc]').val('');
\t\t\t\t\t\$(colorInput).val('');
\t\t\t\t\t\$(colorAvatar).removeAttrib('style');
\t\t\t\t\t\$(nameInput).val('');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$(document).on('ddrpopup:close', function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.destroy();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.destroy();
\t\t\t\t});
\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t//---------------------------------------------------------------------------------------------------------------- Добавить товар
\t\t\t\$('#сatalogItemAdd').on(tapEvent, function() {
\t\t\t\tvar categories = [];
\t\t\t\tif (\$('#productCategories').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productCategories').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\tcategories.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar icons = [];
\t\t\t\tif (\$('#productIcons').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productIcons').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\ticons.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\t\tlet prodTitle = \$('#catalogItemForm').find('input[name=\"title\"]'),
\t\t\t\t\tprodName = \$('#catalogItemForm').find('input[name=\"name\"]'),
\t\t\t\t\tprodSeoUrl = \$('#catalogItemForm').find('input[name=\"seo_url\"]'),
\t\t\t\t\tstat = true,
\t\t\t\t\tlabel = {
\t\t\t\t\t\ttitle: 'Такой заголовок уже существует!',
\t\t\t\t\t\tname: 'Такое название уже существует!',
\t\t\t\t\t\tseo_url: 'Такой URL уже существует!'
\t\t\t\t\t};
\t\t\t\t
\t\t\t\t\$.post('/admin/products/check_unique', {title: \$(prodTitle).val(), name: \$(prodName).val(), seo_url: \$(prodSeoUrl).val()}, function(data) {
\t\t\t\t\t\$.each(data, function(field, match) {
\t\t\t\t\t\tif (match && \$('#catalogItemForm').find('input[name=\"'+field+'\"]').parent('.changed').length) {
\t\t\t\t\t\t\t\$('#catalogItemForm').find('input[name=\"'+field+'\"]').errorLabel(label[field]);
\t\t\t\t\t\t\tstat = false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif (stat) {
\t\t\t\t\t\tif (!itemId) {
\t\t\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\t\t\turl: 'admin/products/save',
\t\t\t\t\t\t\t\tfields: {catalog_id: catalogId, categories: JSON.stringify(categories), icons: JSON.stringify(icons)},
\t\t\t\t\t\t\t\tignore: '[name=\"files\"], [nosubmit]',
\t\t\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\t\t\tif (row) {
\t\t\t\t\t\t\t\t\t\t\$('#catalogList'+catalogId).find('tr.empty').remove();
\t\t\t\t\t\t\t\t\t\t\$('#catalogList'+catalogId).append(row);
\t\t\t\t\t\t\t\t\t\tnotify('Позиция успешно добавлена!');
\t\t\t\t\t\t\t\t\t\tcatalogItemAddWin.close();
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tcatalogItemEditWin.wait(false);
\t\t\t\t\t\t\t\t\t\tnotify('Ошибка обновления товара!', 'error');
\t\t\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\t\t\turl: 'admin/products/update',
\t\t\t\t\t\t\t\tfields: {id: itemId, catalog_id: catalogId, categories: JSON.stringify(categories)},
\t\t\t\t\t\t\t\tignore: '[name=\"files\"], [nosubmit]',
\t\t\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(rowHtml) {
\t\t\t\t\t\t\t\t\t\$(itemRow).replaceWith(rowHtml);
\t\t\t\t\t\t\t\t\tnotify('Позиция успешно добавлена!');
\t\t\t\t\t\t\t\t\tcatalogItemAddWin.close();
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tcatalogItemAddWin.wait(false);
\t\t\t\t\t\tnotify('Ошибка! Проверьте корректность заполнения всех полей!', 'error');
\t\t\t\t\t}\t
\t\t\t\t}, 'json');
\t\t\t\t
\t\t\t});
\t\t\t
\t\t\t
\t\t});
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
\t//------------------------------------------------------------------------------------------------------------------------------------------
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
\t//------------------------------------------------------------------------- Редактировать позицию
\t\$('body').off(tapEvent, '[catalogsitemedit]').on(tapEvent, '[catalogsitemedit]', function() {
\t\tvar itemId = \$(this).attr('catalogsitemedit'), // ID товара
\t\t\tcatalogId = \$(this).attr('catalogid'), // ID каталога
\t\t\titemRow = \$(this).closest('tr');
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Редактировать позицию|4',
\t\t\twidth: 1192,
\t\t\tbuttons: [{id: 'сatalogItemUpdate', title: 'Обновить'}],
\t\t\tcloseByButton: true, 
\t\t\tclose: 'Отмена'
\t\t}, function(catalogItemEditWin) {
\t\t\tcatalogItemEditWin.setData('admin/products/edit', {id: itemId, catalog_id: catalogId}, function() {
\t\t\t\t
\t\t\t\tcatalogItemEditWin.onScroll(function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.close();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.close();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Хэштеги
\t\t\t\t\$('#selectHashtags').selectize({
\t\t        \tdelimiter: ',',
\t\t            placeholder: 'Введите хэштег',
\t\t            addPrecedence: 'добавить',
\t\t            //maxOptions: 3,
\t\t            create: function(input) {
\t\t                return {
\t\t                    value: input,
\t\t                    text: input
\t\t                }
\t\t            },
\t\t            onChange: function(data) {}
\t\t        });
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addGalleryFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"images\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"";
        // line 605
        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
        echo "\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"gallery['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += \t'<div class=\"field file__alt\">';
\t\t\t\t\thtml +=\t\t\t'<input type=\"text\" name=\"gallery['+index+'][alt]\" value=\"\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />';
\t\t\t\t\thtml += \t'</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addSimpleFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"all\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"";
        // line 629
        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
        echo "\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"files['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#productOptions').ddrCRUD({
\t\t\t\t\taddSelector: '#productAddoption',
\t\t\t\t\temptyList: '',
\t\t\t\t\tfunctions: 'admin/products_options', // get,add,save,update,remove
\t\t\t\t\tsortField: 'position',
\t\t\t\t\tdata: {
\t\t\t\t\t\tgetList: {id: itemId},
\t\t\t\t\t\tadd: {id: itemId}
\t\t\t\t\t},
\t\t\t\t\tconfirms: {
\t\t\t\t\t\tgetList: function() {
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 0) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t},
\t\t\t\t\t\tadd: function() {
\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t},
\t\t\t\t\t\tsave: function() {
\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('[mainoptionclear]:not(:disabled)').setAttrib('disabled');
\t\t\t\t\t\t},
\t\t\t\t\t\tremove: function() {
\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 1) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terrorFields: function(row, fields) {
\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tremoveConfirm: true,
\t\t\t\t\tpopup: catalogItemEditWin
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Атрибуты
\t\t\t\t\$('#addAttribute').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#attributesList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_attribute', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#attributesList').find('tr.empty').length) \$('#attributesList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#attributesList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#attributesList').on(tapEvent, '[removeattribute]', function() {
\t\t\t\t\tlet countRows = \$('#attributesList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#attributesList').append('<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Видео
\t\t\t\t\$('#addVideo').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#videosList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_video', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#videosList').find('tr.empty').length) \$('#videosList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#videosList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#videosList').on(tapEvent, '[removevideo]', function() {
\t\t\t\t\tlet countRows = \$('#videosList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#videosList').append('<tr class=\"empty\"><td colspan=\"2\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор товара
\t\t\t\t\$('#productOptions').on(tapEvent, '[shooseprodopsprod]', function() {
\t\t\t\t\tprodOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet insProds = [itemId], // сразу добавили ID текущего товара
\t\t\t\t\t\tthisBlock = \$(this).closest('td'),
\t\t\t\t\t\tcurrentCat = lscache.get('product_options_category') || false;
\t\t\t\t\t\t
\t\t\t\t\tif (\$('#productOptions').find('[name=\"product_option_id\"]').length) {
\t\t\t\t\t\t\$('#productOptions').find('[name=\"product_option_id\"]').each(function(k, item) {
\t\t\t\t\t\t\tinsProds.push(parseInt(\$(item).val()))
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/products_options/get_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: currentCat}, function(html) {
\t\t\t\t\t\tprodOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('#productopsblock').on(tapEvent, '[chooseproducttoopt]', function() {
\t\t\t\t\t\t\tlet thisProd = this,
\t\t\t\t\t\t\t\tthisId = \$(thisProd).attr('chooseproducttoopt'),
\t\t\t\t\t\t\t\tthisImgSrc = \$(thisProd).find('[prodimage]').attr('style'),
\t\t\t\t\t\t\t\tthisTitle = \$(thisProd).find('[prodtitle]').text();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(thisBlock).find('[name=\"product_option_id\"]').val(thisId);
\t\t\t\t\t\t\t\$(thisBlock).find('[avatar]').attr('style', thisImgSrc);
\t\t\t\t\t\t\t\$(thisBlock).find('[prodopttitle]').text(thisTitle);
\t\t\t\t\t\t\t\$(thisBlock).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\tprodOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#productopscategories').on(tapEvent, '[prodopscategory]:not(.active)', function() {
\t\t\t\t\t\t\tlet thisCat = this,
\t\t\t\t\t\t\t\tcategoryId = \$(thisCat).attr('prodopscategory');
\t\t\t\t\t\t\tlscache.set('product_options_category', categoryId);
\t\t\t\t\t\t\t\$('#productopsblockWait').addClass('visible');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#productopscategories').find('[prodopscategory]').removeClass('active');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tgetAjaxHtml('admin/products_options/get_cat_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: categoryId}, function(html) {
\t\t\t\t\t\t\t\t\$(thisCat).addClass('active');
\t\t\t\t\t\t\t\t\$('#productopsblock').html(html);
\t\t\t\t\t\t\t\t\$('#productopsblockWait').removeClass('visible');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор опции из списка
\t\t\t\t\$('#productOptions, [mainoption]').on(tapEvent, '[shooseprodopscolor]', function() {
\t\t\t\t\tcolorOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet thisItem = this;
\t\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/options/get_variants', function(html) {
\t\t\t\t\t\tcolorOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('[shooseoptvariant]').on(tapEvent, function() {
\t\t\t\t\t\t\tlet thisData = \$(this).attr('shooseoptvariant').split('|');
\t\t\t\t\t\t\t\$(thisItem).css('background-color', thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_color\"], [name=\"color\"]').val(thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_title\"]').val(thisData[1]);
\t\t\t\t\t\t\tif (\$(thisItem).closest('tr').find('[name=\"product_option_id\"]').val()) {
\t\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcolorOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('[mainoptionclear]').on(tapEvent, function() {
\t\t\t\t\tlet row = \$(this).closest('[mainoption]'),
\t\t\t\t\t\tcolorInput = \$(row).find('input[name=\"option_color\"]'),
\t\t\t\t\t\tcolorAvatar = \$(row).find('[shooseprodopscolor]'),
\t\t\t\t\t\tnameInput = \$(row).find('input[name=\"option_title\"]'),
\t\t\t\t\t\tfile = \$(row).find('.file');
\t\t\t\t\t
\t\t\t\t\t\$(file).find('[fileimage]').children('img').attr('src', 'public/images/none_img.png');
\t\t\t\t\t\$(file).find('[filesrc]').val('');
\t\t\t\t\t\$(colorInput).val('');
\t\t\t\t\t\$(colorAvatar).removeAttrib('style');
\t\t\t\t\t\$(nameInput).val('');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$(document).on('ddrpopup:close', function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.destroy();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.destroy();
\t\t\t\t});
\t\t\t\t
\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t//---------------------------------------------------------------------------------------------------------------- Обновить товар
\t\t\t\$('#сatalogItemUpdate').on(tapEvent, function() {
\t\t\t\tcatalogItemEditWin.wait();
\t\t\t\tvar categories = [];
\t\t\t\tif (\$('#productCategories').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productCategories').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\tcategories.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar icons = [];
\t\t\t\tif (\$('#productIcons').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productIcons').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\ticons.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\tlet prodTitle = \$('#catalogItemForm').find('input[name=\"title\"]'),
\t\t\t\t\tprodName = \$('#catalogItemForm').find('input[name=\"name\"]'),
\t\t\t\t\tprodSeoUrl = \$('#catalogItemForm').find('input[name=\"seo_url\"]'),
\t\t\t\t\tstat = true,
\t\t\t\t\tlabel = {
\t\t\t\t\t\ttitle: 'Такой заголовок уже существует!',
\t\t\t\t\t\tname: 'Такое название уже существует!',
\t\t\t\t\t\tseo_url: 'Такой URL уже существует!'
\t\t\t\t\t};
\t\t\t\t
\t\t\t\t\$.post('/admin/products/check_unique', {title: \$(prodTitle).val(), name: \$(prodName).val(), seo_url: \$(prodSeoUrl).val()}, function(data) {
\t\t\t\t\t\$.each(data, function(field, match) {
\t\t\t\t\t\tif (match && \$('#catalogItemForm').find('input[name=\"'+field+'\"]').parent('.changed').length) {
\t\t\t\t\t\t\t\$('#catalogItemForm').find('input[name=\"'+field+'\"]').errorLabel(label[field]);
\t\t\t\t\t\t\tstat = false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif (stat) {
\t\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\t\turl: 'admin/products/update',
\t\t\t\t\t\t\tfields: {id: itemId, catalog_id: catalogId, categories: JSON.stringify(categories), icons: JSON.stringify(icons)},
\t\t\t\t\t\t\tignore: '[name=\"files\"], [nosubmit]',
\t\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(rowHtml) {
\t\t\t\t\t\t\t\tif (rowHtml) {
\t\t\t\t\t\t\t\t\t\$(itemRow).replaceWith(rowHtml);
\t\t\t\t\t\t\t\t\tnotify('Позиция успешно обновлена!');
\t\t\t\t\t\t\t\t\tcatalogItemEditWin.close();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcatalogItemEditWin.wait(false);
\t\t\t\t\t\t\t\t\tnotify('Ошибка обновления товара!', 'error');
\t\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\t\tcatalogItemEditWin.wait(false);
\t\t\t\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tcatalogItemEditWin.wait(false);
\t\t\t\t\t\tnotify('Ошибка! Проверьте корректность заполнения всех полей!', 'error');
\t\t\t\t\t}\t
\t\t\t\t}, 'json');
\t\t\t});
\t\t\t
\t\t});
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
\t
\t
\t
\t
\t//------------------------------------------------------------------------- Копировать позицию
\t\$('body').off(tapEvent, '[catalogsitemcopy]').on(tapEvent, '[catalogsitemcopy]', function() {
\t\tvar itemId = \$(this).attr('catalogsitemcopy'), // ID товара
\t\t\tcatalogId = \$(this).attr('catalogid'), // ID каталога
\t\t\titemRow = \$(this).closest('tr');
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Копировать позицию|4',
\t\t\twidth: 1192,
\t\t\tbuttons: [{id: 'сatalogItemCopy', title: 'Копировать'}],
\t\t\tcloseByButton: true, 
\t\t\tclose: 'Отмена'
\t\t}, function(catalogItemCopyWin) {
\t\t\tcatalogItemCopyWin.setData('admin/products/edit', {id: itemId, catalog_id: catalogId, copy: 1}, function() {
\t\t\t\t
\t\t\t\tcatalogItemCopyWin.onScroll(function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.close();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.close();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Хэштеги
\t\t\t\t\$('#selectHashtags').selectize({
\t\t        \tdelimiter: ',',
\t\t            placeholder: 'Введите хэштег',
\t\t            addPrecedence: 'добавить',
\t\t            //maxOptions: 3,
\t\t            create: function(input) {
\t\t                return {
\t\t                    value: input,
\t\t                    text: input
\t\t                }
\t\t            },
\t\t            onChange: function(data) {}
\t\t        });
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addGalleryFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"images\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"";
        // line 969
        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
        echo "\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"gallery['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += \t'<div class=\"field file__alt\">';
\t\t\t\t\thtml +=\t\t\t'<input type=\"text\" name=\"gallery['+index+'][alt]\" value=\"\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />';
\t\t\t\t\thtml += \t'</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addSimpleFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"all\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"";
        // line 993
        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
        echo "\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"files['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#productOptions').ddrCRUD({
\t\t\t\t\taddSelector: '#productAddoption',
\t\t\t\t\temptyList: '',
\t\t\t\t\tfunctions: 'admin/products_options', // get,add,save,update,remove
\t\t\t\t\tsortField: 'position',
\t\t\t\t\tdata: {
\t\t\t\t\t\tgetList: {id: itemId},
\t\t\t\t\t\tadd: {id: itemId}
\t\t\t\t\t},
\t\t\t\t\tconfirms: {
\t\t\t\t\t\tgetList: function() {
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 0) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t},
\t\t\t\t\t\tadd: function() {
\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t},
\t\t\t\t\t\tsave: function() {
\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('[mainoptionclear]:not(:disabled)').setAttrib('disabled');
\t\t\t\t\t\t},
\t\t\t\t\t\tremove: function() {
\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 1) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terrorFields: function(row, fields) {
\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tremoveConfirm: true,
\t\t\t\t\tpopup: catalogItemCopyWin
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Атрибуты
\t\t\t\t\$('#addAttribute').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#attributesList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_attribute', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#attributesList').find('tr.empty').length) \$('#attributesList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#attributesList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#attributesList').on(tapEvent, '[removeattribute]', function() {
\t\t\t\t\tlet countRows = \$('#attributesList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#attributesList').append('<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Видео
\t\t\t\t\$('#addVideo').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#videosList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_video', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#videosList').find('tr.empty').length) \$('#videosList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#videosList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#videosList').on(tapEvent, '[removevideo]', function() {
\t\t\t\t\tlet countRows = \$('#videosList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#videosList').append('<tr class=\"empty\"><td colspan=\"2\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор товара
\t\t\t\t\$('#productOptions').on(tapEvent, '[shooseprodopsprod]', function() {
\t\t\t\t\tprodOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet insProds = [itemId], // сразу добавили ID текущего товара
\t\t\t\t\t\tthisBlock = \$(this).closest('td'),
\t\t\t\t\t\tcurrentCat = lscache.get('product_options_category') || false;
\t\t\t\t\t\t
\t\t\t\t\tif (\$('#productOptions').find('[name=\"product_option_id\"]').length) {
\t\t\t\t\t\t\$('#productOptions').find('[name=\"product_option_id\"]').each(function(k, item) {
\t\t\t\t\t\t\tinsProds.push(parseInt(\$(item).val()))
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/products_options/get_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: currentCat}, function(html) {
\t\t\t\t\t\tprodOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('#productopsblock').on(tapEvent, '[chooseproducttoopt]', function() {
\t\t\t\t\t\t\tlet thisProd = this,
\t\t\t\t\t\t\t\tthisId = \$(thisProd).attr('chooseproducttoopt'),
\t\t\t\t\t\t\t\tthisImgSrc = \$(thisProd).find('[prodimage]').attr('style'),
\t\t\t\t\t\t\t\tthisTitle = \$(thisProd).find('[prodtitle]').text();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(thisBlock).find('[name=\"product_option_id\"]').val(thisId);
\t\t\t\t\t\t\t\$(thisBlock).find('[avatar]').attr('style', thisImgSrc);
\t\t\t\t\t\t\t\$(thisBlock).find('[prodopttitle]').text(thisTitle);
\t\t\t\t\t\t\t\$(thisBlock).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\tprodOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#productopscategories').on(tapEvent, '[prodopscategory]:not(.active)', function() {
\t\t\t\t\t\t\tlet thisCat = this,
\t\t\t\t\t\t\t\tcategoryId = \$(thisCat).attr('prodopscategory');
\t\t\t\t\t\t\tlscache.set('product_options_category', categoryId);
\t\t\t\t\t\t\t\$('#productopsblockWait').addClass('visible');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#productopscategories').find('[prodopscategory]').removeClass('active');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tgetAjaxHtml('admin/products_options/get_cat_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: categoryId}, function(html) {
\t\t\t\t\t\t\t\t\$(thisCat).addClass('active');
\t\t\t\t\t\t\t\t\$('#productopsblock').html(html);
\t\t\t\t\t\t\t\t\$('#productopsblockWait').removeClass('visible');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор опции из списка
\t\t\t\t\$('#productOptions, [mainoption]').on(tapEvent, '[shooseprodopscolor]', function() {
\t\t\t\t\tcolorOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet thisItem = this;
\t\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/options/get_variants', function(html) {
\t\t\t\t\t\tcolorOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('[shooseoptvariant]').on(tapEvent, function() {
\t\t\t\t\t\t\tlet thisData = \$(this).attr('shooseoptvariant').split('|');
\t\t\t\t\t\t\t\$(thisItem).css('background-color', thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_color\"], [name=\"color\"]').val(thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_title\"]').val(thisData[1]);
\t\t\t\t\t\t\tif (\$(thisItem).closest('tr').find('[name=\"product_option_id\"]').val()) {
\t\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcolorOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('[mainoptionclear]').on(tapEvent, function() {
\t\t\t\t\tlet row = \$(this).closest('[mainoption]'),
\t\t\t\t\t\tcolorInput = \$(row).find('input[name=\"option_color\"]'),
\t\t\t\t\t\tcolorAvatar = \$(row).find('[shooseprodopscolor]'),
\t\t\t\t\t\tnameInput = \$(row).find('input[name=\"option_title\"]'),
\t\t\t\t\t\tfile = \$(row).find('.file');
\t\t\t\t\t
\t\t\t\t\t\$(file).find('[fileimage]').children('img').attr('src', 'public/images/none_img.png');
\t\t\t\t\t\$(file).find('[filesrc]').val('');
\t\t\t\t\t\$(colorInput).val('');
\t\t\t\t\t\$(colorAvatar).removeAttrib('style');
\t\t\t\t\t\$(nameInput).val('');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$(document).on('ddrpopup:close', function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.destroy();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.destroy();
\t\t\t\t});
\t\t\t\t
\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t//---------------------------------------------------------------------------------------------------------------- Скопировать товар
\t\t\t\$('#сatalogItemCopy').on(tapEvent, function() {
\t\t\t\tcatalogItemCopyWin.wait();
\t\t\t\tvar categories = [];
\t\t\t\tif (\$('#productCategories').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productCategories').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\tcategories.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar icons = [];
\t\t\t\tif (\$('#productIcons').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productIcons').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\ticons.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\t\tlet prodTitle = \$('#catalogItemForm').find('input[name=\"title\"]'),
\t\t\t\t\tprodName = \$('#catalogItemForm').find('input[name=\"name\"]'),
\t\t\t\t\tprodSeoUrl = \$('#catalogItemForm').find('input[name=\"seo_url\"]'),
\t\t\t\t\tstat = true,
\t\t\t\t\tlabel = {
\t\t\t\t\t\ttitle: 'Такой заголовок уже существует!',
\t\t\t\t\t\tname: 'Такое название уже существует!',
\t\t\t\t\t\tseo_url: 'Такой URL уже существует!'
\t\t\t\t\t};
\t\t\t\t
\t\t\t\t\$.post('/admin/products/check_unique', {title: \$(prodTitle).val(), name: \$(prodName).val(), seo_url: \$(prodSeoUrl).val()}, function(data) {
\t\t\t\t\t\$.each(data, function(field, match) {
\t\t\t\t\t\tif (match) {
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#catalogItemForm').find('input[name=\"'+field+'\"]').errorLabel(label[field]);
\t\t\t\t\t\t\tstat = false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif (stat) {
\t\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\t\turl: 'admin/products/copy',
\t\t\t\t\t\t\tfields: {id: itemId, catalog_id: catalogId, categories: JSON.stringify(categories), icons: JSON.stringify(icons)},
\t\t\t\t\t\t\tignore: '[name=\"files\"], [nosubmit]',
\t\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(rowHtml) {
\t\t\t\t\t\t\t\t\$('#catalogList'+catalogId).append(rowHtml);
\t\t\t\t\t\t\t\tnotify('Позиция успешно скопирована!');
\t\t\t\t\t\t\t\tcatalogItemCopyWin.close();
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\t\tcatalogItemCopyWin.wait(false);
\t\t\t\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tcatalogItemCopyWin.wait(false);
\t\t\t\t\t\tnotify('Ошибка! Проверьте корректность заполнения всех полей!', 'error');
\t\t\t\t\t}\t
\t\t\t\t}, 'json');
\t\t\t\t
\t\t\t});
\t\t\t
\t\t});
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
\t//------------------------------------------------------------------------- Удалить позицию
\t\$('body').off(tapEvent, '[catalogsitemremove]').on(tapEvent, '[catalogsitemremove]', function() {
\t\tvar itemId = \$(this).attr('catalogsitemremove'),
\t\t\titemRow = \$(this).closest('tr'),
\t\t\tcountRows = \$(itemRow).closest('tbody').find('tr:not(.empty)').length;
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Удалить позицию|4',
\t\t\twidth: 400,
\t\t\thtml: '<p class=\"red strong\">Вы действительно хотите удалить позицию?</p>',
\t\t\tbuttons: [{id: 'removeCatalogsItem', title: 'Удалить'}],
\t\t\tclose: 'Отмена'
\t\t}, function(catalogItemRemoveWin) {
\t\t\t\$('#removeCatalogsItem').on(tapEvent, function() {
\t\t\t\tcatalogItemRemoveWin.wait();
\t\t\t\t\$.post('/admin/products/remove', {id: itemId}, function(response) {
\t\t\t\t\tif (response) {
\t\t\t\t\t\tif (countRows == 1) \$(itemRow).replaceWith('<tr class=\"empty\"><td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\telse \$(itemRow).remove();
\t\t\t\t\t\tnotify('Позиция успешно удалена!');
\t\t\t\t\t\tcatalogItemRemoveWin.close();
\t\t\t\t\t\t
\t\t\t\t\t} else {
\t\t\t\t\t\tnotify('ошибка! Позиция не удалена!', 'error');
\t\t\t\t\t}
\t\t\t\t\tcatalogItemRemoveWin.wait();
\t\t\t\t});
\t\t\t});
\t\t});\t\t
\t});
\t
\t
\t
\t
\t
});\t
\t
\t
\t
\t
\$(document).on('rendersection', function() {
\t
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "views/admin/sections/catalogs.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1174 => 993,  1147 => 969,  804 => 629,  777 => 605,  370 => 201,  343 => 177,  223 => 59,  218 => 57,  215 => 56,  211 => 54,  189 => 46,  182 => 41,  178 => 39,  175 => 38,  161 => 37,  144 => 35,  141 => 34,  123 => 33,  120 => 32,  117 => 31,  99 => 30,  97 => 29,  93 => 28,  77 => 16,  60 => 15,  55 => 12,  44 => 10,  40 => 9,  36 => 7,  33 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"{{id}}\">
\t<div class=\"section_title\">
\t\t<h2>Товары</h2>
\t</div>
\t{% set colspan = 1 %}
\t{% if catalogs %}
\t\t<h4 class=\"mb-4px\">Каталоги</h4>
\t\t<ul class=\"tabstitles mb-20px\">
\t\t\t{% for c in catalogs %}
\t\t\t\t<li id=\"tabCatalog{{c.id}}\">{{c.title}}</li>
\t\t\t{% endfor %}
\t\t</ul>
\t\t
\t\t<div class=\"tabscontent mb-20px\">
\t\t\t{% for c in catalogs %}
\t\t\t\t<div tabid=\"tabCatalog{{c.id}}\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"w-46px\"></td>
\t\t\t\t\t\t\t\t<td>Заголовок страницы</td>
\t\t\t\t\t\t\t\t<td>SEO URL</td>
\t\t\t\t\t\t\t\t<td>Название</td>
\t\t\t\t\t\t\t\t<td>Категория</td>
\t\t\t\t\t\t\t\t<td class=\"w-13rem\">Опции</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"catalogList{{c.id}}\">
\t\t\t\t\t\t\t{% if products['items'][c.id] %}
\t\t\t\t\t\t\t\t{% for item in products['items'][c.id] %}
\t\t\t\t\t\t\t\t\t{% include 'views/admin/render/products/item.tpl' with item %}
\t\t\t\t\t\t\t\t\t{% if item.ops_prods %}
\t\t\t\t\t\t\t\t\t\t{% for optItem in item.ops_prods %}
\t\t\t\t\t\t\t\t\t\t\t{% include 'views/admin/render/products/item.tpl' with optItem|merge('optional', 1) %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}\t
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr class=\"empty\"><td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td></tr>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t<button catalogitemnew=\"{{c.id}}\" class=\"small\">Новая позиция</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t{% else %}
\t\t<p class=\"empty center\">Нет ни одного каталога</p>
\t\t<p class=\"empty center\"><small onclick=\"location.href='{{base_url('admin#structure.tabCatalogs')}}';location.reload();\">Создать</small></p>
\t{% endif %}
</div>





<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\tclientFileManager({
\t\tonOpenFilemanager: function() {},
\t\tonChooseFile: function(selector) {
\t\t\tif (\$(selector).attr('prodopt') !== undefined) {
\t\t\t\t\$(selector).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t}
\t\t\t
\t\t\tif (\$(selector).attr('mainimage') !== undefined) {
\t\t\t\tlet imgSrc = \$(selector).find('[fileimage]').children('img').attr('src');
\t\t\t\t\$('[mainimageoption]').attr('style', 'background-image: url('+imgSrc+')');
\t\t\t}
\t\t}
\t});
\t
\t
\t// Tooltip для выбора товара для опции
\tvar prodOpsTooltip,
\tprodOpsTooltipOps = {
\t\tattach: '[shooseprodopsprod]',
\t\ttrigger: 'click',
\t\twidth: 600,
\t\tcloseOnClick: 'body', //body, box
\t\t//closeOnMouseleave: true,
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\toffset: {x: 10},
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
\t// Tooltip для выбора цвета опции
\tvar colorOpsTooltip,
\tcolorOpsTooltipOps = {
\t\tattach: '[shooseprodopscolor]',
\t\ttrigger: 'click',
\t\twidth: 600,
\t\tcloseOnClick: 'body', //body, box
\t\t//closeOnMouseleave: true,
\t\taddClass: 'ddrtooltip',
\t\toutside: 'x',
\t\toffset: {x: 10},
\t\t//ignoreDelay: true,
\t\t//pointer: 'left',
\t\t//pointTo: 'left',
\t\tposition: {
\t\t  x: 'right',
\t\t  y: 'center'
\t\t},
\t\tcontent: '<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>'
\t};
\t
\t
\t
\t
\t
\t//------------------------------------------------------------------------- Новая позиция
\t\$('[catalogitemnew]').on(tapEvent, function() {
\t\tvar catalogId = \$(this).attr('catalogitemnew'), // ID каталога
\t\t\titemId = false,
\t\t\titemRow;
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Новая позиция|4',
\t\t\twidth: 1192,
\t\t\tbuttons: [{id: 'сatalogItemAdd', title: 'Добавить'}],
\t\t\tcloseByButton: true, 
\t\t\tclose: 'Отмена'
\t\t}, function(catalogItemAddWin) {
\t\t\tcatalogItemAddWin.setData('admin/products/new', {catalog_id: catalogId}, function() {
\t\t\t\t
\t\t\t\t
\t\t\t\tcatalogItemAddWin.onScroll(function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.close();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.close();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Хэштеги
\t\t\t\t\$('#selectHashtags').selectize({
\t\t        \tdelimiter: ',',
\t\t            placeholder: 'Введите хэштег',
\t\t            addPrecedence: 'добавить',
\t\t            //maxOptions: 3,
\t\t            create: function(input) {
\t\t                return {
\t\t                    value: input,
\t\t                    text: input
\t\t                }
\t\t            },
\t\t            onChange: function(data) {}
\t\t        });
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addGalleryFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\t//html += \t'<span class=\"file__label\">'+index+'</span>';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"images\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"gallery['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += \t'<div class=\"field file__alt\">';
\t\t\t\t\thtml +=\t\t\t'<input type=\"text\" name=\"gallery['+index+'][alt]\" value=\"\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />';
\t\t\t\t\thtml += \t'</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addSimpleFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"all\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"files['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Атрибуты
\t\t\t\t\$('#addAttribute').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#attributesList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_attribute', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#attributesList').find('tr.empty').length) \$('#attributesList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#attributesList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#attributesList').on(tapEvent, '[removeattribute]', function() {
\t\t\t\t\tlet countRows = \$('#attributesList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#attributesList').append('<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Видео
\t\t\t\t\$('#addVideo').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#videosList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_video', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#videosList').find('tr.empty').length) \$('#videosList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#videosList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#videosList').on(tapEvent, '[removevideo]', function() {
\t\t\t\t\tlet countRows = \$('#videosList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#videosList').append('<tr class=\"empty\"><td colspan=\"2\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t
\t\t\t\t\$('#saveProdAndAddoption').on(tapEvent, function() {
\t\t\t\t\tvar categories = [];
\t\t\t\t\tif (\$('#productCategories').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\t\$('#productCategories').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\t\tcategories.push(parseInt(\$(this).val()));
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\turl: 'admin/products/save',
\t\t\t\t\t\tfields: {catalog_id: catalogId, categories: JSON.stringify(categories)},
\t\t\t\t\t\tignore: '[name=\"files\"]',
\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\t\$('#catalogList'+catalogId).find('tr.empty').remove();
\t\t\t\t\t\t\t\$('#catalogList'+catalogId).append(row);
\t\t\t\t\t\t\titemId = \$(row).find('[catalogsitemedit]').attr('catalogsitemedit');
\t\t\t\t\t\t\titemRow = \$('#catalogList'+catalogId).find('[catalogsitemedit=\"'+itemId+'\"]').closest('tr');
\t\t\t\t\t\t\t\$('#сatalogItemAdd').text('Обновить');
\t\t\t\t\t\t\tnotify('Товар автоматически добавлился!');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#productOptions').ddrCRUD({
\t\t\t\t\t\t\t\taddSelector: '#productAddoption',
\t\t\t\t\t\t\t\tautoAdd: true,
\t\t\t\t\t\t\t\temptyList: '<tr><td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\t\t\t\t\t\t\tfunctions: 'admin/products_options', // get,add,save,update,remove
\t\t\t\t\t\t\t\tsortField: 'position',
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tgetList: {id: parseInt(itemId)},
\t\t\t\t\t\t\t\t\tadd: {id: parseInt(itemId)}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tconfirms: {
\t\t\t\t\t\t\t\t\tgetList: function() {
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t\t\t\t\$('#saveProdAndAddoption').replaceWith('<button class=\"verysmall alt2 px-15px py-7px\" id=\"productAddoption\">Добавить опцию</button>');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tadd: function() {
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tsave: function() {
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$('[mainoptionclear]:not(:disabled)').setAttrib('disabled');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tremove: function() {
\t\t\t\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 1) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terrorFields: function(row, fields) {
\t\t\t\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tremoveConfirm: true,
\t\t\t\t\t\t\t\tpopup: catalogItemAddWin
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t
\t\t\t\t\t\t},
\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\tnotify('Для добавления опции необходимо заполнить поле \"Название\"', 'error');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор товара
\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\$('#productOptions').on(tapEvent, '[shooseprodopsprod]', function() {
\t\t\t\t\tprodOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet insProds = [],
\t\t\t\t\t\tthisBlock = \$(this).closest('td'),
\t\t\t\t\t\tcurrentCat = lscache.get('product_options_category') || false;;
\t\t\t\t\t\t
\t\t\t\t\tif (\$('#productOptions').find('[name=\"product_option_id\"]').length) {
\t\t\t\t\t\t\$('#productOptions').find('[name=\"product_option_id\"]').each(function(k, item) {
\t\t\t\t\t\t\tinsProds.push(parseInt(\$(item).val()))
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/products_options/get_products_to_option', {catalog_id: catalogId, product_id: false, inst_prods: insProds, category_id: currentCat}, function(html) {
\t\t\t\t\t\tprodOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('#productopsblock').on(tapEvent, '[chooseproducttoopt]', function() {
\t\t\t\t\t\t\tlet thisProd = this,
\t\t\t\t\t\t\t\tthisId = \$(thisProd).attr('chooseproducttoopt'),
\t\t\t\t\t\t\t\tthisImgSrc = \$(thisProd).find('[prodimage]').attr('style'),
\t\t\t\t\t\t\t\tthisTitle = \$(thisProd).find('[prodtitle]').text();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(thisBlock).find('[name=\"product_option_id\"]').val(thisId);
\t\t\t\t\t\t\t\$(thisBlock).find('[avatar]').attr('style', thisImgSrc);
\t\t\t\t\t\t\t\$(thisBlock).find('[prodopttitle]').text(thisTitle);
\t\t\t\t\t\t\t\$(thisBlock).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\tprodOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#productopscategories').on(tapEvent, '[prodopscategory]:not(.active)', function() {
\t\t\t\t\t\t\tlet thisCat = this,
\t\t\t\t\t\t\t\tcategoryId = \$(thisCat).attr('prodopscategory');
\t\t\t\t\t\t\tlscache.set('product_options_category', categoryId);
\t\t\t\t\t\t\t\$('#productopsblockWait').addClass('visible');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#productopscategories').find('[prodopscategory]').removeClass('active');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tgetAjaxHtml('admin/products_options/get_cat_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: categoryId}, function(html) {
\t\t\t\t\t\t\t\t\$(thisCat).addClass('active');
\t\t\t\t\t\t\t\t\$('#productopsblock').html(html);
\t\t\t\t\t\t\t\t\$('#productopsblockWait').removeClass('visible');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор опции из списка
\t\t\t\t\$('#productOptions, [mainoption]').on(tapEvent, '[shooseprodopscolor]', function() {
\t\t\t\t\tcolorOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet thisItem = this;
\t\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/options/get_variants', function(html) {
\t\t\t\t\t\tcolorOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('[shooseoptvariant]').on(tapEvent, function() {
\t\t\t\t\t\t\tlet thisData = \$(this).attr('shooseoptvariant').split('|');
\t\t\t\t\t\t\t\$(thisItem).css('background-color', thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_color\"], [name=\"color\"]').val(thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_title\"]').val(thisData[1]);
\t\t\t\t\t\t\tif (\$(thisItem).closest('tr').find('[name=\"product_option_id\"]').val()) {
\t\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcolorOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('[mainoptionclear]').on(tapEvent, function() {
\t\t\t\t\tlet row = \$(this).closest('[mainoption]'),
\t\t\t\t\t\tcolorInput = \$(row).find('input[name=\"option_color\"]'),
\t\t\t\t\t\tcolorAvatar = \$(row).find('[shooseprodopscolor]'),
\t\t\t\t\t\tnameInput = \$(row).find('input[name=\"option_title\"]'),
\t\t\t\t\t\tfile = \$(row).find('.file');
\t\t\t\t\t
\t\t\t\t\t\$(file).find('[fileimage]').children('img').attr('src', 'public/images/none_img.png');
\t\t\t\t\t\$(file).find('[filesrc]').val('');
\t\t\t\t\t\$(colorInput).val('');
\t\t\t\t\t\$(colorAvatar).removeAttrib('style');
\t\t\t\t\t\$(nameInput).val('');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$(document).on('ddrpopup:close', function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.destroy();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.destroy();
\t\t\t\t});
\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t//---------------------------------------------------------------------------------------------------------------- Добавить товар
\t\t\t\$('#сatalogItemAdd').on(tapEvent, function() {
\t\t\t\tvar categories = [];
\t\t\t\tif (\$('#productCategories').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productCategories').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\tcategories.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar icons = [];
\t\t\t\tif (\$('#productIcons').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productIcons').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\ticons.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\t\tlet prodTitle = \$('#catalogItemForm').find('input[name=\"title\"]'),
\t\t\t\t\tprodName = \$('#catalogItemForm').find('input[name=\"name\"]'),
\t\t\t\t\tprodSeoUrl = \$('#catalogItemForm').find('input[name=\"seo_url\"]'),
\t\t\t\t\tstat = true,
\t\t\t\t\tlabel = {
\t\t\t\t\t\ttitle: 'Такой заголовок уже существует!',
\t\t\t\t\t\tname: 'Такое название уже существует!',
\t\t\t\t\t\tseo_url: 'Такой URL уже существует!'
\t\t\t\t\t};
\t\t\t\t
\t\t\t\t\$.post('/admin/products/check_unique', {title: \$(prodTitle).val(), name: \$(prodName).val(), seo_url: \$(prodSeoUrl).val()}, function(data) {
\t\t\t\t\t\$.each(data, function(field, match) {
\t\t\t\t\t\tif (match && \$('#catalogItemForm').find('input[name=\"'+field+'\"]').parent('.changed').length) {
\t\t\t\t\t\t\t\$('#catalogItemForm').find('input[name=\"'+field+'\"]').errorLabel(label[field]);
\t\t\t\t\t\t\tstat = false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif (stat) {
\t\t\t\t\t\tif (!itemId) {
\t\t\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\t\t\turl: 'admin/products/save',
\t\t\t\t\t\t\t\tfields: {catalog_id: catalogId, categories: JSON.stringify(categories), icons: JSON.stringify(icons)},
\t\t\t\t\t\t\t\tignore: '[name=\"files\"], [nosubmit]',
\t\t\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(row) {
\t\t\t\t\t\t\t\t\tif (row) {
\t\t\t\t\t\t\t\t\t\t\$('#catalogList'+catalogId).find('tr.empty').remove();
\t\t\t\t\t\t\t\t\t\t\$('#catalogList'+catalogId).append(row);
\t\t\t\t\t\t\t\t\t\tnotify('Позиция успешно добавлена!');
\t\t\t\t\t\t\t\t\t\tcatalogItemAddWin.close();
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tcatalogItemEditWin.wait(false);
\t\t\t\t\t\t\t\t\t\tnotify('Ошибка обновления товара!', 'error');
\t\t\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\t\t\turl: 'admin/products/update',
\t\t\t\t\t\t\t\tfields: {id: itemId, catalog_id: catalogId, categories: JSON.stringify(categories)},
\t\t\t\t\t\t\t\tignore: '[name=\"files\"], [nosubmit]',
\t\t\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(rowHtml) {
\t\t\t\t\t\t\t\t\t\$(itemRow).replaceWith(rowHtml);
\t\t\t\t\t\t\t\t\tnotify('Позиция успешно добавлена!');
\t\t\t\t\t\t\t\t\tcatalogItemAddWin.close();
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tcatalogItemAddWin.wait(false);
\t\t\t\t\t\tnotify('Ошибка! Проверьте корректность заполнения всех полей!', 'error');
\t\t\t\t\t}\t
\t\t\t\t}, 'json');
\t\t\t\t
\t\t\t});
\t\t\t
\t\t\t
\t\t});
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
\t//------------------------------------------------------------------------------------------------------------------------------------------
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
\t//------------------------------------------------------------------------- Редактировать позицию
\t\$('body').off(tapEvent, '[catalogsitemedit]').on(tapEvent, '[catalogsitemedit]', function() {
\t\tvar itemId = \$(this).attr('catalogsitemedit'), // ID товара
\t\t\tcatalogId = \$(this).attr('catalogid'), // ID каталога
\t\t\titemRow = \$(this).closest('tr');
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Редактировать позицию|4',
\t\t\twidth: 1192,
\t\t\tbuttons: [{id: 'сatalogItemUpdate', title: 'Обновить'}],
\t\t\tcloseByButton: true, 
\t\t\tclose: 'Отмена'
\t\t}, function(catalogItemEditWin) {
\t\t\tcatalogItemEditWin.setData('admin/products/edit', {id: itemId, catalog_id: catalogId}, function() {
\t\t\t\t
\t\t\t\tcatalogItemEditWin.onScroll(function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.close();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.close();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Хэштеги
\t\t\t\t\$('#selectHashtags').selectize({
\t\t        \tdelimiter: ',',
\t\t            placeholder: 'Введите хэштег',
\t\t            addPrecedence: 'добавить',
\t\t            //maxOptions: 3,
\t\t            create: function(input) {
\t\t                return {
\t\t                    value: input,
\t\t                    text: input
\t\t                }
\t\t            },
\t\t            onChange: function(data) {}
\t\t        });
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addGalleryFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"images\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"gallery['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += \t'<div class=\"field file__alt\">';
\t\t\t\t\thtml +=\t\t\t'<input type=\"text\" name=\"gallery['+index+'][alt]\" value=\"\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />';
\t\t\t\t\thtml += \t'</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addSimpleFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"all\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"files['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#productOptions').ddrCRUD({
\t\t\t\t\taddSelector: '#productAddoption',
\t\t\t\t\temptyList: '',
\t\t\t\t\tfunctions: 'admin/products_options', // get,add,save,update,remove
\t\t\t\t\tsortField: 'position',
\t\t\t\t\tdata: {
\t\t\t\t\t\tgetList: {id: itemId},
\t\t\t\t\t\tadd: {id: itemId}
\t\t\t\t\t},
\t\t\t\t\tconfirms: {
\t\t\t\t\t\tgetList: function() {
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 0) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t},
\t\t\t\t\t\tadd: function() {
\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t},
\t\t\t\t\t\tsave: function() {
\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('[mainoptionclear]:not(:disabled)').setAttrib('disabled');
\t\t\t\t\t\t},
\t\t\t\t\t\tremove: function() {
\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 1) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terrorFields: function(row, fields) {
\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tremoveConfirm: true,
\t\t\t\t\tpopup: catalogItemEditWin
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Атрибуты
\t\t\t\t\$('#addAttribute').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#attributesList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_attribute', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#attributesList').find('tr.empty').length) \$('#attributesList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#attributesList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#attributesList').on(tapEvent, '[removeattribute]', function() {
\t\t\t\t\tlet countRows = \$('#attributesList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#attributesList').append('<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Видео
\t\t\t\t\$('#addVideo').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#videosList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_video', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#videosList').find('tr.empty').length) \$('#videosList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#videosList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#videosList').on(tapEvent, '[removevideo]', function() {
\t\t\t\t\tlet countRows = \$('#videosList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#videosList').append('<tr class=\"empty\"><td colspan=\"2\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор товара
\t\t\t\t\$('#productOptions').on(tapEvent, '[shooseprodopsprod]', function() {
\t\t\t\t\tprodOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet insProds = [itemId], // сразу добавили ID текущего товара
\t\t\t\t\t\tthisBlock = \$(this).closest('td'),
\t\t\t\t\t\tcurrentCat = lscache.get('product_options_category') || false;
\t\t\t\t\t\t
\t\t\t\t\tif (\$('#productOptions').find('[name=\"product_option_id\"]').length) {
\t\t\t\t\t\t\$('#productOptions').find('[name=\"product_option_id\"]').each(function(k, item) {
\t\t\t\t\t\t\tinsProds.push(parseInt(\$(item).val()))
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/products_options/get_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: currentCat}, function(html) {
\t\t\t\t\t\tprodOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('#productopsblock').on(tapEvent, '[chooseproducttoopt]', function() {
\t\t\t\t\t\t\tlet thisProd = this,
\t\t\t\t\t\t\t\tthisId = \$(thisProd).attr('chooseproducttoopt'),
\t\t\t\t\t\t\t\tthisImgSrc = \$(thisProd).find('[prodimage]').attr('style'),
\t\t\t\t\t\t\t\tthisTitle = \$(thisProd).find('[prodtitle]').text();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(thisBlock).find('[name=\"product_option_id\"]').val(thisId);
\t\t\t\t\t\t\t\$(thisBlock).find('[avatar]').attr('style', thisImgSrc);
\t\t\t\t\t\t\t\$(thisBlock).find('[prodopttitle]').text(thisTitle);
\t\t\t\t\t\t\t\$(thisBlock).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\tprodOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#productopscategories').on(tapEvent, '[prodopscategory]:not(.active)', function() {
\t\t\t\t\t\t\tlet thisCat = this,
\t\t\t\t\t\t\t\tcategoryId = \$(thisCat).attr('prodopscategory');
\t\t\t\t\t\t\tlscache.set('product_options_category', categoryId);
\t\t\t\t\t\t\t\$('#productopsblockWait').addClass('visible');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#productopscategories').find('[prodopscategory]').removeClass('active');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tgetAjaxHtml('admin/products_options/get_cat_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: categoryId}, function(html) {
\t\t\t\t\t\t\t\t\$(thisCat).addClass('active');
\t\t\t\t\t\t\t\t\$('#productopsblock').html(html);
\t\t\t\t\t\t\t\t\$('#productopsblockWait').removeClass('visible');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор опции из списка
\t\t\t\t\$('#productOptions, [mainoption]').on(tapEvent, '[shooseprodopscolor]', function() {
\t\t\t\t\tcolorOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet thisItem = this;
\t\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/options/get_variants', function(html) {
\t\t\t\t\t\tcolorOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('[shooseoptvariant]').on(tapEvent, function() {
\t\t\t\t\t\t\tlet thisData = \$(this).attr('shooseoptvariant').split('|');
\t\t\t\t\t\t\t\$(thisItem).css('background-color', thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_color\"], [name=\"color\"]').val(thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_title\"]').val(thisData[1]);
\t\t\t\t\t\t\tif (\$(thisItem).closest('tr').find('[name=\"product_option_id\"]').val()) {
\t\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcolorOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('[mainoptionclear]').on(tapEvent, function() {
\t\t\t\t\tlet row = \$(this).closest('[mainoption]'),
\t\t\t\t\t\tcolorInput = \$(row).find('input[name=\"option_color\"]'),
\t\t\t\t\t\tcolorAvatar = \$(row).find('[shooseprodopscolor]'),
\t\t\t\t\t\tnameInput = \$(row).find('input[name=\"option_title\"]'),
\t\t\t\t\t\tfile = \$(row).find('.file');
\t\t\t\t\t
\t\t\t\t\t\$(file).find('[fileimage]').children('img').attr('src', 'public/images/none_img.png');
\t\t\t\t\t\$(file).find('[filesrc]').val('');
\t\t\t\t\t\$(colorInput).val('');
\t\t\t\t\t\$(colorAvatar).removeAttrib('style');
\t\t\t\t\t\$(nameInput).val('');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$(document).on('ddrpopup:close', function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.destroy();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.destroy();
\t\t\t\t});
\t\t\t\t
\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t//---------------------------------------------------------------------------------------------------------------- Обновить товар
\t\t\t\$('#сatalogItemUpdate').on(tapEvent, function() {
\t\t\t\tcatalogItemEditWin.wait();
\t\t\t\tvar categories = [];
\t\t\t\tif (\$('#productCategories').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productCategories').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\tcategories.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar icons = [];
\t\t\t\tif (\$('#productIcons').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productIcons').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\ticons.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\tlet prodTitle = \$('#catalogItemForm').find('input[name=\"title\"]'),
\t\t\t\t\tprodName = \$('#catalogItemForm').find('input[name=\"name\"]'),
\t\t\t\t\tprodSeoUrl = \$('#catalogItemForm').find('input[name=\"seo_url\"]'),
\t\t\t\t\tstat = true,
\t\t\t\t\tlabel = {
\t\t\t\t\t\ttitle: 'Такой заголовок уже существует!',
\t\t\t\t\t\tname: 'Такое название уже существует!',
\t\t\t\t\t\tseo_url: 'Такой URL уже существует!'
\t\t\t\t\t};
\t\t\t\t
\t\t\t\t\$.post('/admin/products/check_unique', {title: \$(prodTitle).val(), name: \$(prodName).val(), seo_url: \$(prodSeoUrl).val()}, function(data) {
\t\t\t\t\t\$.each(data, function(field, match) {
\t\t\t\t\t\tif (match && \$('#catalogItemForm').find('input[name=\"'+field+'\"]').parent('.changed').length) {
\t\t\t\t\t\t\t\$('#catalogItemForm').find('input[name=\"'+field+'\"]').errorLabel(label[field]);
\t\t\t\t\t\t\tstat = false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif (stat) {
\t\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\t\turl: 'admin/products/update',
\t\t\t\t\t\t\tfields: {id: itemId, catalog_id: catalogId, categories: JSON.stringify(categories), icons: JSON.stringify(icons)},
\t\t\t\t\t\t\tignore: '[name=\"files\"], [nosubmit]',
\t\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(rowHtml) {
\t\t\t\t\t\t\t\tif (rowHtml) {
\t\t\t\t\t\t\t\t\t\$(itemRow).replaceWith(rowHtml);
\t\t\t\t\t\t\t\t\tnotify('Позиция успешно обновлена!');
\t\t\t\t\t\t\t\t\tcatalogItemEditWin.close();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcatalogItemEditWin.wait(false);
\t\t\t\t\t\t\t\t\tnotify('Ошибка обновления товара!', 'error');
\t\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\t\tcatalogItemEditWin.wait(false);
\t\t\t\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tcatalogItemEditWin.wait(false);
\t\t\t\t\t\tnotify('Ошибка! Проверьте корректность заполнения всех полей!', 'error');
\t\t\t\t\t}\t
\t\t\t\t}, 'json');
\t\t\t});
\t\t\t
\t\t});
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
\t
\t
\t
\t
\t//------------------------------------------------------------------------- Копировать позицию
\t\$('body').off(tapEvent, '[catalogsitemcopy]').on(tapEvent, '[catalogsitemcopy]', function() {
\t\tvar itemId = \$(this).attr('catalogsitemcopy'), // ID товара
\t\t\tcatalogId = \$(this).attr('catalogid'), // ID каталога
\t\t\titemRow = \$(this).closest('tr');
\t\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Копировать позицию|4',
\t\t\twidth: 1192,
\t\t\tbuttons: [{id: 'сatalogItemCopy', title: 'Копировать'}],
\t\t\tcloseByButton: true, 
\t\t\tclose: 'Отмена'
\t\t}, function(catalogItemCopyWin) {
\t\t\tcatalogItemCopyWin.setData('admin/products/edit', {id: itemId, catalog_id: catalogId, copy: 1}, function() {
\t\t\t\t
\t\t\t\tcatalogItemCopyWin.onScroll(function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.close();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.close();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Хэштеги
\t\t\t\t\$('#selectHashtags').selectize({
\t\t        \tdelimiter: ',',
\t\t            placeholder: 'Введите хэштег',
\t\t            addPrecedence: 'добавить',
\t\t            //maxOptions: 3,
\t\t            create: function(input) {
\t\t                return {
\t\t                    value: input,
\t\t                    text: input
\t\t                }
\t\t            },
\t\t            onChange: function(data) {}
\t\t        });
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addGalleryFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"images\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"gallery['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += \t'<div class=\"field file__alt\">';
\t\t\t\t\thtml +=\t\t\t'<input type=\"text\" name=\"gallery['+index+'][alt]\" value=\"\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />';
\t\t\t\t\thtml += \t'</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#addSimpleFile').on(tapEvent, function() {
\t\t\t\t\tvar index = \$(this).closest('td').find('.file').length || 0,
\t\t\t\t\t\thtml = '',
\t\t\t\t\t\trand = random(1, 99999);
\t\t\t\t\t\t
\t\t\t\t\thtml += '<div class=\"file small empty mb-10px\">';
\t\t\t\t\thtml += \t'<label class=\"file__block\" for=\"new'+rand+'\" filemanager=\"all\">';
\t\t\t\t\thtml += \t\t'<div class=\"file__image\" fileimage>';
\t\t\t\t\thtml += \t\t\t'<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">';
\t\t\t\t\thtml += \t\t'</div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__name\"><span filename></span></div>';
\t\t\t\t\thtml += \t\t'<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>';
\t\t\t\t\thtml += \t'</label>';
\t\t\t\t\thtml += \t'<input filesrc type=\"hidden\" name=\"files['+index+'][file]\" id=\"new'+rand+'\" value=\"\" />';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t
\t\t\t\t\t\$(this).before(html);
\t\t\t\t});
\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#productOptions').ddrCRUD({
\t\t\t\t\taddSelector: '#productAddoption',
\t\t\t\t\temptyList: '',
\t\t\t\t\tfunctions: 'admin/products_options', // get,add,save,update,remove
\t\t\t\t\tsortField: 'position',
\t\t\t\t\tdata: {
\t\t\t\t\t\tgetList: {id: itemId},
\t\t\t\t\t\tadd: {id: itemId}
\t\t\t\t\t},
\t\t\t\t\tconfirms: {
\t\t\t\t\t\tgetList: function() {
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 0) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t},
\t\t\t\t\t\tadd: function() {
\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t},
\t\t\t\t\t\tsave: function() {
\t\t\t\t\t\t\tprodOpsTooltip.destroy();
\t\t\t\t\t\t\tprodOpsTooltip = new jBox('Tooltip', prodOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tcolorOpsTooltip.destroy();
\t\t\t\t\t\t\tcolorOpsTooltip = new jBox('Tooltip', colorOpsTooltipOps);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('[mainoptionclear]:not(:disabled)').setAttrib('disabled');
\t\t\t\t\t\t},
\t\t\t\t\t\tremove: function() {
\t\t\t\t\t\t\tif (\$('#productOptions').find('tr').length == 1) \$('[mainoptionclear]').removeAttrib('disabled');
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terrorFields: function(row, fields) {
\t\t\t\t\t\tif (fields) {
\t\t\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tremoveConfirm: true,
\t\t\t\t\tpopup: catalogItemCopyWin
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Атрибуты
\t\t\t\t\$('#addAttribute').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#attributesList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_attribute', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#attributesList').find('tr.empty').length) \$('#attributesList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#attributesList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#attributesList').on(tapEvent, '[removeattribute]', function() {
\t\t\t\t\tlet countRows = \$('#attributesList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#attributesList').append('<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------- Видео
\t\t\t\t\$('#addVideo').on(tapEvent, function() {
\t\t\t\t\tlet index = \$('#videosList').find('tr:not(.empty):last').attr('index') || 0;
\t\t\t\t\tgetAjaxHtml('admin/products/add_video', {index: (parseInt(index) + 1)}, function(html) {
\t\t\t\t\t\tif (\$('#videosList').find('tr.empty').length) \$('#videosList').find('tr.empty').remove();
\t\t\t\t\t\t\$('#videosList').append(html);
\t\t\t\t\t}, function() {});
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#videosList').on(tapEvent, '[removevideo]', function() {
\t\t\t\t\tlet countRows = \$('#videosList').find('tr').length;
\t\t\t\t\t\$(this).closest('tr').remove();
\t\t\t\t\tif (countRows == 1) \$('#videosList').append('<tr class=\"empty\"><td colspan=\"2\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор товара
\t\t\t\t\$('#productOptions').on(tapEvent, '[shooseprodopsprod]', function() {
\t\t\t\t\tprodOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet insProds = [itemId], // сразу добавили ID текущего товара
\t\t\t\t\t\tthisBlock = \$(this).closest('td'),
\t\t\t\t\t\tcurrentCat = lscache.get('product_options_category') || false;
\t\t\t\t\t\t
\t\t\t\t\tif (\$('#productOptions').find('[name=\"product_option_id\"]').length) {
\t\t\t\t\t\t\$('#productOptions').find('[name=\"product_option_id\"]').each(function(k, item) {
\t\t\t\t\t\t\tinsProds.push(parseInt(\$(item).val()))
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/products_options/get_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: currentCat}, function(html) {
\t\t\t\t\t\tprodOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('#productopsblock').on(tapEvent, '[chooseproducttoopt]', function() {
\t\t\t\t\t\t\tlet thisProd = this,
\t\t\t\t\t\t\t\tthisId = \$(thisProd).attr('chooseproducttoopt'),
\t\t\t\t\t\t\t\tthisImgSrc = \$(thisProd).find('[prodimage]').attr('style'),
\t\t\t\t\t\t\t\tthisTitle = \$(thisProd).find('[prodtitle]').text();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(thisBlock).find('[name=\"product_option_id\"]').val(thisId);
\t\t\t\t\t\t\t\$(thisBlock).find('[avatar]').attr('style', thisImgSrc);
\t\t\t\t\t\t\t\$(thisBlock).find('[prodopttitle]').text(thisTitle);
\t\t\t\t\t\t\t\$(thisBlock).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\tprodOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#productopscategories').on(tapEvent, '[prodopscategory]:not(.active)', function() {
\t\t\t\t\t\t\tlet thisCat = this,
\t\t\t\t\t\t\t\tcategoryId = \$(thisCat).attr('prodopscategory');
\t\t\t\t\t\t\tlscache.set('product_options_category', categoryId);
\t\t\t\t\t\t\t\$('#productopsblockWait').addClass('visible');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#productopscategories').find('[prodopscategory]').removeClass('active');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tgetAjaxHtml('admin/products_options/get_cat_products_to_option', {catalog_id: catalogId, product_id: itemId, inst_prods: insProds, category_id: categoryId}, function(html) {
\t\t\t\t\t\t\t\t\$(thisCat).addClass('active');
\t\t\t\t\t\t\t\t\$('#productopsblock').html(html);
\t\t\t\t\t\t\t\t\$('#productopsblockWait').removeClass('visible');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//------------------------------------------------------------------------ Выбор опции из списка
\t\t\t\t\$('#productOptions, [mainoption]').on(tapEvent, '[shooseprodopscolor]', function() {
\t\t\t\t\tcolorOpsTooltip.setContent('<div class=\"ddrtooltip__wait\"><i class=\"fa fa-spinner fa-pulse fa-fw fa-3x\"></i></div>');
\t\t\t\t\t
\t\t\t\t\tlet thisItem = this;
\t\t\t\t\t\t
\t\t\t\t\tgetAjaxHtml('admin/options/get_variants', function(html) {
\t\t\t\t\t\tcolorOpsTooltip.setContent(html);
\t\t\t\t\t}, function() {
\t\t\t\t\t\t\$('[shooseoptvariant]').on(tapEvent, function() {
\t\t\t\t\t\t\tlet thisData = \$(this).attr('shooseoptvariant').split('|');
\t\t\t\t\t\t\t\$(thisItem).css('background-color', thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_color\"], [name=\"color\"]').val(thisData[0]);
\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[name=\"option_title\"]').val(thisData[1]);
\t\t\t\t\t\t\tif (\$(thisItem).closest('tr').find('[name=\"product_option_id\"]').val()) {
\t\t\t\t\t\t\t\t\$(thisItem).closest('tr').find('[save]:disabled, [update]:disabled').removeAttrib('disabled');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcolorOpsTooltip.close();
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('[mainoptionclear]').on(tapEvent, function() {
\t\t\t\t\tlet row = \$(this).closest('[mainoption]'),
\t\t\t\t\t\tcolorInput = \$(row).find('input[name=\"option_color\"]'),
\t\t\t\t\t\tcolorAvatar = \$(row).find('[shooseprodopscolor]'),
\t\t\t\t\t\tnameInput = \$(row).find('input[name=\"option_title\"]'),
\t\t\t\t\t\tfile = \$(row).find('.file');
\t\t\t\t\t
\t\t\t\t\t\$(file).find('[fileimage]').children('img').attr('src', 'public/images/none_img.png');
\t\t\t\t\t\$(file).find('[filesrc]').val('');
\t\t\t\t\t\$(colorInput).val('');
\t\t\t\t\t\$(colorAvatar).removeAttrib('style');
\t\t\t\t\t\$(nameInput).val('');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$(document).on('ddrpopup:close', function() {
\t\t\t\t\tif (prodOpsTooltip != undefined) prodOpsTooltip.destroy();
\t\t\t\t\tif (colorOpsTooltip != undefined) colorOpsTooltip.destroy();
\t\t\t\t});
\t\t\t\t
\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t//---------------------------------------------------------------------------------------------------------------- Скопировать товар
\t\t\t\$('#сatalogItemCopy').on(tapEvent, function() {
\t\t\t\tcatalogItemCopyWin.wait();
\t\t\t\tvar categories = [];
\t\t\t\tif (\$('#productCategories').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productCategories').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\tcategories.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar icons = [];
\t\t\t\tif (\$('#productIcons').find('input[type=\"checkbox\"]:checked').length) {
\t\t\t\t\t\$('#productIcons').find('input[type=\"checkbox\"]:checked').each(function() {
\t\t\t\t\t\ticons.push(parseInt(\$(this).val()));
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\t\tlet prodTitle = \$('#catalogItemForm').find('input[name=\"title\"]'),
\t\t\t\t\tprodName = \$('#catalogItemForm').find('input[name=\"name\"]'),
\t\t\t\t\tprodSeoUrl = \$('#catalogItemForm').find('input[name=\"seo_url\"]'),
\t\t\t\t\tstat = true,
\t\t\t\t\tlabel = {
\t\t\t\t\t\ttitle: 'Такой заголовок уже существует!',
\t\t\t\t\t\tname: 'Такое название уже существует!',
\t\t\t\t\t\tseo_url: 'Такой URL уже существует!'
\t\t\t\t\t};
\t\t\t\t
\t\t\t\t\$.post('/admin/products/check_unique', {title: \$(prodTitle).val(), name: \$(prodName).val(), seo_url: \$(prodSeoUrl).val()}, function(data) {
\t\t\t\t\t\$.each(data, function(field, match) {
\t\t\t\t\t\tif (match) {
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#catalogItemForm').find('input[name=\"'+field+'\"]').errorLabel(label[field]);
\t\t\t\t\t\t\tstat = false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif (stat) {
\t\t\t\t\t\t\$('#catalogItemForm').formSubmit({
\t\t\t\t\t\t\turl: 'admin/products/copy',
\t\t\t\t\t\t\tfields: {id: itemId, catalog_id: catalogId, categories: JSON.stringify(categories), icons: JSON.stringify(icons)},
\t\t\t\t\t\t\tignore: '[name=\"files\"], [nosubmit]',
\t\t\t\t\t\t\temptyFields: true,
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(rowHtml) {
\t\t\t\t\t\t\t\t\$('#catalogList'+catalogId).append(rowHtml);
\t\t\t\t\t\t\t\tnotify('Позиция успешно скопирована!');
\t\t\t\t\t\t\t\tcatalogItemCopyWin.close();
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tformError: function() {
\t\t\t\t\t\t\t\tcatalogItemCopyWin.wait(false);
\t\t\t\t\t\t\t\tnotify('Ошибка! Проверьте правильность заполнения всех полей!', 'error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tcatalogItemCopyWin.wait(false);
\t\t\t\t\t\tnotify('Ошибка! Проверьте корректность заполнения всех полей!', 'error');
\t\t\t\t\t}\t
\t\t\t\t}, 'json');
\t\t\t\t
\t\t\t});
\t\t\t
\t\t});
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
\t//------------------------------------------------------------------------- Удалить позицию
\t\$('body').off(tapEvent, '[catalogsitemremove]').on(tapEvent, '[catalogsitemremove]', function() {
\t\tvar itemId = \$(this).attr('catalogsitemremove'),
\t\t\titemRow = \$(this).closest('tr'),
\t\t\tcountRows = \$(itemRow).closest('tbody').find('tr:not(.empty)').length;
\t\t
\t\tddrPopUp({
\t\t\ttitle: 'Удалить позицию|4',
\t\t\twidth: 400,
\t\t\thtml: '<p class=\"red strong\">Вы действительно хотите удалить позицию?</p>',
\t\t\tbuttons: [{id: 'removeCatalogsItem', title: 'Удалить'}],
\t\t\tclose: 'Отмена'
\t\t}, function(catalogItemRemoveWin) {
\t\t\t\$('#removeCatalogsItem').on(tapEvent, function() {
\t\t\t\tcatalogItemRemoveWin.wait();
\t\t\t\t\$.post('/admin/products/remove', {id: itemId}, function(response) {
\t\t\t\t\tif (response) {
\t\t\t\t\t\tif (countRows == 1) \$(itemRow).replaceWith('<tr class=\"empty\"><td colspan=\"6\"><p class=\"empty center\">Нет данных</p></td></tr>');
\t\t\t\t\t\telse \$(itemRow).remove();
\t\t\t\t\t\tnotify('Позиция успешно удалена!');
\t\t\t\t\t\tcatalogItemRemoveWin.close();
\t\t\t\t\t\t
\t\t\t\t\t} else {
\t\t\t\t\t\tnotify('ошибка! Позиция не удалена!', 'error');
\t\t\t\t\t}
\t\t\t\t\tcatalogItemRemoveWin.wait();
\t\t\t\t});
\t\t\t});
\t\t});\t\t
\t});
\t
\t
\t
\t
\t
});\t
\t
\t
\t
\t
\$(document).on('rendersection', function() {
\t
});
//--></script>", "views/admin/sections/catalogs.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\sections\\catalogs.tpl");
    }
}
