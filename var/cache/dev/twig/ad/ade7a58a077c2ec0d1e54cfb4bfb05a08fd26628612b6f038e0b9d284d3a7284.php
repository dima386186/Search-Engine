<?php

/* :users:index.html.twig */
class __TwigTemplate_b51c71635c4377464c18a61f12694329185038a64a2723a077c0223addb8508c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:index.html.twig", 1);
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
        $__internal_33b5303057c7971f00085df080ae6ebe76293c5eeec4880238898378580f9910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b5303057c7971f00085df080ae6ebe76293c5eeec4880238898378580f9910->enter($__internal_33b5303057c7971f00085df080ae6ebe76293c5eeec4880238898378580f9910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:index.html.twig"));

        $__internal_057fb617302addf9297eaae94011af7f1c7b525d5945a32a5c19774c50ba1392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057fb617302addf9297eaae94011af7f1c7b525d5945a32a5c19774c50ba1392->enter($__internal_057fb617302addf9297eaae94011af7f1c7b525d5945a32a5c19774c50ba1392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b5303057c7971f00085df080ae6ebe76293c5eeec4880238898378580f9910->leave($__internal_33b5303057c7971f00085df080ae6ebe76293c5eeec4880238898378580f9910_prof);

        
        $__internal_057fb617302addf9297eaae94011af7f1c7b525d5945a32a5c19774c50ba1392->leave($__internal_057fb617302addf9297eaae94011af7f1c7b525d5945a32a5c19774c50ba1392_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e645bd18a1405a7aea43e227fc63c2ccff741b3f21cbdf31c0f6a42ea5cd58af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e645bd18a1405a7aea43e227fc63c2ccff741b3f21cbdf31c0f6a42ea5cd58af->enter($__internal_e645bd18a1405a7aea43e227fc63c2ccff741b3f21cbdf31c0f6a42ea5cd58af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6cdff26b1a5243b73e4d78f6d2ee2045c77d6a915cf79313a273a6c154af8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cdff26b1a5243b73e4d78f6d2ee2045c77d6a915cf79313a273a6c154af8ff->enter($__internal_b6cdff26b1a5243b73e4d78f6d2ee2045c77d6a915cf79313a273a6c154af8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class=\"page-header\">Users</h2>
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<th>№</th>
\t\t\t<th>Name</th>
\t\t\t<th></th>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "\t\t\t<tr>
\t\t\t\t<td><strong>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</strong></td>
\t\t\t\t<td><strong>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</strong></td>
\t\t\t\t<td>
\t\t\t\t\t<a type=\"button\" href=\"users/details/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
\t\t\t\t\t<a type=\"button\" href=\"users/edit/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edit</a>
\t\t\t\t\t<a type=\"button\" href=\"users/delete/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_b6cdff26b1a5243b73e4d78f6d2ee2045c77d6a915cf79313a273a6c154af8ff->leave($__internal_b6cdff26b1a5243b73e4d78f6d2ee2045c77d6a915cf79313a273a6c154af8ff_prof);

        
        $__internal_e645bd18a1405a7aea43e227fc63c2ccff741b3f21cbdf31c0f6a42ea5cd58af->leave($__internal_e645bd18a1405a7aea43e227fc63c2ccff741b3f21cbdf31c0f6a42ea5cd58af_prof);

    }

    public function getTemplateName()
    {
        return ":users:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  96 => 19,  92 => 18,  88 => 17,  83 => 15,  79 => 14,  76 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
\t<h2 class=\"page-header\">Users</h2>
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<th>№</th>
\t\t\t<th>Name</th>
\t\t\t<th></th>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for user in users %}
\t\t\t<tr>
\t\t\t\t<td><strong>{{ loop.index }}</strong></td>
\t\t\t\t<td><strong>{{ user.name }}</strong></td>
\t\t\t\t<td>
\t\t\t\t\t<a type=\"button\" href=\"users/details/{{user.id}}\" class=\"btn btn-success\">View</a>
\t\t\t\t\t<a type=\"button\" href=\"users/edit/{{ user.id }}\" class=\"btn btn-warning\">Edit</a>
\t\t\t\t\t<a type=\"button\" href=\"users/delete/{{ user.id }}\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% endblock %}", ":users:index.html.twig", "/home/upboostn/public_html/app/Resources/views/users/index.html.twig");
    }
}
