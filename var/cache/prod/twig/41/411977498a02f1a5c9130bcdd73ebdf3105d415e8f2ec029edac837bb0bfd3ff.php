<?php

/* :searches:test.html.twig */
class __TwigTemplate_c769c05ea669203955e9e8e5a269c8bdd0f4cb5a399b71fdd567b9d27dc74cb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":searches:test.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_table($context, array $blocks = array())
    {
        // line 4
        echo "<a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
";
    }

    public function getTemplateName()
    {
        return ":searches:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":searches:test.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/test.html.twig");
    }
}
