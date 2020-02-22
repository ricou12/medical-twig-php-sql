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
class __TwigTemplate_b29f83c5708e684aa100aa4108a8b3f0630ffa9233225fb78e997c4e059e7f0c extends Template
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
    <table class=\"table table-hover table-dark\">
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
                    <form action=\"index.php?routing=delRdv\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-outline-danger\" name=\"idDeleteRdv\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "idrdv", [], "any", false, false, false, 25), "html", null, true);
            echo "\"><img style=\"filter:invert(100%);\" src=\"img/trash.png\"
                            alt=\"Corbeille\"></button>
                    </form>
                </th>
                <th>
                    <form action=\"index.php?routing=modifier-un-rdv\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-outline-success mr-3\" name=\"idRdv\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "idrdv", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "dateHour", [], "any", false, false, false, 31), "html", null, true);
            echo "</button>
                    </form>
                </th>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "lastname", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "firstname", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "birthdate", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "phone", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rdv"], "mail", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return array (  127 => 41,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  94 => 31,  85 => 25,  80 => 22,  76 => 21,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"default.html.twig\" %}

{% block title %}
    Rendez-vous
{% endblock %}
{% block content %}
<div class=\"container p-2\">
    <table class=\"table table-hover table-dark\">
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
                    <form action=\"index.php?routing=delRdv\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-outline-danger\" name=\"idDeleteRdv\" value=\"{{ rdv.idrdv }}\"><img style=\"filter:invert(100%);\" src=\"img/trash.png\"
                            alt=\"Corbeille\"></button>
                    </form>
                </th>
                <th>
                    <form action=\"index.php?routing=modifier-un-rdv\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-outline-success mr-3\" name=\"idRdv\" value=\"{{ rdv.idrdv }}\">{{ rdv.dateHour }}</button>
                    </form>
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
{% endblock %}", "rendez-vous/list-rendezvous.html.twig", "C:\\wamp64\\www\\medical-twig-php-sql\\templates\\rendez-vous\\list-rendezvous.html.twig");
    }
}
