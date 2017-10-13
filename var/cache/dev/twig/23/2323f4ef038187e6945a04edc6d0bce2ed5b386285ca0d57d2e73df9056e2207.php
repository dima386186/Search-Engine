<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1c29b0652ce49b435fa512b7ecee1085e39977fcecd3d9a2ff0058745abc49a7 extends Twig_Template
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
        $__internal_6f8b818168be1b88be23ff4c0d5004050202b7a4970795f749c4c12443e7caa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8b818168be1b88be23ff4c0d5004050202b7a4970795f749c4c12443e7caa9->enter($__internal_6f8b818168be1b88be23ff4c0d5004050202b7a4970795f749c4c12443e7caa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f3278a7aaea2c8cc7523999853075db1dbf8f04df0860f4a2388464ab31727c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3278a7aaea2c8cc7523999853075db1dbf8f04df0860f4a2388464ab31727c0->enter($__internal_f3278a7aaea2c8cc7523999853075db1dbf8f04df0860f4a2388464ab31727c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6f8b818168be1b88be23ff4c0d5004050202b7a4970795f749c4c12443e7caa9->leave($__internal_6f8b818168be1b88be23ff4c0d5004050202b7a4970795f749c4c12443e7caa9_prof);

        
        $__internal_f3278a7aaea2c8cc7523999853075db1dbf8f04df0860f4a2388464ab31727c0->leave($__internal_f3278a7aaea2c8cc7523999853075db1dbf8f04df0860f4a2388464ab31727c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
