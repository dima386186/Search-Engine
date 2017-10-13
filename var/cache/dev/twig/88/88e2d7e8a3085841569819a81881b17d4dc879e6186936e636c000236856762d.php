<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6d0c9399ca64166df9101e3b5a8d48e2c42b3c148659d272010ee51ad17c49c8 extends Twig_Template
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
        $__internal_ab7e3b09c323189102fd75d26d36a51949b1adc894e5fe3448bd00a42676bb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7e3b09c323189102fd75d26d36a51949b1adc894e5fe3448bd00a42676bb52->enter($__internal_ab7e3b09c323189102fd75d26d36a51949b1adc894e5fe3448bd00a42676bb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_bc6d3529cc8395e1ef40a52c6c7f6e183646f5fc91d40af7e357fdaa563e8fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6d3529cc8395e1ef40a52c6c7f6e183646f5fc91d40af7e357fdaa563e8fb6->enter($__internal_bc6d3529cc8395e1ef40a52c6c7f6e183646f5fc91d40af7e357fdaa563e8fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ab7e3b09c323189102fd75d26d36a51949b1adc894e5fe3448bd00a42676bb52->leave($__internal_ab7e3b09c323189102fd75d26d36a51949b1adc894e5fe3448bd00a42676bb52_prof);

        
        $__internal_bc6d3529cc8395e1ef40a52c6c7f6e183646f5fc91d40af7e357fdaa563e8fb6->leave($__internal_bc6d3529cc8395e1ef40a52c6c7f6e183646f5fc91d40af7e357fdaa563e8fb6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
