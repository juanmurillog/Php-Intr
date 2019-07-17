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

/* addProject.twig */
class __TwigTemplate_521ef203299fe1c3473e0768086c79bd177013c90f10a90bc632eaf6231458d5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "addProject.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1> Add Project </h1>
    <div class=\"alert alert-primary\" role=\"alert\">
    ";
        // line 6
        echo twig_escape_filter($this->env, ($context["responseMessage"] ?? null), "html", null, true);
        echo "
    </div>
    <form action=\"/app/projects/add\" method=\"post\" enctype=\"multipart/form-data\">
    
    <label for=\"\">Title:</label>
    <input type=\"text\" name=\"title\"><br>
    <label for=\"\"> Description:</label>
    <input type =\"text\" name=\"description\"><br>
    <label for=\"\"> Duracion:</label>
    <input type =\"text\" name=\"months\"><br>
    <input type =\"file\" name\"logo\" enctype=\"multipart/form-data\"><br>
    <button type=\"submit\"> Save</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "addProject.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block content %}
    <h1> Add Project </h1>
    <div class=\"alert alert-primary\" role=\"alert\">
    {{ responseMessage }}
    </div>
    <form action=\"/app/projects/add\" method=\"post\" enctype=\"multipart/form-data\">
    
    <label for=\"\">Title:</label>
    <input type=\"text\" name=\"title\"><br>
    <label for=\"\"> Description:</label>
    <input type =\"text\" name=\"description\"><br>
    <label for=\"\"> Duracion:</label>
    <input type =\"text\" name=\"months\"><br>
    <input type =\"file\" name\"logo\" enctype=\"multipart/form-data\"><br>
    <button type=\"submit\"> Save</button>
    </form>
{% endblock %}

", "addProject.twig", "C:\\xampp\\htdocs\\app\\Views\\addProject.twig");
    }
}
