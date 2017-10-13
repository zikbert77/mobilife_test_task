<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6692bfd7a2d880b210c21ac7ebd0b5543f86a53041a2037b4090affa83e01969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e15af9641bd4af4763dddc7261130d44bf8ff5b08c231718eec178d8086a322c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15af9641bd4af4763dddc7261130d44bf8ff5b08c231718eec178d8086a322c->enter($__internal_e15af9641bd4af4763dddc7261130d44bf8ff5b08c231718eec178d8086a322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d2e3393953f3ff6720e27b8ee60edac9a4e94b75cd9fa953f455758133388b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e3393953f3ff6720e27b8ee60edac9a4e94b75cd9fa953f455758133388b34->enter($__internal_d2e3393953f3ff6720e27b8ee60edac9a4e94b75cd9fa953f455758133388b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e15af9641bd4af4763dddc7261130d44bf8ff5b08c231718eec178d8086a322c->leave($__internal_e15af9641bd4af4763dddc7261130d44bf8ff5b08c231718eec178d8086a322c_prof);

        
        $__internal_d2e3393953f3ff6720e27b8ee60edac9a4e94b75cd9fa953f455758133388b34->leave($__internal_d2e3393953f3ff6720e27b8ee60edac9a4e94b75cd9fa953f455758133388b34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bca43845222cf042f9e9d493adb43e84a7a7803c9723798df1d9811a978e2688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca43845222cf042f9e9d493adb43e84a7a7803c9723798df1d9811a978e2688->enter($__internal_bca43845222cf042f9e9d493adb43e84a7a7803c9723798df1d9811a978e2688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_544a16c1594a14857c12db753a889b3467afff537af8c92b379823b441aec087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544a16c1594a14857c12db753a889b3467afff537af8c92b379823b441aec087->enter($__internal_544a16c1594a14857c12db753a889b3467afff537af8c92b379823b441aec087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_544a16c1594a14857c12db753a889b3467afff537af8c92b379823b441aec087->leave($__internal_544a16c1594a14857c12db753a889b3467afff537af8c92b379823b441aec087_prof);

        
        $__internal_bca43845222cf042f9e9d493adb43e84a7a7803c9723798df1d9811a978e2688->leave($__internal_bca43845222cf042f9e9d493adb43e84a7a7803c9723798df1d9811a978e2688_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/dev/Projects/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
