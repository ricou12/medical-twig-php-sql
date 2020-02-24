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

/* rendez-vous/list-rendezvous.html.twig */
class __TwigTemplate_ffd62e0b519202dc410c030fc1236ac0f71a087e5686ad7f45212c41891c9119 extends Template
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
        $this->parent = $this->loadTemplate("default.html.twig", "rendez-vous/list-rendezvous.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Rendez-vous
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container p-2\">
    <table class=\"table table-hover bg--dark text-white\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Rendez-vous</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Date de naissance</th>
                <th scope=\"col\">Téléphone</th>
                <th scope=\"col\">Email</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listrdv"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 22
            echo "            <tr>
                <th scope=\"row\">
                    <a href=\"index.php?routing=delRdv&amp;idDeleteRdv=";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "idrdv", [], "any", false, false, false, 24), "html", null, true);
            echo "\"  class=\"btn btn-outline-danger\"><img style=\"filter:invert(100%);\" src=\"img/trash.png\"
                            alt=\"Corbeille\"></a>
                    ";
            // line 30
            echo "                </th>
                <th>
                    <a href=\"index.php?routing=modifier-un-rdv&amp;idRdv=";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "idrdv", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"btn btn-outline-success mr-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "dateHour", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                    ";
            // line 36
            echo "                </th>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "lastname", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "firstname", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "birthdate", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "phone", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "mail", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "rendez-vous/list-rendezvous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  99 => 36,  93 => 32,  89 => 30,  84 => 24,  80 => 22,  76 => 21,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"default.html.twig\" %}

{% block title %}
    Rendez-vous
{% endblock %}
{% block content %}
<div class=\"container p-2\">
    <table class=\"table table-hover bg--dark text-white\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Rendez-vous</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Date de naissance</th>
                <th scope=\"col\">Téléphone</th>
                <th scope=\"col\">Email</th>
            </tr>
        </thead>
        <tbody>
            {% for rdv in listrdv %}
            <tr>
                <th scope=\"row\">
                    <a href=\"index.php?routing=delRdv&amp;idDeleteRdv={{ rdv.idrdv }}\"  class=\"btn btn-outline-danger\"><img style=\"filter:invert(100%);\" src=\"img/trash.png\"
                            alt=\"Corbeille\"></a>
                    {# <form action=\"index.php?routing=delRdv\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-outline-danger\" name=\"idDeleteRdv\" value=\"{{ rdv.idrdv }}\"><img style=\"filter:invert(100%);\" src=\"img/trash.png\"
                            alt=\"Corbeille\"></button>
                    </form> #}
                </th>
                <th>
                    <a href=\"index.php?routing=modifier-un-rdv&amp;idRdv={{ rdv.idrdv }}\" class=\"btn btn-outline-success mr-3\">{{ rdv.dateHour }}</a>
                    {# <form action=\"index.php?routing=modifier-un-rdv\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-outline-success mr-3\" name=\"idRdv\" value=\"{{ rdv.idrdv }}\">{{ rdv.dateHour }}</button>
                    </form> #}
                </th>
                <td>{{ rdv.lastname }}</td>
                <td>{{ rdv.firstname }}</td>
                <td>{{ rdv.birthdate }}</td>
                <td>{{ rdv.phone }}</td>
                <td>{{ rdv.mail }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}", "rendez-vous/list-rendezvous.html.twig", "C:\\wamp64New\\www\\medical-twig-php-sql\\templates\\rendez-vous\\list-rendezvous.html.twig");
    }
}
