<?php

/* :searches:details.html.twig */
class __TwigTemplate_b1e5871932e0e9f004c52f0777ac05a88d626f3e46b9382e50fe5aba0ac1f7f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":searches:details.html.twig", 1);
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
        echo "    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <hr>
    <h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">

        ";
        // line 10
        echo "        <li class=\"list-group-item\">category: <strong>&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "category", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">subcategory:
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["search"] ?? null), "subcategory", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 13
            echo "
                <strong>&nbsp;&nbsp;&nbsp;";
            // line 14
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</strong>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </li>
        <li class=\"list-group-item\">job type: <strong>&nbsp;&nbsp;&nbsp;";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "jobType", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">budget: <strong>&nbsp;&nbsp;&nbsp;";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "budget", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">location: <strong>&nbsp;&nbsp;&nbsp;";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "location", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client history: <strong>&nbsp;&nbsp;&nbsp;";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "clientHistory", array()), "html", null, true);
        echo "</strong></li>
        ";
        // line 23
        echo "        <li class=\"list-group-item\">Keyword Search In Any: <strong>&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "keywordSearchInAny", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Keyword Search In Title: <strong>&nbsp;&nbsp;&nbsp;";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "keywordSearchInTitle", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Keyword Search In Description: <strong>&nbsp;&nbsp;&nbsp;";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "keywordSearchInDescription", array()), "html", null, true);
        echo "</strong></li>
        ";
        // line 27
        echo "        <li class=\"list-group-item\">Stop Words In Any: <strong>&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "stopWordsInAny", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Stop Words In Title: <strong>&nbsp;&nbsp;&nbsp;";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "stopWordsInTitle", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Stop Words In Description: <strong>&nbsp;&nbsp;&nbsp;";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "stopWordsInDescription", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">skills: <strong>&nbsp;&nbsp;&nbsp;";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "skills", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Verified payment: <strong>&nbsp;&nbsp;&nbsp;";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "verifiedPayment", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Money spent: <strong>&nbsp;&nbsp;&nbsp;";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "moneySpent", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client preferred hours of experience: <strong>&nbsp;&nbsp;&nbsp;";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "clientPreferredHoursOfExperience", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client preferred freelancer location: <strong>&nbsp;&nbsp;&nbsp;";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "clientPreferredFreelancerLocation", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client english level preference: <strong>&nbsp;&nbsp;&nbsp;";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "clientEnglishLevelPreference", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client timezone: <strong>&nbsp;&nbsp;&nbsp;";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "clientTimezone", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Chars in description: <strong>&nbsp;&nbsp;&nbsp;";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "charsInDescription", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client feedback score: <strong>&nbsp;&nbsp;&nbsp;";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "clientFeedbackScore", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Experience level: <strong>&nbsp;&nbsp;&nbsp;";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "experienceLevel", array()), "html", null, true);
        echo "</strong></li>

        ";
        // line 42
        echo "        <li class=\"list-group-item\">Filter job type: <strong>&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterJobType", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter budget: <strong>&nbsp;&nbsp;&nbsp;";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterBudget", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter experience level: <strong>&nbsp;&nbsp;&nbsp;";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterExperienceLevel", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter client history: <strong>&nbsp;&nbsp;&nbsp;";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterClientHistory", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter skills: <strong>&nbsp;&nbsp;&nbsp;";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterSkills", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter money spent: <strong>&nbsp;&nbsp;&nbsp;";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterMoneySpent", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter verified payment: <strong>&nbsp;&nbsp;&nbsp;";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterVerifiedPayment", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter client feedback score: <strong>&nbsp;&nbsp;&nbsp;";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterClientFeedbackScore", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter avg rate: <strong>&nbsp;&nbsp;&nbsp;";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterAvgRate", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter hours billed: <strong>&nbsp;&nbsp;&nbsp;";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterHoursBilled", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter client timezone: <strong>&nbsp;&nbsp;&nbsp;";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterClientTimezone", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter stars: <strong>&nbsp;&nbsp;&nbsp;";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "filterStars", array()), "html", null, true);
        echo "</strong></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":searches:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 53,  190 => 52,  186 => 51,  182 => 50,  178 => 49,  174 => 48,  170 => 47,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  149 => 42,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  95 => 27,  91 => 25,  87 => 24,  82 => 23,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  63 => 17,  54 => 14,  51 => 13,  47 => 12,  41 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":searches:details.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/details.html.twig");
    }
}
