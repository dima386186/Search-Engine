<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_1ab0f98f91538c714771a2235a31844b97dd339ea605824418c660a6d483e831 extends Twig_Template
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
        $__internal_90eab61e9139c57d2a4a68a5a71ea7428932725037d71117e14a416a1ac50c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90eab61e9139c57d2a4a68a5a71ea7428932725037d71117e14a416a1ac50c48->enter($__internal_90eab61e9139c57d2a4a68a5a71ea7428932725037d71117e14a416a1ac50c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ba67fcc1a03228de01b159cb7b5b73268a8bdd1d0d9b40761329ae394f88515b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba67fcc1a03228de01b159cb7b5b73268a8bdd1d0d9b40761329ae394f88515b->enter($__internal_ba67fcc1a03228de01b159cb7b5b73268a8bdd1d0d9b40761329ae394f88515b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_90eab61e9139c57d2a4a68a5a71ea7428932725037d71117e14a416a1ac50c48->leave($__internal_90eab61e9139c57d2a4a68a5a71ea7428932725037d71117e14a416a1ac50c48_prof);

        
        $__internal_ba67fcc1a03228de01b159cb7b5b73268a8bdd1d0d9b40761329ae394f88515b->leave($__internal_ba67fcc1a03228de01b159cb7b5b73268a8bdd1d0d9b40761329ae394f88515b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
