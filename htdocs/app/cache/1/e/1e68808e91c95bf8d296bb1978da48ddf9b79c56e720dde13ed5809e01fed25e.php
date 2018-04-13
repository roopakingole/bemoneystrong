<?php

/* carousel.twig */
class __TwigTemplate_1e68808e91c95bf8d296bb1978da48ddf9b79c56e720dde13ed5809e01fed25e extends Twig_Template
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
        echo "<script>
\$(document).ready(function(){
    // Activate Carousel
    \$(\"#myCarousel\").carousel(\"pause\");

    // Click on the button to start sliding 
    \$(\"#myBtn\").click(function(){
        \$(\"#myCarousel\").carousel(\"cycle\");
    });

    // Click on the button to stop sliding 
    \$(\"#myBtn2\").click(function(){
        \$(\"#myCarousel\").carousel(\"pause\");
    });
    
    // Enable Carousel Indicators
    \$(\".item1\").click(function(){
        \$(\"#myCarousel\").carousel(0);
    });
    \$(\".item2\").click(function(){
        \$(\"#myCarousel\").carousel(1);
    });
    \$(\".item3\").click(function(){
        \$(\"#myCarousel\").carousel(2);
    });
    \$(\".item4\").click(function(){
        \$(\"#myCarousel\").carousel(3);
    });
    
    // Enable Carousel Controls
    \$(\".left\").click(function(){
        \$(\"#myCarousel\").carousel(\"prev\");
    });
    \$(\".right\").click(function(){
        \$(\"#myCarousel\").carousel(\"next\");
    });
});
</script>




<div id=\"carousel-";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" class=\"carousel slide ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\" data-ride=\"carousel\" ";
        echo twig_escape_filter($this->env, (isset($context["dataoptions"]) ? $context["dataoptions"] : null), "html", null, true);
        echo ">
    ";
        // line 45
        echo "    <ol class=\"carousel-indicators\">
        ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 47
            echo "            ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                $context["active"] = "active";
            } else {
                $context["active"] = "";
            }
            // line 48
            echo "            <li data-target=\"#carousel-";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["active"]) ? $context["active"] : null), "html", null, true);
            echo "\"></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </ol>


    ";
        // line 54
        echo "    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 56
            echo "            ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                $context["active"] = "active";
            } else {
                $context["active"] = "";
            }
            // line 57
            echo "
                <div class=\"item ";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["active"]) ? $context["active"] : null), "html", null, true);
            echo "\">

                    ";
            // line 60
            $template_storage = new Bolt\Storage($context['app']);
            $context['carouselurls'] =             $template_storage->getContent("/carousel/slideshow", array() );
            // line 61
            echo "
                    <a class=\"";
            // line 62
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "first ";
            }
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "last ";
            }
            echo "\" 
                    href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["carouselurls"]) ? $context["carouselurls"] : null), "url", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "title", array()), "html", null, true);
            echo "\"> ";
            // line 64
            echo "


                    <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "files", array()) . $this->getAttribute($context["image"], "filename", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "\">


                    

                    <div class=\"carousel-caption\"><h2><strong>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "</strong></h2>

                        <h3 class=\"";
            // line 74
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "first ";
            }
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "last ";
            }
            echo "\">
                            ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["carouselurls"]) ? $context["carouselurls"] : null), "smparagraph", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "title", array()), "html", null, true);
            echo "</h3> ";
            // line 76
            echo "
                    </div>
                </a>

            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </div>

    ";
        // line 85
        echo "    <div class=\"nav-justified\">
        <a class=\"left carousel-control\" href=\"#carousel-";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["prev"]) ? $context["prev"] : null), "html", null, true);
        echo "</span>
        </a>

        


        <a class=\"right carousel-control\" href=\"#carousel-";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true);
        echo "</span>
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 96,  249 => 94,  240 => 88,  235 => 86,  232 => 85,  228 => 82,  209 => 76,  206 => 75,  197 => 74,  192 => 72,  182 => 67,  177 => 64,  174 => 63,  165 => 62,  162 => 61,  159 => 60,  154 => 58,  151 => 57,  144 => 56,  127 => 55,  124 => 54,  119 => 50,  98 => 48,  91 => 47,  74 => 46,  71 => 45,  63 => 43,  19 => 1,);
    }
}
