<?php

/* _sub_menu.twig */
class __TwigTemplate_411e978ec36082fdb858a91a2f5c73cb8fc00de2f34b09ee59edb9280b80b145 extends Twig_Template
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


<li class=\"";
            // line 5
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
                    echo " active";
                }
            }
            echo "\">

        <a href=\"";
            // line 7
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
            // line 8
            echo "           class='";
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo "dropdown-toggle";
            } else {
                if ($this->getAttribute($context["item"], "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()), "html", null, true);
                }
            }
            echo "' ";
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo "data-toggle=\"dropdown\" href=\"#\"";
            }
            echo ">

            ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            echo "


        </a>

        ";
            // line 15
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                // line 16
                echo "            <ul class=\"dropdown-menu\">
                ";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "submenu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 18
                    echo "                    <li>
                        <a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "title", array(), "any", true, true)) {
                        echo "title='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                        echo "'";
                    }
                    echo ">
                            ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "
                            
                        </a>
                            

                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "            </ul>
        ";
            }
            // line 29
            echo "
            

    </li>

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
        return "_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 29,  131 => 27,  118 => 20,  108 => 19,  105 => 18,  101 => 17,  98 => 16,  96 => 15,  88 => 10,  72 => 8,  60 => 7,  41 => 5,  36 => 2,  19 => 1,);
    }
}
