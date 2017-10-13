<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4257b8de4092c9f098c8b587a46dc379861af0b29f62c94a13375d13d27f58bb extends Twig_Template
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
        $__internal_d5eaead8712fb8c829839e36fcae36be32bc98a9bfe3bcc9046b7aeb05251768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5eaead8712fb8c829839e36fcae36be32bc98a9bfe3bcc9046b7aeb05251768->enter($__internal_d5eaead8712fb8c829839e36fcae36be32bc98a9bfe3bcc9046b7aeb05251768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ccdade20bc83354fb180f1d16cbfe331d438bf109657efd9cf5c612ff2882cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccdade20bc83354fb180f1d16cbfe331d438bf109657efd9cf5c612ff2882cf8->enter($__internal_ccdade20bc83354fb180f1d16cbfe331d438bf109657efd9cf5c612ff2882cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d5eaead8712fb8c829839e36fcae36be32bc98a9bfe3bcc9046b7aeb05251768->leave($__internal_d5eaead8712fb8c829839e36fcae36be32bc98a9bfe3bcc9046b7aeb05251768_prof);

        
        $__internal_ccdade20bc83354fb180f1d16cbfe331d438bf109657efd9cf5c612ff2882cf8->leave($__internal_ccdade20bc83354fb180f1d16cbfe331d438bf109657efd9cf5c612ff2882cf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
