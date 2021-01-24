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

/* layouts/sbadmin/sbadmin2.html */
class __TwigTemplate_28389f08de24b3be228ff25cb6c2ad312e0a051d828b66e8bc0fb0bf50d11db5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'pagecontent' => [$this, 'block_pagecontent'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "
</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    ";
        // line 31
        $this->loadTemplate("layouts/sbadmin/components/nav_sidebar.html", "layouts/sbadmin/sbadmin2.html", 31)->display($context);
        // line 32
        echo "    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        ";
        // line 41
        $this->loadTemplate("layouts/sbadmin/components/nav_topbar.html", "layouts/sbadmin/sbadmin2.html", 41)->display($context);
        // line 42
        echo "        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
          ";
        // line 46
        $this->loadTemplate("layouts/sbadmin/components/success.html", "layouts/sbadmin/sbadmin2.html", 46)->display($context);
        // line 47
        echo "
            ";
        // line 48
        $this->displayBlock('pagecontent', $context, $blocks);
        // line 51
        echo "        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      ";
        // line 58
        $this->loadTemplate("layouts/sbadmin/components/footer.html", "layouts/sbadmin/sbadmin2.html", 58)->display($context);
        // line 59
        echo "      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Logout Modal-->
  ";
        // line 73
        $this->loadTemplate("layouts/sbadmin/components/modal_logout.html", "layouts/sbadmin/sbadmin2.html", 73)->display($context);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('script', $context, $blocks);
        // line 94
        echo "
</body>

</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- Custom fonts for this template-->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

        <!-- Custom styles for this template-->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/css/sb-admin-2.min.css\" rel=\"stylesheet\">
    ";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "SB_Admin";
    }

    // line 48
    public function block_pagecontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                
            ";
    }

    // line 75
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "  <!-- Bootstrap core JavaScript-->
  <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/vendor/jquery/jquery.min.js\"></script>
  <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/vendor/jquery-easing/jquery.easing.min.js\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/js/sb-admin-2.min.js\"></script>

  <script>
    ";
        // line 87
        if (($context["success"] ?? null)) {
            // line 88
            echo "        \$('#success_message').html(\"<div class='alert alert-success text-center' role='alert' style='font-size: 15px;'>";
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "</div>\");
       
        setTimeout(function(){  \$('#success_message').slideUp(3000); }, 3000);
    ";
        }
        // line 92
        echo "  </script>
";
    }

    public function getTemplateName()
    {
        return "layouts/sbadmin/sbadmin2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 92,  209 => 88,  207 => 87,  201 => 84,  195 => 81,  189 => 78,  185 => 77,  182 => 76,  178 => 75,  173 => 49,  169 => 48,  162 => 13,  156 => 20,  149 => 16,  143 => 13,  135 => 7,  131 => 6,  123 => 94,  121 => 75,  118 => 74,  116 => 73,  100 => 59,  98 => 58,  89 => 51,  87 => 48,  84 => 47,  82 => 46,  76 => 42,  74 => 41,  63 => 32,  61 => 31,  50 => 22,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>
    {% block head %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>{% block title%}SB_Admin{% endblock %}</title>

        <!-- Custom fonts for this template-->
        <link href=\"{{base_url }}/assets/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

        <!-- Custom styles for this template-->
        <link href=\"{{base_url }}/assets/css/sb-admin-2.min.css\" rel=\"stylesheet\">
    {% endblock %}

</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    {% include \"layouts/sbadmin/components/nav_sidebar.html\" %}
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        {% include \"layouts/sbadmin/components/nav_topbar.html\" %}
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
          {% include \"layouts/sbadmin/components/success.html\" %}

            {% block pagecontent %}
                
            {% endblock %}
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      {% include \"layouts/sbadmin/components/footer.html\" %}
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Logout Modal-->
  {% include \"layouts/sbadmin/components/modal_logout.html\" %}

{% block script %}
  <!-- Bootstrap core JavaScript-->
  <script src=\"{{base_url }}/assets/vendor/jquery/jquery.min.js\"></script>
  <script src=\"{{base_url }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"{{base_url }}/assets/vendor/jquery-easing/jquery.easing.min.js\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"{{base_url }}/assets/js/sb-admin-2.min.js\"></script>

  <script>
    {% if success %}
        \$('#success_message').html(\"<div class='alert alert-success text-center' role='alert' style='font-size: 15px;'>{{success}}</div>\");
       
        setTimeout(function(){  \$('#success_message').slideUp(3000); }, 3000);
    {% endif %}
  </script>
{% endblock %}

</body>

</html>
", "layouts/sbadmin/sbadmin2.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\layouts\\sbadmin\\sbadmin2.html");
    }
}
