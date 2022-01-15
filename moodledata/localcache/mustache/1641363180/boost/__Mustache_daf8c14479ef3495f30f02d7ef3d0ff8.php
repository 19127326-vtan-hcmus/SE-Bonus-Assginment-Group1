<?php

class __Mustache_daf8c14479ef3495f30f02d7ef3d0ff8 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="question-usage-preview">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('question'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div id="question-usage_table">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('tablesql'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
