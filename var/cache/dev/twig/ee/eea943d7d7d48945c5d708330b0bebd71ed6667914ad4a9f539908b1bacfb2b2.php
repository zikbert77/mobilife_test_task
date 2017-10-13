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
        $__internal_26e71d62d5fa3666b3ce01e5c69d2377f2a3578712b308fe6bd5a0d44d55ff8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e71d62d5fa3666b3ce01e5c69d2377f2a3578712b308fe6bd5a0d44d55ff8f->enter($__internal_26e71d62d5fa3666b3ce01e5c69d2377f2a3578712b308fe6bd5a0d44d55ff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_49aa84a967ce1d699a5417c45e16d7ccbf5267dc253f2d4803122c81906697d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49aa84a967ce1d699a5417c45e16d7ccbf5267dc253f2d4803122c81906697d7->enter($__internal_49aa84a967ce1d699a5417c45e16d7ccbf5267dc253f2d4803122c81906697d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e71d62d5fa3666b3ce01e5c69d2377f2a3578712b308fe6bd5a0d44d55ff8f->leave($__internal_26e71d62d5fa3666b3ce01e5c69d2377f2a3578712b308fe6bd5a0d44d55ff8f_prof);

        
        $__internal_49aa84a967ce1d699a5417c45e16d7ccbf5267dc253f2d4803122c81906697d7->leave($__internal_49aa84a967ce1d699a5417c45e16d7ccbf5267dc253f2d4803122c81906697d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c8883fc472abded82b053ca93f654fab8a8760e51405e4cbc7909dcc769c426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8883fc472abded82b053ca93f654fab8a8760e51405e4cbc7909dcc769c426->enter($__internal_4c8883fc472abded82b053ca93f654fab8a8760e51405e4cbc7909dcc769c426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f8601836f43f5de4baabf203a4f437ba89b529301628c6c35821052e548a63f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8601836f43f5de4baabf203a4f437ba89b529301628c6c35821052e548a63f6->enter($__internal_f8601836f43f5de4baabf203a4f437ba89b529301628c6c35821052e548a63f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8601836f43f5de4baabf203a4f437ba89b529301628c6c35821052e548a63f6->leave($__internal_f8601836f43f5de4baabf203a4f437ba89b529301628c6c35821052e548a63f6_prof);

        
        $__internal_4c8883fc472abded82b053ca93f654fab8a8760e51405e4cbc7909dcc769c426->leave($__internal_4c8883fc472abded82b053ca93f654fab8a8760e51405e4cbc7909dcc769c426_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_988b4a40f445d9321492c964cc984f9926ea0debfa5b4974a9e4861cffbcd93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988b4a40f445d9321492c964cc984f9926ea0debfa5b4974a9e4861cffbcd93c->enter($__internal_988b4a40f445d9321492c964cc984f9926ea0debfa5b4974a9e4861cffbcd93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f80ce39cf97ea494e500970756f9af6cbf49f1cea8e54b68169083a95f503373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80ce39cf97ea494e500970756f9af6cbf49f1cea8e54b68169083a95f503373->enter($__internal_f80ce39cf97ea494e500970756f9af6cbf49f1cea8e54b68169083a95f503373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f80ce39cf97ea494e500970756f9af6cbf49f1cea8e54b68169083a95f503373->leave($__internal_f80ce39cf97ea494e500970756f9af6cbf49f1cea8e54b68169083a95f503373_prof);

        
        $__internal_988b4a40f445d9321492c964cc984f9926ea0debfa5b4974a9e4861cffbcd93c->leave($__internal_988b4a40f445d9321492c964cc984f9926ea0debfa5b4974a9e4861cffbcd93c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0099f4c622d0ba29d7494f8d470b742c64c42c47489fd2732d2c936deee6b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0099f4c622d0ba29d7494f8d470b742c64c42c47489fd2732d2c936deee6b87->enter($__internal_f0099f4c622d0ba29d7494f8d470b742c64c42c47489fd2732d2c936deee6b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6a87c3962e8a3063d00d29eac69757983b9395831a911993b477631e029441a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a87c3962e8a3063d00d29eac69757983b9395831a911993b477631e029441a->enter($__internal_d6a87c3962e8a3063d00d29eac69757983b9395831a911993b477631e029441a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d6a87c3962e8a3063d00d29eac69757983b9395831a911993b477631e029441a->leave($__internal_d6a87c3962e8a3063d00d29eac69757983b9395831a911993b477631e029441a_prof);

        
        $__internal_f0099f4c622d0ba29d7494f8d470b742c64c42c47489fd2732d2c936deee6b87->leave($__internal_f0099f4c622d0ba29d7494f8d470b742c64c42c47489fd2732d2c936deee6b87_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/dev/Projects/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
