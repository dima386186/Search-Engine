<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_dc800fdf3f619a017ad1f3b6c61167a3bd66aae858ff48385346d28b1d1cf4fe extends Twig_Template
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
        $__internal_b34f958d82518870ea76096597a2084e9000a2d2b4f67fd2b3a1f94ee1925f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34f958d82518870ea76096597a2084e9000a2d2b4f67fd2b3a1f94ee1925f3b->enter($__internal_b34f958d82518870ea76096597a2084e9000a2d2b4f67fd2b3a1f94ee1925f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_44c3033b87717a219706c9f37b18753444e095c4a74ad0c40ea9d23fe0c5b138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c3033b87717a219706c9f37b18753444e095c4a74ad0c40ea9d23fe0c5b138->enter($__internal_44c3033b87717a219706c9f37b18753444e095c4a74ad0c40ea9d23fe0c5b138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b34f958d82518870ea76096597a2084e9000a2d2b4f67fd2b3a1f94ee1925f3b->leave($__internal_b34f958d82518870ea76096597a2084e9000a2d2b4f67fd2b3a1f94ee1925f3b_prof);

        
        $__internal_44c3033b87717a219706c9f37b18753444e095c4a74ad0c40ea9d23fe0c5b138->leave($__internal_44c3033b87717a219706c9f37b18753444e095c4a74ad0c40ea9d23fe0c5b138_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
