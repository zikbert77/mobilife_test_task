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
        $__internal_dfd657d62b7d2e6a5aa15067643255d55cb2bee029e280f5377300c6ddf4dd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd657d62b7d2e6a5aa15067643255d55cb2bee029e280f5377300c6ddf4dd7d->enter($__internal_dfd657d62b7d2e6a5aa15067643255d55cb2bee029e280f5377300c6ddf4dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bf0ff37169286f06c66270a5bc6e92b3da185e027f1a49f36796f2bdc7298369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0ff37169286f06c66270a5bc6e92b3da185e027f1a49f36796f2bdc7298369->enter($__internal_bf0ff37169286f06c66270a5bc6e92b3da185e027f1a49f36796f2bdc7298369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_dfd657d62b7d2e6a5aa15067643255d55cb2bee029e280f5377300c6ddf4dd7d->leave($__internal_dfd657d62b7d2e6a5aa15067643255d55cb2bee029e280f5377300c6ddf4dd7d_prof);

        
        $__internal_bf0ff37169286f06c66270a5bc6e92b3da185e027f1a49f36796f2bdc7298369->leave($__internal_bf0ff37169286f06c66270a5bc6e92b3da185e027f1a49f36796f2bdc7298369_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_29f42775be0a9dea467f6862f67f0563626cac7fd2ea792d96837d1c64d8d1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f42775be0a9dea467f6862f67f0563626cac7fd2ea792d96837d1c64d8d1e2->enter($__internal_29f42775be0a9dea467f6862f67f0563626cac7fd2ea792d96837d1c64d8d1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a1415475c7ee6d589e0563b9066c81d8f6606ddfcf1f07d6373c800491814c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1415475c7ee6d589e0563b9066c81d8f6606ddfcf1f07d6373c800491814c0->enter($__internal_9a1415475c7ee6d589e0563b9066c81d8f6606ddfcf1f07d6373c800491814c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9a1415475c7ee6d589e0563b9066c81d8f6606ddfcf1f07d6373c800491814c0->leave($__internal_9a1415475c7ee6d589e0563b9066c81d8f6606ddfcf1f07d6373c800491814c0_prof);

        
        $__internal_29f42775be0a9dea467f6862f67f0563626cac7fd2ea792d96837d1c64d8d1e2->leave($__internal_29f42775be0a9dea467f6862f67f0563626cac7fd2ea792d96837d1c64d8d1e2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b99c70874a3ffd4fa3ba1d0566ef27be8409f39eb07211e043f2838a5362b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b99c70874a3ffd4fa3ba1d0566ef27be8409f39eb07211e043f2838a5362b1a->enter($__internal_1b99c70874a3ffd4fa3ba1d0566ef27be8409f39eb07211e043f2838a5362b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_02fcc58e02bbcde6f48e75bfeccd29fa8abe9937b4c909fbf459ff43904324a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fcc58e02bbcde6f48e75bfeccd29fa8abe9937b4c909fbf459ff43904324a9->enter($__internal_02fcc58e02bbcde6f48e75bfeccd29fa8abe9937b4c909fbf459ff43904324a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_02fcc58e02bbcde6f48e75bfeccd29fa8abe9937b4c909fbf459ff43904324a9->leave($__internal_02fcc58e02bbcde6f48e75bfeccd29fa8abe9937b4c909fbf459ff43904324a9_prof);

        
        $__internal_1b99c70874a3ffd4fa3ba1d0566ef27be8409f39eb07211e043f2838a5362b1a->leave($__internal_1b99c70874a3ffd4fa3ba1d0566ef27be8409f39eb07211e043f2838a5362b1a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdd171c98852cb94366ee62de41ec0251298e6bad02f3be9a577a1e97b7b607c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd171c98852cb94366ee62de41ec0251298e6bad02f3be9a577a1e97b7b607c->enter($__internal_bdd171c98852cb94366ee62de41ec0251298e6bad02f3be9a577a1e97b7b607c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_922ef22b2e089a8894130aa14652d0571cb84c2a20963b5b6be461a6e41026cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922ef22b2e089a8894130aa14652d0571cb84c2a20963b5b6be461a6e41026cc->enter($__internal_922ef22b2e089a8894130aa14652d0571cb84c2a20963b5b6be461a6e41026cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_922ef22b2e089a8894130aa14652d0571cb84c2a20963b5b6be461a6e41026cc->leave($__internal_922ef22b2e089a8894130aa14652d0571cb84c2a20963b5b6be461a6e41026cc_prof);

        
        $__internal_bdd171c98852cb94366ee62de41ec0251298e6bad02f3be9a577a1e97b7b607c->leave($__internal_bdd171c98852cb94366ee62de41ec0251298e6bad02f3be9a577a1e97b7b607c_prof);

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
", "@Twig/layout.html.twig", "/home/dev/Projects/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
