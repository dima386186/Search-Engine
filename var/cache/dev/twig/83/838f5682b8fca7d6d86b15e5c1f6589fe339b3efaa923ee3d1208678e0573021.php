<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b8514997cd9d6c740e24db51f7b1f4a641fad028ad9e8ab29ee4303c18bb2172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01b614367afe302869c832abebbdea3056ce6c7e4fe2b27e78e1fe48873c1783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b614367afe302869c832abebbdea3056ce6c7e4fe2b27e78e1fe48873c1783->enter($__internal_01b614367afe302869c832abebbdea3056ce6c7e4fe2b27e78e1fe48873c1783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1b7e406ecc64fd1dd3f60c27db1a211152fc6c9effb40a9e741a92b4d0750a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7e406ecc64fd1dd3f60c27db1a211152fc6c9effb40a9e741a92b4d0750a07->enter($__internal_1b7e406ecc64fd1dd3f60c27db1a211152fc6c9effb40a9e741a92b4d0750a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01b614367afe302869c832abebbdea3056ce6c7e4fe2b27e78e1fe48873c1783->leave($__internal_01b614367afe302869c832abebbdea3056ce6c7e4fe2b27e78e1fe48873c1783_prof);

        
        $__internal_1b7e406ecc64fd1dd3f60c27db1a211152fc6c9effb40a9e741a92b4d0750a07->leave($__internal_1b7e406ecc64fd1dd3f60c27db1a211152fc6c9effb40a9e741a92b4d0750a07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb9e0a739ebfb25d98c7f9410c2af00a1ce45224a65fbaeb8b5ee4e4f3312834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9e0a739ebfb25d98c7f9410c2af00a1ce45224a65fbaeb8b5ee4e4f3312834->enter($__internal_fb9e0a739ebfb25d98c7f9410c2af00a1ce45224a65fbaeb8b5ee4e4f3312834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_add55180879d94c1c79879f44feb9467ec88eeef771619816eab9c84d8556abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add55180879d94c1c79879f44feb9467ec88eeef771619816eab9c84d8556abf->enter($__internal_add55180879d94c1c79879f44feb9467ec88eeef771619816eab9c84d8556abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_add55180879d94c1c79879f44feb9467ec88eeef771619816eab9c84d8556abf->leave($__internal_add55180879d94c1c79879f44feb9467ec88eeef771619816eab9c84d8556abf_prof);

        
        $__internal_fb9e0a739ebfb25d98c7f9410c2af00a1ce45224a65fbaeb8b5ee4e4f3312834->leave($__internal_fb9e0a739ebfb25d98c7f9410c2af00a1ce45224a65fbaeb8b5ee4e4f3312834_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b27172d1f8740d65ff19d45733845970aad3770cd2c02ee03c178553efb9782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b27172d1f8740d65ff19d45733845970aad3770cd2c02ee03c178553efb9782->enter($__internal_3b27172d1f8740d65ff19d45733845970aad3770cd2c02ee03c178553efb9782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_45af3f1c6fd47f09cb970b045a459fab180335637d99b8452e93fb2944c784f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45af3f1c6fd47f09cb970b045a459fab180335637d99b8452e93fb2944c784f6->enter($__internal_45af3f1c6fd47f09cb970b045a459fab180335637d99b8452e93fb2944c784f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_45af3f1c6fd47f09cb970b045a459fab180335637d99b8452e93fb2944c784f6->leave($__internal_45af3f1c6fd47f09cb970b045a459fab180335637d99b8452e93fb2944c784f6_prof);

        
        $__internal_3b27172d1f8740d65ff19d45733845970aad3770cd2c02ee03c178553efb9782->leave($__internal_3b27172d1f8740d65ff19d45733845970aad3770cd2c02ee03c178553efb9782_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ead19732420eae92d8998415aead067da6f6f9079884a594318249dd2b33339c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead19732420eae92d8998415aead067da6f6f9079884a594318249dd2b33339c->enter($__internal_ead19732420eae92d8998415aead067da6f6f9079884a594318249dd2b33339c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9da605d1990014123e0a999dc215b5e87822d282628595ef839705e8a6d1b36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da605d1990014123e0a999dc215b5e87822d282628595ef839705e8a6d1b36b->enter($__internal_9da605d1990014123e0a999dc215b5e87822d282628595ef839705e8a6d1b36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9da605d1990014123e0a999dc215b5e87822d282628595ef839705e8a6d1b36b->leave($__internal_9da605d1990014123e0a999dc215b5e87822d282628595ef839705e8a6d1b36b_prof);

        
        $__internal_ead19732420eae92d8998415aead067da6f6f9079884a594318249dd2b33339c->leave($__internal_ead19732420eae92d8998415aead067da6f6f9079884a594318249dd2b33339c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
