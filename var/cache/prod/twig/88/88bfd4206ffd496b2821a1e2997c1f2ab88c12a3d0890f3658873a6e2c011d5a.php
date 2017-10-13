<?php

/* ::base.html.twig */
class __TwigTemplate_5605b28487c62a505d6cdf2eaea5daa5c42fdae425b8a5bd9baea30253fa9822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'table' => array($this, 'block_table'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">
  
  <link rel=\"icon\" href=\"../../favicon.ico\">

  <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <!-- Bootstrap core CSS -->
  <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

  <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">

  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.css\">


  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/1.css"), "html", null, true);
        echo "\">



  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->


</head>

<body ng-app=app>

<nav class=\"navbar navbar-inverse\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/\">Search Engine</a>
    </div>
    <div id=\"navbar\" class=\"collapse navbar-collapse\">
      <ul class=\"nav navbar-nav\">
        <li class=\"";
        // line 56
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_searches")) {
            echo "active";
        }
        echo "\"><a href=\"/users/searches\">Create Search</a></li>

        <li class=\"";
        // line 58
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "searches_list")) {
            echo "active";
        }
        echo "\"><a href=\"/\">Searches</a></li>

        ";
        // line 60
        if (( !(null === $this->getAttribute(($context["app"] ?? null), "user", array())) &&  !twig_test_empty($this->getAttribute(($context["app"] ?? null), "user", array())))) {
            // line 61
            echo "          ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "name", array()) == "admin")) {
                // line 62
                echo "            <li class=\"";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_list")) {
                    echo "active";
                }
                echo "\"><a href=\"/users\">Users</a></li>
            <li class=\"";
                // line 63
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_create")) {
                    echo "active";
                }
                echo "\"><a href=\"/users/create\">Create user</a></li>
          ";
            }
            // line 65
            echo "
        ";
        }
        // line 67
        echo "
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">

      ";
        // line 71
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 72
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" style=\"position: relative; padding-left: 50px\">
              ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "name", array()), "html", null, true);
            echo " <span class=\"caret\"></span>
          </a>

          <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
              <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutPath(), "html", null, true);
            echo "\">
                <i class=\"fa fa-btn fa-sign-out\"></i>
                &nbsp; &nbsp; &nbsp; <span style=\"font-size: 20px\">Выйти</span>
              </a>

            </li>
          </ul>
        </li>
      ";
        }
        // line 88
        echo "
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class=\"container\">

  <div class=\"row\">
    <div class=\"col-md-12\">

      ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 100
            echo "        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
      ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 104
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "
    </div>
  </div>

</div>
";
        // line 112
        $this->displayBlock('table', $context, $blocks);
        // line 113
        echo "
<script src=\"https://code.jquery.com/jquery-1.11.2.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js\"></script>

";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/autocomplete.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/validate.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 106
    public function block_body($context, array $blocks = array())
    {
    }

    // line 112
    public function block_table($context, array $blocks = array())
    {
    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 117,  262 => 112,  257 => 106,  252 => 26,  246 => 13,  237 => 123,  233 => 122,  229 => 121,  224 => 118,  222 => 117,  216 => 113,  214 => 112,  207 => 107,  204 => 106,  195 => 104,  191 => 103,  188 => 102,  179 => 100,  175 => 99,  162 => 88,  150 => 79,  142 => 74,  138 => 72,  136 => 71,  130 => 67,  126 => 65,  119 => 63,  112 => 62,  109 => 61,  107 => 60,  100 => 58,  93 => 56,  62 => 28,  59 => 27,  57 => 26,  53 => 25,  38 => 13,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/home/upboostn/public_html/app/Resources/views/base.html.twig");
    }
}
