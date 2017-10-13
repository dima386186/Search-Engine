<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_48eff2bad5dd16319538a3753b71f999f46287879bfcf012a427e428d06f7c94 extends Twig_Template
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
        $__internal_ddd0395eebf814496ba8827584644902c54502de697afc504ed33ae85c28b1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd0395eebf814496ba8827584644902c54502de697afc504ed33ae85c28b1eb->enter($__internal_ddd0395eebf814496ba8827584644902c54502de697afc504ed33ae85c28b1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_dabd8d1645d0c50c699476aa8cb11cee30362e9ae06cf410f9c44404ade3d90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabd8d1645d0c50c699476aa8cb11cee30362e9ae06cf410f9c44404ade3d90b->enter($__internal_dabd8d1645d0c50c699476aa8cb11cee30362e9ae06cf410f9c44404ade3d90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ddd0395eebf814496ba8827584644902c54502de697afc504ed33ae85c28b1eb->leave($__internal_ddd0395eebf814496ba8827584644902c54502de697afc504ed33ae85c28b1eb_prof);

        
        $__internal_dabd8d1645d0c50c699476aa8cb11cee30362e9ae06cf410f9c44404ade3d90b->leave($__internal_dabd8d1645d0c50c699476aa8cb11cee30362e9ae06cf410f9c44404ade3d90b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
