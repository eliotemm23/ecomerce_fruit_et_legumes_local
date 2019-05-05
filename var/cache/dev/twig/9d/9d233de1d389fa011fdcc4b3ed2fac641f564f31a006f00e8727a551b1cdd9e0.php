<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_1ab8305bb2ee5b93939bb1fb329111858e4d9645b7a0f7bc1b8e09dd6b4b845d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo " 
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->source); })())) {
            echo "                  
    <div>";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<div class=\"row\">                          
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <div class=\"alert alert-info\">
                       <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande et de manger équilibré.
                    </em>
                    </div>
                    
                    <br /><br />
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>

                </div>

                <div class=\"span4 offset2\">
                    <h4>Connexion</h4>
                    <form action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        ";
        // line 29
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\" />
                        ";
        }
        // line 32
        echo "
                        <label for=\"username\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />

                        <label for=\"password\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                         <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />


                        
                    </form>
                </div>
                <div class=\"span10\">
                     <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 47,  99 => 40,  92 => 36,  87 => 34,  83 => 33,  80 => 32,  74 => 30,  72 => 29,  68 => 28,  59 => 22,  41 => 6,  36 => 4,  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
 
{% if error %}                  
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"row\">                          
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <div class=\"alert alert-info\">
                       <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande et de manger équilibré.
                    </em>
                    </div>
                    
                    <br /><br />
                    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-primary\">S'inscrire</a>

                </div>

                <div class=\"span4 offset2\">
                    <h4>Connexion</h4>
                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                        {% if csrf_token %}
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        {% endif %}

                        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />

                        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                         <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'security.login.submit'|trans }}\" />


                        
                    </form>
                </div>
                <div class=\"span10\">
                     <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe perdu ?</a>
                </div>
            </div>
        </div>
    </div>
</div>", "@FOSUser/Security/login_content.html.twig", "/home/maxime/NetBeansProjects/ecommerce/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
