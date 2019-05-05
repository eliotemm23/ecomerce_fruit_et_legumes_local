<?php

/* EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_2ba61064aa1d926d74eaced2b2d242fa7a6e926e62d73ca570be20fc1b60eb2e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 8
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 8, $this->source); })()), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"container\">
        <div class=\"row\">
            <br/>
            <div class=\"span3\">
                ";
        // line 16
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", 16)->display($context);
        // line 17
        echo "            </div>

            <div class=\"span9\">
                
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                <h2>Votre panier</h2>
               
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
        // line 38
        if ((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 38, $this->source); })())) == 0)) {
            // line 39
            echo "                                <tr>
                                    <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                                </tr>
                         ";
        }
        // line 43
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 44
            echo "                            <tr>
                                 <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 50, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </select>&nbsp;
                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimer", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 56, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                               </form>
                            </tr>
                             ";
            // line 59
            $context["totalHT"] = ((isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 59, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 59, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array")));
            // line 60
            echo "                             ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new Twig_Error_Runtime('Variable "totalTTC" does not exist.', 60, $this->source); })()) + $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension']->calculTva((twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 60, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array")), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "multiplicate", array())));
            // line 61
            echo "                             ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 61, $this->source); })()), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "valeur", array())) => (twig_get_attribute($this->env, $this->source, (isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 61, $this->source); })()), ("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension']->MontantTva((twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 61, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array")), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "multiplicate", array())))));
            // line 62
            echo "                             

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                        </tbody>
                    </table>
                      ";
        // line 67
        if ((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 67, $this->source); })())) != 0)) {
            echo "    
                        <dl class=\"dl-horizontal pull-right\">
                            <dt>Total HT :</dt><dd>";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 69, $this->source); })()), "html", null, true);
            echo " €</dd>

                            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 72
                echo "                                <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :</dt><dd>";
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo " €</dd>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
                            <dt>Total TTC :</dt><dd>";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new Twig_Error_Runtime('Variable "totalTTC" does not exist.', 75, $this->source); })()), "html", null, true);
            echo " €</dd>
                        </dl>
                <div class=\"clearfix\"></div>              
                <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                 ";
        }
        // line 80
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 80,  231 => 78,  225 => 75,  222 => 74,  211 => 72,  207 => 71,  202 => 69,  197 => 67,  193 => 65,  185 => 62,  182 => 61,  179 => 60,  177 => 59,  171 => 56,  167 => 55,  162 => 53,  159 => 52,  144 => 50,  140 => 49,  134 => 46,  130 => 45,  127 => 44,  122 => 43,  116 => 39,  114 => 38,  100 => 26,  91 => 23,  88 => 22,  84 => 21,  78 => 17,  76 => 16,  70 => 12,  61 => 11,  51 => 1,  45 => 8,  41 => 7,  39 => 5,  37 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% set totalHT = 0 %}
{% set totalTTC = 0%}
{% set refTva = {} %}

{% for produit in produits %}
    {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : 0 }) %}
{% endfor %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <br/>
            <div class=\"span3\">
                {% include '::modulesUsed/navigation.html.twig' %}
            </div>

            <div class=\"span9\">
                
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"alert alert-success\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}
                <h2>Votre panier</h2>
               
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
                          {% if produits|length == 0 %}
                                <tr>
                                    <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                                </tr>
                         {% endif %}
                            {% for produit in produits %}
                            <tr>
                                 <form action=\"{{ path('ajouter', { 'id' : produit.id }) }}\" method=\"get\">
                            <td>{{ produit.nom }}</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    {% for i in 1..20 %}
                                        <option value=\"{{ i }}\" {% if i == panier[produit.id] %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                    {% endfor %}
                                </select>&nbsp;
                                <a href=\"{{ path('supprimer', { 'id' : produit.id }) }}\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>{{ produit.prix }} €</td>
                            <td>{{ produit.prix * panier[produit.id] }} €</td>
                               </form>
                            </tr>
                             {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}
                             {% set totalTTC = totalTTC + (produit.prix * panier[produit.id])|tva(produit.tva.multiplicate) %}
                             {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : refTva['%' ~ produit.tva.valeur] + ( produit.prix * panier[produit.id])|MontantTva(produit.tva.multiplicate) }) %}
                             

                            {% endfor %}
                        </tbody>
                    </table>
                      {% if produits|length != 0 %}    
                        <dl class=\"dl-horizontal pull-right\">
                            <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>

                            {% for key, tva in refTva %}
                                <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                            {% endfor %}

                            <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
                        </dl>
                <div class=\"clearfix\"></div>              
                <a href=\"{{ path('livraison') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                 {% endif %}
                <a href=\"{{ path('produits') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
{% endblock %}", "EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}
