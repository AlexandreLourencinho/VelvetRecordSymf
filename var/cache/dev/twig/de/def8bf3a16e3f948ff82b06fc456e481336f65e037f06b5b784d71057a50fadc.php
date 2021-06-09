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

/* disc/index.html.twig */
class __TwigTemplate_68318d4998d65396da1f18348704f90234ad85e235e36fe717a59ae2cd5a29b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "disc/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Disc index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"d-flex justify-content-between align-items-center\">
        <h1 class=\"text-center\"><u><b>Disc index</b></u></h1>
        <a class=\"btn btn-secondary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disc_new");
        echo "\">Ajouter un disque</a>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-bordered table-striped\">
            <thead>
            <tr>
                <th class=\"text-light\">Titre</th>
                <th class=\"text-light\">Année</th>
                <th class=\"text-light\">Image</th>
                <th class=\"text-light\">Label</th>
                <th class=\"text-light\">Genre</th>
                <th class=\"text-light\">Prix</th>
                <th class=\"text-light\">Artiste</th>
                <th class=\"text-light\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["discs"]) || array_key_exists("discs", $context) ? $context["discs"] : (function () { throw new RuntimeError('Variable "discs" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["disc"]) {
            // line 26
            echo "                <tr>
                    <td class=\"text-light\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discTitle", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td class=\"text-light\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discYear", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/") . twig_get_attribute($this->env, $this->source, $context["disc"], "discPicture", [], "any", false, false, false, 29)), "html", null, true);
            echo "\" alt=\"\"></td>
                    <td class=\"text-light\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discLabel", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"text-light\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discGenre", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td class=\"text-light\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "discPrice", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td class=\"text-light\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "artist", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn btn-outline-info me-1 mb-1 mb-xl-0\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disc_show", ["discId" => twig_get_attribute($this->env, $this->source, $context["disc"], "discId", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Détails</a>
                        <a class=\"btn btn-outline-warning ms-1 mt-1 mt-xl-0\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disc_edit", ["discId" => twig_get_attribute($this->env, $this->source, $context["disc"], "discId", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Modifier</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                <tr>
                    <td colspan=\"8\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "disc/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 44,  162 => 40,  153 => 36,  149 => 35,  144 => 33,  140 => 32,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  117 => 26,  112 => 25,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Disc index{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center\">
        <h1 class=\"text-center\"><u><b>Disc index</b></u></h1>
        <a class=\"btn btn-secondary\" href=\"{{ path('disc_new') }}\">Ajouter un disque</a>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-bordered table-striped\">
            <thead>
            <tr>
                <th class=\"text-light\">Titre</th>
                <th class=\"text-light\">Année</th>
                <th class=\"text-light\">Image</th>
                <th class=\"text-light\">Label</th>
                <th class=\"text-light\">Genre</th>
                <th class=\"text-light\">Prix</th>
                <th class=\"text-light\">Artiste</th>
                <th class=\"text-light\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for disc in discs %}
                <tr>
                    <td class=\"text-light\">{{ disc.discTitle }}</td>
                    <td class=\"text-light\">{{ disc.discYear }}</td>
                    <td><img src=\"{{ asset('image/')~disc.discPicture }}\" alt=\"\"></td>
                    <td class=\"text-light\">{{ disc.discLabel }}</td>
                    <td class=\"text-light\">{{ disc.discGenre }}</td>
                    <td class=\"text-light\">{{ disc.discPrice }}</td>
                    <td class=\"text-light\">{{ disc.artist }}</td>
                    <td>
                        <a class=\"btn btn-outline-info me-1 mb-1 mb-xl-0\" href=\"{{ path('disc_show', {'discId': disc.discId}) }}\">Détails</a>
                        <a class=\"btn btn-outline-warning ms-1 mt-1 mt-xl-0\" href=\"{{ path('disc_edit', {'discId': disc.discId}) }}\">Modifier</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>


{% endblock %}
", "disc/index.html.twig", "C:\\Users\\80010-02-06\\Desktop\\dossiers_de_depots\\VelvetRecordSymf\\templates\\disc\\index.html.twig");
    }
}
