<?php

/* record.twig */
class __TwigTemplate_c987ab08aa9394bb348d4d80349a8e5897dac2fd9be393d44e1281b63631194d extends Twig_Template
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
        $this->loadTemplate("_header.twig", "record.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container-fluid\" style=\"margin-top: 100px;\">
      <div class=\"row-fluid\">

        <div class=\"span8\">

        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>

            ";
        // line 10
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle", array())) {
            // line 11
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "subtitle", array()), "html", null, true);
            echo "</h3>
            ";
        }
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "values", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 15
            echo "
";
            // line 16
            if (!twig_in_filter($context["key"], array(0 => "id", 1 => "slug", 2 => "datecreated", 3 => "datechanged", 4 => "datepublish", 5 => "datedepublish", 6 => "username", 7 => "status", 8 => "title", 9 => "subtitle", 10 => "ownerid", 11 => "templatefields"))) {
                // line 17
                echo "

            ";
                // line 19
                if ((($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "image") && ($context["value"] != ""))) {
                    // line 20
                    echo "
                ";
                    // line 21
                    if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()) != "")) {
                        // line 22
                        echo "                    <div class=\"twelve columns imageholder\">
                        <a href=\"";
                        // line 23
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($context["value"]), "html", null, true);
                        echo "\">
                            <img src=\"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($context["value"], 640, 480), "html", null, true);
                        echo "\">
                        </a>
                    </div>
                ";
                    }
                    // line 28
                    echo "

            ";
                } elseif ((($this->getAttribute(                // line 30
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "imagelist") && ($context["value"] != ""))) {
                    // line 31
                    echo "
                ";
                    // line 36
                    echo "
                ";
                    // line 37
                    $context["list"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"]);
                    // line 38
                    echo "
                ";
                    // line 39
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 40
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["item"], "filename", array())), "html", null, true);
                        echo "\">
                        <img src=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["item"], "filename", array()), 100, 100), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                        echo "\">
                    </a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "
            ";
                } elseif ((($this->getAttribute(                // line 45
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "video") && ($this->getAttribute($context["value"], "responsive", array()) != ""))) {
                    // line 46
                    echo "
                ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "responsive", array()), "html", null, true);
                    echo "

            ";
                } elseif ((($this->getAttribute(                // line 49
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "geolocation") && ($this->getAttribute($context["value"], "latitude", array()) != ""))) {
                    // line 50
                    echo "
                <div class='imageholder-wide'>
                    <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "latitude", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "longitude", array()), "html", null, true);
                    echo "&amp;zoom=14&amp;size=617x300&amp;sensor=false&amp;markers=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "latitude", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "longitude", array()), "html", null, true);
                    echo "\">
                </div>
                <p>";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "formatted_address", array()), "html", null, true);
                    echo "</p>

            ";
                } elseif (twig_in_filter($this->getAttribute(                // line 56
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method"), array(0 => "html", 1 => "markdown", 2 => "textarea"))) {
                    // line 57
                    echo "
                ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"]), "html", null, true);
                    echo "

            ";
                } elseif (($this->getAttribute(                // line 60
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "select")) {
                    // line 61
                    echo "
                ";
                    // line 63
                    echo "                <p><strong>";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": </strong>
                    ";
                    // line 64
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"]), ", "), "html", null, true);
                    echo "
                </p>

            ";
                } elseif ((!twig_in_filter($this->getAttribute(                // line 67
(isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method"), array(0 => "templateselect")) && ($context["value"] != ""))) {
                    // line 68
                    echo "
                <p><strong>";
                    // line 69
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": </strong>
                    ";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), $context["key"]), "html", null, true);
                    echo "
                </p>

            ";
                }
                // line 74
                echo "

            ";
            }
            // line 77
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
            ";
        // line 80
        $this->loadTemplate("_recordfooter.twig", "record.twig", 80)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 81
        echo "
            <p class=\"meta\">
                ";
        // line 83
        $context["previous"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "previous", array(0 => "id"), "method");
        // line 84
        echo "                ";
        if ((isset($context["previous"]) ? $context["previous"] : null)) {
            // line 85
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "link", array()), "html", null, true);
            echo "\">&laquo; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title", array()), "html", null, true);
            echo "</a>
                ";
        }
        // line 87
        echo "                -
                ";
        // line 88
        $context["next"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "next", array(0 => "id"), "method");
        // line 89
        echo "                ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 90
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title", array()), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 92
        echo "            </p>

            ";
        // line 94
        $context["relatedrecords"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "related", array(), "method");
        // line 95
        echo "            ";
        if ( !twig_test_empty((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null))) {
            // line 96
            echo "                <p class=\"meta\">Related content:
                <ul>
                    ";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 99
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                </ul>
                </p>
            ";
        }
        // line 104
        echo "\t\t\t</div>

            <div class=\"span4\">
          <div class=\"well sidebar-nav\">
            
            ";
        // line 109
        $this->loadTemplate("_aside.twig", "record.twig", 109)->display($context);
        // line 110
        echo "
          </div><!--/.well -->
        </div><!--/span-->

    </div>
    <br>   <br>
    <hr>

    </div>

    <hr>

    ";
        // line 122
        $this->loadTemplate("_footer.twig", "record.twig", 122)->display($context);
    }

    public function getTemplateName()
    {
        return "record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 122,  287 => 110,  285 => 109,  278 => 104,  273 => 101,  262 => 99,  258 => 98,  254 => 96,  251 => 95,  249 => 94,  245 => 92,  237 => 90,  234 => 89,  232 => 88,  229 => 87,  221 => 85,  218 => 84,  216 => 83,  212 => 81,  210 => 80,  207 => 79,  200 => 77,  195 => 74,  188 => 70,  184 => 69,  181 => 68,  179 => 67,  173 => 64,  168 => 63,  165 => 61,  163 => 60,  158 => 58,  155 => 57,  153 => 56,  148 => 54,  137 => 52,  133 => 50,  131 => 49,  126 => 47,  123 => 46,  121 => 45,  118 => 44,  105 => 41,  100 => 40,  96 => 39,  93 => 38,  91 => 37,  88 => 36,  85 => 31,  83 => 30,  79 => 28,  72 => 24,  68 => 23,  65 => 22,  63 => 21,  60 => 20,  58 => 19,  54 => 17,  52 => 16,  49 => 15,  45 => 14,  42 => 13,  36 => 11,  34 => 10,  29 => 8,  21 => 2,  19 => 1,);
    }
}
