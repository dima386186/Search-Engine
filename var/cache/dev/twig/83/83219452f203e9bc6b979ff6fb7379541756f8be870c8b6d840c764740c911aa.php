<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6744dcf743d945140b32c41b6edc99af382c6ba470d0e405b681e7770dac1221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27ee1265632b5e477d28a06953b3a75ac87aa073dede65dc8976f0bb26c01406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ee1265632b5e477d28a06953b3a75ac87aa073dede65dc8976f0bb26c01406->enter($__internal_27ee1265632b5e477d28a06953b3a75ac87aa073dede65dc8976f0bb26c01406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_7d2bd7d31153d1329c2368a2d95b486e69832f22741ff9e72c92f411545e698c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2bd7d31153d1329c2368a2d95b486e69832f22741ff9e72c92f411545e698c->enter($__internal_7d2bd7d31153d1329c2368a2d95b486e69832f22741ff9e72c92f411545e698c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ee1265632b5e477d28a06953b3a75ac87aa073dede65dc8976f0bb26c01406->leave($__internal_27ee1265632b5e477d28a06953b3a75ac87aa073dede65dc8976f0bb26c01406_prof);

        
        $__internal_7d2bd7d31153d1329c2368a2d95b486e69832f22741ff9e72c92f411545e698c->leave($__internal_7d2bd7d31153d1329c2368a2d95b486e69832f22741ff9e72c92f411545e698c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50ce652e93c2e48c88692a648a7741dda8ee01b8d80668d1aed53ed95cdb89d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ce652e93c2e48c88692a648a7741dda8ee01b8d80668d1aed53ed95cdb89d8->enter($__internal_50ce652e93c2e48c88692a648a7741dda8ee01b8d80668d1aed53ed95cdb89d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_50387d0ea76028659faa284a50d64744719f3ad3656e288f9527f0544b60767a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50387d0ea76028659faa284a50d64744719f3ad3656e288f9527f0544b60767a->enter($__internal_50387d0ea76028659faa284a50d64744719f3ad3656e288f9527f0544b60767a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_50387d0ea76028659faa284a50d64744719f3ad3656e288f9527f0544b60767a->leave($__internal_50387d0ea76028659faa284a50d64744719f3ad3656e288f9527f0544b60767a_prof);

        
        $__internal_50ce652e93c2e48c88692a648a7741dda8ee01b8d80668d1aed53ed95cdb89d8->leave($__internal_50ce652e93c2e48c88692a648a7741dda8ee01b8d80668d1aed53ed95cdb89d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
