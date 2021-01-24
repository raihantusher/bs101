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

/* admin/index.html */
class __TwigTemplate_5d0e384646d5124656409b2a93390785adfdedb3d37eca2a0230c32b71b8aae1 extends Template
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
        $this->parent = $this->loadTemplate("layouts/sbadmin/sbadmin2.html", "admin/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Index";
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

    // line 11
    public function block_pagecontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <h1>Index</h1>
    <p class=\"important\">
        Welcome to my awesome homepage.
    </p>
";
    }

    public function getTemplateName()
    {
        return "admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  69 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/sbadmin/sbadmin2.html\" %}

{% block title %}Index{% endblock %}

{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
{% endblock %}
{% block pagecontent %}
    <h1>Index</h1>
    <p class=\"important\">
        Welcome to my awesome homepage.
    </p>
{% endblock %}", "admin/index.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\admin\\index.html");
    }
}
