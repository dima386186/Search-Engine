<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5a1f4e9f752f04e5ba5493a56e3de10dc3934bb80d4c93d58e307210069c4892 extends Twig_Template
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
        $__internal_05cc41a1d48ce7db7422759a01766d97e5f624cb2062aca3e70122c0d9bcb760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cc41a1d48ce7db7422759a01766d97e5f624cb2062aca3e70122c0d9bcb760->enter($__internal_05cc41a1d48ce7db7422759a01766d97e5f624cb2062aca3e70122c0d9bcb760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3db1f525fb5911d689a5fc700e59b88232d43d5a2f1460488120e409112d062e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db1f525fb5911d689a5fc700e59b88232d43d5a2f1460488120e409112d062e->enter($__internal_3db1f525fb5911d689a5fc700e59b88232d43d5a2f1460488120e409112d062e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_05cc41a1d48ce7db7422759a01766d97e5f624cb2062aca3e70122c0d9bcb760->leave($__internal_05cc41a1d48ce7db7422759a01766d97e5f624cb2062aca3e70122c0d9bcb760_prof);

        
        $__internal_3db1f525fb5911d689a5fc700e59b88232d43d5a2f1460488120e409112d062e->leave($__internal_3db1f525fb5911d689a5fc700e59b88232d43d5a2f1460488120e409112d062e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
