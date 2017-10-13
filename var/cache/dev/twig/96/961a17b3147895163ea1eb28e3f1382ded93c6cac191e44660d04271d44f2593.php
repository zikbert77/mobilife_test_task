<?php

/* security/login.html.twig */
class __TwigTemplate_98352792b82f44b0d4d6b35ba70a3d7c445041d7a32eb78693f52268c85fe0c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_8ae376c0aba57b38b642a0edbb1ea22dbd761b8e839f0825fa99992615915c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae376c0aba57b38b642a0edbb1ea22dbd761b8e839f0825fa99992615915c79->enter($__internal_8ae376c0aba57b38b642a0edbb1ea22dbd761b8e839f0825fa99992615915c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_64881a0b2827064f71767893637d364562ff3f54c99d8233ee2782c0bcc7dbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64881a0b2827064f71767893637d364562ff3f54c99d8233ee2782c0bcc7dbe3->enter($__internal_64881a0b2827064f71767893637d364562ff3f54c99d8233ee2782c0bcc7dbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae376c0aba57b38b642a0edbb1ea22dbd761b8e839f0825fa99992615915c79->leave($__internal_8ae376c0aba57b38b642a0edbb1ea22dbd761b8e839f0825fa99992615915c79_prof);

        
        $__internal_64881a0b2827064f71767893637d364562ff3f54c99d8233ee2782c0bcc7dbe3->leave($__internal_64881a0b2827064f71767893637d364562ff3f54c99d8233ee2782c0bcc7dbe3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e79210638f50b5068052b0b05ccac6403b46746855214c77cee9f05215bd6002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79210638f50b5068052b0b05ccac6403b46746855214c77cee9f05215bd6002->enter($__internal_e79210638f50b5068052b0b05ccac6403b46746855214c77cee9f05215bd6002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4e8a4f249556e0d8c12a87f3a371ad650ab5548e8022fb3f49be8b70ab7c91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e8a4f249556e0d8c12a87f3a371ad650ab5548e8022fb3f49be8b70ab7c91c->enter($__internal_a4e8a4f249556e0d8c12a87f3a371ad650ab5548e8022fb3f49be8b70ab7c91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    Login Page

";
        
        $__internal_a4e8a4f249556e0d8c12a87f3a371ad650ab5548e8022fb3f49be8b70ab7c91c->leave($__internal_a4e8a4f249556e0d8c12a87f3a371ad650ab5548e8022fb3f49be8b70ab7c91c_prof);

        
        $__internal_e79210638f50b5068052b0b05ccac6403b46746855214c77cee9f05215bd6002->leave($__internal_e79210638f50b5068052b0b05ccac6403b46746855214c77cee9f05215bd6002_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b23c4f665b8b61c982103a7ab49dac90110ec100910a6ad4db38860f0562923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b23c4f665b8b61c982103a7ab49dac90110ec100910a6ad4db38860f0562923->enter($__internal_7b23c4f665b8b61c982103a7ab49dac90110ec100910a6ad4db38860f0562923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd17f1b02d41e4b4dd0a0315b03b05fbb49f003623553c73bd41a569d7053a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd17f1b02d41e4b4dd0a0315b03b05fbb49f003623553c73bd41a569d7053a4c->enter($__internal_cd17f1b02d41e4b4dd0a0315b03b05fbb49f003623553c73bd41a569d7053a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 14
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 16, $this->getSourceContext()); })()), "messageKey", array()), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 19
        echo "                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >

                <div class=\"form-group\">
                    <label for=\"username\">
                        Username
                    </label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">
                        Password
                    </label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </div>


                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-success\">Login</button>
                </div>
                </form>

            </div>
        </div>

    </div>

";
        
        $__internal_cd17f1b02d41e4b4dd0a0315b03b05fbb49f003623553c73bd41a569d7053a4c->leave($__internal_cd17f1b02d41e4b4dd0a0315b03b05fbb49f003623553c73bd41a569d7053a4c_prof);

        
        $__internal_7b23c4f665b8b61c982103a7ab49dac90110ec100910a6ad4db38860f0562923->leave($__internal_7b23c4f665b8b61c982103a7ab49dac90110ec100910a6ad4db38860f0562923_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  94 => 21,  88 => 19,  82 => 16,  79 => 15,  77 => 14,  72 => 11,  63 => 10,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}

    Login Page

{% endblock %}


{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                {% if errors %}
                    <div class=\"alert alert-danger\">
                        {{ errors.messageKey }}
                    </div>
                {% endif %}
                <form action=\"{{ path('login') }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >

                <div class=\"form-group\">
                    <label for=\"username\">
                        Username
                    </label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{  username }}\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">
                        Password
                    </label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </div>


                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-success\">Login</button>
                </div>
                </form>

            </div>
        </div>

    </div>

{% endblock %}

", "security/login.html.twig", "/home/dev/Projects/symfony_project/app/Resources/views/security/login.html.twig");
    }
}
