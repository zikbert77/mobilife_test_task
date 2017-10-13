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
        $__internal_6aa5fb596b6f02e31d8d56317c2093dbb0717c1e49079d19e3915a06bf1ca033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa5fb596b6f02e31d8d56317c2093dbb0717c1e49079d19e3915a06bf1ca033->enter($__internal_6aa5fb596b6f02e31d8d56317c2093dbb0717c1e49079d19e3915a06bf1ca033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6891b4ffada6e2ff6e66c348960dd94603da1e71b72b32c16bab01701368f30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6891b4ffada6e2ff6e66c348960dd94603da1e71b72b32c16bab01701368f30a->enter($__internal_6891b4ffada6e2ff6e66c348960dd94603da1e71b72b32c16bab01701368f30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aa5fb596b6f02e31d8d56317c2093dbb0717c1e49079d19e3915a06bf1ca033->leave($__internal_6aa5fb596b6f02e31d8d56317c2093dbb0717c1e49079d19e3915a06bf1ca033_prof);

        
        $__internal_6891b4ffada6e2ff6e66c348960dd94603da1e71b72b32c16bab01701368f30a->leave($__internal_6891b4ffada6e2ff6e66c348960dd94603da1e71b72b32c16bab01701368f30a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52d578ea1821a64071fb4efcfdd396b4613c37c7a56bdd414ca5a2a52ac1187f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d578ea1821a64071fb4efcfdd396b4613c37c7a56bdd414ca5a2a52ac1187f->enter($__internal_52d578ea1821a64071fb4efcfdd396b4613c37c7a56bdd414ca5a2a52ac1187f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b662e0c10f93d520a6dfa45c812f6be66d0e7e16db542ca12be25e2034d46d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b662e0c10f93d520a6dfa45c812f6be66d0e7e16db542ca12be25e2034d46d1->enter($__internal_7b662e0c10f93d520a6dfa45c812f6be66d0e7e16db542ca12be25e2034d46d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b662e0c10f93d520a6dfa45c812f6be66d0e7e16db542ca12be25e2034d46d1->leave($__internal_7b662e0c10f93d520a6dfa45c812f6be66d0e7e16db542ca12be25e2034d46d1_prof);

        
        $__internal_52d578ea1821a64071fb4efcfdd396b4613c37c7a56bdd414ca5a2a52ac1187f->leave($__internal_52d578ea1821a64071fb4efcfdd396b4613c37c7a56bdd414ca5a2a52ac1187f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7973b807122e7713421e3ce2c9b868549d3a3ed6b914f463ee6a409fa2df1b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7973b807122e7713421e3ce2c9b868549d3a3ed6b914f463ee6a409fa2df1b2b->enter($__internal_7973b807122e7713421e3ce2c9b868549d3a3ed6b914f463ee6a409fa2df1b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d343f4d3e44b2ac4cd2e3adb7dc5f0624b576ddac1f4b2e9239eef1cac67bfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d343f4d3e44b2ac4cd2e3adb7dc5f0624b576ddac1f4b2e9239eef1cac67bfcd->enter($__internal_d343f4d3e44b2ac4cd2e3adb7dc5f0624b576ddac1f4b2e9239eef1cac67bfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d343f4d3e44b2ac4cd2e3adb7dc5f0624b576ddac1f4b2e9239eef1cac67bfcd->leave($__internal_d343f4d3e44b2ac4cd2e3adb7dc5f0624b576ddac1f4b2e9239eef1cac67bfcd_prof);

        
        $__internal_7973b807122e7713421e3ce2c9b868549d3a3ed6b914f463ee6a409fa2df1b2b->leave($__internal_7973b807122e7713421e3ce2c9b868549d3a3ed6b914f463ee6a409fa2df1b2b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28053e2657bbffcbde04e94e4d490ed17703e340e5d60754eef142334dff019d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28053e2657bbffcbde04e94e4d490ed17703e340e5d60754eef142334dff019d->enter($__internal_28053e2657bbffcbde04e94e4d490ed17703e340e5d60754eef142334dff019d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2f617134d09e8db3cf3ee996e80e3996285a57070417392acc246eaf82efeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f617134d09e8db3cf3ee996e80e3996285a57070417392acc246eaf82efeef->enter($__internal_a2f617134d09e8db3cf3ee996e80e3996285a57070417392acc246eaf82efeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a2f617134d09e8db3cf3ee996e80e3996285a57070417392acc246eaf82efeef->leave($__internal_a2f617134d09e8db3cf3ee996e80e3996285a57070417392acc246eaf82efeef_prof);

        
        $__internal_28053e2657bbffcbde04e94e4d490ed17703e340e5d60754eef142334dff019d->leave($__internal_28053e2657bbffcbde04e94e4d490ed17703e340e5d60754eef142334dff019d_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/dev/Sites/mobilife_test_task/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
