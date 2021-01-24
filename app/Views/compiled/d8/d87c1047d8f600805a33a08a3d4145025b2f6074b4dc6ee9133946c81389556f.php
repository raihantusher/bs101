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

/* layouts/sbadmin/components/nav_topbar.html */
class __TwigTemplate_8eda726473f6e65b48dbce48f766d0196099e9aedafd5e77182352f2e3087fa7 extends Template
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
        echo "<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

    <!-- Sidebar Toggle (Topbar) -->
    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
      <i class=\"fa fa-bars\"></i>
    </button>

    <!-- Topbar Search -->
    <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
      <div class=\"input-group\">
        <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-primary\" type=\"button\">
            <i class=\"fas fa-search fa-sm\"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class=\"navbar-nav ml-auto\">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class=\"nav-item dropdown no-arrow d-sm-none\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <i class=\"fas fa-search fa-fw\"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
          <form class=\"form-inline mr-auto w-100 navbar-search\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                  <i class=\"fas fa-search fa-sm\"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Nav Item - Alerts -->
      

      <!-- Nav Item - Messages -->
      

      <div class=\"topbar-divider d-none d-sm-block\"></div>

      <!-- Nav Item - User Information -->
      <li class=\"nav-item dropdown no-arrow\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Valerie Luna</span>
          <img class=\"img-profile rounded-circle\" src=\"https://tse2.mm.bing.net/th?id=OIP.FdADUfEOOFm2lB114GY5UQHaHa&pid=Api\">
        </a>
        <!-- Dropdown - User Information -->
        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
          <a class=\"dropdown-item\" href=\"#\">
            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
            Profile
          </a>
          <a class=\"dropdown-item\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), ["setting"]), "html", null, true);
        echo "\">
            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
            Settings
          </a>
          <a class=\"dropdown-item\" href=\"#\">
            <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
            Activity Log
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
            <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>";
    }

    public function getTemplateName()
    {
        return "layouts/sbadmin/components/nav_topbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 63,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

    <!-- Sidebar Toggle (Topbar) -->
    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
      <i class=\"fa fa-bars\"></i>
    </button>

    <!-- Topbar Search -->
    <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
      <div class=\"input-group\">
        <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-primary\" type=\"button\">
            <i class=\"fas fa-search fa-sm\"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class=\"navbar-nav ml-auto\">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class=\"nav-item dropdown no-arrow d-sm-none\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <i class=\"fas fa-search fa-fw\"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
          <form class=\"form-inline mr-auto w-100 navbar-search\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                  <i class=\"fas fa-search fa-sm\"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Nav Item - Alerts -->
      

      <!-- Nav Item - Messages -->
      

      <div class=\"topbar-divider d-none d-sm-block\"></div>

      <!-- Nav Item - User Information -->
      <li class=\"nav-item dropdown no-arrow\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Valerie Luna</span>
          <img class=\"img-profile rounded-circle\" src=\"https://tse2.mm.bing.net/th?id=OIP.FdADUfEOOFm2lB114GY5UQHaHa&pid=Api\">
        </a>
        <!-- Dropdown - User Information -->
        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
          <a class=\"dropdown-item\" href=\"#\">
            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
            Profile
          </a>
          <a class=\"dropdown-item\" href=\"{{ site_url('setting')}}\">
            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
            Settings
          </a>
          <a class=\"dropdown-item\" href=\"#\">
            <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
            Activity Log
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
            <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>", "layouts/sbadmin/components/nav_topbar.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\layouts\\sbadmin\\components\\nav_topbar.html");
    }
}
