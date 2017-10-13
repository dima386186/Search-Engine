<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9975dce8a74413b341b0f710b52d8192d6ba22186e255b70821d345f9598b674 extends Twig_Template
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
        $__internal_1697a696a5ba68b56e80723fe34bf6100912fb94f18cf641d8007f2f1a7af47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1697a696a5ba68b56e80723fe34bf6100912fb94f18cf641d8007f2f1a7af47f->enter($__internal_1697a696a5ba68b56e80723fe34bf6100912fb94f18cf641d8007f2f1a7af47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_7cf2f27c76c83b29395adc30abe9f1c72ce56aee20602a4080f15f72c3663af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf2f27c76c83b29395adc30abe9f1c72ce56aee20602a4080f15f72c3663af0->enter($__internal_7cf2f27c76c83b29395adc30abe9f1c72ce56aee20602a4080f15f72c3663af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1697a696a5ba68b56e80723fe34bf6100912fb94f18cf641d8007f2f1a7af47f->leave($__internal_1697a696a5ba68b56e80723fe34bf6100912fb94f18cf641d8007f2f1a7af47f_prof);

        
        $__internal_7cf2f27c76c83b29395adc30abe9f1c72ce56aee20602a4080f15f72c3663af0->leave($__internal_7cf2f27c76c83b29395adc30abe9f1c72ce56aee20602a4080f15f72c3663af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
