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

/* /home/users/fomin/www/Ateliertextile/themes/demo/pages/plugins.htm */
class __TwigTemplate_6cad4e9016fc871627f1ded6fcd2d9e0e51a7b424e30d54ab1824ea727f3d619 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>Plugin components</h1>
                <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("demoTodo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("explain/plugins.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"btn btn-lg btn-default\">Learn more at October's Documentation</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/users/fomin/www/Ateliertextile/themes/demo/pages/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  57 => 14,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>Plugin components</h1>
                <p>Plugins can provide components, simple building blocks that enrich any page or layout. Check out the todo example below.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    {% component 'demoTodo' %}
</div>

<!-- Page Explanation -->
<div class=\"container\">{% partial \"explain/plugins.htm\" %}</div>

<br />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"btn btn-lg btn-default\">Learn more at October's Documentation</a></p>
</div>", "/home/users/fomin/www/Ateliertextile/themes/demo/pages/plugins.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 13, "partial" => 17);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'partial'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
