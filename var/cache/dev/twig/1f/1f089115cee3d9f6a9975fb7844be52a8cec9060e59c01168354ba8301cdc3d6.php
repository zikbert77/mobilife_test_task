<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ce0f999bd2f969805e5ddc289d838059a31b8eca70de4e6540a28f8dbd8f08e7 extends Twig_Template
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
        $__internal_a3a3587407181797224be1431710ce0708dd533f3d97991e505abdffcd77f3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a3587407181797224be1431710ce0708dd533f3d97991e505abdffcd77f3a4->enter($__internal_a3a3587407181797224be1431710ce0708dd533f3d97991e505abdffcd77f3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_88b43414718bb868c83a20018e861e5910fc64436d1ddf923a1adfa70b491227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b43414718bb868c83a20018e861e5910fc64436d1ddf923a1adfa70b491227->enter($__internal_88b43414718bb868c83a20018e861e5910fc64436d1ddf923a1adfa70b491227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a3a3587407181797224be1431710ce0708dd533f3d97991e505abdffcd77f3a4->leave($__internal_a3a3587407181797224be1431710ce0708dd533f3d97991e505abdffcd77f3a4_prof);

        
        $__internal_88b43414718bb868c83a20018e861e5910fc64436d1ddf923a1adfa70b491227->leave($__internal_88b43414718bb868c83a20018e861e5910fc64436d1ddf923a1adfa70b491227_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11feca2e6508c50c7eceb74eeb7bea5b6def2d2d5cc25a91b3e85cd8e41e9b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11feca2e6508c50c7eceb74eeb7bea5b6def2d2d5cc25a91b3e85cd8e41e9b54->enter($__internal_11feca2e6508c50c7eceb74eeb7bea5b6def2d2d5cc25a91b3e85cd8e41e9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc1448f93259e3c56a54d5cb39318a75b4010a291a4a833cf0d54e3077d9ede0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1448f93259e3c56a54d5cb39318a75b4010a291a4a833cf0d54e3077d9ede0->enter($__internal_dc1448f93259e3c56a54d5cb39318a75b4010a291a4a833cf0d54e3077d9ede0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dc1448f93259e3c56a54d5cb39318a75b4010a291a4a833cf0d54e3077d9ede0->leave($__internal_dc1448f93259e3c56a54d5cb39318a75b4010a291a4a833cf0d54e3077d9ede0_prof);

        
        $__internal_11feca2e6508c50c7eceb74eeb7bea5b6def2d2d5cc25a91b3e85cd8e41e9b54->leave($__internal_11feca2e6508c50c7eceb74eeb7bea5b6def2d2d5cc25a91b3e85cd8e41e9b54_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_87280839959c9a41c3db4669d0efc2b7f912f6d10ae17193cf99e7ceb1b3b7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87280839959c9a41c3db4669d0efc2b7f912f6d10ae17193cf99e7ceb1b3b7be->enter($__internal_87280839959c9a41c3db4669d0efc2b7f912f6d10ae17193cf99e7ceb1b3b7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_507f4cd621afd16a8ce0b9f48491a61d814af010133b0f09bceca06b4636c07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507f4cd621afd16a8ce0b9f48491a61d814af010133b0f09bceca06b4636c07e->enter($__internal_507f4cd621afd16a8ce0b9f48491a61d814af010133b0f09bceca06b4636c07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_507f4cd621afd16a8ce0b9f48491a61d814af010133b0f09bceca06b4636c07e->leave($__internal_507f4cd621afd16a8ce0b9f48491a61d814af010133b0f09bceca06b4636c07e_prof);

        
        $__internal_87280839959c9a41c3db4669d0efc2b7f912f6d10ae17193cf99e7ceb1b3b7be->leave($__internal_87280839959c9a41c3db4669d0efc2b7f912f6d10ae17193cf99e7ceb1b3b7be_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a10d2fb0d37952f55e6367bcd6ce4864b884434c0dcd17485daabd493d6ade9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a10d2fb0d37952f55e6367bcd6ce4864b884434c0dcd17485daabd493d6ade9->enter($__internal_8a10d2fb0d37952f55e6367bcd6ce4864b884434c0dcd17485daabd493d6ade9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4122e145cf3968c1ffad77639f17ed2d3560c6f872746657db61b087097b2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4122e145cf3968c1ffad77639f17ed2d3560c6f872746657db61b087097b2d1->enter($__internal_c4122e145cf3968c1ffad77639f17ed2d3560c6f872746657db61b087097b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4122e145cf3968c1ffad77639f17ed2d3560c6f872746657db61b087097b2d1->leave($__internal_c4122e145cf3968c1ffad77639f17ed2d3560c6f872746657db61b087097b2d1_prof);

        
        $__internal_8a10d2fb0d37952f55e6367bcd6ce4864b884434c0dcd17485daabd493d6ade9->leave($__internal_8a10d2fb0d37952f55e6367bcd6ce4864b884434c0dcd17485daabd493d6ade9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
", "@Twig/layout.html.twig", "/home/dev/Sites/mobilife_test_task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
