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
        <div class=\"col-12 col-lg-6 mt-2 border p-2 rounded\">
            <!-- Search form -->
            <div class=\"p-2\">
                <form action=\"?routing=listPts\" class=\"form-inline my-2 my-lg-0\" method=\"POST\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\"
                        name=\"nomPatient\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" name=\"searchPatient\"
                        type=\"submit\">Search</button>
                </form>
            </div>
            <div class=\"p-3 bg-secondary border text-white\">
                <h1>Liste des Patients</h1>
            </div>
            <ul class=\"list-group\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["listpatients"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 24
            echo "                    <li class=\"list-group-item d-flex flex-wrap justify-content-between\">
                        <a href=\"index.php?routing=patient&amp;id=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "lastname", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
                        <div>
                            <a href=\"index.php?routing=updatePt&amp;id=";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"btn btn-primary mr-3\">Modifier</a>
                            <a href=\"index.php?routing=listPts&amp;delPatientById=";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\"><img src=\"img/trash.png\"
                                    alt=\"Corbeille\"></a>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </ul>
        </div>
    </div>
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-6 d-flex justify-content-center p-2\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["listpatients"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 41
            echo "                        <li class=\"page-item\"><a class=\"page-link\"
                            href=\"index.php?routing=listPts&amp;pageIndex=";
            // line 42
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return array (  133 => 44,  123 => 42,  120 => 41,  116 => 40,  107 => 33,  96 => 28,  92 => 27,  85 => 25,  82 => 24,  78 => 23,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  36 => 1,);
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
        <div class=\"col-12 col-lg-6 mt-2 border p-2 rounded\">
            <!-- Search form -->
            <div class=\"p-2\">
                <form action=\"?routing=listPts\" class=\"form-inline my-2 my-lg-0\" method=\"POST\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\"
                        name=\"nomPatient\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" name=\"searchPatient\"
                        type=\"submit\">Search</button>
                </form>
            </div>
            <div class=\"p-3 bg-secondary border text-white\">
                <h1>Liste des Patients</h1>
            </div>
            <ul class=\"list-group\">
                {% for patient in listpatients[1] %}
                    <li class=\"list-group-item d-flex flex-wrap justify-content-between\">
                        <a href=\"index.php?routing=patient&amp;id={{patient.id}}\">{{patient.lastname}}</a>
                        <div>
                            <a href=\"index.php?routing=updatePt&amp;id={{patient.id}}\" class=\"btn btn-primary mr-3\">Modifier</a>
                            <a href=\"index.php?routing=listPts&amp;delPatientById={{patient.id}}\"><img src=\"img/trash.png\"
                                    alt=\"Corbeille\"></a>
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
                        <li class=\"page-item\"><a class=\"page-link\"
                            href=\"index.php?routing=listPts&amp;pageIndex={{ i }}\">{{ i }}</a></li>
                    {% endfor %}
                </ul>
            </nav>
        </div>
    </div>
</div>
{% endblock %}", "patients/list-patients.html.twig", "C:\\wamp64New\\www\\medical-twig-php-sql\\templates\\patients\\list-patients.html.twig");
    }
}
