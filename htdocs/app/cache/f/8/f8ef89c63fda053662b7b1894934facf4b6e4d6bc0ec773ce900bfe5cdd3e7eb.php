<?php

/* editcontent/_aside-save.twig */
class __TwigTemplate_f8ef89c63fda053662b7b1894934facf4b6e4d6bc0ec773ce900bfe5cdd3e7eb extends Twig_Template
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
        echo "<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"sidebarsavecontinuebutton\">
        <i class=\"fa fa-flag\"></i> ";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </button>

    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
        <span class=\"sr-only\">Toggle Dropdown</span>
    </button>

    <ul class=\"dropdown-menu\" role=\"menu\">
        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavebutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("Save & return to overview");
        echo "
            </button>
        </li>

        <li>
            <button type=\"submit\" class=\"btn btn-link\" id=\"sidebarsavenewbutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 20
        echo $this->env->getExtension('Bolt')->trans("Save & create new record");
        echo "
            </button>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  37 => 14,  23 => 3,  19 => 1,);
    }
}
