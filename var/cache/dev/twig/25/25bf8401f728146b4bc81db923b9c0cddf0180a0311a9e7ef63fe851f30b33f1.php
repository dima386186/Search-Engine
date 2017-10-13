<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_acd2402131b1f68e5ca2a0379d7b6a0a57b80b914f6e6eafad5964f1343d528d extends Twig_Template
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
        $__internal_4940a695488adb9e110c060a5c4ef780b2fd69ccf48c05ef1dd79031350d1b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4940a695488adb9e110c060a5c4ef780b2fd69ccf48c05ef1dd79031350d1b5a->enter($__internal_4940a695488adb9e110c060a5c4ef780b2fd69ccf48c05ef1dd79031350d1b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d9720fe09ee26bac218167dd9431479a92191cc0d3e17f57d43e61737672a9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9720fe09ee26bac218167dd9431479a92191cc0d3e17f57d43e61737672a9dd->enter($__internal_d9720fe09ee26bac218167dd9431479a92191cc0d3e17f57d43e61737672a9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4940a695488adb9e110c060a5c4ef780b2fd69ccf48c05ef1dd79031350d1b5a->leave($__internal_4940a695488adb9e110c060a5c4ef780b2fd69ccf48c05ef1dd79031350d1b5a_prof);

        
        $__internal_d9720fe09ee26bac218167dd9431479a92191cc0d3e17f57d43e61737672a9dd->leave($__internal_d9720fe09ee26bac218167dd9431479a92191cc0d3e17f57d43e61737672a9dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
