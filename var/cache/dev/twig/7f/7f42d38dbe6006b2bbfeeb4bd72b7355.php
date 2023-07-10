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

/* detail_plat/detail_plat.html.twig */
class __TwigTemplate_f02009e7a0aec772f5721cee59fcf7a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detail_plat/detail_plat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detail_plat/detail_plat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detail_plat/detail_plat.html.twig", 1);
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

        echo "Detail_plat
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
        echo "\t<div class=\"container col-xs-7 col-12 div_cat mt-5 py-5\">

\t\t<div class=\"d-flex flex-wrap liste_cat\">
\t\t\t<div class=\"m-auto my-5\" id=\"\" style=\"width: 18rem; background-color:purple; border-radius:10px; padding:10px\">
\t\t\t\t<span class=\"d-block text-center text-white mb-3\">

\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t<strong>\"
\t\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 15, $this->source); })()), "libelle", [], "any", false, false, false, 15)), "html", null, true);
        echo "
\t\t\t\t\t\t\t\"</strong>
\t\t\t\t\t</h5>
\t\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, ("/images_the_district/food/" . twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18)), "html", null, true);
        echo "\" alt=\"image\" srcset=\"\" class=\"card-img-top img-fluid\" style=\"border-radius:10px;\">

\t\t\t\t\t<h5 class=\"text-center mt-3\">
\t\t\t\t\t\t<strong>\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        echo "\"</strong>
\t\t\t\t\t</h5>
\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t<strong>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 24, $this->source); })()), "prix", [], "any", false, false, false, 24), "html", null, true);
        echo "
\t\t\t\t\t\t\t&euro;
\t\t\t\t\t\t</strong>
\t\t\t\t\t</h5>
\t\t\t\t\t";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 28, $this->source); })()), "active", [], "any", false, false, false, 28) > 0)) {
            // line 29
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn_cart\">Ajouter au panier</a>
\t\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t\t<p class=\"text-danger\">Temporairement en rupture de stock</p>
\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "detail_plat/detail_plat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 33,  132 => 31,  126 => 29,  124 => 28,  117 => 24,  111 => 21,  105 => 18,  99 => 15,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Detail_plat
{% endblock %}

{% block body %}
\t<div class=\"container col-xs-7 col-12 div_cat mt-5 py-5\">

\t\t<div class=\"d-flex flex-wrap liste_cat\">
\t\t\t<div class=\"m-auto my-5\" id=\"\" style=\"width: 18rem; background-color:purple; border-radius:10px; padding:10px\">
\t\t\t\t<span class=\"d-block text-center text-white mb-3\">

\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t<strong>\"
\t\t\t\t\t\t\t{{ plat.libelle |upper }}
\t\t\t\t\t\t\t\"</strong>
\t\t\t\t\t</h5>
\t\t\t\t\t<img src=\"{{'/images_the_district/food/' ~ plat.image}}\" alt=\"image\" srcset=\"\" class=\"card-img-top img-fluid\" style=\"border-radius:10px;\">

\t\t\t\t\t<h5 class=\"text-center mt-3\">
\t\t\t\t\t\t<strong>\"{{ plat.description}}\"</strong>
\t\t\t\t\t</h5>
\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t<strong>{{ plat.prix}}
\t\t\t\t\t\t\t&euro;
\t\t\t\t\t\t</strong>
\t\t\t\t\t</h5>
\t\t\t\t\t{% if plat.active > 0 %}
\t\t\t\t\t\t<a href=\"{{ path('panier_add', {id: plat.id}) }}\" class=\"btn btn_cart\">Ajouter au panier</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p class=\"text-danger\">Temporairement en rupture de stock</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "detail_plat/detail_plat.html.twig", "/home/test/Bureau/symfony_district/templates/detail_plat/detail_plat.html.twig");
    }
}
