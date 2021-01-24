<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* models/index.html */
class __TwigTemplate_d2d4da85959b9e6266eccd044e6183f34311e8c028cc4c47bf5131abb65bf631 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'pagecontent' => [$this, 'block_pagecontent'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/sbadmin/sbadmin2.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/sbadmin/sbadmin2.html", "models/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Index - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
   
";
    }

    // line 12
    public function block_pagecontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col col-md-8\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">All Models</h6>
                    </div>
                    
                    <div class=\"card-body\">
                        
                        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), ["models/create"]), "html", null, true);
        echo "\" class=\" float-right mt-2 mb-2 btn btn-sm   btn-primary btn-icon-split\"> 
                            <span class=\"icon text-white-50\">
                                <i class=\"fas fa-plus-circle\"></i>
                            </span>
                            <span class=\"text\">Model</span>
                        </a>

                        <table class=\"table \">
                            <thead>
                                <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Model Name</th>
                                <th scope=\"col\">Model Class</th>
                                <th scope=\"col\">Operations</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 43
            echo "                                    <tr>
                                        <th scope=\"row\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</th>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "class", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                        <td>
                                        <form method=\"POST\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), ["models/delete"]), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                                                ";
            // line 49
            echo ($context["csrf"] ?? null);
            echo "
                                                <a class=\"btn btn-sm btn-primary\" href='";
            // line 50
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), [("models/edit/" . twig_get_attribute($this->env, $this->source, $context["model"], "id", [], "any", false, false, false, 50))]), "html", null, true);
            echo "' > <i class=\"fas fa-edit\"></i> </a>
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\"> <i class=\"fas fa-trash-alt\"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </tbody>
                            
                        </table>
                        ";
        // line 59
        echo ($context["links"] ?? null);
        echo "
                    </div>
                </div>
                
            </div>
        </div>
    </div>

";
    }

    // line 72
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "models/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 73,  167 => 72,  154 => 59,  149 => 56,  137 => 50,  133 => 49,  127 => 48,  122 => 46,  118 => 45,  114 => 44,  111 => 43,  107 => 42,  86 => 24,  73 => 13,  69 => 12,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/sbadmin/sbadmin2.html\" %}

{% block title %}Index - {{ parent() }}{% endblock %}

{% block head %}
    {{ parent() }}
   
{% endblock %}



{% block pagecontent %}

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col col-md-8\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">All Models</h6>
                    </div>
                    
                    <div class=\"card-body\">
                        
                        <a href=\"{{ site_url('models/create') }}\" class=\" float-right mt-2 mb-2 btn btn-sm   btn-primary btn-icon-split\"> 
                            <span class=\"icon text-white-50\">
                                <i class=\"fas fa-plus-circle\"></i>
                            </span>
                            <span class=\"text\">Model</span>
                        </a>

                        <table class=\"table \">
                            <thead>
                                <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Model Name</th>
                                <th scope=\"col\">Model Class</th>
                                <th scope=\"col\">Operations</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                {% for model in all %}
                                    <tr>
                                        <th scope=\"row\">{{ model.id }}</th>
                                        <td>{{ model.name }}</td>
                                        <td>{{ model.class }}</td>
                                        <td>
                                        <form method=\"POST\" action=\"{{ site_url('models/delete') }}/{{model.id}}\">
                                                {{ csrf | raw}}
                                                <a class=\"btn btn-sm btn-primary\" href='{{ site_url(\"models/edit/#{model.id}\") }}' > <i class=\"fas fa-edit\"></i> </a>
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\"> <i class=\"fas fa-trash-alt\"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                            
                        </table>
                        {{ links | raw}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>

{% endblock %}




{% block script %}
    {{ parent() }}

{% endblock %}", "models/index.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\models\\index.html");
    }
}
