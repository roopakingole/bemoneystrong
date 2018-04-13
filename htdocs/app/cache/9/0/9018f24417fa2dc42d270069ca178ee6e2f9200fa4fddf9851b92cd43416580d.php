<?php

/* _calendar2.twig */
class __TwigTemplate_9018f24417fa2dc42d270069ca178ee6e2f9200fa4fddf9851b92cd43416580d extends Twig_Template
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
        echo "<div class=\"panel-group\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <div class=\"well well-sm\" style=\"background-image: linear-gradient(to bottom, #1D2F3E 0px, #1D2F3E 100%); color: #C9E1C1;\">
        <table width=100%>
        <tr>
        <td>
            <a style=\"color:#C9E1C1\" data-toggle=\"collapse\" href=\"#collapse1\"><h3><strong>&nbsp;<span class=\"glyphicon glyphicon-calendar\"></span> Calendar</strong></h3></a>
            </td>
            <td width=20% align=right>
            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"collapse\" data-target=\"#collapse1\">
                  <span class=\"glyphicon glyphicon-collapse-down\"></span> Open
            </button>
            </td>
            </tr>
            </table>
        </div>
      </div>
      <div id=\"collapse1\" class=\"panel-collapse collapse\">
        <div class=\"panel-body\">
             <iframe src=\"https://calendar.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;height=480&amp;wkst=1&amp;hl=en&amp;bgcolor=%23FFFFFF&amp;src=bemoneystrong1%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York\" style=\"border-width:0\" width=\"100%\" height=\"480\" frameborder=\"0\" scrolling=\"no\"></iframe>
        </div>
        <div class=\"container\" style=\"background-color: #1D2F3E; width:99%;\">
            <div class=\"col-sm-4\" style=\"color: #C9E1C1;\"> 
                <h4><a href=\"/need-help/need-help/\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp;Want To Add An Event?</a></h4>
            </div>
            <div class=\"col-sm-4\"></div>
            <div class=\"col-sm-4\" style=\"color: #C9E1C1;\"> 
                <h4 class=\"pull-right\"><p>Click Above To Add This Calendar &nbsp;<span class=\"glyphicon glyphicon-hand-up\"></span></p></h4>
            </div>
        </div>
      </div>
    </div>
</div>

<script>
\$(document).ready(function(){
  \$(\"#collapse1\").on(\"hide.bs.collapse\", function(){
    \$(\".btn\").html('<span class=\"glyphicon glyphicon-collapse-down\"></span> Open');
  });
  \$(\"#collapse1\").on(\"show.bs.collapse\", function(){
    \$(\".btn\").html('<span class=\"glyphicon glyphicon-collapse-up\"></span> Close');
  });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "_calendar2.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
