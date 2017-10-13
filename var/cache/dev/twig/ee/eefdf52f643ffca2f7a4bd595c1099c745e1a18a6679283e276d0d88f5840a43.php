<?php

/* :Login:login.html.twig */
class __TwigTemplate_3403752e90986fb26bdea6ea17d5739f6121597eaaca67db7c70d14f74abee07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":Login:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2b10e71a549d950a9e13f27d8434eed64d5fbb806eba8e5016fc251263892c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b10e71a549d950a9e13f27d8434eed64d5fbb806eba8e5016fc251263892c6->enter($__internal_e2b10e71a549d950a9e13f27d8434eed64d5fbb806eba8e5016fc251263892c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Login:login.html.twig"));

        $__internal_3ff05401e16eaa675f63115cb18f53bb1f3a0ed095d79e0f0c9d217b51cf3996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff05401e16eaa675f63115cb18f53bb1f3a0ed095d79e0f0c9d217b51cf3996->enter($__internal_3ff05401e16eaa675f63115cb18f53bb1f3a0ed095d79e0f0c9d217b51cf3996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b10e71a549d950a9e13f27d8434eed64d5fbb806eba8e5016fc251263892c6->leave($__internal_e2b10e71a549d950a9e13f27d8434eed64d5fbb806eba8e5016fc251263892c6_prof);

        
        $__internal_3ff05401e16eaa675f63115cb18f53bb1f3a0ed095d79e0f0c9d217b51cf3996->leave($__internal_3ff05401e16eaa675f63115cb18f53bb1f3a0ed095d79e0f0c9d217b51cf3996_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7a277c57039e8534f74219db4d602b0ad76b4e6f0601c04b59f388774c6be6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a277c57039e8534f74219db4d602b0ad76b4e6f0601c04b59f388774c6be6a->enter($__internal_c7a277c57039e8534f74219db4d602b0ad76b4e6f0601c04b59f388774c6be6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96b12f1d11def381c971af2b6eaf4f7ba6ca8ed30e51733c7ca48b3c9d97814f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b12f1d11def381c971af2b6eaf4f7ba6ca8ed30e51733c7ca48b3c9d97814f->enter($__internal_96b12f1d11def381c971af2b6eaf4f7ba6ca8ed30e51733c7ca48b3c9d97814f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_96b12f1d11def381c971af2b6eaf4f7ba6ca8ed30e51733c7ca48b3c9d97814f->leave($__internal_96b12f1d11def381c971af2b6eaf4f7ba6ca8ed30e51733c7ca48b3c9d97814f_prof);

        
        $__internal_c7a277c57039e8534f74219db4d602b0ad76b4e6f0601c04b59f388774c6be6a->leave($__internal_c7a277c57039e8534f74219db4d602b0ad76b4e6f0601c04b59f388774c6be6a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_12fab0b267122ec9fe69c074e09c80b6553ab15697215b3fd73224cc637d7de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12fab0b267122ec9fe69c074e09c80b6553ab15697215b3fd73224cc637d7de8->enter($__internal_12fab0b267122ec9fe69c074e09c80b6553ab15697215b3fd73224cc637d7de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aea51e769f79bd3bb39d55403233fea89eeeedf613c85126f2292ca367745044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea51e769f79bd3bb39d55403233fea89eeeedf613c85126f2292ca367745044->enter($__internal_aea51e769f79bd3bb39d55403233fea89eeeedf613c85126f2292ca367745044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"panel panel-heading\">
        <h1>Login</h1>
    </div>
    <div class=\"panel panel-body\">
        ";
        // line 10
        if (($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 11
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? $this->getContext($context, "errors")), "messageKey", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 15
        echo "        <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"email\">Email:</label>
                <input type=\"email\" name=\"_email\" id=\"email\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\">
            </div>
            <button class=\"btn btn-info pull-right\">Connect</button>

        </form>
    </div>
";
        
        $__internal_aea51e769f79bd3bb39d55403233fea89eeeedf613c85126f2292ca367745044->leave($__internal_aea51e769f79bd3bb39d55403233fea89eeeedf613c85126f2292ca367745044_prof);

        
        $__internal_12fab0b267122ec9fe69c074e09c80b6553ab15697215b3fd73224cc637d7de8->leave($__internal_12fab0b267122ec9fe69c074e09c80b6553ab15697215b3fd73224cc637d7de8_prof);

    }

    public function getTemplateName()
    {
        return ":Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  85 => 15,  79 => 12,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Login{% endblock %}

{% block body %}
    <div class=\"panel panel-heading\">
        <h1>Login</h1>
    </div>
    <div class=\"panel panel-body\">
        {% if errors %}
            <div class=\"alert alert-danger\">
                {{ errors.messageKey }}
            </div>
        {% endif %}
        <form action=\"{{ path('login') }}\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"email\">Email:</label>
                <input type=\"email\" name=\"_email\" id=\"email\" class=\"form-control\" value=\"{{ name }}\">
            </div>

            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\">
            </div>
            <button class=\"btn btn-info pull-right\">Connect</button>

        </form>
    </div>
{% endblock %}
", ":Login:login.html.twig", "/home/upboostn/public_html/app/Resources/views/Login/login.html.twig");
    }
}
