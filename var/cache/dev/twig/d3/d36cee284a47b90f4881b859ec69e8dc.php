<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_82d0de32c403559c7ca112ddef3c8512 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>
\t\t\t";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 9
        yield "\t\t</title>
\t\t";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 14
        yield "\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-expand-lg bg-light\" data-bs-theme=\"light\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\">GSB</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\">Accueil
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "\t\t\t<h2 class=\"alert alert-warning text-center mt-4 mb-4\" role=\"alert\">
\t\t\t\t";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t</h2>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 38
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 41
        yield "\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "GSB -
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        yield "\t\t\t<link href=\"https://bootswatch.com/5/cosmo/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        yield "GSB";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        yield "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  187 => 39,  177 => 38,  160 => 37,  150 => 11,  140 => 10,  122 => 7,  112 => 41,  109 => 38,  106 => 37,  97 => 34,  94 => 33,  90 => 32,  80 => 25,  70 => 18,  64 => 14,  62 => 10,  59 => 9,  57 => 7,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>
\t\t\t{% block title %}GSB -
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<link href=\"https://bootswatch.com/5/cosmo/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-expand-lg bg-light\" data-bs-theme=\"light\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('index')}}\">GSB</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{path('index')}}\">Accueil
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t{% for message in app.flashes('notice') %}
\t\t\t<h2 class=\"alert alert-warning text-center mt-4 mb-4\" role=\"alert\">
\t\t\t\t{{ message }}
\t\t\t</h2>
\t\t{% endfor %}
\t\t{% block body %}GSB{% endblock %}
\t\t{% block javascripts %}
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}
\t</body>
</html>
", "base.html.twig", "/var/www/html/bts/symfony/templates/base.html.twig");
    }
}
