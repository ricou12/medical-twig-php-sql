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

/* rendez-vous/modif-rdv.html.twig */
class __TwigTemplate_7165f9b7e2f604ca6771f33adc1cad4a4298b7b67f03fb95d0eed0964eb53c6d extends Template
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
        $this->parent = $this->loadTemplate("default.html.twig", "rendez-vous/modif-rdv.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Modifier un rendez-vous
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-6 mt-2 border p-2 rounded bg--dark text-white\">
                <div class=\"p-3 border\">
                    <h1>Modifier ce rendez-vous</h1>
                </div>
                <ul class=\"list-group\">
                    <form action=\"?routing=updateRdv\" method=\"POST\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["updaterdv"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 16
            echo "                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Date du rendez-vous</label>
                                <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "dateRdv", [], "any", false, false, false, 19), "html", null, true);
            echo "\" name=\"dateRdv\" required>
                                <label for=\"exampleInputPassword1\">Date du rendez-vous</label>
                                <input type=\"time\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "heureRdv", [], "any", false, false, false, 22), "html", null, true);
            echo "\" name=\"heureRdv\" required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Nom</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "lastname", [], "any", false, false, false, 27), "html", null, true);
            echo "\" name=\"nom\" disabled required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Prénom</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "firstname", [], "any", false, false, false, 32), "html", null, true);
            echo "\" name=\"prenom\" disabled required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Date de naissance</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "birthdate", [], "any", false, false, false, 37), "html", null, true);
            echo "\" name=\"date\" disabled required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Téléphone</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "phone", [], "any", false, false, false, 42), "html", null, true);
            echo "\" name=\"tel\"
                                    pattern=\"^((\\+\\d{1,3}(-| )?\\(?\\d\\)?(-| )?\\d{1,5})|(\\(?\\d{2,6}\\)?))(-| )?(\\d{3,4})(-| )?(\\d{4})(( x| ext)\\d{1,5}){0,1}\$\"
                                    disabled>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "mail", [], "any", false, false, false, 49), "html", null, true);
            echo "\" name=\"mail\" disabled required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\" name=\"IdRdv\"
                                value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "idrdv", [], "any", false, false, false, 52), "html", null, true);
            echo "\">Enregistrer</button>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    <form>
                </ul>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "rendez-vous/modif-rdv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  133 => 52,  127 => 49,  117 => 42,  109 => 37,  101 => 32,  93 => 27,  85 => 22,  79 => 19,  74 => 16,  70 => 15,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"default.html.twig\" %}

{% block title %}
    Modifier un rendez-vous
{% endblock %}
{% block content %}
<div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-6 mt-2 border p-2 rounded bg--dark text-white\">
                <div class=\"p-3 border\">
                    <h1>Modifier ce rendez-vous</h1>
                </div>
                <ul class=\"list-group\">
                    <form action=\"?routing=updateRdv\" method=\"POST\">
                        {% for rdv in updaterdv %}
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Date du rendez-vous</label>
                                <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"{{rdv.dateRdv}}\" name=\"dateRdv\" required>
                                <label for=\"exampleInputPassword1\">Date du rendez-vous</label>
                                <input type=\"time\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"{{rdv.heureRdv}}\" name=\"heureRdv\" required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Nom</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"{{rdv.lastname}}\" name=\"nom\" disabled required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Prénom</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"{{rdv.firstname}}\" name=\"prenom\" disabled required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Date de naissance</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"{{rdv.birthdate}}\" name=\"date\" disabled required>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Téléphone</label>
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"{{rdv.phone}}\" name=\"tel\"
                                    pattern=\"^((\\+\\d{1,3}(-| )?\\(?\\d\\)?(-| )?\\d{1,5})|(\\(?\\d{2,6}\\)?))(-| )?(\\d{3,4})(-| )?(\\d{4})(( x| ext)\\d{1,5}){0,1}\$\"
                                    disabled>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"exampleInputPassword1\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputPassword1\"
                                    value=\"{{rdv.mail}}\" name=\"mail\" disabled required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\" name=\"IdRdv\"
                                value=\"{{rdv.idrdv}}\">Enregistrer</button>
                        {% endfor %}
                    <form>
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}
    ", "rendez-vous/modif-rdv.html.twig", "C:\\wamp64New\\www\\medical-twig-php-sql\\templates\\rendez-vous\\modif-rdv.html.twig");
    }
}
