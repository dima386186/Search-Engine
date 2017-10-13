<?php

/* :searches:searches.html.twig */
class __TwigTemplate_e247ed3a49627c462c33411792c30cfd3570a8c0628e846bceb9500e5a004f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":searches:searches.html.twig", 1);
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
        $__internal_a72da083189b5ca9bd7ed24a0261b46d489920e4615153ccc6194a7ffd7a112b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72da083189b5ca9bd7ed24a0261b46d489920e4615153ccc6194a7ffd7a112b->enter($__internal_a72da083189b5ca9bd7ed24a0261b46d489920e4615153ccc6194a7ffd7a112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:searches.html.twig"));

        $__internal_bb9378ef35796b4aead9fc2c7e1c1c0611345854502a197dc2e0876a64859b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9378ef35796b4aead9fc2c7e1c1c0611345854502a197dc2e0876a64859b79->enter($__internal_bb9378ef35796b4aead9fc2c7e1c1c0611345854502a197dc2e0876a64859b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:searches.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a72da083189b5ca9bd7ed24a0261b46d489920e4615153ccc6194a7ffd7a112b->leave($__internal_a72da083189b5ca9bd7ed24a0261b46d489920e4615153ccc6194a7ffd7a112b_prof);

        
        $__internal_bb9378ef35796b4aead9fc2c7e1c1c0611345854502a197dc2e0876a64859b79->leave($__internal_bb9378ef35796b4aead9fc2c7e1c1c0611345854502a197dc2e0876a64859b79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0e8e9cee6bc366c355e434418436e1b9c9097be60fcaaab1bd4831fa6ee4eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e8e9cee6bc366c355e434418436e1b9c9097be60fcaaab1bd4831fa6ee4eec->enter($__internal_b0e8e9cee6bc366c355e434418436e1b9c9097be60fcaaab1bd4831fa6ee4eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3483b80aa697c189507619c88f1f71a520365a5d94c81a43e20f25f0f143631d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3483b80aa697c189507619c88f1f71a520365a5d94c81a43e20f25f0f143631d->enter($__internal_3483b80aa697c189507619c88f1f71a520365a5d94c81a43e20f25f0f143631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Searches</h2>
    <p>Запрос отправляется каждую 10 минуту (0,10,20,30...)</p>
    <table class=\"table table-striped\">
        <thead>
        <th>Name</th>
        <th>Process</th>
        <th></th>
        <th></th>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["searches"] ?? $this->getContext($context, "searches")));
        foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"action\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "action", array()), "html", null, true);
            echo "</td>
                <td>
                    <a type=\"button\" href=\"searches/details/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success searchButtons\">View</a>
                    <a type=\"button\" href=\"searches/edit/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-warning searchButtons\">Edit</a>
                    <a type=\"button\" href=\"searches/delete/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger searchButtons\">Delete</a>
                    <button type=\"button\" class=\"btn btn-primary duplicate searchButtons\">Duplicate</button>
                    <form action=\"/searches/duplicate\" method=\"post\" style=\"display: none\">
                        <input type=\"hidden\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "id", array()), "html", null, true);
            echo "\" name=\"hidden\">
                    </form>
                    <a type=\"button\" href=\"searches/start/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success searchButtons\" style=\"margin-left: 20px\">Start</a>
                    <a type=\"button\" href=\"searches/stop/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger searchButtons\">Stop</a>
                    <a type=\"button\" href=\"searches/newResult/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-info searchButtons\">Result</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
";
        
        $__internal_3483b80aa697c189507619c88f1f71a520365a5d94c81a43e20f25f0f143631d->leave($__internal_3483b80aa697c189507619c88f1f71a520365a5d94c81a43e20f25f0f143631d_prof);

        
        $__internal_b0e8e9cee6bc366c355e434418436e1b9c9097be60fcaaab1bd4831fa6ee4eec->leave($__internal_b0e8e9cee6bc366c355e434418436e1b9c9097be60fcaaab1bd4831fa6ee4eec_prof);

    }

    public function getTemplateName()
    {
        return ":searches:searches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  104 => 28,  100 => 27,  96 => 26,  91 => 24,  85 => 21,  81 => 20,  77 => 19,  72 => 17,  68 => 16,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2 class=\"page-header\">Searches</h2>
    <p>Запрос отправляется каждую 10 минуту (0,10,20,30...)</p>
    <table class=\"table table-striped\">
        <thead>
        <th>Name</th>
        <th>Process</th>
        <th></th>
        <th></th>
        </thead>
        <tbody>
        {% for search in searches %}
            <tr>
                <td>{{ search.name }}</td>
                <td class=\"action\">{{ search.action }}</td>
                <td>
                    <a type=\"button\" href=\"searches/details/{{search.id}}\" class=\"btn btn-success searchButtons\">View</a>
                    <a type=\"button\" href=\"searches/edit/{{ search.id }}\" class=\"btn btn-warning searchButtons\">Edit</a>
                    <a type=\"button\" href=\"searches/delete/{{ search.id }}\" class=\"btn btn-danger searchButtons\">Delete</a>
                    <button type=\"button\" class=\"btn btn-primary duplicate searchButtons\">Duplicate</button>
                    <form action=\"/searches/duplicate\" method=\"post\" style=\"display: none\">
                        <input type=\"hidden\" value=\"{{ search.id }}\" name=\"hidden\">
                    </form>
                    <a type=\"button\" href=\"searches/start/{{ search.id }}\" class=\"btn btn-success searchButtons\" style=\"margin-left: 20px\">Start</a>
                    <a type=\"button\" href=\"searches/stop/{{ search.id }}\" class=\"btn btn-danger searchButtons\">Stop</a>
                    <a type=\"button\" href=\"searches/newResult/{{ search.id }}\" class=\"btn btn-info searchButtons\">Result</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", ":searches:searches.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/searches.html.twig");
    }
}
