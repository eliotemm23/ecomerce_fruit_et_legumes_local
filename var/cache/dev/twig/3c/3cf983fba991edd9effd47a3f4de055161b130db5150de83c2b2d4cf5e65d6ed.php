<?php

/* EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_bfcd6cb58e0ef376c6b08a9f2c03d2f8f6d664b57419ad278a372f9ecb905ee4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig"));

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
        echo "    <<div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <h2>Indiquer votre adresse de livraison et de facuration</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner\">
                    
                        <div class=\"span4\">
                             ";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 12, $this->source); })()), "adresses", array())) != 0)) {
            // line 13
            echo "                                   <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation");
            echo "\" method=\"POST\">

                                        <h4>Adresse de livraison</h4>
                                       ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 16, $this->source); })()), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 17
                echo "                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"livraison\" value=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                            ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraisonAdresseSuppression", array("id" => twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                            <br />";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "nom", array()), "html", null, true);
                echo "
                                       </label>
                                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
                                        <br /><br />

                                        <h4>Adresse de facturation</h4>
                                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 27, $this->source); })()), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 28
                echo "                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"facturation\" value=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                            ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraisonAdresseSuppression", array("id" => twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                            <br />";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "nom", array()), "html", null, true);
                echo "
                                        </label>
                                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
                                        <br />

                                        <button class=\"btn btn-primary\">Valider mes adresses</button>
                                   </form>
                                ";
        }
        // line 39
        echo "   
                              
                        </div>


                        <div class=\"span4 offset2\">
                            <h4>Ajouter une nouvelle adresse</h4>
                            <form action=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison");
        echo "\" method=\"POST\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), 'widget');
        echo "
                            <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                            </form>
                        </div>
                    </div>
                                 
                </div>

            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 47,  213 => 46,  204 => 39,  196 => 34,  177 => 31,  165 => 30,  157 => 29,  154 => 28,  137 => 27,  131 => 23,  112 => 20,  100 => 19,  92 => 18,  89 => 17,  72 => 16,  65 => 13,  63 => 12,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
    <<div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <h2>Indiquer votre adresse de livraison et de facuration</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner\">
                    
                        <div class=\"span4\">
                             {% if utilisateur.adresses|length != 0 %}
                                   <form action=\"{{ path('validation') }}\" method=\"POST\">

                                        <h4>Adresse de livraison</h4>
                                       {% for adresse in utilisateur.adresses %}
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"livraison\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}checked=\"checked\"{% endif %}>
                                            {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }} <a href=\"{{ path('livraisonAdresseSuppression', { 'id' : adresse.id }) }}\"><i class=\"icon-trash\"></i></a>
                                            <br />{{ adresse.prenom }} {{ adresse.nom }}
                                       </label>
                                        {% endfor %}

                                        <br /><br />

                                        <h4>Adresse de facturation</h4>
                                        {% for adresse in utilisateur.adresses %}
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"facturation\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}checked=\"checked\"{% endif %}>
                                            {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }} <a href=\"{{ path('livraisonAdresseSuppression', { 'id' : adresse.id }) }}\"><i class=\"icon-trash\"></i></a>
                                            <br />{{ adresse.prenom }} {{ adresse.nom }}
                                        </label>
                                        {% endfor %}

                                        <br />

                                        <button class=\"btn btn-primary\">Valider mes adresses</button>
                                   </form>
                                {% endif %}   
                              
                        </div>


                        <div class=\"span4 offset2\">
                            <h4>Ajouter une nouvelle adresse</h4>
                            <form action=\"{{ path('livraison') }}\" method=\"POST\">
                            {{ form_widget(form) }}
                            <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                            </form>
                        </div>
                    </div>
                                 
                </div>

            </div>
        </div>
    {% endblock %}", "EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/panier/layout/livraison.html.twig");
    }
}
