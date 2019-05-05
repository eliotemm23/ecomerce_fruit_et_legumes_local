<?php

/* ::modulesUsed/maps.html.twig */
class __TwigTemplate_e7f826d287065a72dd214b53335e7b7ae69f03a1a2f3a8261a73381cf266061e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/maps.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/maps.html.twig"));

        // line 1
        echo "

  
<head>
      
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 500px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
        
        .titre {
    width: 872px;
    height: 50px;
    background-color: #006dcc;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 300s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 300s;
    color: white;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background-image: linear-gradient(to right, #1a237e , #64b5f6);
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    from {background-color: #0277bd;}
    to {background-color: #81d4fa;}
}

/* Standard syntax */
@keyframes example {
    from {background-color: #0277bd;}
    to {background-color: #81d4fa;}
}
        
        
        
        
        
        
        
        
        
        
        
    </style>


</head>
";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "    
    
 
  <h3 class=\"titre\">Nos dépôts et points de retrait</h3>
  

    <!--The div element for the map -->
    <div id=\"map\"></div>
    <script>



        // Initialize and add the map
        function initMap() {

            var locations = [

                {name: 'Gare de Lille-Flandres Place des Buisses, 59000 Lille', lat: 50.6372161, lon: 3.0701520000000073, lable: 'Retrait'},

                {name: 'Boulevard de Valmy, 59650 Villeneuve-d\\'Ascq', lat: 50.6171125, lon: 3.133462799999961, lable: 'Retrait'},
                {name: 'Efficom-lille 159 Boulevard de la Liberté 59000 Lille', lat: 50.6312431, lon: 3.0632348999999977, lable: 'Dépôt'}
            ];



            var map = new google.maps.Map(
                    document.getElementById('map'), {

                zoom: 12,
                center: new google.maps.LatLng(50.6312431, 3.0632348999999977),
                mapTypeId: google.maps.MapTypeId.ROADMAP

            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;


            for (i = 0; i < locations.length; i++) {
               
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i].lat, locations[i].lon),
                    draggable: false,
                    animation: google.maps.Animation.DROP,

                    icon: {
                        url: \"http://netmacom.fr/wp-content/uploads/exemples/google-maps/images/marker_blue.png\",
                        labelOrigin: new google.maps.Point(75, 32),
                        size: new google.maps.Size(32, 32),
                        anchor: new google.maps.Point(16, 32),
                        
                    },

                    label: {
                        text: locations[i].lable,
                        color: \"#C70E20\",
                        fontWeight: \"bold\"
                    },
                    map: map
                    
                });
                
  
                google.maps.event.addListener(marker, 'click' ,(function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i].name);
                        infowindow.open(map, marker);
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                })(marker, i));
              
            }
         
        }
         
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdNsmK-sHhhGLMNGjV_3X_IxsegzKjUCo&callback=initMap\">
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/maps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 55,  88 => 54,  37 => 6,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

  
<head>
      
<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\" />
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 500px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
        
        .titre {
    width: 872px;
    height: 50px;
    background-color: #006dcc;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 300s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 300s;
    color: white;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background-image: linear-gradient(to right, #1a237e , #64b5f6);
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    from {background-color: #0277bd;}
    to {background-color: #81d4fa;}
}

/* Standard syntax */
@keyframes example {
    from {background-color: #0277bd;}
    to {background-color: #81d4fa;}
}
        
        
        
        
        
        
        
        
        
        
        
    </style>


</head>
{% block body %}
    
    
 
  <h3 class=\"titre\">Nos dépôts et points de retrait</h3>
  

    <!--The div element for the map -->
    <div id=\"map\"></div>
    <script>



        // Initialize and add the map
        function initMap() {

            var locations = [

                {name: 'Gare de Lille-Flandres Place des Buisses, 59000 Lille', lat: 50.6372161, lon: 3.0701520000000073, lable: 'Retrait'},

                {name: 'Boulevard de Valmy, 59650 Villeneuve-d\\'Ascq', lat: 50.6171125, lon: 3.133462799999961, lable: 'Retrait'},
                {name: 'Efficom-lille 159 Boulevard de la Liberté 59000 Lille', lat: 50.6312431, lon: 3.0632348999999977, lable: 'Dépôt'}
            ];



            var map = new google.maps.Map(
                    document.getElementById('map'), {

                zoom: 12,
                center: new google.maps.LatLng(50.6312431, 3.0632348999999977),
                mapTypeId: google.maps.MapTypeId.ROADMAP

            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;


            for (i = 0; i < locations.length; i++) {
               
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i].lat, locations[i].lon),
                    draggable: false,
                    animation: google.maps.Animation.DROP,

                    icon: {
                        url: \"http://netmacom.fr/wp-content/uploads/exemples/google-maps/images/marker_blue.png\",
                        labelOrigin: new google.maps.Point(75, 32),
                        size: new google.maps.Size(32, 32),
                        anchor: new google.maps.Point(16, 32),
                        
                    },

                    label: {
                        text: locations[i].lable,
                        color: \"#C70E20\",
                        fontWeight: \"bold\"
                    },
                    map: map
                    
                });
                
  
                google.maps.event.addListener(marker, 'click' ,(function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i].name);
                        infowindow.open(map, marker);
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                })(marker, i));
              
            }
         
        }
         
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdNsmK-sHhhGLMNGjV_3X_IxsegzKjUCo&callback=initMap\">
    </script>

{% endblock %}", "::modulesUsed/maps.html.twig", "/home/maxime/NetBeansProjects/ecommerce/app/Resources/views/modulesUsed/maps.html.twig");
    }
}
