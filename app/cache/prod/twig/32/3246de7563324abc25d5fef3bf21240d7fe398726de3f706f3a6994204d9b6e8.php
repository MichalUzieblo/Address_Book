<?php

/* AddressBookBundle:Person:show.html.twig */
class __TwigTemplate_1f32136bfe8cea15143f989d8d1aefb6428d98f52fe457d6d3a547e0c146be9d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? null), "surname", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    
<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? null), "surname", array()), "html", null, true);
        echo "</h1>

<hr>

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? null), "ranks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 12
            echo "   
    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "name", array()), "html", null, true);
            echo "
 
    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_remove", array("rank_id" => $this->getAttribute($context["rank"], "id", array()), "person_id" => $this->getAttribute(($context["person"] ?? null), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_select", array("person_id" => $this->getAttribute(($context["person"] ?? null), "id", array()))), "html", null, true);
        echo "\">
    Select group
</a>
<br>
<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_new", array("person_id" => $this->getAttribute(($context["person"] ?? null), "id", array()))), "html", null, true);
        echo "\">
    Add new group
</a>

<hr>

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? null), "phones", array()));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_phone_delete", array("phone_id" => $this->getAttribute($context["phone"], "id", array()), "person_id" => $this->getAttribute(($context["person"] ?? null), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_phone_new", array("person_id" => $this->getAttribute(($context["person"] ?? null), "id", array()))), "html", null, true);
        echo "\">
    Add phone
</a>

<hr>

";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? null), "emails", array()));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_email_delete", array("email_id" => $this->getAttribute($context["email"], "id", array()), "person_id" => $this->getAttribute(($context["person"] ?? null), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_email_new", array("person_id" => $this->getAttribute(($context["person"] ?? null), "id", array()))), "html", null, true);
        echo "\">
    Add email
</a>

<hr>

";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["person"] ?? null), "addresses", array()));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_address_delete", array("address_id" => $this->getAttribute($context["address"], "id", array()), "person_id" => $this->getAttribute(($context["person"] ?? null), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_address_new", array("person_id" => $this->getAttribute(($context["person"] ?? null), "id", array()))), "html", null, true);
        echo "\">
    Add address
</a>

<hr>

<div class=\"well\">
    ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? null), "description", array()), "html", null, true);
        echo "
</div>
    
";
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
        return array (  235 => 92,  225 => 85,  222 => 84,  210 => 78,  204 => 77,  201 => 76,  195 => 74,  193 => 73,  187 => 72,  183 => 71,  177 => 70,  168 => 64,  164 => 62,  153 => 57,  146 => 55,  141 => 54,  137 => 53,  128 => 47,  123 => 44,  112 => 39,  105 => 37,  100 => 36,  96 => 35,  87 => 29,  79 => 25,  75 => 20,  64 => 15,  59 => 13,  56 => 12,  52 => 11,  43 => 7,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AddressBookBundle:Person:show.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Person/show.html.twig");
    }
}
