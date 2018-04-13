<?php

/* _macro/_files_path.twig */
class __TwigTemplate_e2da87d259823b2c9a10d64d7301bce21aa9a3738f9ee6ca983586c0ea296be3 extends Twig_Template
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
    }

    // line 1
    public function getfiles_path($__pathsegments__ = null, $__namespace__ = null, $__pathoptions__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pathsegments" => $__pathsegments__,
            "namespace" => $__namespace__,
            "pathoptions" => $__pathoptions__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["namespace_path"] = $this->env->getExtension('routing')->getPath("files", (isset($context["pathoptions"]) ? $context["pathoptions"] : null));
            // line 3
            echo "    <p>
        ";
            // line 4
            echo $this->env->getExtension('Bolt')->trans("Path:");
            echo "
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["namespace_path"]) ? $context["namespace_path"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
            echo "</a>

        ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pathsegments"]) ? $context["pathsegments"] : null));
            foreach ($context['_seq'] as $context["path"] => $context["segment"]) {
                // line 8
                echo "            /
            ";
                // line 9
                $context["pathoptions"] = twig_array_merge((isset($context["pathoptions"]) ? $context["pathoptions"] : null), array("path" => $context["path"], "namespace" => (isset($context["namespace"]) ? $context["namespace"] : null)));
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", (isset($context["pathoptions"]) ? $context["pathoptions"] : null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["segment"], "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </p>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macro/_files_path.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  61 => 10,  59 => 9,  56 => 8,  52 => 7,  45 => 5,  41 => 4,  38 => 3,  35 => 2,  21 => 1,);
    }
}
