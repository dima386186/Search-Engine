<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_efef1a9524c3cf60753ce55861e4798632eab423561a66eba9dfe24216e97df9 extends Twig_Template
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
        $__internal_bd865699cabf812dffe725612c2a689139eac6b48dccc74b2135bb28891b256f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd865699cabf812dffe725612c2a689139eac6b48dccc74b2135bb28891b256f->enter($__internal_bd865699cabf812dffe725612c2a689139eac6b48dccc74b2135bb28891b256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0bfab4418dca2f89c5b40207060c175a5e7a8a7957d631e17ef2c064810aaa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfab4418dca2f89c5b40207060c175a5e7a8a7957d631e17ef2c064810aaa1f->enter($__internal_0bfab4418dca2f89c5b40207060c175a5e7a8a7957d631e17ef2c064810aaa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bd865699cabf812dffe725612c2a689139eac6b48dccc74b2135bb28891b256f->leave($__internal_bd865699cabf812dffe725612c2a689139eac6b48dccc74b2135bb28891b256f_prof);

        
        $__internal_0bfab4418dca2f89c5b40207060c175a5e7a8a7957d631e17ef2c064810aaa1f->leave($__internal_0bfab4418dca2f89c5b40207060c175a5e7a8a7957d631e17ef2c064810aaa1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
