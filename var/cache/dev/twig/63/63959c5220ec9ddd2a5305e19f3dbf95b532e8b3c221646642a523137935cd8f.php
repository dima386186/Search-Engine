<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e046892a2ab06c9a903d974ffb79046305f087fe42be2630bb001ba8c760177c extends Twig_Template
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
        $__internal_b1a57b3a01e7d72e788509c3eb64113a7efad1f0312d3ae69e7a114947258921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a57b3a01e7d72e788509c3eb64113a7efad1f0312d3ae69e7a114947258921->enter($__internal_b1a57b3a01e7d72e788509c3eb64113a7efad1f0312d3ae69e7a114947258921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_68d184eeea712b1b36d2c8692457a8f8e5e03ac1f76a02c3b0fa8fafdb8ff347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d184eeea712b1b36d2c8692457a8f8e5e03ac1f76a02c3b0fa8fafdb8ff347->enter($__internal_68d184eeea712b1b36d2c8692457a8f8e5e03ac1f76a02c3b0fa8fafdb8ff347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b1a57b3a01e7d72e788509c3eb64113a7efad1f0312d3ae69e7a114947258921->leave($__internal_b1a57b3a01e7d72e788509c3eb64113a7efad1f0312d3ae69e7a114947258921_prof);

        
        $__internal_68d184eeea712b1b36d2c8692457a8f8e5e03ac1f76a02c3b0fa8fafdb8ff347->leave($__internal_68d184eeea712b1b36d2c8692457a8f8e5e03ac1f76a02c3b0fa8fafdb8ff347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
