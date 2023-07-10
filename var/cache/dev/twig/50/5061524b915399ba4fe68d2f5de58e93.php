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

/* profil/index.html.twig */
class __TwigTemplate_4e05aa11112cc7d18c3b58a79a808487 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row mt-5\">
\t\t\t<div class=\"col-8 col-sm-8 offset-sm-2\">

\t\t\t\t<div class=\"col-6 col-xs-6 mx-auto my-5 cat_count rounded p-3\">
\t\t\t\t\t<h1>Vos informations :</h1>
\t\t\t\t</div>

\t\t\t\t<table class=\"table table-light table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Telephone</th>
\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t\t\t<th>Code postal</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>Action</th>


\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 34, $this->source); })()), "adresse", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 35, $this->source); })()), "ville", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 36, $this->source); })()), "cp", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 39
        echo "\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success\">Modifier le profil</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success\">Modifier le mdp</a>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<div class=\"col-8 col-xs6 mx-auto my-5 cat_count rounded p-3\">
\t\t\t\t\t<h1>Vos commandes passées :</h1>
\t\t\t\t</div>
\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "commandes", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 53
            echo "\t\t\t\t\t<div class=\"col-xs1\">Plats :</div>
\t\t\t\t\t<div class=\"col-xs3\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 54, $this->source); })()), "libelle", [], "any", false, false, false, 54), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 56,  147 => 54,  144 => 53,  140 => 52,  125 => 39,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row mt-5\">
\t\t\t<div class=\"col-8 col-sm-8 offset-sm-2\">

\t\t\t\t<div class=\"col-6 col-xs-6 mx-auto my-5 cat_count rounded p-3\">
\t\t\t\t\t<h1>Vos informations :</h1>
\t\t\t\t</div>

\t\t\t\t<table class=\"table table-light table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Telephone</th>
\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t\t\t<th>Code postal</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>Action</th>


\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ informations.nom }}</td>
\t\t\t\t\t\t\t<td>{{ informations.prenom }}</td>
\t\t\t\t\t\t\t<td>{{ informations.email }}</td>
\t\t\t\t\t\t\t<td>{{ informations.telephone }}</td>
\t\t\t\t\t\t\t<td>{{ informations.adresse }}</td>
\t\t\t\t\t\t\t<td>{{ informations.ville }}</td>
\t\t\t\t\t\t\t<td>{{ informations.cp }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{# <a href=\"{{ path ('profil_modif', {id: user.co.id}) }}\" class=\"col-4 btn btn-danger\">Modifier</a> #}
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success\">Modifier le profil</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success\">Modifier le mdp</a>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<div class=\"col-8 col-xs6 mx-auto my-5 cat_count rounded p-3\">
\t\t\t\t\t<h1>Vos commandes passées :</h1>
\t\t\t\t</div>
\t\t\t\t{% for commande in app.user.commandes %}
\t\t\t\t\t<div class=\"col-xs1\">Plats :</div>
\t\t\t\t\t<div class=\"col-xs3\">{{ plat.libelle }}</div>
\t\t\t\t{% endfor %}

\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "profil/index.html.twig", "/home/test/Bureau/symfony_district/templates/profil/index.html.twig");
    }
}
