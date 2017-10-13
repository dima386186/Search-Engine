<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_987b49a77f2112e666488e921e9cded147f6d230c1b2e8e2fefec70bab27186a extends Twig_Template
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
        $__internal_8099d109c6279f89631ee777580885de2a30e7a02721c92119b14a21bc6aa2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8099d109c6279f89631ee777580885de2a30e7a02721c92119b14a21bc6aa2b2->enter($__internal_8099d109c6279f89631ee777580885de2a30e7a02721c92119b14a21bc6aa2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_31192f3d86613b0d1a137c67357002ac565e811cebf60d8193267eefc5231f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31192f3d86613b0d1a137c67357002ac565e811cebf60d8193267eefc5231f53->enter($__internal_31192f3d86613b0d1a137c67357002ac565e811cebf60d8193267eefc5231f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8099d109c6279f89631ee777580885de2a30e7a02721c92119b14a21bc6aa2b2->leave($__internal_8099d109c6279f89631ee777580885de2a30e7a02721c92119b14a21bc6aa2b2_prof);

        
        $__internal_31192f3d86613b0d1a137c67357002ac565e811cebf60d8193267eefc5231f53->leave($__internal_31192f3d86613b0d1a137c67357002ac565e811cebf60d8193267eefc5231f53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
