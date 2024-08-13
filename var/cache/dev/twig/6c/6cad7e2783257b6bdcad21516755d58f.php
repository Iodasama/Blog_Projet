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

/* Admin/page/articles-list.html.twig */
class __TwigTemplate_20260ecc77a1dbc053b024e177e7ad25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metatitle' => [$this, 'block_metatitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/page/articles-list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/page/articles-list.html.twig"));

        $this->parent = $this->loadTemplate("Admin/base.html.twig", "Admin/page/articles-list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_metatitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metatitle"));

        yield " Your articles page ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            yield "        <div class=\"success-message\">
            ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "    <main>
        <h1>Get Your favorite article  </h1>

        <table class=\"admin-article-table\">
            <tr>
                <td>Id</td>
                <td>Titre</td>
                <td>Content</td>
                <td>Description</td>
                <td>Image</td>
                <td>Date</td>
                <td>Est publié ?</td>
                <td>Modifier article</td>
                <td>Supprimer article</td>
                <td>Lien article</td>
            </tr>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 29
            yield "            <section class=\"admin-article-table\">
                <tr>
                    <td><h1 class=\"poke2\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "</h1></td>
                    <td><h1 class=\"poke2\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 32), "html", null, true);
            yield "</h1></td>
                    ";
            // line 34
            yield "                    <td><h1 class=\"poke2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 34), "html", null, true);
            yield "</h1></td>
                    <td><h1 class=\"poke2\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 35), "html", null, true);
            yield "</h1></td>
                    <td><img class=\"admin_image\" src=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 36))), "html", null, true);
            yield "\"></td>
                    <td><h1 class=\"poke2\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 37), "Y/m/d"), "html", null, true);
            yield "</h1></td>
                    <td> ";
            // line 38
            if (($context["article"] && CoreExtension::getAttribute($this->env, $this->source, $context["article"], "isPublished", [], "any", false, false, false, 38))) {
                // line 39
                yield "                            <p>Oui</p>
                        ";
            } else {
                // line 41
                yield "                            <p>Non</p>
                        ";
            }
            // line 43
            yield "                    </td>
                    <td><a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_update_formbuilder", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\">Update Your Article</a></td>
                    <td><a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\">Suppress Your Article</a></td>
                    <td><a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_db_by_id", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">Go get Your Article</a></td>
                    <td>
                        <p class=\"js-admin-article-delete\">Suppress</p>

                        <div class=\"admin-article-popup-delete\">
                            <p>Voulez vous vraiment supprimer ?</p>

                            <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\">Suppress</a>
                        </div>
                        <div class= \"noDelete\"> <p>Ne pas supprimer</p>
                        </div>
                    </td>
                </tr>

            </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </table>



";
        // line 67
        yield "    </main>


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
        return "Admin/page/articles-list.html.twig";
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
        return array (  210 => 67,  204 => 62,  189 => 53,  179 => 46,  175 => 45,  171 => 44,  168 => 43,  164 => 41,  160 => 39,  158 => 38,  154 => 37,  150 => 36,  146 => 35,  141 => 34,  137 => 32,  133 => 31,  129 => 29,  125 => 28,  107 => 12,  98 => 9,  95 => 8,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Admin/base.html.twig\" %}

{% block metatitle%} Your articles page {% endblock %}


{% block content %}
    {% for message in app.flashes('success') %}
        <div class=\"success-message\">
            {{ message }}
        </div>
    {% endfor %}
    <main>
        <h1>Get Your favorite article  </h1>

        <table class=\"admin-article-table\">
            <tr>
                <td>Id</td>
                <td>Titre</td>
                <td>Content</td>
                <td>Description</td>
                <td>Image</td>
                <td>Date</td>
                <td>Est publié ?</td>
                <td>Modifier article</td>
                <td>Supprimer article</td>
                <td>Lien article</td>
            </tr>
        {% for article in articles %}
            <section class=\"admin-article-table\">
                <tr>
                    <td><h1 class=\"poke2\">{{ article.id }}</h1></td>
                    <td><h1 class=\"poke2\">{{ article.title }}</h1></td>
                    {# dans twig on accede a la propriété title de l'instance de la classe article requete sql#}
                    <td><h1 class=\"poke2\">{{ article.content}}</h1></td>
                    <td><h1 class=\"poke2\">{{ article.description }}</h1></td>
                    <td><img class=\"admin_image\" src=\"{{asset('images/'~article.image) }}\"></td>
                    <td><h1 class=\"poke2\">{{ article.createdAt |date(\"Y/m/d\") }}</h1></td>
                    <td> {% if article and article.isPublished %}
                            <p>Oui</p>
                        {% else %}
                            <p>Non</p>
                        {% endif %}
                    </td>
                    <td><a href=\"{{ path('admin_article_update_formbuilder', {id:article.id}) }}\">Update Your Article</a></td>
                    <td><a href=\"{{ path('delete_article', {id:article.id}) }}\">Suppress Your Article</a></td>
                    <td><a href=\"{{ path('article_db_by_id', {id:article.id}) }}\">Go get Your Article</a></td>
                    <td>
                        <p class=\"js-admin-article-delete\">Suppress</p>

                        <div class=\"admin-article-popup-delete\">
                            <p>Voulez vous vraiment supprimer ?</p>

                            <a href=\"{{ path('delete_article', {id: article.id}) }}\">Suppress</a>
                        </div>
                        <div class= \"noDelete\"> <p>Ne pas supprimer</p>
                        </div>
                    </td>
                </tr>

            </section>
        {% endfor %}
        </table>



{#            <a href=\"{{ path('article_update', {id:article.id}) }}\">Update Your Article</a>#}
    </main>


{% endblock %}", "Admin/page/articles-list.html.twig", "/Users/iodasama/Documents/Dossier JT/PHP/piscine-symfony-blog/templates/Admin/page/articles-list.html.twig");
    }
}
