<?php

/* @SensioDistribution/Configurator/check.html.twig */
class __TwigTemplate_a65653a8dc5840550e5c3131a531fbd42b1409ce06b616b97bf9c6c4493e343e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "@SensioDistribution/Configurator/check.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7722615be880a2f040e48dfe331bc044ad1c2d400f6a9ba9f15b7c945eeb46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7722615be880a2f040e48dfe331bc044ad1c2d400f6a9ba9f15b7c945eeb46e->enter($__internal_a7722615be880a2f040e48dfe331bc044ad1c2d400f6a9ba9f15b7c945eeb46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7722615be880a2f040e48dfe331bc044ad1c2d400f6a9ba9f15b7c945eeb46e->leave($__internal_a7722615be880a2f040e48dfe331bc044ad1c2d400f6a9ba9f15b7c945eeb46e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1e0987cefe6190ed8e1e800b4c182a374b2a2eb1ce9fd9ffaeeff5c142d3513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e0987cefe6190ed8e1e800b4c182a374b2a2eb1ce9fd9ffaeeff5c142d3513->enter($__internal_d1e0987cefe6190ed8e1e800b4c182a374b2a2eb1ce9fd9ffaeeff5c142d3513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if (twig_length_filter($this->env, ($context["majors"] ?? $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["majors"] ?? $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["majors"] ?? $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, ($context["minors"] ?? $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, ($context["majors"] ?? $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["minors"] ?? $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ( !twig_length_filter($this->env, ($context["majors"] ?? $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
        
        $__internal_d1e0987cefe6190ed8e1e800b4c182a374b2a2eb1ce9fd9ffaeeff5c142d3513->leave($__internal_d1e0987cefe6190ed8e1e800b4c182a374b2a2eb1ce9fd9ffaeeff5c142d3513_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  121 => 39,  119 => 38,  116 => 37,  110 => 33,  101 => 31,  97 => 30,  91 => 26,  87 => 24,  83 => 22,  81 => 21,  76 => 18,  74 => 17,  71 => 16,  67 => 14,  58 => 12,  54 => 11,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block content %}
    {% if majors|length %}
        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>{{ majors|length }}</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            {% for message in majors %}
                <li>{{ message }}</li>
            {% endfor %}
        </ol>
    {% endif %}

    {% if minors|length %}
        <h1>Some Recommendations</h1>

        <p>
            {% if majors|length %}
            Additionally, we
            {% else %}
            We
            {% endif %}
            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                {% for message in minors %}
                    <li>{{ message }}</li>
                {% endfor %}
            </ol>
        </p>

    {% endif %}

    {% if not majors|length %}
        <ul class=\"symfony_list\">
            <li><a href=\"{{ url }}\">Configure your Symfony Application online</a></li>
        </ul>
    {% endif %}
{% endblock %}
", "@SensioDistribution/Configurator/check.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\check.html.twig");
    }
}
