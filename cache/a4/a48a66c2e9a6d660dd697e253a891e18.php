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

/* index.html */
class __TwigTemplate_b3c9ebcd5cf5b4def2481ba23d9c2b8c extends Template
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
        echo "<h1>Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!</h1>
-----------------------------
";
        // line 3
        if (array_key_exists("foo", $context)) {
            // line 4
            echo "    ...
";
        }
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["foo"] ?? null), "bar", [], "any", true, true, false, 7)) {
            // line 8
            echo "    ...
";
        }
        // line 10
        echo "
";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["foo"] ?? null), "bar", [], "array", true, true, false, 11)) {
            // line 12
            echo "    ...
";
        }
        // line 14
        echo "
";
        // line 15
        if ((array_key_exists("var", $context) && twig_get_attribute($this->env, $this->source, ($context["foo"] ?? null), "method", [0 => ($context["var"] ?? null)], "method", true, true, false, 15))) {
            // line 16
            echo "    ...
";
        }
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  70 => 15,  67 => 14,  63 => 12,  61 => 11,  58 => 10,  54 => 8,  52 => 7,  49 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "C:\\Users\\Max\\TwigPHPNoComposer\\templates\\index.html");
    }
}
