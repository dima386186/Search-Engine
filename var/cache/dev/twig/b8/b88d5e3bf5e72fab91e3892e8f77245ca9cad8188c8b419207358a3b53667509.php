<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d5d847234ccf6d2ab70cf718081ffe0eebe9739e532fd0b35665871728fdfedc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e23f0146eb5cf7c231d81e847f27ce8224f4e09be1d3cdbe59ed6fbfc292d110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23f0146eb5cf7c231d81e847f27ce8224f4e09be1d3cdbe59ed6fbfc292d110->enter($__internal_e23f0146eb5cf7c231d81e847f27ce8224f4e09be1d3cdbe59ed6fbfc292d110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_399d39b2a71478f639933b34dd7a5fecba3e54aef03b89b83abe0baeabd59426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399d39b2a71478f639933b34dd7a5fecba3e54aef03b89b83abe0baeabd59426->enter($__internal_399d39b2a71478f639933b34dd7a5fecba3e54aef03b89b83abe0baeabd59426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e23f0146eb5cf7c231d81e847f27ce8224f4e09be1d3cdbe59ed6fbfc292d110->leave($__internal_e23f0146eb5cf7c231d81e847f27ce8224f4e09be1d3cdbe59ed6fbfc292d110_prof);

        
        $__internal_399d39b2a71478f639933b34dd7a5fecba3e54aef03b89b83abe0baeabd59426->leave($__internal_399d39b2a71478f639933b34dd7a5fecba3e54aef03b89b83abe0baeabd59426_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
