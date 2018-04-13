<?php

/* _footer.twig */
class __TwigTemplate_1d746e1280b5bce65e11ac1acd5aee011c2330a63e682ad38b6e6807e9966e82 extends Twig_Template
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
        echo "      <!-- FOOTER -->
      <footer style=\"text-align: center; margin-top: 30px;\">
      <div class=\"container\"><h4><p class=\"text-center\">Sponsors:</p></h4></div>


      \t\t<!--  '_sponsors.twig'  -->
          ";
        // line 7
        $this->loadTemplate("_sponsors2.twig", "_footer.twig", 7)->display($context);
        // line 8
        echo "
        <p class=\"text-center\" style=\"margin-right: 10px;\"><a href=\"#\">Back to top</a></p>

        <br/>
        <div class=\"footer-wrapper\">
        <div class=\"container\">
        <table style=\"width:100%\">
          <tr style=\"text-align:center\">
            <th style=\"text-align:center; width:25%\"> &nbsp </th>
            <th style=\"text-align:center; width:25%\"> About Us </th>
            <th style=\"text-align:center; width:25%\"> Social </th>
            <th style=\"text-align:center; width:25%\"> &nbsp </th>
          </tr>  
          <tr>
            <td class=\"footer-brand\">
              <!-- <a class=\"brand\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "general", array()), "sitename", array()), "html", null, true);
        echo "<img src=\"../files/bcflclogo.png\"/></a> -->
              <a class=\"brand\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "general", array()), "sitename", array()), "html", null, true);
        echo "<img src=\"../files/Logo/logo_full_compress_darkbg.png\" height=\"100px\" width=\"215px\"/></a>
              <p>1531 Thirteenth St, Ste 1100<br>Columbus, IN 47201<br>812-376-3001 </p>
            </td>
            <td>
              <table align=center>
                ";
        // line 29
        $template_storage = new Bolt\Storage($context['app']);
        $context['ct'] =         $template_storage->getContent("we-are/overview", array() );
        // line 30
        echo "                <tr> <td> <p>  <a href=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "link", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "title", array()), "html", null, true);
        echo "</a> </p> </td> </tr>
                ";
        // line 31
        $template_storage = new Bolt\Storage($context['app']);
        $context['ct'] =         $template_storage->getContent("/we-are/coalition-members", array() );
        // line 32
        echo "                <tr> <td> <p>  <a href=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "link", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "title", array()), "html", null, true);
        echo "</a> </p> </td> </tr>
                ";
        // line 33
        $template_storage = new Bolt\Storage($context['app']);
        $context['ct'] =         $template_storage->getContent("/we-are/mission", array() );
        // line 34
        echo "                <tr> <td> <p>  <a href=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "link", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "title", array()), "html", null, true);
        echo "</a> </p> </td> </tr>
                ";
        // line 35
        $template_storage = new Bolt\Storage($context['app']);
        $context['ct'] =         $template_storage->getContent("/need-help/need-help", array() );
        // line 36
        echo "                <tr> <td> <p>  <a href=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "link", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "title", array()), "html", null, true);
        echo "</a> </p> </td> </tr>
                ";
        // line 37
        $template_storage = new Bolt\Storage($context['app']);
        $context['ct'] =         $template_storage->getContent("/page/logo", array() );
        // line 38
        echo "                <tr> <td> <p>  <a href=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "link", array()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ct"]) ? $context["ct"] : null), "title", array()), "html", null, true);
        echo "</a> </p> </td> </tr>
              </table>
            </td>
            <td class=\"footer-social\">
              <table width=100%>
                <tr>
                  <td style=\"width=33%; align=center\">
                    <p><a href=\"https://www.facebook.com/Financial-Literacy-Coalition-Bartholomew-County-223237491055457/?fref=ts\" target=\"_blank\"> <img src=\"../theme/bootstrapDefaultTheme/img/facebook_48x48.png\"/></a> </p>
                  </td>
                  <!--<td style=\"width=33%; align=center\">
                    <p><a href=\"https://www.facebook.com/Financial-Literacy-Coalition-Bartholomew-County-223237491055457/?fref=ts\" target=\"_blank\"> <img src=\"../theme/bootstrapDefaultTheme/img/twiter_48x48.png\"/></a> </p>
                  </td> 
                  <td style=\"width=33%; align=center\">
                    <p> <a href=\"https://www.facebook.com/Financial-Literacy-Coalition-Bartholomew-County-223237491055457/?fref=ts\" target=\"_blank\"> <img src=\"../theme/bootstrapDefaultTheme/img/googleplus_48x48.png\"/></a> </p>
                  </td> -->
                  <td style=\"width=33%; align=center\">
                    <p> <a href=\"https://www.facebook.com/Financial-Literacy-Coalition-Bartholomew-County-223237491055457/?fref=ts\" target=\"_blank\"> <img src=\"../theme/bootstrapDefaultTheme/img/youtube_48x48.png\"/></a> </p>
                  </td>                  
                </tr>
              </table>  
            </td>        
            <td>
              <p style=\"text-align:right\">&copy; 2016 Bartholomew County<br>Financial Literacy Coalition</p>
              <p style=\"text-align:right\">All Rights Reserved</p>
            </td>
          </tr>
        </table>
        </div>
        </div>
      </footer>

      <!-- End Footer -->";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  102 => 37,  95 => 36,  92 => 35,  85 => 34,  82 => 33,  75 => 32,  72 => 31,  65 => 30,  62 => 29,  52 => 24,  46 => 23,  29 => 8,  27 => 7,  19 => 1,);
    }
}
