<?php

/* :Login:login.html.twig */
class __TwigTemplate_8307cdce78cff0184ba42ae840476ce0e8f8696f4185e87f4bab47ec514c613c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":Login:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"panel panel-heading\">
        <h1>Login</h1>
    </div>
    <div class=\"panel panel-body\">
        ";
        // line 10
        if (($context["errors"] ?? null)) {
            // line 11
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "messageKey", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 15
        echo "        <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"email\">Email:</label>
                <input type=\"email\" name=\"_email\" id=\"email\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\">
            </div>
            <button class=\"btn btn-info pull-right\">Connect</button>

        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  55 => 15,  49 => 12,  46 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Login:login.html.twig", "/home/upboostn/public_html/app/Resources/views/Login/login.html.twig");
    }
}
