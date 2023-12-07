<?php

/* views/admin/render/products/form.tpl */
class __TwigTemplate_a800715f92341ff31622484ac302f833a62036f438b45074acb6c2e77bb3ba54 extends Twig_Template
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
        echo "<form id=\"catalogItemForm\">
\t<table class=\"fieldset\">
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Заголовок страницы</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"title\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" rules=\"empty|length:3,100|string\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>SEO URL</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"seo_url\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["seo_url"] ?? null), "html", null, true);
        echo "\" rules=\"empty|length:3,255|seourl\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Title ссылки</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"link_title\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["link_title"] ?? null), "html", null, true);
        echo "\" rules=\"length:3,100\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Meta keywords</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"meta_keywords\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["meta_keywords"] ?? null), "html", null, true);
        echo "\" rules=\"string|length:3,160\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Meta description</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t<textarea name=\"meta_description\" rules=\"string|length:3\" rows=\"10\">";
        // line 39
        echo twig_escape_filter($this->env, ($context["meta_description"] ?? null), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Название</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" rules=\"length:3,100|string\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t
\t\t";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "categories", []) && ($context["categories"] ?? null))) {
            // line 54
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Категория</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"row\" id=\"productCategories\">
\t\t\t\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('arrtocols')->getCallable(), [($context["categories"] ?? null), 3]));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 59
                echo "\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t";
                // line 60
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('recursive')->getCallable(), [$context["column"], "<li class=\"newproductcats__item\"><label for=\"cat{id}\"><input type=\"checkbox\"{checked} id=\"cat{id}\" value=\"{id}\">{title}</label></li>", "children", "<ul class=\"newproductcats\" data>"]), "html", null, true);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 67
        echo "\t\t
\t\t";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "main_image", []) || twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "threed", []))) {
            // line 69
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "main_image", []) && twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "threed", []))) {
                echo "Главное фото и 3D";
            } elseif (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "main_image", [])) {
                echo "Главное фото";
            } elseif (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "threed", [])) {
                echo "3D";
            }
            echo "</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 72
            if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "main_image", [])) {
                // line 73
                echo "\t\t\t\t\t\t";
                if (($context["new"] ?? null)) {
                    // line 74
                    echo "\t\t\t\t\t\t\t<div class=\"file empty\">
\t\t\t\t\t\t\t\t";
                    // line 75
                    $context["newrand"] = rand(0, 999);
                    // line 76
                    echo "\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"new";
                    echo twig_escape_filter($this->env, ($context["newrand"] ?? null), "html", null, true);
                    echo "\" mainimage filemanager=\"images\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 78
                    echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
                    echo "\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"main_image[file]\" id=\"new";
                    // line 83
                    echo twig_escape_filter($this->env, ($context["newrand"] ?? null), "html", null, true);
                    echo "\" value=\"\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"main_image[alt]\" value=\"";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "alt", []), "html", null, true);
                    echo "\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } elseif (                // line 88
($context["edit"] ?? null)) {
                    // line 89
                    echo "\t\t\t\t\t\t\t";
                    $context["rand"] = rand(0, 999);
                    // line 90
                    echo "\t\t\t\t\t\t\t<div class=\"file";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])) {
                        echo " empty";
                    }
                    echo "\" title=\"";
                    if (twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])])]), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 91
                    if (twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "label", [])) {
                        echo "<span class=\"file__label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "label", []), "html", null, true);
                        echo "</span>";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"";
                    echo twig_escape_filter($this->env, (($context["k"] ?? null) . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" mainimage filemanager=\"images\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t";
                    // line 94
                    if (twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", []), 2])])) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])]))), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])])]), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 98
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", []), 2]))), "html", null, true);
                            echo ".png\" alt=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])])]), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 100
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 101
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
                        echo "\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>";
                    // line 104
                    if (twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])])]), "html", null, true);
                    }
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"main_image[file]\" id=\"";
                    // line 107
                    echo twig_escape_filter($this->env, (($context["k"] ?? null) . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", []), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"main_image[alt]\" value=\"";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "alt", []), "html", null, true);
                    echo "\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            // line 117
            if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "threed", [])) {
                // line 118
                echo "\t\t\t\t\t\t";
                if (($context["new"] ?? null)) {
                    // line 119
                    echo "\t\t\t\t\t\t\t<div class=\"file empty\">
\t\t\t\t\t\t\t\t";
                    // line 120
                    $context["newrand"] = rand(0, 999);
                    // line 121
                    echo "\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"new";
                    echo twig_escape_filter($this->env, ($context["newrand"] ?? null), "html", null, true);
                    echo "\" filemanager=\"threed\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 123
                    echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
                    echo "\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"threed[file]\" id=\"new";
                    // line 128
                    echo twig_escape_filter($this->env, ($context["newrand"] ?? null), "html", null, true);
                    echo "\" value=\"\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"threed[alt]\" value=\"\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } elseif (                // line 133
($context["edit"] ?? null)) {
                    // line 134
                    echo "\t\t\t\t\t\t\t";
                    $context["rand"] = rand(0, 999);
                    // line 135
                    echo "\t\t\t\t\t\t\t<div class=\"file";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "file", [])) {
                        echo " empty";
                    }
                    echo "\" title=\"";
                    if (twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "file", [])) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "file", [])])]), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"";
                    // line 136
                    echo twig_escape_filter($this->env, (($context["k"] ?? null) . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" filemanager=\"threed\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t";
                    // line 138
                    if (twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "file", [])) {
                        // line 139
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "file", []), 2]))), "html", null, true);
                        echo ".png\" alt=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "file", [])])]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
                        echo "\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>";
                    // line 144
                    if (twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "file", [])) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "file", [])])]), "html", null, true);
                    }
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"threed[file]\" id=\"";
                    // line 147
                    echo twig_escape_filter($this->env, (($context["k"] ?? null) . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "file", []), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"threed[alt]\" value=\"";
                    // line 149
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["threed"] ?? null), "alt", []), "html", null, true);
                    echo "\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 153
                echo "\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t</td>
\t\t\t</tr>\t
\t\t";
        }
        // line 157
        echo "\t\t
\t\t
\t\t";
        // line 159
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "gallery", [])) {
            // line 160
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Галлерея</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 163
            if (($context["new"] ?? null)) {
                // line 164
                echo "\t\t\t\t\t\t<button class=\"file__add file__add_small";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [])) {
                    echo " mt-28px";
                }
                echo "\" id=\"addGalleryFile\" title=\"Добавить изображение\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t";
            } elseif (            // line 165
($context["edit"] ?? null)) {
                // line 166
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["item"]) {
                    // line 167
                    echo "\t\t\t\t\t\t\t";
                    $context["rand"] = rand(0, 999);
                    // line 168
                    echo "\t\t\t\t\t\t\t<div class=\"file small mb-10px";
                    if ( !twig_get_attribute($this->env, $this->source, $context["item"], "file", [])) {
                        echo " empty";
                    }
                    echo "\" title=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "file", [])) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])])]), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 169
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [])) {
                        echo "<span class=\"file__label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
                        echo "</span>";
                    }
                    // line 170
                    echo "\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"";
                    echo twig_escape_filter($this->env, ($context["k"] . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" filemanager=\"images\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t";
                    // line 172
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "file", [])) {
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", []), 2])])) {
                            // line 174
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])]))), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])])]), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 176
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", []), 2]))), "html", null, true);
                            echo ".png\" alt=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])])]), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 179
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
                        echo "\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>";
                    // line 182
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "file", [])) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])])]), "html", null, true);
                    }
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"gallery[";
                    // line 185
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "][file]\" id=\"";
                    echo twig_escape_filter($this->env, ($context["k"] . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "file", []), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"gallery[";
                    // line 187
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "][alt]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "alt", []), "html", null, true);
                    echo "\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"file__add file__add_small";
                // line 192
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [])) {
                    echo " mt-28px";
                }
                echo "\" id=\"addGalleryFile\" title=\"Добавить изображение\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t";
            }
            // line 194
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 197
        echo "\t\t
\t\t
\t\t
\t\t";
        // line 200
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "videos", [])) {
            // line 201
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Видео</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Ссылка или ID видео</td>
\t\t\t\t\t\t\t\t<td class=\"w-30px\">Опции</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"videosList\">
\t\t\t\t\t\t\t";
            // line 212
            if (($context["videos"] ?? null)) {
                // line 213
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
                foreach ($context['_seq'] as $context["index"] => $context["video"]) {
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t<tr index=\"";
                    echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"videos[";
                    // line 217
                    echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                    echo "][link]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "link", []), "html", null, true);
                    echo "\" rules=\"string|length:3,300\" >
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons inline notop\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"remove verysmall\" removevideo=><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['video'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 228
                echo "\t\t\t\t\t\t\t\t<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>
\t\t\t\t\t\t\t";
            }
            // line 230
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall\" id=\"addVideo\">Добавить</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 244
        echo "\t\t
\t\t\t
\t\t
\t\t";
        // line 247
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "short_desc", [])) {
            // line 248
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Краткое описание</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t<textarea name=\"short_desc\" rules=\"string|length:3,1000\" rows=\"4\">";
            // line 252
            if (($context["edit"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["short_desc"] ?? null), "html", null, true);
            }
            echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 257
        echo "\t\t\t
\t\t
\t\t";
        // line 259
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "description", [])) {
            // line 260
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Полное описание</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t<textarea name=\"description\" editor=\"productEditor";
            // line 264
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" rules=\"string|length:3,65000\" rows=\"10\">";
            if (($context["edit"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            }
            echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 269
        echo "\t\t
\t\t";
        // line 270
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "attributes", [])) {
            // line 271
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Характеристики</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"w-40\">Атрибут</td>
\t\t\t\t\t\t\t\t<td>Значение</td>
\t\t\t\t\t\t\t\t<td class=\"w-30px\">Опции</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"attributesList\">
\t\t\t\t\t\t\t";
            // line 283
            if (($context["attributes"] ?? null)) {
                // line 284
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
                foreach ($context['_seq'] as $context["index"] => $context["attr"]) {
                    // line 285
                    echo "\t\t\t\t\t\t\t\t\t<tr index=\"";
                    echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"attributes[";
                    // line 288
                    echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                    echo "][name]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attr"], "name", []), "html", null, true);
                    echo "\" rules=\"string|length:3,100\" >
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"attributes[";
                    // line 293
                    echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                    echo "][value]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attr"], "value", []), "html", null, true);
                    echo "\" rules=\"string|length:3,255\" >
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons inline notop\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"remove verysmall\" removeattribute=><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['attr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 303
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 304
                echo "\t\t\t\t\t\t\t\t<tr class=\"empty\"> <td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>
\t\t\t\t\t\t\t";
            }
            // line 306
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall\" id=\"addAttribute\">Добавить</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 320
        echo "\t\t
\t\t
\t\t";
        // line 322
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "options", [])) {
            // line 323
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Варианты товара</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 326
            if ( !($context["is_optional_prod"] ?? null)) {
                // line 327
                echo "\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"w-66px\">Иконка</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-66px\">Цвет</td>
\t\t\t\t\t\t\t\t\t<td>Название опции</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-40rem\">Товар</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-66px\" title=\"Сортировка\">Сорт.</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-78px\">Действия</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr mainoption>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 341
                if (($context["new"] ?? null)) {
                    // line 342
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"file verysmall single empty\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 343
                    $context["newrand"] = rand(0, 999);
                    // line 344
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"new";
                    echo twig_escape_filter($this->env, ($context["newrand"] ?? null), "html", null, true);
                    echo "\" filemanager=\"images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 346
                    echo twig_escape_filter($this->env, base_url("public/images/none_img.png"), "html", null, true);
                    echo "\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"option_icon\" id=\"new";
                    // line 350
                    echo twig_escape_filter($this->env, ($context["newrand"] ?? null), "html", null, true);
                    echo "\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (                // line 352
($context["edit"] ?? null)) {
                    // line 353
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["rand"] = rand(0, 999);
                    // line 354
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"file verysmall single";
                    if ( !($context["option_icon"] ?? null)) {
                        echo " empty";
                    }
                    echo "\" title=\"";
                    if (($context["option_icon"] ?? null)) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [($context["option_icon"] ?? null)])]), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"";
                    // line 355
                    echo twig_escape_filter($this->env, (($context["k"] ?? null) . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" filemanager=\"images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 357
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('is_file')->getCallable(), [base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [($context["option_icon"] ?? null)]))), "public/images/none_img.png"]), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, _twig_default_filter(call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [($context["option_icon"] ?? null)])]), "Нет картинки"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"option_icon\" id=\"";
                    // line 361
                    echo twig_escape_filter($this->env, (($context["k"] ?? null) . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, ($context["option_icon"] ?? null), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 364
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option_color\" value=\"";
                // line 366
                echo twig_escape_filter($this->env, ($context["option_color"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar_bordered avatar_pointer avatar_inline avatar_rounded\" shooseprodopscolor style=\"background-color: ";
                // line 367
                echo twig_escape_filter($this->env, (((isset($context["option_color"]) || array_key_exists("option_color", $context))) ? (_twig_default_filter(($context["option_color"] ?? null), "transparent")) : ("transparent")), "html", null, true);
                echo ";\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_title\" rules=\"string\" showrows value=\"";
                // line 371
                echo twig_escape_filter($this->env, ($context["option_title"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-40rem\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters-5 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar_bordered\" mainimageoption style=\"background-image: url('";
                // line 377
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('is_file')->getCallable(), [base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["main_image"] ?? null), "file", [])]))), "public/images/none_img.png"]), "html", null, true);
                echo "')\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 380
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo " <small>(Текущий)</small></small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-66px\" title=\"Сортировка\">
\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled showrows>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-78px center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"buttons notop inline\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall remove pl-10px pr-10px\" title=\"Убрать значения\" mainoptionclear disabled><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tbody id=\"productOptions\"></tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 401
                if (($context["new"] ?? null)) {
                    // line 402
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall alt2 px-15px py-7px\" id=\"saveProdAndAddoption\">Добавить опцию</button>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 404
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall alt2 px-15px py-7px\" id=\"productAddoption\">Добавить опцию</button>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 406
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t";
            } else {
                // line 412
                echo "\t\t\t\t\t\t<p class=\"text red\">Данный товар уже является вариантом для товара:</p>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<div class=\"avatar avatar_cover avatar_bordered w-60px h-60px mr-5px\" style=\"background-image: url('";
                // line 414
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('is_file')->getCallable(), [base_url(("public/filemanager/__thumbs__/" . twig_get_attribute($this->env, $this->source, ($context["is_optional_prod"] ?? null), "image", []))), "public/images/none_img.png"]), "html", null, true);
                echo "')\"></div>
\t\t\t\t\t\t\t<p class=\"text\">";
                // line 415
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["is_optional_prod"] ?? null), "title", []), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 418
            echo "\t\t\t\t</td>
\t\t\t</tr>\t
\t\t";
        }
        // line 421
        echo "\t\t
\t\t
\t\t
\t\t
\t\t
\t\t";
        // line 426
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "icons", [])) {
            // line 427
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Значки</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 430
            if (($context["icons_list"] ?? null)) {
                // line 431
                echo "\t\t\t\t\t\t<div class=\"iconsblock\" id=\"productIcons\">
\t\t\t\t\t\t\t<div class=\"iconsblock__block\">
\t\t\t\t\t\t\t\t<div class=\"drow dgutter-10\">
\t\t\t\t\t\t\t\t\t";
                // line 434
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["icons_list"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 435
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"dcol-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"iconsblock__item\" title=\"";
                    // line 436
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"";
                    // line 437
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", []), "html", null, true);
                    echo "\"";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", []), ($context["icons"] ?? null))) {
                        echo " checked";
                    }
                    echo " id=\"prodIcon";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", []), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"prodIcon";
                    // line 438
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", []), "html", null, true);
                    echo "\" class=\"iconsblock__label\" style=\"background-image: url('";
                    echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . twig_get_attribute($this->env, $this->source, $context["item"], "icon", []))), "html", null, true);
                    echo "');\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 442
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 446
                echo "\t\t\t\t\t\t<p class=\"empty text\">Нет значков</p>
\t\t\t\t\t";
            }
            // line 448
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 451
        echo "\t\t
\t\t
\t\t
\t\t
\t\t";
        // line 455
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "article", [])) {
            // line 456
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Артикль</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input type=\"text\" name=\"article\" value=\"";
            // line 460
            echo twig_escape_filter($this->env, ($context["article"] ?? null), "html", null, true);
            echo "\" rules=\"string|length:3,50\" autocomplete=\"off\" />
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 465
        echo "\t\t
\t\t";
        // line 466
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "model", [])) {
            // line 467
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Модель</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input type=\"text\" name=\"model\" value=\"";
            // line 471
            echo twig_escape_filter($this->env, ($context["model"] ?? null), "html", null, true);
            echo "\" rules=\"string|length:3,50\" autocomplete=\"off\" />
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 476
        echo "\t\t
\t\t";
        // line 477
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "price", [])) {
            // line 478
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Цена</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 481
            if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "price_old", [])) {
                // line 482
                echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t<div class=\"field w-20rem\">
\t\t\t\t\t\t\t\t\t<small class=\"label\">Текущая</small>
\t\t\t\t\t\t\t\t\t<input type=\"text\" numberformat=\"2\" min=\"0\" name=\"price\" value=\"";
                // line 486
                echo twig_escape_filter($this->env, ($context["price"] ?? null), "html", null, true);
                echo "\" rules=\"num|length:1,9\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<p class=\"postfix postfix_bottom ml-6px\">";
                // line 487
                echo twig_escape_filter($this->env, ($context["currency"] ?? null), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t<div class=\"field w-20rem\">
\t\t\t\t\t\t\t\t\t<small class=\"label\">Старая</small>
\t\t\t\t\t\t\t\t\t<input type=\"text\" numberformat=\"2\" min=\"0\" name=\"price_old\" value=\"";
                // line 493
                echo twig_escape_filter($this->env, ($context["price_old"] ?? null), "html", null, true);
                echo "\" rules=\"num|length:1,9\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<p class=\"postfix postfix_bottom ml-6px\">";
                // line 494
                echo twig_escape_filter($this->env, ($context["currency"] ?? null), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 499
                echo "\t\t\t\t\t\t<div class=\"field w-20rem\">
\t\t\t\t\t\t\t<input type=\"text\" numberformat=\"2\" min=\"0\" name=\"price\" value=\"";
                // line 500
                echo twig_escape_filter($this->env, ($context["price"] ?? null), "html", null, true);
                echo "\" rules=\"num|length:1,11\" autocomplete=\"off\" />
\t\t\t\t\t\t\t<p class=\"postfix postfix_bottom ml-6px\">";
                // line 501
                echo twig_escape_filter($this->env, ($context["currency"] ?? null), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 504
            echo "\t\t\t\t\t
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 508
        echo "\t\t
\t\t
\t\t";
        // line 510
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "price_label", [])) {
            // line 511
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Подпись под ценой</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input id=\"check";
            // line 517
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . ($context["itemk"] ?? null)), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"price_label\"
\t\t\t\t\t\t\t\t";
            // line 520
            if (($context["price_label"] ?? null)) {
                echo "checked";
            }
            echo ">
\t\t\t\t\t\t\t\t<label for=\"check";
            // line 521
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . ($context["itemk"] ?? null)), "html", null, true);
            echo "\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 528
        echo "\t\t
\t\t";
        // line 529
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "label", [])) {
            // line 530
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Ярлык</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input id=\"check";
            // line 536
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . ($context["itemk"] ?? null)), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"label\"
\t\t\t\t\t\t\t\t";
            // line 539
            if (($context["label"] ?? null)) {
                echo "checked";
            }
            echo ">
\t\t\t\t\t\t\t\t<label for=\"check";
            // line 540
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . ($context["itemk"] ?? null)), "html", null, true);
            echo "\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 547
        echo "\t\t
\t\t
\t\t
\t\t
\t\t";
        // line 551
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "files", [])) {
            // line 552
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Файлы</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 555
            if (($context["new"] ?? null)) {
                // line 556
                echo "\t\t\t\t\t\t<button class=\"file__add file__add_small";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [])) {
                    echo " mt-28px";
                }
                echo "\" id=\"addSimpleFile\" title=\"Добавить файл\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t";
            } elseif (            // line 557
($context["edit"] ?? null)) {
                // line 558
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["item"]) {
                    // line 559
                    echo "\t\t\t\t\t\t\t";
                    $context["rand"] = rand(0, 999);
                    // line 560
                    echo "\t\t\t\t\t\t\t<div class=\"file small mb-10px";
                    if ( !twig_get_attribute($this->env, $this->source, $context["item"], "file", [])) {
                        echo " empty";
                    }
                    echo "\" title=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "file", [])) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])])]), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 561
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "label", [])) {
                        echo "<span class=\"file__label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", []), "html", null, true);
                        echo "</span>";
                    }
                    // line 562
                    echo "\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"";
                    echo twig_escape_filter($this->env, ($context["k"] . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" filemanager=\"all\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t";
                    // line 564
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "file", [])) {
                        // line 565
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (call_user_func_array($this->env->getFilter('is_img_file')->getCallable(), [call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", []), 2])])) {
                            // line 566
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, base_url(("public/filemanager/__thumbs__/" . call_user_func_array($this->env->getFilter('freshfile')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])]))), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])])]), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 568
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, base_url(("public/images/filetypes/" . call_user_func_array($this->env->getFilter('filename')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", []), 2]))), "html", null, true);
                            echo ".png\" alt=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])])]), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 570
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 571
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, base_url("public/images/none.png"), "html", null, true);
                        echo "\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 573
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>";
                    // line 574
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "file", [])) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('filename')->getCallable(), [call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "file", [])])]), "html", null, true);
                    }
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"files[";
                    // line 577
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "][file]\" id=\"";
                    echo twig_escape_filter($this->env, ($context["k"] . ($context["rand"] ?? null)), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "file", []), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 580
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"file__add file__add_small";
                // line 581
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [])) {
                    echo " mt-28px";
                }
                echo "\" id=\"addSimpleFile\" title=\"Добавить файл\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t";
            }
            // line 583
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 586
        echo "\t\t
\t\t
\t\t
\t\t
\t\t";
        // line 590
        if (twig_get_attribute($this->env, $this->source, ($context["access"] ?? null), "hashtags", [])) {
            // line 591
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Хэштеги</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"hashtags\" id=\"selectHashtags\" multiple=\"multiple\">
\t\t\t\t\t\t";
            // line 595
            if (($context["hashtags"] ?? null)) {
                // line 596
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["hashtags"] ?? null));
                foreach ($context['_seq'] as $context["htag"] => $context["selected"]) {
                    // line 597
                    echo "\t\t\t\t\t\t\t\t<option";
                    if ($context["selected"]) {
                        echo " selected";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["htag"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["htag"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['htag'], $context['selected'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 599
                echo "\t\t\t\t\t\t";
            }
            // line 600
            echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 604
        echo "\t\t
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Сортировка товара в списке</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field w-80px\">
\t\t\t\t\t<input type=\"number\" min=\"0\" name=\"sort\" value=\"";
        // line 609
        echo twig_escape_filter($this->env, ($context["sort"] ?? null), "html", null, true);
        echo "\" rules=\"num|length:1,11\" autocomplete=\"off\" showrows />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "views/admin/render/products/form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1316 => 609,  1309 => 604,  1303 => 600,  1300 => 599,  1285 => 597,  1280 => 596,  1278 => 595,  1272 => 591,  1270 => 590,  1264 => 586,  1259 => 583,  1252 => 581,  1249 => 580,  1236 => 577,  1228 => 574,  1225 => 573,  1219 => 571,  1216 => 570,  1208 => 568,  1200 => 566,  1197 => 565,  1195 => 564,  1189 => 562,  1183 => 561,  1172 => 560,  1169 => 559,  1164 => 558,  1162 => 557,  1155 => 556,  1153 => 555,  1148 => 552,  1146 => 551,  1140 => 547,  1129 => 540,  1123 => 539,  1116 => 536,  1108 => 530,  1106 => 529,  1103 => 528,  1092 => 521,  1086 => 520,  1079 => 517,  1071 => 511,  1069 => 510,  1065 => 508,  1059 => 504,  1053 => 501,  1049 => 500,  1046 => 499,  1038 => 494,  1034 => 493,  1025 => 487,  1021 => 486,  1015 => 482,  1013 => 481,  1008 => 478,  1006 => 477,  1003 => 476,  995 => 471,  989 => 467,  987 => 466,  984 => 465,  976 => 460,  970 => 456,  968 => 455,  962 => 451,  957 => 448,  953 => 446,  947 => 442,  933 => 438,  923 => 437,  919 => 436,  916 => 435,  912 => 434,  907 => 431,  905 => 430,  900 => 427,  898 => 426,  891 => 421,  886 => 418,  880 => 415,  876 => 414,  872 => 412,  864 => 406,  860 => 404,  856 => 402,  854 => 401,  830 => 380,  824 => 377,  815 => 371,  808 => 367,  804 => 366,  800 => 364,  792 => 361,  783 => 357,  778 => 355,  767 => 354,  764 => 353,  762 => 352,  757 => 350,  750 => 346,  744 => 344,  742 => 343,  739 => 342,  737 => 341,  721 => 327,  719 => 326,  714 => 323,  712 => 322,  708 => 320,  692 => 306,  688 => 304,  685 => 303,  667 => 293,  657 => 288,  650 => 285,  645 => 284,  643 => 283,  629 => 271,  627 => 270,  624 => 269,  612 => 264,  606 => 260,  604 => 259,  600 => 257,  590 => 252,  584 => 248,  582 => 247,  577 => 244,  561 => 230,  557 => 228,  554 => 227,  536 => 217,  529 => 214,  524 => 213,  522 => 212,  509 => 201,  507 => 200,  502 => 197,  497 => 194,  490 => 192,  487 => 191,  475 => 187,  466 => 185,  458 => 182,  455 => 181,  449 => 179,  446 => 178,  438 => 176,  430 => 174,  427 => 173,  425 => 172,  419 => 170,  413 => 169,  402 => 168,  399 => 167,  394 => 166,  392 => 165,  385 => 164,  383 => 163,  378 => 160,  376 => 159,  372 => 157,  367 => 154,  364 => 153,  357 => 149,  350 => 147,  342 => 144,  339 => 143,  333 => 141,  325 => 139,  323 => 138,  318 => 136,  307 => 135,  304 => 134,  302 => 133,  294 => 128,  286 => 123,  280 => 121,  278 => 120,  275 => 119,  272 => 118,  270 => 117,  265 => 114,  262 => 113,  255 => 109,  248 => 107,  240 => 104,  237 => 103,  231 => 101,  228 => 100,  220 => 98,  212 => 96,  209 => 95,  207 => 94,  201 => 92,  195 => 91,  184 => 90,  181 => 89,  179 => 88,  173 => 85,  168 => 83,  160 => 78,  154 => 76,  152 => 75,  149 => 74,  146 => 73,  144 => 72,  133 => 70,  130 => 69,  128 => 68,  125 => 67,  119 => 63,  110 => 60,  107 => 59,  103 => 58,  97 => 54,  95 => 53,  87 => 48,  75 => 39,  64 => 31,  53 => 23,  42 => 15,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form id=\"catalogItemForm\">
\t<table class=\"fieldset\">
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Заголовок страницы</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"title\" value=\"{{title}}\" rules=\"empty|length:3,100|string\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>SEO URL</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"seo_url\" value=\"{{seo_url}}\" rules=\"empty|length:3,255|seourl\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Title ссылки</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"link_title\" value=\"{{link_title}}\" rules=\"length:3,100\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Meta keywords</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"meta_keywords\" value=\"{{meta_keywords}}\" rules=\"string|length:3,160\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Meta description</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t<textarea name=\"meta_description\" rules=\"string|length:3\" rows=\"10\">{{meta_description}}</textarea>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Название</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"{{name}}\" rules=\"length:3,100|string\" autocomplete=\"off\" readonly />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t
\t\t{% if access.categories and categories %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Категория</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"row\" id=\"productCategories\">
\t\t\t\t\t\t{% for column in categories|arrtocols(3) %}
\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t{{column|recursive('<li class=\"newproductcats__item\"><label for=\"cat{id}\"><input type=\"checkbox\"{checked} id=\"cat{id}\" value=\"{id}\">{title}</label></li>', 'children', '<ul class=\"newproductcats\" data>')}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t{% if access.main_image or access.threed %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>{% if access.main_image and access.threed %}Главное фото и 3D{% elseif access.main_image %}Главное фото{% elseif access.threed %}3D{% endif %}</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t{% if access.main_image %}
\t\t\t\t\t\t{% if new %}
\t\t\t\t\t\t\t<div class=\"file empty\">
\t\t\t\t\t\t\t\t{% set newrand = rand(0,999) %}
\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"new{{newrand}}\" mainimage filemanager=\"images\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none_img.png')}}\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"main_image[file]\" id=\"new{{newrand}}\" value=\"\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"main_image[alt]\" value=\"{{main_image.alt}}\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% elseif edit %}
\t\t\t\t\t\t\t{% set rand = rand(0,999) %}
\t\t\t\t\t\t\t<div class=\"file{% if not main_image.file %} empty{% endif %}\" title=\"{% if main_image.file %}{{main_image.file|decodedirsfiles|filename}}{% endif %}\">
\t\t\t\t\t\t\t\t{% if main_image.label %}<span class=\"file__label\">{{main_image.label}}</span>{% endif %}
\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"{{k~rand}}\" mainimage filemanager=\"images\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t{% if main_image.file %}
\t\t\t\t\t\t\t\t\t\t\t{% if main_image.file|filename(2)|is_img_file %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~main_image.file|freshfile)}}\" alt=\"{{main_image.file|decodedirsfiles|filename}}\">
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~main_image.file|filename(2))}}.png\" alt=\"{{main_image.file|decodedirsfiles|filename}}\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none_img.png')}}\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>{% if main_image.file %}{{main_image.file|decodedirsfiles|filename}}{% endif %}</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"main_image[file]\" id=\"{{k~rand}}\" value=\"{{main_image.file}}\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"main_image[alt]\" value=\"{{main_image.alt}}\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t{% if access.threed %}
\t\t\t\t\t\t{% if new %}
\t\t\t\t\t\t\t<div class=\"file empty\">
\t\t\t\t\t\t\t\t{% set newrand = rand(0,999) %}
\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"new{{newrand}}\" filemanager=\"threed\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"threed[file]\" id=\"new{{newrand}}\" value=\"\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"threed[alt]\" value=\"\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% elseif edit %}
\t\t\t\t\t\t\t{% set rand = rand(0,999) %}
\t\t\t\t\t\t\t<div class=\"file{% if not threed.file %} empty{% endif %}\" title=\"{% if threed.file %}{{threed.file|decodedirsfiles|filename}}{% endif %}\">
\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"{{k~rand}}\" filemanager=\"threed\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t{% if threed.file %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~threed.file|filename(2))}}.png\" alt=\"{{threed.file|decodedirsfiles|filename}}\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>{% if threed.file %}{{threed.file|decodedirsfiles|filename}}{% endif %}</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"threed[file]\" id=\"{{k~rand}}\" value=\"{{threed.file}}\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"threed[alt]\" value=\"{{threed.alt}}\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>\t
\t\t{% endif %}
\t\t
\t\t
\t\t{% if access.gallery %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Галлерея</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t{% if new %}
\t\t\t\t\t\t<button class=\"file__add file__add_small{% if item.label %} mt-28px{% endif %}\" id=\"addGalleryFile\" title=\"Добавить изображение\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t{% elseif edit %}
\t\t\t\t\t\t{% for k, item in gallery %}
\t\t\t\t\t\t\t{% set rand = rand(0,999) %}
\t\t\t\t\t\t\t<div class=\"file small mb-10px{% if not item.file %} empty{% endif %}\" title=\"{% if item.file %}{{item.file|decodedirsfiles|filename}}{% endif %}\">
\t\t\t\t\t\t\t\t{% if item.label %}<span class=\"file__label\">{{item.label}}</span>{% endif %}
\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"{{k~rand}}\" filemanager=\"images\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t{% if item.file %}
\t\t\t\t\t\t\t\t\t\t\t{% if item.file|filename(2)|is_img_file %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~item.file|freshfile)}}\" alt=\"{{item.file|decodedirsfiles|filename}}\">
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~item.file|filename(2))}}.png\" alt=\"{{item.file|decodedirsfiles|filename}}\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none_img.png')}}\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>{% if item.file %}{{item.file|decodedirsfiles|filename}}{% endif %}</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"gallery[{{k}}][file]\" id=\"{{k~rand}}\" value=\"{{item.file}}\" />
\t\t\t\t\t\t\t\t<div class=\"field file__alt\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"gallery[{{k}}][alt]\" value=\"{{item.alt}}\" placeholder=\"Атрибут alt\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"file__add file__add_small{% if item.label %} mt-28px{% endif %}\" id=\"addGalleryFile\" title=\"Добавить изображение\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t
\t\t
\t\t{% if access.videos %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Видео</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Ссылка или ID видео</td>
\t\t\t\t\t\t\t\t<td class=\"w-30px\">Опции</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"videosList\">
\t\t\t\t\t\t\t{% if videos %}
\t\t\t\t\t\t\t\t{% for index, video in videos %}
\t\t\t\t\t\t\t\t\t<tr index=\"{{index}}\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"videos[{{index}}][link]\" value=\"{{video.link}}\" rules=\"string|length:3,300\" >
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons inline notop\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"remove verysmall\" removevideo=><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr class=\"empty\"><td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall\" id=\"addVideo\">Добавить</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t\t
\t\t
\t\t{% if access.short_desc %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Краткое описание</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t<textarea name=\"short_desc\" rules=\"string|length:3,1000\" rows=\"4\">{% if edit %}{{short_desc}}{% endif %}</textarea>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t\t
\t\t
\t\t{% if access.description %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Полное описание</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t<textarea name=\"description\" editor=\"productEditor{{rand}}\" rules=\"string|length:3,65000\" rows=\"10\">{% if edit %}{{description}}{% endif %}</textarea>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t{% if access.attributes %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Характеристики</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"w-40\">Атрибут</td>
\t\t\t\t\t\t\t\t<td>Значение</td>
\t\t\t\t\t\t\t\t<td class=\"w-30px\">Опции</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody id=\"attributesList\">
\t\t\t\t\t\t\t{% if attributes %}
\t\t\t\t\t\t\t\t{% for index, attr in attributes %}
\t\t\t\t\t\t\t\t\t<tr index=\"{{index}}\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"attributes[{{index}}][name]\" value=\"{{attr.name}}\" rules=\"string|length:3,100\" >
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"attributes[{{index}}][value]\" value=\"{{attr.value}}\" rules=\"string|length:3,255\" >
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons inline notop\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"remove verysmall\" removeattribute=><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr class=\"empty\"> <td colspan=\"3\"><p class=\"empty center\">Нет данных</p></td></tr>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall\" id=\"addAttribute\">Добавить</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t
\t\t{% if access.options %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Варианты товара</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t{% if not is_optional_prod %}
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"w-66px\">Иконка</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-66px\">Цвет</td>
\t\t\t\t\t\t\t\t\t<td>Название опции</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-40rem\">Товар</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-66px\" title=\"Сортировка\">Сорт.</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-78px\">Действия</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr mainoption>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t{% if new %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"file verysmall single empty\">
\t\t\t\t\t\t\t\t\t\t\t\t{% set newrand = rand(0,999) %}
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"new{{newrand}}\" filemanager=\"images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none_img.png')}}\" alt=\"Нет картинки\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"option_icon\" id=\"new{{newrand}}\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% elseif edit %}
\t\t\t\t\t\t\t\t\t\t\t{% set rand = rand(0,999) %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"file verysmall single{% if not option_icon %} empty{% endif %}\" title=\"{% if option_icon %}{{option_icon|decodedirsfiles|filename}}{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"{{k~rand}}\" filemanager=\"images\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~option_icon|freshfile)|is_file('public/images/none_img.png')}}\" alt=\"{{option_icon|decodedirsfiles|filename|default('Нет картинки')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" fileremove><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"option_icon\" id=\"{{k~rand}}\" value=\"{{option_icon}}\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option_color\" value=\"{{option_color}}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar_bordered avatar_pointer avatar_inline avatar_rounded\" shooseprodopscolor style=\"background-color: {{option_color|default('transparent')}};\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option_title\" rules=\"string\" showrows value=\"{{option_title}}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-40rem\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row gutters-5 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar_bordered\" mainimageoption style=\"background-image: url('{{base_url('public/filemanager/__thumbs__/'~main_image.file|freshfile)|is_file('public/images/none_img.png')}}')\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<small>{{title}} <small>(Текущий)</small></small>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-66px\" title=\"Сортировка\">
\t\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" value=\"0\" disabled showrows>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"w-78px center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"buttons notop inline\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall remove pl-10px pr-10px\" title=\"Убрать значения\" mainoptionclear disabled><i class=\"fa fa-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tbody id=\"productOptions\"></tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"buttons notop right\">
\t\t\t\t\t\t\t\t\t\t\t{% if new %}
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall alt2 px-15px py-7px\" id=\"saveProdAndAddoption\">Добавить опцию</button>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"verysmall alt2 px-15px py-7px\" id=\"productAddoption\">Добавить опцию</button>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p class=\"text red\">Данный товар уже является вариантом для товара:</p>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<div class=\"avatar avatar_cover avatar_bordered w-60px h-60px mr-5px\" style=\"background-image: url('{{base_url('public/filemanager/__thumbs__/'~is_optional_prod.image)|is_file('public/images/none_img.png')}}')\"></div>
\t\t\t\t\t\t\t<p class=\"text\">{{is_optional_prod.title}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>\t
\t\t{% endif %}
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t{% if access.icons %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Значки</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t{% if icons_list %}
\t\t\t\t\t\t<div class=\"iconsblock\" id=\"productIcons\">
\t\t\t\t\t\t\t<div class=\"iconsblock__block\">
\t\t\t\t\t\t\t\t<div class=\"drow dgutter-10\">
\t\t\t\t\t\t\t\t\t{% for item in icons_list %}
\t\t\t\t\t\t\t\t\t\t<div class=\"dcol-15\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"iconsblock__item\" title=\"{{item.title}}\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"{{item.id}}\"{% if item.id in icons %} checked{% endif %} id=\"prodIcon{{item.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"prodIcon{{item.id}}\" class=\"iconsblock__label\" style=\"background-image: url('{{base_url('public/filemanager/__thumbs__/'~item.icon)}}');\">{{item.title}}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p class=\"empty text\">Нет значков</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t
\t\t
\t\t
\t\t{% if access.article %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Артикль</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input type=\"text\" name=\"article\" value=\"{{article}}\" rules=\"string|length:3,50\" autocomplete=\"off\" />
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t{% if access.model %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Модель</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<input type=\"text\" name=\"model\" value=\"{{model}}\" rules=\"string|length:3,50\" autocomplete=\"off\" />
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t{% if access.price %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Цена</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t{% if access.price_old %}
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t<div class=\"field w-20rem\">
\t\t\t\t\t\t\t\t\t<small class=\"label\">Текущая</small>
\t\t\t\t\t\t\t\t\t<input type=\"text\" numberformat=\"2\" min=\"0\" name=\"price\" value=\"{{price}}\" rules=\"num|length:1,9\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<p class=\"postfix postfix_bottom ml-6px\">{{currency}}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t<div class=\"field w-20rem\">
\t\t\t\t\t\t\t\t\t<small class=\"label\">Старая</small>
\t\t\t\t\t\t\t\t\t<input type=\"text\" numberformat=\"2\" min=\"0\" name=\"price_old\" value=\"{{price_old}}\" rules=\"num|length:1,9\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<p class=\"postfix postfix_bottom ml-6px\">{{currency}}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"field w-20rem\">
\t\t\t\t\t\t\t<input type=\"text\" numberformat=\"2\" min=\"0\" name=\"price\" value=\"{{price}}\" rules=\"num|length:1,11\" autocomplete=\"off\" />
\t\t\t\t\t\t\t<p class=\"postfix postfix_bottom ml-6px\">{{currency}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t
\t\t{% if access.price_label %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Подпись под ценой</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input id=\"check{{rand}}{{id~itemk}}\"
\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"price_label\"
\t\t\t\t\t\t\t\t{% if price_label %}checked{% endif %}>
\t\t\t\t\t\t\t\t<label for=\"check{{rand}}{{id~itemk}}\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t{% if access.label %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Ярлык</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<div class=\"checkbox__item checkbox__item_ver2\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input id=\"check{{rand}}{{id~itemk}}\"
\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"label\"
\t\t\t\t\t\t\t\t{% if label %}checked{% endif %}>
\t\t\t\t\t\t\t\t<label for=\"check{{rand}}{{id~itemk}}\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t
\t\t
\t\t
\t\t{% if access.files %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Файлы</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t{% if new %}
\t\t\t\t\t\t<button class=\"file__add file__add_small{% if item.label %} mt-28px{% endif %}\" id=\"addSimpleFile\" title=\"Добавить файл\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t{% elseif edit %}
\t\t\t\t\t\t{% for k, item in files %}
\t\t\t\t\t\t\t{% set rand = rand(0,999) %}
\t\t\t\t\t\t\t<div class=\"file small mb-10px{% if not item.file %} empty{% endif %}\" title=\"{% if item.file %}{{item.file|decodedirsfiles|filename}}{% endif %}\">
\t\t\t\t\t\t\t\t{% if item.label %}<span class=\"file__label\">{{item.label}}</span>{% endif %}
\t\t\t\t\t\t\t\t<label class=\"file__block\" for=\"{{k~rand}}\" filemanager=\"all\">
\t\t\t\t\t\t\t\t\t<div class=\"file__image\" fileimage>
\t\t\t\t\t\t\t\t\t\t{% if item.file %}
\t\t\t\t\t\t\t\t\t\t\t{% if item.file|filename(2)|is_img_file %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/filemanager/__thumbs__/'~item.file|freshfile)}}\" alt=\"{{item.file|decodedirsfiles|filename}}\">
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/filetypes/'~item.file|filename(2))}}.png\" alt=\"{{item.file|decodedirsfiles|filename}}\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{base_url('public/images/none.png')}}\" alt=\"Нет файла\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"file__name\"><span filename>{% if item.file %}{{item.file|decodedirsfiles|filename}}{% endif %}</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"file__remove\" title=\"Удалить\" filedelete><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input filesrc type=\"hidden\" name=\"files[{{k}}][file]\" id=\"{{k~rand}}\" value=\"{{item.file}}\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"file__add file__add_small{% if item.label %} mt-28px{% endif %}\" id=\"addSimpleFile\" title=\"Добавить файл\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t
\t\t
\t\t
\t\t{% if access.hashtags %}
\t\t\t<tr>
\t\t\t\t<td class=\"w-20\"><div><span>Хэштеги</span></div></td>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"hashtags\" id=\"selectHashtags\" multiple=\"multiple\">
\t\t\t\t\t\t{% if hashtags %}
\t\t\t\t\t\t\t{% for htag, selected in hashtags %}
\t\t\t\t\t\t\t\t<option{% if selected %} selected{% endif %} value=\"{{htag}}\">{{htag}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endif %}
\t\t
\t\t<tr>
\t\t\t<td class=\"w-20\"><div><span>Сортировка товара в списке</span></div></td>
\t\t\t<td>
\t\t\t\t<div class=\"field w-80px\">
\t\t\t\t\t<input type=\"number\" min=\"0\" name=\"sort\" value=\"{{sort}}\" rules=\"num|length:1,11\" autocomplete=\"off\" showrows />
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>", "views/admin/render/products/form.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\products\\form.tpl");
    }
}
