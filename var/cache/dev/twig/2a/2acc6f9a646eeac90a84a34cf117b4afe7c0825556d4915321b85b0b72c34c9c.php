<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ae96ab11be02dcd8d8732ace4d6a21aad82ffa91a9a75e46ef7ca655d0f6f79e extends Twig_Template
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
        $__internal_264bdd57d463ca401e8b66a5a7f1f640214a9f889e00486360fc1b287ad38e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264bdd57d463ca401e8b66a5a7f1f640214a9f889e00486360fc1b287ad38e94->enter($__internal_264bdd57d463ca401e8b66a5a7f1f640214a9f889e00486360fc1b287ad38e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e8e2b5baa9d862c96dbab3b028afc9e3a252a8fba54f22df6787b3543a6908f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e2b5baa9d862c96dbab3b028afc9e3a252a8fba54f22df6787b3543a6908f6->enter($__internal_e8e2b5baa9d862c96dbab3b028afc9e3a252a8fba54f22df6787b3543a6908f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_264bdd57d463ca401e8b66a5a7f1f640214a9f889e00486360fc1b287ad38e94->leave($__internal_264bdd57d463ca401e8b66a5a7f1f640214a9f889e00486360fc1b287ad38e94_prof);

        
        $__internal_e8e2b5baa9d862c96dbab3b028afc9e3a252a8fba54f22df6787b3543a6908f6->leave($__internal_e8e2b5baa9d862c96dbab3b028afc9e3a252a8fba54f22df6787b3543a6908f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
