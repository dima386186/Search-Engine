<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fb3c233ed510cb5d24bc1894f34170893fc64194b7e604ed395d516d82da266c extends Twig_Template
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
        $__internal_a4586dad0e348dfa32b2cce0aa3ef58562314dd11e7dcaf1f53e3728c1d49763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4586dad0e348dfa32b2cce0aa3ef58562314dd11e7dcaf1f53e3728c1d49763->enter($__internal_a4586dad0e348dfa32b2cce0aa3ef58562314dd11e7dcaf1f53e3728c1d49763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7b92aa46cfaaa62a3096970c29993dda86b815ddf41bb1b02b30cbe7d5ba28b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b92aa46cfaaa62a3096970c29993dda86b815ddf41bb1b02b30cbe7d5ba28b2->enter($__internal_7b92aa46cfaaa62a3096970c29993dda86b815ddf41bb1b02b30cbe7d5ba28b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a4586dad0e348dfa32b2cce0aa3ef58562314dd11e7dcaf1f53e3728c1d49763->leave($__internal_a4586dad0e348dfa32b2cce0aa3ef58562314dd11e7dcaf1f53e3728c1d49763_prof);

        
        $__internal_7b92aa46cfaaa62a3096970c29993dda86b815ddf41bb1b02b30cbe7d5ba28b2->leave($__internal_7b92aa46cfaaa62a3096970c29993dda86b815ddf41bb1b02b30cbe7d5ba28b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
