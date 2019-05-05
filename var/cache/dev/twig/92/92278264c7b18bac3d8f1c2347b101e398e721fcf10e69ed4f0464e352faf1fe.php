<?php

/* EcommerceEcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_760f95baed206c6df470125d944eac2d02ac457e9a94503789b98c5a77a1758c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 3
            echo "    ";
            if (($context["categorie"] == "Légumes")) {
                // line 4
                echo "    <li>   <a class=\"brand\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorieProduits", array("categorie" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chouxbl.png"), "html", null, true);
                echo "\" alt=\"lf4ds\"/><strong><em>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", array()), "html", null, true);
                echo "</em></strong></a></li>
    
    ";
            } else {
                // line 7
                echo "    <li>   <a class=\"brand\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorieProduits", array("categorie" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/orangepluche.png"), "html", null, true);
                echo "\" alt=\"lf4ds\"/><strong><em>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", array()), "html", null, true);
                echo "</em></strong></a></li> 
        
    ";
            }
            // line 10
            echo "    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:categories/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  61 => 10,  50 => 7,  39 => 4,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% for categorie in categories %}
    {% if categorie ==\"Légumes\"  %}
    <li>   <a class=\"brand\" href=\"{{ path('categorieProduits', { 'categorie' : categorie.id }) }}\"><img src=\"{{ asset('img/chouxbl.png') }}\" alt=\"lf4ds\"/><strong><em>{{ categorie.nom }}</em></strong></a></li>
    
    {% else %}
    <li>   <a class=\"brand\" href=\"{{ path('categorieProduits', { 'categorie' : categorie.id }) }}\"><img src=\"{{ asset('img/orangepluche.png') }}\" alt=\"lf4ds\"/><strong><em>{{ categorie.nom }}</em></strong></a></li> 
        
    {% endif %}
    
{% endfor %}


", "EcommerceEcommerceBundle:Default:categories/modulesUsed/menu.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/categories/modulesUsed/menu.html.twig");
    }
}
