<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_18f382904c3c38ac31289aa6455fdd9fe77aa5cf8a46f01d79e196d45e9bf3c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_219def8ac57f02d2b94afc4371321a41ddd5ad9ecb391b03a11eb3a63af927b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219def8ac57f02d2b94afc4371321a41ddd5ad9ecb391b03a11eb3a63af927b5->enter($__internal_219def8ac57f02d2b94afc4371321a41ddd5ad9ecb391b03a11eb3a63af927b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_b0413b8481435993e9f14c7e1a33a003e55ac14608b3708d51013469ae2d5d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0413b8481435993e9f14c7e1a33a003e55ac14608b3708d51013469ae2d5d04->enter($__internal_b0413b8481435993e9f14c7e1a33a003e55ac14608b3708d51013469ae2d5d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_219def8ac57f02d2b94afc4371321a41ddd5ad9ecb391b03a11eb3a63af927b5->leave($__internal_219def8ac57f02d2b94afc4371321a41ddd5ad9ecb391b03a11eb3a63af927b5_prof);

        
        $__internal_b0413b8481435993e9f14c7e1a33a003e55ac14608b3708d51013469ae2d5d04->leave($__internal_b0413b8481435993e9f14c7e1a33a003e55ac14608b3708d51013469ae2d5d04_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16e7a572070577b6980cf1425e45cab1f7db3c403e5f6192a8248f0282b31e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e7a572070577b6980cf1425e45cab1f7db3c403e5f6192a8248f0282b31e07->enter($__internal_16e7a572070577b6980cf1425e45cab1f7db3c403e5f6192a8248f0282b31e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1d5b8c6c54346833b605400cfbe8a2af2e963840967a221b99d400e4e59cf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d5b8c6c54346833b605400cfbe8a2af2e963840967a221b99d400e4e59cf76->enter($__internal_d1d5b8c6c54346833b605400cfbe8a2af2e963840967a221b99d400e4e59cf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d1d5b8c6c54346833b605400cfbe8a2af2e963840967a221b99d400e4e59cf76->leave($__internal_d1d5b8c6c54346833b605400cfbe8a2af2e963840967a221b99d400e4e59cf76_prof);

        
        $__internal_16e7a572070577b6980cf1425e45cab1f7db3c403e5f6192a8248f0282b31e07->leave($__internal_16e7a572070577b6980cf1425e45cab1f7db3c403e5f6192a8248f0282b31e07_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8e507854a64c0529c85772538e971ac2888927ecc87316be4112eff69b5a08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e507854a64c0529c85772538e971ac2888927ecc87316be4112eff69b5a08d->enter($__internal_f8e507854a64c0529c85772538e971ac2888927ecc87316be4112eff69b5a08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7132efa97df6edfc020294a2e6ddcba1788ece809e2e8907ac317dba2c73643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7132efa97df6edfc020294a2e6ddcba1788ece809e2e8907ac317dba2c73643->enter($__internal_c7132efa97df6edfc020294a2e6ddcba1788ece809e2e8907ac317dba2c73643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c7132efa97df6edfc020294a2e6ddcba1788ece809e2e8907ac317dba2c73643->leave($__internal_c7132efa97df6edfc020294a2e6ddcba1788ece809e2e8907ac317dba2c73643_prof);

        
        $__internal_f8e507854a64c0529c85772538e971ac2888927ecc87316be4112eff69b5a08d->leave($__internal_f8e507854a64c0529c85772538e971ac2888927ecc87316be4112eff69b5a08d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3a5d01dfec589c5a3dadc7e087e3251d795cb158da1a396f4a7f9b71aca5e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a5d01dfec589c5a3dadc7e087e3251d795cb158da1a396f4a7f9b71aca5e46->enter($__internal_a3a5d01dfec589c5a3dadc7e087e3251d795cb158da1a396f4a7f9b71aca5e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97fa49063cec1d90411bab48884962ece6de1eddae94e61ea26a3bf71e70ae6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fa49063cec1d90411bab48884962ece6de1eddae94e61ea26a3bf71e70ae6a->enter($__internal_97fa49063cec1d90411bab48884962ece6de1eddae94e61ea26a3bf71e70ae6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97fa49063cec1d90411bab48884962ece6de1eddae94e61ea26a3bf71e70ae6a->leave($__internal_97fa49063cec1d90411bab48884962ece6de1eddae94e61ea26a3bf71e70ae6a_prof);

        
        $__internal_a3a5d01dfec589c5a3dadc7e087e3251d795cb158da1a396f4a7f9b71aca5e46->leave($__internal_a3a5d01dfec589c5a3dadc7e087e3251d795cb158da1a396f4a7f9b71aca5e46_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
