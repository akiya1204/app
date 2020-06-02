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

/* tenpo_sidebar.html.twig */
class __TwigTemplate_79e553b6c8486aa385fae2d2346278ae5c78d26bec6ba799e7a8ba3ce9880fba extends \Twig\Template
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
        echo "<div class=\"sidebar\">
  <!-- Logo -->
  <div class=\"sidebar_logo\">
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "tenpo.php\"><div>s-<span>deli</span></div></a>
  </div>

  <!-- time -->

  <nav class=\"sidebar_nav\">
    <ul class=\"text-light\" >
      <li>現在の待ち時間は</li>
      <li class=\"text-center h3\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wait_time"] ?? null), "time", []), "html", null, true);
        echo "分</li>
      <li>です</li>
    </ul>
  </nav>

  <!-- Sidebar Navigation -->
  <nav class=\"sidebar_nav\">
    <ul>
      <li><a href=\"./tenpo.php\">注文票<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
      <li><a href=\"./tenpo_fix.php\">商品の修正<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
    </ul>
  </nav>

  <div class=\"search\">
    <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "tenpo_fix.php\" method=\"get\" class=\"search_form\" id=\"sidebar_search_form\">
      <input type=\"text\" name=\"item_name\" class=\"search_input\" placeholder=\"Search\" required=\"required\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["item_name"] ?? null), "html", null, true);
        echo "\">
      <button class=\"search_button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
    </form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tenpo_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  63 => 26,  46 => 12,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "tenpo_sidebar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/app/templates/seika/tenpo_sidebar.html.twig");
    }
}
