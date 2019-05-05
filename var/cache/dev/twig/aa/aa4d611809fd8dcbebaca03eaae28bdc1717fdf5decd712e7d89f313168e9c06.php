<?php

/* UtilisateursUtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig */
class __TwigTemplate_e13b27f02e0e39092bccfbe2ad7003f25d035d7e1354a914c323bd97688fb3fb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "UtilisateursUtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig"));

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
        echo "<h1>Liste des utilisateurs</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateurs" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "username", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "adresses", array())) != 0)) {
                // line 19
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAdressesUtilisateurs", array("id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", array()))), "html", null, true);
                echo "\" title=\"Consulter les adresses\"><i class=\"icon-book\"></i></a>
                            ";
            }
            // line 21
            echo "                            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "commandes", array())) != 0)) {
                // line 22
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminFacturesUtilisateurs", array("id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", array()))), "html", null, true);
                echo "\" title=\"Consulter les factures\"><i class=\"icon-book\"></i></a>
                            ";
            }
            // line 24
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  94 => 24,  88 => 22,  85 => 21,  79 => 19,  77 => 18,  72 => 16,  69 => 15,  65 => 14,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layoutAdmin.html.twig' %}

{% block body -%}
    <h1>Liste des utilisateurs</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for utilisateur in utilisateurs %}
                <tr>
                    <td>{{ utilisateur.username }}</td>
                    <td>
                        {% if utilisateur.adresses|length != 0 %}
                            <a href=\"{{ path('adminAdressesUtilisateurs', { 'id': utilisateur.id }) }}\" title=\"Consulter les adresses\"><i class=\"icon-book\"></i></a>
                            {% endif %}
                            {% if utilisateur.commandes|length != 0 %}
                            <a href=\"{{ path('adminFacturesUtilisateurs', { 'id': utilisateur.id }) }}\" title=\"Consulter les factures\"><i class=\"icon-book\"></i></a>
                            {% endif %}
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "UtilisateursUtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Utilisateurs/UtilisateursBundle/Resources/views/Administration/Utilisateurs/layout/index.html.twig");
    }
}
