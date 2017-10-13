<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_147ae622e5aa673896d5aeda53bbf72e0fdf185053988aa9004ea919ddf974d9 extends Twig_Template
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
        $__internal_4d57c009474f39d2385d69ebab743dcda1a2bf760655e2ff1ca90c75e79df0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d57c009474f39d2385d69ebab743dcda1a2bf760655e2ff1ca90c75e79df0db->enter($__internal_4d57c009474f39d2385d69ebab743dcda1a2bf760655e2ff1ca90c75e79df0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_80b2edca17216985d0c8ecc1d26cab64dcf0e8d2a829e98135046dfb0d7e5bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b2edca17216985d0c8ecc1d26cab64dcf0e8d2a829e98135046dfb0d7e5bdb->enter($__internal_80b2edca17216985d0c8ecc1d26cab64dcf0e8d2a829e98135046dfb0d7e5bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4d57c009474f39d2385d69ebab743dcda1a2bf760655e2ff1ca90c75e79df0db->leave($__internal_4d57c009474f39d2385d69ebab743dcda1a2bf760655e2ff1ca90c75e79df0db_prof);

        
        $__internal_80b2edca17216985d0c8ecc1d26cab64dcf0e8d2a829e98135046dfb0d7e5bdb->leave($__internal_80b2edca17216985d0c8ecc1d26cab64dcf0e8d2a829e98135046dfb0d7e5bdb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
