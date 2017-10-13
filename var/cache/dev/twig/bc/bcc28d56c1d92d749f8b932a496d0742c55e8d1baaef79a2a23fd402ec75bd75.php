<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ae1009e782c16d1431e18b2907ca39adda46f4bb59b263e23b22684e6af83d50 extends Twig_Template
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
        $__internal_5f3b6eedf3ec1528c2b7ceb6191e20f25fd18c069951a5ce2889a72fc6dc1784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3b6eedf3ec1528c2b7ceb6191e20f25fd18c069951a5ce2889a72fc6dc1784->enter($__internal_5f3b6eedf3ec1528c2b7ceb6191e20f25fd18c069951a5ce2889a72fc6dc1784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1746b0968ba0e4a9eeea2dde8fd458a4b2ae4101224edd637c6d1830c523b78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1746b0968ba0e4a9eeea2dde8fd458a4b2ae4101224edd637c6d1830c523b78c->enter($__internal_1746b0968ba0e4a9eeea2dde8fd458a4b2ae4101224edd637c6d1830c523b78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5f3b6eedf3ec1528c2b7ceb6191e20f25fd18c069951a5ce2889a72fc6dc1784->leave($__internal_5f3b6eedf3ec1528c2b7ceb6191e20f25fd18c069951a5ce2889a72fc6dc1784_prof);

        
        $__internal_1746b0968ba0e4a9eeea2dde8fd458a4b2ae4101224edd637c6d1830c523b78c->leave($__internal_1746b0968ba0e4a9eeea2dde8fd458a4b2ae4101224edd637c6d1830c523b78c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
