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

/* macros/forms.html */
class __TwigTemplate_11aba3331a1a1adad30928e74bd3ac63b1b46dc10ad14da2db0bbc5759dc7a24 extends Template
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
        // line 8
        echo "
";
    }

    // line 1
    public function macro_input($__name__ = null, $__value__ = null, $__label__ = null, $__hints__ = null, $__type__ = "text", $__class__ = "form-control", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "hints" => $__hints__,
            "type" => $__type__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <div class=\"form-group\">
        <label >";
            // line 3
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
        <input type=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "  value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null));
            echo "\"  />
        <small  class=\"form-text text-muted\">";
            // line 5
            echo twig_escape_filter($this->env, ($context["hints"] ?? null), "html", null, true);
            echo "</small>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
    public function macro_textarea($__name__ = null, $__value__ = null, $__rows__ = 10, $__cols__ = 40, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "rows" => $__rows__,
            "cols" => $__cols__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 10
            echo "    <textarea name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
            echo "\" cols=\"";
            echo twig_escape_filter($this->env, ($context["cols"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null));
            echo "</textarea>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/forms.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 10,  89 => 9,  77 => 5,  67 => 4,  63 => 3,  60 => 2,  42 => 1,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro input(name, value, label, hints,  type = \"text\", class = \"form-control\") %}
    <div class=\"form-group\">
        <label >{{ label }}</label>
        <input type=\"{{ type }}\" name=\"{{ name }}\" class={{ class }}  value=\"{{ value|e }}\"  />
        <small  class=\"form-text text-muted\">{{ hints }}</small>
    </div>
{% endmacro %}

{% macro textarea(name, value, rows = 10, cols = 40) %}
    <textarea name=\"{{ name }}\" rows=\"{{ rows }}\" cols=\"{{ cols }}\">{{ value|e }}</textarea>
{% endmacro %}", "macros/forms.html", "C:\\xampp\\htdocs\\framework-4.0.4\\app\\Views\\macros\\forms.html");
    }
}
