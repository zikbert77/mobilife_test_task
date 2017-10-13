<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a5e051415951cbbd53758c72721f5d3cb538d20e51e1fd92582663a93bfc54b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf3fecc9f70a54ab2246428c620c00fff8d5cb17ad3419183409fb4166d2546f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3fecc9f70a54ab2246428c620c00fff8d5cb17ad3419183409fb4166d2546f->enter($__internal_cf3fecc9f70a54ab2246428c620c00fff8d5cb17ad3419183409fb4166d2546f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_91747e1f75eb64425d34e79b1cc664c8d99c4e39168162331777ea938dfc469f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91747e1f75eb64425d34e79b1cc664c8d99c4e39168162331777ea938dfc469f->enter($__internal_91747e1f75eb64425d34e79b1cc664c8d99c4e39168162331777ea938dfc469f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3fecc9f70a54ab2246428c620c00fff8d5cb17ad3419183409fb4166d2546f->leave($__internal_cf3fecc9f70a54ab2246428c620c00fff8d5cb17ad3419183409fb4166d2546f_prof);

        
        $__internal_91747e1f75eb64425d34e79b1cc664c8d99c4e39168162331777ea938dfc469f->leave($__internal_91747e1f75eb64425d34e79b1cc664c8d99c4e39168162331777ea938dfc469f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9aeeead6e0308079adbbb6cd61cb5473afa705aed91fafd4e8729b85b103f380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aeeead6e0308079adbbb6cd61cb5473afa705aed91fafd4e8729b85b103f380->enter($__internal_9aeeead6e0308079adbbb6cd61cb5473afa705aed91fafd4e8729b85b103f380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d00af836f0fafa3b3eb129b2bb1b99edae8bc2d8cde967a48877db6adae9cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d00af836f0fafa3b3eb129b2bb1b99edae8bc2d8cde967a48877db6adae9cca->enter($__internal_1d00af836f0fafa3b3eb129b2bb1b99edae8bc2d8cde967a48877db6adae9cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d00af836f0fafa3b3eb129b2bb1b99edae8bc2d8cde967a48877db6adae9cca->leave($__internal_1d00af836f0fafa3b3eb129b2bb1b99edae8bc2d8cde967a48877db6adae9cca_prof);

        
        $__internal_9aeeead6e0308079adbbb6cd61cb5473afa705aed91fafd4e8729b85b103f380->leave($__internal_9aeeead6e0308079adbbb6cd61cb5473afa705aed91fafd4e8729b85b103f380_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1dbc878b0b8b8518e76d830d0fd5b31cbe7da0ab7f0fe60fadfd0a13542f3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1dbc878b0b8b8518e76d830d0fd5b31cbe7da0ab7f0fe60fadfd0a13542f3ad->enter($__internal_b1dbc878b0b8b8518e76d830d0fd5b31cbe7da0ab7f0fe60fadfd0a13542f3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6bc1e081b9940f3ab2cf698ea502bef67ddbb02aac3dc4f030b93d4841b8d309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc1e081b9940f3ab2cf698ea502bef67ddbb02aac3dc4f030b93d4841b8d309->enter($__internal_6bc1e081b9940f3ab2cf698ea502bef67ddbb02aac3dc4f030b93d4841b8d309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6bc1e081b9940f3ab2cf698ea502bef67ddbb02aac3dc4f030b93d4841b8d309->leave($__internal_6bc1e081b9940f3ab2cf698ea502bef67ddbb02aac3dc4f030b93d4841b8d309_prof);

        
        $__internal_b1dbc878b0b8b8518e76d830d0fd5b31cbe7da0ab7f0fe60fadfd0a13542f3ad->leave($__internal_b1dbc878b0b8b8518e76d830d0fd5b31cbe7da0ab7f0fe60fadfd0a13542f3ad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab6466d6bf34ca4a75d75ad69e4fb78fb735301bdc551de79324030a5ffb1c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6466d6bf34ca4a75d75ad69e4fb78fb735301bdc551de79324030a5ffb1c8f->enter($__internal_ab6466d6bf34ca4a75d75ad69e4fb78fb735301bdc551de79324030a5ffb1c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2826e1191f6b3ece3e9f63d4a87e6d488c2537cfa308a3ab2c9a7dceb9f63b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2826e1191f6b3ece3e9f63d4a87e6d488c2537cfa308a3ab2c9a7dceb9f63b80->enter($__internal_2826e1191f6b3ece3e9f63d4a87e6d488c2537cfa308a3ab2c9a7dceb9f63b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2826e1191f6b3ece3e9f63d4a87e6d488c2537cfa308a3ab2c9a7dceb9f63b80->leave($__internal_2826e1191f6b3ece3e9f63d4a87e6d488c2537cfa308a3ab2c9a7dceb9f63b80_prof);

        
        $__internal_ab6466d6bf34ca4a75d75ad69e4fb78fb735301bdc551de79324030a5ffb1c8f->leave($__internal_ab6466d6bf34ca4a75d75ad69e4fb78fb735301bdc551de79324030a5ffb1c8f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/dev/Sites/mobilife_test_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
