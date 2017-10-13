<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c02ab3126ae6119e736c1a76120e288944155f045befba34f754c499801b4b3c extends Twig_Template
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
        $__internal_f547f155b3a985bc1050bd3ce81b008aaef0d8c8be61606ca1fbe60edcba0aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f547f155b3a985bc1050bd3ce81b008aaef0d8c8be61606ca1fbe60edcba0aef->enter($__internal_f547f155b3a985bc1050bd3ce81b008aaef0d8c8be61606ca1fbe60edcba0aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_140d3d4d1b7000dcb480360f9ee7f7f6183d00d6cc178223b950daf77b3e7666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140d3d4d1b7000dcb480360f9ee7f7f6183d00d6cc178223b950daf77b3e7666->enter($__internal_140d3d4d1b7000dcb480360f9ee7f7f6183d00d6cc178223b950daf77b3e7666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f547f155b3a985bc1050bd3ce81b008aaef0d8c8be61606ca1fbe60edcba0aef->leave($__internal_f547f155b3a985bc1050bd3ce81b008aaef0d8c8be61606ca1fbe60edcba0aef_prof);

        
        $__internal_140d3d4d1b7000dcb480360f9ee7f7f6183d00d6cc178223b950daf77b3e7666->leave($__internal_140d3d4d1b7000dcb480360f9ee7f7f6183d00d6cc178223b950daf77b3e7666_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
