<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e42807d53345f153b32fbc6f94258de884d50ce95ab4ef8162b558fcdb5060c4 extends Twig_Template
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
        $__internal_14f71d21fffcdf84842536a1dcd571fe56f3bd8ab81ba196c39b6b2509529689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f71d21fffcdf84842536a1dcd571fe56f3bd8ab81ba196c39b6b2509529689->enter($__internal_14f71d21fffcdf84842536a1dcd571fe56f3bd8ab81ba196c39b6b2509529689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_14f71d21fffcdf84842536a1dcd571fe56f3bd8ab81ba196c39b6b2509529689->leave($__internal_14f71d21fffcdf84842536a1dcd571fe56f3bd8ab81ba196c39b6b2509529689_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
