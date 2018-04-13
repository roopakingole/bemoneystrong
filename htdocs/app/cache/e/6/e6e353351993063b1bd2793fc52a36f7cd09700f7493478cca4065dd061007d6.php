<?php

/* entry.twig */
class __TwigTemplate_e6e353351993063b1bd2793fc52a36f7cd09700f7493478cca4065dd061007d6 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "entry.twig", 1)->display($context);
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

            ";
        // line 35
        $this->loadTemplate("_recordfooter.twig", "entry.twig", 35)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 36
        echo "


            <p class=\"meta panel panel-default\">

                <!--Related Pages-->

                    ";
        // line 43
        $context["relatedrecords"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "related", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        // line 44
        echo "                    ";
        if ( !twig_test_empty((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null))) {
            // line 45
            echo "                    <h4><strong>RELATED PAGES:</strong></h4>
                    <ul class=\"list-inline\">
                    ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 48
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
            // line 50
            echo "                    </ul>
                    ";
        }
        // line 52
        echo "
                <!--End of Related Pages-->


                ";
        // line 56
        $context["previous"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "previous", array(0 => "id"), "method");
        // line 57
        echo "                ";
        if ((isset($context["previous"]) ? $context["previous"] : null)) {
            // line 58
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "link", array()), "html", null, true);
            echo "\">&laquo; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title", array()), "html", null, true);
            echo "</a>
                ";
        }
        // line 60
        echo "                -
                ";
        // line 61
        $context["next"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "next", array(0 => "id"), "method");
        // line 62
        echo "                ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 63
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title", array()), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 65
        echo "            </p>

\t\t\t</div>

      <div class=\"span4\">
          <div class=\"well sidebar-nav\">
            
            ";
        // line 72
        $this->loadTemplate("_aside.twig", "entry.twig", 72)->display($context);
        // line 73
        echo "
            

          </div><!--/.well -->
        </div><!--/span-->

    </div>
    <br>  

    </div>

    <hr>

    ";
        // line 86
        $this->loadTemplate("_footer.twig", "entry.twig", 86)->display($context);
        // line 87
        echo "


";
    }

    public function getTemplateName()
    {
        return "entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 87,  196 => 86,  181 => 73,  179 => 72,  170 => 65,  162 => 63,  159 => 62,  157 => 61,  154 => 60,  146 => 58,  143 => 57,  141 => 56,  135 => 52,  131 => 50,  120 => 48,  116 => 47,  112 => 45,  109 => 44,  107 => 43,  98 => 36,  96 => 35,  91 => 33,  88 => 32,  82 => 30,  79 => 29,  76 => 27,  70 => 25,  64 => 23,  62 => 22,  57 => 21,  54 => 20,  51 => 18,  44 => 14,  40 => 13,  37 => 12,  35 => 11,  30 => 9,  21 => 2,  19 => 1,);
    }
}
