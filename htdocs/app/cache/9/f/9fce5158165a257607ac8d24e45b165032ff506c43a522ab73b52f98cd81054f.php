<?php

/* editcontent/fields/_slug.twig */
class __TwigTemplate_9fce5158165a257607ac8d24e45b165032ff506c43a522ab73b52f98cd81054f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("_base/_fieldset.twig", "editcontent/fields/_slug.twig", 20);
        $this->blocks = array(
            'fieldset' => array($this, 'block_fieldset'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["option"] = array("uses" => ((twig_test_iterable((($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array()), array())) : (array())))) ? ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array()), array())) : (array()))) : (array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array())))), "viewless" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false)));
        // line 10
        $context["attr_slug"] = array("class" => "form-control", "id" =>         // line 12
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 13
(isset($context["name"]) ? $context["name"] : null), "type" => "hidden", "value" => $this->getAttribute($this->getAttribute(        // line 15
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"));
        // line 22
        $context["fieldset"] = array("slug" => array("contentId" => $this->getAttribute($this->getAttribute(        // line 24
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()), "isEmpty" => ($this->getAttribute($this->getAttribute(        // line 25
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method") == ""), "key" =>         // line 26
(isset($context["key"]) ? $context["key"] : null), "slug" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
(isset($context["context"]) ? $context["context"] : null), "content", array()), "contenttype", array()), "slug", array()), "uses" => $this->getAttribute(        // line 28
(isset($context["option"]) ? $context["option"] : null), "uses", array())));
        // line 20
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_fieldset($context, array $blocks = array())
    {
        // line 33
        echo "    <label class=\"col-sm-3 control-label\">";
        echo (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "viewless", array())) ? ($this->env->getExtension('Bolt')->trans("Unique Alias")) : ($this->env->getExtension('Bolt')->trans("field.slug.permalink")));
        echo ":</label>
    <div class=\"col-sm-9\">
        <div class=\"input-group input-group-sm locked\">
            <span class=\"input-group-addon\">/";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "contenttype", array()), "singular_slug", array()), "html", null, true);
        echo "/<em>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "html", null, true);
        echo "</em></span>
            <input";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_slug"]) ? $context["attr_slug"] : null)), "method"), "html", null, true);
        echo ">
            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default lock\"><i class=\"fa fa-fw\"></i></button>
                <button type=\"button\" class=\"btn btn-default edit\"><i class=\"fa fa-fw fa-pencil\"></i></button>
            </span>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_slug.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 37,  55 => 36,  48 => 33,  45 => 32,  41 => 20,  39 => 28,  38 => 27,  37 => 26,  36 => 25,  35 => 24,  34 => 22,  32 => 15,  31 => 13,  30 => 12,  29 => 10,  27 => 5,  26 => 4,  25 => 3,  11 => 20,);
    }
}
