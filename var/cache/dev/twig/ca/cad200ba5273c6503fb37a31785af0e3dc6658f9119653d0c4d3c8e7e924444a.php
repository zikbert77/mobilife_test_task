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
        $__internal_b771d8544e87f0078562e387ad05f9a4923cd5da78c6209b10bbcddbdafa73d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b771d8544e87f0078562e387ad05f9a4923cd5da78c6209b10bbcddbdafa73d8->enter($__internal_b771d8544e87f0078562e387ad05f9a4923cd5da78c6209b10bbcddbdafa73d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3ab2bcd768f06dadfa99619733f1f6cadea87ca1013b76a9e8a23f50ed32b2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab2bcd768f06dadfa99619733f1f6cadea87ca1013b76a9e8a23f50ed32b2fd->enter($__internal_3ab2bcd768f06dadfa99619733f1f6cadea87ca1013b76a9e8a23f50ed32b2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b771d8544e87f0078562e387ad05f9a4923cd5da78c6209b10bbcddbdafa73d8->leave($__internal_b771d8544e87f0078562e387ad05f9a4923cd5da78c6209b10bbcddbdafa73d8_prof);

        
        $__internal_3ab2bcd768f06dadfa99619733f1f6cadea87ca1013b76a9e8a23f50ed32b2fd->leave($__internal_3ab2bcd768f06dadfa99619733f1f6cadea87ca1013b76a9e8a23f50ed32b2fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f78cd15b4a0bdd338fb33a9c46da7d9bdccad944bbc31b970307d41b681ab046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78cd15b4a0bdd338fb33a9c46da7d9bdccad944bbc31b970307d41b681ab046->enter($__internal_f78cd15b4a0bdd338fb33a9c46da7d9bdccad944bbc31b970307d41b681ab046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed97f2b67069e76d78c838d3fab39f0246301c13acc7312e4f296512a621c8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed97f2b67069e76d78c838d3fab39f0246301c13acc7312e4f296512a621c8db->enter($__internal_ed97f2b67069e76d78c838d3fab39f0246301c13acc7312e4f296512a621c8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ed97f2b67069e76d78c838d3fab39f0246301c13acc7312e4f296512a621c8db->leave($__internal_ed97f2b67069e76d78c838d3fab39f0246301c13acc7312e4f296512a621c8db_prof);

        
        $__internal_f78cd15b4a0bdd338fb33a9c46da7d9bdccad944bbc31b970307d41b681ab046->leave($__internal_f78cd15b4a0bdd338fb33a9c46da7d9bdccad944bbc31b970307d41b681ab046_prof);

    }

    // line 6
    public function block_bootstrap($context, array $blocks = array())
    {
        $__internal_837d072dd2db5d3c0330f3c02e6a1bffb362664381076355d6ef2f049fe13b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837d072dd2db5d3c0330f3c02e6a1bffb362664381076355d6ef2f049fe13b10->enter($__internal_837d072dd2db5d3c0330f3c02e6a1bffb362664381076355d6ef2f049fe13b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        $__internal_5a2e534945f9bb0c5d577c41708a76c6808ddf9419676c46a6226765e9e761a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2e534945f9bb0c5d577c41708a76c6808ddf9419676c46a6226765e9e761a7->enter($__internal_5a2e534945f9bb0c5d577c41708a76c6808ddf9419676c46a6226765e9e761a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
        ";
        
        $__internal_5a2e534945f9bb0c5d577c41708a76c6808ddf9419676c46a6226765e9e761a7->leave($__internal_5a2e534945f9bb0c5d577c41708a76c6808ddf9419676c46a6226765e9e761a7_prof);

        
        $__internal_837d072dd2db5d3c0330f3c02e6a1bffb362664381076355d6ef2f049fe13b10->leave($__internal_837d072dd2db5d3c0330f3c02e6a1bffb362664381076355d6ef2f049fe13b10_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48987d72cbcc197044bfe66b9f5c779a12822df6087bce1156c7abae00b5d07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48987d72cbcc197044bfe66b9f5c779a12822df6087bce1156c7abae00b5d07d->enter($__internal_48987d72cbcc197044bfe66b9f5c779a12822df6087bce1156c7abae00b5d07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e56a4d966f06b85dd143f96c0ff577a8698e0ed218b0e0a54a06bf35f0986ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e56a4d966f06b85dd143f96c0ff577a8698e0ed218b0e0a54a06bf35f0986ca->enter($__internal_3e56a4d966f06b85dd143f96c0ff577a8698e0ed218b0e0a54a06bf35f0986ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        ";
        
        $__internal_3e56a4d966f06b85dd143f96c0ff577a8698e0ed218b0e0a54a06bf35f0986ca->leave($__internal_3e56a4d966f06b85dd143f96c0ff577a8698e0ed218b0e0a54a06bf35f0986ca_prof);

        
        $__internal_48987d72cbcc197044bfe66b9f5c779a12822df6087bce1156c7abae00b5d07d->leave($__internal_48987d72cbcc197044bfe66b9f5c779a12822df6087bce1156c7abae00b5d07d_prof);

    }

    // line 16
    public function block_top_menu($context, array $blocks = array())
    {
        $__internal_bf92e0c7f1b388085a6a6d529459423eea0b9decf7c4c70738f2a4f972dd088f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf92e0c7f1b388085a6a6d529459423eea0b9decf7c4c70738f2a4f972dd088f->enter($__internal_bf92e0c7f1b388085a6a6d529459423eea0b9decf7c4c70738f2a4f972dd088f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_menu"));

        $__internal_72b61a89ab1eff945c1cc9a70edfbae530ffc415e1b9588e28aa3d8b60566cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b61a89ab1eff945c1cc9a70edfbae530ffc415e1b9588e28aa3d8b60566cfa->enter($__internal_72b61a89ab1eff945c1cc9a70edfbae530ffc415e1b9588e28aa3d8b60566cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_menu"));

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
        
        $__internal_72b61a89ab1eff945c1cc9a70edfbae530ffc415e1b9588e28aa3d8b60566cfa->leave($__internal_72b61a89ab1eff945c1cc9a70edfbae530ffc415e1b9588e28aa3d8b60566cfa_prof);

        
        $__internal_bf92e0c7f1b388085a6a6d529459423eea0b9decf7c4c70738f2a4f972dd088f->leave($__internal_bf92e0c7f1b388085a6a6d529459423eea0b9decf7c4c70738f2a4f972dd088f_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_e01ce02d122b90dc5d24c325dd9d2f29ad6f53c5cbe7f35b2d886f94dd0d760c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01ce02d122b90dc5d24c325dd9d2f29ad6f53c5cbe7f35b2d886f94dd0d760c->enter($__internal_e01ce02d122b90dc5d24c325dd9d2f29ad6f53c5cbe7f35b2d886f94dd0d760c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9caf303f0a3e1ce2c14f9374f191404885efde58ecfc05a560cfc0e354fa1f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caf303f0a3e1ce2c14f9374f191404885efde58ecfc05a560cfc0e354fa1f6b->enter($__internal_9caf303f0a3e1ce2c14f9374f191404885efde58ecfc05a560cfc0e354fa1f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9caf303f0a3e1ce2c14f9374f191404885efde58ecfc05a560cfc0e354fa1f6b->leave($__internal_9caf303f0a3e1ce2c14f9374f191404885efde58ecfc05a560cfc0e354fa1f6b_prof);

        
        $__internal_e01ce02d122b90dc5d24c325dd9d2f29ad6f53c5cbe7f35b2d886f94dd0d760c->leave($__internal_e01ce02d122b90dc5d24c325dd9d2f29ad6f53c5cbe7f35b2d886f94dd0d760c_prof);

    }

    // line 66
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c033e3480ddb8a2dd7985046bf49937b20c6ba446a525f164a8da73ac9749f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c033e3480ddb8a2dd7985046bf49937b20c6ba446a525f164a8da73ac9749f3d->enter($__internal_c033e3480ddb8a2dd7985046bf49937b20c6ba446a525f164a8da73ac9749f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_a659cec9627da7abb9699d641225e8f3871dfc638532c9381b33501b127cb72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a659cec9627da7abb9699d641225e8f3871dfc638532c9381b33501b127cb72a->enter($__internal_a659cec9627da7abb9699d641225e8f3871dfc638532c9381b33501b127cb72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_a659cec9627da7abb9699d641225e8f3871dfc638532c9381b33501b127cb72a->leave($__internal_a659cec9627da7abb9699d641225e8f3871dfc638532c9381b33501b127cb72a_prof);

        
        $__internal_c033e3480ddb8a2dd7985046bf49937b20c6ba446a525f164a8da73ac9749f3d->leave($__internal_c033e3480ddb8a2dd7985046bf49937b20c6ba446a525f164a8da73ac9749f3d_prof);

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
", "base.html.twig", "/home/dev/Projects/symfony_project/app/Resources/views/base.html.twig");
    }
}
