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

/* includes/navbar.html.twig */
class __TwigTemplate_9409fd84f36072b1c0163bc3a9585101669635bd45d71a44376ea795e7e914c0 extends Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"index.php\">  
        <img src=\"img/logo.png\" alt=\"\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
        <div class=\"navbar-nav\">
            <a class=\"nav-item nav-link active\" href=\"?routing=listPts\">Patients<span class=\"sr-only\">(current)</span></a>
            <a class=\"nav-item nav-link\" href=\"?routing=newPt\">Ajout patient</a>
            <a class=\"nav-item nav-link\" href=\"?routing=newPtRdv\">Ajout patient/RDV</a>
            <a class=\"nav-item nav-link\" href=\"?routing=rdv\">RDV</a>
            <a class=\"nav-item nav-link\" href=\"?routing=addRdv\">Prise de rendez-vous</a>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "includes/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"index.php\">  
        <img src=\"img/logo.png\" alt=\"\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
        <div class=\"navbar-nav\">
            <a class=\"nav-item nav-link active\" href=\"?routing=listPts\">Patients<span class=\"sr-only\">(current)</span></a>
            <a class=\"nav-item nav-link\" href=\"?routing=newPt\">Ajout patient</a>
            <a class=\"nav-item nav-link\" href=\"?routing=newPtRdv\">Ajout patient/RDV</a>
            <a class=\"nav-item nav-link\" href=\"?routing=rdv\">RDV</a>
            <a class=\"nav-item nav-link\" href=\"?routing=addRdv\">Prise de rendez-vous</a>
        </div>
    </div>
</nav>", "includes/navbar.html.twig", "C:\\wamp64New\\www\\medical-twig-php-sql\\templates\\includes\\navbar.html.twig");
    }
}