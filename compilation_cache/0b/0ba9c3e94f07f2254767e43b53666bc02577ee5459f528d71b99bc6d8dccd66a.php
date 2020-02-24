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
class __TwigTemplate_8aa0381780ef2db428212429bbb07883c4b756b6c9f177a5e59f96bae0a4bad1 extends Template
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
        echo "    ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-8 mt-2 p-2 bg--dark text-white rounded\">
            <div class=\"p-2  text-center rounded\">
                <h1>Liste des Patients</h1>
            </div>
            <div class=\"p-3 mt-3 border-bottom\">
                <form action=\"?routing=rechercher-un-patient\" class=\"form-inline my-2 my-lg-0\" method=\"POST\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["state"] ?? null), "html", null, true);
        echo "\" aria-label=\"Search\"
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
                    <a href=\"index.php?routing=patient&amp;id=";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"btn btn-dark text-white\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "lastname", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
                        <div class=\"d-flex align-items-center\">
                        <a href=\"index.php?routing=modifier-un-patient&amp;id=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"btn btn-primary mr-3\">Modifier</a>
                            <a href=\"index.php?routing=supprimer-un-patient&amp;delPatientById=";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\"><img style=\"filter:invert(100%);\" src=\"img/trash.png\"></a>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </ul>
        </div>
    </div>
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-6 d-flex justify-content-center p-2\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["listpatients"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 39
            echo "                        <li class=\"page-item\">
                            <a href=\"index.php?routing=liste-des-patients&amp;pageIndex=";
            // line 40
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" class=\"page-link bg-dark text-white\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        return array (  137 => 43,  126 => 40,  123 => 39,  119 => 38,  110 => 31,  100 => 27,  96 => 26,  89 => 24,  86 => 23,  82 => 22,  72 => 15,  62 => 7,  58 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"default.html.twig\" %}

{% block title %}
    {{ title }}
{% endblock %}
{% block content %}
<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-8 mt-2 p-2 bg--dark text-white rounded\">
            <div class=\"p-2  text-center rounded\">
                <h1>Liste des Patients</h1>
            </div>
            <div class=\"p-3 mt-3 border-bottom\">
                <form action=\"?routing=rechercher-un-patient\" class=\"form-inline my-2 my-lg-0\" method=\"POST\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"{{ state }}\" aria-label=\"Search\"
                        name=\"nomPatient\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" name=\"searchPatient\"
                        type=\"submit\">Search</button>
                </form>
            </div>
            <ul class=\"list-group p-3\">
                {% for patient in listpatients[1] %}
                    <li class=\"list-group-item d-flex flex-wrap justify-content-between bg--dark\">
                    <a href=\"index.php?routing=patient&amp;id={{patient.id}}\" class=\"btn btn-dark text-white\">{{patient.lastname}}</a>
                        <div class=\"d-flex align-items-center\">
                        <a href=\"index.php?routing=modifier-un-patient&amp;id={{patient.id}}\" class=\"btn btn-primary mr-3\">Modifier</a>
                            <a href=\"index.php?routing=supprimer-un-patient&amp;delPatientById={{patient.id}}\" class=\"btn btn-outline-danger\"><img style=\"filter:invert(100%);\" src=\"img/trash.png\"></a>
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
                            <a href=\"index.php?routing=liste-des-patients&amp;pageIndex={{ i }}\" class=\"page-link bg-dark text-white\">{{ i }}</a>
                        </li>
                    {% endfor %}
                </ul>
            </nav>
        </div>
    </div>
</div>
{% endblock %}", "patients/list-patients.html.twig", "C:\\wamp64New\\www\\medical-twig-php-sql\\templates\\patients\\list-patients.html.twig");
    }
}
