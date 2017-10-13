<?php

/* base.html.twig */
class __TwigTemplate_8cfc61e35f8b5ce473f28898d00532cf495511f882902d0f0beedad1d1640495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bootstrap' => array($this, 'block_bootstrap'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'top_menu' => array($this, 'block_top_menu'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3e0491ba9366d4cd189be48fc26ac70cd1d45387c418f789f2da641a13ba36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e0491ba9366d4cd189be48fc26ac70cd1d45387c418f789f2da641a13ba36f->enter($__internal_e3e0491ba9366d4cd189be48fc26ac70cd1d45387c418f789f2da641a13ba36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_de229e38ea2098da7a44c14fb3be410471b3bebdae6f1baaf19286427dd205cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de229e38ea2098da7a44c14fb3be410471b3bebdae6f1baaf19286427dd205cb->enter($__internal_de229e38ea2098da7a44c14fb3be410471b3bebdae6f1baaf19286427dd205cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('bootstrap', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('top_menu', $context, $blocks);
        // line 64
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('javascript', $context, $blocks);
        // line 94
        echo "    </body>
</html>
";
        
        $__internal_e3e0491ba9366d4cd189be48fc26ac70cd1d45387c418f789f2da641a13ba36f->leave($__internal_e3e0491ba9366d4cd189be48fc26ac70cd1d45387c418f789f2da641a13ba36f_prof);

        
        $__internal_de229e38ea2098da7a44c14fb3be410471b3bebdae6f1baaf19286427dd205cb->leave($__internal_de229e38ea2098da7a44c14fb3be410471b3bebdae6f1baaf19286427dd205cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5378752bbd099573c1e56cc93121a767f55ae2b68e616e56cf8cf624c8ac863f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5378752bbd099573c1e56cc93121a767f55ae2b68e616e56cf8cf624c8ac863f->enter($__internal_5378752bbd099573c1e56cc93121a767f55ae2b68e616e56cf8cf624c8ac863f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9187ed5720b1162ce74ddbba6eeb3133fa7040eccab687986848e9ff0fa8bd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9187ed5720b1162ce74ddbba6eeb3133fa7040eccab687986848e9ff0fa8bd38->enter($__internal_9187ed5720b1162ce74ddbba6eeb3133fa7040eccab687986848e9ff0fa8bd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9187ed5720b1162ce74ddbba6eeb3133fa7040eccab687986848e9ff0fa8bd38->leave($__internal_9187ed5720b1162ce74ddbba6eeb3133fa7040eccab687986848e9ff0fa8bd38_prof);

        
        $__internal_5378752bbd099573c1e56cc93121a767f55ae2b68e616e56cf8cf624c8ac863f->leave($__internal_5378752bbd099573c1e56cc93121a767f55ae2b68e616e56cf8cf624c8ac863f_prof);

    }

    // line 6
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_bd3e115c7e38cf668978b2ecd1ac9aea3e44db562f5dd09afce47d2b0c1645aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3e115c7e38cf668978b2ecd1ac9aea3e44db562f5dd09afce47d2b0c1645aa->enter($__internal_bd3e115c7e38cf668978b2ecd1ac9aea3e44db562f5dd09afce47d2b0c1645aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        $__internal_10f97d2bd83e8a9173309454f7af28bab6d1cb10d860be2893971a768914b061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f97d2bd83e8a9173309454f7af28bab6d1cb10d860be2893971a768914b061->enter($__internal_10f97d2bd83e8a9173309454f7af28bab6d1cb10d860be2893971a768914b061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
        ";
        
        $__internal_10f97d2bd83e8a9173309454f7af28bab6d1cb10d860be2893971a768914b061->leave($__internal_10f97d2bd83e8a9173309454f7af28bab6d1cb10d860be2893971a768914b061_prof);

        
        $__internal_bd3e115c7e38cf668978b2ecd1ac9aea3e44db562f5dd09afce47d2b0c1645aa->leave($__internal_bd3e115c7e38cf668978b2ecd1ac9aea3e44db562f5dd09afce47d2b0c1645aa_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d733edb1e1d8535af2c6b5bd2a83f9315481d4b133c051e6989da4be52ccb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d733edb1e1d8535af2c6b5bd2a83f9315481d4b133c051e6989da4be52ccb61->enter($__internal_1d733edb1e1d8535af2c6b5bd2a83f9315481d4b133c051e6989da4be52ccb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e2ebcb92db59dd4c8bd22a9576ca9ab6c1c66e10776aa65de9a9d0656752487e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ebcb92db59dd4c8bd22a9576ca9ab6c1c66e10776aa65de9a9d0656752487e->enter($__internal_e2ebcb92db59dd4c8bd22a9576ca9ab6c1c66e10776aa65de9a9d0656752487e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        ";
        
        $__internal_e2ebcb92db59dd4c8bd22a9576ca9ab6c1c66e10776aa65de9a9d0656752487e->leave($__internal_e2ebcb92db59dd4c8bd22a9576ca9ab6c1c66e10776aa65de9a9d0656752487e_prof);

        
        $__internal_1d733edb1e1d8535af2c6b5bd2a83f9315481d4b133c051e6989da4be52ccb61->leave($__internal_1d733edb1e1d8535af2c6b5bd2a83f9315481d4b133c051e6989da4be52ccb61_prof);

    }

    // line 16
    public function block_top_menu($context, array $blocks = array())
    {
        $__internal_b89a195915c38b1fc59a68cf0dacfc0c2eaa346fe9b9d50af5c6ec0ff12063ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89a195915c38b1fc59a68cf0dacfc0c2eaa346fe9b9d50af5c6ec0ff12063ea->enter($__internal_b89a195915c38b1fc59a68cf0dacfc0c2eaa346fe9b9d50af5c6ec0ff12063ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_menu"));

        $__internal_32eea6acc2899abc24debe099cb290d67c375c49f8b004485ed30268ae02fecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32eea6acc2899abc24debe099cb290d67c375c49f8b004485ed30268ae02fecf->enter($__internal_32eea6acc2899abc24debe099cb290d67c375c49f8b004485ed30268ae02fecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_menu"));

        // line 17
        echo "            <div class=\"container\">
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" href=\"/\">Home</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">


                            ";
        // line 27
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->getSourceContext()); })()), "user", array())) {
            // line 28
            echo "                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item\">
                                    <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\" class=\"nav-link\">Admin</a>
                                </li>
                                ";
            // line 32
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "                                    <li class=\"nav-item\">
                                        <a href=\"";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_index");
                echo "\" class=\"nav-link\">User</a>
                                    </li>
                                ";
            }
            // line 37
            echo "                            </ul>
                            <ul class=\"navbar-nav ml-auto\">
                                <li class=\"nav-item\">
                                    <a href=\"/\" class=\"nav-link\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                                        Logout </a>
                                </li>

                            ";
        } else {
            // line 48
            echo "                            <ul class=\"navbar-nav ml-auto\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"/login\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                                        Login </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"/register\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> Registration</a>
                                </li>
                            ";
        }
        // line 57
        echo "

                        </ul>
                    </div>
                </nav>
            </div>
        ";
        
        $__internal_32eea6acc2899abc24debe099cb290d67c375c49f8b004485ed30268ae02fecf->leave($__internal_32eea6acc2899abc24debe099cb290d67c375c49f8b004485ed30268ae02fecf_prof);

        
        $__internal_b89a195915c38b1fc59a68cf0dacfc0c2eaa346fe9b9d50af5c6ec0ff12063ea->leave($__internal_b89a195915c38b1fc59a68cf0dacfc0c2eaa346fe9b9d50af5c6ec0ff12063ea_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_94dd476b13aa5bbdc831d6c4f7515785b07a48e971271c60f9d2e66e8e240926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94dd476b13aa5bbdc831d6c4f7515785b07a48e971271c60f9d2e66e8e240926->enter($__internal_94dd476b13aa5bbdc831d6c4f7515785b07a48e971271c60f9d2e66e8e240926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1262e47439134b1c3a0f47f7b8d72535c318d3ccb3b73d45e8bdbdeb9821f474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1262e47439134b1c3a0f47f7b8d72535c318d3ccb3b73d45e8bdbdeb9821f474->enter($__internal_1262e47439134b1c3a0f47f7b8d72535c318d3ccb3b73d45e8bdbdeb9821f474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1262e47439134b1c3a0f47f7b8d72535c318d3ccb3b73d45e8bdbdeb9821f474->leave($__internal_1262e47439134b1c3a0f47f7b8d72535c318d3ccb3b73d45e8bdbdeb9821f474_prof);

        
        $__internal_94dd476b13aa5bbdc831d6c4f7515785b07a48e971271c60f9d2e66e8e240926->leave($__internal_94dd476b13aa5bbdc831d6c4f7515785b07a48e971271c60f9d2e66e8e240926_prof);

    }

    // line 66
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_91be90719c9b34fc8f283ebd76530b92a9c209bce0999b2ec420d4bc43744932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91be90719c9b34fc8f283ebd76530b92a9c209bce0999b2ec420d4bc43744932->enter($__internal_91be90719c9b34fc8f283ebd76530b92a9c209bce0999b2ec420d4bc43744932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_c959bfa7c7f1099b9c2d1141c0b5fd72ee94a3f8cff48eddad30f232c47b121b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c959bfa7c7f1099b9c2d1141c0b5fd72ee94a3f8cff48eddad30f232c47b121b->enter($__internal_c959bfa7c7f1099b9c2d1141c0b5fd72ee94a3f8cff48eddad30f232c47b121b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 67
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.js\"
                    integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
                    crossorigin=\"anonymous\">
            </script>

            <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
            <script>
                \$(document).ready(function() {
                    \$('#example').DataTable( {
                        serverSide: true,
                        ajax: {
                            url: '/ajax',
                            type: \"GET\"
                        },

                        columns: [
                            { data: 'title' },
                            { data: 'slug' },
                            { data: 'text' }
                        ]

                    } );
                })
            </script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_c959bfa7c7f1099b9c2d1141c0b5fd72ee94a3f8cff48eddad30f232c47b121b->leave($__internal_c959bfa7c7f1099b9c2d1141c0b5fd72ee94a3f8cff48eddad30f232c47b121b_prof);

        
        $__internal_91be90719c9b34fc8f283ebd76530b92a9c209bce0999b2ec420d4bc43744932->leave($__internal_91be90719c9b34fc8f283ebd76530b92a9c209bce0999b2ec420d4bc43744932_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 67,  240 => 66,  223 => 64,  207 => 57,  196 => 48,  188 => 43,  182 => 40,  177 => 37,  171 => 34,  168 => 33,  166 => 32,  161 => 30,  157 => 28,  155 => 27,  143 => 17,  134 => 16,  122 => 10,  113 => 9,  102 => 7,  93 => 6,  75 => 5,  63 => 94,  61 => 66,  58 => 65,  55 => 64,  53 => 16,  46 => 13,  43 => 9,  41 => 6,  37 => 5,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block bootstrap %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
        {% endblock %}
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block top_menu %}
            <div class=\"container\">
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" href=\"/\">Home</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">


                            {% if app.user %}
                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('admin') }}\" class=\"nav-link\">Admin</a>
                                </li>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li class=\"nav-item\">
                                        <a href=\"{{ path('admin_user_index') }}\" class=\"nav-link\">User</a>
                                    </li>
                                {% endif %}
                            </ul>
                            <ul class=\"navbar-nav ml-auto\">
                                <li class=\"nav-item\">
                                    <a href=\"/\" class=\"nav-link\">{{ app.user.username }}</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('logout') }}\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                                        Logout </a>
                                </li>

                            {% else %}
                            <ul class=\"navbar-nav ml-auto\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"/login\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                                        Login </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"/register\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> Registration</a>
                                </li>
                            {% endif %}


                        </ul>
                    </div>
                </nav>
            </div>
        {% endblock %}
        {% block body %}{% endblock %}

        {% block javascript %}
            <script src=\"https://code.jquery.com/jquery-3.2.1.js\"
                    integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
                    crossorigin=\"anonymous\">
            </script>

            <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
            <script>
                \$(document).ready(function() {
                    \$('#example').DataTable( {
                        serverSide: true,
                        ajax: {
                            url: '/ajax',
                            type: \"GET\"
                        },

                        columns: [
                            { data: 'title' },
                            { data: 'slug' },
                            { data: 'text' }
                        ]

                    } );
                })
            </script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/dev/Sites/mobilife_test_task/app/Resources/views/base.html.twig");
    }
}
