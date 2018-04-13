<?php

/* _header.twig */
class __TwigTemplate_456da68e97e07a2603667b0d1df3768f86bfc3a11af802b28d4bb97fa9a65ba4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\" />

     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
     <meta name=\"keywords\" content=\"bartholomew, financial, literacy, coalition\" />
     <meta name=\"description\" content=\"Bartholomew County Financial Literacy Coalition\" />
    ";
        // line 14
        echo "    <title>
      ";
        // line 15
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 16
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
      ";
        // line 17
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "general", array(), "any", false, true), "payoff", array(), "any", true, true))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "general", array()), "payoff", array()), "html", null, true);
        }
        // line 18
        echo "    </title>

    <!--Favicon-->
    <!--<link rel=\"icon\" href=\"../files/favicon.ico\" sizes=\"any\" type=\"image/x+icon\">-->
    <link rel=\"icon\" href=\"../files/favicon-16x16.png\" sizes=\"any\" type=\"image/x+icon\">
    <!--End of Favicon-->

    ";
        // line 26
        echo "    <!--<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/bcflc2.css\">-->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/bootstrap-theme.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/bootstrap-responsive.css\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    ";
        // line 35
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/jquery-1.11.3.min.js\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/bootstrap.js\"></script> 
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/bootstrap-dropdown.js\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/npm.js\"></script>

    <script type=\"text/javascript\" src=\"http://cdn.mlcalc.com/widget-api.js\"></script>
  
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/bcflc3.css\">

<!--     <style>

    </style>
-->
</head>
<body>

\t<div class=\"navbar-wrapper\">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class=\"container\">

        <div class=\"navbar\">
          
            <div class=\"navbar-inner\">
              <div class=\"navbar-header\">

              <!-- Logo -->
            <!--<a class=\"brand\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\"> <img src=\"../files/bcflclogo.png\"/></a> -->
            <a class=\"brand\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\"> <img src=\"../files/Logo/logo_full_lightbg.png\" height=\"60%\" width=\"60%\"/></a>

              <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">

                <a href=\"#\"> Menu
                  <span class=\"glyphicon glyphicon-th-list\"></span>
                </a>

              </button>

             
            </div>

            <!-- End Logo -->

            <div class=\"donate\">
                           <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
      <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
      <input type=\"hidden\" name=\"hosted_button_id\" value=\"XTK7W5XDRLR88\">
     <!-- <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\"> -->
      <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
      <!-- <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\"> -->
      </form> 
      </div> 

      <div class=\"volunteer\">
        <div class=\"volunteer-inner\">
          ";
        // line 91
        $template_storage = new Bolt\Storage($context['app']);
        $context['ct'] =         $template_storage->getContent("/page/volunteer-opportunities", array() );
        // line 92
        echo "          <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "link", array()), "html", null, true);
        echo "\">VOLUNTEER</a>
          </div>
      </div>
              

            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class=\"collapse navbar-collapse\">
              <!-- Search bar -->
            <div class=\"navbar-right\">

              <div class=\"search-icon-sec\">
                <!-- <a href=\"#\"><span class=\"glyphicon glyphicon-user\">&nbsp;</span>Sign in</a> -->

                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Please click in the area to the right to search.\"><span class=\"glyphicon glyphicon-search search-icon\"></span></a>
              </div>
              <div class=\"search-text\">
                ";
        // line 108
        $this->loadTemplate("_sub_searchbox.twig", "_header.twig", 108)->display($context);
        // line 109
        echo "              </div>
            </div>
            <!-- End Search bar -->
              <ul class=\"nav navbar-nav navbar-center\">
                
              \t";
        // line 114
        echo $this->env->getExtension('Bolt')->menu($this->env, "main", "_sub_menu.twig");
        echo "

            \t

              </ul>

              
            </div><!--/.navbar-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

                    <script>
                  \$(document).ready(function(){
                  \$('[data-toggle=\"tooltip\"]').tooltip(); 
                  });
                </script>";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 114,  192 => 109,  190 => 108,  170 => 92,  167 => 91,  136 => 63,  132 => 62,  110 => 43,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  86 => 35,  80 => 31,  76 => 30,  72 => 29,  68 => 28,  64 => 27,  59 => 26,  50 => 18,  45 => 17,  40 => 16,  35 => 15,  32 => 14,  19 => 1,);
    }
}
