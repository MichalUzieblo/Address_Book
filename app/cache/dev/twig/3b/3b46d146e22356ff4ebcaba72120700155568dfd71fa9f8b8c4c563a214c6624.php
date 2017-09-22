<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_fdcb08c769cc85ac87337043a52efe8cc8663e0f1daf8b7d65612759c920da9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_dae968747d1ae46c326d540cb7601491a8dd15fceedfc789448eb2323a02ba99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae968747d1ae46c326d540cb7601491a8dd15fceedfc789448eb2323a02ba99->enter($__internal_dae968747d1ae46c326d540cb7601491a8dd15fceedfc789448eb2323a02ba99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae968747d1ae46c326d540cb7601491a8dd15fceedfc789448eb2323a02ba99->leave($__internal_dae968747d1ae46c326d540cb7601491a8dd15fceedfc789448eb2323a02ba99_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d634848b7b02d8d548e834011d568395b2b7f2a9802d23cfe84d206fb058d36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d634848b7b02d8d548e834011d568395b2b7f2a9802d23cfe84d206fb058d36e->enter($__internal_d634848b7b02d8d548e834011d568395b2b7f2a9802d23cfe84d206fb058d36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_d634848b7b02d8d548e834011d568395b2b7f2a9802d23cfe84d206fb058d36e->leave($__internal_d634848b7b02d8d548e834011d568395b2b7f2a9802d23cfe84d206fb058d36e_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e6f1345146445d827a3619e67e055ec8d69644d5e52be59d6e9d1ee8e265819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6f1345146445d827a3619e67e055ec8d69644d5e52be59d6e9d1ee8e265819->enter($__internal_2e6f1345146445d827a3619e67e055ec8d69644d5e52be59d6e9d1ee8e265819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 26)->display($context);
        
        $__internal_2e6f1345146445d827a3619e67e055ec8d69644d5e52be59d6e9d1ee8e265819->leave($__internal_2e6f1345146445d827a3619e67e055ec8d69644d5e52be59d6e9d1ee8e265819_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
