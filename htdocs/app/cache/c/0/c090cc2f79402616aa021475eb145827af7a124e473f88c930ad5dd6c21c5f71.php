<?php

/* _sponsors2.twig */
class __TwigTemplate_c090cc2f79402616aa021475eb145827af7a124e473f88c930ad5dd6c21c5f71 extends Twig_Template
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
        echo "
<div class=\"sponsor\" >
      <div class=\"container panel panel-default\" style=\"border-color:transparent\">
  \t\t\t<!--<div class=\"panel-body\">
  \t\t\t<span class=\"glyphicon glyphicon-bookmark label label-info\"> PLATINUM</span>
  \t\t\t</div>-->
\t\t\t<div class=\"row\">
\t\t\t  <ul class=\"list-inline\">
  \t\t\t\t<!-- Sponsor Image loader -->
 \t\t\t\t";
        // line 10
        $template_storage = new Bolt\Storage($context['app']);
        $context['sponsor'] =         $template_storage->getContent("/sponsor/platinum", array() );
        // line 11
        echo "
 \t\t\t\t\t";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "imagelist", array())) > 0)) {
            // line 13
            echo "
\t\t\t\t\t\t    ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sponsor"]) ? $context["sponsor"] : null), "imagelist", array()));
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
                // line 15
                echo "\t\t\t\t\t\t    <li class=\"";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "first ";
                }
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo "last ";
                }
                echo "\">
\t\t\t\t\t\t\t<div id=\"logoimage\"> 
\t\t\t\t\t\t      <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "\" target=\"_blank\">
\t\t\t\t\t\t      \t<img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["image"], "filename", array()), 400, 240), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t      </a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <span class=\"glyphicon glyphicon-bookmark label label-info\">PLATINUM</span>
    \t\t\t\t\t\t<!-- <div id=\"badgeimage\"> <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
                echo "/img/Platinum.png\"> </div> -->
\t\t\t\t\t\t      <!-- <h5>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "</h5> -->

\t\t\t\t\t\t    </li>
\t\t\t                
\t\t\t\t\t\t    ";
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
            // line 28
            echo "\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t<!-- End of Sponsor Image loader -->
\t\t\t\t<!-- Sponsor Image loader -->
 \t\t\t\t";
        // line 31
        $template_storage = new Bolt\Storage($context['app']);
        $context['gold'] =         $template_storage->getContent("/sponsor/gold", array() );
        // line 32
        echo "
 \t\t\t\t\t";
        // line 33
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gold"]) ? $context["gold"] : null), "imagelist", array())) > 0)) {
            // line 34
            echo "\t\t\t\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gold"]) ? $context["gold"] : null), "imagelist", array()));
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
                // line 35
                echo "\t\t\t\t\t\t    <li class=\"";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "first ";
                }
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo "last ";
                }
                echo "\">
\t\t\t\t\t\t    <div id=\"logoimage\"> 
\t\t\t\t\t\t      <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "\" target=\"_blank\">
\t\t\t\t\t\t      \t<img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["image"], "filename", array()), 400, 240), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t      </a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t      <span class=\"glyphicon glyphicon-bookmark label label-warning\">GOLD</span>
\t\t\t\t\t\t      <!-- <h5>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "</h5> -->

\t\t\t\t\t\t    </li>

\t\t\t\t\t\t    ";
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
            // line 47
            echo "\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t<!-- End of Sponsor Image loader -->
\t\t\t\t<!-- Sponsor Image loader -->
 \t\t\t\t";
        // line 50
        $template_storage = new Bolt\Storage($context['app']);
        $context['silver'] =         $template_storage->getContent("/sponsor/silver", array() );
        // line 51
        echo "
 \t\t\t\t\t";
        // line 52
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["silver"]) ? $context["silver"] : null), "imagelist", array())) > 0)) {
            // line 53
            echo "\t\t\t\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["silver"]) ? $context["silver"] : null), "imagelist", array()));
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
                // line 54
                echo "\t\t\t\t\t\t    <li class=\"";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "first ";
                }
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo "last ";
                }
                echo "\">
\t\t\t\t\t\t    <div id=\"logoimage\"> 
\t\t\t\t\t\t      <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "\" target=\"_blank\">
\t\t\t\t\t\t      \t<img src=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["image"], "filename", array()), 400, 240), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t      </a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <span class=\"glyphicon glyphicon-bookmark label label-default\">SILVER</span>
\t\t\t\t\t\t      <!-- <h5>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "</h5> -->

\t\t\t\t\t\t    </li>

\t\t\t\t\t\t    ";
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
            // line 66
            echo "\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t<!-- End of Sponsor Image loader -->

\t\t\t\t</div>
\t\t\t  </ul>
\t\t\t</div>

\t\t\t<div class=\"container-fluid\"><a href=\"/need-help/need-help/\">Want to be a sponsor?</a></div>

\t\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_sponsors2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 67,  257 => 66,  238 => 61,  229 => 57,  225 => 56,  214 => 54,  196 => 53,  194 => 52,  191 => 51,  188 => 50,  184 => 48,  181 => 47,  162 => 42,  153 => 38,  149 => 37,  138 => 35,  120 => 34,  118 => 33,  115 => 32,  112 => 31,  108 => 29,  105 => 28,  86 => 23,  82 => 22,  73 => 18,  69 => 17,  58 => 15,  41 => 14,  38 => 13,  36 => 12,  33 => 11,  30 => 10,  19 => 1,);
    }
}
