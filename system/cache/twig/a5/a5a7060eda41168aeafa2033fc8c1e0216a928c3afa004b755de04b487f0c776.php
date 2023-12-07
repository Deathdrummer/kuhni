<?php

/* views/admin/sections/lists.tpl */
class __TwigTemplate_95fdebfd8cafa6168eb726426d72fbd956fbec19d9e5a75d59bf16109fbc3364 extends Twig_Template
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
\t\t<h2>Списки</h2>
\t</div>
\t";
        // line 5
        if (($context["lists"] ?? null)) {
            // line 6
            echo "\t\t<ul class=\"tabstitles mb-20px\">
\t\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lists"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 8
                echo "\t\t\t\t<li id=\"tabList";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "title", []), "html", null, true);
                echo "</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</ul>
\t\t
\t\t<div class=\"tabscontent\">
\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lists"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 14
                echo "\t\t\t\t<div tabid=\"tabList";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", []), "html", null, true);
                echo "\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["l"], "fields", [])) {
                    // line 19
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["l"], "fields", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 20
                        echo "\t\t\t\t\t\t\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, $context["f"], "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t<td class=\"p-0\"></td>
\t\t\t\t\t\t\t\t<td class=\"w-100px\">Опции</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody listitems=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", []), "html", null, true);
                echo "\" id=\"listitemsList";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 35
                echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"";
                // line 38
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "fields", [])) + 2), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t<button listitemnew=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", []), "html", null, true);
                echo "\" id=\"listitemsList";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", []), "html", null, true);
                echo "Add\" class=\"small\">Новый элемент</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t</div>
\t";
        } else {
            // line 50
            echo "\t\t<p class=\"empty center\">Нет ни одного списка</p>
\t\t<p class=\"empty center\"><small onclick=\"location.href='";
            // line 51
            echo twig_escape_filter($this->env, base_url("admin#structure.tabLists"), "html", null, true);
            echo "';location.reload();\">Создать</small></p>
\t";
        }
        // line 53
        echo "</div>











<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\tclientFileManager({
\t\tonChooseFile: function(selector) {
\t\t\t\$(selector).addClass('file__block_changed');
\t\t\t\$(selector).closest('tr').find('[update]:disabled, [save]:disabled').removeAttrib('disabled');
\t\t\tenableScroll();
\t\t},
\t\tonRemoveFile: function(selector) {
\t\t\t\$(selector).addClass('file__block_changed');
\t\t\t\$(selector).closest('tr').find('[update]:disabled, [save]:disabled').removeAttrib('disabled');
\t\t}
\t});
\t
\t
\t
\t\$('#lists').find('[listitems]').each(function() {
\t\tvar id = \$(this).attr('listitems'),
\t\t\tlistId = \$(this).attr('id'),
\t\t\tfieldsCount = \$(this).closest('table').find('thead tr').children('td').length || 99;
\t\t\t
\t\t\$('#'+listId).ddrCRUD({
\t\t\taddSelector: '#'+listId+'Add',
\t\t\tsortField: '--sort',
\t\t\tfunctions: 'admin/lists_items', // get,add,save,update,remove
\t\t\temptyList: '<tr><td colspan=\"'+fieldsCount+'\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\t\terrorFields: function(row, fields) {
\t\t\t\tif (fields) {
\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\tremoveConfirm: true,
\t\t\tdata: {
\t\t\t\tgetList: {list_id: id}, // Данные при получении списка записей
\t\t\t\tadd: {list_id: id}, // Данные при добавлении записи
\t\t\t\tsave: {list_id: id}, // Данные при сохранении записи
\t\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\t\tremove: {} // Данные при удалении записи
\t\t\t},
\t\t\tconfirms: {
\t\t\t\tgetList: function() {initEditors();},
\t\t\t\tadd: function(item) {initEditors();},
\t\t\t\tsave: function(row) {initEditors();},
\t\t\t\tupdate: function(row) {initEditors();},
\t\t\t\tremove: function(row) {}
\t\t\t}
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
        return "views/admin/sections/lists.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 53,  132 => 51,  129 => 50,  125 => 48,  109 => 40,  104 => 38,  99 => 35,  93 => 27,  87 => 23,  84 => 22,  75 => 20,  70 => 19,  68 => 18,  60 => 14,  56 => 13,  51 => 10,  40 => 8,  36 => 7,  33 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"{{id}}\">
\t<div class=\"section_title\">
\t\t<h2>Списки</h2>
\t</div>
\t{% if lists %}
\t\t<ul class=\"tabstitles mb-20px\">
\t\t\t{% for l in lists %}
\t\t\t\t<li id=\"tabList{{l.id}}\">{{l.title}}</li>
\t\t\t{% endfor %}
\t\t</ul>
\t\t
\t\t<div class=\"tabscontent\">
\t\t\t{% for l in lists %}
\t\t\t\t<div tabid=\"tabList{{l.id}}\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t{% if l.fields %}
\t\t\t\t\t\t\t\t\t{% for f in l.fields %}
\t\t\t\t\t\t\t\t\t\t<td>{{f}}</td>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<td class=\"p-0\"></td>
\t\t\t\t\t\t\t\t<td class=\"w-100px\">Опции</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody listitems=\"{{l.id}}\" id=\"listitemsList{{l.id}}\">
\t\t\t\t\t\t\t{#{% if lists_items[l.id] %}
\t\t\t\t\t\t\t\t{% for item in lists_items[l.id] %}
\t\t\t\t\t\t\t\t\t{% include 'views/admin/render/list/item.tpl' with item %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr class=\"empty\"><td colspan=\"5\"><p class=\"empty center\">Нет данных</p></td></tr>
\t\t\t\t\t\t\t{% endif %}#}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"{{l.fields|length + 2}}\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t<button listitemnew=\"{{l.id}}\" id=\"listitemsList{{l.id}}Add\" class=\"small\">Новый элемент</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t{% else %}
\t\t<p class=\"empty center\">Нет ни одного списка</p>
\t\t<p class=\"empty center\"><small onclick=\"location.href='{{base_url('admin#structure.tabLists')}}';location.reload();\">Создать</small></p>
\t{% endif %}
</div>











<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
\tclientFileManager({
\t\tonChooseFile: function(selector) {
\t\t\t\$(selector).addClass('file__block_changed');
\t\t\t\$(selector).closest('tr').find('[update]:disabled, [save]:disabled').removeAttrib('disabled');
\t\t\tenableScroll();
\t\t},
\t\tonRemoveFile: function(selector) {
\t\t\t\$(selector).addClass('file__block_changed');
\t\t\t\$(selector).closest('tr').find('[update]:disabled, [save]:disabled').removeAttrib('disabled');
\t\t}
\t});
\t
\t
\t
\t\$('#lists').find('[listitems]').each(function() {
\t\tvar id = \$(this).attr('listitems'),
\t\t\tlistId = \$(this).attr('id'),
\t\t\tfieldsCount = \$(this).closest('table').find('thead tr').children('td').length || 99;
\t\t\t
\t\t\$('#'+listId).ddrCRUD({
\t\t\taddSelector: '#'+listId+'Add',
\t\t\tsortField: '--sort',
\t\t\tfunctions: 'admin/lists_items', // get,add,save,update,remove
\t\t\temptyList: '<tr><td colspan=\"'+fieldsCount+'\"><p class=\"empty center\">Нет данных</p></td></tr>',
\t\t\terrorFields: function(row, fields) {
\t\t\t\tif (fields) {
\t\t\t\t\t\$.each(fields, function(k, item) {
\t\t\t\t\t\t\$(item.field).errorLabel(item.error);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\tremoveConfirm: true,
\t\t\tdata: {
\t\t\t\tgetList: {list_id: id}, // Данные при получении списка записей
\t\t\t\tadd: {list_id: id}, // Данные при добавлении записи
\t\t\t\tsave: {list_id: id}, // Данные при сохранении записи
\t\t\t\tupdate: {}, // Данные при обновлении записи
\t\t\t\tremove: {} // Данные при удалении записи
\t\t\t},
\t\t\tconfirms: {
\t\t\t\tgetList: function() {initEditors();},
\t\t\t\tadd: function(item) {initEditors();},
\t\t\t\tsave: function(row) {initEditors();},
\t\t\t\tupdate: function(row) {initEditors();},
\t\t\t\tremove: function(row) {}
\t\t\t}
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
});\t
\t
\t
\t
\t
\$(document).on('rendersection', function() {
\t
});
//--></script>", "views/admin/sections/lists.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\sections\\lists.tpl");
    }
}
