<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f160a4f86905d666e7d59236556711d2cffa172c52e72e42edb91607982422af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_089f4c390d2ae637425483f031d692fedc9bc87f1305924efaa270564f67f107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089f4c390d2ae637425483f031d692fedc9bc87f1305924efaa270564f67f107->enter($__internal_089f4c390d2ae637425483f031d692fedc9bc87f1305924efaa270564f67f107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_881b8e5488d37ba01249ae3ae8e40bd5a5919b4ba36b785ee0757f0cd91805af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881b8e5488d37ba01249ae3ae8e40bd5a5919b4ba36b785ee0757f0cd91805af->enter($__internal_881b8e5488d37ba01249ae3ae8e40bd5a5919b4ba36b785ee0757f0cd91805af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_089f4c390d2ae637425483f031d692fedc9bc87f1305924efaa270564f67f107->leave($__internal_089f4c390d2ae637425483f031d692fedc9bc87f1305924efaa270564f67f107_prof);

        
        $__internal_881b8e5488d37ba01249ae3ae8e40bd5a5919b4ba36b785ee0757f0cd91805af->leave($__internal_881b8e5488d37ba01249ae3ae8e40bd5a5919b4ba36b785ee0757f0cd91805af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7b2760089cd7846c9950c9e2f36b5a454de5b13a4887e10aa04b6eb212a3bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b2760089cd7846c9950c9e2f36b5a454de5b13a4887e10aa04b6eb212a3bae->enter($__internal_a7b2760089cd7846c9950c9e2f36b5a454de5b13a4887e10aa04b6eb212a3bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3056864ffabde997da4c66928f21272a290054edfc59a0429958fb55b6d31e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3056864ffabde997da4c66928f21272a290054edfc59a0429958fb55b6d31e61->enter($__internal_3056864ffabde997da4c66928f21272a290054edfc59a0429958fb55b6d31e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3056864ffabde997da4c66928f21272a290054edfc59a0429958fb55b6d31e61->leave($__internal_3056864ffabde997da4c66928f21272a290054edfc59a0429958fb55b6d31e61_prof);

        
        $__internal_a7b2760089cd7846c9950c9e2f36b5a454de5b13a4887e10aa04b6eb212a3bae->leave($__internal_a7b2760089cd7846c9950c9e2f36b5a454de5b13a4887e10aa04b6eb212a3bae_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a82393b1d5706d6ce874e25ede5a66284c57f5b1f8a9c281be83fc27f739a5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82393b1d5706d6ce874e25ede5a66284c57f5b1f8a9c281be83fc27f739a5d8->enter($__internal_a82393b1d5706d6ce874e25ede5a66284c57f5b1f8a9c281be83fc27f739a5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8f2fbd7f23be8388ed099af1952db79e7be97a019d4212f16303937d54d89c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2fbd7f23be8388ed099af1952db79e7be97a019d4212f16303937d54d89c87->enter($__internal_8f2fbd7f23be8388ed099af1952db79e7be97a019d4212f16303937d54d89c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8f2fbd7f23be8388ed099af1952db79e7be97a019d4212f16303937d54d89c87->leave($__internal_8f2fbd7f23be8388ed099af1952db79e7be97a019d4212f16303937d54d89c87_prof);

        
        $__internal_a82393b1d5706d6ce874e25ede5a66284c57f5b1f8a9c281be83fc27f739a5d8->leave($__internal_a82393b1d5706d6ce874e25ede5a66284c57f5b1f8a9c281be83fc27f739a5d8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10c1badedc09729366d159135c30f43e93bc3f44c21401fd246874cfa60361ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c1badedc09729366d159135c30f43e93bc3f44c21401fd246874cfa60361ef->enter($__internal_10c1badedc09729366d159135c30f43e93bc3f44c21401fd246874cfa60361ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca4c18d0cb10cf36ccec7664f30cee3043312833d8ea7f6a34ec748796689115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4c18d0cb10cf36ccec7664f30cee3043312833d8ea7f6a34ec748796689115->enter($__internal_ca4c18d0cb10cf36ccec7664f30cee3043312833d8ea7f6a34ec748796689115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ca4c18d0cb10cf36ccec7664f30cee3043312833d8ea7f6a34ec748796689115->leave($__internal_ca4c18d0cb10cf36ccec7664f30cee3043312833d8ea7f6a34ec748796689115_prof);

        
        $__internal_10c1badedc09729366d159135c30f43e93bc3f44c21401fd246874cfa60361ef->leave($__internal_10c1badedc09729366d159135c30f43e93bc3f44c21401fd246874cfa60361ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
