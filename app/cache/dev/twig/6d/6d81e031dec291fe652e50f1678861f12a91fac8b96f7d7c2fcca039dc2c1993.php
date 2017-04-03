<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e90f13a9311714542cf2dd9f51e04287f0d66f44dcaec7864e5ae64fb219f75d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_589bbaa65e2a20f1435e0c0e1ff9e5f9ec0158d124edc631fab9da5b7fc21fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589bbaa65e2a20f1435e0c0e1ff9e5f9ec0158d124edc631fab9da5b7fc21fdd->enter($__internal_589bbaa65e2a20f1435e0c0e1ff9e5f9ec0158d124edc631fab9da5b7fc21fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_589bbaa65e2a20f1435e0c0e1ff9e5f9ec0158d124edc631fab9da5b7fc21fdd->leave($__internal_589bbaa65e2a20f1435e0c0e1ff9e5f9ec0158d124edc631fab9da5b7fc21fdd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
