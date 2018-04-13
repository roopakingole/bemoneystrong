<?php

/* _aside.twig */
class __TwigTemplate_b64a8f1c5941d8ea484fd43ce07b21ed636fe5100389323d66b273b5015b858c extends Twig_Template
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
        echo "<!-- Sidebar -->

<aside class=\"four columns\">

<!--
    <div class=\"panel\">
        ";
        // line 9
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['about'] =         $template_storage->getContent("page/about", array() );
        // line 10
        echo "
        ";
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["about"]) ? $context["about"] : null), "title", array(), "any", true, true)) {
            // line 14
            echo "
            <h5>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "title", array()), "html", null, true);
            echo "</h5>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "teaser", array()), "html", null, true);
            echo "

            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "link", array()), "html", null, true);
            echo "\">Read more &raquo;</a>

        ";
        } else {
            // line 21
            echo "
        

           <div id=\"events-div\" class=\"\">


            <!--";
            // line 27
            $template_storage = new Bolt\Storage($context['app']);
            $context['asidetitle'] =             $template_storage->getContent("/aside/were-here-to-help", array() );
            // line 28
            echo "
            <h5>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asidetitle"]) ? $context["asidetitle"] : null), "title", array()), "html", null, true);
            echo "</h4>

            <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asidetitle"]) ? $context["asidetitle"] : null), "teaser", array()), "html", null, true);
            echo "</p> -->
<!--            ";
            // line 32
            $template_storage = new Bolt\Storage($context['app']);
            $context['asideurls'] =             $template_storage->getContent("/aside", array() );
            echo " 
            <!-- ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->printDump((isset($context["asideurls"]) ? $context["asideurls"] : null)), "html", null, true);
            echo " -->
<!--            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["asideurls"]) ? $context["asideurls"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
                // line 35
                echo "              ";
                // line 36
                echo "              ";
                // line 37
                echo "
              ";
                // line 38
                $template_storage = new Bolt\Storage($context['app']);
                $context['asidetitle'] =                 $template_storage->getContent((isset($context["ct"]) ? $context["ct"] : null), array() );
                // line 39
                echo "
              <a href=\"/aside/";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["ct"], "slug", array()), "html", null, true);
                echo "\"><h4><span class=\"glyphicon glyphicon-bullhorn\">&nbsp";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ct"], "title", array()), "html", null, true);
                echo "</span></h5></a>

              <p>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["ct"], "teaser", array()), "html", null, true);
                echo "</p>        
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            <!--
            <iframe id=\"\" src=\"http://moneywisebc.org/aside/were-here-to-help/\" width=\"100%\" height=\"240px\">
            <p>Your browser does not support iframes.</p>
            </iframe>
            -->
<!--          </div>
           
        ";
        }
        // line 52
        echo "
    </div>
-->
    ";
        // line 63
        echo "

    ";
        // line 66
        echo "    ";
        // line 67
        echo "


        <h4>Recent Articles</h4>
        ";
        // line 71
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("topics/latest/2", array() );
        // line 72
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 73
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\"><h5><span class=\"glyphicon glyphicon-bullhorn\">&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</span></h5></a>
                  <p>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "teaser", array()), "html", null, true);
            echo "</p> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        <!--<p><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "slug", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "name", array()), "html", null, true);
        echo " overview &raquo;</a></p> -->

        ";
        // line 78
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("events/latest/2", array() );
        // line 79
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 80
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\"><h5><span class=\"glyphicon glyphicon-bullhorn\">&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</span></h5></a>
                  <p>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "teaser", array()), "html", null, true);
            echo "</p> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("newsletter/latest/2", array() );
        // line 84
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 85
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\"><h5><span class=\"glyphicon glyphicon-bullhorn\">&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</span></h5></a>
                  <p>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "teaser", array()), "html", null, true);
            echo "</p> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("pages/latest/2", array() );
        // line 89
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 90
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\"><h5><span class=\"glyphicon glyphicon-bullhorn\">&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</span></h5></a>
                  <p>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "teaser", array()), "html", null, true);
            echo "</p> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "


    <!--";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            // line 97
            echo "
        ";
            // line 98
            $template_storage = new Bolt\Storage($context['app']);
            $context['records'] =             $template_storage->getContent(($this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "slug", array()) . "/latest/5"), array() );
            // line 99
            echo "
        <h5>Recent ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["ct"], "name", array()), "html", null, true);
            echo "</h5>
        <ul>
            ";
            // line 102
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 103
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
                echo "</a></li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 105
                echo "                <li>No recent ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ct"], "name", array()), "html", null, true);
                echo ".</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "        </ul>
        <p><a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["ct"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ct"], "name", array()), "html", null, true);
            echo " overview &raquo;</a></p>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo " -->


</aside>

<!-- End Sidebar -->
";
    }

    public function getTemplateName()
    {
        return "_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 111,  299 => 108,  296 => 107,  287 => 105,  277 => 103,  272 => 102,  267 => 100,  264 => 99,  261 => 98,  258 => 97,  254 => 96,  249 => 93,  241 => 91,  234 => 90,  229 => 89,  225 => 88,  217 => 86,  210 => 85,  205 => 84,  201 => 83,  193 => 81,  186 => 80,  181 => 79,  178 => 78,  169 => 76,  161 => 74,  154 => 73,  149 => 72,  146 => 71,  140 => 67,  138 => 66,  134 => 63,  129 => 52,  119 => 44,  111 => 42,  104 => 40,  101 => 39,  98 => 38,  95 => 37,  93 => 36,  91 => 35,  87 => 34,  83 => 33,  78 => 32,  74 => 31,  69 => 29,  66 => 28,  63 => 27,  55 => 21,  49 => 18,  44 => 16,  40 => 15,  37 => 14,  34 => 13,  31 => 10,  27 => 9,  19 => 1,);
    }
}
