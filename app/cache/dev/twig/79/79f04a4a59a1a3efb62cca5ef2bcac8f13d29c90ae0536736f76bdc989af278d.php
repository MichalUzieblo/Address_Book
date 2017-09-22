<?php

/* ::base.html.twig */
class __TwigTemplate_0b447906174312e9ffd0a6fd3e7277f762abb243f2d22192163efe9d254d68b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_771588e1453b408775c14aea1bdbcb94548629302b0afb65c8ad456045321dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771588e1453b408775c14aea1bdbcb94548629302b0afb65c8ad456045321dd5->enter($__internal_771588e1453b408775c14aea1bdbcb94548629302b0afb65c8ad456045321dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" 
          rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" 
          crossorigin=\"anonymous\">

    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" 
          rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" 
          crossorigin=\"anonymous\"> 

    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" 
            integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" 
    crossorigin=\"anonymous\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\"
            integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\"
    crossorigin=\"anonymous\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\"
            integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\"
    crossorigin=\"anonymous\"></script>

    <style>
        body {
            padding-top: 4em;
        }
        #footer {text-align: right;
                 color: grey}
        #searchForm {
            padding-top: 0.5em;
            text-align: right
        }
        </style>
    </head>
    <body>
        
    <nav class=\"navbar navbar-inverse navbar-fixed-top \">
        <div class=\"container\">

            ";
        // line 48
        $this->displayBlock('nav', $context, $blocks);
        // line 82
        echo " 

        </div>
    </nav>

    ";
        // line 88
        echo "    <div class=\"container theme-showcase\" role=\"main\">
    ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        echo "        
</div>

";
        // line 93
        echo "<div class=\"container\" role=\"footer\" id=\"footer\">
    ";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "
</div>
";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "</body>
</html>
";
        
        $__internal_771588e1453b408775c14aea1bdbcb94548629302b0afb65c8ad456045321dd5->leave($__internal_771588e1453b408775c14aea1bdbcb94548629302b0afb65c8ad456045321dd5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10261959e72ce922e99163fdfdf2de1281c335c952d3b95a7cb50809d26514a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10261959e72ce922e99163fdfdf2de1281c335c952d3b95a7cb50809d26514a4->enter($__internal_10261959e72ce922e99163fdfdf2de1281c335c952d3b95a7cb50809d26514a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_10261959e72ce922e99163fdfdf2de1281c335c952d3b95a7cb50809d26514a4->leave($__internal_10261959e72ce922e99163fdfdf2de1281c335c952d3b95a7cb50809d26514a4_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad01d110f788d8e922ad32ff244e225d7e154d8910b47043a50f058599953e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad01d110f788d8e922ad32ff244e225d7e154d8910b47043a50f058599953e6e->enter($__internal_ad01d110f788d8e922ad32ff244e225d7e154d8910b47043a50f058599953e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ad01d110f788d8e922ad32ff244e225d7e154d8910b47043a50f058599953e6e->leave($__internal_ad01d110f788d8e922ad32ff244e225d7e154d8910b47043a50f058599953e6e_prof);

    }

    // line 48
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ad1de5eb0af350d0a486e5207f4306c42f290e486f7eb86e741183030d8ccf78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1de5eb0af350d0a486e5207f4306c42f290e486f7eb86e741183030d8ccf78->enter($__internal_ad1de5eb0af350d0a486e5207f4306c42f290e486f7eb86e741183030d8ccf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo " 
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">";
        // line 56
        $this->displayBlock("title", $context, $blocks);
        echo "</a>
                </div>

                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\">
                            <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_index");
        echo "\">Home</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_new");
        echo "\">Add Person</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit Profile</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Log Out</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_index");
        echo "\">Edit groups</a>
                        </li>
                    </ul> 
                    <form action=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_indexsearch");
        echo "\" class=\"form-inline my-2 my-lg-0\" method=\"post\" id=\"searchForm\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" name=\"search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
                </div><!--/.nav-collapse -->
            ";
        
        $__internal_ad1de5eb0af350d0a486e5207f4306c42f290e486f7eb86e741183030d8ccf78->leave($__internal_ad1de5eb0af350d0a486e5207f4306c42f290e486f7eb86e741183030d8ccf78_prof);

    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        $__internal_16779c8bdabc7642bf934f27167ab65a0016dabd00b7a90fbb1fba79bf564fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16779c8bdabc7642bf934f27167ab65a0016dabd00b7a90fbb1fba79bf564fab->enter($__internal_16779c8bdabc7642bf934f27167ab65a0016dabd00b7a90fbb1fba79bf564fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_16779c8bdabc7642bf934f27167ab65a0016dabd00b7a90fbb1fba79bf564fab->leave($__internal_16779c8bdabc7642bf934f27167ab65a0016dabd00b7a90fbb1fba79bf564fab_prof);

    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        $__internal_baee6befaa291abe7121974f9ca8fd5bc5cdeef964d1483e954f259897ad1126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baee6befaa291abe7121974f9ca8fd5bc5cdeef964d1483e954f259897ad1126->enter($__internal_baee6befaa291abe7121974f9ca8fd5bc5cdeef964d1483e954f259897ad1126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " Michał Uziębło Ltd. &copy; &reg; ";
        
        $__internal_baee6befaa291abe7121974f9ca8fd5bc5cdeef964d1483e954f259897ad1126->leave($__internal_baee6befaa291abe7121974f9ca8fd5bc5cdeef964d1483e954f259897ad1126_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6018676cb28bcb15985cfe1668d9e4dedf0eb2f207e4c8c4c538062201980fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6018676cb28bcb15985cfe1668d9e4dedf0eb2f207e4c8c4c538062201980fd2->enter($__internal_6018676cb28bcb15985cfe1668d9e4dedf0eb2f207e4c8c4c538062201980fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6018676cb28bcb15985cfe1668d9e4dedf0eb2f207e4c8c4c538062201980fd2->leave($__internal_6018676cb28bcb15985cfe1668d9e4dedf0eb2f207e4c8c4c538062201980fd2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 97,  225 => 94,  214 => 89,  201 => 77,  195 => 74,  189 => 71,  183 => 68,  177 => 65,  171 => 62,  162 => 56,  147 => 48,  136 => 7,  124 => 5,  115 => 98,  113 => 97,  109 => 95,  107 => 94,  104 => 93,  98 => 89,  95 => 88,  88 => 82,  86 => 48,  44 => 9,  41 => 8,  39 => 7,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>

    {% block stylesheets %}{% endblock %}

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" 
          rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" 
          crossorigin=\"anonymous\">

    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" 
          rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" 
          crossorigin=\"anonymous\"> 

    <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" 
            integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" 
    crossorigin=\"anonymous\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\"
            integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\"
    crossorigin=\"anonymous\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\"
            integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\"
    crossorigin=\"anonymous\"></script>

    <style>
        body {
            padding-top: 4em;
        }
        #footer {text-align: right;
                 color: grey}
        #searchForm {
            padding-top: 0.5em;
            text-align: right
        }
        </style>
    </head>
    <body>
        
    <nav class=\"navbar navbar-inverse navbar-fixed-top \">
        <div class=\"container\">

            {% block nav %} 
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">{{ block('title')}}</a>
                </div>

                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\">
                            <a href=\"{{path('addressbook_person_index')}}\">Home</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"{{path('addressbook_person_new')}}\">Add Person</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"{{path('fos_user_profile_edit')}}\">Edit Profile</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"{{path('fos_user_security_logout')}}\">Log Out</a>
                        </li>
                        <li class=\"active\">
                            <a href=\"{{path('addressbook_rank_index')}}\">Edit groups</a>
                        </li>
                    </ul> 
                    <form action=\"{{path('addressbook_person_indexsearch')}}\" class=\"form-inline my-2 my-lg-0\" method=\"post\" id=\"searchForm\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" name=\"search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
                </div><!--/.nav-collapse -->
            {% endblock %} 

        </div>
    </nav>

    {# Content #}
    <div class=\"container theme-showcase\" role=\"main\">
    {% block body %}{% endblock %}        
</div>

{# footer #}
<div class=\"container\" role=\"footer\" id=\"footer\">
    {% block footer %} Michał Uziębło Ltd. &copy; &reg; {% endblock %}

</div>
{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/views/base.html.twig");
    }
}
