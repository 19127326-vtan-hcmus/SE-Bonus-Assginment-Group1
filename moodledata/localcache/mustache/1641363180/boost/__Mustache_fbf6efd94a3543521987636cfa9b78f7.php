<?php

class __Mustache_fbf6efd94a3543521987636cfa9b78f7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'defaulteventcontext' section
        $value = $context->find('defaulteventcontext');
        $buffer .= $this->section3241099a7b668d0bbe727404620b2b1a($context, $indent, $value);

        return $buffer;
    }

    private function section3241099a7b668d0bbe727404620b2b1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<{{!
    }} class=""{{!

    }}>
    
</>
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
                
                $buffer .= $indent . '<';
                $buffer .= ' class=""';
                $buffer .= '>
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '</>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
