<?php

/* UtilisateursUtilisateursBundle:Default:layout/facture.html.twig */
class __TwigTemplate_e9fa18ca6450c29b6521afe91c0dacfe7d9f7ad2270a653a864f74664907cdec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "UtilisateursUtilisateursBundle:Default:layout/facture.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:layout/facture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Default:layout/facture.html.twig"));

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
        echo " <br/>
<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "UtilisateursUtilisateursBundle:Default:layout/facture.html.twig", 9)->display($context);
        // line 10
        echo "            ";
        $this->loadTemplate("UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "UtilisateursUtilisateursBundle:Default:layout/facture.html.twig", 10)->display($context);
        echo "   
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceEcommerceBundle:Panier:menu"));
        echo "
            </div>\t\t\t\t
            <div class=\"span9\">
                
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                    <div class=\"alert alert-errors\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                
                <h2>Factures</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>Prix TTC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 38
        if ((twig_length_filter($this->env, (isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new Twig_Error_Runtime('Variable "factures" does not exist.', 38, $this->source); })())) == 0)) {
            // line 39
            echo "                                <tr>
                                    <td colspan=\"4\"><center>Aucunne facture actuellement.</center></td>
                                </tr>
                            ";
        }
        // line 43
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new Twig_Error_Runtime('Variable "factures" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 44
            echo "                            <tr>
                                <td>ref : ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " €</td>
                                <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturesPDF", array("id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-refresh\"></i></a></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </tbody>
                    </table>
                </form>

            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateursBundle:Default:layout/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 51,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  135 => 44,  130 => 43,  124 => 39,  122 => 38,  107 => 25,  98 => 22,  95 => 21,  90 => 20,  81 => 17,  78 => 16,  74 => 15,  67 => 11,  62 => 10,  60 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %} 

{% block body %}
 <br/>
<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            {% include '::modulesUsed/navigation.html.twig' %}
            {% include 'UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}   
            {{ render(controller('EcommerceEcommerceBundle:Panier:menu')) }}
            </div>\t\t\t\t
            <div class=\"span9\">
                
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"alert alert-success\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('error') %}
                    <div class=\"alert alert-errors\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}
                
                <h2>Factures</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>Prix TTC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% if factures|length == 0 %}
                                <tr>
                                    <td colspan=\"4\"><center>Aucunne facture actuellement.</center></td>
                                </tr>
                            {% endif %}
                            {% for facture in factures %}
                            <tr>
                                <td>ref : {{ facture.reference }}</td>
                                <td>{{ facture.date|date('d/m/Y') }}</td>
                                <td>{{ facture.commande.prixTTC }} €</td>
                                <td><a href=\"{{ path('facturesPDF', { 'id' : facture.id }) }}\" target=\"_blank\"><i class=\"icon-refresh\"></i></a></td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </form>

            </div>

        </div>
    </div>
{% endblock %}", "UtilisateursUtilisateursBundle:Default:layout/facture.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Utilisateurs/UtilisateursBundle/Resources/views/Default/layout/facture.html.twig");
    }
}
