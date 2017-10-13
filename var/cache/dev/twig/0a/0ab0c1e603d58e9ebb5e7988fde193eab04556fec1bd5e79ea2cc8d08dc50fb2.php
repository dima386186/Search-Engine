<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bc176714df29ef7881095cb8e5c764f23373b1b74205430e8873669f5c3763e1 extends Twig_Template
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
        $__internal_888c2cbfde6724cd9879a64d530956752c6d2adb2f188acebf4af02fc1770d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888c2cbfde6724cd9879a64d530956752c6d2adb2f188acebf4af02fc1770d04->enter($__internal_888c2cbfde6724cd9879a64d530956752c6d2adb2f188acebf4af02fc1770d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_4401acf5c9efdb6e42e9738348ccd56be280e89fff023a213b6f20697e7d46a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4401acf5c9efdb6e42e9738348ccd56be280e89fff023a213b6f20697e7d46a1->enter($__internal_4401acf5c9efdb6e42e9738348ccd56be280e89fff023a213b6f20697e7d46a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_888c2cbfde6724cd9879a64d530956752c6d2adb2f188acebf4af02fc1770d04->leave($__internal_888c2cbfde6724cd9879a64d530956752c6d2adb2f188acebf4af02fc1770d04_prof);

        
        $__internal_4401acf5c9efdb6e42e9738348ccd56be280e89fff023a213b6f20697e7d46a1->leave($__internal_4401acf5c9efdb6e42e9738348ccd56be280e89fff023a213b6f20697e7d46a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
