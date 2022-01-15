<?php

class __Mustache_6210c063cab2e87e4d45acc2aa3f217f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'forum.capabilities.create' section
        $value = $context->findDot('forum.capabilities.create');
        $buffer .= $this->sectionB9ba80b1b75908246547c6d0ecab6af5($context, $indent, $value);

        return $buffer;
    }

    private function section60562f50222dfd2822e50e7da0116b1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addanewdiscussion, forum';
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
                
                $buffer .= 'addanewdiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9ba80b1b75908246547c6d0ecab6af5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <aaaa class="btn btn-primary" data-toggle="collaaapse" href="#coaaAddForm">
        {{#str}}addanewdiscussion, forum{{/str}}
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
                
                $buffer .= $indent . '    <aaaa class="btn btn-primary" data-toggle="collaaapse" href="#coaaAddForm">
';
                $buffer .= $indent . '        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section60562f50222dfd2822e50e7da0116b1c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
