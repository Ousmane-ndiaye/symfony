<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_77eadd2ba15205f32a28e062bfa62837a47fcf3286e59db02544b451a698447c extends Twig_Template
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
        $__internal_d3884a360d0646917addc6c1b7d1d1ee7ab5f7bece33b993c2ad0a59f00736ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3884a360d0646917addc6c1b7d1d1ee7ab5f7bece33b993c2ad0a59f00736ca->enter($__internal_d3884a360d0646917addc6c1b7d1d1ee7ab5f7bece33b993c2ad0a59f00736ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_js.html.twig"));

        $__internal_09add450a781498b4c8605825a2bb95ca5120576dcda166105b15685bfcbff64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09add450a781498b4c8605825a2bb95ca5120576dcda166105b15685bfcbff64->enter($__internal_09add450a781498b4c8605825a2bb95ca5120576dcda166105b15685bfcbff64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_js.html.twig"));

        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar sf-display-none\"></div>
";
        // line 2
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
<style";
        // line 3
        if (($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce"))) {
            echo " nonce=\"";
            echo twig_escape_filter($this->env, ($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce")), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig", array("position" => ($context["position"] ?? $this->getContext($context, "position")), "floatable" => true));
        echo "
</style>
<script";
        // line 6
        if (($context["csp_script_nonce"] ?? $this->getContext($context, "csp_script_nonce"))) {
            echo " nonce=";
            echo twig_escape_filter($this->env, ($context["csp_script_nonce"] ?? $this->getContext($context, "csp_script_nonce")), "html", null, true);
        }
        echo ">/*<![CDATA[*/
    (function () {
        ";
        // line 8
        if (("top" == ($context["position"] ?? $this->getContext($context, "position")))) {
            // line 9
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 15
        echo "
        Sfjs.load(
            'sfwdt";
        // line 17
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_wdt", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {

                /* Evaluate embedded scripts inside the toolbar */
                var i, scripts = [].slice.call(el.querySelectorAll('script'));

                for (i = 0; i < scripts.length; ++i) {
                    eval(scripts[i].firstChild.nodeValue);
                }

                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 35
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 36
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 37
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 39
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 40
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 41
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }

                /* Handle toolbar-info position */
                var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                for (i = 0; i < toolbarBlocks.length; ++i) {
                    toolbarBlocks[i].onmouseover = function () {
                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                        var pageWidth = document.body.clientWidth;
                        var elementWidth = toolbarInfo.offsetWidth;
                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                        /* Reset right and left value, useful on window resize */
                        toolbarInfo.style.right = '';
                        toolbarInfo.style.left = '';

                        if (elementWidth > pageWidth) {
                            toolbarInfo.style.left = 0;
                        }
                        else if (leftValue > 0 && rightValue > 0) {
                            toolbarInfo.style.right = (rightValue * -1) + 'px';
                        } else if (leftValue < 0) {
                            toolbarInfo.style.left = 0;
                        } else {
                            toolbarInfo.style.right = '0px';
                        }
                    };
                }
                Sfjs.addEventListener(document.getElementById('sfToolbarHideButton-";
        // line 70
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "'), 'click', function (event) {
                    event.preventDefault();

                    var p = this.parentNode;
                    p.style.display = 'none';
                    (p.previousElementSibling || p.previousSibling).style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 76
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    Sfjs.setPreference('toolbar/displayState', 'none');
                });
                Sfjs.addEventListener(document.getElementById('sfToolbarMiniToggler-";
        // line 79
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "'), 'click', function (event) {
                    event.preventDefault();

                    var elem = this.parentNode;
                    if (elem.style.display == 'none') {
                        document.getElementById('sfToolbarMainContent-";
        // line 84
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                        document.getElementById('sfToolbarClearer-";
        // line 85
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                        elem.style.display = 'block';
                    } else {
                        document.getElementById('sfToolbarMainContent-";
        // line 88
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                        document.getElementById('sfToolbarClearer-";
        // line 89
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                        elem.style.display = 'none'
                    }

                    Sfjs.setPreference('toolbar/displayState', 'block');
                });
                Sfjs.renderAjaxRequests();
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            { maxTries: 5 }
        );
    })();
/*]]>*/</script>
";
        
        $__internal_d3884a360d0646917addc6c1b7d1d1ee7ab5f7bece33b993c2ad0a59f00736ca->leave($__internal_d3884a360d0646917addc6c1b7d1d1ee7ab5f7bece33b993c2ad0a59f00736ca_prof);

        
        $__internal_09add450a781498b4c8605825a2bb95ca5120576dcda166105b15685bfcbff64->leave($__internal_09add450a781498b4c8605825a2bb95ca5120576dcda166105b15685bfcbff64_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 99,  185 => 89,  181 => 88,  175 => 85,  171 => 84,  163 => 79,  157 => 76,  148 => 70,  116 => 41,  112 => 40,  108 => 39,  103 => 37,  99 => 36,  95 => 35,  75 => 18,  71 => 17,  67 => 15,  57 => 9,  55 => 8,  47 => 6,  42 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sfwdt{{ token }}\" class=\"sf-toolbar sf-display-none\"></div>
{{ include('@WebProfiler/Profiler/base_js.html.twig') }}
<style{% if csp_style_nonce %} nonce=\"{{ csp_style_nonce }}\"{% endif %}>
    {{ include('@WebProfiler/Profiler/toolbar.css.twig', { 'position': position, 'floatable': true }) }}
</style>
<script{% if csp_script_nonce %} nonce={{ csp_script_nonce }}{% endif %}>/*<![CDATA[*/
    (function () {
        {% if 'top' == position %}
            var sfwdt = document.getElementById('sfwdt{{ token }}');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        {% endif %}

        Sfjs.load(
            'sfwdt{{ token }}',
            '{{ path(\"_wdt\", { \"token\": token }) }}',
            function(xhr, el) {

                /* Evaluate embedded scripts inside the toolbar */
                var i, scripts = [].slice.call(el.querySelectorAll('script'));

                for (i = 0; i < scripts.length; ++i) {
                    eval(scripts[i].firstChild.nodeValue);
                }

                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';
                    document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';
                    document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'none';
                }

                /* Handle toolbar-info position */
                var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                for (i = 0; i < toolbarBlocks.length; ++i) {
                    toolbarBlocks[i].onmouseover = function () {
                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                        var pageWidth = document.body.clientWidth;
                        var elementWidth = toolbarInfo.offsetWidth;
                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                        /* Reset right and left value, useful on window resize */
                        toolbarInfo.style.right = '';
                        toolbarInfo.style.left = '';

                        if (elementWidth > pageWidth) {
                            toolbarInfo.style.left = 0;
                        }
                        else if (leftValue > 0 && rightValue > 0) {
                            toolbarInfo.style.right = (rightValue * -1) + 'px';
                        } else if (leftValue < 0) {
                            toolbarInfo.style.left = 0;
                        } else {
                            toolbarInfo.style.right = '0px';
                        }
                    };
                }
                Sfjs.addEventListener(document.getElementById('sfToolbarHideButton-{{ token }}'), 'click', function (event) {
                    event.preventDefault();

                    var p = this.parentNode;
                    p.style.display = 'none';
                    (p.previousElementSibling || p.previousSibling).style.display = 'none';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';
                    Sfjs.setPreference('toolbar/displayState', 'none');
                });
                Sfjs.addEventListener(document.getElementById('sfToolbarMiniToggler-{{ token }}'), 'click', function (event) {
                    event.preventDefault();

                    var elem = this.parentNode;
                    if (elem.style.display == 'none') {
                        document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';
                        document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';
                        elem.style.display = 'block';
                    } else {
                        document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';
                        document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';
                        elem.style.display = 'none'
                    }

                    Sfjs.setPreference('toolbar/displayState', 'block');
                });
                Sfjs.renderAjaxRequests();
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '{{ path(\"_profiler\", { \"token\": token }) }}');
                }
            },
            { maxTries: 5 }
        );
    })();
/*]]>*/</script>
", "WebProfilerBundle:Profiler:toolbar_js.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_js.html.twig");
    }
}
