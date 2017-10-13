<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6d0504f88f9102f83cea046bc096892da47acb8a8c3cd5cda35b294cd7f7adf9 extends Twig_Template
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
        $__internal_6e057e000eacff50bbef5d58d59c983bd69398b32ee5be30957973b23b358045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e057e000eacff50bbef5d58d59c983bd69398b32ee5be30957973b23b358045->enter($__internal_6e057e000eacff50bbef5d58d59c983bd69398b32ee5be30957973b23b358045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a484fdbe4c75717fb440cb03ab0f37182e7248be51d6e19e2c8541852a2b1dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a484fdbe4c75717fb440cb03ab0f37182e7248be51d6e19e2c8541852a2b1dd9->enter($__internal_a484fdbe4c75717fb440cb03ab0f37182e7248be51d6e19e2c8541852a2b1dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6e057e000eacff50bbef5d58d59c983bd69398b32ee5be30957973b23b358045->leave($__internal_6e057e000eacff50bbef5d58d59c983bd69398b32ee5be30957973b23b358045_prof);

        
        $__internal_a484fdbe4c75717fb440cb03ab0f37182e7248be51d6e19e2c8541852a2b1dd9->leave($__internal_a484fdbe4c75717fb440cb03ab0f37182e7248be51d6e19e2c8541852a2b1dd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
