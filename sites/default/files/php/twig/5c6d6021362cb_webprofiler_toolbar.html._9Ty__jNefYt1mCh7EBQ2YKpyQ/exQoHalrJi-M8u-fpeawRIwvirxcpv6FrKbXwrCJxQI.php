<?php

/* modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_toolbar.html.twig */
class __TwigTemplate_01e1782ee11731fecfe634e8fa786f236468645866d99ea3d4ed2250a49ce205 extends Twig_Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_toolbar.html.twig"));

        $tags = array("include" => 21);
        $filters = array("t" => 2, "raw" => 26);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
                array('t', 'raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"sfMiniToolbar-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "\" class=\"sf-minitoolbar\">
    <a href=\"javascript:void(0);\" title=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Show Drupal toolbar")));
        echo "\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
            document.getElementById('sfToolbarMainContent-";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'none';
            document.getElementById('sfToolbarClearer-";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'none';
            elem.style.display = 'block';
            } else {
            document.getElementById('sfToolbarMainContent-";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'block';
            document.getElementById('sfToolbarClearer-";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'block';
            elem.style.display = 'none'
            }

            Webprofiler.setPreference('toolbar/displayState', 'block');
            \">
        <img width=\"26\" height=\"28\" alt=\"Drupal\"
             src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpCRDU5MUVDNzVGRTkxMUUzODdBMEJDOEZFRjA2QUY5MiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCRDU5MUVDODVGRTkxMUUzODdBMEJDOEZFRjA2QUY5MiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkJENTkxRUM1NUZFOTExRTM4N0EwQkM4RkVGMDZBRjkyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkJENTkxRUM2NUZFOTExRTM4N0EwQkM4RkVGMDZBRjkyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+iYsuIgAAAiNJREFUeNq8lj3KwkAQhhOxUPAnoIgWQiysbFLYG2/gEVJaegQ9QfQECh4g3kA9QbxBLMQ2KaxE2G/ffG5Yl/ytiguDJBn32Z15d2dUQojy0wGgDHQwGFjj8Vh7hxFyZIHNZtOt1+uuDPRtYK/Xs4rFIpyJDFQaiIm73a7NYMyq1arf7/dnWWApIN3VHBPzINHwHX5J4FxAKg6j0Wh4aSDREGb8TxqIXJVKJSIDY1Yul30RmgqE87swHkrDq2cCkYNareZ9AmPWarX2mUAk/hswZrgkUoGyIsm7y1ggDachnrNPrVKpEKSJBxZYnC+Xi/l4PL56T99uN/y8KDYCUpj2i2JRzONkWZYyGo0UXdeV4/GobDYb5Xw+J/obxv+mTqdT8rWTpND1ek3ihm3bRNO0F188O44T+UwmE+TQjBXNcDiciLD5fE7Shuu6xDTN0JdGgfi+//J9v98nA6EmqIoHYsJPxuFwIOKxiERDVxNQ4I4PNw1Ram6DIFAWiwUWG5uv+/2+E98V+IdOp7OiZzF6pitMhC2XyxDEfOKg1+t1ldnTtNtthxcB8sAGcgQRUbWGufM8LxQPfJBv3n+73Tq5qgVyibqWdYsASOUfLYyJJ679yKyHadDZbBYqkn8HMHaO3ydMl674rI8RayOACKUo/+l0SuAf12ZI9TRYLSZCJYk76GgbnyA9TxOlMpiqqrnuQhxk7igd8raJbKi/bvX/BBgANANSieJk+XMAAAAASUVORK5CYII=\">
    </a>
</div>
<style>
    ";
        // line 21
        $this->loadTemplate("@webprofiler/Profiler/webprofiler_toolbar.css.twig", "modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_toolbar.html.twig", 21)->display(array_merge($context, array("floatable" => true)));
        // line 22
        echo "</style>
<div id=\"sfToolbarClearer-";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "\" style=\"clear: both; height: 38px;\"></div>

<div id=\"sfToolbarMainContent-";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["toolbar"] ?? null)));
        echo "

    <a class=\"hide-button\" title=\"";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close Toolbar")));
        echo "\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'block';
            Webprofiler.setPreference('toolbar/displayState', 'none');
            \"></a>
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  104 => 28,  99 => 26,  95 => 25,  90 => 23,  87 => 22,  85 => 21,  71 => 10,  67 => 9,  61 => 6,  57 => 5,  51 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_toolbar.html.twig", "/var/www/html/drupal/drupal-test/modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_toolbar.html.twig");
    }
}
