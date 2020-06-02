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

/* list.html.twig */
class __TwigTemplate_76d84a499fb5ee915f5e01fb319875fe8bae6c2d085a44cd2771c9e8b0d00104 extends \Twig\Template
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
<title>s-DELI_home</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"aStar Fashion Template Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/bootstrap-4.1.3/bootstrap.css\">
<link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.carousel.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.theme.default.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/animate.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/main_styles.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/responsive.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/categories.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/categories_responsive.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/navbar.css\">
</head>
<body>

<div class=\"super_container\">

  ";
        // line 24
        $this->loadTemplate("sidebar.html.twig", "list.html.twig", 24)->display($context);
        // line 25
        echo "  ";
        $this->loadTemplate("navbar.html.twig", "list.html.twig", 25)->display($context);
        // line 26
        echo "
\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/header.png\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"home_content\">
\t\t\t\t<div class=\"home_title\">shop</div>
\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t<ul class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<li>商品一覧</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- Categories -->

    ";
        // line 46
        $this->loadTemplate("category_menu.html.twig", "list.html.twig", 46)->display($context);
        // line 47
        echo "
\t<!-- Products -->

\t<div class=\"products\">
\t\t<div class=\"section_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"products_container grid\">




\t\t\t\t\t\t\t<!-- Product -->
              ";
        // line 61
        if ((twig_length_filter($this->env, ($context["ctg_id"] ?? null)) > 0)) {
            // line 62
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 63
                echo "  \t\t\t\t\t\t\t<div class=\"product grid-item hot\">
  \t\t\t\t\t\t\t\t<div class=\"product_inner\">
  \t\t\t\t\t\t\t\t\t<div class=\"product_image\">
  \t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "detail.php?item_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "images/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
                echo "\"></a>
  \t\t\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t\t\t\t<div class=\"product_content text-center\">
  \t\t\t\t\t\t\t\t\t\t<div class=\"product_title\"><a href=\"";
                // line 69
                echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "detail.php?item_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
                echo "</a></div>
  \t\t\t\t\t\t\t\t\t\t<div class=\"product_price\">&yen;";
                // line 70
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "price", []), 0, ".", ","), "html", null, true);
                echo "</div>
  \t\t\t\t\t\t\t\t\t\t<div class=\"product_button ml-auto mr-auto trans_200\"><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "detail.php?item_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
                echo "\">詳細</a></div>
  \t\t\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t\t</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "              ";
        } else {
            // line 77
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataArr2"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 78
                echo "                <div class=\"product grid-item hot\">
  \t\t\t\t\t\t\t\t<div class=\"product_inner\">
  \t\t\t\t\t\t\t\t\t<div class=\"product_image\">
  \t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "detail.php?item_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "images/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
                echo "\"></a>
  \t\t\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t\t\t\t<div class=\"product_content text-center\">
  \t\t\t\t\t\t\t\t\t\t<div class=\"product_title\"><a href=\"";
                // line 84
                echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "detail.php?item_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
                echo "</a></div>
  \t\t\t\t\t\t\t\t\t\t<div class=\"product_price\">&yen;";
                // line 85
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "price", []), 0, ".", ","), "html", null, true);
                echo "</div>
  \t\t\t\t\t\t\t\t\t\t<div class=\"product_button ml-auto mr-auto trans_200\"><a href=\"";
                // line 86
                echo twig_escape_filter($this->env, twig_constant("seika\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "detail.php?item_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
                echo "\">詳細</a></div>
  \t\t\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t\t</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "              ";
        }
        // line 92
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Newsletter -->

\t<!-- Footer -->

\t";
        // line 105
        $this->loadTemplate("footer.html.twig", "list.html.twig", 105)->display($context);
        // line 106
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
<script src=\"plugins/Isotope/isotope.pkgd.min.js\"></script>
<script src=\"plugins/Isotope/fitcolumns.js\"></script>
<script src=\"js/custom.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 106,  221 => 105,  206 => 92,  203 => 91,  190 => 86,  186 => 85,  178 => 84,  164 => 81,  159 => 78,  154 => 77,  151 => 76,  138 => 71,  134 => 70,  126 => 69,  112 => 66,  107 => 63,  102 => 62,  100 => 61,  84 => 47,  82 => 46,  60 => 26,  57 => 25,  55 => 24,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/app/templates/seika/list.html.twig");
    }
}
