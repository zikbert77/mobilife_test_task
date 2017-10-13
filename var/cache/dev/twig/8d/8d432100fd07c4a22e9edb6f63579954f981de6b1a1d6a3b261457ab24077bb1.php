<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_529d16a01ea3d0aef95ff04d0b8b4ec27ecee89dab7577f6ab2a0c2535d20d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8abcb5ce6f4dc0093f883794de1a041b9f50510a63a5e70a9521685eabcf4d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abcb5ce6f4dc0093f883794de1a041b9f50510a63a5e70a9521685eabcf4d9f->enter($__internal_8abcb5ce6f4dc0093f883794de1a041b9f50510a63a5e70a9521685eabcf4d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6253578aebce1aa8b3718dfda8ef84dae6aeb12f27f0c03d02f99abdb3450772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6253578aebce1aa8b3718dfda8ef84dae6aeb12f27f0c03d02f99abdb3450772->enter($__internal_6253578aebce1aa8b3718dfda8ef84dae6aeb12f27f0c03d02f99abdb3450772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abcb5ce6f4dc0093f883794de1a041b9f50510a63a5e70a9521685eabcf4d9f->leave($__internal_8abcb5ce6f4dc0093f883794de1a041b9f50510a63a5e70a9521685eabcf4d9f_prof);

        
        $__internal_6253578aebce1aa8b3718dfda8ef84dae6aeb12f27f0c03d02f99abdb3450772->leave($__internal_6253578aebce1aa8b3718dfda8ef84dae6aeb12f27f0c03d02f99abdb3450772_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6dd117746b0a2caad8ba477a3cfc19af0ad97deb1c9369b25f2c7fd755983389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd117746b0a2caad8ba477a3cfc19af0ad97deb1c9369b25f2c7fd755983389->enter($__internal_6dd117746b0a2caad8ba477a3cfc19af0ad97deb1c9369b25f2c7fd755983389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_62f46e57856d33eda7c2cf2c6d748be34712597310fb56e534d24d6e0f50dfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f46e57856d33eda7c2cf2c6d748be34712597310fb56e534d24d6e0f50dfc4->enter($__internal_62f46e57856d33eda7c2cf2c6d748be34712597310fb56e534d24d6e0f50dfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_62f46e57856d33eda7c2cf2c6d748be34712597310fb56e534d24d6e0f50dfc4->leave($__internal_62f46e57856d33eda7c2cf2c6d748be34712597310fb56e534d24d6e0f50dfc4_prof);

        
        $__internal_6dd117746b0a2caad8ba477a3cfc19af0ad97deb1c9369b25f2c7fd755983389->leave($__internal_6dd117746b0a2caad8ba477a3cfc19af0ad97deb1c9369b25f2c7fd755983389_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e3ae116c35a3be482f85f9cfb68802b3ff0d25f88c38db7f5099df437813281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3ae116c35a3be482f85f9cfb68802b3ff0d25f88c38db7f5099df437813281->enter($__internal_4e3ae116c35a3be482f85f9cfb68802b3ff0d25f88c38db7f5099df437813281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97af16b8496462bb5edf375573443e8194dbc6b626c7887f6aadc41493e431b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97af16b8496462bb5edf375573443e8194dbc6b626c7887f6aadc41493e431b5->enter($__internal_97af16b8496462bb5edf375573443e8194dbc6b626c7887f6aadc41493e431b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_97af16b8496462bb5edf375573443e8194dbc6b626c7887f6aadc41493e431b5->leave($__internal_97af16b8496462bb5edf375573443e8194dbc6b626c7887f6aadc41493e431b5_prof);

        
        $__internal_4e3ae116c35a3be482f85f9cfb68802b3ff0d25f88c38db7f5099df437813281->leave($__internal_4e3ae116c35a3be482f85f9cfb68802b3ff0d25f88c38db7f5099df437813281_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89a14756d6a5edde926571cb92faedca1017bca86c77743a8c493e14d225ba14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a14756d6a5edde926571cb92faedca1017bca86c77743a8c493e14d225ba14->enter($__internal_89a14756d6a5edde926571cb92faedca1017bca86c77743a8c493e14d225ba14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a74eb1c6968b0a1ef66356d27e4e3d732a1697064b8964aed11250a7717df08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a74eb1c6968b0a1ef66356d27e4e3d732a1697064b8964aed11250a7717df08->enter($__internal_3a74eb1c6968b0a1ef66356d27e4e3d732a1697064b8964aed11250a7717df08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_3a74eb1c6968b0a1ef66356d27e4e3d732a1697064b8964aed11250a7717df08->leave($__internal_3a74eb1c6968b0a1ef66356d27e4e3d732a1697064b8964aed11250a7717df08_prof);

        
        $__internal_89a14756d6a5edde926571cb92faedca1017bca86c77743a8c493e14d225ba14->leave($__internal_89a14756d6a5edde926571cb92faedca1017bca86c77743a8c493e14d225ba14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/dev/Projects/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
