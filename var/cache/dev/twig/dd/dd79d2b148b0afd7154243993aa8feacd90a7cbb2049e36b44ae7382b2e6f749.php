<?php

/* EcommerceEcommerceBundle:Default:produits/layout/origineproduit.html.twig */
class __TwigTemplate_3f828c170c42a0db634e7d6b2ff4d95f34eb80a7f1facfd6b19c437aaecf57e8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:produits/layout/origineproduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Default:produits/layout/origineproduit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

  <head>
    <title>Geocoding Service</title>
    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
    <meta charset=\"utf-8\">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
 ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    <div id=\"floating-panel\">
      <input id=\"address\" type=\"textbox\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 37, $this->source); })()), "origineadr", array()), "html", null, true);
        echo "\">
      <input id=\"submit\" type=\"button\" value=\"Rechercher\">
    </div>
    <div id=\"map\"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 50.6312431, lng: 3.0632348999999977}
        });
         
       
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
        geocodeAddress(geocoder, map);
        
        });
      
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              draggable: false,
              animation: google.maps.Animation.DROP,
              map: resultsMap,
              position: results[0].geometry.location
            });
          marker.setAnimation(google.maps.Animation.BOUNCE);

          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
      
                
    </script>
    <script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdNsmK-sHhhGLMNGjV_3X_IxsegzKjUCo&callback=initMap\">
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Default:produits/layout/origineproduit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 37,  89 => 36,  80 => 35,  68 => 83,  66 => 35,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

  <head>
    <title>Geocoding Service</title>
    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
    <meta charset=\"utf-8\">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
 {% block body %}
    <div id=\"floating-panel\">
      <input id=\"address\" type=\"textbox\" value=\"{{ produit.origineadr}}\">
      <input id=\"submit\" type=\"button\" value=\"Rechercher\">
    </div>
    <div id=\"map\"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 50.6312431, lng: 3.0632348999999977}
        });
         
       
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
        geocodeAddress(geocoder, map);
        
        });
      
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              draggable: false,
              animation: google.maps.Animation.DROP,
              map: resultsMap,
              position: results[0].geometry.location
            });
          marker.setAnimation(google.maps.Animation.BOUNCE);

          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
      
                
    </script>
    <script async defer
    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdNsmK-sHhhGLMNGjV_3X_IxsegzKjUCo&callback=initMap\">
    </script>
{% endblock %}


</html>", "EcommerceEcommerceBundle:Default:produits/layout/origineproduit.html.twig", "/home/maxime/NetBeansProjects/ecommerce/src/Ecommerce/EcommerceBundle/Resources/views/Default/produits/layout/origineproduit.html.twig");
    }
}
