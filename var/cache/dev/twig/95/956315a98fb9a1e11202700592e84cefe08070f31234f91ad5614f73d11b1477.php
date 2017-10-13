<?php

/* article/index.html.twig */
class __TwigTemplate_c3a953101378564cb7594c3fbc30b05c2d619ed48ce93198015bf6670efd82e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d1e82362c873215b64af29946412a255703b4d10c3b58f6c27f5cfd291c35e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1e82362c873215b64af29946412a255703b4d10c3b58f6c27f5cfd291c35e7->enter($__internal_9d1e82362c873215b64af29946412a255703b4d10c3b58f6c27f5cfd291c35e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_74c4f2630c67ca8daf1a118f2206edf84e5ffc9920c3efb76bf3e1867ac51528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c4f2630c67ca8daf1a118f2206edf84e5ffc9920c3efb76bf3e1867ac51528->enter($__internal_74c4f2630c67ca8daf1a118f2206edf84e5ffc9920c3efb76bf3e1867ac51528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1e82362c873215b64af29946412a255703b4d10c3b58f6c27f5cfd291c35e7->leave($__internal_9d1e82362c873215b64af29946412a255703b4d10c3b58f6c27f5cfd291c35e7_prof);

        
        $__internal_74c4f2630c67ca8daf1a118f2206edf84e5ffc9920c3efb76bf3e1867ac51528->leave($__internal_74c4f2630c67ca8daf1a118f2206edf84e5ffc9920c3efb76bf3e1867ac51528_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0a5ffc53db72e9a4a22ac5d7c1a93e202c461a774bcbd7bb25623af4a1cbfe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a5ffc53db72e9a4a22ac5d7c1a93e202c461a774bcbd7bb25623af4a1cbfe4->enter($__internal_f0a5ffc53db72e9a4a22ac5d7c1a93e202c461a774bcbd7bb25623af4a1cbfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46a1a13c076b6349ac7c3409ed0590b2d65c21c3d7a9facbde1bd632ecb426ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a1a13c076b6349ac7c3409ed0590b2d65c21c3d7a9facbde1bd632ecb426ec->enter($__internal_46a1a13c076b6349ac7c3409ed0590b2d65c21c3d7a9facbde1bd632ecb426ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Admin
";
        
        $__internal_46a1a13c076b6349ac7c3409ed0590b2d65c21c3d7a9facbde1bd632ecb426ec->leave($__internal_46a1a13c076b6349ac7c3409ed0590b2d65c21c3d7a9facbde1bd632ecb426ec_prof);

        
        $__internal_f0a5ffc53db72e9a4a22ac5d7c1a93e202c461a774bcbd7bb25623af4a1cbfe4->leave($__internal_f0a5ffc53db72e9a4a22ac5d7c1a93e202c461a774bcbd7bb25623af4a1cbfe4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a4772af0282e2103ad41b32d7d42046f12e5b5d326beb74762f2581bc521bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4772af0282e2103ad41b32d7d42046f12e5b5d326beb74762f2581bc521bbc->enter($__internal_9a4772af0282e2103ad41b32d7d42046f12e5b5d326beb74762f2581bc521bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0a2f863d474a42dd74bfc03199665f2754d004a01c652d61374637a13f49a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a2f863d474a42dd74bfc03199665f2754d004a01c652d61374637a13f49a9d->enter($__internal_f0a2f863d474a42dd74bfc03199665f2754d004a01c652d61374637a13f49a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <br>
                <a class=\"btn btn-outline-dark\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_new");
        echo "\">Create a new article</a>
                <br>
                <br>
                <table class=\"table\">

                    <thead class=\"thead-inverse\">
                    <tr>
                        <th>Id</th>
                        <th>CatId</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Slug</th>
                        <th>CreatedAt</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 29, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "                        <tr>
                            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "catId", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "text", array()), "html", null, true);
            echo "</td>
                            <td>/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "slug", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a class=\"btn btn-outline-secondary\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <br>
                                    <li>
                                        <a class=\"btn btn-outline-primary\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </tbody>
                </table>



            </div>
        </div>
    </div>
";
        
        $__internal_f0a2f863d474a42dd74bfc03199665f2754d004a01c652d61374637a13f49a9d->leave($__internal_f0a2f863d474a42dd74bfc03199665f2754d004a01c652d61374637a13f49a9d_prof);

        
        $__internal_9a4772af0282e2103ad41b32d7d42046f12e5b5d326beb74762f2581bc521bbc->leave($__internal_9a4772af0282e2103ad41b32d7d42046f12e5b5d326beb74762f2581bc521bbc_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 50,  142 => 44,  135 => 40,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  104 => 31,  101 => 30,  97 => 29,  76 => 11,  70 => 7,  61 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    Admin
{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <br>
                <a class=\"btn btn-outline-dark\" href=\"{{ path('admin_new') }}\">Create a new article</a>
                <br>
                <br>
                <table class=\"table\">

                    <thead class=\"thead-inverse\">
                    <tr>
                        <th>Id</th>
                        <th>CatId</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Slug</th>
                        <th>CreatedAt</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    {% for article in articles %}
                        <tr>
                            <td><a href=\"{{ path('admin_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                            <td>{{ article.catId }}</td>
                            <td>{{ article.title }}</td>
                            <td>{{ article.text }}</td>
                            <td>/{{ article.slug }}</td>
                            <td>{% if article.createdAt %}{{ article.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a class=\"btn btn-outline-secondary\" href=\"{{ path('admin_show', { 'id' : article.id }) }}\">show</a>
                                    </li>
                                    <br>
                                    <li>
                                        <a class=\"btn btn-outline-primary\" href=\"{{ path('admin_edit', { 'id': article.id }) }}\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>



            </div>
        </div>
    </div>
{% endblock %}
", "article/index.html.twig", "/home/dev/Projects/symfony_project/app/Resources/views/article/index.html.twig");
    }
}
