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

/* plat/index.html.twig */
class __TwigTemplate_808adafc4681193f74131dc5794e99ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Plats
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

\t<div class=\"container col-xs-7 col-12 div_cat mt-5 py-5\">

\t\t<div class=\"col-xs-4 col-4 text-center mx-auto my-5 cat_count rounded p-3\">
\t\t\t<h1>Nos plats (";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 12, $this->source); })())), "html", null, true);
        echo ")</h1>
\t\t</div>

\t\t<div class=\"d-flex flex-wrap liste_cat\">
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 17
            echo "
\t\t\t\t<div class=\"card liste-cat m-auto my-3\" id=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t<span class=\"d-block text-center\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_plat", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" style=\"text-decoration:none\">
\t\t\t\t\t\t\t<!-- affichage des noms de catégories -->
\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">
\t\t\t\t\t\t\t\t<strong>\"";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 24)), "html", null, true);
            echo "\"</strong>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<!-- partie inférieure avec l'image -->
\t\t\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_escape_filter($this->env, ("/images_the_district/food/" . twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 27)), "html", null, true);
            echo "\" alt=\"image\" srcset=\"\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t<path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\tDetails
\t\t\t\t\t\t</a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "plat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 36,  125 => 27,  119 => 24,  113 => 21,  107 => 17,  103 => 16,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plats
{% endblock %}

{% block body %}


\t<div class=\"container col-xs-7 col-12 div_cat mt-5 py-5\">

\t\t<div class=\"col-xs-4 col-4 text-center mx-auto my-5 cat_count rounded p-3\">
\t\t\t<h1>Nos plats ({{ plats | length }})</h1>
\t\t</div>

\t\t<div class=\"d-flex flex-wrap liste_cat\">
\t\t\t{% for plat in plats %}

\t\t\t\t<div class=\"card liste-cat m-auto my-3\" id=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t<span class=\"d-block text-center\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"{{path('app_detail_plat', {id: plat.id})}}\" style=\"text-decoration:none\">
\t\t\t\t\t\t\t<!-- affichage des noms de catégories -->
\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">
\t\t\t\t\t\t\t\t<strong>\"{{ plat.libelle |upper }}\"</strong>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<!-- partie inférieure avec l'image -->
\t\t\t\t\t\t\t<img src=\"{{'/images_the_district/food/' ~ plat.image}}\" alt=\"image\" srcset=\"\" class=\"card-img-top img-fluid\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t<path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\tDetails
\t\t\t\t\t\t</a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "plat/index.html.twig", "/home/test/Bureau/Symfony/monProjet/templates/plat/index.html.twig");
    }
}
