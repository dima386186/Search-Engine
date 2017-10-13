<?php

/* :users:details.html.twig */
class __TwigTemplate_dbb5223b792515264088578bd7c7c2c3b5e22a85708d8390a219dc45c430d3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9422b2d456a6fb9c749c652b036f6b0eea8761a00b0f3206eb097afca916780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9422b2d456a6fb9c749c652b036f6b0eea8761a00b0f3206eb097afca916780->enter($__internal_f9422b2d456a6fb9c749c652b036f6b0eea8761a00b0f3206eb097afca916780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:details.html.twig"));

        $__internal_cd21b19f7c29aa921cbd31aeb871b93382606a9a944352c8e3e81d0dd571ea0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd21b19f7c29aa921cbd31aeb871b93382606a9a944352c8e3e81d0dd571ea0d->enter($__internal_cd21b19f7c29aa921cbd31aeb871b93382606a9a944352c8e3e81d0dd571ea0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9422b2d456a6fb9c749c652b036f6b0eea8761a00b0f3206eb097afca916780->leave($__internal_f9422b2d456a6fb9c749c652b036f6b0eea8761a00b0f3206eb097afca916780_prof);

        
        $__internal_cd21b19f7c29aa921cbd31aeb871b93382606a9a944352c8e3e81d0dd571ea0d->leave($__internal_cd21b19f7c29aa921cbd31aeb871b93382606a9a944352c8e3e81d0dd571ea0d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71ae4157e1d12be2961e604f4031f797f8d20bba61433261877a8542774ee1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ae4157e1d12be2961e604f4031f797f8d20bba61433261877a8542774ee1cd->enter($__internal_71ae4157e1d12be2961e604f4031f797f8d20bba61433261877a8542774ee1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_914efac99e4e42c7b223a1d51a3dd6d13487ce3487bb644e5e1ff197b8bd5eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914efac99e4e42c7b223a1d51a3dd6d13487ce3487bb644e5e1ff197b8bd5eb0->enter($__internal_914efac99e4e42c7b223a1d51a3dd6d13487ce3487bb644e5e1ff197b8bd5eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<a type=\"button\" class=\"btn btn-success\" href=\"/users\">Back to users</a>
\t<hr>
\t<h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</h2>
\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item\">Login: <strong>&nbsp;&nbsp;&nbsp;";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "login", array()), "html", null, true);
        echo "</strong></li>
\t\t<li class=\"list-group-item\">Email: <strong>&nbsp;&nbsp;&nbsp;";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</strong></li>
\t</ul>
";
        
        $__internal_914efac99e4e42c7b223a1d51a3dd6d13487ce3487bb644e5e1ff197b8bd5eb0->leave($__internal_914efac99e4e42c7b223a1d51a3dd6d13487ce3487bb644e5e1ff197b8bd5eb0_prof);

        
        $__internal_71ae4157e1d12be2961e604f4031f797f8d20bba61433261877a8542774ee1cd->leave($__internal_71ae4157e1d12be2961e604f4031f797f8d20bba61433261877a8542774ee1cd_prof);

    }

    public function getTemplateName()
    {
        return ":users:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<a type=\"button\" class=\"btn btn-success\" href=\"/users\">Back to users</a>
\t<hr>
\t<h2 class=\"page-header\">{{ user.name }}</h2>
\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item\">Login: <strong>&nbsp;&nbsp;&nbsp;{{ user.login }}</strong></li>
\t\t<li class=\"list-group-item\">Email: <strong>&nbsp;&nbsp;&nbsp;{{ user.email }}</strong></li>
\t</ul>
{% endblock %}", ":users:details.html.twig", "/home/upboostn/public_html/app/Resources/views/users/details.html.twig");
    }
}
