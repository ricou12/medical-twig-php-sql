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

/* list-patients.html.twig */
class __TwigTemplate_bfc37b7c99ef3611a418764114ef21a10d19cb4c7bcbbf472159582e16855291 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'listPatient' => [$this, 'block_listPatient'],
            'pagination' => [$this, 'block_pagination'],
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
        // line 5
        $this->loadTemplate("includes/head.html.twig", "list-patients.html.twig", 5)->display($context);
        // line 6
        echo "     
        <body>
           
            ";
        // line 9
        $this->loadTemplate("includes/navbar.html.twig", "list-patients.html.twig", 9)->display($context);
        // line 10
        echo "            
            <div class=\"container\">
               ";
        // line 12
        $this->displayBlock('listPatient', $context, $blocks);
        // line 13
        echo "               ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 14
        echo "            </div>
            
            ";
        // line 16
        $this->loadTemplate("includes/script.html.twig", "list-patients.html.twig", 16)->display($context);
        // line 17
        echo "        </body>";
    }

    // line 12
    public function block_listPatient($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
    public function block_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "list-patients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  73 => 12,  69 => 17,  67 => 16,  63 => 14,  60 => 13,  58 => 12,  54 => 10,  52 => 9,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "list-patients.html.twig", "C:\\wamp64\\www\\exoSQL\\templates\\list-patients.html.twig");
    }
}
