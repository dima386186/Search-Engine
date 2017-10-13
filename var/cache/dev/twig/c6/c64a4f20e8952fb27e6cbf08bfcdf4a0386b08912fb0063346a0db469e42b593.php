<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8069e70d132b089d6cbf520d95d2357824fd25826925108bee6902f8d0a82482 extends Twig_Template
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
        $__internal_1efdec7ffbe90d37f81ad6b17c77934c6737a961d8e4b43faee48fae5b2702be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efdec7ffbe90d37f81ad6b17c77934c6737a961d8e4b43faee48fae5b2702be->enter($__internal_1efdec7ffbe90d37f81ad6b17c77934c6737a961d8e4b43faee48fae5b2702be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b5f1725848d55c93bb1f9667dbbfbbf652e67dc4e6a06292e059143f15bb8610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f1725848d55c93bb1f9667dbbfbbf652e67dc4e6a06292e059143f15bb8610->enter($__internal_b5f1725848d55c93bb1f9667dbbfbbf652e67dc4e6a06292e059143f15bb8610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1efdec7ffbe90d37f81ad6b17c77934c6737a961d8e4b43faee48fae5b2702be->leave($__internal_1efdec7ffbe90d37f81ad6b17c77934c6737a961d8e4b43faee48fae5b2702be_prof);

        
        $__internal_b5f1725848d55c93bb1f9667dbbfbbf652e67dc4e6a06292e059143f15bb8610->leave($__internal_b5f1725848d55c93bb1f9667dbbfbbf652e67dc4e6a06292e059143f15bb8610_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
