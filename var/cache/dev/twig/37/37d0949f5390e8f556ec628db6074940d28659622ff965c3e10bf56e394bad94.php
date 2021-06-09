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

/* disc/show.html.twig */
class __TwigTemplate_88ba4dc945e2dd4f8097bdf7c55289afbd3d99fd4c1676f0a2c5037049bf4be5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "disc/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 3, $this->source); })()), "discTitle", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <u><b><h1 class=\"text-light text-center\">Détails de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 6, $this->source); })()), "discTitle", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1></b></u>
    <div class=\"row justify-content-center\">
        <div class=\"col-auto\">
            <div class=\"table-responsive col-10\">
                <table class=\"table table-hover table-bordered table-striped col-9\">
                    <tbody>
                    <tr>
                        <th class=\"text-\">Titre</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 14, $this->source); })()), "discTitle", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Année</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 18, $this->source); })()), "discYear", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Label</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 22, $this->source); })()), "discLabel", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Genre</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 26, $this->source); })()), "discGenre", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Prix</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 30, $this->source); })()), "discPrice", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Artiste</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 34, $this->source); })()), "artist", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Illustration</th>
                       <td> <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/") . twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 38, $this->source); })()), "discPicture", [], "any", false, false, false, 38)), "html", null, true);
        echo "\" alt=\"\"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"d-flex flex-row align-items-center justify-content-center\">
        <a class=\"btn btn-outline-info ms-1 me-1\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disc_index");
        echo "\">Retour à la liste des disques</a>

        <a class=\"btn btn-outline-warning ms-1 me-1\"
           href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disc_edit", ["discId" => twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 49, $this->source); })()), "discId", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\">Modifier ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 49, $this->source); })()), "discTitle", [], "any", false, false, false, 49), "html", null, true);
        echo "</a>

        ";
        // line 51
        echo twig_include($this->env, $context, "disc/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "disc/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 51,  159 => 49,  153 => 46,  142 => 38,  135 => 34,  128 => 30,  121 => 26,  114 => 22,  107 => 18,  100 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ disc.discTitle }}{% endblock %}

{% block body %}
    <u><b><h1 class=\"text-light text-center\">Détails de {{ disc.discTitle }}</h1></b></u>
    <div class=\"row justify-content-center\">
        <div class=\"col-auto\">
            <div class=\"table-responsive col-10\">
                <table class=\"table table-hover table-bordered table-striped col-9\">
                    <tbody>
                    <tr>
                        <th class=\"text-\">Titre</th>
                        <td>{{ disc.discTitle }}</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Année</th>
                        <td>{{ disc.discYear }}</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Label</th>
                        <td>{{ disc.discLabel }}</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Genre</th>
                        <td>{{ disc.discGenre }}</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Prix</th>
                        <td>{{ disc.discPrice }}</td>
                    </tr>
                    <tr>
                        <th class=\"text-\">Artiste</th>
                        <td>{{ disc.artist }}</td>
                    </tr>
                    <tr>
                        <th>Illustration</th>
                       <td> <img src=\"{{ asset('image/')~disc.discPicture }}\" alt=\"\"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"d-flex flex-row align-items-center justify-content-center\">
        <a class=\"btn btn-outline-info ms-1 me-1\" href=\"{{ path('disc_index') }}\">Retour à la liste des disques</a>

        <a class=\"btn btn-outline-warning ms-1 me-1\"
           href=\"{{ path('disc_edit', {'discId': disc.discId}) }}\">Modifier {{ disc.discTitle }}</a>

        {{ include('disc/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "disc/show.html.twig", "C:\\Users\\80010-02-06\\Desktop\\dossiers_de_depots\\VelvetRecordSymf\\templates\\disc\\show.html.twig");
    }
}
