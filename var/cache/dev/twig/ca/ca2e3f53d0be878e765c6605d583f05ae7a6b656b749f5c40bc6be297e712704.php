<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ad5aa7ba023fa17e24987e1805714ed0b29f690b8126d998a3d5067a9a373db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9f5664bfba098d30457b9c5e113e8005e3c3bb4e00e053b09735285900f54eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f5664bfba098d30457b9c5e113e8005e3c3bb4e00e053b09735285900f54eb->enter($__internal_a9f5664bfba098d30457b9c5e113e8005e3c3bb4e00e053b09735285900f54eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f8af4d44f6f97a658a1057323c2bbe4a12861b25f2024bf9fd2b1eacc83bc954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8af4d44f6f97a658a1057323c2bbe4a12861b25f2024bf9fd2b1eacc83bc954->enter($__internal_f8af4d44f6f97a658a1057323c2bbe4a12861b25f2024bf9fd2b1eacc83bc954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f5664bfba098d30457b9c5e113e8005e3c3bb4e00e053b09735285900f54eb->leave($__internal_a9f5664bfba098d30457b9c5e113e8005e3c3bb4e00e053b09735285900f54eb_prof);

        
        $__internal_f8af4d44f6f97a658a1057323c2bbe4a12861b25f2024bf9fd2b1eacc83bc954->leave($__internal_f8af4d44f6f97a658a1057323c2bbe4a12861b25f2024bf9fd2b1eacc83bc954_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_66ecce8a1824b40dbac5c092a90561570de454a8ba3b334804b43fb2f9cf298f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ecce8a1824b40dbac5c092a90561570de454a8ba3b334804b43fb2f9cf298f->enter($__internal_66ecce8a1824b40dbac5c092a90561570de454a8ba3b334804b43fb2f9cf298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_016efa8896a797c28e28fe882f72becfa0d0cc1a28a22d9d9d32c710c5dc187a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016efa8896a797c28e28fe882f72becfa0d0cc1a28a22d9d9d32c710c5dc187a->enter($__internal_016efa8896a797c28e28fe882f72becfa0d0cc1a28a22d9d9d32c710c5dc187a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_016efa8896a797c28e28fe882f72becfa0d0cc1a28a22d9d9d32c710c5dc187a->leave($__internal_016efa8896a797c28e28fe882f72becfa0d0cc1a28a22d9d9d32c710c5dc187a_prof);

        
        $__internal_66ecce8a1824b40dbac5c092a90561570de454a8ba3b334804b43fb2f9cf298f->leave($__internal_66ecce8a1824b40dbac5c092a90561570de454a8ba3b334804b43fb2f9cf298f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf0cae319c5246b16d2ede9dac3b34fedd069b770194e8017f1bc519f19f15d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0cae319c5246b16d2ede9dac3b34fedd069b770194e8017f1bc519f19f15d4->enter($__internal_bf0cae319c5246b16d2ede9dac3b34fedd069b770194e8017f1bc519f19f15d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb7aec5fb4f5a8f53ea36c41d11d8bdde219d2ff05e5f02464ab4f8890f129e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7aec5fb4f5a8f53ea36c41d11d8bdde219d2ff05e5f02464ab4f8890f129e5->enter($__internal_bb7aec5fb4f5a8f53ea36c41d11d8bdde219d2ff05e5f02464ab4f8890f129e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bb7aec5fb4f5a8f53ea36c41d11d8bdde219d2ff05e5f02464ab4f8890f129e5->leave($__internal_bb7aec5fb4f5a8f53ea36c41d11d8bdde219d2ff05e5f02464ab4f8890f129e5_prof);

        
        $__internal_bf0cae319c5246b16d2ede9dac3b34fedd069b770194e8017f1bc519f19f15d4->leave($__internal_bf0cae319c5246b16d2ede9dac3b34fedd069b770194e8017f1bc519f19f15d4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
