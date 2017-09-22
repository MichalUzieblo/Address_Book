<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e452c316ab171eaee85b509e45643dee407343421bcf5ebaf29a1ee96a192c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c36c52d6f1334df5959959321e6558fff69c7feda62685c996ad8d94567a1400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36c52d6f1334df5959959321e6558fff69c7feda62685c996ad8d94567a1400->enter($__internal_c36c52d6f1334df5959959321e6558fff69c7feda62685c996ad8d94567a1400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c36c52d6f1334df5959959321e6558fff69c7feda62685c996ad8d94567a1400->leave($__internal_c36c52d6f1334df5959959321e6558fff69c7feda62685c996ad8d94567a1400_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b99b00473ec5a2b2ac40604c7f2b3fd4cab7400e928618464f7fd076d37c5abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99b00473ec5a2b2ac40604c7f2b3fd4cab7400e928618464f7fd076d37c5abe->enter($__internal_b99b00473ec5a2b2ac40604c7f2b3fd4cab7400e928618464f7fd076d37c5abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_b99b00473ec5a2b2ac40604c7f2b3fd4cab7400e928618464f7fd076d37c5abe->leave($__internal_b99b00473ec5a2b2ac40604c7f2b3fd4cab7400e928618464f7fd076d37c5abe_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24514cee8bad1615dc924e0439061b923010c9d86c92cfe2c0f198e388f699ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24514cee8bad1615dc924e0439061b923010c9d86c92cfe2c0f198e388f699ac->enter($__internal_24514cee8bad1615dc924e0439061b923010c9d86c92cfe2c0f198e388f699ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 26)->display($context);
        
        $__internal_24514cee8bad1615dc924e0439061b923010c9d86c92cfe2c0f198e388f699ac->leave($__internal_24514cee8bad1615dc924e0439061b923010c9d86c92cfe2c0f198e388f699ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
