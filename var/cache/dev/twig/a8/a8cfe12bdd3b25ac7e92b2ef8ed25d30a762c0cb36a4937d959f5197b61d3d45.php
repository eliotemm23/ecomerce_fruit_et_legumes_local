<?php

/* EcommerceEcommerceBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_7cf5fc5276237b10f367e6f3440657cfca476a7764c1d552fec2c24614daf2b9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/validation.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/layout/validation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <br/> <br/> 
<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/validation.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
        
        <div class=\"span9\">
            
            
            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 26, $this->source); })()), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 27
            echo "                    <tr>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", array()), "html", null, true);
            echo "
                        </td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixHT", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "prixHT", array()) * twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 40, $this->source); })()), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>
                
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 42, $this->source); })()), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 43
            echo "                    <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 46, $this->source); })()), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</dd>
            </dl>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 52, $this->source); })()), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 52, $this->source); })()), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 53, $this->source); })()), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 54, $this->source); })()), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 54, $this->source); })()), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 54, $this->source); })()), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                    <dt>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 61, $this->source); })()), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 61, $this->source); })()), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 62, $this->source); })()), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 63, $this->source); })()), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 63, $this->source); })()), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 63, $this->source); })()), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>
            
            <div class=\"clearfix\"></div>
            
            
            <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payement", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 70, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-success pull-right\">Payer</a>
            
            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\" class=\"btn btn-primary \">Retour </a> 
        </div>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 72,  196 => 70,  182 => 63,  178 => 62,  172 => 61,  158 => 54,  154 => 53,  148 => 52,  139 => 46,  136 => 45,  125 => 43,  121 => 42,  116 => 40,  110 => 36,  101 => 33,  97 => 32,  92 => 30,  87 => 28,  84 => 27,  80 => 26,  62 => 10,  60 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
   <br/> <br/> 
<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            {% include '::modulesUsed/navigation.html.twig' %}
        </div>
        
        <div class=\"span9\">
            
            
            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
                    {% for produit in commande.commande.produit %}
                    <tr>
                        <td>{{ produit.reference }}</td>
                        <td>
                            {{ produit.quantite }}
                        </td>
                        <td>{{ produit.prixHT }} €</td>
                        <td>{{ produit.prixHT * produit.quantite }} €</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>{{ commande.commande.prixHT }} €</dd>
                
                {% for key, tva in commande.commande.tva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ commande.commande.prixTTC }} €</dd>
            </dl>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>
                    <dt>{{ commande.commande.livraison.adresse }}</dt>
                    <dt>{{ commande.commande.livraison.cp }} {{ commande.commande.livraison.ville }} - {{ commande.commande.livraison.pays }}</dt>
                </dl>
            </div>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                    <dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>
                    <dt>{{ commande.commande.facturation.adresse }}</dt>
                    <dt>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.ville }} - {{ commande.commande.facturation.pays }}</dt>
                </dl>
            </div>
            
            <div class=\"clearfix\"></div>
            
            
            <a href=\"{{ path('payement', { 'id' : commande.id }) }}\" target=\"_blank\" class=\"btn btn-success pull-right\">Payer</a>
            
            <a href=\"{{ path('produits')}}\" class=\"btn btn-primary \">Retour </a> 
        </div>

    </div>
</div>
{% endblock %}", "EcommerceEcommerceBundle:Default:panier/layout/validation.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/panier/layout/validation.html.twig");
    }
}
