<?php

/* PagesPagesBundle:Administration:pages/layout/index.html.twig */
class __TwigTemplate_e1467c277b867288d1b39962859e901a6d4b9e05e9475e2e71a2373640542e28 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "PagesPagesBundle:Administration:pages/layout/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesPagesBundle:Administration:pages/layout/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesPagesBundle:Administration:pages/layout/index.html.twig"));

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
        echo "    <h1>Pages list</h1>

<table class=\"table table-striped table-hover\">
        <thead>
            <tr>
               
                <th>Titre</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "            <tr>
               
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "titre", array()), "html", null, true);
            echo "</td>
                
                <td>
                    <ul>
                        
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages_show", array("id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", array()))), "html", null, true);
            echo "\"><i class=\" icon-eye-open\"></i></a>
                       
                        
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                                             
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages_new");
        echo "\"><i class=\"icon-edit icon-white\"></i>Creer une nouvelle page</a>
        
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PagesPagesBundle:Administration:pages/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  101 => 33,  89 => 27,  83 => 24,  75 => 19,  71 => 17,  67 => 16,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layoutAdmin.html.twig' %}

{% block body %}
    <h1>Pages list</h1>

<table class=\"table table-striped table-hover\">
        <thead>
            <tr>
               
                <th>Titre</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for page in pages %}
            <tr>
               
                <td>{{ page.titre }}</td>
                
                <td>
                    <ul>
                        
                            <a href=\"{{ path('adminPages_show', { 'id': page.id }) }}\"><i class=\" icon-eye-open\"></i></a>
                       
                        
                            <a href=\"{{ path('adminPages_edit', { 'id': page.id }) }}\"><i class=\"icon-edit\"></i></a>
                                             
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        
            <a href=\"{{ path('adminPages_new') }}\"><i class=\"icon-edit icon-white\"></i>Creer une nouvelle page</a>
        
    </ul>
{% endblock %}
", "PagesPagesBundle:Administration:pages/layout/index.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Pages/PagesBundle/Resources/views/Administration/pages/layout/index.html.twig");
    }
}
