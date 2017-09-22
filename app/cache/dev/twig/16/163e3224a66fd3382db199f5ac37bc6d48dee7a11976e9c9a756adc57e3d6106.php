<?php

/* AddressBookBundle:Rank:index.html.twig */
class __TwigTemplate_58492d7786bfd6571c844fba7b592c2de28cb621d19f35c2030d8af394a17994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Rank:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0331af6cc3cc4720af91710b644aaa1e05ff32e9303ee7636c2aa3bf44d208d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0331af6cc3cc4720af91710b644aaa1e05ff32e9303ee7636c2aa3bf44d208d->enter($__internal_c0331af6cc3cc4720af91710b644aaa1e05ff32e9303ee7636c2aa3bf44d208d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Rank:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0331af6cc3cc4720af91710b644aaa1e05ff32e9303ee7636c2aa3bf44d208d->leave($__internal_c0331af6cc3cc4720af91710b644aaa1e05ff32e9303ee7636c2aa3bf44d208d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f0f132a9cab9b69d964beb3c8e107b04d56cfd08324774782c806920c52d5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0f132a9cab9b69d964beb3c8e107b04d56cfd08324774782c806920c52d5d5->enter($__internal_2f0f132a9cab9b69d964beb3c8e107b04d56cfd08324774782c806920c52d5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My groups";
        
        $__internal_2f0f132a9cab9b69d964beb3c8e107b04d56cfd08324774782c806920c52d5d5->leave($__internal_2f0f132a9cab9b69d964beb3c8e107b04d56cfd08324774782c806920c52d5d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e1e64a9bc4fb4648485aca9133118d3078b3fdba0c11bfce2bea7f029ad65dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1e64a9bc4fb4648485aca9133118d3078b3fdba0c11bfce2bea7f029ad65dd->enter($__internal_3e1e64a9bc4fb4648485aca9133118d3078b3fdba0c11bfce2bea7f029ad65dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>My groups:</h1>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ranks"] ?? $this->getContext($context, "ranks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 9
            echo "    <div class=\"row well\">
        <div class=\"col-xs-8\">            
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "name", array()), "html", null, true);
            echo "            
        </div>
        <div class=\"col-xs-4\" align=\"right\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_edit", array("rank_id" => $this->getAttribute($context["rank"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_delete", array("rank_id" => $this->getAttribute($context["rank"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </a>
        </div>

    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "    <div class=\"row well\">
        No groups yet.
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        
        $__internal_3e1e64a9bc4fb4648485aca9133118d3078b3fdba0c11bfce2bea7f029ad65dd->leave($__internal_3e1e64a9bc4fb4648485aca9133118d3078b3fdba0c11bfce2bea7f029ad65dd_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Rank:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  90 => 24,  78 => 17,  72 => 14,  66 => 11,  62 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}My groups{% endblock %}

{% block body %}
<h1>My groups:</h1>

{% for rank in ranks %}
    <div class=\"row well\">
        <div class=\"col-xs-8\">            
            {{rank.name}}            
        </div>
        <div class=\"col-xs-4\" align=\"right\">
            <a href=\"{{path('addressbook_rank_edit',{'rank_id':rank.id})}}\" class=\"btn btn-warning\">
                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{path('addressbook_rank_delete',{'rank_id':rank.id})}}\" class=\"btn btn-danger\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </a>
        </div>

    </div>
{% else %}
    <div class=\"row well\">
        No groups yet.
    </div>
{% endfor %}

{% endblock %}
", "AddressBookBundle:Rank:index.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Rank/index.html.twig");
    }
}
