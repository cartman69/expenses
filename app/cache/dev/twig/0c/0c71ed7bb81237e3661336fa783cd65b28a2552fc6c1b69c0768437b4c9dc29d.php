<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_86c52992aaa356be3652a68b12e33ce4a37cd8559fb938133b996c6d6fd0391e extends Twig_Template
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
        $__internal_78057033b23677872e04833cc90d5b4e7c770d83d5ec6e8698e293403778ad8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78057033b23677872e04833cc90d5b4e7c770d83d5ec6e8698e293403778ad8b->enter($__internal_78057033b23677872e04833cc90d5b4e7c770d83d5ec6e8698e293403778ad8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_78057033b23677872e04833cc90d5b4e7c770d83d5ec6e8698e293403778ad8b->leave($__internal_78057033b23677872e04833cc90d5b4e7c770d83d5ec6e8698e293403778ad8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
