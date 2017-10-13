<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8756e658af6583ac6b328a5749671312f516298a0bdc410ddd0992c0556a8f52 extends Twig_Template
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
        $__internal_2a854bd9134dfb49ad5e3944ce1bebaae86338326e2756c93a6b1c69391464b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a854bd9134dfb49ad5e3944ce1bebaae86338326e2756c93a6b1c69391464b2->enter($__internal_2a854bd9134dfb49ad5e3944ce1bebaae86338326e2756c93a6b1c69391464b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_3c013060f5d57ade4c6b374d2464f1d67404fc533b22da062a8475754a05bae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c013060f5d57ade4c6b374d2464f1d67404fc533b22da062a8475754a05bae0->enter($__internal_3c013060f5d57ade4c6b374d2464f1d67404fc533b22da062a8475754a05bae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2a854bd9134dfb49ad5e3944ce1bebaae86338326e2756c93a6b1c69391464b2->leave($__internal_2a854bd9134dfb49ad5e3944ce1bebaae86338326e2756c93a6b1c69391464b2_prof);

        
        $__internal_3c013060f5d57ade4c6b374d2464f1d67404fc533b22da062a8475754a05bae0->leave($__internal_3c013060f5d57ade4c6b374d2464f1d67404fc533b22da062a8475754a05bae0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
