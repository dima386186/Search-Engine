<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_97e97db01e505858eca036e178672c9e3b1f7a7134edce9e92d91990c3bd774a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51f90a96c8c2051da99f63b258864b35114e813ef19c4610e9054933dffe8355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f90a96c8c2051da99f63b258864b35114e813ef19c4610e9054933dffe8355->enter($__internal_51f90a96c8c2051da99f63b258864b35114e813ef19c4610e9054933dffe8355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_18860ab759a874ab5b1e320be58119bdd37a51dd7cc50fa2a984010f8b92cebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18860ab759a874ab5b1e320be58119bdd37a51dd7cc50fa2a984010f8b92cebf->enter($__internal_18860ab759a874ab5b1e320be58119bdd37a51dd7cc50fa2a984010f8b92cebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_51f90a96c8c2051da99f63b258864b35114e813ef19c4610e9054933dffe8355->leave($__internal_51f90a96c8c2051da99f63b258864b35114e813ef19c4610e9054933dffe8355_prof);

        
        $__internal_18860ab759a874ab5b1e320be58119bdd37a51dd7cc50fa2a984010f8b92cebf->leave($__internal_18860ab759a874ab5b1e320be58119bdd37a51dd7cc50fa2a984010f8b92cebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
