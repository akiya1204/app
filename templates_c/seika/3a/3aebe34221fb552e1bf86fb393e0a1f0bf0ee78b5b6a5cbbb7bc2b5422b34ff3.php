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

/* category_menu.html.twig */
class __TwigTemplate_48aae6b60f901c9c95b45d94a7e558d4a8debade9cbabf4588b95fb9f32501a9 extends \Twig\Template
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
        echo "<div class=\"categories\">
  <div class=\"section_container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"categories_list_container\">
            <ul class=\"categories_list d-flex flex-row align-items-center justify-content-start\">
              <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "list.php\">全て</a></li>
              ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cateArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 10
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "list.php?ctg_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "ctg_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "category_name", []), "html", null, true);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "category_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  47 => 10,  43 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "category_menu.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/app/templates/seika/category_menu.html.twig");
    }
}
