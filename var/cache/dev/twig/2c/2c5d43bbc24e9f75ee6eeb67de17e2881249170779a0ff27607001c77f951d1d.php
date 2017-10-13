<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c3350312a9199681b9256ec16d33ad35aa62e93366596f26a2a709ac4b782660 extends Twig_Template
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
        $__internal_38200b10cf17e0e6f4fab0a1b2a7ffeb8bab253e5f36ae0e553cbd1e86aca63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38200b10cf17e0e6f4fab0a1b2a7ffeb8bab253e5f36ae0e553cbd1e86aca63e->enter($__internal_38200b10cf17e0e6f4fab0a1b2a7ffeb8bab253e5f36ae0e553cbd1e86aca63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_eff1c9a4ad6ede1e21bc1e96cc185e0c16e0fe0e83b4c3b6d3ca0ff56e886d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff1c9a4ad6ede1e21bc1e96cc185e0c16e0fe0e83b4c3b6d3ca0ff56e886d73->enter($__internal_eff1c9a4ad6ede1e21bc1e96cc185e0c16e0fe0e83b4c3b6d3ca0ff56e886d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_38200b10cf17e0e6f4fab0a1b2a7ffeb8bab253e5f36ae0e553cbd1e86aca63e->leave($__internal_38200b10cf17e0e6f4fab0a1b2a7ffeb8bab253e5f36ae0e553cbd1e86aca63e_prof);

        
        $__internal_eff1c9a4ad6ede1e21bc1e96cc185e0c16e0fe0e83b4c3b6d3ca0ff56e886d73->leave($__internal_eff1c9a4ad6ede1e21bc1e96cc185e0c16e0fe0e83b4c3b6d3ca0ff56e886d73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
