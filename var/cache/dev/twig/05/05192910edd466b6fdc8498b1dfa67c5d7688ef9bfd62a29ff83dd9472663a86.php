<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b33d6d642f60c52bf48f9fb869c21e019fd7b4fed46faa20f5f46fda7087d630 extends Twig_Template
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
        $__internal_fddea83f7867ff228c0611413fea1fa1f28ab9de6ccae193eee35131385c388a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fddea83f7867ff228c0611413fea1fa1f28ab9de6ccae193eee35131385c388a->enter($__internal_fddea83f7867ff228c0611413fea1fa1f28ab9de6ccae193eee35131385c388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a15420374c76c627162c9e46271ea8ecaa03ad0410326b3a63fea5b844676691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15420374c76c627162c9e46271ea8ecaa03ad0410326b3a63fea5b844676691->enter($__internal_a15420374c76c627162c9e46271ea8ecaa03ad0410326b3a63fea5b844676691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fddea83f7867ff228c0611413fea1fa1f28ab9de6ccae193eee35131385c388a->leave($__internal_fddea83f7867ff228c0611413fea1fa1f28ab9de6ccae193eee35131385c388a_prof);

        
        $__internal_a15420374c76c627162c9e46271ea8ecaa03ad0410326b3a63fea5b844676691->leave($__internal_a15420374c76c627162c9e46271ea8ecaa03ad0410326b3a63fea5b844676691_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
