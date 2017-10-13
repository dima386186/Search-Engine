<?php

/* :searches:duplicate.html.twig */
class __TwigTemplate_30fa7f96b396088fea708b8d00cdaa3c612fffbb5663e22a0001628eedb7451f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":searches:duplicate.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aed392286b4dba34c6ff1f05b10acb86e4d8af73c42ccb810f81c50531d7dcb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed392286b4dba34c6ff1f05b10acb86e4d8af73c42ccb810f81c50531d7dcb9->enter($__internal_aed392286b4dba34c6ff1f05b10acb86e4d8af73c42ccb810f81c50531d7dcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:duplicate.html.twig"));

        $__internal_152feda8fb24eaf33b892eea58961483e4c0641f7102bf2caf9e2dbf03e00c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152feda8fb24eaf33b892eea58961483e4c0641f7102bf2caf9e2dbf03e00c75->enter($__internal_152feda8fb24eaf33b892eea58961483e4c0641f7102bf2caf9e2dbf03e00c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:duplicate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed392286b4dba34c6ff1f05b10acb86e4d8af73c42ccb810f81c50531d7dcb9->leave($__internal_aed392286b4dba34c6ff1f05b10acb86e4d8af73c42ccb810f81c50531d7dcb9_prof);

        
        $__internal_152feda8fb24eaf33b892eea58961483e4c0641f7102bf2caf9e2dbf03e00c75->leave($__internal_152feda8fb24eaf33b892eea58961483e4c0641f7102bf2caf9e2dbf03e00c75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ffed8c64fede4203ec8ddb7642972bd8c2edd00916e2fb9fa2b488c42d0de7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffed8c64fede4203ec8ddb7642972bd8c2edd00916e2fb9fa2b488c42d0de7f->enter($__internal_4ffed8c64fede4203ec8ddb7642972bd8c2edd00916e2fb9fa2b488c42d0de7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32f94b95edb0391040477528a3d90b49b1fc6bf8e660b698333f127f298e65ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f94b95edb0391040477528a3d90b49b1fc6bf8e660b698333f127f298e65ea->enter($__internal_32f94b95edb0391040477528a3d90b49b1fc6bf8e660b698333f127f298e65ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <hr>
    <h2 class=\"page-header\">Duplicate search</h2>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_32f94b95edb0391040477528a3d90b49b1fc6bf8e660b698333f127f298e65ea->leave($__internal_32f94b95edb0391040477528a3d90b49b1fc6bf8e660b698333f127f298e65ea_prof);

        
        $__internal_4ffed8c64fede4203ec8ddb7642972bd8c2edd00916e2fb9fa2b488c42d0de7f->leave($__internal_4ffed8c64fede4203ec8ddb7642972bd8c2edd00916e2fb9fa2b488c42d0de7f_prof);

    }

    public function getTemplateName()
    {
        return ":searches:duplicate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <hr>
    <h2 class=\"page-header\">Duplicate search</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}", ":searches:duplicate.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/duplicate.html.twig");
    }
}
