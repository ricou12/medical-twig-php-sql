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

/* patients/modif-patient.html.twig */
class __TwigTemplate_c37d68b5d3e9627f6bd7c259952ecea32934b32c8f0241a3cb45f50f1b849353 extends Template
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
        $this->parent = $this->loadTemplate("default.html.twig", "patients/modif-patient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Modifier infos patient
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-8 mt-3 border p-2 rounded bg--dark text-white\">
            <div class=\"p-3 border\">
                <h1>Modifier les informations du patient.</h1>
            </div>
            <form action=\"?routing=updatePt\" method=\"POST\" class=\"mt-3 p-3\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["updatepatients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 16
            echo "                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "lastname", [], "any", false, false, false, 18), "html", null, true);
            echo "\"
                            name=\"nom\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Prénom</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "firstname", [], "any", false, false, false, 23), "html", null, true);
            echo "\"
                            name=\"prenom\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Date de naissance</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "birthdate", [], "any", false, false, false, 28), "html", null, true);
            echo "\"
                            name=\"date\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Téléphone</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "phone", [], "any", false, false, false, 33), "html", null, true);
            echo "\"
                            name=\"tel\"
                            pattern=\"^((\\+\\d{1,3}(-| )?\\(?\\d\\)?(-| )?\\d{1,5})|(\\(?\\d{2,6}\\)?))(-| )?(\\d{3,4})(-| )?(\\d{4})(( x| ext)\\d{1,5}){0,1}\$\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Email</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "mail", [], "any", false, false, false, 39), "html", null, true);
            echo "\"
                            name=\"mail\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\" name=\"id\"value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">Enregistrer</button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            <form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "patients/modif-patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  116 => 42,  110 => 39,  101 => 33,  93 => 28,  85 => 23,  77 => 18,  73 => 16,  69 => 15,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"default.html.twig\" %}

{% block title %}
    Modifier infos patient
{% endblock %}

{% block content %}
<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-8 mt-3 border p-2 rounded bg--dark text-white\">
            <div class=\"p-3 border\">
                <h1>Modifier les informations du patient.</h1>
            </div>
            <form action=\"?routing=updatePt\" method=\"POST\" class=\"mt-3 p-3\">
                {% for patient in updatepatients %}
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"{{patient.lastname}}\"
                            name=\"nom\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Prénom</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"{{patient.firstname}}\"
                            name=\"prenom\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Date de naissance</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"{{patient.birthdate}}\"
                            name=\"date\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Téléphone</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"{{patient.phone}}\"
                            name=\"tel\"
                            pattern=\"^((\\+\\d{1,3}(-| )?\\(?\\d\\)?(-| )?\\d{1,5})|(\\(?\\d{2,6}\\)?))(-| )?(\\d{3,4})(-| )?(\\d{4})(( x| ext)\\d{1,5}){0,1}\$\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Email</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputPassword1\" value=\"{{patient.mail}}\"
                            name=\"mail\" required>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\" name=\"id\"value=\"{{patient.id}}\">Enregistrer</button>
                {% endfor %}
            <form>
        </div>
    </div>
</div>
{% endblock %}", "patients/modif-patient.html.twig", "C:\\wamp64New\\www\\medical-twig-php-sql\\templates\\patients\\modif-patient.html.twig");
    }
}
