<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9036c25d4d7b2010fca0ece7637d9d0225fd66dc0f25c4b5f2e0873bd648a9c3 extends Twig_Template
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
        $__internal_7ae22de46107834a0c4f3cea8b80712f32553ee8faa63fe09e62884cd51e1095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae22de46107834a0c4f3cea8b80712f32553ee8faa63fe09e62884cd51e1095->enter($__internal_7ae22de46107834a0c4f3cea8b80712f32553ee8faa63fe09e62884cd51e1095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_48a5d544b7990beb773b5569624e4ef7c69945b9bf3289ac292fe8e3f577a3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a5d544b7990beb773b5569624e4ef7c69945b9bf3289ac292fe8e3f577a3a9->enter($__internal_48a5d544b7990beb773b5569624e4ef7c69945b9bf3289ac292fe8e3f577a3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7ae22de46107834a0c4f3cea8b80712f32553ee8faa63fe09e62884cd51e1095->leave($__internal_7ae22de46107834a0c4f3cea8b80712f32553ee8faa63fe09e62884cd51e1095_prof);

        
        $__internal_48a5d544b7990beb773b5569624e4ef7c69945b9bf3289ac292fe8e3f577a3a9->leave($__internal_48a5d544b7990beb773b5569624e4ef7c69945b9bf3289ac292fe8e3f577a3a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
