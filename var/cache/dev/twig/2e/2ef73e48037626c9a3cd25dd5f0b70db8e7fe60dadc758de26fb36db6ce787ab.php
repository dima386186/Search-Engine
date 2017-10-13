<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d6c5b134e317e0bf1f8e7113fe5c8cb2db609223283feff61069efcd858cf459 extends Twig_Template
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
        $__internal_13b5caa585d2abc1c6e7318203620be54e9cd9282ba2b565723df700746c99d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b5caa585d2abc1c6e7318203620be54e9cd9282ba2b565723df700746c99d9->enter($__internal_13b5caa585d2abc1c6e7318203620be54e9cd9282ba2b565723df700746c99d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a9be85d2e63d54c6970f60530be799f6695a7356540740cda45b788cb0016b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9be85d2e63d54c6970f60530be799f6695a7356540740cda45b788cb0016b87->enter($__internal_a9be85d2e63d54c6970f60530be799f6695a7356540740cda45b788cb0016b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_13b5caa585d2abc1c6e7318203620be54e9cd9282ba2b565723df700746c99d9->leave($__internal_13b5caa585d2abc1c6e7318203620be54e9cd9282ba2b565723df700746c99d9_prof);

        
        $__internal_a9be85d2e63d54c6970f60530be799f6695a7356540740cda45b788cb0016b87->leave($__internal_a9be85d2e63d54c6970f60530be799f6695a7356540740cda45b788cb0016b87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
