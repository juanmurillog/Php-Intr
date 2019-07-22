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

/* index.twig */
class __TwigTemplate_cc398b5143c8b7dfa97beac7c0f83215d07ae220879448d6b4ded8215c528069 extends \Twig\Template
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
        // line 2
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <div id=\"resume-header\" class=\"row\">
      <div class=\"col-3\">
        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
      </div>
      <div class=\"col\">
        <h1> ";
        // line 10
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " </h1>

        <h2>PHP DEVELOPER</h2>
        <ul>
          <li>Mail: <a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"01696462756e73416c60686d2f626e6c\">[email&#160;protected]</a></li>
          <li>Phone: 1234567890</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @hectorbenitez</li>
        </ul>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <h2 class=\"border-bottom-gray\" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <div>
          <h3 class=\"border-bottom-gray\" >Work Experience</h3>
          <ul>
            
               ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 37
            echo "                 <li class=\"work-position\">
                <h5>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</h5>
                <p>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "logo", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                <p>";
            // line 40
            echo twig_escape_filter($this->env, ($context["ruta"] ?? null), "html", null, true);
            echo "</p>
                <p>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                <p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "months", [], "any", false, false, false, 42), "html", null, true);
            echo " </p>
                ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["job"], "logo", [], "any", false, false, false, 43)) {
                // line 44
                echo "                <img src=\"../uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "logo", [], "any", false, false, false, 44), "html", null, true);
                echo "\" alt=\"\" width=\"80\" height=\"80\">
                 ";
            }
            // line 46
            echo "                
                </li>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  
               
          
               
                                  
          </ul>
      
          
        </div>


        <div>
            <h3 class=\"border-bottom-gray\">Projects</h3>

            <ul>
             
               ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 65
            echo "                 <li class=\"work-position\">
                <h5>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 66), "html", null, true);
            echo "</h5>
                <p></p>
                <p>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
                <p>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "months", [], "any", false, false, false, 69), "html", null, true);
            echo " </p>
              
              </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "  
          </ul>
            <div class=\"project\">
                <h5>Project X</h5>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">

                      </div>
                      <div class=\"col\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class=\"badge badge-secondary\">PHP</span>
                        <span class=\"badge badge-secondary\">HTML</span>
                        <span class=\"badge badge-secondary\">CSS</span>
                      </div>
                </div>
            </div>
            <div class=\"project\">
                <h5>Project X</h5>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
                      </div>
                      <div class=\"col\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class=\"badge badge-secondary\">PHP</span>
                        <span class=\"badge badge-secondary\">HTML</span>
                        <span class=\"badge badge-secondary\">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class=\"col-3\">
        <h3 class=\"border-bottom-gray\" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>

        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class=\"border-bottom-gray\" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id=\"resume-footer\" class=\"row\">
      <div class=\"col\">
          Designed by @hectorbenitez
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  163 => 69,  159 => 68,  154 => 66,  151 => 65,  147 => 64,  129 => 48,  121 => 46,  115 => 44,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  90 => 37,  86 => 36,  57 => 10,  50 => 5,  46 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"layout.twig\" %}

{% block content %}
  <div id=\"resume-header\" class=\"row\">
      <div class=\"col-3\">
        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
      </div>
      <div class=\"col\">
        <h1> {{ name }} </h1>

        <h2>PHP DEVELOPER</h2>
        <ul>
          <li>Mail: <a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"01696462756e73416c60686d2f626e6c\">[email&#160;protected]</a></li>
          <li>Phone: 1234567890</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @hectorbenitez</li>
        </ul>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <h2 class=\"border-bottom-gray\" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <div>
          <h3 class=\"border-bottom-gray\" >Work Experience</h3>
          <ul>
            
               {% for job in jobs %}
                 <li class=\"work-position\">
                <h5>{{ job.title }}</h5>
                <p>{{job.logo}}</p>
                <p>{{ ruta }}</p>
                <p>{{ job.description }}</p>
                <p>{{ job.months }} </p>
                {% if job.logo %}
                <img src=\"../uploads/{{ job.logo }}\" alt=\"\" width=\"80\" height=\"80\">
                 {% endif %}
                
                </li>
               {% endfor %}  
               
          
               
                                  
          </ul>
      
          
        </div>


        <div>
            <h3 class=\"border-bottom-gray\">Projects</h3>

            <ul>
             
               {% for project in projects %}
                 <li class=\"work-position\">
                <h5>{{ project.title }}</h5>
                <p></p>
                <p>{{ project.description }}</p>
                <p>{{ project.months }} </p>
              
              </li>
                {% endfor %}  
          </ul>
            <div class=\"project\">
                <h5>Project X</h5>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">

                      </div>
                      <div class=\"col\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class=\"badge badge-secondary\">PHP</span>
                        <span class=\"badge badge-secondary\">HTML</span>
                        <span class=\"badge badge-secondary\">CSS</span>
                      </div>
                </div>
            </div>
            <div class=\"project\">
                <h5>Project X</h5>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
                      </div>
                      <div class=\"col\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class=\"badge badge-secondary\">PHP</span>
                        <span class=\"badge badge-secondary\">HTML</span>
                        <span class=\"badge badge-secondary\">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class=\"col-3\">
        <h3 class=\"border-bottom-gray\" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>

        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class=\"border-bottom-gray\" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id=\"resume-footer\" class=\"row\">
      <div class=\"col\">
          Designed by @hectorbenitez
      </div>
    </div>
{% endblock %}
", "index.twig", "C:\\xampp\\htdocs\\app\\Views\\index.twig");
    }
}
