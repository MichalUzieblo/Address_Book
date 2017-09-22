<?php

/* AddressBookBundle:Person:show.html.twig */
class __TwigTemplate_06e938012d4c33c388e1c5532522eed822ae3c24e820b96bfbfd631731c9507c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:show.html.twig", 1);
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
        $__internal_74cbb0da9b29ea13f5c69bd384cd4abac66d80e0bdb9dd8fc539990fd076ee37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cbb0da9b29ea13f5c69bd384cd4abac66d80e0bdb9dd8fc539990fd076ee37->enter($__internal_74cbb0da9b29ea13f5c69bd384cd4abac66d80e0bdb9dd8fc539990fd076ee37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74cbb0da9b29ea13f5c69bd384cd4abac66d80e0bdb9dd8fc539990fd076ee37->leave($__internal_74cbb0da9b29ea13f5c69bd384cd4abac66d80e0bdb9dd8fc539990fd076ee37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4c4bb3ee0b9c33919a1b3fb951c62a60cafa8846c317fdb6f83ba9a259b9560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c4bb3ee0b9c33919a1b3fb951c62a60cafa8846c317fdb6f83ba9a259b9560->enter($__internal_c4c4bb3ee0b9c33919a1b3fb951c62a60cafa8846c317fdb6f83ba9a259b9560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        
        $__internal_c4c4bb3ee0b9c33919a1b3fb951c62a60cafa8846c317fdb6f83ba9a259b9560->leave($__internal_c4c4bb3ee0b9c33919a1b3fb951c62a60cafa8846c317fdb6f83ba9a259b9560_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1046d97888df973798e13e553a41a158762963de6f73432c55e11035c14d200f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1046d97888df973798e13e553a41a158762963de6f73432c55e11035c14d200f->enter($__internal_1046d97888df973798e13e553a41a158762963de6f73432c55e11035c14d200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h1>

<hr>

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "ranks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 12
            echo "   
    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "name", array()), "html", null, true);
            echo "
 
    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_remove", array("rank_id" => $this->getAttribute($context["rank"], "id", array()), "person_id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
            echo "\">
        Remove from this group
    </a>
    <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
<br>
";
        // line 25
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_select", array("person_id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">
    Select group
</a>
<br>
<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_new", array("person_id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">
    Add new group
</a>

<hr>

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "phones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 36
            echo "    <a href=\"tel:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo "\">
        ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "type", array()), "html", null, true);
            echo "
    </a>
    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_phone_delete", array("phone_id" => $this->getAttribute($context["phone"], "id", array()), "person_id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
            echo "\">
        Delete phone
    </a>
    <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
<br>

<a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_phone_new", array("person_id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">
    Add phone
</a>

<hr>

";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "emails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 54
            echo "    <a href=\"email:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", array()), "html", null, true);
            echo "\">
        ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "type", array()), "html", null, true);
            echo "
    </a>
    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_email_delete", array("email_id" => $this->getAttribute($context["email"], "id", array()), "person_id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
            echo "\">
        Delete email
    </a>
    <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
<br>
<a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_email_new", array("person_id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">
    Add email
</a>

<hr>

";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "addresses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            echo "    
    ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "type", array()), "html", null, true);
            echo ":<br>        
    ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "streetName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "nrOfHouse", array()), "html", null, true);
            echo "
    ";
            // line 73
            if ( !(null === $this->getAttribute($context["address"], "nrOfFlat", array()))) {
                // line 74
                echo "        /";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "nrOfFlat", array()), "html", null, true);
                echo "
    ";
            }
            // line 76
            echo "    <br>
    ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "zipCode", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
            echo "<br> 
    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_address_delete", array("address_id" => $this->getAttribute($context["address"], "id", array()), "person_id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
            echo "\">
        Delete address
    </a>
    <br><br>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
<a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_address_new", array("person_id" => $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">
    Add address
</a>

<hr>

<div class=\"well\">
    ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "description", array()), "html", null, true);
        echo "
</div>
    
";
        
        $__internal_1046d97888df973798e13e553a41a158762963de6f73432c55e11035c14d200f->leave($__internal_1046d97888df973798e13e553a41a158762963de6f73432c55e11035c14d200f_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 92,  240 => 85,  237 => 84,  225 => 78,  219 => 77,  216 => 76,  210 => 74,  208 => 73,  202 => 72,  198 => 71,  192 => 70,  183 => 64,  179 => 62,  168 => 57,  161 => 55,  156 => 54,  152 => 53,  143 => 47,  138 => 44,  127 => 39,  120 => 37,  115 => 36,  111 => 35,  102 => 29,  94 => 25,  90 => 20,  79 => 15,  74 => 13,  71 => 12,  67 => 11,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %}{{person.name}} {{person.surname}}{% endblock %}

{% block body %}
    
<h1>{{person.name}} {{person.surname}}</h1>

<hr>

{% for rank in person.ranks %}
   
    {{rank.name}}
 
    <a href=\"{{path('addressbook_rank_remove', {'rank_id':rank.id, 'person_id':person.id})}}\">
        Remove from this group
    </a>
    <br>
{% endfor%}

<br>
{#{% if is error %}
    Osoba już należy do tej grupy
{% endif %}#}
<a href=\"{{path('addressbook_rank_select', {'person_id':person.id})}}\">
    Select group
</a>
<br>
<a href=\"{{path('addressbook_rank_new', {'person_id':person.id})}}\">
    Add new group
</a>

<hr>

{% for phone in person.phones %}
    <a href=\"tel:{{phone.number}}\">
        {{phone.number}} - {{phone.type}}
    </a>
    <a href=\"{{path('addressbook_phone_delete', {'phone_id':phone.id, 'person_id':person.id})}}\">
        Delete phone
    </a>
    <br>
{% endfor%}

<br>

<a href=\"{{path('addressbook_phone_new', {'person_id':person.id})}}\">
    Add phone
</a>

<hr>

{% for email in person.emails %}
    <a href=\"email:{{email.email}}\">
        {{email.email}} - {{email.type}}
    </a>
    <a href=\"{{path('addressbook_email_delete', {'email_id':email.id, 'person_id':person.id})}}\">
        Delete email
    </a>
    <br>
{% endfor%}

<br>
<a href=\"{{path('addressbook_email_new', {'person_id':person.id})}}\">
    Add email
</a>

<hr>

{% for address in person.addresses %}    
    {{address.type}}:<br>        
    {{address.streetName}} {{address.nrOfHouse}}
    {% if address.nrOfFlat is not null %}
        /{{address.nrOfFlat}}
    {% endif %}
    <br>
    {{address.zipCode}} {{address.city}}<br> 
    <a href=\"{{path('addressbook_address_delete', {'address_id':address.id, 'person_id':person.id})}}\">
        Delete address
    </a>
    <br><br>
    
{% endfor%}

<a href=\"{{path('addressbook_address_new', {'person_id':person.id})}}\">
    Add address
</a>

<hr>

<div class=\"well\">
    {{person.description}}
</div>
    
{% endblock %}
", "AddressBookBundle:Person:show.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Person/show.html.twig");
    }
}
