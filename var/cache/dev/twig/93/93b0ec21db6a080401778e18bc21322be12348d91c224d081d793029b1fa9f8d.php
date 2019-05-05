<?php

/* EcommerceEcommerceBundle:Default:panier/modulesUsed/panier.html.twig */
class __TwigTemplate_1be431e708972525d7e9d365cc6a2dbaf9cfa08884b3dbb672833119b6b7c99e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\"><h4>Panier</h4></li>
        <li>
            <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
        echo "\">
                ";
        // line 6
        if (((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 6, $this->source); })()) == 0)) {
            // line 7
            echo "                <strong> Aucun article dans votre panier</strong><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/poussete.png"), "html", null, true);
            echo "\" alt=\"lf4ds\"/> 
                ";
        } elseif ((        // line 8
(isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 8, $this->source); })()) == 1)) {
            // line 9
            echo "                 <strong> 1 article dans votre panier</strong><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/poussete.png"), "html", null, true);
            echo "\" alt=\"lf4ds\"/>
                ";
        } else {
            // line 11
            echo "                 ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 11, $this->source); })()), "html", null, true);
            echo " <strong>articles dans votre panier</strong><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/poussete.png"), "html", null, true);
            echo "\" alt=\"lf4ds\"/>
                ";
        }
        // line 13
        echo "            </a>
        </li>
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:panier/modulesUsed/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  54 => 11,  48 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\"><h4>Panier</h4></li>
        <li>
            <a href=\"{{ path('panier') }}\">
                {% if articles == 0 %}
                <strong> Aucun article dans votre panier</strong><img src=\"{{ asset('img/poussete.png') }}\" alt=\"lf4ds\"/> 
                {% elseif articles == 1 %}
                 <strong> 1 article dans votre panier</strong><img src=\"{{ asset('img/poussete.png') }}\" alt=\"lf4ds\"/>
                {% else %}
                 {{ articles }} <strong>articles dans votre panier</strong><img src=\"{{ asset('img/poussete.png') }}\" alt=\"lf4ds\"/>
                {% endif %}
            </a>
        </li>
    </ul>
</div>", "EcommerceEcommerceBundle:Default:panier/modulesUsed/panier.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/panier/modulesUsed/panier.html.twig");
    }
}
