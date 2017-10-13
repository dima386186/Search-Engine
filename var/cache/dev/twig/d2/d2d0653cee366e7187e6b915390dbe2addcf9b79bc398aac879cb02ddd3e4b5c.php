<?php

/* :users:searchTable.html.twig */
class __TwigTemplate_37d644f5602cee5339255a677dcb91e975eaff90b7c0fa4447077921a6d9f3b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:searchTable.html.twig", 1);
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
        $__internal_ddafe34850679a22213b211be4d506f7726ed3d4750f1d1d675edd624dfa3fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddafe34850679a22213b211be4d506f7726ed3d4750f1d1d675edd624dfa3fab->enter($__internal_ddafe34850679a22213b211be4d506f7726ed3d4750f1d1d675edd624dfa3fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:searchTable.html.twig"));

        $__internal_c743b01a87441c47e4799e7156b506300d455a67dd43c6ac63bf990f344de9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c743b01a87441c47e4799e7156b506300d455a67dd43c6ac63bf990f344de9a4->enter($__internal_c743b01a87441c47e4799e7156b506300d455a67dd43c6ac63bf990f344de9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:searchTable.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddafe34850679a22213b211be4d506f7726ed3d4750f1d1d675edd624dfa3fab->leave($__internal_ddafe34850679a22213b211be4d506f7726ed3d4750f1d1d675edd624dfa3fab_prof);

        
        $__internal_c743b01a87441c47e4799e7156b506300d455a67dd43c6ac63bf990f344de9a4->leave($__internal_c743b01a87441c47e4799e7156b506300d455a67dd43c6ac63bf990f344de9a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76613dbecd8e7cd21350d89173e30d6f8cc65c65a2973db893d4dca05ace034e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76613dbecd8e7cd21350d89173e30d6f8cc65c65a2973db893d4dca05ace034e->enter($__internal_76613dbecd8e7cd21350d89173e30d6f8cc65c65a2973db893d4dca05ace034e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_699d035e38b8c918afda2987230866daafe14044e72c912779fb3642bdd5452f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699d035e38b8c918afda2987230866daafe14044e72c912779fb3642bdd5452f->enter($__internal_699d035e38b8c918afda2987230866daafe14044e72c912779fb3642bdd5452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Result</h2>

    <table class=\"table table-striped text-center\" style=\"margin-left: -280px\">
        <tr>
            <th>Job type</th>
            <th>Client timezone</th>
            <th>Budget</th>
            <th>Candidates</th>
            <th>URL</th>
            <th>Client history</th>
            <th>Skills</th>
            <th>Verification status</th>
            <th>Money spent</th>
            <th>Work load</th>
            <th>Freelancer location</th>
            <th>English</th>
            <th>Client feedback</th>
            <th>Hours billed</th>
            <th>Member since</th>
            <th>Active interviewees</th>
            <th>Rating</th>
            <th>Avg rate</th>

            ";
        // line 28
        echo "            ";
        // line 29
        echo "
        </tr>

        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["searches"] ?? $this->getContext($context, "searches")));
        foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
            // line 33
            echo "
            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "job_type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "tymezone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "budget", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "candidates", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "url", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "past_hires", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["search"], "skills", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 43
                echo "                        ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "<br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "verif_status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "total_charge", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "workload", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "pref_location", array()), "html", null, true);
            echo "</td>
                ";
            // line 50
            if (($this->getAttribute($context["search"], "english", array()) == 1)) {
                // line 51
                echo "                    <td>Basic</td>
                ";
            } elseif (($this->getAttribute(            // line 52
$context["search"], "english", array()) == 2)) {
                // line 53
                echo "                    <td>Conversational</td>
                ";
            } elseif (($this->getAttribute(            // line 54
$context["search"], "english", array()) == 3)) {
                // line 55
                echo "                    <td>Fluent</td>
                ";
            } elseif (($this->getAttribute(            // line 56
$context["search"], "english", array()) == 4)) {
                // line 57
                echo "                    <td>Native</td>
                ";
            } else {
                // line 59
                echo "                    <td>Not necessary</td>
                ";
            }
            // line 61
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "feedback", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "total_hours", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "member_since", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "interviewees", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "raiting", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "avg_rate", array()), "html", null, true);
            echo "</td>

                ";
            // line 69
            echo "                ";
            // line 70
            echo "
            </tr>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
    </table>


";
        
        $__internal_699d035e38b8c918afda2987230866daafe14044e72c912779fb3642bdd5452f->leave($__internal_699d035e38b8c918afda2987230866daafe14044e72c912779fb3642bdd5452f_prof);

        
        $__internal_76613dbecd8e7cd21350d89173e30d6f8cc65c65a2973db893d4dca05ace034e->leave($__internal_76613dbecd8e7cd21350d89173e30d6f8cc65c65a2973db893d4dca05ace034e_prof);

    }

    public function getTemplateName()
    {
        return ":users:searchTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 75,  201 => 70,  199 => 69,  194 => 66,  190 => 65,  186 => 64,  182 => 63,  178 => 62,  173 => 61,  169 => 59,  165 => 57,  163 => 56,  160 => 55,  158 => 54,  155 => 53,  153 => 52,  150 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  129 => 45,  120 => 43,  116 => 42,  111 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 33,  81 => 32,  76 => 29,  74 => 28,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2 class=\"page-header\">Result</h2>

    <table class=\"table table-striped text-center\" style=\"margin-left: -280px\">
        <tr>
            <th>Job type</th>
            <th>Client timezone</th>
            <th>Budget</th>
            <th>Candidates</th>
            <th>URL</th>
            <th>Client history</th>
            <th>Skills</th>
            <th>Verification status</th>
            <th>Money spent</th>
            <th>Work load</th>
            <th>Freelancer location</th>
            <th>English</th>
            <th>Client feedback</th>
            <th>Hours billed</th>
            <th>Member since</th>
            <th>Active interviewees</th>
            <th>Rating</th>
            <th>Avg rate</th>

            {#<th>Description</th>#}
            {#<th>Level</th>#}

        </tr>

        {% for search in searches %}

            <tr>
                <td>{{ search.job_type }}</td>
                <td>{{ search.tymezone }}</td>
                <td>{{ search.budget }}</td>
                <td>{{ search.candidates }}</td>
                <td><a href=\"{{ search.url }}\">{{ search.url }}</a></td>
                <td>{{ search.past_hires }}</td>
                <td>
                    {% for key,value in search.skills %}
                        {{ value }}<br>
                    {% endfor %}
                </td>
                <td>{{ search.verif_status }}</td>
                <td>{{ search.total_charge }}</td>
                <td>{{ search.workload }}</td>
                <td>{{ search.pref_location }}</td>
                {% if search.english == 1 %}
                    <td>Basic</td>
                {% elseif search.english == 2 %}
                    <td>Conversational</td>
                {% elseif search.english == 3 %}
                    <td>Fluent</td>
                {% elseif search.english == 4 %}
                    <td>Native</td>
                {% else %}
                    <td>Not necessary</td>
                {% endif %}
                <td>{{ search.feedback }}</td>
                <td>{{ search.total_hours }}</td>
                <td>{{ search.member_since }}</td>
                <td>{{ search.interviewees }}</td>
                <td>{{ search.raiting }}</td>
                <td>{{ search.avg_rate }}</td>

                {#<td>{{ search.description }}</td>#}
                {#<td>{{ search.level }}</td>#}

            </tr>


        {% endfor %}

    </table>


{% endblock %}



", ":users:searchTable.html.twig", "/home/upboostn/public_html/app/Resources/views/users/searchTable.html.twig");
    }
}
