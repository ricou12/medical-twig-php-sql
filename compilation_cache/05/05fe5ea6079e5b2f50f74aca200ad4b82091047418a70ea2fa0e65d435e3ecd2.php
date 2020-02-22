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

/* default.html.twig */
class __TwigTemplate_1a5a005fa97b52819cb4497a50c7edc47b6db4db75c9dde1ddd55eeb8ec1fd0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        ";
        // line 4
        $this->loadTemplate("includes/head.html.twig", "default.html.twig", 4)->display($context);
        // line 5
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
    </head>
    <body>
        ";
        // line 9
        $this->loadTemplate("includes/navbar.html.twig", "default.html.twig", 9)->display($context);
        // line 10
        echo "        <main>
            ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "        </main>
        ";
        // line 14
        $this->loadTemplate("includes/script.html.twig", "default.html.twig", 14)->display($context);
        // line 15
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            ";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  77 => 11,  71 => 5,  66 => 15,  64 => 14,  61 => 13,  59 => 11,  56 => 10,  54 => 9,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        {% include 'includes/head.html.twig'%}
        <title>{% block title %}{% endblock %}</title>
        
    </head>
    <body>
        {% include 'includes/navbar.html.twig' %}
        <main>
            {% block content %}
            {% endblock %}
        </main>
        {% include 'includes/script.html.twig' %}
    </body>
</html>", "default.html.twig", "C:\\wamp64\\www\\medical-twig-php-sql\\templates\\default.html.twig");
    }
}
