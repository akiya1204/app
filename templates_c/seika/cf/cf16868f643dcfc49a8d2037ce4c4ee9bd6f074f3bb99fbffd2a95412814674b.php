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

/* navbar.html.twig */
class __TwigTemplate_d15a367e51b4c31b8e55c16ff5cedcb838c3879fb049dd3bcacf6903d2fe97ab extends \Twig\Template
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
        echo "list.php\" method=\"get\" onsubmit=\"return goSearch()\" class=\"sample2Area\">
          <input type=\"text\" name=\"item_name\" placeholder=\"検索...\"  class=\"nav_search\">
        </form>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"nav_link\" href=\"./list.php\">ホーム</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"nav_link\" href=\"./cart.php\">カート</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"nav_link\" href=\"./rireki.php\">現在の注文</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"nav_link\" href=\"./contact.php\">お問い合わせ</a>
      </li>
      <li class=\"nav-item navbar-login\">
        ";
        // line 26
        if ((twig_length_filter($this->env, ($context["name"] ?? null)) > 0)) {
            // line 27
            echo "        <nav class=\"navbar-color\">
          <ul>
            <li class=\"text-light ml-0\"><a href=\"./mypage.php\" id=\"nav_link\" class=\"navbar-color\">ようこそ";
            // line 29
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "さん</a></li>
            <li><a href=\"./logout.php\" id=\"nav_link\" class=\"navbar-color\">ログアウトはこちら</a></li>
          </ul>
        </nav>
        ";
        } else {
            // line 34
            echo "        <nav class=\"\">
          <ul>
            <li><a href=\"./join.php\" class=\"navbar-color\">ログインしてください</a></li>
            <li><a href=\"./regist.php\" class=\"navbar-color\">会員登録はこちら</a></li>
          </ul>
        </nav>
        ";
        }
        // line 41
        echo "      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 41,  77 => 34,  69 => 29,  65 => 27,  63 => 26,  43 => 9,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "navbar.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/app/templates/seika/navbar.html.twig");
    }
}
