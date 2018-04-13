<?php

/* @contact/form.twig */
class __TwigTemplate_8351c1f3b4157dd193e612ee802e9987a67131b166431bb523efb43ea5de66d6 extends Twig_Template
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
        if ((isset($context["invalid_form"]) ? $context["invalid_form"] : null)) {
            // line 2
            echo "\t";
            echo (isset($context["invalid_form"]) ? $context["invalid_form"] : null);
            echo "
";
        } elseif (        // line 3
(isset($context["success"]) ? $context["success"] : null)) {
            // line 4
            echo "\t<div class=\"alert alert-success\">
\t\t";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "
\t</div>
";
        } else {
            // line 8
            echo "\t<form action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\" method=\"post\" class=\"contact\">
\t\t<div class='name'>
\t\t    ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
            echo "
\t\t    ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
            echo "
\t\t    ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
            echo "
\t\t</div>

\t\t<div class='email'>
\t\t    ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
            echo "
\t\t    ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
            echo "
\t\t    ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
            echo "
\t\t</div>

\t\t";
            // line 22
            echo "\t    <div class='last_name'>
\t\t    ";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'label');
            echo "
\t\t    ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'errors');
            echo "
\t\t    ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'widget');
            echo "
\t\t</div>
\t    
\t    <div class='subject'>
\t\t    ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'label');
            echo "
\t\t    ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'errors');
            echo "
\t\t    ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'widget', array("value" => (isset($context["value"]) ? $context["value"] : null)));
            echo "
\t\t</div>

\t\t<div class='message'>
\t\t    ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'label');
            echo "
\t\t    ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
            echo "
\t\t    ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget');
            echo "
\t\t</div>

\t\t";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
            echo "

\t    <input type=\"submit\" name=\"submit\" />
\t</form>
";
        }
    }

    public function getTemplateName()
    {
        return "@contact/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  113 => 37,  109 => 36,  105 => 35,  98 => 31,  94 => 30,  90 => 29,  83 => 25,  79 => 24,  75 => 23,  72 => 22,  66 => 18,  62 => 17,  58 => 16,  51 => 12,  47 => 11,  43 => 10,  37 => 8,  31 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
