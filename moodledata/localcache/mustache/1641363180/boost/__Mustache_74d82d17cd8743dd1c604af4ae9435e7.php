<?php

class __Mustache_74d82d17cd8743dd1c604af4ae9435e7 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid mb-2">
';
        $buffer .= $indent . '    <div class="row">
';
        if ($partial = $this->mustache->loadPartial('core/url_select')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
