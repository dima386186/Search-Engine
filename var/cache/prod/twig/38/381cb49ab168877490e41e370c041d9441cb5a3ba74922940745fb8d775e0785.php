<?php

/* :Emails:newMessage.html.twig */
class __TwigTemplate_b8f50e81e5454c80932cd542d65d4258917fecf2a3dea2989caeb24ffd0f47cb extends Twig_Template
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
        // line 1
        echo "<br>
<div style=\"text-align: center; margin-bottom: 40px\">
    <h1 style=\"color: #500050\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " (Rating - ";
        echo twig_escape_filter($this->env, ($context["rating"] ?? null), "html", null, true);
        echo ")</h1>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" style=\"display: block; text-align: center\">";
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "</a>
    <br>
    <h3>";
        // line 6
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</h3>
</div>
";
    }

    public function getTemplateName()
    {
        return ":Emails:newMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails:newMessage.html.twig", "/home/upboostn/public_html/app/Resources/views/Emails/newMessage.html.twig");
    }
}
