<?php

/* @programmanager/form.twig */
class __TwigTemplate_6b2eb7b22f3e8859fc7aa1cab384f41b11e1ca21b016414ae554892e2f1298de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        if ((isset($context["invalid_form"]) ? $context["invalid_form"] : null)) {
            // line 50
            echo "\t";
            echo (isset($context["invalid_form"]) ? $context["invalid_form"] : null);
            echo "
";
        } elseif (        // line 51
(isset($context["success"]) ? $context["success"] : null)) {
            // line 52
            echo "\t<div class=\"alert alert-success\">
\t\t";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "
\t</div>
";
        } else {
            // line 56
            echo "\t<form action=";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo " method=\"post\" class=\"register\">
\t\t<br>
\t\t<div class='programName'>
\t\t    ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "program", array()), 'label');
            echo "
\t\t    ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "program", array()), 'errors');
            echo "
\t\t    ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "program", array()), 'widget');
            echo "
\t\t</div>
\t\t<hr>
\t\t<div class='personal_info'>
\t\t<table>
\t\t\t<label>Name<span class=\"gfield_required\">*</span></label>
\t\t\t<tr>
\t\t\t\t<td> <span>
\t\t\t\t\t    ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fName", array()), 'widget');
            echo "
\t\t\t\t\t    ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fName", array()), 'label', array("label_attr" => array("class" => "form_label_personal"), "label" => "First"));
            echo "
\t\t\t\t\t    ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fName", array()), 'errors');
            echo "
\t\t\t\t</span></td>
\t\t\t\t<td> <span>
\t\t\t\t    ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lName", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lName", array()), 'label', array("label_attr" => array("class" => "form_label_personal"), "label" => "Last"));
            echo "
\t\t\t\t    ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lName", array()), 'errors');
            echo "
\t\t\t\t</span> </td>
\t\t\t</tr>
\t\t\t<tr> <td> <br> </td> <td> <br> </td></tr>
\t\t\t<tr>
\t\t\t\t<td> <span>
\t\t\t\t    ";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'label');
            echo "
\t\t\t\t    ";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gender", array()), 'errors');
            echo "
\t\t\t\t</span> </td>
\t\t\t\t<td> <span>
\t\t\t\t    ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dob", array()), 'errors');
            echo "
\t\t\t\t    ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dob", array()), 'widget');
            echo "\t\t
\t\t\t\t    ";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dob", array()), 'label', array("label" => "Date of Birth"));
            echo "
\t\t\t\t</span> </td>
\t\t\t</tr>
\t\t</table>
\t\t</div>
\t\t<hr>
\t\t<div class='contact_info'>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t    ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'label');
            echo "
\t\t\t\t    ";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'errors');
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t    ";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
            echo "
\t\t\t\t    ";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
            echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t    ";
            // line 111
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address1", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address1", array()), 'label');
            echo "
\t\t\t\t    ";
            // line 113
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address1", array()), 'errors');
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t    ";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address2", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address2", array()), 'label');
            echo "
\t\t\t\t    ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address2", array()), 'errors');
            echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t</div>
\t\t<div class='city_info'>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t    ";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'label');
            echo "
\t\t\t\t    ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'errors');
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t    ";
            // line 132
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "state", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 133
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "state", array()), 'label');
            echo "
\t\t\t\t    ";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "state", array()), 'errors');
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t    ";
            // line 137
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), 'widget');
            echo "
\t\t\t\t    ";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), 'label');
            echo "
\t\t\t\t    ";
            // line 139
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip", array()), 'errors');
            echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t</div>
\t\t<hr>
\t\t<div class='registration_info'>
\t\t    <br>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t    ";
            // line 150
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget');
            echo "
\t\t\t\t\t    ";
            // line 151
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'label', array("label" => "Available Dates"));
            echo "
\t\t\t\t\t    ";
            // line 152
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t    ";
            // line 155
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timeSlot", array()), 'widget');
            echo "
\t\t\t\t\t    ";
            // line 156
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timeSlot", array()), 'label', array("label" => "Available Time"));
            echo "
\t\t\t\t\t    ";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timeSlot", array()), 'errors');
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<hr>
\t\t<div class='message'>
\t\t    ";
            // line 164
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget');
            echo "
\t\t    ";
            // line 165
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'label');
            echo "
\t\t    ";
            // line 166
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
            echo "
\t\t</div>
\t\t";
            // line 168
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
            echo "
\t\t<hr>
\t\t<div class='form_button'>
\t\t    <input type=\"submit\" name=\"submit\" align=\"center\"/>
\t    </div>
\t    <br>
\t</form>
";
        }
    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        // line 2
        echo "    <script>
        \$(function(){
            \$(\"#form_program\").change(function(){
                var data = {
                    program_id: \$(this).val()
                };

                \$.ajax({
                    type: 'post',
                    url: \"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("get_program_details");
        echo "\",
                    data: data,
                    success: function(data) {
                        var \$date_selector = \$('#form_date');

                        \$date_selector.html('<option value=\"S\">Select Date</option>');

                        for (var i=0, total = data.length; i < total; i++) {
                            \$date_selector.append('<option value=\"' + data[i].date_start + '\">' + data[i].date_start + '</option>');
                        }
                    }
                });
            });
            \$(\"#form_date\").change(function(){
                var data = {
                    date_id: \$(this).val(),
                    program_id: \$('#form_program').val()
                };

                \$.ajax({
                    type: 'post',
                    url: \"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("get_program_dayslots");
        echo "\",
                    data: data,
                    success: function(data) {
                        var \$time_selector = \$('#form_timeSlot');

                        \$time_selector.html('<option value=\"S\">Select Time</option>');

                        for (var i=0, total = data.length; i < total; i++) {
                            \$time_selector.append('<option value=\"' + data[i].time_start + '-' + data[i].time_end + '\">' + data[i].time_start + '-' + data[i].time_end + '</option>');
                        }
                    }
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@programmanager/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 32,  321 => 11,  310 => 2,  307 => 1,  294 => 168,  289 => 166,  285 => 165,  281 => 164,  271 => 157,  267 => 156,  263 => 155,  257 => 152,  253 => 151,  249 => 150,  235 => 139,  231 => 138,  227 => 137,  221 => 134,  217 => 133,  213 => 132,  207 => 129,  203 => 128,  199 => 127,  187 => 118,  183 => 117,  179 => 116,  173 => 113,  169 => 112,  165 => 111,  157 => 106,  153 => 105,  149 => 104,  143 => 101,  139 => 100,  135 => 99,  122 => 89,  118 => 88,  114 => 87,  108 => 84,  104 => 83,  100 => 82,  91 => 76,  87 => 75,  83 => 74,  77 => 71,  73 => 70,  69 => 69,  58 => 61,  54 => 60,  50 => 59,  43 => 56,  37 => 53,  34 => 52,  32 => 51,  27 => 50,  25 => 49,  22 => 48,  20 => 1,);
    }
}
