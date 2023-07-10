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

/* accueil/mentions.html.twig */
class __TwigTemplate_f3c45ba76e5c7e5b3a37b920d4090028 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/mentions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/mentions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/mentions.html.twig", 1);
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

\t<body class=\"bg1 text-white\">

\t\t<div class=\"container text-center txt col-7 div_cat mt-5 py-5\">

\t\t\t<h1 class=\"my-5\">Mentions légales</h1>

\t\t\t<h3 class=\"my-5\">Société éditrice du site</h3>

\t\t\t<p>
\t\t\t\tThe District
\t\t\t\t\t\t\t\t            SAS au capital de 30.600 euros
\t\t\t\t\t\t\t\t            RCS Nanterre n° 828 758 607 00018
\t\t\t\t\t\t\t\t            N° TVA : FR 60 828758607
\t\t\t\t\t\t\t\t            Code NAF : 4791A
\t\t\t\t\t\t\t\t            Siège social :
\t\t\t\t\t\t\t\t            240 avenue d'Argenteuil,92600 Asnières sur Seine
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Tél : 06 20 16 30 84
\t\t\t\t\t\t\t\t            Mail : contact@lesnovateurs.com
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">Directeur de publication</h3>

\t\t\t<p>
\t\t\t\tAlexandre BOUGEROL
\t\t\t\t\t\t\t\tMail : info@district.fr
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">Hébergeur du site</h3>

\t\t\t<p>
\t\t\t\tThe District
\t\t\t\t\t\t\t\t            SAS au capital de 10.069.020 euros
\t\t\t\t\t\t\t\t            Siège social :
\t\t\t\t\t\t\t\t            2 rue Kellermann, 59100 Roubaix
\t\t\t\t\t\t\t\t            Tél : 1007
\t\t\t\t\t\t\t\t            Mail : contact@district.com
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">Gestion des cookies et politique de confidentialité</h3>

\t\t\t<p>Cliquez ici pour accéder à la politique de confidentialité</p>

\t\t\t<h3 class=\"my-5\">Conditions générales de vente</h3>

\t\t\t<p>

\t\t\t\t<a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_confid");
        echo "\">Cliquez ici pour accéder aux CGV</a>
\t\t\t\t<br><br>
\t\t\t\t<a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contactez-nous</a>
\t\t\t\t<br><br></p>
\t\t\t<p>
\t\t\t\t© 2023. Tous droits réservés The District.
\t\t\t</p>

\t\t</div>

\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 56,  120 => 54,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


\t<body class=\"bg1 text-white\">

\t\t<div class=\"container text-center txt col-7 div_cat mt-5 py-5\">

\t\t\t<h1 class=\"my-5\">Mentions légales</h1>

\t\t\t<h3 class=\"my-5\">Société éditrice du site</h3>

\t\t\t<p>
\t\t\t\tThe District
\t\t\t\t\t\t\t\t            SAS au capital de 30.600 euros
\t\t\t\t\t\t\t\t            RCS Nanterre n° 828 758 607 00018
\t\t\t\t\t\t\t\t            N° TVA : FR 60 828758607
\t\t\t\t\t\t\t\t            Code NAF : 4791A
\t\t\t\t\t\t\t\t            Siège social :
\t\t\t\t\t\t\t\t            240 avenue d'Argenteuil,92600 Asnières sur Seine
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Tél : 06 20 16 30 84
\t\t\t\t\t\t\t\t            Mail : contact@lesnovateurs.com
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">Directeur de publication</h3>

\t\t\t<p>
\t\t\t\tAlexandre BOUGEROL
\t\t\t\t\t\t\t\tMail : info@district.fr
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">Hébergeur du site</h3>

\t\t\t<p>
\t\t\t\tThe District
\t\t\t\t\t\t\t\t            SAS au capital de 10.069.020 euros
\t\t\t\t\t\t\t\t            Siège social :
\t\t\t\t\t\t\t\t            2 rue Kellermann, 59100 Roubaix
\t\t\t\t\t\t\t\t            Tél : 1007
\t\t\t\t\t\t\t\t            Mail : contact@district.com
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">Gestion des cookies et politique de confidentialité</h3>

\t\t\t<p>Cliquez ici pour accéder à la politique de confidentialité</p>

\t\t\t<h3 class=\"my-5\">Conditions générales de vente</h3>

\t\t\t<p>

\t\t\t\t<a href=\"{{ path ('app_confid')}}\">Cliquez ici pour accéder aux CGV</a>
\t\t\t\t<br><br>
\t\t\t\t<a href=\"{{ path ('app_contact')}}\">Contactez-nous</a>
\t\t\t\t<br><br></p>
\t\t\t<p>
\t\t\t\t© 2023. Tous droits réservés The District.
\t\t\t</p>

\t\t</div>

\t</body>
{% endblock %}
", "accueil/mentions.html.twig", "/home/test/Bureau/symfony_district/templates/accueil/mentions.html.twig");
    }
}
