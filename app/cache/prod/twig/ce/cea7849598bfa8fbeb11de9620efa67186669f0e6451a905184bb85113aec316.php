<?php

/* ::base.html.twig */
class __TwigTemplate_938349c7dd7ecfb26df889e5545aceb782945fd8b8fcd4cb1e25e801b119388a extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 48
    public function block_nav($context, array $blocks = array())
    {
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
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        echo " Michał Uziębło Ltd. &copy; &reg; ";
    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  201 => 97,  195 => 94,  190 => 89,  180 => 77,  174 => 74,  168 => 71,  162 => 68,  156 => 65,  150 => 62,  141 => 56,  129 => 48,  124 => 7,  118 => 5,  112 => 98,  110 => 97,  106 => 95,  104 => 94,  101 => 93,  95 => 89,  92 => 88,  85 => 82,  83 => 48,  41 => 9,  38 => 8,  36 => 7,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/views/base.html.twig");
    }
}
