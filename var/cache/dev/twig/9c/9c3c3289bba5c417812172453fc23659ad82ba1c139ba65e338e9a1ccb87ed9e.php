<?php

/* :searches:details.html.twig */
class __TwigTemplate_98fd2ace9e7625f282cb62440e000d678aebc4e5ab55b4bbb8284d1a6ba85c46 extends Twig_Template
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
        $__internal_bbba17a3d1a12b67245f634ad8860ec7afa3422a05daacb83839f829d08697af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbba17a3d1a12b67245f634ad8860ec7afa3422a05daacb83839f829d08697af->enter($__internal_bbba17a3d1a12b67245f634ad8860ec7afa3422a05daacb83839f829d08697af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:details.html.twig"));

        $__internal_d8257cdaad3fff9df4a7647bcaf217181f4d2255ea7bf7b67e86441a4c51bad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8257cdaad3fff9df4a7647bcaf217181f4d2255ea7bf7b67e86441a4c51bad6->enter($__internal_d8257cdaad3fff9df4a7647bcaf217181f4d2255ea7bf7b67e86441a4c51bad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbba17a3d1a12b67245f634ad8860ec7afa3422a05daacb83839f829d08697af->leave($__internal_bbba17a3d1a12b67245f634ad8860ec7afa3422a05daacb83839f829d08697af_prof);

        
        $__internal_d8257cdaad3fff9df4a7647bcaf217181f4d2255ea7bf7b67e86441a4c51bad6->leave($__internal_d8257cdaad3fff9df4a7647bcaf217181f4d2255ea7bf7b67e86441a4c51bad6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d5fbb913d01d744c10604fc62637d538e5cfa9954ecae5f9f4fd94d7bc3f203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5fbb913d01d744c10604fc62637d538e5cfa9954ecae5f9f4fd94d7bc3f203->enter($__internal_9d5fbb913d01d744c10604fc62637d538e5cfa9954ecae5f9f4fd94d7bc3f203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a87db32a311543ebdb9317e9406ce186931ce9457aa9e14685649104944a33d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87db32a311543ebdb9317e9406ce186931ce9457aa9e14685649104944a33d5->enter($__internal_a87db32a311543ebdb9317e9406ce186931ce9457aa9e14685649104944a33d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <hr>
    <h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">

        ";
        // line 10
        echo "        <li class=\"list-group-item\">category: <strong>&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "category", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">subcategory: <strong>&nbsp;&nbsp;&nbsp;";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "subcategory", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">job type: <strong>&nbsp;&nbsp;&nbsp;";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "jobType", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">budget: <strong>&nbsp;&nbsp;&nbsp;";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "budget", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">location: <strong>&nbsp;&nbsp;&nbsp;";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "location", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client history: <strong>&nbsp;&nbsp;&nbsp;";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "clientHistory", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Keyword Search: <strong>&nbsp;&nbsp;&nbsp;";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "keywordSearch", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Stop Words: <strong>&nbsp;&nbsp;&nbsp;";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "stopWords", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">skills: <strong>&nbsp;&nbsp;&nbsp;";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "skills", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Verified payment: <strong>&nbsp;&nbsp;&nbsp;";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "verifiedPayment", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Money spent: <strong>&nbsp;&nbsp;&nbsp;";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "moneySpent", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client preferred hours of experience: <strong>&nbsp;&nbsp;&nbsp;";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "clientPreferredHoursOfExperience", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client preferred freelancer location: <strong>&nbsp;&nbsp;&nbsp;";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "clientPreferredFreelancerLocation", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client english level preference: <strong>&nbsp;&nbsp;&nbsp;";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "clientEnglishLevelPreference", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client timezone: <strong>&nbsp;&nbsp;&nbsp;";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "clientTimezone", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Chars in description: <strong>&nbsp;&nbsp;&nbsp;";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "charsInDescription", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Client feedback score: <strong>&nbsp;&nbsp;&nbsp;";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "clientFeedbackScore", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Experience level: <strong>&nbsp;&nbsp;&nbsp;";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "experienceLevel", array()), "html", null, true);
        echo "</strong></li>

        ";
        // line 30
        echo "        <li class=\"list-group-item\">Filter job type: <strong>&nbsp;&nbsp;&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterJobType", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter budget: <strong>&nbsp;&nbsp;&nbsp;";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterBudget", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter experience level: <strong>&nbsp;&nbsp;&nbsp;";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterExperienceLevel", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter client history: <strong>&nbsp;&nbsp;&nbsp;";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterClientHistory", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter skills: <strong>&nbsp;&nbsp;&nbsp;";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterSkills", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter money spent: <strong>&nbsp;&nbsp;&nbsp;";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterMoneySpent", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter verified payment: <strong>&nbsp;&nbsp;&nbsp;";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterVerifiedPayment", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter client feedback score: <strong>&nbsp;&nbsp;&nbsp;";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterClientFeedbackScore", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter avg rate: <strong>&nbsp;&nbsp;&nbsp;";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterAvgRate", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter hours billed: <strong>&nbsp;&nbsp;&nbsp;";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterHoursBilled", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter client timezone: <strong>&nbsp;&nbsp;&nbsp;";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterClientTimezone", array()), "html", null, true);
        echo "</strong></li>
        <li class=\"list-group-item\">Filter stars: <strong>&nbsp;&nbsp;&nbsp;";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? $this->getContext($context, "search")), "filterStars", array()), "html", null, true);
        echo "</strong></li>
    </ul>
";
        
        $__internal_a87db32a311543ebdb9317e9406ce186931ce9457aa9e14685649104944a33d5->leave($__internal_a87db32a311543ebdb9317e9406ce186931ce9457aa9e14685649104944a33d5_prof);

        
        $__internal_9d5fbb913d01d744c10604fc62637d538e5cfa9954ecae5f9f4fd94d7bc3f203->leave($__internal_9d5fbb913d01d744c10604fc62637d538e5cfa9954ecae5f9f4fd94d7bc3f203_prof);

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
        return array (  178 => 41,  174 => 40,  170 => 39,  166 => 38,  162 => 37,  158 => 36,  154 => 35,  150 => 34,  146 => 33,  142 => 32,  138 => 31,  133 => 30,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  59 => 10,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <hr>
    <h2 class=\"page-header\">{{ search.name }}</h2>
    <ul class=\"list-group\">

        {# search #}
        <li class=\"list-group-item\">category: <strong>&nbsp;&nbsp;&nbsp;{{ search.category }}</strong></li>
        <li class=\"list-group-item\">subcategory: <strong>&nbsp;&nbsp;&nbsp;{{ search.subcategory }}</strong></li>
        <li class=\"list-group-item\">job type: <strong>&nbsp;&nbsp;&nbsp;{{ search.jobType }}</strong></li>
        <li class=\"list-group-item\">budget: <strong>&nbsp;&nbsp;&nbsp;{{ search.budget }}</strong></li>
        <li class=\"list-group-item\">location: <strong>&nbsp;&nbsp;&nbsp;{{ search.location }}</strong></li>
        <li class=\"list-group-item\">Client history: <strong>&nbsp;&nbsp;&nbsp;{{ search.clientHistory }}</strong></li>
        <li class=\"list-group-item\">Keyword Search: <strong>&nbsp;&nbsp;&nbsp;{{ search.keywordSearch }}</strong></li>
        <li class=\"list-group-item\">Stop Words: <strong>&nbsp;&nbsp;&nbsp;{{ search.stopWords }}</strong></li>
        <li class=\"list-group-item\">skills: <strong>&nbsp;&nbsp;&nbsp;{{ search.skills }}</strong></li>
        <li class=\"list-group-item\">Verified payment: <strong>&nbsp;&nbsp;&nbsp;{{ search.verifiedPayment }}</strong></li>
        <li class=\"list-group-item\">Money spent: <strong>&nbsp;&nbsp;&nbsp;{{ search.moneySpent }}</strong></li>
        <li class=\"list-group-item\">Client preferred hours of experience: <strong>&nbsp;&nbsp;&nbsp;{{ search.clientPreferredHoursOfExperience }}</strong></li>
        <li class=\"list-group-item\">Client preferred freelancer location: <strong>&nbsp;&nbsp;&nbsp;{{ search.clientPreferredFreelancerLocation }}</strong></li>
        <li class=\"list-group-item\">Client english level preference: <strong>&nbsp;&nbsp;&nbsp;{{ search.clientEnglishLevelPreference }}</strong></li>
        <li class=\"list-group-item\">Client timezone: <strong>&nbsp;&nbsp;&nbsp;{{ search.clientTimezone }}</strong></li>
        <li class=\"list-group-item\">Chars in description: <strong>&nbsp;&nbsp;&nbsp;{{ search.charsInDescription }}</strong></li>
        <li class=\"list-group-item\">Client feedback score: <strong>&nbsp;&nbsp;&nbsp;{{ search.clientFeedbackScore }}</strong></li>
        <li class=\"list-group-item\">Experience level: <strong>&nbsp;&nbsp;&nbsp;{{ search.experienceLevel }}</strong></li>

        {# filters #}
        <li class=\"list-group-item\">Filter job type: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterJobType }}</strong></li>
        <li class=\"list-group-item\">Filter budget: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterBudget }}</strong></li>
        <li class=\"list-group-item\">Filter experience level: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterExperienceLevel }}</strong></li>
        <li class=\"list-group-item\">Filter client history: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterClientHistory }}</strong></li>
        <li class=\"list-group-item\">Filter skills: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterSkills }}</strong></li>
        <li class=\"list-group-item\">Filter money spent: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterMoneySpent }}</strong></li>
        <li class=\"list-group-item\">Filter verified payment: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterVerifiedPayment }}</strong></li>
        <li class=\"list-group-item\">Filter client feedback score: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterClientFeedbackScore }}</strong></li>
        <li class=\"list-group-item\">Filter avg rate: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterAvgRate }}</strong></li>
        <li class=\"list-group-item\">Filter hours billed: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterHoursBilled }}</strong></li>
        <li class=\"list-group-item\">Filter client timezone: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterClientTimezone }}</strong></li>
        <li class=\"list-group-item\">Filter stars: <strong>&nbsp;&nbsp;&nbsp;{{ search.filterStars }}</strong></li>
    </ul>
{% endblock %}", ":searches:details.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/details.html.twig");
    }
}
