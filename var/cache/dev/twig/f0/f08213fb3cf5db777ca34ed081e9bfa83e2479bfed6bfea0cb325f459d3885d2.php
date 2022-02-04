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

/* advert/view.html.twig */
class __TwigTemplate_19cecb7f106f352f5980afcc9d76a2d9746dc44e75cbdca46ae02de37eb55147 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advert/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "advert/view.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14)) {
            // line 15
            echo "                            <p class=\"price\"><strong>Price: </strong>";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->getCurrencySymbol(twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 15, $this->source); })()), "price", [], "any", false, false, false, 15), "EUR"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 17
        echo "                        <p class=\"date\"><strong>Posted on: </strong>";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 17, $this->source); })()), "createdAt", [], "any", false, false, false, 17), "medium"), "html", null, true);
        echo "</p>

                        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19)) {
            // line 20
            echo "                            <hr />
                            <h3>Description</h3>
                            <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                        ";
        }
        // line 24
        echo "
                        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 25, $this->source); })()), "city", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            <hr />
                            <h3>Location</h3>
                            <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 28, $this->source); })()), "city", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                        ";
        }
        // line 30
        echo "
                        ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31) || twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 31, $this->source); })()), "phone", [], "any", false, false, false, 31))) {
            // line 32
            echo "                            <hr />
                            <h3>Contact</h3>
                            ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                <p><a href=\"mailto: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), "html", null, true);
                echo "</a></p>
                            ";
            }
            // line 37
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 37, $this->source); })()), "phone", [], "any", false, false, false, 37)) {
                // line 38
                echo "                                <p><a href=\"tel: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 38, $this->source); })()), "phone", [], "any", false, false, false, 38), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 38, $this->source); })()), "phone", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></p>
                            ";
            }
            // line 40
            echo "                        ";
        }
        // line 41
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "advert/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 41,  170 => 40,  162 => 38,  159 => 37,  151 => 35,  149 => 34,  145 => 32,  143 => 31,  140 => 30,  135 => 28,  131 => 26,  129 => 25,  126 => 24,  121 => 22,  117 => 20,  115 => 19,  109 => 17,  103 => 15,  101 => 14,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ advert.title }}{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h1>{{ advert.title }}</h1>
                    </div>
                    <div class=\"card-body\">
                        {% if advert.price %}
                            <p class=\"price\"><strong>Price: </strong>{{ advert.price|currency_symbol('EUR') }}</p>
                        {% endif %}
                        <p class=\"date\"><strong>Posted on: </strong>{{ advert.createdAt|format_datetime('medium') }}</p>

                        {% if advert.description %}
                            <hr />
                            <h3>Description</h3>
                            <p>{{ advert.description }}</p>
                        {% endif %}

                        {% if advert.city %}
                            <hr />
                            <h3>Location</h3>
                            <p>{{ advert.city.name }}</p>
                        {% endif %}

                        {% if advert.email or advert.phone %}
                            <hr />
                            <h3>Contact</h3>
                            {% if advert.email %}
                                <p><a href=\"mailto: {{ advert.email }}\">{{ advert.email }}</a></p>
                            {% endif %}
                            {% if advert.phone %}
                                <p><a href=\"tel: {{ advert.phone }}\">{{ advert.phone }}</a></p>
                            {% endif %}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "advert/view.html.twig", "C:\\Users\\Pcanony\\Documents\\project_symfony\\leboncoin-clone-master\\templates\\advert\\view.html.twig");
    }
}
