<?php

/* files/files.twig */
class __TwigTemplate_c0f571b3e410c6f123c18fd4ca66b8c15385113e28d8a25a561ed33cab02f3cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "files/files.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "files/files.twig", 3);
        // line 4
        $context["__internal_9ffd62dd31992a79bd962ccf1a2b84f2c282c0c0b2acd81b3a0ca0437e6f6cbd"] = $this->loadTemplate("_macro/_files_path.twig", "files/files.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/FileManagement";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Files");
    }

    // line 11
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()) . "/") . $this->env->getExtension('Bolt')->last(twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array())))), "html", null, true);
    }

    // line 13
    public function block_page_main($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("files.msg.create_folder", $this->env->getExtension('Bolt')->trans("Please enter a new folder name")), "html", null, true);
        echo "
    ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "folders", array())) > 0)) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("files.msg.rename_folder", $this->env->getExtension('Bolt')->trans("Please enter a new folder name!")), "html", null, true);
            echo "
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("files.msg.delete_folder", $this->env->getExtension('Bolt')->trans("Do you really want to delete %FOLDERNAME%?")), "html", null, true);
            echo "
    ";
        }
        // line 20
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array())) > 0)) {
            // line 21
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("files.msg.rename_file", $this->env->getExtension('Bolt')->trans("Please enter a new file name!")), "html", null, true);
            echo "
        ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("files.msg.delete_file", $this->env->getExtension('Bolt')->trans("Are you sure you want to delete %FILENAME%?")), "html", null, true);
            echo "
    ";
        }
        // line 24
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">

            ";
        // line 28
        echo $context["__internal_9ffd62dd31992a79bd962ccf1a2b84f2c282c0c0b2acd81b3a0ca0437e6f6cbd"]->getfiles_path($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), array("path" => "", "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array())));
        echo "

            ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "folders", array())) > 0)) {
            // line 31
            echo "                ";
            $this->loadTemplate("files/_folders.twig", "files/files.twig", 31)->display($context);
            // line 32
            echo "            ";
        }
        // line 33
        echo "
            <p>
                <a href=\"#\" class=\"btn btn-default\"
                   data-action=\"Bolt.files.createFolder('";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
        echo "',
                                                    '";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->last(twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()))), "html", null, true);
        echo "',
                                                    this);\">
                    <i class=\"fa fa-fw fa-plus\"></i>
                    ";
        // line 40
        echo $this->env->getExtension('Bolt')->trans("Create folder");
        echo "
                </a>
            </p>

            ";
        // line 44
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array())) > 0)) {
            // line 45
            echo "                ";
            $this->loadTemplate("files/_files.twig", "files/files.twig", 45)->display($context);
            // line 46
            echo "            ";
        }
        // line 47
        echo "
            ";
        // line 49
        echo "            ";
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()) != false)) {
            // line 50
            echo "                ";
            $this->loadTemplate("files/_upload.twig", "files/files.twig", 50)->display($context);
            // line 51
            echo "            ";
        } else {
            // line 52
            echo "                <p><i class=\"fa fa-fw fa-exclamation-sign\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Uploading to this folder is not allowed.");
            echo "</p>
            ";
        }
        // line 54
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "files/files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 54,  150 => 52,  147 => 51,  144 => 50,  141 => 49,  138 => 47,  135 => 46,  132 => 45,  130 => 44,  123 => 40,  117 => 37,  113 => 36,  108 => 33,  105 => 32,  102 => 31,  100 => 30,  95 => 28,  89 => 24,  84 => 22,  79 => 21,  76 => 20,  71 => 18,  66 => 17,  64 => 16,  60 => 15,  57 => 14,  54 => 13,  48 => 11,  42 => 10,  36 => 8,  32 => 6,  30 => 4,  28 => 3,  11 => 6,);
    }
}
