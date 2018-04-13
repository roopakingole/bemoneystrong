<?php

/* files/_files.twig */
class __TwigTemplate_da3b6d14b39eb747b117a1c9a9011ed92196f257b979b41d5950f0de0bf031de extends Twig_Template
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
        echo "<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.files");
        echo "</th>
            <th class=\"hidden-xs hidden-sm\">";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.size");
        echo "</th>
            <th class=\"hidden-xs hidden-sm\">";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("page.ckeditor-browse-server.modified");
        echo "</th>
            <th colspan=\"2\"></th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 13
            echo "            <tr>
                ";
            // line 15
            echo "                <td>
                    ";
            // line 16
            if (twig_in_filter($this->getAttribute($context["file"], "type", array()), array(0 => "jpeg", 1 => "jpg", 2 => "png", 3 => "gif"))) {
                // line 17
                echo "
                        <i class=\"fa fa-fw fa-file-image-o\"></i>

                        ";
                // line 20
                if ($this->getAttribute($context["file"], "readable", array())) {
                    // line 21
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($context["file"], "newpath", array()), 1000, 1000, "r"), "html", null, true);
                    echo "\"
                               class=\"magnific\"
                               title=\"Image: ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "\">
                                <b>";
                    // line 24
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 27
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo " </b>
                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 30
                echo "
                    ";
            } elseif (twig_in_filter($this->getAttribute(            // line 31
$context["file"], "type", array()), array(0 => "twig", 1 => "txt", 2 => "html", 3 => "md", 4 => "markdown", 5 => "json", 6 => "htm", 7 => "scss", 8 => "css", 9 => "less", 10 => "js", 11 => "yml"))) {
                // line 32
                echo "
                        <i class=\"fa fa-fw fa-file-code-o\"></i>

                        ";
                // line 35
                if ($this->getAttribute($context["file"], "readable", array())) {
                    // line 36
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => $this->getAttribute($context["file"], "newpath", array()))), "html", null, true);
                    echo "\">
                                <b>";
                    // line 37
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 40
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                        ";
                }
                // line 42
                echo "
                        ";
                // line 43
                if (( !$this->getAttribute($context["file"], "readable", array()) ||  !$this->getAttribute($context["file"], "writable", array()))) {
                    // line 44
                    echo "                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 46
                echo "
                    ";
            } else {
                // line 48
                echo "
                        <i class=\"fa fa-fw fa-link\"></i>

                        ";
                // line 51
                if ($this->getAttribute($context["file"], "readable", array())) {
                    // line 52
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">
                                <b>";
                    // line 53
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 56
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt')->shy($this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo " </b>
                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 59
                echo "                    ";
            }
            // line 60
            echo "                </td>
                ";
            // line 62
            echo "                <td style=\"min-width: 120px;\" class=\"hidden-xs hidden-sm\">
                    ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filesize", array()), "html", null, true);
            echo ".
                    ";
            // line 64
            if ($this->getAttribute($context["file"], "imagesize", array(), "any", true, true)) {
                // line 65
                echo "                       <br> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "imagesize", array()), "html", null, true);
                echo " px.
                    ";
            }
            // line 67
            echo "                </td>
                ";
            // line 69
            echo "                <td style=\"min-width: 140px;\" class=\"hidden-xs hidden-sm\">
                    <time class=\"moment\" datetime=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "modified", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "modified", array()), "html", null, true);
            echo "\">
                        ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "modified", array()), "html", null, true);
            echo "
                    </time>
                </td>
                ";
            // line 75
            echo "                <td class=\"listthumb\">
                    ";
            // line 76
            if ($this->getAttribute($context["file"], "imagesize", array(), "any", true, true)) {
                // line 77
                echo "                        ";
                $context["thumb"] = $this->env->getExtension('Bolt')->showImage($this->getAttribute($context["file"], "newpath", array()), 54, 40, "c");
                // line 78
                echo "                        <img ";
                echo twig_slice($this->env, (isset($context["thumb"]) ? $context["thumb"] : null), 5, (twig_length_filter($this->env, (isset($context["thumb"]) ? $context["thumb"] : null)) - 6));
                echo " alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->trans("Thumbnail"), "html_attr");
                echo "\">
                    ";
            }
            // line 80
            echo "                </td>
                ";
            // line 82
            echo "                <td class=\"actions\" style=\"min-width: 16px;\">

                    <div class=\"btn-group\">

                        ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "stackbutton", array(0 => $context["file"]), "method"), "html", null, true);
            echo "

                        ";
            // line 88
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()) != false)) {
                // line 89
                echo "                            <a class=\"btn dropdown-toggle btn-default btn-sm hidden-xs\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-info-circle\"></i>
                                ";
                // line 91
                echo $this->env->getExtension('Bolt')->trans("Options");
                echo "
                                <span class=\"caret\"></span>
                            </a>

                            <ul class=\"dropdown-menu pull-right hidden-xs\">
                                <li>
                                    <a href=\"#\"
                                       data-action=\"Bolt.files.renameFile('";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                echo "', this);\">

                                        <i class=\"fa fa-keyboard-o\"></i>
                                        ";
                // line 101
                echo $this->env->getExtension('Bolt')->trans("Rename %foldername%", array("%foldername%" => $this->getAttribute($context["file"], "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.deleteFile('";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "newpath", array()), "html", null, true);
                echo "', this);\">
                                        <i class=\"fa fa-ban\"></i>
                                        ";
                // line 107
                echo $this->env->getExtension('Bolt')->trans("Delete %filename%", array("%filename%" => $this->getAttribute($context["file"], "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.duplicateFile('";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "newpath", array()), "html", null, true);
                echo "')\">
                                        <i class=\"fa fa-files-o\"></i>
                                        ";
                // line 113
                echo $this->env->getExtension('Bolt')->trans("Duplicate %filename%", array("%filename%" => $this->getAttribute($context["file"], "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a class=\"nolink\">
                                        ";
                // line 119
                echo $this->env->getExtension('Bolt')->trans("Permissions");
                echo ":
                                        <strong><code>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "permissions", array()), "html", null, true);
                echo "</code></strong>
                                    </a>
                                </li>
                            </ul>
                        ";
            }
            // line 125
            echo "                    </div>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "files/_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 130,  294 => 125,  286 => 120,  282 => 119,  273 => 113,  266 => 111,  259 => 107,  252 => 105,  245 => 101,  235 => 98,  225 => 91,  221 => 89,  219 => 88,  214 => 86,  208 => 82,  205 => 80,  197 => 78,  194 => 77,  192 => 76,  189 => 75,  183 => 71,  177 => 70,  174 => 69,  171 => 67,  165 => 65,  163 => 64,  159 => 63,  156 => 62,  153 => 60,  150 => 59,  143 => 56,  137 => 53,  132 => 52,  130 => 51,  125 => 48,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  106 => 40,  100 => 37,  95 => 36,  93 => 35,  88 => 32,  86 => 31,  83 => 30,  76 => 27,  70 => 24,  66 => 23,  60 => 21,  58 => 20,  53 => 17,  51 => 16,  48 => 15,  45 => 13,  41 => 12,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
