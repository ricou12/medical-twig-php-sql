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
class __TwigTemplate_cb56375e4e9772bec0a17076708e96195a678cb33e6aed1935f4b7d04f131bbf extends Template
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
        <div class=\"col-12 col-lg-8 mt-2  p-2 rounded bg--dark text-white\">
            <div class=\"p-2  text-center rounded\">
                <h1>Nouveau patient</h1>
            </div>
            <form action=\"index.php?routing=addnewPt\" method=\"POST\" class=\"mt-3 px-5 py-3\">
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
                <div class=\"text-center mb-2\">
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter ce patient</button>
                <div>
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
        <div class=\"col-12 col-lg-8 mt-2  p-2 rounded bg--dark text-white\">
            <div class=\"p-2  text-center rounded\">
                <h1>Nouveau patient</h1>
            </div>
            <form action=\"index.php?routing=addnewPt\" method=\"POST\" class=\"mt-3 px-5 py-3\">
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
                <div class=\"text-center mb-2\">
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter ce patient</button>
                <div>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "patients/ajouter-patient.html.twig", "C:\\wamp64\\www\\medical-twig-php-sql\\templates\\patients\\ajouter-patient.html.twig");
    }
}
