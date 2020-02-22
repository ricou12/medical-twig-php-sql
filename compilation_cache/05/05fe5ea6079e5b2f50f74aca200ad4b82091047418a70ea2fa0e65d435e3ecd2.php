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
        echo "        <main >
         ";
        // line 25
        echo "            <div class=\"fond\"></div>
            ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "        </main>
        ";
        // line 29
        $this->loadTemplate("includes/script.html.twig", "default.html.twig", 29)->display($context);
        // line 30
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
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
        return array (  84 => 27,  80 => 26,  74 => 5,  69 => 30,  67 => 29,  64 => 28,  62 => 26,  59 => 25,  56 => 10,  54 => 9,  46 => 5,  44 => 4,  39 => 1,);
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
        <main >
         {# /* <style>
        video#bgvid {
            position: fixed; right: 0; bottom: 0;
            min-width: 100%; min-height: 100%;
            width:auto; height: auto; z-index: -100;
            background-size: cover;
        }
    </style>

    
        <video autoplay=\"true\" loop muted  id=\"bgvid\">
            <source src=\"img/video.webm\" type=\"video/webm\">
            <source src=\"img/video.mp4\" type=\"video/mp4\">
        </video> */ #}
            <div class=\"fond\"></div>
            {% block content %}
            {% endblock %}
        </main>
        {% include 'includes/script.html.twig' %}
    </body>
</html>", "default.html.twig", "C:\\wamp64\\www\\medical-twig-php-sql\\templates\\default.html.twig");
    }
}
