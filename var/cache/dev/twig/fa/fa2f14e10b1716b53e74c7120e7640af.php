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

/* accueil/confid.html.twig */
class __TwigTemplate_e7cb7d3a46062ebe536cb0cfc355511d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/confid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/confid.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/confid.html.twig", 1);
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

\t\t\t<h1 class=\"my-5\">Politique de confidentialité</h1>
\t\t\t<br>

\t\t\t<p>
\t\t\t\tChez The District, notre mission est d’aider les restaurateurs à augmenter leur chiffre d’affaires,
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            en proposant leurs plats à la vente à emporter, ou en livraison,
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            par l’intermédiaire d’un service de click and collect personnalisé et intuitif.
\t\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t            Si nous nous engageons à créer ainsi une grande communauté alimentaire,
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            nous nous devons de protéger la vie privée des membres de cette communauté The District.
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            Cette protection inclut la protection des données personnelles de tous les visiteurs et utilisateurs du site internet,
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            ainsi que des autres extensions (application mobile, espace restaurateur, espace client).
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            La présente Politique de Confidentialité explique comment The District collecte et utilise vos données personnelles. 
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            En utilisant les services de The District, vous consentez à ce que The District utilise vos données personnelles de la manière décrite dans la présente Politique de Confidentialité.
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            Soyez assuré que The District s’est engagé à collecter et utiliser vos données personnelles de manière responsable, sécurisée et en toute transparence. 
\t\t\t\t\t\t\t\t            Si vous avez le moindre doute, ou une question, contactez-nous à info@The_District.fr.
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">1. Informations que nous collectons sur vous, et les raisons de cette collecte</h3>

\t\t\t<p>
\t\t\t\tSi vous souhaitez obtenir de plus amples informations sur une section particulière, vous pouvez nous contacter.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Lorsque vous rejoignez The District, nous collectons les informations d’enregistrement, afin que nous puissions :
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t                Créer votre compte, et que votre Restaurant apparaisse sur notre plateforme en ligne.
\t\t\t\t\t\t\t\t                Vous identifier lorsque vous vous connectez à votre espace personnalisé Restaurateur.
\t\t\t\t\t\t\t\t                Vous payer des montants dûs relatifs à l’ensemble de vos commandes.
\t\t\t\t\t\t\t\t                Vous tenir informé des modifications et/ou mises à jour de nos services.
\t\t\t\t\t\t\t\t                Vérifier que vous avez les licences et certifications appropriées pour gérer votre Restaurant.
\t\t\t\t\t\t\t\t                Vous faire bénéficier au mieux du système de géolocalisation.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Vous fournir des informations lorsque des transactions sont réalisés en ligne sur votre Restaurant :
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t                Traitement des commandes et facturation
\t\t\t\t\t\t\t\t                Demandes client
\t\t\t\t\t\t\t\t                Actualisation des statuts des commandes
\t\t\t\t\t\t\t\t                Résoudre des problèmes pouvant survenir
\t\t\t\t\t\t\t\t                Etudier, analyser, développer et améliorer nos services
\t\t\t\t\t\t\t\t                Prévenir de toute fraude et autres actes qui pourraient enfreindre la loi, et vous protéger.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Commentaires, axes d’amélioration, et autres informations essentielles
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t                Répondre à vos questions, vos demandes, vos besoins
\t\t\t\t\t\t\t\t                Etudier, analyser, développer et améliorer nos services
\t\t\t\t\t\t\t\t                Informations sur votre activité sur le site The District.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Vous êtes informés que nous utilisons des cookies et technologies similaires afin de mesurer et analyser l’efficacité de nos services, 
\t\t\t\t\t\t\t\t            personnaliser et optimiser notre communication, vous fournir des services géolocalisés.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Nous traitons des informations que vous nous fournissez volontairement, ainsi que des informations que nous collectons de manière automatique, ou que nous pouvons obtenir de sources tierces.
\t\t\t\t\t\t\t\t            La collecte et le traitement de ces informations servent à améliorer quotidiennement nos services, faciliter son utilisation et sa performance.
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">2. Partage des données</h3>

\t\t\t<p>
\t\t\t\tNous nous assurons toujours d’avoir mis en place la sécurité maximale, et le cas échéant les garanties contractuelles appropriées pour protéger vos données personnelles avant de les partager. Nous pouvons partager vos données personnelles avec les destinataires suivants :
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Les clients : ils passent commande, dans le cadre de nos services, auprès de votre Restaurant.
\t\t\t\t\t\t\t\t            Les tiers communicants : tous les tiers qui supportent nos services, comme nos partenaires marketing, nos partenaires de livraison, et toutes sociétés avec lesquelles nous sommes en partenariat pour améliorer nos services.
\t\t\t\t\t\t\t\t            Les organismes d’application de la loi : agence gouvernementale, organismes réglementaires, tribunaux ou autre tiers compétents, nous obligeant à divulguer des informations en vertu de la législation et des réglementations applicables.

\t\t\t\t<h3 class=\"my-5\">3. Traitement des données</h3>

\t\t\t\tNous collections et utilisons vos données personnelles pour la raison principale suivante : s’assurer que les clients commandent en ligne et achètent des produits dans votre Restaurant via notre plateforme de click and collect. Nous pouvons aussi traiter vos données personnelles de manière à servir nos intérêts commerciaux légitimes.
\t\t\t\t<h3 class=\"my-5\">4. Sécurité des données</h3>

\t\t\t\tChez The District, nous accordons une grande importance à la sécurité et la protection de vos données personnelles, notamment contre tout accès non autorisé, tout traitement illégal, destruction, perte. Notre équipe technique met en oeuvre des mesures afin de garantir la sécurité de vos informations.
\t\t\t\t<h3 class=\"my-5\">5. Conservation des données</h3>

\t\t\t\tChez The District, nous conservons l’ensemble de vos données le temps nécessaire pour satisfaire aux finalités décrites dans cette Politique de Confidentialité. Par exemple, toute la période durant laquelle votre Restaurant est référencé et présent sur notre plateforme. Dans le cadre de la tenue de nos dossiers, et le respect de nos obligations légales, nous pouvons être à-même de conserver certains éléments de vos données personnelles pour une période ultérieure à votre désactivation et suppression de compte.
\t\t\t\t<h3 class=\"my-5\">6. Droits relatifs à la protection de vos données</h3>

\t\t\t\tVous êtes en droit de nous contacter afin de nous demander de supprimer vos données personnelles ou de limiter leur traitement. Pour se faire, vous pouvez nous contacter sur : alex@The District.fr.
\t\t\t\t<h3 class=\"my-5\">7. Liens vers d’autres sites</h3>

\t\t\t\tChez The District, nous sommes et serons amenés à réaliser des partenariats stratégiques, des liens d’affiliation avec des annonceurs et autres partenaires de différents secteurs. Nos sites web et espaces personnels peuvent donc contenir des liens vers des sites tiers. Si vous suivez ces liens, sachez qu’The District n’est pas responsable de ces sites, qui ont leurs propres Politiques de confidentialité, et mènent leurs propres politiques commerciales.
\t\t\t\t<h3 class=\"my-5\">8. Mise à jour de cette Politique de Confidentialité</h3>

\t\t\t\tNous pouvons, à tout moment et sans que vous en soyez préalablement informé, mettre à jour cette Politique de Confidentialité, pour plusieurs raisons : modifications légales, techniques, commerciales par exemple. Nous vous encourageons donc à consulter régulièrement cette page afin de vous tenir informé de sa mise à jour, des dernières informations sur notre Politique de Confidentialité.
\t\t\t\t<h3 class=\"my-5\">9. Coordonnées pour nous contacter</h3>

\t\t\t\tPour toute question, demande d’informations supplémentaires, ou préoccupation concernant notre Politique de Confidentialité ou nos services, vous pouvez nous contacter sur : info@The District.fr.
\t\t\t\t<br>
\t\t\t\t<a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contactez-nous</a>
\t\t\t\t<br><br>
\t\t\t\t© 2023. Tous droits réservés The District.
\t\t\t\t<br>
\t\t\t\t<a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentions");
        echo "\">Mentions légales</a>
\t\t\t</p>
\t\t</div>

\t</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/confid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 106,  168 => 102,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<body class=\"bg1 text-white\">

\t\t<div class=\"container text-center txt col-7 div_cat mt-5 py-5\">

\t\t\t<h1 class=\"my-5\">Politique de confidentialité</h1>
\t\t\t<br>

\t\t\t<p>
\t\t\t\tChez The District, notre mission est d’aider les restaurateurs à augmenter leur chiffre d’affaires,
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            en proposant leurs plats à la vente à emporter, ou en livraison,
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            par l’intermédiaire d’un service de click and collect personnalisé et intuitif.
\t\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t            Si nous nous engageons à créer ainsi une grande communauté alimentaire,
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            nous nous devons de protéger la vie privée des membres de cette communauté The District.
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            Cette protection inclut la protection des données personnelles de tous les visiteurs et utilisateurs du site internet,
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            ainsi que des autres extensions (application mobile, espace restaurateur, espace client).
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            La présente Politique de Confidentialité explique comment The District collecte et utilise vos données personnelles. 
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            En utilisant les services de The District, vous consentez à ce que The District utilise vos données personnelles de la manière décrite dans la présente Politique de Confidentialité.
\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t            Soyez assuré que The District s’est engagé à collecter et utiliser vos données personnelles de manière responsable, sécurisée et en toute transparence. 
\t\t\t\t\t\t\t\t            Si vous avez le moindre doute, ou une question, contactez-nous à info@The_District.fr.
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">1. Informations que nous collectons sur vous, et les raisons de cette collecte</h3>

\t\t\t<p>
\t\t\t\tSi vous souhaitez obtenir de plus amples informations sur une section particulière, vous pouvez nous contacter.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Lorsque vous rejoignez The District, nous collectons les informations d’enregistrement, afin que nous puissions :
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t                Créer votre compte, et que votre Restaurant apparaisse sur notre plateforme en ligne.
\t\t\t\t\t\t\t\t                Vous identifier lorsque vous vous connectez à votre espace personnalisé Restaurateur.
\t\t\t\t\t\t\t\t                Vous payer des montants dûs relatifs à l’ensemble de vos commandes.
\t\t\t\t\t\t\t\t                Vous tenir informé des modifications et/ou mises à jour de nos services.
\t\t\t\t\t\t\t\t                Vérifier que vous avez les licences et certifications appropriées pour gérer votre Restaurant.
\t\t\t\t\t\t\t\t                Vous faire bénéficier au mieux du système de géolocalisation.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Vous fournir des informations lorsque des transactions sont réalisés en ligne sur votre Restaurant :
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t                Traitement des commandes et facturation
\t\t\t\t\t\t\t\t                Demandes client
\t\t\t\t\t\t\t\t                Actualisation des statuts des commandes
\t\t\t\t\t\t\t\t                Résoudre des problèmes pouvant survenir
\t\t\t\t\t\t\t\t                Etudier, analyser, développer et améliorer nos services
\t\t\t\t\t\t\t\t                Prévenir de toute fraude et autres actes qui pourraient enfreindre la loi, et vous protéger.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Commentaires, axes d’amélioration, et autres informations essentielles
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t                Répondre à vos questions, vos demandes, vos besoins
\t\t\t\t\t\t\t\t                Etudier, analyser, développer et améliorer nos services
\t\t\t\t\t\t\t\t                Informations sur votre activité sur le site The District.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Vous êtes informés que nous utilisons des cookies et technologies similaires afin de mesurer et analyser l’efficacité de nos services, 
\t\t\t\t\t\t\t\t            personnaliser et optimiser notre communication, vous fournir des services géolocalisés.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Nous traitons des informations que vous nous fournissez volontairement, ainsi que des informations que nous collectons de manière automatique, ou que nous pouvons obtenir de sources tierces.
\t\t\t\t\t\t\t\t            La collecte et le traitement de ces informations servent à améliorer quotidiennement nos services, faciliter son utilisation et sa performance.
\t\t\t</p>

\t\t\t<h3 class=\"my-5\">2. Partage des données</h3>

\t\t\t<p>
\t\t\t\tNous nous assurons toujours d’avoir mis en place la sécurité maximale, et le cas échéant les garanties contractuelles appropriées pour protéger vos données personnelles avant de les partager. Nous pouvons partager vos données personnelles avec les destinataires suivants :
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t            Les clients : ils passent commande, dans le cadre de nos services, auprès de votre Restaurant.
\t\t\t\t\t\t\t\t            Les tiers communicants : tous les tiers qui supportent nos services, comme nos partenaires marketing, nos partenaires de livraison, et toutes sociétés avec lesquelles nous sommes en partenariat pour améliorer nos services.
\t\t\t\t\t\t\t\t            Les organismes d’application de la loi : agence gouvernementale, organismes réglementaires, tribunaux ou autre tiers compétents, nous obligeant à divulguer des informations en vertu de la législation et des réglementations applicables.

\t\t\t\t<h3 class=\"my-5\">3. Traitement des données</h3>

\t\t\t\tNous collections et utilisons vos données personnelles pour la raison principale suivante : s’assurer que les clients commandent en ligne et achètent des produits dans votre Restaurant via notre plateforme de click and collect. Nous pouvons aussi traiter vos données personnelles de manière à servir nos intérêts commerciaux légitimes.
\t\t\t\t<h3 class=\"my-5\">4. Sécurité des données</h3>

\t\t\t\tChez The District, nous accordons une grande importance à la sécurité et la protection de vos données personnelles, notamment contre tout accès non autorisé, tout traitement illégal, destruction, perte. Notre équipe technique met en oeuvre des mesures afin de garantir la sécurité de vos informations.
\t\t\t\t<h3 class=\"my-5\">5. Conservation des données</h3>

\t\t\t\tChez The District, nous conservons l’ensemble de vos données le temps nécessaire pour satisfaire aux finalités décrites dans cette Politique de Confidentialité. Par exemple, toute la période durant laquelle votre Restaurant est référencé et présent sur notre plateforme. Dans le cadre de la tenue de nos dossiers, et le respect de nos obligations légales, nous pouvons être à-même de conserver certains éléments de vos données personnelles pour une période ultérieure à votre désactivation et suppression de compte.
\t\t\t\t<h3 class=\"my-5\">6. Droits relatifs à la protection de vos données</h3>

\t\t\t\tVous êtes en droit de nous contacter afin de nous demander de supprimer vos données personnelles ou de limiter leur traitement. Pour se faire, vous pouvez nous contacter sur : alex@The District.fr.
\t\t\t\t<h3 class=\"my-5\">7. Liens vers d’autres sites</h3>

\t\t\t\tChez The District, nous sommes et serons amenés à réaliser des partenariats stratégiques, des liens d’affiliation avec des annonceurs et autres partenaires de différents secteurs. Nos sites web et espaces personnels peuvent donc contenir des liens vers des sites tiers. Si vous suivez ces liens, sachez qu’The District n’est pas responsable de ces sites, qui ont leurs propres Politiques de confidentialité, et mènent leurs propres politiques commerciales.
\t\t\t\t<h3 class=\"my-5\">8. Mise à jour de cette Politique de Confidentialité</h3>

\t\t\t\tNous pouvons, à tout moment et sans que vous en soyez préalablement informé, mettre à jour cette Politique de Confidentialité, pour plusieurs raisons : modifications légales, techniques, commerciales par exemple. Nous vous encourageons donc à consulter régulièrement cette page afin de vous tenir informé de sa mise à jour, des dernières informations sur notre Politique de Confidentialité.
\t\t\t\t<h3 class=\"my-5\">9. Coordonnées pour nous contacter</h3>

\t\t\t\tPour toute question, demande d’informations supplémentaires, ou préoccupation concernant notre Politique de Confidentialité ou nos services, vous pouvez nous contacter sur : info@The District.fr.
\t\t\t\t<br>
\t\t\t\t<a href=\"{{ path ('app_contact')}}\">Contactez-nous</a>
\t\t\t\t<br><br>
\t\t\t\t© 2023. Tous droits réservés The District.
\t\t\t\t<br>
\t\t\t\t<a href=\"{{ path ('app_mentions')}}\">Mentions légales</a>
\t\t\t</p>
\t\t</div>

\t</body>
</html>{% endblock %}
", "accueil/confid.html.twig", "/home/test/Bureau/symfony_district/templates/accueil/confid.html.twig");
    }
}
