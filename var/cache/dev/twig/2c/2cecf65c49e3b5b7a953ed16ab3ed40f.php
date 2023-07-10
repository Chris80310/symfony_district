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

/* accueil/search.html.twig */
class __TwigTemplate_fc3fcd4a5acddd180d2dff15987e5278 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/search.html.twig", 1);
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
        echo "
\t<div class=\"container col-xs-7 col-12 div_cat mt-5 py-5\">

\t\t<div class=\" liste_cat\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"float text-center\">
\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message_ok"]) {
            // line 13
            echo "\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["message_ok"], "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_ok'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message_ko"]) {
            // line 16
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["message_ko"], "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_ko'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</div>

\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plats"]) {
            // line 21
            echo "
\t\t\t\t\t<div class=\"m-auto my-5\" id=\"\" style=\"width: 18rem; background-color:purple; border-radius:10px; padding:10px\">
\t\t\t\t\t\t<span class=\"d-block text-center text-white mb-3\">
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_plat", ["id" => twig_get_attribute($this->env, $this->source, $context["plats"], "libelle", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" style=\"text-decoration:none\">
\t\t\t\t\t\t\t\t<!-- affichage des noms de catégories -->
\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center my-2\">
\t\t\t\t\t\t\t\t\t<strong>\"";
            // line 28
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plats"], "libelle", [], "any", false, false, false, 28)), "html", null, true);
            echo "\"</strong>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<!-- partie inférieure avec l'image -->
\t\t\t\t\t\t\t\t<img src=\"";
            // line 31
            echo twig_escape_filter($this->env, ("/images_the_district/food/" . twig_get_attribute($this->env, $this->source, $context["plats"], "image", [], "any", false, false, false, 31)), "html", null, true);
            echo "\" alt=\"image\" srcset=\"\" class=\"rounded card-img-top img-fluid\">
\t\t\t\t\t\t\t\t<p class=\"my-3\">
\t\t\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plats"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex col-12 m-auto my-3\">
\t\t\t\t\t\t\t\t\t<div class=\"row mx-3\">
\t\t\t\t\t\t\t\t\t\t";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["plats"], "active", [], "any", false, false, false, 37) == 1)) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, $context["plats"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"btn btn-success\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mx-3\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
            echo "\">Retour à l'accueil</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 74
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 76,  164 => 74,  155 => 42,  151 => 40,  145 => 38,  143 => 37,  136 => 33,  131 => 31,  125 => 28,  119 => 25,  113 => 21,  109 => 20,  105 => 18,  96 => 16,  91 => 15,  82 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div class=\"container col-xs-7 col-12 div_cat mt-5 py-5\">

\t\t<div class=\" liste_cat\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"float text-center\">
\t\t\t\t\t{% for message_ok in app.flashes('success') %}
\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">{{ message_ok }}</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% for message_ko in app.flashes('warning') %}
\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">{{ message_ko }}</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

\t\t\t\t{% for plats in plat %}

\t\t\t\t\t<div class=\"m-auto my-5\" id=\"\" style=\"width: 18rem; background-color:purple; border-radius:10px; padding:10px\">
\t\t\t\t\t\t<span class=\"d-block text-center text-white mb-3\">
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"{{path('app_detail_plat', {id: plats.libelle})}}\" style=\"text-decoration:none\">
\t\t\t\t\t\t\t\t<!-- affichage des noms de catégories -->
\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center my-2\">
\t\t\t\t\t\t\t\t\t<strong>\"{{ plats.libelle |upper }}\"</strong>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<!-- partie inférieure avec l'image -->
\t\t\t\t\t\t\t\t<img src=\"{{'/images_the_district/food/' ~ plats.image}}\" alt=\"image\" srcset=\"\" class=\"rounded card-img-top img-fluid\">
\t\t\t\t\t\t\t\t<p class=\"my-3\">
\t\t\t\t\t\t\t\t\t{{plats.description}}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex col-12 m-auto my-3\">
\t\t\t\t\t\t\t\t\t<div class=\"row mx-3\">
\t\t\t\t\t\t\t\t\t\t{% if plats.active == 1 %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('panier_add', {id: plats.id}) }}\" class=\"btn btn-success\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mx-3\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{path('app_accueil')}}\">Retour à l'accueil</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t{# 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-auto my-5\" id=\"\" style=\"width: 18rem; background-color:purple; border-radius:10px; padding:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-block text-center text-white mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ plat.libelle |upper }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{'/images_the_district/food/' ~ plat.image}}\" alt=\"image\" srcset=\"\" class=\"card-img-top img-fluid\" style=\"border-radius:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\"{{ plat.description}}\"</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center my-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{ plat.prix / 100 }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&euro;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if plat.active > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('panier_add', {id: plat.id}) }}\" class=\"btn btn-success\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">Temporairement en rupture de stock</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "accueil/search.html.twig", "/home/test/Bureau/symfony_district/templates/accueil/search.html.twig");
    }
}
