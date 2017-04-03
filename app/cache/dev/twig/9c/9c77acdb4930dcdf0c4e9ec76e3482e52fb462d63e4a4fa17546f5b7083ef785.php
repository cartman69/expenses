<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b3a06ab887bc08432456b967c1253f6d02d3dc2a707d9659d33f69360a0aed89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86fc9fd7fa05434c12824e8330d15cb3e6a536ddc4a205e68faaac347ac322cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fc9fd7fa05434c12824e8330d15cb3e6a536ddc4a205e68faaac347ac322cd->enter($__internal_86fc9fd7fa05434c12824e8330d15cb3e6a536ddc4a205e68faaac347ac322cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86fc9fd7fa05434c12824e8330d15cb3e6a536ddc4a205e68faaac347ac322cd->leave($__internal_86fc9fd7fa05434c12824e8330d15cb3e6a536ddc4a205e68faaac347ac322cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5964228b1747c8846e95a837383cb9df1c49c17d97fdf5330d46caaeb79924e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5964228b1747c8846e95a837383cb9df1c49c17d97fdf5330d46caaeb79924e4->enter($__internal_5964228b1747c8846e95a837383cb9df1c49c17d97fdf5330d46caaeb79924e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5964228b1747c8846e95a837383cb9df1c49c17d97fdf5330d46caaeb79924e4->leave($__internal_5964228b1747c8846e95a837383cb9df1c49c17d97fdf5330d46caaeb79924e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d22577133829095e0013253497aa8922946214b17a19d31f6ba605357bf0f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d22577133829095e0013253497aa8922946214b17a19d31f6ba605357bf0f78->enter($__internal_6d22577133829095e0013253497aa8922946214b17a19d31f6ba605357bf0f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d22577133829095e0013253497aa8922946214b17a19d31f6ba605357bf0f78->leave($__internal_6d22577133829095e0013253497aa8922946214b17a19d31f6ba605357bf0f78_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_20e2b57b5d262d7a64bef453d3c769a7227c5e554eb58a47fdd06485e9fc9fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e2b57b5d262d7a64bef453d3c769a7227c5e554eb58a47fdd06485e9fc9fe3->enter($__internal_20e2b57b5d262d7a64bef453d3c769a7227c5e554eb58a47fdd06485e9fc9fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_20e2b57b5d262d7a64bef453d3c769a7227c5e554eb58a47fdd06485e9fc9fe3->leave($__internal_20e2b57b5d262d7a64bef453d3c769a7227c5e554eb58a47fdd06485e9fc9fe3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
