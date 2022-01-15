<?php

class __Mustache_5b0a172fc5a2cdaee82de2500caaa59f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="question-comment-preview">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('question'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="question-comment-view">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('comment'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'commenstdisabled' section
        $value = $context->find('commenstdisabled');
        $buffer .= $this->section49cc43de712b2c69a61364cfc24b6087($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section90164ac21fae4f8227104bd1975d4581(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' commentdisabled, qbank_comment ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' commentdisabled, qbank_comment ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49cc43de712b2c69a61364cfc24b6087(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a class="alert-danger">
            {{#str}} commentdisabled, qbank_comment {{/str}}
        </a>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a class="alert-danger">
';
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section90164ac21fae4f8227104bd1975d4581($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
