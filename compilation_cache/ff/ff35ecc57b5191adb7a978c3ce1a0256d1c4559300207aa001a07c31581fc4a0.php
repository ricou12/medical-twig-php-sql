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

/* patients/list-patients.html.twig */
class __TwigTemplate_b653a36cccf46e139406aea38fb3b1593a9c71dabaa3be92219ce35aef513a3a extends Template
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
        $this->parent = $this->loadTemplate("default.html.twig", "patients/list-patients.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Liste patients
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-8 mt-2 border p-2 bg--dark text-white rounded\">
            <div class=\"p-2 border text-center rounded\">
                <h1>Liste des Patients</h1>
            </div>
            <div class=\"p-3 mt-3 border-bottom\">
                <form action=\"?routing=rechercher-un-patient\" class=\"form-inline my-2 my-lg-0\" method=\"POST\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\"
                        name=\"nomPatient\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" name=\"searchPatient\"
                        type=\"submit\">Search</button>
                </form>
            </div>
            <ul class=\"list-group p-3\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["listpatients"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 23
            echo "                    <li class=\"list-group-item d-flex flex-wrap justify-content-between bg--dark\">
                        <form action=\"index.php?routing=patient\" method=\"POST\">
                             <button type=\"submit\" class=\"btn btn-dark text-white\" name=\"id\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "lastname", [], "any", false, false, false, 25), "html", null, true);
            echo "</button>
                        </form>
                        <div class=\"d-flex align-items-center\">
                            <form action=\"index.php?routing=modifier-un-patient\" method=\"POST\">
                                <button type=\"submit\" class=\"btn btn-primary mr-3\" name=\"id\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">Modifier</button>
                            </form>
                            <form action=\"index.php?routing=supprimer-un-patient\" method=\"POST\">
                                <button type=\"submit\" class=\"btn btn-outline-danger\" name=\"delPatientById\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\"><img style=\"filter:invert(100%);\" src=\"img/trash.png\"</button>
                            </form>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </ul>
        </div>
    </div>
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-6 d-flex justify-content-center p-2\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["listpatients"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "                        <li class=\"page-item\">
                            <form action=\"index.php?routing=liste-des-patients\" method=\"POST\">
                                <button type=\"submit\" class=\"page-link bg-dark text-white\" name=\"pageIndex\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</button>
                            </form>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </ul>
            </nav>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "patients/list-patients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  128 => 47,  124 => 45,  120 => 44,  111 => 37,  100 => 32,  94 => 29,  85 => 25,  81 => 23,  77 => 22,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"default.html.twig\" %}

{% block title %}
    Liste patients
{% endblock %}
{% block content %}
<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-8 mt-2 border p-2 bg--dark text-white rounded\">
            <div class=\"p-2 border text-center rounded\">
                <h1>Liste des Patients</h1>
            </div>
            <div class=\"p-3 mt-3 border-bottom\">
                <form action=\"?routing=rechercher-un-patient\" class=\"form-inline my-2 my-lg-0\" method=\"POST\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\"
                        name=\"nomPatient\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" name=\"searchPatient\"
                        type=\"submit\">Search</button>
                </form>
            </div>
            <ul class=\"list-group p-3\">
                {% for patient in listpatients[1] %}
                    <li class=\"list-group-item d-flex flex-wrap justify-content-between bg--dark\">
                        <form action=\"index.php?routing=patient\" method=\"POST\">
                             <button type=\"submit\" class=\"btn btn-dark text-white\" name=\"id\" value=\"{{patient.id}}\">{{patient.lastname}}</button>
                        </form>
                        <div class=\"d-flex align-items-center\">
                            <form action=\"index.php?routing=modifier-un-patient\" method=\"POST\">
                                <button type=\"submit\" class=\"btn btn-primary mr-3\" name=\"id\" value=\"{{patient.id}}\">Modifier</button>
                            </form>
                            <form action=\"index.php?routing=supprimer-un-patient\" method=\"POST\">
                                <button type=\"submit\" class=\"btn btn-outline-danger\" name=\"delPatientById\" value=\"{{patient.id}}\"><img style=\"filter:invert(100%);\" src=\"img/trash.png\"</button>
                            </form>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-6 d-flex justify-content-center p-2\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    {% for i in 1..listpatients[0] %}
                        <li class=\"page-item\">
                            <form action=\"index.php?routing=liste-des-patients\" method=\"POST\">
                                <button type=\"submit\" class=\"page-link bg-dark text-white\" name=\"pageIndex\" value=\"{{ i }}\">{{ i }}</button>
                            </form>
                        </li>
                    {% endfor %}
                </ul>
            </nav>
        </div>
    </div>
</div>
{% endblock %}", "patients/list-patients.html.twig", "C:\\wamp64\\www\\medical-twig-php-sql\\templates\\patients\\list-patients.html.twig");
    }
}
