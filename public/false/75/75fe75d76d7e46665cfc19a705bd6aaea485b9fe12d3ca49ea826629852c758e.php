<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin.twig */
class __TwigTemplate_ef79cb6c01a91081e7bb598f791f468bf58346907c89e80138399414af263088 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "admin.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<h1> Dashboard</h1>
<ul>
   <li><a href=\"/app/users/add\">Add user</a> </li>
   <li><a href=\"/app/jobs/add\">Add jobs </a>  </li>
   <li><a href=\"/app/projects/add\"> Add projects</a></li>
</ul>


<a href=\"/app/logout\">Logout</a>
";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"layout.twig\" %}


 {% block content %}
<h1> Dashboard</h1>
<ul>
   <li><a href=\"/app/users/add\">Add user</a> </li>
   <li><a href=\"/app/jobs/add\">Add jobs </a>  </li>
   <li><a href=\"/app/projects/add\"> Add projects</a></li>
</ul>


<a href=\"/app/logout\">Logout</a>
{% endblock %}", "admin.twig", "C:\\xampp\\htdocs\\app\\Views\\admin.twig");
    }
}
