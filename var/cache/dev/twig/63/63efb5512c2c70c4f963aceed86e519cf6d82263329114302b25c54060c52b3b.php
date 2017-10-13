<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_79c4c3a451034d31a7aae8bcf51b72a9164a62e4ac708de0b90af8d85cc548a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd6425b40eb2dce57ccdedf453826354bb1023b7fe814e3e623d548c23bd224d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6425b40eb2dce57ccdedf453826354bb1023b7fe814e3e623d548c23bd224d->enter($__internal_fd6425b40eb2dce57ccdedf453826354bb1023b7fe814e3e623d548c23bd224d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b83e79c8048f63665df9d1cbd531dfc666115f4a85fe7ebcc0eaf73728a08b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83e79c8048f63665df9d1cbd531dfc666115f4a85fe7ebcc0eaf73728a08b86->enter($__internal_b83e79c8048f63665df9d1cbd531dfc666115f4a85fe7ebcc0eaf73728a08b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd6425b40eb2dce57ccdedf453826354bb1023b7fe814e3e623d548c23bd224d->leave($__internal_fd6425b40eb2dce57ccdedf453826354bb1023b7fe814e3e623d548c23bd224d_prof);

        
        $__internal_b83e79c8048f63665df9d1cbd531dfc666115f4a85fe7ebcc0eaf73728a08b86->leave($__internal_b83e79c8048f63665df9d1cbd531dfc666115f4a85fe7ebcc0eaf73728a08b86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2494f0f5e662851c585a884bc6a02ba8ed45ffbe1fe6ba980a0d3722136a872a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2494f0f5e662851c585a884bc6a02ba8ed45ffbe1fe6ba980a0d3722136a872a->enter($__internal_2494f0f5e662851c585a884bc6a02ba8ed45ffbe1fe6ba980a0d3722136a872a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3307c0775d615f4ebd1bd2601dc27e56a3f9cb1344f286dfb504bfc25db89055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3307c0775d615f4ebd1bd2601dc27e56a3f9cb1344f286dfb504bfc25db89055->enter($__internal_3307c0775d615f4ebd1bd2601dc27e56a3f9cb1344f286dfb504bfc25db89055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3307c0775d615f4ebd1bd2601dc27e56a3f9cb1344f286dfb504bfc25db89055->leave($__internal_3307c0775d615f4ebd1bd2601dc27e56a3f9cb1344f286dfb504bfc25db89055_prof);

        
        $__internal_2494f0f5e662851c585a884bc6a02ba8ed45ffbe1fe6ba980a0d3722136a872a->leave($__internal_2494f0f5e662851c585a884bc6a02ba8ed45ffbe1fe6ba980a0d3722136a872a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c7d46bb789d3c54d1704e44220ba9b441f18aa8b55c24ae284ec19670dc3f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c7d46bb789d3c54d1704e44220ba9b441f18aa8b55c24ae284ec19670dc3f8d->enter($__internal_7c7d46bb789d3c54d1704e44220ba9b441f18aa8b55c24ae284ec19670dc3f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dca6d99837a78023f1555cfd4f279bd7524dbb2b32a4ec5d5056b933766f6f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca6d99837a78023f1555cfd4f279bd7524dbb2b32a4ec5d5056b933766f6f9e->enter($__internal_dca6d99837a78023f1555cfd4f279bd7524dbb2b32a4ec5d5056b933766f6f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_dca6d99837a78023f1555cfd4f279bd7524dbb2b32a4ec5d5056b933766f6f9e->leave($__internal_dca6d99837a78023f1555cfd4f279bd7524dbb2b32a4ec5d5056b933766f6f9e_prof);

        
        $__internal_7c7d46bb789d3c54d1704e44220ba9b441f18aa8b55c24ae284ec19670dc3f8d->leave($__internal_7c7d46bb789d3c54d1704e44220ba9b441f18aa8b55c24ae284ec19670dc3f8d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
