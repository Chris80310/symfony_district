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

/* plat/platParCat.html.twig */
class __TwigTemplate_4417479922b0f489794ecbf7e3949f21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/platParCat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/platParCat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plat/platParCat.html.twig", 1);
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

        echo "Plats_par_catégories
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
        echo "\t<div
\t\tclass=\"container col-xs-7 col-12 div_cat mt-5 py-5\">

\t\t";
        // line 13
        echo "
\t\t<div class=\"d-flex flex-wrap liste_cat\">
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 16
            echo "
\t\t\t\t<div class=\"m-auto my-5\" id=\"\" style=\"width: 18rem; background-color:purple; border-radius:10px; padding:10px\">
\t\t\t\t\t<span class=\"d-block text-center text-white mb-3\">

\t\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t\t<strong>\"
\t\t\t\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 22)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\"</strong>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<img src=\"";
            // line 25
            echo twig_escape_filter($this->env, ("/images_the_district/food/" . twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 25)), "html", null, true);
            echo "\" alt=\"image\" srcset=\"\" class=\"card-img-top img-fluid\" style=\"border-radius:10px;\">

\t\t\t\t\t\t<h5 class=\"text-center mt-3\">
\t\t\t\t\t\t\t<strong>\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "\"</strong>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t\t<strong>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 31), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t&euro;
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["plat"], "active", [], "any", false, false, false, 35) > 0)) {
                // line 36
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\" btn btn_cart\">Ajouter au panier</a>
\t\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t\t<p class=\"text-danger\">Temporairement en rupture de stock</p>
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "plat/platParCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 44,  147 => 40,  143 => 38,  137 => 36,  135 => 35,  128 => 31,  122 => 28,  116 => 25,  110 => 22,  102 => 16,  98 => 15,  94 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plats_par_catégories
{% endblock %}

{% block body %}
\t<div
\t\tclass=\"container col-xs-7 col-12 div_cat mt-5 py-5\">

\t\t{# <div class=\"col-xs-4 col-4 text-center mx-auto my-5 cat_count rounded p-3\">
\t\t\t\t\t\t\t<h1>Nos plats ({{ plats | length }})</h1>
\t\t\t\t\t\t</div> #}

\t\t<div class=\"d-flex flex-wrap liste_cat\">
\t\t\t{% for plat in plats %}

\t\t\t\t<div class=\"m-auto my-5\" id=\"\" style=\"width: 18rem; background-color:purple; border-radius:10px; padding:10px\">
\t\t\t\t\t<span class=\"d-block text-center text-white mb-3\">

\t\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t\t<strong>\"
\t\t\t\t\t\t\t\t{{ plat.libelle |upper }}
\t\t\t\t\t\t\t\t\"</strong>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<img src=\"{{'/images_the_district/food/' ~ plat.image}}\" alt=\"image\" srcset=\"\" class=\"card-img-top img-fluid\" style=\"border-radius:10px;\">

\t\t\t\t\t\t<h5 class=\"text-center mt-3\">
\t\t\t\t\t\t\t<strong>\"{{ plat.description}}\"</strong>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t\t<strong>{{ plat.prix}}
\t\t\t\t\t\t\t\t&euro;
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t{% if plat.active > 0 %}
\t\t\t\t\t\t\t<a href=\"{{ path('panier_add', {id: plat.id}) }}\" class=\" btn btn_cart\">Ajouter au panier</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p class=\"text-danger\">Temporairement en rupture de stock</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</span>
\t\t\t\t</div>

\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "plat/platParCat.html.twig", "/home/test/Bureau/symfony_district/templates/plat/platParCat.html.twig");
    }
}