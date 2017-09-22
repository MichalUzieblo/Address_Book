<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_43c93bc4b5c2122ee2c26aa3d3f7a89f401fb4692288af34bf3e089a12c73623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_dc7a0271d571e5537623ab15d69294e4872c60abbf125443c205f973a08067b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7a0271d571e5537623ab15d69294e4872c60abbf125443c205f973a08067b2->enter($__internal_dc7a0271d571e5537623ab15d69294e4872c60abbf125443c205f973a08067b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc7a0271d571e5537623ab15d69294e4872c60abbf125443c205f973a08067b2->leave($__internal_dc7a0271d571e5537623ab15d69294e4872c60abbf125443c205f973a08067b2_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_09b828504990929ee67195b688b6397e360a8eb1a9c387406d84de74430f706e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b828504990929ee67195b688b6397e360a8eb1a9c387406d84de74430f706e->enter($__internal_09b828504990929ee67195b688b6397e360a8eb1a9c387406d84de74430f706e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_index");
        echo "\">Home</a>
            </li>
        </ul>            
    </div><!--/.nav-collapse -->

";
        
        $__internal_09b828504990929ee67195b688b6397e360a8eb1a9c387406d84de74430f706e->leave($__internal_09b828504990929ee67195b688b6397e360a8eb1a9c387406d84de74430f706e_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4d0ef0eb067133162e1baa3feb019102bf4ce27c412c1a19c037923dc8e4e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d0ef0eb067133162e1baa3feb019102bf4ce27c412c1a19c037923dc8e4e86->enter($__internal_b4d0ef0eb067133162e1baa3feb019102bf4ce27c412c1a19c037923dc8e4e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 26)->display($context);
        
        $__internal_b4d0ef0eb067133162e1baa3feb019102bf4ce27c412c1a19c037923dc8e4e86->leave($__internal_b4d0ef0eb067133162e1baa3feb019102bf4ce27c412c1a19c037923dc8e4e86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  70 => 25,  57 => 18,  35 => 3,  11 => 1,);
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
                <a href=\"{{path('addressbook_person_index')}}\">Home</a>
            </li>
        </ul>            
    </div><!--/.nav-collapse -->

{% endblock %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
