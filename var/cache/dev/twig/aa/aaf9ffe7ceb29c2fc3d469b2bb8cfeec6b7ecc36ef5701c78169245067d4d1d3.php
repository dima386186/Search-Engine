<?php

/* ::base.html.twig */
class __TwigTemplate_7b2fe5db60da20af9633e2e52caade250403e7f69f6fbb3adfb7bd931c5698e0 extends Twig_Template
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
        $__internal_97ab37cdf18c0ed96ceacda8b51b86d7ec2e27f3e30c99089a7f8117485bbabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ab37cdf18c0ed96ceacda8b51b86d7ec2e27f3e30c99089a7f8117485bbabc->enter($__internal_97ab37cdf18c0ed96ceacda8b51b86d7ec2e27f3e30c99089a7f8117485bbabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5d2e30fb7c58577889ae5d8a6e843285d5326611d3450b5d2be3d35ca1265b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2e30fb7c58577889ae5d8a6e843285d5326611d3450b5d2be3d35ca1265b5e->enter($__internal_5d2e30fb7c58577889ae5d8a6e843285d5326611d3450b5d2be3d35ca1265b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_searches")) {
            echo "active";
        }
        echo "\"><a href=\"/users/searches\">Create Search</a></li>

        <li class=\"";
        // line 58
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "searches_list")) {
            echo "active";
        }
        echo "\"><a href=\"/\">Searches</a></li>

        ";
        // line 60
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) &&  !twig_test_empty($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())))) {
            // line 61
            echo "          ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()) == "admin")) {
                // line 62
                echo "            <li class=\"";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_list")) {
                    echo "active";
                }
                echo "\"><a href=\"/users\">Users</a></li>
            <li class=\"";
                // line 63
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_create")) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        // line 107
        echo "
        ";
        // line 109
        echo "      ";
        // line 110
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "
    </div>
  </div>

</div>
";
        // line 116
        $this->displayBlock('table', $context, $blocks);
        // line 117
        echo "
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js\"></script>

";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/autocomplete.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
        
        $__internal_97ab37cdf18c0ed96ceacda8b51b86d7ec2e27f3e30c99089a7f8117485bbabc->leave($__internal_97ab37cdf18c0ed96ceacda8b51b86d7ec2e27f3e30c99089a7f8117485bbabc_prof);

        
        $__internal_5d2e30fb7c58577889ae5d8a6e843285d5326611d3450b5d2be3d35ca1265b5e->leave($__internal_5d2e30fb7c58577889ae5d8a6e843285d5326611d3450b5d2be3d35ca1265b5e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee88019027514a6935084f0d8ccd88c97e7802e37c05aa2459ac68396903e124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee88019027514a6935084f0d8ccd88c97e7802e37c05aa2459ac68396903e124->enter($__internal_ee88019027514a6935084f0d8ccd88c97e7802e37c05aa2459ac68396903e124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9eea777a908d3b7e770ff65777124e1e1bf37d359a67087d1978f73c671b57a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eea777a908d3b7e770ff65777124e1e1bf37d359a67087d1978f73c671b57a2->enter($__internal_9eea777a908d3b7e770ff65777124e1e1bf37d359a67087d1978f73c671b57a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9eea777a908d3b7e770ff65777124e1e1bf37d359a67087d1978f73c671b57a2->leave($__internal_9eea777a908d3b7e770ff65777124e1e1bf37d359a67087d1978f73c671b57a2_prof);

        
        $__internal_ee88019027514a6935084f0d8ccd88c97e7802e37c05aa2459ac68396903e124->leave($__internal_ee88019027514a6935084f0d8ccd88c97e7802e37c05aa2459ac68396903e124_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98dacc35d85aba6bf169224ac4dc695cd5ef902bacee7fe0db1419f7fc2b3b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dacc35d85aba6bf169224ac4dc695cd5ef902bacee7fe0db1419f7fc2b3b97->enter($__internal_98dacc35d85aba6bf169224ac4dc695cd5ef902bacee7fe0db1419f7fc2b3b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8aee594bcf269e4b28f8ff2271044c9ab662046b968b5c9bf8ca6e2a94bb5416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aee594bcf269e4b28f8ff2271044c9ab662046b968b5c9bf8ca6e2a94bb5416->enter($__internal_8aee594bcf269e4b28f8ff2271044c9ab662046b968b5c9bf8ca6e2a94bb5416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8aee594bcf269e4b28f8ff2271044c9ab662046b968b5c9bf8ca6e2a94bb5416->leave($__internal_8aee594bcf269e4b28f8ff2271044c9ab662046b968b5c9bf8ca6e2a94bb5416_prof);

        
        $__internal_98dacc35d85aba6bf169224ac4dc695cd5ef902bacee7fe0db1419f7fc2b3b97->leave($__internal_98dacc35d85aba6bf169224ac4dc695cd5ef902bacee7fe0db1419f7fc2b3b97_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_04c3076caec2a6c22e680c74ff4f55979896fa35344eb814a88ce57ab47d7636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c3076caec2a6c22e680c74ff4f55979896fa35344eb814a88ce57ab47d7636->enter($__internal_04c3076caec2a6c22e680c74ff4f55979896fa35344eb814a88ce57ab47d7636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d39f1cc76cf09cf3b6e79448c56499990a73b17a9614c19aa92c3988637a567f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39f1cc76cf09cf3b6e79448c56499990a73b17a9614c19aa92c3988637a567f->enter($__internal_d39f1cc76cf09cf3b6e79448c56499990a73b17a9614c19aa92c3988637a567f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d39f1cc76cf09cf3b6e79448c56499990a73b17a9614c19aa92c3988637a567f->leave($__internal_d39f1cc76cf09cf3b6e79448c56499990a73b17a9614c19aa92c3988637a567f_prof);

        
        $__internal_04c3076caec2a6c22e680c74ff4f55979896fa35344eb814a88ce57ab47d7636->leave($__internal_04c3076caec2a6c22e680c74ff4f55979896fa35344eb814a88ce57ab47d7636_prof);

    }

    // line 116
    public function block_table($context, array $blocks = array())
    {
        $__internal_7ec81e94e40b589d325a058f6f539435bfcd12230cf6891e85723d3c614b063e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec81e94e40b589d325a058f6f539435bfcd12230cf6891e85723d3c614b063e->enter($__internal_7ec81e94e40b589d325a058f6f539435bfcd12230cf6891e85723d3c614b063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_e7ee22da4898838643cd227c15db6ab63153aa014d283897d1de93eda5ebb26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ee22da4898838643cd227c15db6ab63153aa014d283897d1de93eda5ebb26d->enter($__internal_e7ee22da4898838643cd227c15db6ab63153aa014d283897d1de93eda5ebb26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_e7ee22da4898838643cd227c15db6ab63153aa014d283897d1de93eda5ebb26d->leave($__internal_e7ee22da4898838643cd227c15db6ab63153aa014d283897d1de93eda5ebb26d_prof);

        
        $__internal_7ec81e94e40b589d325a058f6f539435bfcd12230cf6891e85723d3c614b063e->leave($__internal_7ec81e94e40b589d325a058f6f539435bfcd12230cf6891e85723d3c614b063e_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7479bcc0a18ae9feb2863c4fb7ed1b901b2a78cf836e2f72a9d3780812d2e2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7479bcc0a18ae9feb2863c4fb7ed1b901b2a78cf836e2f72a9d3780812d2e2de->enter($__internal_7479bcc0a18ae9feb2863c4fb7ed1b901b2a78cf836e2f72a9d3780812d2e2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da02c5dd2c8e346b7f6270a171754940118fa10ab08637b53b80ecd7aa859d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da02c5dd2c8e346b7f6270a171754940118fa10ab08637b53b80ecd7aa859d7a->enter($__internal_da02c5dd2c8e346b7f6270a171754940118fa10ab08637b53b80ecd7aa859d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da02c5dd2c8e346b7f6270a171754940118fa10ab08637b53b80ecd7aa859d7a->leave($__internal_da02c5dd2c8e346b7f6270a171754940118fa10ab08637b53b80ecd7aa859d7a_prof);

        
        $__internal_7479bcc0a18ae9feb2863c4fb7ed1b901b2a78cf836e2f72a9d3780812d2e2de->leave($__internal_7479bcc0a18ae9feb2863c4fb7ed1b901b2a78cf836e2f72a9d3780812d2e2de_prof);

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
        return array (  329 => 121,  312 => 116,  295 => 110,  278 => 26,  260 => 13,  245 => 125,  241 => 124,  237 => 122,  235 => 121,  229 => 117,  227 => 116,  220 => 111,  217 => 110,  215 => 109,  212 => 107,  210 => 106,  201 => 104,  197 => 103,  194 => 102,  185 => 100,  181 => 99,  168 => 88,  156 => 79,  148 => 74,  144 => 72,  142 => 71,  136 => 67,  132 => 65,  125 => 63,  118 => 62,  115 => 61,  113 => 60,  106 => 58,  99 => 56,  68 => 28,  65 => 27,  63 => 26,  59 => 25,  44 => 13,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">
  
  <link rel=\"icon\" href=\"../../favicon.ico\">

  <title>{% block title %}Welcome!{% endblock %}</title>

  <!-- Bootstrap core CSS -->
  <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

  <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">

  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.css\">


  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  {% block stylesheets %}{% endblock %}

  <link rel=\"stylesheet\" href=\"{{ asset('css/1.css') }}\">



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
        <li class=\"{% if app.request.attributes.get('_route') == 'user_searches' %}active{% endif %}\"><a href=\"/users/searches\">Create Search</a></li>

        <li class=\"{% if app.request.attributes.get('_route') == 'searches_list' %}active{% endif %}\"><a href=\"/\">Searches</a></li>

        {% if app.user is not null and app.user is not empty %}
          {% if app.user.name == 'admin' %}
            <li class=\"{% if app.request.attributes.get('_route') == 'user_list' %}active{% endif %}\"><a href=\"/users\">Users</a></li>
            <li class=\"{% if app.request.attributes.get('_route') == 'user_create' %}active{% endif %}\"><a href=\"/users/create\">Create user</a></li>
          {% endif %}

        {% endif %}

      </ul>
      <ul class=\"nav navbar-nav navbar-right\">

      {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" style=\"position: relative; padding-left: 50px\">
              {{ app.user.name }} <span class=\"caret\"></span>
          </a>

          <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
              <a href=\"{{ logout_path() }}\">
                <i class=\"fa fa-btn fa-sign-out\"></i>
                &nbsp; &nbsp; &nbsp; <span style=\"font-size: 20px\">Выйти</span>
              </a>

            </li>
          </ul>
        </li>
      {% endif %}

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class=\"container\">

  <div class=\"row\">
    <div class=\"col-md-12\">

      {% for flash_message in app.session.flashbag.get('notice') %}
        <div class=\"alert alert-success\">{{ flash_message }}</div>
      {% endfor %}

      {% for flash_message in app.session.flashbag.get('error') %}
        <div class=\"alert alert-danger\">{{ flash_message }}</div>
      {% endfor %}
      {#{% if is_granted('IS_AUTHENTICATED_FULLY') %}#}

        {#<a href=\"{{ logout_path() }}\" class=\"btn btn-warning\">Logout</a>#}
      {#{% endif %}#}
      {% block body %}{% endblock %}

    </div>
  </div>

</div>
{% block table %}{% endblock %}

<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js\"></script>

{% block javascripts %}{% endblock %}

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
<script src=\"{{ asset('js/1.js') }}\"></script>
<script src=\"{{ asset('js/autocomplete.js') }}\"></script>
</body>
</html>

", "::base.html.twig", "/home/upboostn/public_html/app/Resources/views/base.html.twig");
    }
}
