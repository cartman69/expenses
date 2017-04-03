<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_679e55aae8ef1ef712366070be0cf0917bacadef1e918eb02c0de63a92ecf9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_c45791d26e8839eedb349558a556021fab615a6802e9b6536f60d63bade47f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45791d26e8839eedb349558a556021fab615a6802e9b6536f60d63bade47f38->enter($__internal_c45791d26e8839eedb349558a556021fab615a6802e9b6536f60d63bade47f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45791d26e8839eedb349558a556021fab615a6802e9b6536f60d63bade47f38->leave($__internal_c45791d26e8839eedb349558a556021fab615a6802e9b6536f60d63bade47f38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de472da5328ea53223292397716335dd5b8a001d336b4868e9edb2ecd1acfe78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de472da5328ea53223292397716335dd5b8a001d336b4868e9edb2ecd1acfe78->enter($__internal_de472da5328ea53223292397716335dd5b8a001d336b4868e9edb2ecd1acfe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_de472da5328ea53223292397716335dd5b8a001d336b4868e9edb2ecd1acfe78->leave($__internal_de472da5328ea53223292397716335dd5b8a001d336b4868e9edb2ecd1acfe78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc6ec4b5a1608590438c8d514c8571d38d8293748d81a91bb068b9f1986e6a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6ec4b5a1608590438c8d514c8571d38d8293748d81a91bb068b9f1986e6a60->enter($__internal_cc6ec4b5a1608590438c8d514c8571d38d8293748d81a91bb068b9f1986e6a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cc6ec4b5a1608590438c8d514c8571d38d8293748d81a91bb068b9f1986e6a60->leave($__internal_cc6ec4b5a1608590438c8d514c8571d38d8293748d81a91bb068b9f1986e6a60_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
