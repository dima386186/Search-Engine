<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_fe662821a2157b279c3bc00490899d4ce0059dab79251e6ea020fba32241c631 extends Twig_Template
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
        $__internal_24e9b816daeb2c0a4893c8f9901f5ea86d6b8d9a860468d0d299ba097e9b3872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e9b816daeb2c0a4893c8f9901f5ea86d6b8d9a860468d0d299ba097e9b3872->enter($__internal_24e9b816daeb2c0a4893c8f9901f5ea86d6b8d9a860468d0d299ba097e9b3872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c672f4aec09c1c553164e0ec417f1bb8ead5cc3387abe83857a9063fcaf551cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c672f4aec09c1c553164e0ec417f1bb8ead5cc3387abe83857a9063fcaf551cd->enter($__internal_c672f4aec09c1c553164e0ec417f1bb8ead5cc3387abe83857a9063fcaf551cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_24e9b816daeb2c0a4893c8f9901f5ea86d6b8d9a860468d0d299ba097e9b3872->leave($__internal_24e9b816daeb2c0a4893c8f9901f5ea86d6b8d9a860468d0d299ba097e9b3872_prof);

        
        $__internal_c672f4aec09c1c553164e0ec417f1bb8ead5cc3387abe83857a9063fcaf551cd->leave($__internal_c672f4aec09c1c553164e0ec417f1bb8ead5cc3387abe83857a9063fcaf551cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
