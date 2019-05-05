<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_ede0842e75729a13099d01ac97bdb5d66bf23758ae7d11b8d3370ef5cca2850a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

 
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 13
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 14
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "       <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!--===============================================================================================-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>oljvyutxykcgjlvhkmbj lkm
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("layoutAcceuil");
        echo "\" title=\"Acceuil\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.png"), "html", null, true);
        echo "\" alt=\"Image-acceuil\"/>
                       
                    </a>
                    <div class=\"nav-collapse collapse\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceEcommerceBundle:Produits:recherche"));
        echo "    
                    </div>
                </div>
            </div>
        </div>
                    
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PagesPagesBundle:Pages:menu"));
        echo "
                        </ul>
                    </div> 

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new Twig_Error_Runtime('Variable "adresse" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "</p>
                    </div>
                        

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new Twig_Error_Runtime('Variable "telephone" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["fax"]) || array_key_exists("fax", $context) ? $context["fax"] : (function () { throw new Twig_Error_Runtime('Variable "fax" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-envelope\"></i>&nbsp;Email: ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                    <div class=\"container\">
                      <div class=\"row\">
                          
                       <center>
                                <div>
                                    
                            <!-- Facebook -->
                             <a target=\"_blank\" title=\"Mangerbouger\" href=\"http://www.mangerbouger.fr/\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icone-reseauxsociaux/manger-bouger-2x.png"), "html", null, true);
        echo "\" alt=\"Mangerbouger\"/> </a>&nbsp;&nbsp;&nbsp;&nbsp;
                             <a target=\"_blank\" title=\"santé publique\" href=\"http://inpes.santepubliquefrance.fr/\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icone-reseauxsociaux/stp.png"), "html", null, true);
        echo "\" alt=\"santé publique\"/> </a>&nbsp;&nbsp;&nbsp;&nbsp;

                                   <a target=\"_blank\" title=\"Facebook\" href=\"https://www.facebook.com/profile.php?id=100028488789977\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;\"><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icone-reseauxsociaux/facebook-icon.png"), "html", null, true);
        echo "\" alt=\"Facebook\"/> </a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- //Facebook -->

                            <!-- Twitter -->
                                    <a target=\"_blank\" title=\"Twitter\" href=\"https://twitter.com/LFD4S?lang=fr\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icone-reseauxsociaux/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\"/></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- //Twitter -->

                            <!-- Google + -->
                                    <a target=\"_blank\" title=\"Instagram\" href=\"https://www.instagram.com/lafraicheurdes4saisons/\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;\"><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icone-reseauxsociaux/instagramme.png"), "html", null, true);
        echo "\" alt=\"Instagram\"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- //Google + -->

                            <!-- Linkedin -->

                                    <a target=\"_blank\" title=\"Snapchat\" href=\"https://www.snapchat.com/add/lfd4s\" rel=\"nofollow\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icone-reseauxsociaux/Snapchat.png"), "html", null, true);
        echo "\" alt=\"snapchat\"/></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- //Email -->
                             <p>&copy;Copyright ";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - La Fraîcheur Des 4 Saisons </p>
                                </div>
                        </center> 
                       </div>
                    </div>   
                <div class=\"row\">
                  
                   
                </div>
            </div>
        </footer>\t
        <script src=\"https://js.stripe.com/v3/\"></script>            
               
        <script src=\"web/js/base.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        
        
        ";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 121
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "La Fraîcheur Des 4 Saisons!!!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_description($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "            
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 120,  312 => 53,  299 => 21,  295 => 20,  291 => 19,  287 => 18,  284 => 17,  275 => 16,  258 => 14,  241 => 13,  223 => 12,  212 => 121,  210 => 120,  190 => 103,  185 => 101,  177 => 96,  170 => 92,  163 => 88,  158 => 86,  154 => 85,  141 => 75,  137 => 74,  133 => 73,  124 => 67,  115 => 61,  106 => 54,  104 => 53,  95 => 47,  86 => 43,  63 => 24,  61 => 16,  56 => 14,  52 => 13,  48 => 12,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>

 
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        <title>{% block title %}La Fraîcheur Des 4 Saisons!!!{% endblock %}</title>
        <meta name=\"keywords\" content=\"{% block motsCles %}{% endblock %}\" />
        <meta name=\"description\" content=\"{% block description %}{% endblock %}\" />
        
        {% block stylesheets %}
            
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />

        {% endblock %}
       <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!--===============================================================================================-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>oljvyutxykcgjlvhkmbj lkm
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"{{ path('layoutAcceuil') }}\" title=\"Acceuil\"><img src=\"{{ asset('img/logo2.png') }}\" alt=\"Image-acceuil\"/>
                       
                    </a>
                    <div class=\"nav-collapse collapse\">
                        {{render(controller('EcommerceEcommerceBundle:Produits:recherche')) }}    
                    </div>
                </div>
            </div>
        </div>
                    
        {% block body %}{% endblock %}
        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            {{ render(controller('PagesPagesBundle:Pages:menu')) }}
                        </ul>
                    </div> 

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;{{ adresse }}</p>
                    </div>
                        

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: {{ telephone }}</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: {{ fax }}</p>
                        <p><i class=\"icon-envelope\"></i>&nbsp;Email: {{ email }}</p>
                    </div>
                </div>
                    <div class=\"container\">
                      <div class=\"row\">
                          
                       <center>
                                <div>
                                    
                            <!-- Facebook -->
                             <a target=\"_blank\" title=\"Mangerbouger\" href=\"http://www.mangerbouger.fr/\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;\"><img src=\"{{ asset('img/icone-reseauxsociaux/manger-bouger-2x.png') }}\" alt=\"Mangerbouger\"/> </a>&nbsp;&nbsp;&nbsp;&nbsp;
                             <a target=\"_blank\" title=\"santé publique\" href=\"http://inpes.santepubliquefrance.fr/\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;\"><img src=\"{{ asset('img/icone-reseauxsociaux/stp.png') }}\" alt=\"santé publique\"/> </a>&nbsp;&nbsp;&nbsp;&nbsp;

                                   <a target=\"_blank\" title=\"Facebook\" href=\"https://www.facebook.com/profile.php?id=100028488789977\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;\"><img src=\"{{ asset('img/icone-reseauxsociaux/facebook-icon.png') }}\" alt=\"Facebook\"/> </a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- //Facebook -->

                            <!-- Twitter -->
                                    <a target=\"_blank\" title=\"Twitter\" href=\"https://twitter.com/LFD4S?lang=fr\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;\"><img src=\"{{ asset('img/icone-reseauxsociaux/twitter.png') }}\" alt=\"Twitter\"/></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- //Twitter -->

                            <!-- Google + -->
                                    <a target=\"_blank\" title=\"Instagram\" href=\"https://www.instagram.com/lafraicheurdes4saisons/\" rel=\"nofollow\" onclick=\"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;\"><img src=\"{{ asset('img/icone-reseauxsociaux/instagramme.png') }}\" alt=\"Instagram\"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- //Google + -->

                            <!-- Linkedin -->

                                    <a target=\"_blank\" title=\"Snapchat\" href=\"https://www.snapchat.com/add/lfd4s\" rel=\"nofollow\"><img src=\"{{ asset('img/icone-reseauxsociaux/Snapchat.png') }}\" alt=\"snapchat\"/></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- //Email -->
                             <p>&copy;Copyright {{ \"now\"|date('Y') }} - La Fraîcheur Des 4 Saisons </p>
                                </div>
                        </center> 
                       </div>
                    </div>   
                <div class=\"row\">
                  
                   
                </div>
            </div>
        </footer>\t
        <script src=\"https://js.stripe.com/v3/\"></script>            
               
        <script src=\"web/js/base.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        
        
        {% block javascripts %}{% endblock %}
    </body>
</html>", "::layout/layout.html.twig", "/home/maxime/NetBeansProjects/ecommerce/app/Resources/views/layout/layout.html.twig");
    }
}
