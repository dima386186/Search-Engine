<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_9f7b82a4982debd9ce014beb62933c0dbbfe7339e59d7784d434f364cfb9e290 extends Twig_Template
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
        $__internal_a06572fdee7134c2b6c0679b23a535cf78629659b527bc1b2b5cb8fa5e4d9799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06572fdee7134c2b6c0679b23a535cf78629659b527bc1b2b5cb8fa5e4d9799->enter($__internal_a06572fdee7134c2b6c0679b23a535cf78629659b527bc1b2b5cb8fa5e4d9799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_12cb8b77c10a25ba2324398239320943c2ab1a6a1462409d4c509cc07d7d927f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cb8b77c10a25ba2324398239320943c2ab1a6a1462409d4c509cc07d7d927f->enter($__internal_12cb8b77c10a25ba2324398239320943c2ab1a6a1462409d4c509cc07d7d927f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a06572fdee7134c2b6c0679b23a535cf78629659b527bc1b2b5cb8fa5e4d9799->leave($__internal_a06572fdee7134c2b6c0679b23a535cf78629659b527bc1b2b5cb8fa5e4d9799_prof);

        
        $__internal_12cb8b77c10a25ba2324398239320943c2ab1a6a1462409d4c509cc07d7d927f->leave($__internal_12cb8b77c10a25ba2324398239320943c2ab1a6a1462409d4c509cc07d7d927f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
