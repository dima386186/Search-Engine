<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_543157e0431fbfde90b955af7393c458c47f56aafb0d3bf7a54c9aa65d290c31 extends Twig_Template
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
        $__internal_3e0d3e1daa28b1d38727f3ff51411313fbfe9155d9d321454fea1008483db97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0d3e1daa28b1d38727f3ff51411313fbfe9155d9d321454fea1008483db97d->enter($__internal_3e0d3e1daa28b1d38727f3ff51411313fbfe9155d9d321454fea1008483db97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c1bb6b14a8b224e2f4c63b3e5e909497915c24dc3a1b685201c94d756a0ecee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bb6b14a8b224e2f4c63b3e5e909497915c24dc3a1b685201c94d756a0ecee3->enter($__internal_c1bb6b14a8b224e2f4c63b3e5e909497915c24dc3a1b685201c94d756a0ecee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3e0d3e1daa28b1d38727f3ff51411313fbfe9155d9d321454fea1008483db97d->leave($__internal_3e0d3e1daa28b1d38727f3ff51411313fbfe9155d9d321454fea1008483db97d_prof);

        
        $__internal_c1bb6b14a8b224e2f4c63b3e5e909497915c24dc3a1b685201c94d756a0ecee3->leave($__internal_c1bb6b14a8b224e2f4c63b3e5e909497915c24dc3a1b685201c94d756a0ecee3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
