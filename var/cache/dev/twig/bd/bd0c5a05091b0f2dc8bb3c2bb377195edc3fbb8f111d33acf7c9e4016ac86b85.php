<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_187d556fb90fdee5fd6ca99a486106d613e92d1f9d048b88a41b3b6f0cdab468 extends Twig_Template
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
        $__internal_d1fdf0fecf846c7e3a67836619664db4d3a457cd501edbcb9cf7d96107b05db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fdf0fecf846c7e3a67836619664db4d3a457cd501edbcb9cf7d96107b05db0->enter($__internal_d1fdf0fecf846c7e3a67836619664db4d3a457cd501edbcb9cf7d96107b05db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_339664efcb7fd025bd83202f03e3ee1b42f605f2d990f4cb7c52615e167b0e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339664efcb7fd025bd83202f03e3ee1b42f605f2d990f4cb7c52615e167b0e12->enter($__internal_339664efcb7fd025bd83202f03e3ee1b42f605f2d990f4cb7c52615e167b0e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d1fdf0fecf846c7e3a67836619664db4d3a457cd501edbcb9cf7d96107b05db0->leave($__internal_d1fdf0fecf846c7e3a67836619664db4d3a457cd501edbcb9cf7d96107b05db0_prof);

        
        $__internal_339664efcb7fd025bd83202f03e3ee1b42f605f2d990f4cb7c52615e167b0e12->leave($__internal_339664efcb7fd025bd83202f03e3ee1b42f605f2d990f4cb7c52615e167b0e12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
