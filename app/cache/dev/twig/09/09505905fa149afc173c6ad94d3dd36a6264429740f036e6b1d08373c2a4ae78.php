<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0a431e5614b2eb2866608dc2a635e80c2d34c8193b080a6722fee7ab138c7be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_be09e51601d0b639ae51ecba153a462d35e6b4c667f3ce5b4ae1418190bbb53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be09e51601d0b639ae51ecba153a462d35e6b4c667f3ce5b4ae1418190bbb53e->enter($__internal_be09e51601d0b639ae51ecba153a462d35e6b4c667f3ce5b4ae1418190bbb53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be09e51601d0b639ae51ecba153a462d35e6b4c667f3ce5b4ae1418190bbb53e->leave($__internal_be09e51601d0b639ae51ecba153a462d35e6b4c667f3ce5b4ae1418190bbb53e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcc4338981853931d4d7a03318171bcd789474da8b1dc50894a50030f82bbca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc4338981853931d4d7a03318171bcd789474da8b1dc50894a50030f82bbca5->enter($__internal_fcc4338981853931d4d7a03318171bcd789474da8b1dc50894a50030f82bbca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fcc4338981853931d4d7a03318171bcd789474da8b1dc50894a50030f82bbca5->leave($__internal_fcc4338981853931d4d7a03318171bcd789474da8b1dc50894a50030f82bbca5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b038f8a08aeb0a52ac1ea809b2d14355f3c4abee7494d767948d6202555f406c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b038f8a08aeb0a52ac1ea809b2d14355f3c4abee7494d767948d6202555f406c->enter($__internal_b038f8a08aeb0a52ac1ea809b2d14355f3c4abee7494d767948d6202555f406c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b038f8a08aeb0a52ac1ea809b2d14355f3c4abee7494d767948d6202555f406c->leave($__internal_b038f8a08aeb0a52ac1ea809b2d14355f3c4abee7494d767948d6202555f406c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
