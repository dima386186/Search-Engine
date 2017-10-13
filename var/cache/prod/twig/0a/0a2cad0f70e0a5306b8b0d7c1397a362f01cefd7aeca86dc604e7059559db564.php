<?php

/* :searches:searches.html.twig */
class __TwigTemplate_98345ee1b6bac00ef0498dd3322d6c2225048bf7059612d3f851affad33cd6ea extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["searches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "name", array()), "html", null, true);
            echo " (created ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["search"], "user", array()), "name", array()), "html", null, true);
            echo ")</td>
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
                    <a type=\"button\" href=\"searches/statistics/";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success searchButtons\">Statistics</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
";
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
        return array (  102 => 33,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  75 => 24,  69 => 21,  65 => 20,  61 => 19,  56 => 17,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":searches:searches.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/searches.html.twig");
    }
}
