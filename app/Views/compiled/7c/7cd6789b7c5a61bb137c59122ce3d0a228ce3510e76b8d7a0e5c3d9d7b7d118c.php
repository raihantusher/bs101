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

/* layouts/sbadmin/components/success.html */
class __TwigTemplate_24388b3c67db210bf4a29dd079b0b038524f83c1dee1243918d747d0e52359a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"success_message\" >
   
</div>";
    }

    public function getTemplateName()
    {
        return "layouts/sbadmin/components/success.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"success_message\" >
   
</div>", "layouts/sbadmin/components/success.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\layouts\\sbadmin\\components\\success.html");
    }
}
