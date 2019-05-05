<?php

/* EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_3c4397b66d166ccbf2b67e40507f10df16da3e4d84d20b5cd41dc196d18e4fe4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 3, $this->source); })()), "nom", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 4, $this->source); })()), "description", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "     <br/> <br/>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 11
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig", 11)->display($context);
        // line 12
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceEcommerceBundle:Panier:menu"));
        echo "
            </div>

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                         <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 18, $this->source); })()), "image", array()), "AssetPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 18, $this->source); })()), "image", array()), "name", array()), "html", null, true);
        echo "\" width=\"400\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 22, $this->source); })()), "nom", array()), "html", null, true);
        echo "</h4> 
                        <h5>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 23, $this->source); })()), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
                        <p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 24, $this->source); })()), "description", array()), "html", null, true);
        echo "</p>
                         ";
        // line 25
        if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 25, $this->source); })()), "id", array()), array(), "array", true, true)) {
            // line 26
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 26, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                        <select name=\"qte\" class=\"span1\">
                                         ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                                             <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                                        </select>

                                        <div>
                                            <button class=\"btn btn-primary\">Ajouter au panier</button>
                                        </div>                                        
                                </form>
                                 <div><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("origineproduit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 37, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" ><h4><i class=\"icon-globe icon-white\"></i>Connaitre la provenance</h4></a>
                                </div>
                                        
                          ";
        } else {
            // line 41
            echo "                                <div>
                                    <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
            echo "\" class=\"btn btn-primary\">Le produit est déjà dans votre panier</a>
                                </div>
                                <br/>
                                 <br/>
                                <div><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("origineproduit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 46, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" ><i class=\"icon-globe icon-white\"></i>Connaitre la provenance</a>
                          ";
        }
        // line 48
        echo "                    </div>
                </div>

            </div>    
        </div>
                      <div><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\" class=\"btn btn-primary pull-right\">Retour </a> </div>
       </div>
    </div>                   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 53,  183 => 48,  178 => 46,  171 => 42,  168 => 41,  161 => 37,  153 => 31,  142 => 29,  138 => 28,  132 => 26,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  109 => 18,  99 => 12,  97 => 11,  91 => 7,  82 => 6,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block title %}{{ produit.nom }}{% endblock %}
{% block description %}{{ produit.description }}{% endblock %} 

{% block body %}
     <br/> <br/>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                {% include '::modulesUsed/navigation.html.twig' %}
                {{ render(controller('EcommerceEcommerceBundle:Panier:menu')) }}
            </div>

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                         <img src=\"{{ asset(produit.image.AssetPath) }}\" alt=\"{{ produit.image.name }}\" width=\"400\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>{{ produit.nom }}</h4> 
                        <h5>{{ produit.categorie.nom }}</h5>
                        <p>{{ produit.description }}</p>
                         {% if panier[produit.id] is not defined %}
                                <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">
                                        <select name=\"qte\" class=\"span1\">
                                         {% for i in 1..20 %}
                                             <option value=\"{{ i }}\">{{ i }}</option>
                                         {% endfor %}
                                        </select>

                                        <div>
                                            <button class=\"btn btn-primary\">Ajouter au panier</button>
                                        </div>                                        
                                </form>
                                 <div><a href=\"{{ path('origineproduit', { 'id' : produit.id }) }}\" target=\"_blank\" ><h4><i class=\"icon-globe icon-white\"></i>Connaitre la provenance</h4></a>
                                </div>
                                        
                          {% else %}
                                <div>
                                    <a href=\"{{ path('panier') }}\" class=\"btn btn-primary\">Le produit est déjà dans votre panier</a>
                                </div>
                                <br/>
                                 <br/>
                                <div><a href=\"{{ path('origineproduit', { 'id' : produit.id }) }}\" target=\"_blank\" ><i class=\"icon-globe icon-white\"></i>Connaitre la provenance</a>
                          {% endif %}
                    </div>
                </div>

            </div>    
        </div>
                      <div><a href=\"{{ path('produits')}}\" class=\"btn btn-primary pull-right\">Retour </a> </div>
       </div>
    </div>                   
{% endblock %}", "EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/produits/layout/presentation.html.twig");
    }
}
