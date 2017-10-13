<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2b1f041ce1feb7445a10365e64e516b90c36821fc65991ed7aa9e556069e1eb1 extends Twig_Template
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
        $__internal_f309bc32a7daebdb266228dc180712602b80d78efd38f0f4801feeb8877007c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f309bc32a7daebdb266228dc180712602b80d78efd38f0f4801feeb8877007c0->enter($__internal_f309bc32a7daebdb266228dc180712602b80d78efd38f0f4801feeb8877007c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_cd857ff2e294907470fcab41cb58e1d01bafe7350f33605d7b88752055d70f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd857ff2e294907470fcab41cb58e1d01bafe7350f33605d7b88752055d70f6d->enter($__internal_cd857ff2e294907470fcab41cb58e1d01bafe7350f33605d7b88752055d70f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f309bc32a7daebdb266228dc180712602b80d78efd38f0f4801feeb8877007c0->leave($__internal_f309bc32a7daebdb266228dc180712602b80d78efd38f0f4801feeb8877007c0_prof);

        
        $__internal_cd857ff2e294907470fcab41cb58e1d01bafe7350f33605d7b88752055d70f6d->leave($__internal_cd857ff2e294907470fcab41cb58e1d01bafe7350f33605d7b88752055d70f6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
