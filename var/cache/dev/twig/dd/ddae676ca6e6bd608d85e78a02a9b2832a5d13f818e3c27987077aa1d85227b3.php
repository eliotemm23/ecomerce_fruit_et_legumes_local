<?php

/* EcommerceEcommerceBundle:Default:produits/layout/layoutAcceuil.html.twig */
class __TwigTemplate_4d34a3fb32cf11c672f5f6cd11b786b95646e90d97e79751f13150a29c7fb297 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceEcommerceBundle:Default:produits/layout/layoutAcceuil.html.twig", 2);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:produits/layout/layoutAcceuil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:produits/layout/layoutAcceuil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "<!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/vendor_Acceuil/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/> 
        
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts_Acceuil/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts_Acceuil/themify/themify-icons.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts_Acceuil/Linearicons-Free-v1.0.0/icon-font.min.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts_Acceuil/elegant-font/html-css/style.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/animate/animate.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/animsition/css/animsition.min.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/select2/select2.min.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/slick/slick.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/lightbox2/css/lightbox.min.css"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/css_Acceuil/util.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/css_Acceuil/main.css"), "html", null, true);
        echo "\"/>
            
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />

        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "
<body class=\"animsition\">
\t<section class=\"slide1\">
\t\t<div class=\"wrap-slick1\">
\t\t\t<div class=\"slick1\">
                            
\t\t\t\t<div class=\"item-slick1 item1-slick1 br\" style=\"background-image: url(";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/images_Acceuil/image_acceuil11.jpg"), "html", null, true);
        echo ");\">
\t\t\t\t
                                



\t\t\t\t\t<div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170 br\">
\t\t\t\t\t  <p><span class=\"caption1-slide1 m-text1 t-center animated visible-false m-b-15\" data-appear=\"fadeInDown\">   &nbsp; &nbsp; </span>&nbsp;</p>
\t\t\t\t\t  <h2 class=\"caption2-slide1 xl-text1 t-center animated visible-false m-b-37\" data-appear=\"fadeInUp\"> Nouvel Arrivage de Fruits et Légumes &nbsp; &nbsp; &nbsp; </h2>
\t\t\t\t\t\t<div class=\"wrap-btn-slide1 w-size1 animated visible-false\" data-appear=\"zoomIn\">
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t
                                                        <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\"class=\"flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4\"> Envie de manger sain et local ? </a> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1 item2-slick1\" style=\"background-image: url(";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/images_Acceuil/image_acceuil2.jpg"), "html", null, true);
        echo ");\">
\t\t\t\t<br/>
\t\t\t\t
\t\t\t\t\t<div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
\t\t\t\t\t\t

\t\t\t\t\t\t<h2 class=\"caption2-slide1 xl-text4 t-center animated visible-false m-b-37\" data-appear=\"lightSpeedIn\">
\t\t\t\t\t\t\tNouvel Arrivage de Fruits et Légumes
\t\t\t\t\t\t</h2>

\t\t\t\t\t\t<div class=\"wrap-btn-slide1 w-size1 animated visible-false\" data-appear=\"slideInUp\">
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\"class=\"flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4\"> Envie de manger sain et local ? </a> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1 item3-slick1\" style=\"background-image: url(";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/images_Acceuil/image_acceuil4.jpg"), "html", null, true);
        echo ");\">
\t
\t\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\"><span class=\"caption1-slide1 m-text1 t-center animated visible-false m-b-15\" data-appear=\"rotateInDownLeft\"> &nbsp; &nbsp; &nbsp; </span>
\t\t\t\t\t  <h2 class=\"caption2-slide1 xl-text1 t-center animated visible-false m-b-37\" data-appear=\"rotateInUpRight\">
\t\t\t\t\t\t\tNouvel Arrivage de Fruits et Légumes
\t\t\t\t\t\t</h2>

\t\t\t\t\t\t<div class=\"wrap-btn-slide1 w-size1 animated visible-false\" data-appear=\"rotateIn\">
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\"class=\"flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4\"> Envie de manger sain et local ? </a> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Instagram -->



<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<!-- <script type=\"text/javascript\" src=\"vendor/bootstrap/js/popper.js\"></script> -->
\t<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/js_Acceuil/bootstrap-3.3.7.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\t\$(\".selection-1\").select2({
\t\t\tminimumResultsForSearch: 20,
\t\t\tdropdownParent: \$('#dropDownSelect1')
\t\t});
\t</script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/js_Acceuil/slick-custom.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/lightbox2/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor_Acceuil/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$('.block2-btn-addcart').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().parent().find('.block2-name').html();
\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to cart !\", \"success\");
\t\t\t});
\t\t});

\t\t\$('.block2-btn-addwishlist').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().parent().find('.block2-name').html();
\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to wishlist !\", \"success\");
\t\t\t});
\t\t});
\t</script>

<!--===============================================================================================-->
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/js_Acceuil/main.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:produits/layout/layoutAcceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 160,  324 => 142,  319 => 140,  314 => 138,  309 => 136,  305 => 135,  294 => 127,  289 => 125,  285 => 124,  279 => 121,  274 => 119,  257 => 105,  243 => 94,  235 => 89,  220 => 77,  210 => 70,  195 => 58,  187 => 52,  178 => 51,  164 => 46,  160 => 45,  156 => 44,  152 => 43,  147 => 41,  143 => 40,  138 => 38,  133 => 36,  128 => 34,  123 => 32,  118 => 30,  113 => 28,  108 => 26,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  82 => 15,  79 => 14,  70 => 13,  55 => 5,  46 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::layout/layout.html.twig\" %}

{% block head %}
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

{% endblock %}


 {% block stylesheets %}
<!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('vendor/vendor_Acceuil/bootstrap/css/bootstrap.min.css') }}\"/> 
        
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fonts_Acceuil/font-awesome-4.7.0/css/font-awesome.min.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fonts_Acceuil/themify/themify-icons.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fonts_Acceuil/Linearicons-Free-v1.0.0/icon-font.min.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fonts_Acceuil/elegant-font/html-css/style.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/vendor_Acceuil/animate/animate.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/vendor_Acceuil/css-hamburgers/hamburgers.min.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/vendor_Acceuil/animsition/css/animsition.min.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/vendor_Acceuil/select2/select2.min.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/vendor_Acceuil/daterangepicker/daterangepicker.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/vendor_Acceuil/slick/slick.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/vendor_Acceuil/lightbox2/css/lightbox.min.css') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/css_Acceuil/util.css') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/css_Acceuil/main.css') }}\"/>
            
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />

        
{% endblock %}
        
{% block body %}

<body class=\"animsition\">
\t<section class=\"slide1\">
\t\t<div class=\"wrap-slick1\">
\t\t\t<div class=\"slick1\">
                            
\t\t\t\t<div class=\"item-slick1 item1-slick1 br\" style=\"background-image: url({{ asset('img/images_Acceuil/image_acceuil11.jpg') }});\">
\t\t\t\t
                                



\t\t\t\t\t<div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170 br\">
\t\t\t\t\t  <p><span class=\"caption1-slide1 m-text1 t-center animated visible-false m-b-15\" data-appear=\"fadeInDown\">   &nbsp; &nbsp; </span>&nbsp;</p>
\t\t\t\t\t  <h2 class=\"caption2-slide1 xl-text1 t-center animated visible-false m-b-37\" data-appear=\"fadeInUp\"> Nouvel Arrivage de Fruits et Légumes &nbsp; &nbsp; &nbsp; </h2>
\t\t\t\t\t\t<div class=\"wrap-btn-slide1 w-size1 animated visible-false\" data-appear=\"zoomIn\">
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t
                                                        <a href=\"{{ path('produits')}}\"class=\"flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4\"> Envie de manger sain et local ? </a> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1 item2-slick1\" style=\"background-image: url({{ asset('img/images_Acceuil/image_acceuil2.jpg') }});\">
\t\t\t\t<br/>
\t\t\t\t
\t\t\t\t\t<div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
\t\t\t\t\t\t

\t\t\t\t\t\t<h2 class=\"caption2-slide1 xl-text4 t-center animated visible-false m-b-37\" data-appear=\"lightSpeedIn\">
\t\t\t\t\t\t\tNouvel Arrivage de Fruits et Légumes
\t\t\t\t\t\t</h2>

\t\t\t\t\t\t<div class=\"wrap-btn-slide1 w-size1 animated visible-false\" data-appear=\"slideInUp\">
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"{{ path('produits')}}\"class=\"flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4\"> Envie de manger sain et local ? </a> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item-slick1 item3-slick1\" style=\"background-image: url({{ asset('img/images_Acceuil/image_acceuil4.jpg') }});\">
\t
\t\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\"><span class=\"caption1-slide1 m-text1 t-center animated visible-false m-b-15\" data-appear=\"rotateInDownLeft\"> &nbsp; &nbsp; &nbsp; </span>
\t\t\t\t\t  <h2 class=\"caption2-slide1 xl-text1 t-center animated visible-false m-b-37\" data-appear=\"rotateInUpRight\">
\t\t\t\t\t\t\tNouvel Arrivage de Fruits et Légumes
\t\t\t\t\t\t</h2>

\t\t\t\t\t\t<div class=\"wrap-btn-slide1 w-size1 animated visible-false\" data-appear=\"rotateIn\">
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<a href=\"{{ path('produits')}}\"class=\"flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4\"> Envie de manger sain et local ? </a> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Instagram -->



<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"{{ asset('css/vendor_Acceuil/jquery/jquery-3.2.1.min.js') }}\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"{{ asset('css/vendor_Acceuil/animsition/js/animsition.min.js') }}\"></script>
<!--===============================================================================================-->
\t<!-- <script type=\"text/javascript\" src=\"vendor/bootstrap/js/popper.js\"></script> -->
\t<script src=\"{{ asset('css/js_Acceuil/bootstrap-3.3.7.js') }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('css/vendor_Acceuil/bootstrap/js/bootstrap.min.js') }}\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"{{ asset('css/vendor_Acceuil/select2/select2.min.js') }}\"></script>
<script type=\"text/javascript\">
\t\t\$(\".selection-1\").select2({
\t\t\tminimumResultsForSearch: 20,
\t\t\tdropdownParent: \$('#dropDownSelect1')
\t\t});
\t</script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"{{ asset('css/vendor_Acceuil/slick/slick.min.js') }}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('css/js_Acceuil/slick-custom.js') }}\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"{{ asset('css/vendor_Acceuil/countdowntime/countdowntime.js') }}\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"{{ asset('css/vendor_Acceuil/lightbox2/js/lightbox.min.js') }}\"></script>
<!--===============================================================================================-->
\t<script type=\"text/javascript\" src=\"{{ asset('css/vendor_Acceuil/sweetalert/sweetalert.min.js') }}\"></script>
\t<script type=\"text/javascript\">
\t\t\$('.block2-btn-addcart').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().parent().find('.block2-name').html();
\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to cart !\", \"success\");
\t\t\t});
\t\t});

\t\t\$('.block2-btn-addwishlist').each(function(){
\t\t\tvar nameProduct = \$(this).parent().parent().parent().find('.block2-name').html();
\t\t\t\$(this).on('click', function(){
\t\t\t\tswal(nameProduct, \"is added to wishlist !\", \"success\");
\t\t\t});
\t\t});
\t</script>

<!--===============================================================================================-->
\t<script src=\"{{ asset('css/js_Acceuil/main.js') }}\"></script>

{% endblock %}

", "EcommerceEcommerceBundle:Default:produits/layout/layoutAcceuil.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/produits/layout/layoutAcceuil.html.twig");
    }
}
