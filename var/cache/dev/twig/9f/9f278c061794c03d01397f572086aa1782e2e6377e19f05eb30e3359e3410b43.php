<?php

/* EcommerceEcommerceBundle:Administration:produits/layout/index.html.twig */
class __TwigTemplate_073896c6901d0a24f2e343f0634cd9745ee43bf35685445371c7e581307b6492 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceEcommerceBundle:Administration:produits/layout/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Administration:produits/layout/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Administration:produits/layout/index.html.twig"));

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
        echo "    <h1>Liste des Produits</h1>

     <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                
                <th>Nom</th>
               
                <th>Prix</th>
                <th>Disponible</th>
                <th>Origineadr</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 20
            echo "            <tr>
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\"></a>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "disponible", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "origineadr", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\" icon-eye-open\"></i></a>
                        
                        
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                        
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        
            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_new");
        echo "\"class=\"btn btn-primary\">Créer un nouveau produit</a>
        
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Administration:produits/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  123 => 39,  111 => 33,  105 => 30,  98 => 26,  90 => 25,  86 => 24,  81 => 22,  77 => 21,  74 => 20,  70 => 19,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layoutAdmin.html.twig' %}

{% block body %}
    <h1>Liste des Produits</h1>

     <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                
                <th>Nom</th>
               
                <th>Prix</th>
                <th>Disponible</th>
                <th>Origineadr</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <a href=\"{{ path('adminProduits_show', { 'id': produit.id }) }}\"></a>
                <td>{{ produit.nom }}</td>
                
                <td>{{ produit.prix }}</td>
                <td>{% if produit.disponible %}Yes{% else %}No{% endif %}</td>
                <td>{{ produit.origineadr }}</td>
                <td>
                    <ul>
                        
                            <a href=\"{{ path('adminProduits_show', { 'id': produit.id }) }}\"><i class=\" icon-eye-open\"></i></a>
                        
                        
                            <a href=\"{{ path('adminProduits_edit', { 'id': produit.id }) }}\"><i class=\"icon-edit\"></i></a>
                        
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        
            <a href=\"{{ path('adminProduits_new') }}\"class=\"btn btn-primary\">Créer un nouveau produit</a>
        
    </ul>
{% endblock %}
", "EcommerceEcommerceBundle:Administration:produits/layout/index.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Administration/produits/layout/index.html.twig");
    }
}
