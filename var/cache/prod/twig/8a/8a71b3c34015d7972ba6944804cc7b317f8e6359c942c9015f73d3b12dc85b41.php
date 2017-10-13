<?php

/* :users:searchTable.html.twig */
class __TwigTemplate_fcec29be115e1e8f67da37275074bee34788c7c305c621f10d65913afe296116 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["searches"] ?? null));
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
        return array (  193 => 75,  183 => 70,  181 => 69,  176 => 66,  172 => 65,  168 => 64,  164 => 63,  160 => 62,  155 => 61,  151 => 59,  147 => 57,  145 => 56,  142 => 55,  140 => 54,  137 => 53,  135 => 52,  132 => 51,  130 => 50,  126 => 49,  122 => 48,  118 => 47,  114 => 46,  111 => 45,  102 => 43,  98 => 42,  93 => 40,  87 => 39,  83 => 38,  79 => 37,  75 => 36,  71 => 35,  67 => 33,  63 => 32,  58 => 29,  56 => 28,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":users:searchTable.html.twig", "/home/upboostn/public_html/app/Resources/views/users/searchTable.html.twig");
    }
}
