<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tenpo_navbar.html.twig */
class __TwigTemplate_cd3448cdef26255d3aae2aaee217685a129bef91d68bee4343e716f1925c9bec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark fixed-top\">
  <div class=\"navbar_logo\">
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "list.php\"><div>s-<span>DELI</span></div></a>
  </div>
  <button  class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"><span class=\"navbar-toggler-icon\"></span></button>
  <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
    <ul class=\"navbar-nav ml-auto\">
      <li class=\"nav-item nav_search_position\">
        <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "tenpo_fix.php\" method=\"get\" onsubmit=\"return goSearch()\" class=\"sample2Area\">
          <input type=\"text\" name=\"item_name\" placeholder=\"検索...\"  class=\"nav_search\">
        </form>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"nav_link\" href=\"./tenpo.php\">注文票</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"nav_link\" href=\"./tenpo_fix.php\">商品の修正</a>
      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "tenpo_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "tenpo_navbar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/app/templates/seika/tenpo_navbar.html.twig");
    }
}
