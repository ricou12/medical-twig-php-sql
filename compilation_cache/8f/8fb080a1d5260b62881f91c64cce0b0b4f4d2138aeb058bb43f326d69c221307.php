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

/* patients/profil-patient.html.twig */
class __TwigTemplate_8aaf8288808a695ab96d59bb5bc74e21d2c6b83d15c8cf134c000d59031dfb59 extends Template
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
        $this->parent = $this->loadTemplate("default.html.twig", "patients/profil-patient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Profil
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-8 mt-2 border p-2 rounded bg--dark text-white\">
            <div class=\"p-3 bg-secondary border\">
                <h1>Profil du patient</h1>
            </div>
            <ul class=\"list-group my-2\">
                <li class=\"list-group-item bg--dark\">Nom : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["patient"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "lastname", [], "any", false, false, false, 15), "html", null, true);
        echo "
                </li>
                </a>
                </li>
                <li class=\"list-group-item bg--dark\">Prénom : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["patient"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "firstname", [], "any", false, false, false, 19), "html", null, true);
        echo "
                </li>
                </a>
                </li>
                <li class=\"list-group-item bg--dark\">Date de naissance : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["patient"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "birthdate", [], "any", false, false, false, 23), "html", null, true);
        echo "
                </li>
                </a></li>
                <li class=\"list-group-item bg--dark\">Télephone : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["patient"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "phone", [], "any", false, false, false, 26), "html", null, true);
        echo "</li></a></li>
                <li class=\"list-group-item bg--dark\">Email : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["patient"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "mail", [], "any", false, false, false, 27), "html", null, true);
        echo "</li></a></li>
            </ul>
            <div class=\"p-3 bg-warning border text-dark w-50\">
                <h2>Mes rendez-vous</h2>
            </div>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["patient"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 33
            echo "                <ul class=\"list-group my-2\">
                    <li class=\"list-group-item bg--dark\">date du Rdv : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "dateRdv", [], "any", false, false, false, 34), "html", null, true);
            echo "</li></a></li>
                    <li class=\"list-group-item bg--dark\">heure du Rdv : ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "heureRdv", [], "any", false, false, false, 35), "html", null, true);
            echo "</li></a></li>
                </ul>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "patients/profil-patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 38,  112 => 35,  108 => 34,  105 => 33,  101 => 32,  93 => 27,  89 => 26,  83 => 23,  76 => 19,  69 => 15,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"default.html.twig\" %}

{% block title %}
    Profil
{% endblock %}

{% block content %}
<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-12 col-lg-8 mt-2 border p-2 rounded bg--dark text-white\">
            <div class=\"p-3 bg-secondary border\">
                <h1>Profil du patient</h1>
            </div>
            <ul class=\"list-group my-2\">
                <li class=\"list-group-item bg--dark\">Nom : {{patient[0].lastname}}
                </li>
                </a>
                </li>
                <li class=\"list-group-item bg--dark\">Prénom : {{patient[0].firstname}}
                </li>
                </a>
                </li>
                <li class=\"list-group-item bg--dark\">Date de naissance : {{patient[0].birthdate}}
                </li>
                </a></li>
                <li class=\"list-group-item bg--dark\">Télephone : {{patient[0].phone}}</li></a></li>
                <li class=\"list-group-item bg--dark\">Email : {{patient[0].mail}}</li></a></li>
            </ul>
            <div class=\"p-3 bg-warning border text-dark w-50\">
                <h2>Mes rendez-vous</h2>
            </div>
            {% for info in patient %}
                <ul class=\"list-group my-2\">
                    <li class=\"list-group-item bg--dark\">date du Rdv : {{info.dateRdv}}</li></a></li>
                    <li class=\"list-group-item bg--dark\">heure du Rdv : {{info.heureRdv}}</li></a></li>
                </ul>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "patients/profil-patient.html.twig", "C:\\wamp64New\\www\\medical-twig-php-sql\\templates\\patients\\profil-patient.html.twig");
    }
}
