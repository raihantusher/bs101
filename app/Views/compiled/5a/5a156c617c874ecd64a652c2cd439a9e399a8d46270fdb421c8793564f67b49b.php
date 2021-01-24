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

/* users/index.html */
class __TwigTemplate_c296ba67ee1348b4151516aa4ebb7a22687938f3b0ce0edce51bff6024944400 extends Template
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
        $this->parent = $this->loadTemplate("layouts/sbadmin/sbadmin2.html", "users/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Index  ";
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
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 14
    public function block_pagecontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col col-md-6\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Basic Card Example</h6>
                </div>
                
                <div class=\"card-body\">
                    <table class=\"table \">
                        <thead>
                            <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">First</th>
                            <th scope=\"col\">Last</th>
                            <th scope=\"col\">Handle</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <tr>
                            <th scope=\"row\">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>


";
    }

    // line 56
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "users/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 57,  115 => 56,  75 => 15,  71 => 14,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/sbadmin/sbadmin2.html\" %}

{% block title %}Index  {{ parent() }}{% endblock %}

{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
{% endblock %}



{% block pagecontent %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col col-md-6\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Basic Card Example</h6>
                </div>
                
                <div class=\"card-body\">
                    <table class=\"table \">
                        <thead>
                            <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">First</th>
                            <th scope=\"col\">Last</th>
                            <th scope=\"col\">Handle</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <tr>
                            <th scope=\"row\">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>


{% endblock %}




{% block script %}
    {{ parent() }}

{% endblock %}", "users/index.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\users\\index.html");
    }
}
