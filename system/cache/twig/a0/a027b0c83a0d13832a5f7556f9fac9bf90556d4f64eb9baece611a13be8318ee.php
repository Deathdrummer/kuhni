<?php

/* views/admin/render/filemanager/dirs.tpl */
class __TwigTemplate_55cf126d29878eebd49ec79a9c1e8cc50e498d00a8f1e5e4a75c928c8a292412 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dirs"] ?? null));
        foreach ($context['_seq'] as $context["firstName"] => $context["firstData"]) {
            // line 2
            echo "\t<li>
\t\t<span directory=\"";
            // line 3
            echo twig_escape_filter($this->env, $context["firstName"], "html", null, true);
            echo "\"";
            if ((($context["currentdir"] ?? null) == $context["firstName"])) {
                echo " class=\"active\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [$context["firstName"]]), "html", null, true);
            echo "</span>
\t\t";
            // line 4
            if ($context["firstData"]) {
                // line 5
                echo "\t\t\t<ul>
\t\t\t\t";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["firstData"]);
                foreach ($context['_seq'] as $context["secondName"] => $context["secondData"]) {
                    // line 7
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<span directory=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $context["firstName"], "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $context["secondName"], "html", null, true);
                    echo "\"";
                    if ((($context["currentdir"] ?? null) == (($context["firstName"] . "/") . $context["secondName"]))) {
                        echo " class=\"active\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [$context["secondName"]]), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t";
                    // line 9
                    if ($context["secondData"]) {
                        // line 10
                        echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 11
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["secondData"]);
                        foreach ($context['_seq'] as $context["thirdName"] => $context["thirdData"]) {
                            // line 12
                            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span directory=\"";
                            // line 13
                            echo twig_escape_filter($this->env, $context["firstName"], "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $context["secondName"], "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $context["thirdName"], "html", null, true);
                            echo "\"";
                            if ((($context["currentdir"] ?? null) == (((($context["firstName"] . "/") . $context["secondName"]) . "/") . $context["thirdName"]))) {
                                echo " class=\"active\"";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [$context["thirdName"]]), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                            // line 14
                            if ($context["thirdData"]) {
                                // line 15
                                echo "\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 16
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["thirdData"]);
                                foreach ($context['_seq'] as $context["forthName"] => $context["forthData"]) {
                                    // line 17
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span directory=\"";
                                    // line 18
                                    echo twig_escape_filter($this->env, $context["firstName"], "html", null, true);
                                    echo "/";
                                    echo twig_escape_filter($this->env, $context["secondName"], "html", null, true);
                                    echo "/";
                                    echo twig_escape_filter($this->env, $context["thirdName"], "html", null, true);
                                    echo "/";
                                    echo twig_escape_filter($this->env, $context["forthName"], "html", null, true);
                                    echo "\"";
                                    if ((($context["currentdir"] ?? null) == (((((($context["firstName"] . "/") . $context["secondName"]) . "/") . $context["thirdName"]) . "/") . $context["forthName"]))) {
                                        echo " class=\"active\"";
                                    }
                                    echo ">";
                                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('decodedirsfiles')->getCallable(), [$context["forthName"]]), "html", null, true);
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['forthName'], $context['forthData'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 21
                                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 23
                            echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['thirdName'], $context['thirdData'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['secondName'], $context['secondData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "\t\t\t</ul>
\t\t";
            }
            // line 31
            echo "\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['firstName'], $context['firstData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "views/admin/render/filemanager/dirs.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 31,  145 => 29,  138 => 27,  134 => 25,  127 => 23,  123 => 21,  102 => 18,  99 => 17,  95 => 16,  92 => 15,  90 => 14,  76 => 13,  73 => 12,  69 => 11,  66 => 10,  64 => 9,  52 => 8,  49 => 7,  45 => 6,  42 => 5,  40 => 4,  30 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for firstName, firstData in dirs %}
\t<li>
\t\t<span directory=\"{{firstName}}\"{% if currentdir == firstName %} class=\"active\"{% endif %}>{{firstName|decodedirsfiles}}</span>
\t\t{% if firstData %}
\t\t\t<ul>
\t\t\t\t{% for secondName, secondData in firstData %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<span directory=\"{{firstName}}/{{secondName}}\"{% if currentdir == firstName~'/'~secondName %} class=\"active\"{% endif %}>{{secondName|decodedirsfiles}}</span>
\t\t\t\t\t\t{% if secondData %}
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t{% for thirdName, thirdData in secondData %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span directory=\"{{firstName}}/{{secondName}}/{{thirdName}}\"{% if currentdir == firstName~'/'~secondName~'/'~thirdName %} class=\"active\"{% endif %}>{{thirdName|decodedirsfiles}}</span>
\t\t\t\t\t\t\t\t\t\t{% if thirdData %}
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t{% for forthName, forthData in thirdData %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span directory=\"{{firstName}}/{{secondName}}/{{thirdName}}/{{forthName}}\"{% if currentdir == firstName~'/'~secondName~'/'~thirdName~'/'~forthName %} class=\"active\"{% endif %}>{{forthName|decodedirsfiles}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t{% endif %}
\t</li>
{% endfor %}", "views/admin/render/filemanager/dirs.tpl", "D:\\OSPanel\\domains\\kuhni\\public\\views\\admin\\render\\filemanager\\dirs.tpl");
    }
}
