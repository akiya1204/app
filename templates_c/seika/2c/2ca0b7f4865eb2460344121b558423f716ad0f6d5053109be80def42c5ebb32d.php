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

/* tenpo.html.twig */
class __TwigTemplate_3e7f08dc0cf7120d545f2869991a176e2f5b3aec3c78dd8c9aa073328975dfcb extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>s-DELI_tenpo</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"aStar Fashion Template Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/bootstrap-4.1.3/bootstrap.css\">
<link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.carousel.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.theme.default.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/animate.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/cart.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/cart_responsive.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/navbar.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/tenpo.css\">
</head>
<body>

<div class=\"super_container\">

\t<!-- Sidebar -->

  ";
        // line 25
        $this->loadTemplate("tenpo_sidebar.html.twig", "tenpo.html.twig", 25)->display($context);
        // line 26
        echo "  ";
        $this->loadTemplate("tenpo_navbar.html.twig", "tenpo.html.twig", 26)->display($context);
        // line 27
        echo "
\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/header.png\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"home_content\">
\t\t\t\t<div class=\"home_title\">注文表</div>
\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t<ul class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<li>店舗専用ページ</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Cart -->

\t<div class=\"cart_section\">


\t\t<div class=\"section_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"cart_container\">
\t\t\t\t\t\t\t<p class=\"lead text-dark\">配達時間変更</p>
\t\t\t\t\t\t\t<ul class=\"change_timebox\">
\t\t\t\t\t\t\t\t<li class=\"change_time\">
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t<select name=\"time\">
\t\t\t\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timeArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"change\" value=\"変更\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"now_time\">
\t\t\t\t\t\t\t\t<p class=\"text-dark\">現在";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wait_time"] ?? null), "time", []), "html", null, true);
        echo "分</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t\t<!-- Cart Bar -->
\t\t\t\t\t\t\t<div class=\"cart_bar\">
\t\t\t\t\t\t\t\t<ul class=\"cart_bar_list tenpo_item_list d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t<li>名前</li>
\t\t\t\t\t\t\t\t\t<li>郵便番号</li>
\t\t\t\t\t\t\t\t\t<li>住所</li>
\t\t\t\t\t\t\t\t\t<li>電話番号</li>
\t\t\t\t\t\t\t\t\t<li>注文内容</li>
\t\t\t\t\t\t\t\t\t<li>合計金額</li>
\t\t\t\t\t\t\t\t\t<li>配達時間</li>
\t\t\t\t\t\t\t\t\t<li>配達完了</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

          ";
        // line 86
        if ((twig_length_filter($this->env, ($context["dataArr"] ?? null)) == 0)) {
            // line 87
            echo "            <p class=\"lead pt-4 text-dark\" >現在の注文はありません</p>
          ";
        } else {
            // line 89
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 90
                echo "\t\t\t\t\t\t\t<!-- Cart Items -->
\t\t\t\t\t\t\t<div class=\"cart_items\">
\t\t\t\t\t\t\t\t<ul class=\"cart_items_list\">
\t\t\t\t\t\t\t\t\t<!-- Cart Item -->
\t\t\t\t\t\t\t\t\t<li class=\"cart_item tenpo_item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product_price text-lg-center product_text\"><span>product_name: </span>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", []), "html", null, true);
                echo "　様</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_price text-lg-center product_text\"><span>zip: </span>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "zip1", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "zip2", []), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_price text-lg-center product_text\"><span>address: </span>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "address", []), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_price text-lg-center product_text\"><span>tel: </span>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "tel1", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "tel2", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "tel3", []), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_total text-lg-center product_text\"><span>total: </span>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
                echo " :  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "total", []), "html", null, true);
                echo "</div>
                    <div class=\"product_price text-lg-center product_text\"><span>total.price: </span>";
                // line 100
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "total_price", []), 0, ".", ","), "html", null, true);
                echo "円</div>
                    <div class=\"product_price text-lg-center product_text\"><span>time: </span>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "time", []), "html", null, true);
                echo "</div>
                    <div class=\"cart_buttons d-flex flex-row align-items-start justify-content-start\">
      \t\t\t\t\t\t\t\t<div class=\"cart_buttons_inner ml-auto d-flex flex-row align-items-start justify-content-start flex-wrap pb-4 \">
      \t\t\t\t\t\t\t\t\t<div class=\"button button_update trans_200 \"><a class=\"font-weight-bold\" href=\"";
                // line 104
                echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "tenpo.php?cmp_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "cmp_id", []), "html", null, true);
                echo "\">finish</a></div>
      \t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "          ";
        }
        // line 112
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- Footer -->

  ";
        // line 123
        $this->loadTemplate("footer.html.twig", "tenpo.html.twig", 123)->display($context);
        // line 124
        echo "
</div>

<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"styles/bootstrap-4.1.3/popper.js\"></script>
<script src=\"styles/bootstrap-4.1.3/bootstrap.min.js\"></script>
<script src=\"plugins/greensock/TweenMax.min.js\"></script>
<script src=\"plugins/greensock/TimelineMax.min.js\"></script>
<script src=\"plugins/scrollmagic/ScrollMagic.min.js\"></script>
<script src=\"plugins/greensock/animation.gsap.min.js\"></script>
<script src=\"plugins/greensock/ScrollToPlugin.min.js\"></script>
<script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
<script src=\"plugins/easing/easing.js\"></script>
<script src=\"plugins/parallax-js-master/parallax.min.js\"></script>
<script src=\"js/cart.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "tenpo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 124,  226 => 123,  213 => 112,  210 => 111,  195 => 104,  189 => 101,  185 => 100,  179 => 99,  171 => 98,  167 => 97,  161 => 96,  157 => 95,  150 => 90,  145 => 89,  141 => 87,  139 => 86,  117 => 67,  110 => 62,  99 => 60,  95 => 59,  61 => 27,  58 => 26,  56 => 25,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "tenpo.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/app/templates/seika/tenpo.html.twig");
    }
}
