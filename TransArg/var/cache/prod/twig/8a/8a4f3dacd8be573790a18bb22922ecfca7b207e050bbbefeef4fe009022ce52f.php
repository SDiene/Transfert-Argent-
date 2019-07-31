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

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_58db5f8707b71615497f8198657acd8523f9659dde7253245dc2e814ebac0cb3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('reset_row', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 5
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !(isset($context["expanded"]) || array_key_exists("expanded", $context)) ||  !($context["expanded"] ?? null))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 10), "")) : ("")) . " col-form-label"))]);
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 12), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 17
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "col-sm-2";
    }

    // line 23
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if (((isset($context["expanded"]) || array_key_exists("expanded", $context)) && ($context["expanded"] ?? null))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            $context["widget_attr"] = [];
            // line 28
            if ( !twig_test_empty(($context["help"] ?? null))) {
                // line 29
                $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
            }
            // line 31
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 33
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
            // line 36
            echo "</div>
    ";
            // line 37
            echo "</div>";
        }
    }

    // line 41
    public function block_fieldset_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["widget_attr"] = [];
        // line 43
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 44
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 46
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 47
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 49
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 52
        echo "</div>
        </div>
";
        // line 54
        echo "</fieldset>";
    }

    // line 57
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "<div class=\"form-group row\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 62
        echo "</div>";
        // line 63
        echo "</div>";
    }

    // line 66
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "<div class=\"form-group row\">";
        // line 68
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 69
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 71
        echo "</div>";
        // line 72
        echo "</div>";
    }

    // line 75
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "col-sm-10";
    }

    // line 79
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "<div class=\"form-group row\">";
        // line 81
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 82
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 86
        echo "</div>";
        // line 87
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  287 => 87,  285 => 86,  283 => 85,  281 => 84,  279 => 83,  275 => 82,  271 => 81,  269 => 80,  265 => 79,  261 => 76,  257 => 75,  253 => 72,  251 => 71,  249 => 70,  245 => 69,  241 => 68,  239 => 67,  235 => 66,  231 => 63,  229 => 62,  227 => 61,  223 => 60,  219 => 59,  217 => 58,  213 => 57,  209 => 54,  205 => 52,  203 => 51,  201 => 50,  197 => 49,  195 => 48,  190 => 47,  187 => 46,  184 => 44,  182 => 43,  180 => 42,  176 => 41,  171 => 37,  168 => 36,  166 => 35,  164 => 34,  160 => 33,  158 => 32,  152 => 31,  149 => 29,  147 => 28,  145 => 27,  142 => 25,  140 => 24,  136 => 23,  132 => 18,  128 => 17,  123 => 13,  121 => 12,  118 => 10,  116 => 9,  111 => 7,  109 => 6,  105 => 5,  101 => 79,  98 => 78,  96 => 75,  93 => 74,  91 => 66,  88 => 65,  86 => 57,  83 => 56,  81 => 41,  78 => 40,  76 => 23,  73 => 22,  70 => 20,  68 => 17,  65 => 16,  63 => 5,  60 => 4,  57 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_4_horizontal_layout.html.twig", "/home/diene/Documents/Transfert-Argent-/TransArg/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
