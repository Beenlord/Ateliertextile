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

/* /home/users/fomin/www/Ateliertextile/themes/demo/partials/explain/ajax.htm */
class __TwigTemplate_6f46369bd648882cbd92d8acf2db0c8afc590413d4c99110d0b2254c58d8bb73 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_4d09802d994b51ce3db30524aab9d5ffffa9030842bd77d250a71f5b09a0be42' => [$this, 'block___internal_4d09802d994b51ce3db30524aab9d5ffffa9030842bd77d250a71f5b09a0be42'],
            '__internal_ce418733b3e5104b76f12d20d59e6c69263e918c06396dc42f6638065b3ca58c' => [$this, 'block___internal_ce418733b3e5104b76f12d20d59e6c69263e918c06396dc42f6638065b3ca58c'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>

<pre>";
        // line 9
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_4d09802d994b51ce3db30524aab9d5ffffa9030842bd77d250a71f5b09a0be42", $context, $blocks));
        // line 24
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<pre>";
        // line 32
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_ce418733b3e5104b76f12d20d59e6c69263e918c06396dc42f6638065b3ca58c", $context, $blocks));
        // line 37
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<pre>function onTest()
{
    \$value1 = input('value1');
    \$value2 = input('value2');
    \$operation = input('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>";
    }

    // line 9
    public function block___internal_4d09802d994b51ce3db30524aab9d5ffffa9030842bd77d250a71f5b09a0be42($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<!-- The form -->
<form role=\"form\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">";
        // line 23
        echo "{% partial \"calcresult\" %}";
        echo "</div>
";
    }

    // line 32
    public function block___internal_ce418733b3e5104b76f12d20d59e6c69263e918c06396dc42f6638065b3ca58c($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "{% if result %}";
        echo "
    The result is ";
        // line 34
        echo "{{ result }}";
        echo ".
";
        // line 35
        echo "{% else %}";
        echo "
    Click the <em>Calculate</em> button to find the answer.
";
        // line 37
        echo "{% endif %}";
    }

    public function getTemplateName()
    {
        return "/home/users/fomin/www/Ateliertextile/themes/demo/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  116 => 23,  97 => 9,  65 => 37,  63 => 32,  53 => 24,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>

<pre>{% filter escape %}<!-- The form -->
<form role=\"form\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">{{ \"{% partial \\\"calcresult\\\" %}\" }}</div>
{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<pre>{% filter escape %}
{{ \"{% if result %}\" }}
    The result is {{ \"{{ result }}\" }}.
{{ \"{% else %}\" }}
    Click the <em>Calculate</em> button to find the answer.
{{ \"{% endif %}\" }}{% endfilter %}</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<pre>function onTest()
{
    \$value1 = input('value1');
    \$value2 = input('value2');
    \$operation = input('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>", "/home/users/fomin/www/Ateliertextile/themes/demo/partials/explain/ajax.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("filter" => 9);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['filter'],
                ['escape'],
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
