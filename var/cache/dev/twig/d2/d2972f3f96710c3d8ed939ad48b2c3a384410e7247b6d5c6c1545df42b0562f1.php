<?php

/* article/new.html.twig */
class __TwigTemplate_e42157b412a6eef6646d7a73eae8d627fb3873b9e8ccbf44632542a2b49b463f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11a22fc59b19c675b392b43724a1e28a05b076aa2b760782da4c0af4ea219fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a22fc59b19c675b392b43724a1e28a05b076aa2b760782da4c0af4ea219fd7->enter($__internal_11a22fc59b19c675b392b43724a1e28a05b076aa2b760782da4c0af4ea219fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_9fb09517cdc2baf49046e8a624946cb7ffec888f7ef0578f563e812d4a6faf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb09517cdc2baf49046e8a624946cb7ffec888f7ef0578f563e812d4a6faf1a->enter($__internal_9fb09517cdc2baf49046e8a624946cb7ffec888f7ef0578f563e812d4a6faf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a22fc59b19c675b392b43724a1e28a05b076aa2b760782da4c0af4ea219fd7->leave($__internal_11a22fc59b19c675b392b43724a1e28a05b076aa2b760782da4c0af4ea219fd7_prof);

        
        $__internal_9fb09517cdc2baf49046e8a624946cb7ffec888f7ef0578f563e812d4a6faf1a->leave($__internal_9fb09517cdc2baf49046e8a624946cb7ffec888f7ef0578f563e812d4a6faf1a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66ce6160532de207446a7d7fc0d3035b37daa18f00a24d4c86d19276b49f1a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ce6160532de207446a7d7fc0d3035b37daa18f00a24d4c86d19276b49f1a65->enter($__internal_66ce6160532de207446a7d7fc0d3035b37daa18f00a24d4c86d19276b49f1a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff1929bfbd2ed750f7397a6a616847807c633b86940c400ed11ec407f6624fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1929bfbd2ed750f7397a6a616847807c633b86940c400ed11ec407f6624fbb->enter($__internal_ff1929bfbd2ed750f7397a6a616847807c633b86940c400ed11ec407f6624fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>Article creation</h1>

                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                <div class=\"form-group\">
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "catId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "catId")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "title")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "text", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "text")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "slug", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "slug")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "createdAt", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form_end');
        echo "
                <br>
                <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i> Back to the list</a>

            </div>
        </div>
    </div>
";
        
        $__internal_ff1929bfbd2ed750f7397a6a616847807c633b86940c400ed11ec407f6624fbb->leave($__internal_ff1929bfbd2ed750f7397a6a616847807c633b86940c400ed11ec407f6624fbb_prof);

        
        $__internal_66ce6160532de207446a7d7fc0d3035b37daa18f00a24d4c86d19276b49f1a65->leave($__internal_66ce6160532de207446a7d7fc0d3035b37daa18f00a24d4c86d19276b49f1a65_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  91 => 26,  85 => 23,  79 => 20,  73 => 17,  67 => 14,  61 => 11,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>Article creation</h1>

                {{ form_start(form, {'attr': { 'class' : 'form-horizontal' }}) }}
                <div class=\"form-group\">
                    {{ form_widget(form.catId, { 'attr': { 'class' : 'form-control', 'placeholder' : 'catId' }}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_widget(form.title, { 'attr': { 'class' : 'form-control', 'placeholder' : 'title' }}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_widget(form.text, { 'attr': { 'class' : 'form-control', 'placeholder' : 'text' }}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_widget(form.slug, {'attr': { 'class' : 'form-control', 'placeholder' : 'slug' }}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_widget(form.createdAt, { 'attr': { 'class' : 'form-control' }}) }}
                </div>
                <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
                {{ form_end(form) }}
                <br>
                <a href=\"{{ path('admin_index') }}\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i> Back to the list</a>

            </div>
        </div>
    </div>
{% endblock %}
", "article/new.html.twig", "/home/dev/Projects/symfony_project/app/Resources/views/article/new.html.twig");
    }
}
