<?php

/* :searches:result.html.twig */
class __TwigTemplate_b6b3439c04c38d103434dbd83f680b11220c268e206d10b904a60b757adfb98d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":searches:result.html.twig", 1);
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
        $__internal_60ca15d43b1f5d92a2e410b08ad14e36e8c1d3385fc9963b1da64bffd8bbf9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ca15d43b1f5d92a2e410b08ad14e36e8c1d3385fc9963b1da64bffd8bbf9d2->enter($__internal_60ca15d43b1f5d92a2e410b08ad14e36e8c1d3385fc9963b1da64bffd8bbf9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:result.html.twig"));

        $__internal_95693b9825c53d6735d3ce71f562ea16048c45fbfe8f6117b724be37758b344c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95693b9825c53d6735d3ce71f562ea16048c45fbfe8f6117b724be37758b344c->enter($__internal_95693b9825c53d6735d3ce71f562ea16048c45fbfe8f6117b724be37758b344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60ca15d43b1f5d92a2e410b08ad14e36e8c1d3385fc9963b1da64bffd8bbf9d2->leave($__internal_60ca15d43b1f5d92a2e410b08ad14e36e8c1d3385fc9963b1da64bffd8bbf9d2_prof);

        
        $__internal_95693b9825c53d6735d3ce71f562ea16048c45fbfe8f6117b724be37758b344c->leave($__internal_95693b9825c53d6735d3ce71f562ea16048c45fbfe8f6117b724be37758b344c_prof);

    }

    // line 3
    public function block_table($context, array $blocks = array())
    {
        $__internal_6cdc5eb2419598df1c8437c39c00577ee839bad5cbf654024fc2ec131ccaf289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdc5eb2419598df1c8437c39c00577ee839bad5cbf654024fc2ec131ccaf289->enter($__internal_6cdc5eb2419598df1c8437c39c00577ee839bad5cbf654024fc2ec131ccaf289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_b90c2b7763ab3bda460c75b7632cb0221571e514466724fb2293d834c1bf8d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90c2b7763ab3bda460c75b7632cb0221571e514466724fb2293d834c1bf8d32->enter($__internal_b90c2b7763ab3bda460c75b7632cb0221571e514466724fb2293d834c1bf8d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 4
        echo "    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <hr>
    <h2 class=\"page-header\">Result</h2>
    ";
        // line 7
        if (($context["results"] ?? $this->getContext($context, "results"))) {
            // line 8
            echo "
    <table class=\"table table-bordered text-center\">
    <tr>
        <th>№</th>
        <th>Stars</th>
        <th>URL</th>
        <th>JobType</th>
        <th>hrs/week</th>
        <th>Budget</th>
        <th>Status</th>
        <th>Proposals</th>
        <th>Interview</th>
        <th>Hires</th>
        <th>Hours billed</th>
        <th>avg rate</th>
        <th>Money Spent</th>
        <th>Feedback</th>
        <th>member since</th>
        <th>English lvl</th>
        <th>Expert lvl</th>
        <th>Skills</th>
        <th>Description</th>
        <th>Pref. Location</th>
        <th>Country</th>
        <th>Client timezone</th>
        <th>Added</th>
    </tr>

    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Services\SortByFieldExtension')->sortByFieldFilter(($context["results"] ?? $this->getContext($context, "results")), "filterStars", "desc"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 37
                echo "
        <tr>
            <td><strong>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</strong></td>
            <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "filterStars", array()), "html", null, true);
                echo "</td>
            <td style=\"font-size: 10px\"><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "url", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</a></td>
            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "jobType", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "workload", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "budget", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "verifStatus", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "candidates", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "interviewees", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "pastHires", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "totalHours", array()), "html", null, true);
                echo "</td>
            <td>
                ";
                // line 51
                if (($this->getAttribute($context["result"], "avgRate", array()) != 0)) {
                    // line 52
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "avgRate", array()), "html", null, true);
                    echo "
                ";
                }
                // line 54
                echo "            </td>
            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "totalCharge", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "feedback", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "memberSince", array()), "html", null, true);
                echo "</td>
            <td>
                ";
                // line 59
                if (($this->getAttribute($context["result"], "english", array()) == 1)) {
                    // line 60
                    echo "                    Basic
                ";
                } elseif (($this->getAttribute(                // line 61
$context["result"], "english", array()) == 2)) {
                    // line 62
                    echo "                    Conversational
                ";
                } elseif (($this->getAttribute(                // line 63
$context["result"], "english", array()) == 3)) {
                    // line 64
                    echo "                    Fluent
                ";
                } elseif (($this->getAttribute(                // line 65
$context["result"], "english", array()) == 4)) {
                    // line 66
                    echo "                    Native
                ";
                } else {
                    // line 68
                    echo "                    Not necessary
                ";
                }
                // line 70
                echo "            </td>
            <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "level", array()), "html", null, true);
                echo "</td>
            <td>
                <button type=\"button\" class=\"btn btn-success btn-xs viewSkills\">
                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
                </button>
                <div style=\"display: none\">";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "skills", array()), "html", null, true);
                echo "</div></td>
            <td>
                <button type=\"button\" class=\"btn btn-success btn-xs viewDescription\">
                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
                </button>
                <div style=\"display: none\">";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "description", array()), "html", null, true);
                echo "</div>
            </td>
            <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "prefLocation", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "country", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "tymezone", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "createdAt", array()), "d.m.Y H:i:s"), "html", null, true);
                echo "</td>
        </tr>

    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "</table>
";
        }
        
        $__internal_b90c2b7763ab3bda460c75b7632cb0221571e514466724fb2293d834c1bf8d32->leave($__internal_b90c2b7763ab3bda460c75b7632cb0221571e514466724fb2293d834c1bf8d32_prof);

        
        $__internal_6cdc5eb2419598df1c8437c39c00577ee839bad5cbf654024fc2ec131ccaf289->leave($__internal_6cdc5eb2419598df1c8437c39c00577ee839bad5cbf654024fc2ec131ccaf289_prof);

    }

    public function getTemplateName()
    {
        return ":searches:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 92,  241 => 88,  237 => 87,  233 => 86,  229 => 85,  224 => 83,  215 => 77,  206 => 71,  203 => 70,  199 => 68,  195 => 66,  193 => 65,  190 => 64,  188 => 63,  185 => 62,  183 => 61,  180 => 60,  178 => 59,  173 => 57,  169 => 56,  165 => 55,  162 => 54,  156 => 52,  154 => 51,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  133 => 45,  129 => 44,  125 => 43,  121 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 37,  86 => 36,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

{% block table %}
    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <hr>
    <h2 class=\"page-header\">Result</h2>
    {% if results %}

    <table class=\"table table-bordered text-center\">
    <tr>
        <th>№</th>
        <th>Stars</th>
        <th>URL</th>
        <th>JobType</th>
        <th>hrs/week</th>
        <th>Budget</th>
        <th>Status</th>
        <th>Proposals</th>
        <th>Interview</th>
        <th>Hires</th>
        <th>Hours billed</th>
        <th>avg rate</th>
        <th>Money Spent</th>
        <th>Feedback</th>
        <th>member since</th>
        <th>English lvl</th>
        <th>Expert lvl</th>
        <th>Skills</th>
        <th>Description</th>
        <th>Pref. Location</th>
        <th>Country</th>
        <th>Client timezone</th>
        <th>Added</th>
    </tr>

    {% for result in results | sortbyfield('filterStars', 'desc') %}

        <tr>
            <td><strong>{{ loop.index }}</strong></td>
            <td>{{ result.filterStars }}</td>
            <td style=\"font-size: 10px\"><a href=\"{{ result.url }}\" target=\"_blank\">{{ result.title }}</a></td>
            <td>{{ result.jobType }}</td>
            <td>{{ result.workload }}</td>
            <td>{{ result.budget }}</td>
            <td>{{ result.verifStatus }}</td>
            <td>{{ result.candidates }}</td>
            <td>{{ result.interviewees }}</td>
            <td>{{ result.pastHires }}</td>
            <td>{{ result.totalHours }}</td>
            <td>
                {% if result.avgRate != 0 %}
                    {{ result.avgRate }}
                {% endif %}
            </td>
            <td>{{ result.totalCharge }}</td>
            <td>{{ result.feedback }}</td>
            <td>{{ result.memberSince }}</td>
            <td>
                {% if result.english == 1 %}
                    Basic
                {% elseif result.english == 2 %}
                    Conversational
                {% elseif result.english == 3 %}
                    Fluent
                {% elseif result.english == 4 %}
                    Native
                {% else %}
                    Not necessary
                {% endif %}
            </td>
            <td>{{ result.level }}</td>
            <td>
                <button type=\"button\" class=\"btn btn-success btn-xs viewSkills\">
                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
                </button>
                <div style=\"display: none\">{{ result.skills }}</div></td>
            <td>
                <button type=\"button\" class=\"btn btn-success btn-xs viewDescription\">
                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
                </button>
                <div style=\"display: none\">{{ result.description }}</div>
            </td>
            <td>{{ result.prefLocation }}</td>
            <td>{{ result.country }}</td>
            <td>{{ result.tymezone }}</td>
            <td>{{ result.createdAt|date(\"d.m.Y H:i:s\") }}</td>
        </tr>

    {% endfor %}
</table>
{% endif %}
{% endblock %}



", ":searches:result.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/result.html.twig");
    }
}
