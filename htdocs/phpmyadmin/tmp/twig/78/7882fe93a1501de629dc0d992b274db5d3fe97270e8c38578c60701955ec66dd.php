<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* database/structure/browse_table.twig */
class __TwigTemplate_d15276ff15b814f12e6306bd7f680b46705e162481efa6e10e96ec6ff706c450 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<a href=\"sql.php";
        echo ($context["tbl_url_query"] ?? null);
        echo "&amp;pos=0\">
    ";
        // line 2
        echo ($context["title"] ?? null);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "database/structure/browse_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/browse_table.twig", "C:\\Server\\data\\htdocs\\phpmyadmin\\templates\\database\\structure\\browse_table.twig");
    }
}
