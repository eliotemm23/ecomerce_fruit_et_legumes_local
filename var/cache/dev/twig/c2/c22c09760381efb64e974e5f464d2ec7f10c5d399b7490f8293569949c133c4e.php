<?php

/* ::modulesUsed/navigationAdmin.html.twig */
class __TwigTemplate_a3d1b437465cb706ae8694c4dc834942cb3ab895c37c3913fe755ae5fe64747f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigationAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigationAdmin.html.twig"));

        // line 1
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_index");
        echo "\">Produits</a>
                 
            </li>
            <li>
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_index");
        echo "\">Catégories produits</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUtilisateurs");
        echo "\">Clients</a>
            </li>
            <li>
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCommande");
        echo "\">Commandes</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages_index");
        echo "\">Pages</a>
            </li>
        </ul>
    </div>    
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  60 => 21,  54 => 18,  43 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('adminProduits_index') }}\">Produits</a>
                 
            </li>
            <li>
                <a href=\"{{ path('adminCategories_index') }}\">Catégories produits</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('adminUtilisateurs') }}\">Clients</a>
            </li>
            <li>
                <a href=\"{{ path('adminCommande') }}\">Commandes</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('adminPages_index') }}\">Pages</a>
            </li>
        </ul>
    </div>    
</div>", "::modulesUsed/navigationAdmin.html.twig", "/home/maxime/NetBeansProjects/ecommerce/app/Resources/views/modulesUsed/navigationAdmin.html.twig");
    }
}
