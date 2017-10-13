<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2b76dfb87a76433cfa77886f2968bff7fd99fde91710289d7ecaa18b3f61131a extends Twig_Template
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
        $__internal_b657eb5c4ba87a84ce723fb98e277c6048b93fde43dda61901ecc8638dec9e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b657eb5c4ba87a84ce723fb98e277c6048b93fde43dda61901ecc8638dec9e63->enter($__internal_b657eb5c4ba87a84ce723fb98e277c6048b93fde43dda61901ecc8638dec9e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_676c5d52b89ae17184626ec8e5553ae1731f7aa5aa0f198af63e48500421b8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676c5d52b89ae17184626ec8e5553ae1731f7aa5aa0f198af63e48500421b8a7->enter($__internal_676c5d52b89ae17184626ec8e5553ae1731f7aa5aa0f198af63e48500421b8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b657eb5c4ba87a84ce723fb98e277c6048b93fde43dda61901ecc8638dec9e63->leave($__internal_b657eb5c4ba87a84ce723fb98e277c6048b93fde43dda61901ecc8638dec9e63_prof);

        
        $__internal_676c5d52b89ae17184626ec8e5553ae1731f7aa5aa0f198af63e48500421b8a7->leave($__internal_676c5d52b89ae17184626ec8e5553ae1731f7aa5aa0f198af63e48500421b8a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
