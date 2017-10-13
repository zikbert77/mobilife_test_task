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
        $__internal_6098dbc2eb4269524f9b280c69d0fd00b23d2eebad152166dcbbcdc120bb2438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6098dbc2eb4269524f9b280c69d0fd00b23d2eebad152166dcbbcdc120bb2438->enter($__internal_6098dbc2eb4269524f9b280c69d0fd00b23d2eebad152166dcbbcdc120bb2438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_739c30cbcba73a31bf041240897b17b1d4c598e872b54389ee6604e771ea2109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739c30cbcba73a31bf041240897b17b1d4c598e872b54389ee6604e771ea2109->enter($__internal_739c30cbcba73a31bf041240897b17b1d4c598e872b54389ee6604e771ea2109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6098dbc2eb4269524f9b280c69d0fd00b23d2eebad152166dcbbcdc120bb2438->leave($__internal_6098dbc2eb4269524f9b280c69d0fd00b23d2eebad152166dcbbcdc120bb2438_prof);

        
        $__internal_739c30cbcba73a31bf041240897b17b1d4c598e872b54389ee6604e771ea2109->leave($__internal_739c30cbcba73a31bf041240897b17b1d4c598e872b54389ee6604e771ea2109_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_640f2802795b3d9c228f099333b05a86c01c528180b8a34c1fb2e22aea557710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640f2802795b3d9c228f099333b05a86c01c528180b8a34c1fb2e22aea557710->enter($__internal_640f2802795b3d9c228f099333b05a86c01c528180b8a34c1fb2e22aea557710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_324b9bbcfca6834336c5632dc9ab54205b704a7dbe8433769a6a801ad81b611d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324b9bbcfca6834336c5632dc9ab54205b704a7dbe8433769a6a801ad81b611d->enter($__internal_324b9bbcfca6834336c5632dc9ab54205b704a7dbe8433769a6a801ad81b611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    My symfony project

";
        
        $__internal_324b9bbcfca6834336c5632dc9ab54205b704a7dbe8433769a6a801ad81b611d->leave($__internal_324b9bbcfca6834336c5632dc9ab54205b704a7dbe8433769a6a801ad81b611d_prof);

        
        $__internal_640f2802795b3d9c228f099333b05a86c01c528180b8a34c1fb2e22aea557710->leave($__internal_640f2802795b3d9c228f099333b05a86c01c528180b8a34c1fb2e22aea557710_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_138a4c666833e1c9f414490d3a384bca1c50eca290f6d82b0f09c8ccefeedc8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138a4c666833e1c9f414490d3a384bca1c50eca290f6d82b0f09c8ccefeedc8a->enter($__internal_138a4c666833e1c9f414490d3a384bca1c50eca290f6d82b0f09c8ccefeedc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ee0471e7317fa36e1a648e00d00afac39f94fd551abe5aacbc25608e0c5fc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee0471e7317fa36e1a648e00d00afac39f94fd551abe5aacbc25608e0c5fc37->enter($__internal_4ee0471e7317fa36e1a648e00d00afac39f94fd551abe5aacbc25608e0c5fc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <br>
    <br>
    <article>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <h2>Categories</h2>
                    <ul>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                            <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo " </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
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
        
        $__internal_4ee0471e7317fa36e1a648e00d00afac39f94fd551abe5aacbc25608e0c5fc37->leave($__internal_4ee0471e7317fa36e1a648e00d00afac39f94fd551abe5aacbc25608e0c5fc37_prof);

        
        $__internal_138a4c666833e1c9f414490d3a384bca1c50eca290f6d82b0f09c8ccefeedc8a->leave($__internal_138a4c666833e1c9f414490d3a384bca1c50eca290f6d82b0f09c8ccefeedc8a_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aad103a96940e755ecf693bd26342866b02680c42c2570d346d2e5ccf883add0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad103a96940e755ecf693bd26342866b02680c42c2570d346d2e5ccf883add0->enter($__internal_aad103a96940e755ecf693bd26342866b02680c42c2570d346d2e5ccf883add0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0faac326fe98e0187fcf195258e676730db9ed39911a44cb19a09c27855ae7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0faac326fe98e0187fcf195258e676730db9ed39911a44cb19a09c27855ae7ed->enter($__internal_0faac326fe98e0187fcf195258e676730db9ed39911a44cb19a09c27855ae7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "

";
        
        $__internal_0faac326fe98e0187fcf195258e676730db9ed39911a44cb19a09c27855ae7ed->leave($__internal_0faac326fe98e0187fcf195258e676730db9ed39911a44cb19a09c27855ae7ed_prof);

        
        $__internal_aad103a96940e755ecf693bd26342866b02680c42c2570d346d2e5ccf883add0->leave($__internal_aad103a96940e755ecf693bd26342866b02680c42c2570d346d2e5ccf883add0_prof);

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
        return array (  136 => 45,  127 => 44,  96 => 22,  87 => 20,  83 => 19,  73 => 11,  64 => 10,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}

    My symfony project

{% endblock %}


{% block body %}
    <br>
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
", "test/index.html.twig", "/home/dev/Sites/mobilife_test_task/app/Resources/views/test/index.html.twig");
    }
}
