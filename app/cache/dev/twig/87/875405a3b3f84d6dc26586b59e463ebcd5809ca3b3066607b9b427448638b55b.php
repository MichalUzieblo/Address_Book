<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_48c330c2fff49a3dbb5325c94be82054c517126400a3b1937e0a70e3a93129ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_feb54111baef235887f1a88c45446d354441180e05bd475f2c702a257531b3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb54111baef235887f1a88c45446d354441180e05bd475f2c702a257531b3c4->enter($__internal_feb54111baef235887f1a88c45446d354441180e05bd475f2c702a257531b3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feb54111baef235887f1a88c45446d354441180e05bd475f2c702a257531b3c4->leave($__internal_feb54111baef235887f1a88c45446d354441180e05bd475f2c702a257531b3c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b89e4dfefc54703419755bdcf51ad79587a6fad9dca929ee4a65302e9577206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b89e4dfefc54703419755bdcf51ad79587a6fad9dca929ee4a65302e9577206->enter($__internal_7b89e4dfefc54703419755bdcf51ad79587a6fad9dca929ee4a65302e9577206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7b89e4dfefc54703419755bdcf51ad79587a6fad9dca929ee4a65302e9577206->leave($__internal_7b89e4dfefc54703419755bdcf51ad79587a6fad9dca929ee4a65302e9577206_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dc4828e4fd5b3b3466ce4af96995b5609647d8b3ceb4f14a2b77d7e95252a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc4828e4fd5b3b3466ce4af96995b5609647d8b3ceb4f14a2b77d7e95252a9a->enter($__internal_8dc4828e4fd5b3b3466ce4af96995b5609647d8b3ceb4f14a2b77d7e95252a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8dc4828e4fd5b3b3466ce4af96995b5609647d8b3ceb4f14a2b77d7e95252a9a->leave($__internal_8dc4828e4fd5b3b3466ce4af96995b5609647d8b3ceb4f14a2b77d7e95252a9a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
