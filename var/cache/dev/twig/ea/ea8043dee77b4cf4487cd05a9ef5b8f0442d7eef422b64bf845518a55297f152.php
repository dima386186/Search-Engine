<?php

/* :Emails:message.html.twig */
class __TwigTemplate_ea0c8f964b13a8cf3abb22122d88ac59b46c2fca708aa9a79c78067aff13e1de extends Twig_Template
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
        $__internal_e078f2376d45e203ddc3b61fede16143f62dc0ec729f52b49317919c9f870f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e078f2376d45e203ddc3b61fede16143f62dc0ec729f52b49317919c9f870f7a->enter($__internal_e078f2376d45e203ddc3b61fede16143f62dc0ec729f52b49317919c9f870f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:message.html.twig"));

        $__internal_bfa21b842c925986413c1daa6d44c4f211fe1a2300f29e265ccf9896e83363ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa21b842c925986413c1daa6d44c4f211fe1a2300f29e265ccf9896e83363ea->enter($__internal_bfa21b842c925986413c1daa6d44c4f211fe1a2300f29e265ccf9896e83363ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:message.html.twig"));

        // line 1
        echo "
<br>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? $this->getContext($context, "datas")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 4
            echo "    <div style=\"text-align: center; margin-bottom: 40px\">
        <h1 style=\"color: #500050\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</h1>
        <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url", array()), "html", null, true);
            echo "</a>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        
        $__internal_e078f2376d45e203ddc3b61fede16143f62dc0ec729f52b49317919c9f870f7a->leave($__internal_e078f2376d45e203ddc3b61fede16143f62dc0ec729f52b49317919c9f870f7a_prof);

        
        $__internal_bfa21b842c925986413c1daa6d44c4f211fe1a2300f29e265ccf9896e83363ea->leave($__internal_bfa21b842c925986413c1daa6d44c4f211fe1a2300f29e265ccf9896e83363ea_prof);

    }

    public function getTemplateName()
    {
        return ":Emails:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  40 => 6,  36 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<br>
{% for data in datas %}
    <div style=\"text-align: center; margin-bottom: 40px\">
        <h1 style=\"color: #500050\">{{ data.title }}</h1>
        <a href=\"{{ data.url }}\">{{ data.url }}</a>
    </div>

{% endfor %}

", ":Emails:message.html.twig", "/home/upboostn/public_html/app/Resources/views/Emails/message.html.twig");
    }
}
