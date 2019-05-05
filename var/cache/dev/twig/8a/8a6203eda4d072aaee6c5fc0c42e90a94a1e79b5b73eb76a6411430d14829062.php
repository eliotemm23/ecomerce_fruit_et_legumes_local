<?php

/* UtilisateursUtilisateursBundle:Default:layout/facturePDF.html.twig */
class __TwigTemplate_d9e78ebcf678ae13d243e7002927f8d90a73a28e5fd91b0464c13dcdeadcfe15 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:layout/facturePDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:layout/facturePDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"./css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <h1>La Fraicheur Des  Saisons</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
             <br/>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
             <br/>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 25, $this->source); })()), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 26, $this->source); })()), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
            <br/>
        <ul id=\"coordonnes\">
            <li>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 31, $this->source); })()), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 31, $this->source); })()), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 32, $this->source); })()), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 33, $this->source); })()), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 33, $this->source); })()), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 33, $this->source); })()), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</li>
        </ul>
        <table id=\"entity\">
             <br/>
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>  
             <br/>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 45, $this->source); })()), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 46
            echo "                <tr>
                    <td class=\"color\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixHT", array()), "html", null, true);
            echo " €</td>
                    <td class=\"color\">";
            // line 50
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "prixHT", array()) * twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                    <td class=\"color\">";
            // line 51
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "prixTTC", array()) * twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 58, $this->source); })()), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</td>
            </tr>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 60, $this->source); })()), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 61
            echo "            <tr>
                <td width=\"110\">TVA <span class=\"color min\">";
            // line 62
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</span> :</td>
                <td width=\"100\" class=\"color\">";
            // line 63
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 68, $this->source); })()), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\">";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new Twig_Error_Runtime('Variable "adresse" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "</span>
            <br />
            ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new Twig_Error_Runtime('Variable "telephone" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "
        </div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateursBundle:Default:layout/facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 74,  170 => 72,  163 => 68,  159 => 66,  150 => 63,  146 => 62,  143 => 61,  139 => 60,  134 => 58,  128 => 54,  119 => 51,  115 => 50,  111 => 49,  107 => 48,  103 => 47,  100 => 46,  96 => 45,  77 => 33,  73 => 32,  67 => 31,  59 => 26,  55 => 25,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"./css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <h1>La Fraicheur Des  Saisons</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
             <br/>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
             <br/>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">{{ facture.date|date('d-m-Y') }}</td>
                <td class=\"color\">{{ facture.reference }}</td>
            </tr>
        </table>
            <br/>
        <ul id=\"coordonnes\">
            <li>{{ facture.commande.facturation.nom }} {{ facture.commande.facturation.prenom }}</li>
            <li>{{ facture.commande.facturation.adresse}}</li>
            <li>{{ facture.commande.facturation.cp }} {{ facture.commande.facturation.ville }} - {{ facture.commande.facturation.pays }}</li>
        </ul>
        <table id=\"entity\">
             <br/>
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>  
             <br/>
                {% for produit in facture.commande.produit %}
                <tr>
                    <td class=\"color\">{{ produit.reference }}</td>
                    <td class=\"color\">{{ produit.quantite }}</td>
                    <td class=\"color\">{{ produit.prixHT }} €</td>
                    <td class=\"color\">{{ produit.prixHT * produit.quantite }} €</td>
                    <td class=\"color\">{{ produit.prixTTC * produit.quantite }} €</td>
                </tr>
                {% endfor %}
        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\">{{ facture.commande.prixHT }} €</td>
            </tr>
            {% for key, tva in facture.commande.tva %}
            <tr>
                <td width=\"110\">TVA <span class=\"color min\">{{ key }}</span> :</td>
                <td width=\"100\" class=\"color\">{{ tva }} €</td>
            </tr>
            {% endfor %}
            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">{{ facture.commande.prixTTC }} €</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\">{{ adresse }}</span>
            <br />
            {{ telephone }}
        </div>
    </body>
</html>", "UtilisateursUtilisateursBundle:Default:layout/facturePDF.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Utilisateurs/UtilisateursBundle/Resources/views/Default/layout/facturePDF.html.twig");
    }
}
