<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c3e40dc81aca3c7d1cfeeb3802558a93ad3eed0eda277b8c82025d5d7f468a04 extends Twig_Template
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
        $__internal_8e46d4f3390e4e4fb791d0ce565ea7976d849b1b11468f32f117814353eab248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e46d4f3390e4e4fb791d0ce565ea7976d849b1b11468f32f117814353eab248->enter($__internal_8e46d4f3390e4e4fb791d0ce565ea7976d849b1b11468f32f117814353eab248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9ca2bc239a6263ed83f24e4aa729c90e6b89076ee0f54bae19631bc635dc6fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca2bc239a6263ed83f24e4aa729c90e6b89076ee0f54bae19631bc635dc6fc0->enter($__internal_9ca2bc239a6263ed83f24e4aa729c90e6b89076ee0f54bae19631bc635dc6fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8e46d4f3390e4e4fb791d0ce565ea7976d849b1b11468f32f117814353eab248->leave($__internal_8e46d4f3390e4e4fb791d0ce565ea7976d849b1b11468f32f117814353eab248_prof);

        
        $__internal_9ca2bc239a6263ed83f24e4aa729c90e6b89076ee0f54bae19631bc635dc6fc0->leave($__internal_9ca2bc239a6263ed83f24e4aa729c90e6b89076ee0f54bae19631bc635dc6fc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
