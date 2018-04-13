<?php

/* _recordfooter.twig */
class __TwigTemplate_da9849a98d8cb602d6415a090fa2607ffdcc7d1e2819a983000ccbf8efbeb46d extends Twig_Template
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
        // line 2
        echo "<h6>
    Written by <em>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "user", array()), "displayname", array()), "html", null, true);
        echo "</em> on ";
        echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "datepublish", array()), "%A %B %e, %Y");
        echo " <br>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link", array()), "html", null, true);
        echo "\">Permalink</a> -
    ";
        // line 7
        echo "    ";
        $this->loadTemplate("_sub_taxonomylinks.twig", "_recordfooter.twig", 7)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 8
        echo "</h6>
";
    }

    public function getTemplateName()
    {
        return "_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  32 => 7,  28 => 4,  22 => 3,  19 => 2,);
    }
}
