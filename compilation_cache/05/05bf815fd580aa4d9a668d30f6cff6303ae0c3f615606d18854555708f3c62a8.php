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

/* patients/ajouter-patient.html.twig */
class __TwigTemplate_7ef09e59a2bfe4a5b0bdc356ecefa4dffebfc25f434ef7dbc889710c7aa50268 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default.html.twig", "patients/ajouter-patient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Ajouter un patient
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-6 mt-2 border p-2 rounded\">
            <div class=\"p-3 bg-secondary border text-white\">
                <h1>Nouveau patient</h1>
            </div>
            <form action=\"index.php?routing=addnewPt\" method=\"POST\">
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"nom\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Prénom</label>
                    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"prenom\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Date de naissance</label>
                    <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"naissance\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Adresse email</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
                        name=\"email\" required>
                    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Téléphone</label>
                    <input type=\"tel\"
                        pattern=\"^((\\+\\d{1,3}(-| )?\\(?\\d\\)?(-| )?\\d{1,5})|(\\(?\\d{2,6}\\)?))(-| )?(\\d{3,4})(-| )?(\\d{4})(( x| ext)\\d{1,5}){0,1}\$\"
                        class=\"form-control\" id=\"exampleInputPassword1\" name=\"tel\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Ajouter ce patient</button>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "patients/ajouter-patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"default.html.twig\" %}

{% block title %}
    Ajouter un patient
{% endblock %}
{% block content %}
<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-6 mt-2 border p-2 rounded\">
            <div class=\"p-3 bg-secondary border text-white\">
                <h1>Nouveau patient</h1>
            </div>
            <form action=\"index.php?routing=addnewPt\" method=\"POST\">
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"nom\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Prénom</label>
                    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"prenom\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Date de naissance</label>
                    <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"naissance\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Adresse email</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\"
                        name=\"email\" required>
                    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Téléphone</label>
                    <input type=\"tel\"
                        pattern=\"^((\\+\\d{1,3}(-| )?\\(?\\d\\)?(-| )?\\d{1,5})|(\\(?\\d{2,6}\\)?))(-| )?(\\d{3,4})(-| )?(\\d{4})(( x| ext)\\d{1,5}){0,1}\$\"
                        class=\"form-control\" id=\"exampleInputPassword1\" name=\"tel\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Ajouter ce patient</button>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "patients/ajouter-patient.html.twig", "C:\\wamp64\\www\\medical-twig-php-sql\\templates\\patients\\ajouter-patient.html.twig");
    }
}
