<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_a5f928a5716d8561e82cf03783853f191313d7317920eee110b54177e9dc85b9 extends Twig_Template
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
        $__internal_e7c58a10cb190803071d2eaaaa63c42c6838b4da72820eb1351775fbb4251597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c58a10cb190803071d2eaaaa63c42c6838b4da72820eb1351775fbb4251597->enter($__internal_e7c58a10cb190803071d2eaaaa63c42c6838b4da72820eb1351775fbb4251597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_7f0e7d8e6b312adb8a4d1dceb93b2d6c056d3a0bd9c17dbba9fe8cc553dfa58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0e7d8e6b312adb8a4d1dceb93b2d6c056d3a0bd9c17dbba9fe8cc553dfa58e->enter($__internal_7f0e7d8e6b312adb8a4d1dceb93b2d6c056d3a0bd9c17dbba9fe8cc553dfa58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e7c58a10cb190803071d2eaaaa63c42c6838b4da72820eb1351775fbb4251597->leave($__internal_e7c58a10cb190803071d2eaaaa63c42c6838b4da72820eb1351775fbb4251597_prof);

        
        $__internal_7f0e7d8e6b312adb8a4d1dceb93b2d6c056d3a0bd9c17dbba9fe8cc553dfa58e->leave($__internal_7f0e7d8e6b312adb8a4d1dceb93b2d6c056d3a0bd9c17dbba9fe8cc553dfa58e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
