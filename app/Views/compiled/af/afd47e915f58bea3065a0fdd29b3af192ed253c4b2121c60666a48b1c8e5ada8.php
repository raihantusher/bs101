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

/* layouts/sbadmin/components/footer.html */
class __TwigTemplate_91de5610980639d7389ad97d9e7530e9a648937a915c9d45598ff6081ec95a98 extends Template
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
        echo "<footer class=\"sticky-footer bg-white\">
    <div class=\"container my-auto\">
      <div class=\"copyright text-center my-auto\">
        <span>Copyright &copy; Your Website 2020</span>
      </div>
    </div>
  </footer>";
    }

    public function getTemplateName()
    {
        return "layouts/sbadmin/components/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"sticky-footer bg-white\">
    <div class=\"container my-auto\">
      <div class=\"copyright text-center my-auto\">
        <span>Copyright &copy; Your Website 2020</span>
      </div>
    </div>
  </footer>", "layouts/sbadmin/components/footer.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\layouts\\sbadmin\\components\\footer.html");
    }
}
