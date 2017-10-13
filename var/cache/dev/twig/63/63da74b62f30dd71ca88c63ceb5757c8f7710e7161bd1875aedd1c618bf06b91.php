<?php

/* test/index.html.twig */
class __TwigTemplate_9074382fd1e43a405d56c131567d17a1386fcd8db121eda6769119a5735377a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fd1b565f6ce9a855a306ca340aed570f61681716bd2c62fd367b9a1206783b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd1b565f6ce9a855a306ca340aed570f61681716bd2c62fd367b9a1206783b1->enter($__internal_9fd1b565f6ce9a855a306ca340aed570f61681716bd2c62fd367b9a1206783b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_8f5b5a27fdc5c87db64bcf5f48a0ae1e5f68b352031ed593ce2058b7f0136e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5b5a27fdc5c87db64bcf5f48a0ae1e5f68b352031ed593ce2058b7f0136e9b->enter($__internal_8f5b5a27fdc5c87db64bcf5f48a0ae1e5f68b352031ed593ce2058b7f0136e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fd1b565f6ce9a855a306ca340aed570f61681716bd2c62fd367b9a1206783b1->leave($__internal_9fd1b565f6ce9a855a306ca340aed570f61681716bd2c62fd367b9a1206783b1_prof);

        
        $__internal_8f5b5a27fdc5c87db64bcf5f48a0ae1e5f68b352031ed593ce2058b7f0136e9b->leave($__internal_8f5b5a27fdc5c87db64bcf5f48a0ae1e5f68b352031ed593ce2058b7f0136e9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cc9248e942798aca31e54b3cbe8947bdc12e9755be5705b379f2604af8a4548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc9248e942798aca31e54b3cbe8947bdc12e9755be5705b379f2604af8a4548->enter($__internal_6cc9248e942798aca31e54b3cbe8947bdc12e9755be5705b379f2604af8a4548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d566aed77f91d2128a52dbe51ecb886c21e6227c08d0c9b83484ae7bea5c096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d566aed77f91d2128a52dbe51ecb886c21e6227c08d0c9b83484ae7bea5c096->enter($__internal_1d566aed77f91d2128a52dbe51ecb886c21e6227c08d0c9b83484ae7bea5c096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    My symfony project

";
        
        $__internal_1d566aed77f91d2128a52dbe51ecb886c21e6227c08d0c9b83484ae7bea5c096->leave($__internal_1d566aed77f91d2128a52dbe51ecb886c21e6227c08d0c9b83484ae7bea5c096_prof);

        
        $__internal_6cc9248e942798aca31e54b3cbe8947bdc12e9755be5705b379f2604af8a4548->leave($__internal_6cc9248e942798aca31e54b3cbe8947bdc12e9755be5705b379f2604af8a4548_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5388ac353f8022428ee6ee8cc1f0d5e52fba3db28bcd12880b65965cb1e2bf66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5388ac353f8022428ee6ee8cc1f0d5e52fba3db28bcd12880b65965cb1e2bf66->enter($__internal_5388ac353f8022428ee6ee8cc1f0d5e52fba3db28bcd12880b65965cb1e2bf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa50c8af788372363284d513e874f4fde8652561e90ac6eb221affcc4bb4ab78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa50c8af788372363284d513e874f4fde8652561e90ac6eb221affcc4bb4ab78->enter($__internal_aa50c8af788372363284d513e874f4fde8652561e90ac6eb221affcc4bb4ab78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <br>
    <article>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <h2>Categories</h2>
                    <ul>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "                            <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo " </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </ul>
                </div>
                <div class=\"col-md-10\">
                    <div id=\"demo\" class=\"display\">
                        <!--Some content here-->
                        <table id=\"example\" class=\"display\">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Text</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </article>

";
        
        $__internal_aa50c8af788372363284d513e874f4fde8652561e90ac6eb221affcc4bb4ab78->leave($__internal_aa50c8af788372363284d513e874f4fde8652561e90ac6eb221affcc4bb4ab78_prof);

        
        $__internal_5388ac353f8022428ee6ee8cc1f0d5e52fba3db28bcd12880b65965cb1e2bf66->leave($__internal_5388ac353f8022428ee6ee8cc1f0d5e52fba3db28bcd12880b65965cb1e2bf66_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a62f127049d44d926eff2ecb5443251c5ad624f2fdb7b2dd9c794b310ad2ab20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62f127049d44d926eff2ecb5443251c5ad624f2fdb7b2dd9c794b310ad2ab20->enter($__internal_a62f127049d44d926eff2ecb5443251c5ad624f2fdb7b2dd9c794b310ad2ab20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e9df833533b62e329617e7ac6c4496d73f3fa53d04e0b00183322981ae21e021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9df833533b62e329617e7ac6c4496d73f3fa53d04e0b00183322981ae21e021->enter($__internal_e9df833533b62e329617e7ac6c4496d73f3fa53d04e0b00183322981ae21e021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "

";
        
        $__internal_e9df833533b62e329617e7ac6c4496d73f3fa53d04e0b00183322981ae21e021->leave($__internal_e9df833533b62e329617e7ac6c4496d73f3fa53d04e0b00183322981ae21e021_prof);

        
        $__internal_a62f127049d44d926eff2ecb5443251c5ad624f2fdb7b2dd9c794b310ad2ab20->leave($__internal_a62f127049d44d926eff2ecb5443251c5ad624f2fdb7b2dd9c794b310ad2ab20_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  126 => 43,  95 => 21,  86 => 19,  82 => 18,  73 => 11,  64 => 10,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}

    My symfony project

{% endblock %}


{% block body %}
    <br>
    <article>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <h2>Categories</h2>
                    <ul>
                        {% for category in categories %}
                            <li> {{ category.name }} </li>
                        {% endfor %}
                    </ul>
                </div>
                <div class=\"col-md-10\">
                    <div id=\"demo\" class=\"display\">
                        <!--Some content here-->
                        <table id=\"example\" class=\"display\">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Text</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </article>

{% endblock %}
{% block javascripts %}


{% endblock %}
", "test/index.html.twig", "/home/dev/Projects/symfony_project/app/Resources/views/test/index.html.twig");
    }
}
