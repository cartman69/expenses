<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_8d1a8454b6f3ff49e1dc61020977adddc307ef5d2e417f2bcb44852c8ce4c9b5 extends Twig_Template
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
        $__internal_6cf1cc074c6e7ce8f880ee44ef70e8aeb54d826cd818155d330f21d9ec0a2b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf1cc074c6e7ce8f880ee44ef70e8aeb54d826cd818155d330f21d9ec0a2b95->enter($__internal_6cf1cc074c6e7ce8f880ee44ef70e8aeb54d826cd818155d330f21d9ec0a2b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6cf1cc074c6e7ce8f880ee44ef70e8aeb54d826cd818155d330f21d9ec0a2b95->leave($__internal_6cf1cc074c6e7ce8f880ee44ef70e8aeb54d826cd818155d330f21d9ec0a2b95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
