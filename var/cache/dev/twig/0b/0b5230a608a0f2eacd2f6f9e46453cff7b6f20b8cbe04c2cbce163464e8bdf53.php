<?php

/* Emails/newMessage.html.twig */
class __TwigTemplate_950a8d3b491f2b61554a0160fd7a261e275e810fa687aa6b4dd2e49e0a5c2039 extends Twig_Template
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
        $__internal_01a6588705f39ec8ede51b309f6871c67d9049b6f807cdec128ad2c402b94333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a6588705f39ec8ede51b309f6871c67d9049b6f807cdec128ad2c402b94333->enter($__internal_01a6588705f39ec8ede51b309f6871c67d9049b6f807cdec128ad2c402b94333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/newMessage.html.twig"));

        $__internal_6d3ea437814626f6a30ad562a06db0ac71e31a051eb4e48d18674a4b1dbb1a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3ea437814626f6a30ad562a06db0ac71e31a051eb4e48d18674a4b1dbb1a7b->enter($__internal_6d3ea437814626f6a30ad562a06db0ac71e31a051eb4e48d18674a4b1dbb1a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/newMessage.html.twig"));

        // line 1
        echo "<br>
<div style=\"text-align: center; margin-bottom: 40px\">
    <h1 style=\"color: #500050\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo " (Rating - ";
        echo twig_escape_filter($this->env, ($context["rating"] ?? $this->getContext($context, "rating")), "html", null, true);
        echo ")</h1>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" style=\"display: block; text-align: center\">";
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "</a>
    <br>
    <h3>";
        // line 6
        echo twig_escape_filter($this->env, ($context["description"] ?? $this->getContext($context, "description")), "html", null, true);
        echo "</h3>
</div>
";
        
        $__internal_01a6588705f39ec8ede51b309f6871c67d9049b6f807cdec128ad2c402b94333->leave($__internal_01a6588705f39ec8ede51b309f6871c67d9049b6f807cdec128ad2c402b94333_prof);

        
        $__internal_6d3ea437814626f6a30ad562a06db0ac71e31a051eb4e48d18674a4b1dbb1a7b->leave($__internal_6d3ea437814626f6a30ad562a06db0ac71e31a051eb4e48d18674a4b1dbb1a7b_prof);

    }

    public function getTemplateName()
    {
        return "Emails/newMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  35 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br>
<div style=\"text-align: center; margin-bottom: 40px\">
    <h1 style=\"color: #500050\">{{ title }} (Rating - {{ rating }})</h1>
    <a href=\"{{ url }}\" style=\"display: block; text-align: center\">{{ url }}</a>
    <br>
    <h3>{{ description }}</h3>
</div>
", "Emails/newMessage.html.twig", "/home/upboostn/public_html/app/Resources/views/Emails/newMessage.html.twig");
    }
}
