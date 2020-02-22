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

/* rendez-vous/ajouter-rendezvous.html.twig */
class __TwigTemplate_a19cac0f4548335edf5af18e2876f29bcf479910654ccc0f0820c90b8e4e3bc8 extends Template
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
        $this->parent = $this->loadTemplate("default.html.twig", "rendez-vous/ajouter-rendezvous.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Prise de rendez-vous
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12 col-lg-6 mt-2 border p-2 rounded\">
                <div class=\"p-3 bg-secondary border text-white\">
                    <h1>Rendez-vous en ligne</h1>
                </div>
                <form action=\"?routing=addRdv\" method=\"POST\">
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <label class=\"input-group-text\" for=\"inputGroupSelect01\">Patient</label>
                        </div>
                        <select class=\"custom-select\" id=\"inputGroupSelect01\" name=\"idnom\">
                            <option selected>Choisir...</option>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["patients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 22
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "lastname", [], "any", false, false, false, 22), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Date</label>
                        <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"daterdv\">
                        <label for=\"exampleInputPassword1\">Heure</label>
                        <input type=\"time\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"heurerdv\" min=\"09:00\"
                            max=\"16:00\" step=\"1800\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">confirmez</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "rendez-vous/ajouter-rendezvous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  80 => 22,  76 => 21,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"default.html.twig\" %}

{% block title %}
    Prise de rendez-vous
{% endblock %}
{% block content %}
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12 col-lg-6 mt-2 border p-2 rounded\">
                <div class=\"p-3 bg-secondary border text-white\">
                    <h1>Rendez-vous en ligne</h1>
                </div>
                <form action=\"?routing=addRdv\" method=\"POST\">
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <label class=\"input-group-text\" for=\"inputGroupSelect01\">Patient</label>
                        </div>
                        <select class=\"custom-select\" id=\"inputGroupSelect01\" name=\"idnom\">
                            <option selected>Choisir...</option>
                            {% for patient in patients %}
                                <option value=\"{{patient.id}}\">{{patient.lastname}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Date</label>
                        <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"daterdv\">
                        <label for=\"exampleInputPassword1\">Heure</label>
                        <input type=\"time\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"heurerdv\" min=\"09:00\"
                            max=\"16:00\" step=\"1800\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">confirmez</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "rendez-vous/ajouter-rendezvous.html.twig", "C:\\wamp64\\www\\medical-twig-php-sql\\templates\\rendez-vous\\ajouter-rendezvous.html.twig");
    }
}