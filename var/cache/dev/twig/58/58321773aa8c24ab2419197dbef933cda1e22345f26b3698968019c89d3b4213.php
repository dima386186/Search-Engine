<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6d7f748a8b649ff162451a54d1f844ea4ebce8281fba8df6c2108bc26d8372a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_168efa87b8f8ef882a0282681a877a76323538adcead39b43cf39b82d9687000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168efa87b8f8ef882a0282681a877a76323538adcead39b43cf39b82d9687000->enter($__internal_168efa87b8f8ef882a0282681a877a76323538adcead39b43cf39b82d9687000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e2471fa430b2f5d943398615aea83db9407be35e72be2c731bf93c31dcad3caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2471fa430b2f5d943398615aea83db9407be35e72be2c731bf93c31dcad3caf->enter($__internal_e2471fa430b2f5d943398615aea83db9407be35e72be2c731bf93c31dcad3caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_168efa87b8f8ef882a0282681a877a76323538adcead39b43cf39b82d9687000->leave($__internal_168efa87b8f8ef882a0282681a877a76323538adcead39b43cf39b82d9687000_prof);

        
        $__internal_e2471fa430b2f5d943398615aea83db9407be35e72be2c731bf93c31dcad3caf->leave($__internal_e2471fa430b2f5d943398615aea83db9407be35e72be2c731bf93c31dcad3caf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b00e63208f258ca662b2c6a4522ac922d0f4690877908a6a03186bb232d367d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00e63208f258ca662b2c6a4522ac922d0f4690877908a6a03186bb232d367d7->enter($__internal_b00e63208f258ca662b2c6a4522ac922d0f4690877908a6a03186bb232d367d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9fe6d1b81d6b468ed4714a8bd1d913c06b5b498eab86137fd8f6083dd2bbfd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe6d1b81d6b468ed4714a8bd1d913c06b5b498eab86137fd8f6083dd2bbfd2b->enter($__internal_9fe6d1b81d6b468ed4714a8bd1d913c06b5b498eab86137fd8f6083dd2bbfd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9fe6d1b81d6b468ed4714a8bd1d913c06b5b498eab86137fd8f6083dd2bbfd2b->leave($__internal_9fe6d1b81d6b468ed4714a8bd1d913c06b5b498eab86137fd8f6083dd2bbfd2b_prof);

        
        $__internal_b00e63208f258ca662b2c6a4522ac922d0f4690877908a6a03186bb232d367d7->leave($__internal_b00e63208f258ca662b2c6a4522ac922d0f4690877908a6a03186bb232d367d7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2bd02a21c5ad3803b1379b95e7776f04bf230c2bf5d1d089cb106f70152c21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2bd02a21c5ad3803b1379b95e7776f04bf230c2bf5d1d089cb106f70152c21b->enter($__internal_c2bd02a21c5ad3803b1379b95e7776f04bf230c2bf5d1d089cb106f70152c21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2d072c9886eb3ef82db46f3b206c4e147575ecd47c2df95ffd754869d157d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d072c9886eb3ef82db46f3b206c4e147575ecd47c2df95ffd754869d157d36->enter($__internal_b2d072c9886eb3ef82db46f3b206c4e147575ecd47c2df95ffd754869d157d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b2d072c9886eb3ef82db46f3b206c4e147575ecd47c2df95ffd754869d157d36->leave($__internal_b2d072c9886eb3ef82db46f3b206c4e147575ecd47c2df95ffd754869d157d36_prof);

        
        $__internal_c2bd02a21c5ad3803b1379b95e7776f04bf230c2bf5d1d089cb106f70152c21b->leave($__internal_c2bd02a21c5ad3803b1379b95e7776f04bf230c2bf5d1d089cb106f70152c21b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
