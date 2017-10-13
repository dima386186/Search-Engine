<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4ce1d8aa452a8148252b115d458bb3b030bc563f9a42904a9b225b2143525826 extends Twig_Template
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
        $__internal_0de513791ece5f2289174f75a198203bb1eddb44770fa181416f1b4fcb6ab5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de513791ece5f2289174f75a198203bb1eddb44770fa181416f1b4fcb6ab5d7->enter($__internal_0de513791ece5f2289174f75a198203bb1eddb44770fa181416f1b4fcb6ab5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_842565422a09729279aba6ee4e99398c5084b3776143a5d1a9cc66b1c5ecb747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842565422a09729279aba6ee4e99398c5084b3776143a5d1a9cc66b1c5ecb747->enter($__internal_842565422a09729279aba6ee4e99398c5084b3776143a5d1a9cc66b1c5ecb747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0de513791ece5f2289174f75a198203bb1eddb44770fa181416f1b4fcb6ab5d7->leave($__internal_0de513791ece5f2289174f75a198203bb1eddb44770fa181416f1b4fcb6ab5d7_prof);

        
        $__internal_842565422a09729279aba6ee4e99398c5084b3776143a5d1a9cc66b1c5ecb747->leave($__internal_842565422a09729279aba6ee4e99398c5084b3776143a5d1a9cc66b1c5ecb747_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
