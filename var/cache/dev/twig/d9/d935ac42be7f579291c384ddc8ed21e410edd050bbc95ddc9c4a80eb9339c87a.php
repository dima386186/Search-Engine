<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5bc5301a4344397c3cce0dd85f589555a518bfd6a9c95c89239689385790fafc extends Twig_Template
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
        $__internal_7ed4f9c82237e88c275e939e3cd53dfa810e5e0dd12b583a82c3fd3ee4c9cfd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed4f9c82237e88c275e939e3cd53dfa810e5e0dd12b583a82c3fd3ee4c9cfd6->enter($__internal_7ed4f9c82237e88c275e939e3cd53dfa810e5e0dd12b583a82c3fd3ee4c9cfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6d1ad8a401039108a06d37ef2ade94dffbfa82c4e2d581572eb7a1c03c1cbb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1ad8a401039108a06d37ef2ade94dffbfa82c4e2d581572eb7a1c03c1cbb7d->enter($__internal_6d1ad8a401039108a06d37ef2ade94dffbfa82c4e2d581572eb7a1c03c1cbb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7ed4f9c82237e88c275e939e3cd53dfa810e5e0dd12b583a82c3fd3ee4c9cfd6->leave($__internal_7ed4f9c82237e88c275e939e3cd53dfa810e5e0dd12b583a82c3fd3ee4c9cfd6_prof);

        
        $__internal_6d1ad8a401039108a06d37ef2ade94dffbfa82c4e2d581572eb7a1c03c1cbb7d->leave($__internal_6d1ad8a401039108a06d37ef2ade94dffbfa82c4e2d581572eb7a1c03c1cbb7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
