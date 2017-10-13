<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9433aaed746824f39e5585bce1fd840939659773f54cd3440a7861f109c8f24c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_295df9a6a65026fccf00510229f21d27741cb2793b8e30ffb6d45d6bd4091ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295df9a6a65026fccf00510229f21d27741cb2793b8e30ffb6d45d6bd4091ce7->enter($__internal_295df9a6a65026fccf00510229f21d27741cb2793b8e30ffb6d45d6bd4091ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ca2ac09d39c518ede1bce2058fad252b89e0a363d3d222a58cf9cf9d5fc79d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2ac09d39c518ede1bce2058fad252b89e0a363d3d222a58cf9cf9d5fc79d7e->enter($__internal_ca2ac09d39c518ede1bce2058fad252b89e0a363d3d222a58cf9cf9d5fc79d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_295df9a6a65026fccf00510229f21d27741cb2793b8e30ffb6d45d6bd4091ce7->leave($__internal_295df9a6a65026fccf00510229f21d27741cb2793b8e30ffb6d45d6bd4091ce7_prof);

        
        $__internal_ca2ac09d39c518ede1bce2058fad252b89e0a363d3d222a58cf9cf9d5fc79d7e->leave($__internal_ca2ac09d39c518ede1bce2058fad252b89e0a363d3d222a58cf9cf9d5fc79d7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06487db4c90f559b9e2946010529294246d6744f94f420076b9e2ab793fa958e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06487db4c90f559b9e2946010529294246d6744f94f420076b9e2ab793fa958e->enter($__internal_06487db4c90f559b9e2946010529294246d6744f94f420076b9e2ab793fa958e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae29a5cd482bcd00496c445c7927ad77ee87b70b11acc0b1d207585d2264d35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae29a5cd482bcd00496c445c7927ad77ee87b70b11acc0b1d207585d2264d35c->enter($__internal_ae29a5cd482bcd00496c445c7927ad77ee87b70b11acc0b1d207585d2264d35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ae29a5cd482bcd00496c445c7927ad77ee87b70b11acc0b1d207585d2264d35c->leave($__internal_ae29a5cd482bcd00496c445c7927ad77ee87b70b11acc0b1d207585d2264d35c_prof);

        
        $__internal_06487db4c90f559b9e2946010529294246d6744f94f420076b9e2ab793fa958e->leave($__internal_06487db4c90f559b9e2946010529294246d6744f94f420076b9e2ab793fa958e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_10cc766b0ed2511d719e53966756a20d00056cf0500a302f06050c11289ff8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10cc766b0ed2511d719e53966756a20d00056cf0500a302f06050c11289ff8fd->enter($__internal_10cc766b0ed2511d719e53966756a20d00056cf0500a302f06050c11289ff8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7eff8c3ad67edcb46be10f522d89cff3e45459eddef6d1a7d919d5ed344eb800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eff8c3ad67edcb46be10f522d89cff3e45459eddef6d1a7d919d5ed344eb800->enter($__internal_7eff8c3ad67edcb46be10f522d89cff3e45459eddef6d1a7d919d5ed344eb800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_7eff8c3ad67edcb46be10f522d89cff3e45459eddef6d1a7d919d5ed344eb800->leave($__internal_7eff8c3ad67edcb46be10f522d89cff3e45459eddef6d1a7d919d5ed344eb800_prof);

        
        $__internal_10cc766b0ed2511d719e53966756a20d00056cf0500a302f06050c11289ff8fd->leave($__internal_10cc766b0ed2511d719e53966756a20d00056cf0500a302f06050c11289ff8fd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c665350e6ad5658b283db67f15446829c2ccf30ba93d08bd0c893a1b7a9310a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c665350e6ad5658b283db67f15446829c2ccf30ba93d08bd0c893a1b7a9310a9->enter($__internal_c665350e6ad5658b283db67f15446829c2ccf30ba93d08bd0c893a1b7a9310a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a88b07a11cc10b8ac683d35381995296876f6c8f93451bc578082096da3b6572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88b07a11cc10b8ac683d35381995296876f6c8f93451bc578082096da3b6572->enter($__internal_a88b07a11cc10b8ac683d35381995296876f6c8f93451bc578082096da3b6572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a88b07a11cc10b8ac683d35381995296876f6c8f93451bc578082096da3b6572->leave($__internal_a88b07a11cc10b8ac683d35381995296876f6c8f93451bc578082096da3b6572_prof);

        
        $__internal_c665350e6ad5658b283db67f15446829c2ccf30ba93d08bd0c893a1b7a9310a9->leave($__internal_c665350e6ad5658b283db67f15446829c2ccf30ba93d08bd0c893a1b7a9310a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/dev/Projects/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
