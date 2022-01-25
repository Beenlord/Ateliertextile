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

/* /home/users/fomin/www/Ateliertextile/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_edb8f1b5b83f1da231d9ebeffc7871a129a09d34535aa2478799979f6b2ef72b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_342b59efa412f31a80dc6f10a128a6ea65f5d0af3fd76cdd786e3044f7b92037' => [$this, 'block___internal_342b59efa412f31a80dc6f10a128a6ea65f5d0af3fd76cdd786e3044f7b92037'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_342b59efa412f31a80dc6f10a128a6ea65f5d0af3fd76cdd786e3044f7b92037", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_342b59efa412f31a80dc6f10a128a6ea65f5d0af3fd76cdd786e3044f7b92037($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/users/fomin/www/Ateliertextile/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  65 => 7,  59 => 16,  50 => 9,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
{% filter escape %}
{{ \"{% component 'demoTodo' %}\" }}
{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"{{ 'ajax'|page }}\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>", "/home/users/fomin/www/Ateliertextile/themes/demo/partials/explain/plugins.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("filter" => 7);
        static $filters = array("escape" => 7, "page" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['filter'],
                ['escape', 'page'],
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
