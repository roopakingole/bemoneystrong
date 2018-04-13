<?php

/* _sub_searchbox.twig */
class __TwigTemplate_b05890a6fd12a4bf065ec23b193d4bfb352c5b04677ec78d39f5c406b512b740 extends Twig_Template
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
   <form class=\"navbar-form pull-right\" method=\"get\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "search\" id=\"searchform\" enctype=\"text/plain\">
        <input type=\"search\" class=\"search-query\"value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\" placeholder=\"Search\" name=\"search\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "_sub_searchbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
