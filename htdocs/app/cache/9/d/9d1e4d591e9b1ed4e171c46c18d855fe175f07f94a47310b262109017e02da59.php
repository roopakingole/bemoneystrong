<?php

/* _i_am_menu.twig */
class __TwigTemplate_9d1e4d591e9b1ed4e171c46c18d855fe175f07f94a47310b262109017e02da59 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "

<li class=\"iAm ";
            // line 4
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo "dropdown";
            } else {
                echo " index-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " first";
                }
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo " last";
                }
                if ($this->env->getExtension('Bolt')->current($context["item"])) {
                    echo " ";
                }
            }
            echo "\">
        <a href=\"";
            // line 5
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo "#";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "title", array(), "any", true, true)) {
                echo "title='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "'";
            }
            // line 6
            echo "           class='";
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo " ";
            } else {
                if ($this->getAttribute($context["item"], "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()), "html", null, true);
                }
            }
            echo "' ";
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo " ";
            }
            echo ">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            echo "

        </a>

        ";
            // line 11
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                // line 12
                echo "            <ul class=\"dropdown-menu\">
                ";
                // line 13
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "submenu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    echo "                    <li>
                        <a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "title", array(), "any", true, true)) {
                        echo "title='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                        echo "'";
                    }
                    echo ">
                            ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            </ul>
        ";
            }
            // line 22
            echo "    </li>


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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_i_am_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 22,  124 => 20,  114 => 16,  104 => 15,  101 => 14,  97 => 13,  94 => 12,  92 => 11,  85 => 7,  70 => 6,  58 => 5,  40 => 4,  36 => 2,  19 => 1,);
    }
}
