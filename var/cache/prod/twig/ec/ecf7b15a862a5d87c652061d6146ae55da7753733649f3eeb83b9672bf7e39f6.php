<?php

/* :searches:statistics.html.twig */
class __TwigTemplate_bc1be969b4299b1cc0485a24ff9d49b2080ae4012800077b3bc58a4071ce39a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":searches:statistics.html.twig", 1);
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


        <li class=\"list-group-item\">Количество дней с момента создания поиска: <strong class=\"pull-right\">&nbsp;&nbsp;&nbsp;  ";
        // line 10
        echo twig_escape_filter($this->env, ($context["countDay"] ?? null), "html", null, true);
        echo " </strong></li>
        <li class=\"list-group-item\">Количество дней с момента последнего редактирования поиска: <strong class=\"pull-right\">&nbsp;&nbsp;&nbsp; ";
        // line 11
        echo twig_escape_filter($this->env, ($context["countDayFromUpdate"] ?? null), "html", null, true);
        echo " </strong></li>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultsAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 14
            echo "            <li class=\"list-group-item\">Количество работ отосланных с момента создания поиска: <strong class=\"pull-right\">&nbsp;&nbsp;&nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "results", array()), "html", null, true);
            echo " </strong></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultsToWeek"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 18
            echo "            <li class=\"list-group-item\"> Количество работ отосланных по этому поиску за последнюю неделю: <strong class=\"pull-right\">&nbsp;&nbsp;&nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "results", array()), "html", null, true);
            echo " </strong></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultsToDay"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 22
            echo "            <li class=\"list-group-item\">Количество работ отосланных по этому поиску за последние сутки: <strong class=\"pull-right\">&nbsp;&nbsp;&nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "results", array()), "html", null, true);
            echo " </strong></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":searches:statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  87 => 22,  83 => 21,  80 => 20,  71 => 18,  67 => 17,  64 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":searches:statistics.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/statistics.html.twig");
    }
}
