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

/* addJob.twig */
class __TwigTemplate_32f64a80cc98f4f4e8fee402c6761f334afe81cc94996fa44187d0cf9430da0c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "addJob.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <h1> Add job </h1>
  <div class=\"alert alert-primary\" role=\"alert\">
    ";
        // line 6
        echo twig_escape_filter($this->env, ($context["responseMessage"] ?? null), "html", null, true);
        echo "
  </div>
    <form action=\"/app/jobs/add\" method=\"post\" enctype=\"multipart/form-data\" >
    <label for=\"\">Title:</label>
    <input type=\"text\" name=\"title\"><br>
    <label for=\"\"> Description:</label>
    <input type =\"text\" name=\"description\"><br>
    <label for=\"\"> Duracion:</label>
    <input type =\"text\" name=\"months\"><br>
    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000\" />
    <input type = \"file\" name= \"logo\" ><br>
    <button type=\"submit\"> Save </button>
    </form>
 ";
    }

    public function getTemplateName()
    {
        return "addJob.twig";
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
  <h1> Add job </h1>
  <div class=\"alert alert-primary\" role=\"alert\">
    {{ responseMessage }}
  </div>
    <form action=\"/app/jobs/add\" method=\"post\" enctype=\"multipart/form-data\" >
    <label for=\"\">Title:</label>
    <input type=\"text\" name=\"title\"><br>
    <label for=\"\"> Description:</label>
    <input type =\"text\" name=\"description\"><br>
    <label for=\"\"> Duracion:</label>
    <input type =\"text\" name=\"months\"><br>
    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000\" />
    <input type = \"file\" name= \"logo\" ><br>
    <button type=\"submit\"> Save </button>
    </form>
 {% endblock %}



", "addJob.twig", "C:\\xampp\\htdocs\\app\\Views\\addJob.twig");
    }
}
