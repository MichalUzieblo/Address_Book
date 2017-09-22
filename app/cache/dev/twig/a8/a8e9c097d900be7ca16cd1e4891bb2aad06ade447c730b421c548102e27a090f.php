<?php

/* AddressBookBundle:Person:index.html.twig */
class __TwigTemplate_31a107f066bee491e54df807706c287ea5d8c726bf7309be5c0e8c6a32d69e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:index.html.twig", 1);
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
        $__internal_e5fb4c67af1773d7a536e0e9b102a7163f0c6eebb0ee051df245a0383a691075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fb4c67af1773d7a536e0e9b102a7163f0c6eebb0ee051df245a0383a691075->enter($__internal_e5fb4c67af1773d7a536e0e9b102a7163f0c6eebb0ee051df245a0383a691075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5fb4c67af1773d7a536e0e9b102a7163f0c6eebb0ee051df245a0383a691075->leave($__internal_e5fb4c67af1773d7a536e0e9b102a7163f0c6eebb0ee051df245a0383a691075_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e2d94b8d7d8cf734eddbb866fcf571117ed65b24eeb6efd8bbb62680758001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e2d94b8d7d8cf734eddbb866fcf571117ed65b24eeb6efd8bbb62680758001->enter($__internal_f2e2d94b8d7d8cf734eddbb866fcf571117ed65b24eeb6efd8bbb62680758001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My contacts";
        
        $__internal_f2e2d94b8d7d8cf734eddbb866fcf571117ed65b24eeb6efd8bbb62680758001->leave($__internal_f2e2d94b8d7d8cf734eddbb866fcf571117ed65b24eeb6efd8bbb62680758001_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c65e3525ec4ac31f644623e8f122f94f57d67cae4cce293c61feaea3b0432cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c65e3525ec4ac31f644623e8f122f94f57d67cae4cce293c61feaea3b0432cd->enter($__internal_6c65e3525ec4ac31f644623e8f122f94f57d67cae4cce293c61feaea3b0432cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>My contacts:</h1>
<h3>Select group:</h3>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ranks"] ?? $this->getContext($context, "ranks")));
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 9
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_indexrank", array("rank_id" => $this->getAttribute($context["rank"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "name", array()), "html", null, true);
            echo "
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_indexrank", array("rank_id" => "all"));
        echo "\" class=\"btn btn-default\">
        All
    </a>
<hr>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? $this->getContext($context, "persons")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 18
            echo "    <div class=\"row well\">
        <div class=\"col-xs-8\">
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
            echo "
            </a>
        </div>
        <div class=\"col-xs-4\" align=\"right\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_edit", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_delete", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </a>
        </div>

    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "    <div class=\"row well\">
        No contacts yet.
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        
        $__internal_6c65e3525ec4ac31f644623e8f122f94f57d67cae4cce293c61feaea3b0432cd->leave($__internal_6c65e3525ec4ac31f644623e8f122f94f57d67cae4cce293c61feaea3b0432cd_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  123 => 35,  111 => 28,  105 => 25,  96 => 21,  92 => 20,  88 => 18,  83 => 17,  75 => 13,  66 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}My contacts{% endblock %}

{% block body %}
<h1>My contacts:</h1>
<h3>Select group:</h3>
{% for rank in ranks %}
    <a href=\"{{path('addressbook_person_indexrank',{'rank_id':rank.id})}}\" class=\"btn btn-default\">
        {{rank.name}}
    </a>
{% endfor %}
    <a href=\"{{path('addressbook_person_indexrank',{'rank_id':'all'})}}\" class=\"btn btn-default\">
        All
    </a>
<hr>
{% for person in persons %}
    <div class=\"row well\">
        <div class=\"col-xs-8\">
            <a href=\"{{path('addressbook_person_show',{'id':person.id})}}\">
                {{person.name}} {{person.surname}}
            </a>
        </div>
        <div class=\"col-xs-4\" align=\"right\">
            <a href=\"{{path('addressbook_person_edit',{'id':person.id})}}\" class=\"btn btn-warning\">
                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"{{path('addressbook_person_delete',{'id':person.id})}}\" class=\"btn btn-danger\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </a>
        </div>

    </div>
{% else %}
    <div class=\"row well\">
        No contacts yet.
    </div>
{% endfor %}

{% endblock %}
", "AddressBookBundle:Person:index.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Person/index.html.twig");
    }
}
