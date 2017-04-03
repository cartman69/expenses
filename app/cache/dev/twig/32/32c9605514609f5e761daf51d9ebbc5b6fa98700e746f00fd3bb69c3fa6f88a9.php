<?php

/* base.html.twig */
class __TwigTemplate_14386a62cf0e114dd79813ea6e54076633a4761a2bd5ffd23f8f4851af83eeba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9913103da9db20fffe312398e4d2008fce82ce76f5d7c0a84733928d5f0bfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9913103da9db20fffe312398e4d2008fce82ce76f5d7c0a84733928d5f0bfec->enter($__internal_c9913103da9db20fffe312398e4d2008fce82ce76f5d7c0a84733928d5f0bfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c9913103da9db20fffe312398e4d2008fce82ce76f5d7c0a84733928d5f0bfec->leave($__internal_c9913103da9db20fffe312398e4d2008fce82ce76f5d7c0a84733928d5f0bfec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e4b2dcd540f2327ac9c09a653c0afc088eb6814d0c610ea4ce648f0ac3d096a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4b2dcd540f2327ac9c09a653c0afc088eb6814d0c610ea4ce648f0ac3d096a->enter($__internal_3e4b2dcd540f2327ac9c09a653c0afc088eb6814d0c610ea4ce648f0ac3d096a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3e4b2dcd540f2327ac9c09a653c0afc088eb6814d0c610ea4ce648f0ac3d096a->leave($__internal_3e4b2dcd540f2327ac9c09a653c0afc088eb6814d0c610ea4ce648f0ac3d096a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c950502fe5e35abd470a421a158e3f90fac3dab5725ccb85fc51b28679dab25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c950502fe5e35abd470a421a158e3f90fac3dab5725ccb85fc51b28679dab25a->enter($__internal_c950502fe5e35abd470a421a158e3f90fac3dab5725ccb85fc51b28679dab25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c950502fe5e35abd470a421a158e3f90fac3dab5725ccb85fc51b28679dab25a->leave($__internal_c950502fe5e35abd470a421a158e3f90fac3dab5725ccb85fc51b28679dab25a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b63eaa33fcefce1a86758e76d5885844b4b64eef0de8fb9f28249cb34fef1c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63eaa33fcefce1a86758e76d5885844b4b64eef0de8fb9f28249cb34fef1c92->enter($__internal_b63eaa33fcefce1a86758e76d5885844b4b64eef0de8fb9f28249cb34fef1c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b63eaa33fcefce1a86758e76d5885844b4b64eef0de8fb9f28249cb34fef1c92->leave($__internal_b63eaa33fcefce1a86758e76d5885844b4b64eef0de8fb9f28249cb34fef1c92_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a58fa73bcd6e72bc89175c1fb2fea32f15f5e1e0b1c0b67a6f4652163363c481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58fa73bcd6e72bc89175c1fb2fea32f15f5e1e0b1c0b67a6f4652163363c481->enter($__internal_a58fa73bcd6e72bc89175c1fb2fea32f15f5e1e0b1c0b67a6f4652163363c481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a58fa73bcd6e72bc89175c1fb2fea32f15f5e1e0b1c0b67a6f4652163363c481->leave($__internal_a58fa73bcd6e72bc89175c1fb2fea32f15f5e1e0b1c0b67a6f4652163363c481_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "Z:\\laragon\\www\\depenses\\app\\Resources\\views\\base.html.twig");
    }
}
