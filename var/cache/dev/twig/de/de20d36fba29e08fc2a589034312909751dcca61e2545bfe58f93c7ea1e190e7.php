<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8830a1041e69bd590a80bd7b2054bc0f9ac4023939aca341a53af852bb058b6e extends Twig_Template
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
        $__internal_476ec98f600dc92fccd4c9dd34375c46d4ee4b59664b63884164c9fdd420f31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476ec98f600dc92fccd4c9dd34375c46d4ee4b59664b63884164c9fdd420f31e->enter($__internal_476ec98f600dc92fccd4c9dd34375c46d4ee4b59664b63884164c9fdd420f31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_512ff2e1af42ccd4063526cbe5beab2681c7624d9e29bb8a1d8222b25f315bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512ff2e1af42ccd4063526cbe5beab2681c7624d9e29bb8a1d8222b25f315bbd->enter($__internal_512ff2e1af42ccd4063526cbe5beab2681c7624d9e29bb8a1d8222b25f315bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_476ec98f600dc92fccd4c9dd34375c46d4ee4b59664b63884164c9fdd420f31e->leave($__internal_476ec98f600dc92fccd4c9dd34375c46d4ee4b59664b63884164c9fdd420f31e_prof);

        
        $__internal_512ff2e1af42ccd4063526cbe5beab2681c7624d9e29bb8a1d8222b25f315bbd->leave($__internal_512ff2e1af42ccd4063526cbe5beab2681c7624d9e29bb8a1d8222b25f315bbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
