<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1d9069ca477a71e6b37db1ddc35cea8287aeffa30fb0078ba8d1a6c75cdce2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9975f8e52a7bf68915595c3d82c528d60307f2ea93338767a81e8401d0c7faa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9975f8e52a7bf68915595c3d82c528d60307f2ea93338767a81e8401d0c7faa4->enter($__internal_9975f8e52a7bf68915595c3d82c528d60307f2ea93338767a81e8401d0c7faa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9975f8e52a7bf68915595c3d82c528d60307f2ea93338767a81e8401d0c7faa4->leave($__internal_9975f8e52a7bf68915595c3d82c528d60307f2ea93338767a81e8401d0c7faa4_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_eeed9fc11706e07a2fb910d5db46757053fc34f4060d5776bf376203d146527c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeed9fc11706e07a2fb910d5db46757053fc34f4060d5776bf376203d146527c->enter($__internal_eeed9fc11706e07a2fb910d5db46757053fc34f4060d5776bf376203d146527c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo " 

    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">Welcome in Address_Book Application</a>
    </div>

    <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Reset Password</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_index");
        echo "\">Home</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a>
            </li> 
        </ul>            
    </div><!--/.nav-collapse -->

";
        
        $__internal_eeed9fc11706e07a2fb910d5db46757053fc34f4060d5776bf376203d146527c->leave($__internal_eeed9fc11706e07a2fb910d5db46757053fc34f4060d5776bf376203d146527c_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c150c27e225d2ddcfcf533e45c65721bcab7af23d61667aae03f848324ab9395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c150c27e225d2ddcfcf533e45c65721bcab7af23d61667aae03f848324ab9395->enter($__internal_c150c27e225d2ddcfcf533e45c65721bcab7af23d61667aae03f848324ab9395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c150c27e225d2ddcfcf533e45c65721bcab7af23d61667aae03f848324ab9395->leave($__internal_c150c27e225d2ddcfcf533e45c65721bcab7af23d61667aae03f848324ab9395_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  82 => 31,  69 => 24,  63 => 21,  57 => 18,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block nav %} 

    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">Welcome in Address_Book Application</a>
    </div>

    <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\">
                <a href=\"{{path('fos_user_resetting_request')}}\">Reset Password</a>
            </li>
            <li class=\"active\">
                <a href=\"{{path('addressbook_person_index')}}\">Home</a>
            </li>
            <li class=\"active\">
                <a href=\"{{path('fos_user_registration_register')}}\">Register</a>
            </li> 
        </ul>            
    </div><!--/.nav-collapse -->

{% endblock %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
