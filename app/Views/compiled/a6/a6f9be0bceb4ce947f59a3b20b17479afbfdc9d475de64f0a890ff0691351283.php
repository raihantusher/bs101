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

/* models/create.html */
class __TwigTemplate_36928fffa8d161a80b858fb3543cc592b756222418f0dda802fe29a133d12537 extends Template
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
        $this->parent = $this->loadTemplate("layouts/sbadmin/sbadmin2.html", "models/create.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " New ";
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
        echo "
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-6\">
              <div class=\"card shadow mb-4\">
                  <div class=\"card-header py-3\">
                      <h6 class=\"m-0 font-weight-bold text-primary\">Create New Model</h6>
                  </div>
                  <div class=\"card-body\">
                     
                    ";
        // line 25
        $macros["forms"] = $this->loadTemplate("macros/forms.html", "models/create.html", 25)->unwrap();
        // line 26
        echo "                    
                  
                     
                   <form method=\"post\" action='";
        // line 29
        echo twig_escape_filter($this->env, ((($context["model"] ?? null)) ? (call_user_func_array($this->env->getFunction('site_url')->getCallable(), [("models/update/" . twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "id", [], "any", false, false, false, 29))])) : (call_user_func_array($this->env->getFunction('site_url')->getCallable(), ["models/store"]))), "html", null, true);
        echo "'>
                        ";
        // line 30
        echo ($context["csrf"] ?? null);
        echo "
                        ";
        // line 31
        echo twig_call_macro($macros["forms"], "macro_input", ["model_name", twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", [], "any", false, false, false, 31), "Model Name"], 31, $context, $this->getSourceContext());
        echo "
                        ";
        // line 32
        echo twig_call_macro($macros["forms"], "macro_input", ["namespace", twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "class", [], "any", false, false, false, 32), "Class"], 32, $context, $this->getSourceContext());
        echo "
                         <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                     </form>
                  </div>
              </div>
        </div>
    </div>
</div>

";
    }

    // line 46
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "models/create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 47,  120 => 46,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  89 => 26,  87 => 25,  75 => 15,  71 => 14,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/sbadmin/sbadmin2.html\" %}

{% block title %} New {{ parent() }}{% endblock %}

{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
{% endblock %}



{% block pagecontent %}

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-6\">
              <div class=\"card shadow mb-4\">
                  <div class=\"card-header py-3\">
                      <h6 class=\"m-0 font-weight-bold text-primary\">Create New Model</h6>
                  </div>
                  <div class=\"card-body\">
                     
                    {% import \"macros/forms.html\" as forms %}
                    
                  
                     
                   <form method=\"post\" action='{{ model ? site_url(\"models/update/#{model.id}\") : site_url(\"models/store\")  }}'>
                        {{ csrf|raw }}
                        {{ forms.input(\"model_name\", model.name , \"Model Name\") }}
                        {{ forms.input(\"namespace\",  model.class , \"Class\") }}
                         <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                     </form>
                  </div>
              </div>
        </div>
    </div>
</div>

{% endblock %}




{% block script %}
    {{ parent() }}

{% endblock %}", "models/create.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\models\\create.html");
    }
}
