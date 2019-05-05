<?php

/* EcommerceEcommerceBundle:Default:SwiftLayout/validationCommande.html.twig */
class __TwigTemplate_d6f052605f248cb80f2c6731366333ef1405e4cb7735b0cc6303d4a473692a9d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:SwiftLayout/validationCommande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:SwiftLayout/validationCommande.html.twig"));

        // line 1
        echo "<h4>Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 1, $this->source); })()), "username", array()), "html", null, true);
        echo "
<br />
Votre commande a été bien validé.
Vous pouvez accèder à votre facture sur votre espace client.
<br /><br />
<p>L'équipe de La Fraicheur des 4 saisons vous remerci pour votre commande.
Nous vous invitons à nous suivre sur notre page <a href=\"https://www.facebook.com/groups/1548017428567320/\" title=\"Vous ne le regretterez pas !\" target=\"_blank\">Facebook</a> !!!!</p>
</h4>
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://www.saladexpress.ca/images/made/images/generic/fruit-legumes-coeur_400_400.jpg"), "html", null, true);
        echo "\" alt=\"fruit-legumes.png\"/>

<h1>Nous vous servirons toujours avec Amour!!!
<br />
Cordialement :)
</h1>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:SwiftLayout/validationCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4>Bonjour {{ utilisateur.username }}
<br />
Votre commande a été bien validé.
Vous pouvez accèder à votre facture sur votre espace client.
<br /><br />
<p>L'équipe de La Fraicheur des 4 saisons vous remerci pour votre commande.
Nous vous invitons à nous suivre sur notre page <a href=\"https://www.facebook.com/groups/1548017428567320/\" title=\"Vous ne le regretterez pas !\" target=\"_blank\">Facebook</a> !!!!</p>
</h4>
<img src=\"{{ asset('http://www.saladexpress.ca/images/made/images/generic/fruit-legumes-coeur_400_400.jpg') }}\" alt=\"fruit-legumes.png\"/>

<h1>Nous vous servirons toujours avec Amour!!!
<br />
Cordialement :)
</h1>", "EcommerceEcommerceBundle:Default:SwiftLayout/validationCommande.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/SwiftLayout/validationCommande.html.twig");
    }
}
