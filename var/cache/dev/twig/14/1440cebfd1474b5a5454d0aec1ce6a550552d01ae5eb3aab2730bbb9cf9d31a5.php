<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b1b6950ebbe6dcb2b6ffcda72c0cd7b29b1b103136fc8550c9919222cbe705e9 extends Twig_Template
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
        $__internal_3158c71dae5acf7a21759277b5c37bc3fe5b62cb393a9ebc4d2e7c712533812c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3158c71dae5acf7a21759277b5c37bc3fe5b62cb393a9ebc4d2e7c712533812c->enter($__internal_3158c71dae5acf7a21759277b5c37bc3fe5b62cb393a9ebc4d2e7c712533812c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c45eaeee8450d5b33575d7704ea873e05a044e291431112885706c7267d44d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45eaeee8450d5b33575d7704ea873e05a044e291431112885706c7267d44d64->enter($__internal_c45eaeee8450d5b33575d7704ea873e05a044e291431112885706c7267d44d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3158c71dae5acf7a21759277b5c37bc3fe5b62cb393a9ebc4d2e7c712533812c->leave($__internal_3158c71dae5acf7a21759277b5c37bc3fe5b62cb393a9ebc4d2e7c712533812c_prof);

        
        $__internal_c45eaeee8450d5b33575d7704ea873e05a044e291431112885706c7267d44d64->leave($__internal_c45eaeee8450d5b33575d7704ea873e05a044e291431112885706c7267d44d64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
