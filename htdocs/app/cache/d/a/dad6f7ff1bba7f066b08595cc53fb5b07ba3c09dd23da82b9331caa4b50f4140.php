<?php

/* index.twig */
class __TwigTemplate_dad6f7ff1bba7f066b08595cc53fb5b07ba3c09dd23da82b9331caa4b50f4140 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "index.twig", 1)->display($context);
        // line 2
        echo "


    <!-- Header bar -->

<!--
   <div class=\"headerphoto\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "theme/bootstrapbolttheme/img/slide-03.jpg\" width=\"100%\" height=\"350\" />
        ";
        // line 11
        echo "    </div>
<br>
-->

    <!-- End header -->

<!-- 'I Am' Menu -->

<div class=\"iAmMenu navbar container\">

  <ul class=\"list-inline nav-justified\">
    ";
        // line 22
        echo $this->env->getExtension('Bolt')->menu($this->env, "i_am", "_i_am_menu.twig");
        echo "
  </ul>

</div>

<!-- End 'I Am' Menu -->
<!-- Start Auth -->



<!-- Carousel -->
<div class=\"container\">

  ";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('carousel')->getCallable(), array("slideshow")), "html", null, true);
        echo "

</div>
<!-- End Carousel -->



<div class=\"container text-justify\">

  <!-- Upcoming Calendar -->
  <div class=\"calendar\">

    ";
        // line 47
        $this->loadTemplate("_calendar2.twig", "index.twig", 47)->display($context);
        // line 48
        echo "
  </div>
  <!-- End Upcoming Calendar -->

</div> <!-- container -->



<!--
    <div class=\"container marketing\">

      <!-- Three columns of text below the carousel -->
      <div class=\"row\" style=\"margin-top: 10px;\">
      \t";
        // line 61
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("articles/latest/3", array("paging" => true) );
        // line 62
        echo "      \t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 63
            echo "        <div class=\"span4\" style=\"text-align: center;\">

        \t";
            // line 65
            if (($this->getAttribute($context["record"], "image", array()) != "")) {
                // line 66
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["record"], "image", array())), "html", null, true);
                echo "\"><img class=\"img-circle fancybox\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["record"], "image", array()), 150, 150), "html", null, true);
                echo "\"></a>
          ";
            }
            // line 68
            echo "
          <h2><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</a></h2>

          <p>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 220), "method"), "html", null, true);
            echo "</p>

          <p><a class=\"btn\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">Read More &raquo;</a></p>
        </div><!-- /.span4 -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        
      </div><!-- /.row -->

  </div>

  <!-- End Main Content and Sidebar -->

  <hr>


";
        // line 86
        $this->loadTemplate("_footer.twig", "index.twig", 86)->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 86,  141 => 76,  132 => 73,  127 => 71,  120 => 69,  117 => 68,  109 => 66,  107 => 65,  103 => 63,  98 => 62,  95 => 61,  80 => 48,  78 => 47,  63 => 35,  47 => 22,  34 => 11,  30 => 9,  21 => 2,  19 => 1,);
    }
}
