<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0b37947deccbcb719773c05807be2cf503c2faec25bfa620bfa8eac90c3c44c6 extends Twig_Template
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
        $__internal_65146a8fbc0666edb52573dc2ed45f3f950442aba970116a0daef2f978dd8dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65146a8fbc0666edb52573dc2ed45f3f950442aba970116a0daef2f978dd8dc0->enter($__internal_65146a8fbc0666edb52573dc2ed45f3f950442aba970116a0daef2f978dd8dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6d060715bde618f97afc0aaaea05edb00bde54699d6f2359183f64e7a0671715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d060715bde618f97afc0aaaea05edb00bde54699d6f2359183f64e7a0671715->enter($__internal_6d060715bde618f97afc0aaaea05edb00bde54699d6f2359183f64e7a0671715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_65146a8fbc0666edb52573dc2ed45f3f950442aba970116a0daef2f978dd8dc0->leave($__internal_65146a8fbc0666edb52573dc2ed45f3f950442aba970116a0daef2f978dd8dc0_prof);

        
        $__internal_6d060715bde618f97afc0aaaea05edb00bde54699d6f2359183f64e7a0671715->leave($__internal_6d060715bde618f97afc0aaaea05edb00bde54699d6f2359183f64e7a0671715_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
