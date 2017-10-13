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
        $__internal_e4dd7ba96ed5124888a0df59b49786844dbe64e5bcdadc6ac8034fe6324e8564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dd7ba96ed5124888a0df59b49786844dbe64e5bcdadc6ac8034fe6324e8564->enter($__internal_e4dd7ba96ed5124888a0df59b49786844dbe64e5bcdadc6ac8034fe6324e8564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7be084da0a354864e6504a98b538313ad29432234fc3121e131ac3274b23a54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be084da0a354864e6504a98b538313ad29432234fc3121e131ac3274b23a54a->enter($__internal_7be084da0a354864e6504a98b538313ad29432234fc3121e131ac3274b23a54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4dd7ba96ed5124888a0df59b49786844dbe64e5bcdadc6ac8034fe6324e8564->leave($__internal_e4dd7ba96ed5124888a0df59b49786844dbe64e5bcdadc6ac8034fe6324e8564_prof);

        
        $__internal_7be084da0a354864e6504a98b538313ad29432234fc3121e131ac3274b23a54a->leave($__internal_7be084da0a354864e6504a98b538313ad29432234fc3121e131ac3274b23a54a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c066909f1d59d4b0405ba4c554fb7ed35a0d5e8e927f1c36f30f6b532c8b8b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c066909f1d59d4b0405ba4c554fb7ed35a0d5e8e927f1c36f30f6b532c8b8b9b->enter($__internal_c066909f1d59d4b0405ba4c554fb7ed35a0d5e8e927f1c36f30f6b532c8b8b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9568a1da4aa4ad0300a9cf94202e030b60c3bcbf1e4c3e23491a1c53295f978f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9568a1da4aa4ad0300a9cf94202e030b60c3bcbf1e4c3e23491a1c53295f978f->enter($__internal_9568a1da4aa4ad0300a9cf94202e030b60c3bcbf1e4c3e23491a1c53295f978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9568a1da4aa4ad0300a9cf94202e030b60c3bcbf1e4c3e23491a1c53295f978f->leave($__internal_9568a1da4aa4ad0300a9cf94202e030b60c3bcbf1e4c3e23491a1c53295f978f_prof);

        
        $__internal_c066909f1d59d4b0405ba4c554fb7ed35a0d5e8e927f1c36f30f6b532c8b8b9b->leave($__internal_c066909f1d59d4b0405ba4c554fb7ed35a0d5e8e927f1c36f30f6b532c8b8b9b_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/dev/Sites/mobilife_test_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
