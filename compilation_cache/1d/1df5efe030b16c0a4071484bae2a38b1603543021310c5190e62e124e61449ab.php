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

/* home.html.twig */
class __TwigTemplate_8e1936800a487b8cdb75e3bbfaff890005a24b27974c1ff9728ddb8dae1521af extends Template
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
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
     ";
        // line 4
        $this->loadTemplate("includes/head.html.twig", "home.html.twig", 4)->display($context);
        // line 5
        echo "    <body>
    ";
        // line 6
        $this->loadTemplate("includes/navbar.html.twig", "home.html.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"container-fluid p-0\">
            <img src=\"img/fond.png\" alt=\"\">
        </div>
        ";
        // line 10
        $this->loadTemplate("includes/script.html.twig", "home.html.twig", 10)->display($context);
        // line 11
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  54 => 10,  49 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "C:\\wamp64\\www\\exoSQL\\templates\\home.html.twig");
    }
}
