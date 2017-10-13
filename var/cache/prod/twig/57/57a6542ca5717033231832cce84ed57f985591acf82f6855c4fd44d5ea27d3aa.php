<?php

/* :searches:result.html.twig */
class __TwigTemplate_6830e61e70b4459d74b356401fdda586609c0121de2272ec1e26e8860fd0da57 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_table($context, array $blocks = array())
    {
        // line 4
        echo "    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <a type=\"button\" class=\"btn btn-warning\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("search_edit", array("search" => ($context["id"] ?? null))), "html", null, true);
        echo "\">Edit search</a>
    <hr>
    <h2 class=\"page-header\">Result</h2>
    ";
        // line 8
        if (($context["results"] ?? null)) {
            // line 9
            echo "
    <table class=\"table table-bordered text-center\">
    <tr>
        <th>№</th>
        <th>Stars</th>
        <th>URL</th>
        <th>Added</th>
        <th>JobType</th>
        <th>hrs/week</th>
        <th>Budget</th>
        <th>Payment status</th>
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
    </tr>

    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Services\SortByFieldExtension')->sortByFieldFilter(($context["results"] ?? null), "filterStars", "desc"));
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
                // line 38
                echo "
        <tr>
            <td><strong>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</strong></td>
            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "filterStars", array()), "html", null, true);
                echo "</td>
            <td style=\"font-size: 10px\"><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "url", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</a></td>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "createdAt", array()), "d.m.Y H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "jobType", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "workload", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "budget", array()), "html", null, true);
                echo "\$</td>
            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "verifStatus", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "candidates", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "interviewees", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "pastHires", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "totalHours", array()), "html", null, true);
                echo "</td>
            <td>
                ";
                // line 53
                if (($this->getAttribute($context["result"], "avgRate", array()) != 0)) {
                    // line 54
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "avgRate", array()), "html", null, true);
                    echo "\$
                ";
                }
                // line 56
                echo "            </td>
            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "totalCharge", array()), "html", null, true);
                echo "\$</td>
            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "feedback", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "memberSince", array()), "html", null, true);
                echo "</td>
            <td>
                ";
                // line 61
                if (($this->getAttribute($context["result"], "english", array()) == 1)) {
                    // line 62
                    echo "                    Basic
                ";
                } elseif (($this->getAttribute(                // line 63
$context["result"], "english", array()) == 2)) {
                    // line 64
                    echo "                    Conversational
                ";
                } elseif (($this->getAttribute(                // line 65
$context["result"], "english", array()) == 3)) {
                    // line 66
                    echo "                    Fluent
                ";
                } elseif (($this->getAttribute(                // line 67
$context["result"], "english", array()) == 4)) {
                    // line 68
                    echo "                    Native
                ";
                } else {
                    // line 70
                    echo "                    Not necessary
                ";
                }
                // line 72
                echo "            </td>
            <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "level", array()), "html", null, true);
                echo "</td>
            <td>
                <button type=\"button\" class=\"btn btn-success btn-xs viewSkills\">
                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
                </button>
                <div style=\"display: none\">";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "skills", array()), "html", null, true);
                echo "</div></td>
            <td>
                <button type=\"button\" class=\"btn btn-success btn-xs viewDescription\">
                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
                </button>
                <div style=\"display: none\">";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "description", array()), "html", null, true);
                echo "</div>
            </td>
            <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "prefLocation", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "country", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "tymezone", array()), "html", null, true);
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
            // line 93
            echo "</table>
";
        }
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
        return array (  245 => 93,  227 => 89,  223 => 88,  219 => 87,  214 => 85,  205 => 79,  196 => 73,  193 => 72,  189 => 70,  185 => 68,  183 => 67,  180 => 66,  178 => 65,  175 => 64,  173 => 63,  170 => 62,  168 => 61,  163 => 59,  159 => 58,  155 => 57,  152 => 56,  146 => 54,  144 => 53,  139 => 51,  135 => 50,  131 => 49,  127 => 48,  123 => 47,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  101 => 42,  97 => 41,  93 => 40,  89 => 38,  72 => 37,  42 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":searches:result.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/result.html.twig");
    }
}
