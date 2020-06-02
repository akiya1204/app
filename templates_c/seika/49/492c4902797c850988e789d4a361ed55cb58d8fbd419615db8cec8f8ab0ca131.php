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

/* sidebar.html.twig */
class __TwigTemplate_e7a9095f018235de1cf6f301a8aee62911c230691d40245bc81a2f8ffd35940c extends \Twig\Template
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
        echo "list.php\"><div>s-<span>deli</span></div></a>
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
      <li><a href=\"./list.php\">ホーム<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
      <li><a href=\"./cart.php\">カート<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
      <li><a href=\"./rireki.php\">現在の注文<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
      <li><a href=\"./contact.php\">お問い合わせ<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
    </ul>
  </nav>

  <!-- Search -->
  <div class=\"search\">
    <form action=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "list.php\" method=\"get\" class=\"search_form\" id=\"sidebar_search_form\">
      <input type=\"text\" name=\"item_name\" class=\"search_input\" placeholder=\"Search\" required=\"required\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["item_name"] ?? null), "html", null, true);
        echo "\">
      <button class=\"search_button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
    </form>
  </div>

  <!-- login -->
    ";
        // line 36
        if ((twig_length_filter($this->env, ($context["name"] ?? null)) > 0)) {
            // line 37
            echo "    <nav class=\"sidebar_nav\">
      <ul>
        <li class=\"text-light\"><a href=\"./mypage.php\">ようこそ";
            // line 39
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "さん<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
        <li><a href=\"./logout.php\">ログアウトはこちら<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
      </ul>
    </nav>
    ";
        } else {
            // line 44
            echo "    <nav class=\"sidebar_nav\">
      <ul>
        <li><a href=\"./join.php\">ログインしてください<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
        <li><a href=\"./regist.php\">会員登録はこちら<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
      </ul>
    </nav>
    ";
        }
        // line 51
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 51,  93 => 44,  85 => 39,  81 => 37,  79 => 36,  70 => 30,  66 => 29,  46 => 12,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sidebar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/app/templates/seika/sidebar.html.twig");
    }
}
