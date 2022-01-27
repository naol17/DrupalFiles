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

/* themes/clean_blog/templates/system/page.html.twig */
class __TwigTemplate_1f5814dfcb24679de09397a9ce516cf9965a5ea3483a01ce9537ff049aa707cc extends \Twig\Template
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
        // line 59
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
\t<div class=\"container-fluid\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header page-scroll\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\tMenu <i class=\"fa fa-bars\"></i>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\">
\t\t\t\t";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 69, $this->source), "html", null, true);
        echo "
\t\t\t</a>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</div>
\t<!-- /.container -->
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
";
        // line 84
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 84), "entity", [], "any", false, false, true, 84), "fileuri", [], "any", false, false, true, 84)) {
            // line 85
            echo "<header class=\"intro-header\"
        style=\"background-color: cornflowerblue;background-image: url('";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 86), "entity", [], "any", false, false, true, 86), "fileuri", [], "any", false, false, true, 86), 86, $this->source)]), "html", null, true);
            echo "')\">
\t";
        } elseif ((        // line 87
($context["clean_image"] ?? null) || ($context["clean_color"] ?? null))) {
            // line 88
            echo "\t<header class=\"intro-header\" style=\"background-color: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["clean_color"] ?? null), 88, $this->source), "html", null, true);
            echo ";background-image: url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["clean_image"] ?? null), 88, $this->source), "html", null, true);
            echo "')\">
\t\t";
        } elseif ((        // line 89
($context["is_front"] ?? null) && call_user_func_array($this->env->getFunction('file_url')->getCallable(), ["themes/clean_blog/images/home-bg.jpg"]))) {
            // line 90
            echo "\t\t<header class=\"intro-header\" style=\"background-image: url('themes/clean_blog/images/home-bg.jpg')\">
\t\t\t";
        } elseif (        // line 91
($context["clean_color"] ?? null)) {
            echo "}}
\t\t\t<header class=\"intro-header\" style=\"background-color: ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["clean_color"] ?? null), 92, $this->source), "html", null, true);
            echo ";\">
\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t<header class=\"intro-header\" style=\"background-color: #7B2F3D;\">
\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t";
        // line 99
        if (($context["is_front"] ?? null)) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t<div class=\"site-heading\">
\t\t\t\t\t\t\t\t\t\t<h1>";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 101, $this->source), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t\t\t\t<hr class=\"small\">
\t\t\t\t\t\t\t\t\t\t<span class=\"subheading\">";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 103, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t<div class=\"post-heading\">
\t\t\t\t\t\t\t\t\t\t";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 107)) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t<h1> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                echo " </h1>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 109
                if (($context["display_submitted"] ?? null)) {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["createdDate"] = twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "any", false, false, true, 110), 110, $this->source), "F j, Y");
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"node__meta\">
\t\t\t\t\t\t\t\t    <span ";
                    // line 112
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 112, $this->source), "html", null, true);
                    echo ">
\t\t\t\t\t\t\t\t\t    ";
                    // line 113
                    echo t("Posted by @node.Owner.name.value on @createdDate", array("@node.Owner.name.value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "Owner", [], "any", false, false, true, 113), "name", [], "any", false, false, true, 113), "value", [], "any", false, false, true, 113), "@createdDate" => ($context["createdDate"] ?? null), ));
                    // line 114
                    echo "\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 117), "clean_blog_page_title", [], "any", false, false, true, 117)) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t<h1>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 118), "clean_blog_page_title", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t<h1>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 120, $this->source), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 122
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t\t<!-- Post Content -->
\t\t\t\t<article>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t";
        // line 134
        if (($context["is_admin"] ?? null)) {
            // line 135
            echo "\t\t\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 135), "clean_blog_local_tasks", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 137), "clean_blog_content", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t\t<br>

\t\t\t\t<!-- Footer -->
\t\t\t\t<footer style=\"background-color: #E7EDEF\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t<ul class=\"list-inline text-center\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p class=\"copyright text-muted\">Copyright &copy; ";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 175, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>";
    }

    public function getTemplateName()
    {
        return "themes/clean_blog/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 175,  200 => 137,  194 => 135,  192 => 134,  180 => 124,  176 => 122,  170 => 120,  164 => 118,  161 => 117,  156 => 114,  154 => 113,  150 => 112,  147 => 111,  144 => 110,  142 => 109,  137 => 108,  135 => 107,  132 => 106,  126 => 103,  121 => 101,  118 => 100,  116 => 99,  111 => 96,  107 => 94,  102 => 92,  98 => 91,  95 => 90,  93 => 89,  86 => 88,  84 => 87,  80 => 86,  77 => 85,  75 => 84,  63 => 75,  54 => 69,  50 => 68,  39 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/clean_blog/templates/system/page.html.twig", "C:\\xampp\\htdocs\\drupal-9.3.3\\themes\\clean_blog\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 84, "set" => 110, "trans" => 113);
        static $filters = array("escape" => 69, "date" => 110);
        static $functions = array("url" => 68, "file_url" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'trans'],
                ['escape', 'date'],
                ['url', 'file_url']
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
