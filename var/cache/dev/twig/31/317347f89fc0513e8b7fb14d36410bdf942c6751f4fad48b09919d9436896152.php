<?php

/* UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_99632af13c3a91d62aaeda6ada20614e5feb3205a942fb28fad8302cabf655c9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\"><strong><i class=\"icon-check icon-white\"></i>Se connecter</strong></a>

            </li>
            
            
            
                  
            <li >
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\"><strong><i class=\"icon-hand-right icon-white\"></i>S'inscrire</strong></a>
            </li>
        </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('fos_user_security_login') }}\"><strong><i class=\"icon-check icon-white\"></i>Se connecter</strong></a>

            </li>
            
            
            
                  
            <li >
                <a href=\"{{ path('fos_user_registration_register') }}\"><strong><i class=\"icon-hand-right icon-white\"></i>S'inscrire</strong></a>
            </li>
        </ul>
</div>", "UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Utilisateurs/UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateurs.html.twig");
    }
}
