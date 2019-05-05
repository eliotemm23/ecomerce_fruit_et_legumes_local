<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_40817d7e4c4cc5cca2292a4cd16685516deffa88f0ebe0df4852e7551aeac5fc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">

    <div class=\"span3\">
        ";
        // line 6
        $this->loadTemplate("UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "@FOSUser/ChangePassword/change_password_content.html.twig", 6)->display($context);
        // line 7
        echo "    </div>

    <div class=\"span9\">
        <h2>Modifier mon mot de passe</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    <h4>Modifier mes informations</h4>
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), 'widget');
        echo "
                    <br />
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  57 => 19,  52 => 17,  48 => 16,  37 => 7,  35 => 6,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row\">

    <div class=\"span3\">
        {% include 'UtilisateursUtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}
    </div>

    <div class=\"span9\">
        <h2>Modifier mon mot de passe</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    <h4>Modifier mes informations</h4>
                    {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
                    {{ form_widget(form) }}
                    <br />
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
", "@FOSUser/ChangePassword/change_password_content.html.twig", "/home/maxime/NetBeansProjects/ecommerce/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
