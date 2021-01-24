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

/* layouts/sbadmin/components/nav_sidebar.html */
class __TwigTemplate_45e13403b4e792fef2c64a9b7ae8fa2b612ea0bcc7063c9d7d4db1e079313aed extends Template
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
        echo "<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

    <!-- Sidebar - Brand -->
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">
      <div class=\"sidebar-brand-icon rotate-n-15\">
        <i class=\"fas fa-laugh-wink\"></i>
      </div>
      <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class=\"sidebar-divider my-0\">

    <!-- Nav Item - Dashboard -->
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">
        <i class=\"fas fa-fw fa-tachometer-alt\"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class=\"sidebar-divider\">

    <!-- Heading -->
    <div class=\"sidebar-heading\">
      Default Modules
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class=\"nav-item\">
      <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
        <i class=\"fas fa-user\"></i>
        <span>Users</span>
      </a>
      <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
        <div class=\"bg-white py-2 collapse-inner rounded\">
          <h6 class=\"collapse-header\">User Components:</h6>
          <a class=\"collapse-item\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), ["users"]), "html", null, true);
        echo "\">Users</a>
          <a class=\"collapse-item\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), ["roles"]), "html", null, true);
        echo "\">Roles</a>
          <a class=\"collapse-item\" href=\"cards.html\">Roles Permissions</a>
        </div>
      </div>
    </li>

    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), ["models"]), "html", null, true);
        echo "\">
        <i class=\"fas fa-database\"></i>
        <span>Models</span></a>
    </li>

    <!-- Divider -->
    <hr class=\"sidebar-divider\">

  

   

    <!-- Sidebar Toggler (Sidebar) -->
    <div class=\"text-center d-none d-md-inline\">
      <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

  </ul>";
    }

    public function getTemplateName()
    {
        return "layouts/sbadmin/components/nav_sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 46,  86 => 39,  82 => 38,  57 => 16,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

    <!-- Sidebar - Brand -->
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{base_url}}\">
      <div class=\"sidebar-brand-icon rotate-n-15\">
        <i class=\"fas fa-laugh-wink\"></i>
      </div>
      <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class=\"sidebar-divider my-0\">

    <!-- Nav Item - Dashboard -->
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"{{base_url}}\">
        <i class=\"fas fa-fw fa-tachometer-alt\"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class=\"sidebar-divider\">

    <!-- Heading -->
    <div class=\"sidebar-heading\">
      Default Modules
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class=\"nav-item\">
      <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
        <i class=\"fas fa-user\"></i>
        <span>Users</span>
      </a>
      <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
        <div class=\"bg-white py-2 collapse-inner rounded\">
          <h6 class=\"collapse-header\">User Components:</h6>
          <a class=\"collapse-item\" href=\"{{ site_url(\"users\") }}\">Users</a>
          <a class=\"collapse-item\" href=\"{{ site_url(\"roles\") }}\">Roles</a>
          <a class=\"collapse-item\" href=\"cards.html\">Roles Permissions</a>
        </div>
      </div>
    </li>

    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"{{ site_url(\"models\") }}\">
        <i class=\"fas fa-database\"></i>
        <span>Models</span></a>
    </li>

    <!-- Divider -->
    <hr class=\"sidebar-divider\">

  

   

    <!-- Sidebar Toggler (Sidebar) -->
    <div class=\"text-center d-none d-md-inline\">
      <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

  </ul>", "layouts/sbadmin/components/nav_sidebar.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\layouts\\sbadmin\\components\\nav_sidebar.html");
    }
}
