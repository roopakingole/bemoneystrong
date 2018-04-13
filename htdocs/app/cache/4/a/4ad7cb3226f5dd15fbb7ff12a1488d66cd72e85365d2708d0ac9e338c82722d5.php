<?php

/* registerMoneyStrong.twig */
class __TwigTemplate_4ad7cb3226f5dd15fbb7ff12a1488d66cd72e85365d2708d0ac9e338c82722d5 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "registerMoneyStrong.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"contentStart\" class=\"container-fluid\" style=\"margin-top: 50px; background-color: #F5F5F5; padding: 20px;
border: 1px solid #E3E3E3;\">
      <div class=\"row-fluid\">

        <div class=\"span8\">

        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>

            ";
        // line 11
        if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()) != "")) {
            // line 12
            echo "                <div class=\"four columns imageholder\">
                    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
            echo "\">
                        <img style=\"width:100%;\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()), 757, 260), "html", null, true);
            echo "\">
                    </a>
                </div>
            ";
        }
        // line 18
        echo "
            ";
        // line 20
        echo "            ";
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "introduction", array())) {
            // line 21
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "introduction", array()), "html", null, true);
            echo "
            ";
        } elseif ($this->getAttribute(        // line 22
(isset($context["record"]) ? $context["record"] : null), "teaser", array())) {
            // line 23
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 25
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "excerpt", array(0 => 1000), "method"), "html", null, true);
            echo "</p>
            ";
        }
        // line 27
        echo "
            ";
        // line 29
        echo "            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video", array()))) {
            // line 30
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "video", array()), "responsive", array()), "html", null, true);
            echo "
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "
            [programmanagerMoneyStrong]

            
            ";
        // line 37
        $this->loadTemplate("_recordfooter.twig", "registerMoneyStrong.twig", 37)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 38
        echo "


            <p class=\"meta panel panel-default\">

                <!--Related Pages-->

                    ";
        // line 45
        $context["relatedrecords"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "related", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        // line 46
        echo "                    ";
        if ( !twig_test_empty((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null))) {
            // line 47
            echo "                    <h4><strong>RELATED PAGES:</strong></h4>
                    <ul class=\"list-inline\">
                    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 50
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    </ul>
                    ";
        }
        // line 54
        echo "
                <!--End of Related Pages-->


                ";
        // line 58
        $context["previous"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "previous", array(0 => "id"), "method");
        // line 59
        echo "                ";
        if ((isset($context["previous"]) ? $context["previous"] : null)) {
            // line 60
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "link", array()), "html", null, true);
            echo "\">&laquo; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title", array()), "html", null, true);
            echo "</a>
                ";
        }
        // line 62
        echo "                -
                ";
        // line 63
        $context["next"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "next", array(0 => "id"), "method");
        // line 64
        echo "                ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 65
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title", array()), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 67
        echo "            </p>

\t\t\t</div>

      <div class=\"span4\">
          <div class=\"well sidebar-nav\">
            
            ";
        // line 74
        $this->loadTemplate("_aside.twig", "registerMoneyStrong.twig", 74)->display($context);
        // line 75
        echo "
            

          </div><!--/.well -->
        </div><!--/span-->

    </div>
    <br>  

    </div>

    <hr>

    ";
        // line 88
        $this->loadTemplate("_footer.twig", "registerMoneyStrong.twig", 88)->display($context);
        // line 89
        echo "


";
    }

    public function getTemplateName()
    {
        return "registerMoneyStrong.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 89,  198 => 88,  183 => 75,  181 => 74,  172 => 67,  164 => 65,  161 => 64,  159 => 63,  156 => 62,  148 => 60,  145 => 59,  143 => 58,  137 => 54,  133 => 52,  122 => 50,  118 => 49,  114 => 47,  111 => 46,  109 => 45,  100 => 38,  98 => 37,  91 => 33,  88 => 32,  82 => 30,  79 => 29,  76 => 27,  70 => 25,  64 => 23,  62 => 22,  57 => 21,  54 => 20,  51 => 18,  44 => 14,  40 => 13,  37 => 12,  35 => 11,  30 => 9,  21 => 2,  19 => 1,);
    }
}
