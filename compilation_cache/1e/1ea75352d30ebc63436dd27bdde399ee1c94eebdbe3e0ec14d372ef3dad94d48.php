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
class __TwigTemplate_944bf6fd2e60a77a998d29df594033f108d397bd49fb6ffe7b9cc042a1bc0231 extends Template
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
            <a class=\"nav-item nav-link active\" href=\"ajout-patient.php\">Ajouter un patient<span class=\"sr-only\">(current)</span></a>
            <a class=\"nav-item nav-link\" href=\"index.php?p=patients\">Liste des patients</a>
            <a class=\"nav-item nav-link\" href=\"ajout-rendezvous.php\">Prise de rdv en ligne</a>
            <a class=\"nav-item nav-link\" href=\"liste-rendezvous.php\">Voir tous les rdv</a>
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
        return new Source("", "includes/navbar.html.twig", "C:\\wamp64\\www\\exoSQL\\templates\\includes\\navbar.html.twig");
    }
}
