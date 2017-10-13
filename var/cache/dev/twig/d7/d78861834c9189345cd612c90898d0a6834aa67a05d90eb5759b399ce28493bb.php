<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b3a67236bea3e3658a23d2e2cd1ab28a2ddec8b00fb10d7cd2e03e389a088413 extends Twig_Template
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
        $__internal_8723de7277c15bc1aa38cc3151ac769d8ddde423fea12fae27dfc4e61a8a8177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8723de7277c15bc1aa38cc3151ac769d8ddde423fea12fae27dfc4e61a8a8177->enter($__internal_8723de7277c15bc1aa38cc3151ac769d8ddde423fea12fae27dfc4e61a8a8177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c6fd5819ea8c3df46b2ca432a04fd3394dffe8a1bc224c25d70dfe6c036a29ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fd5819ea8c3df46b2ca432a04fd3394dffe8a1bc224c25d70dfe6c036a29ac->enter($__internal_c6fd5819ea8c3df46b2ca432a04fd3394dffe8a1bc224c25d70dfe6c036a29ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8723de7277c15bc1aa38cc3151ac769d8ddde423fea12fae27dfc4e61a8a8177->leave($__internal_8723de7277c15bc1aa38cc3151ac769d8ddde423fea12fae27dfc4e61a8a8177_prof);

        
        $__internal_c6fd5819ea8c3df46b2ca432a04fd3394dffe8a1bc224c25d70dfe6c036a29ac->leave($__internal_c6fd5819ea8c3df46b2ca432a04fd3394dffe8a1bc224c25d70dfe6c036a29ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
