<?php

/* UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_7e26efb14882a801ce6d0dc1153d78bf7464cf871a0f9ecf779213f389581338 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

        // line 1
        echo " 
<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li> 
                
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\"><i class=\"icon-info-sign icon-white\"></i>Mes informations</a>
            </li>
            <br/>
            <li>
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
        echo "\"><i class=\"icon-edit icon-white\"></i>Editer mes informations</a>
            </li>
            <br/>
            <li>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\"><i class=\"icon-wrench icon-white\"></i>Changer mon mot de passe</a>
            </li>
            <br/>
            <li>
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("factures");
        echo "\"><i class=\" icon-folder-open icon-white\"></i>Mes factures</a>
            </li>
            <br/>      
            <li>
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"><i class=\"icon-off icon-white\"></i>Deconnexion</a>
            </li>
        </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  57 => 18,  50 => 14,  43 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(" 
<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li> 
                
                <a href=\"{{ path('fos_user_profile_show') }}\"><i class=\"icon-info-sign icon-white\"></i>Mes informations</a>
            </li>
            <br/>
            <li>
                <a href=\"{{ path('fos_user_profile_edit') }}\"><i class=\"icon-edit icon-white\"></i>Editer mes informations</a>
            </li>
            <br/>
            <li>
            <a href=\"{{ path('fos_user_change_password') }}\"><i class=\"icon-wrench icon-white\"></i>Changer mon mot de passe</a>
            </li>
            <br/>
            <li>
                <a href=\"{{ path('factures') }}\"><i class=\" icon-folder-open icon-white\"></i>Mes factures</a>
            </li>
            <br/>      
            <li>
                <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"icon-off icon-white\"></i>Deconnexion</a>
            </li>
        </ul>
</div>", "UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Utilisateurs/UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateursConnecte.html.twig");
    }
}
