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

/* Guest/page/user/insert-review.html.twig */
class __TwigTemplate_006c900b90cc16e4975ed4e1d54eb33d extends Template
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
        return "guest/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Guest/page/user/insert-review.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Guest/page/user/insert-review.html.twig"));

        $this->parent = $this->loadTemplate("guest/base.html.twig", "Guest/page/user/insert-review.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        yield "    <h1>Create Review</h1>

    <form action=\"\" method=\"post\" class=\"form-examples\">

        <div class=\"form-example\">
            <label for=\"name\">Commentaire objet:
            <input type=\"text\" name=\"title\" id=\"title\" required />
            <!-- required oblige a remplir  -->
            </label>
        </div>
        <div class=\"form-example\">
            <label for=\"book-select\">Choose a Book:</label>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 16
            yield "            <select name=\"books\" id=\"book-select\">
                <option value=\"\">--Please choose an option--</option>
                <option value=\"\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 18), "html", null, true);
            yield "</option>
            </select>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
        </div>
        <div class=\"form-example\">
            <label for=\"content\">Enter your comment: ";
        // line 25
        yield "                <textarea id=\"content\" name=\"content\" rows=\"4\" cols=\"50\" placeholder=\" \">
            Write your message here
            </textarea>
            </label>

        </div>
";
        // line 35
        yield "        <div class=\"form-example\">
            <input type=\"submit\" value=\"Post your comment!\" />
        </div>

    </form>





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Guest/page/user/insert-review.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  113 => 35,  105 => 25,  100 => 21,  91 => 18,  87 => 16,  83 => 15,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"guest/base.html.twig\" %}
{% block content %}
    <h1>Create Review</h1>

    <form action=\"\" method=\"post\" class=\"form-examples\">

        <div class=\"form-example\">
            <label for=\"name\">Commentaire objet:
            <input type=\"text\" name=\"title\" id=\"title\" required />
            <!-- required oblige a remplir  -->
            </label>
        </div>
        <div class=\"form-example\">
            <label for=\"book-select\">Choose a Book:</label>
            {% for book in books %}
            <select name=\"books\" id=\"book-select\">
                <option value=\"\">--Please choose an option--</option>
                <option value=\"\">{{book.title}}</option>
            </select>
            {% endfor %}

        </div>
        <div class=\"form-example\">
            <label for=\"content\">Enter your comment: {#            penser a mettre un label avec un textarea#}
                <textarea id=\"content\" name=\"content\" rows=\"4\" cols=\"50\" placeholder=\" \">
            Write your message here
            </textarea>
            </label>

        </div>
{#        <div class=\"form-example\">#}
{#            <label for=\"email\">Enter your email: </label>#}
{#            <input type=\"email\" name=\"email\" id=\"email\" required />#}
{#        </div>#}
        <div class=\"form-example\">
            <input type=\"submit\" value=\"Post your comment!\" />
        </div>

    </form>





{% endblock %}
", "Guest/page/user/insert-review.html.twig", "/Users/iodasama/Documents/Dossier JT/PHP/piscine-symfony-blog/templates/Guest/page/user/insert-review.html.twig");
    }
}
