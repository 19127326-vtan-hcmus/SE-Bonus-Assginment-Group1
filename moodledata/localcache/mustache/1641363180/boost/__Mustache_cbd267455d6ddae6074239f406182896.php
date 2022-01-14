<?php

class __Mustache_cbd267455d6ddae6074239f406182896 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid px-0">
';
        $buffer .= $indent . '    <div class="row mx-0">
';
        $buffer .= $indent . '        <div class="d-flex">
';
        $buffer .= $indent . '            <div class="col-xs">
';
        // 'addnewbutton' section
        $value = $context->find('addnewbutton');
        $buffer .= $this->section73edddf047a158691c92968567b8a2bc($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="d-flex ml-auto">
';
        // 'tools' section
        $value = $context->find('tools');
        $buffer .= $this->sectionE38a10d944fe314e74a33deb9bfcd1fb($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="row mt-2 ml-0">
';
        $buffer .= $indent . '        <div class="d-flex">
';
        // 'tabjumps' section
        $value = $context->find('tabjumps');
        $buffer .= $this->section4091e482652a9bc75fbaf97aa5990815($context, $indent, $value);
        // 'searchbox' section
        $value = $context->find('searchbox');
        $buffer .= $this->section936cc8feaec869fd362c699dfe57eef8($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section73edddf047a158691c92968567b8a2bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/single_button }}
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
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e1aab0e94ac577801645a18ae741e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="pr-1">
                        {{> core/single_button}}
                    </div>
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
                
                $buffer .= $indent . '                    <div class="pr-1">
';
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB94340966883e697cfe129f56c37a9a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' exportentries, mod_glossary ';
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
                
                $buffer .= ' exportentries, mod_glossary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC43d78075cfe6dfa7773e54d5465b5ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a class="dropdown-item" href="{{url}}">{{string}}</a>
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
                
                $buffer .= $indent . '                                <a class="dropdown-item" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('string'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0196ce8f229133fd02db77999d70dea3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ...
                            <span class="sr-only">{{#str}} exportentries, mod_glossary {{/str}}</span>
                        </button>
                        <div class="dropdown-menu">
                            {{#options}}
                                <a class="dropdown-item" href="{{url}}">{{string}}</a>
                            {{/options}}
                        </div>
                    </div>
                </div>
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
                
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                    <div class="btn-group">
';
                $buffer .= $indent . '                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
                $buffer .= $indent . '                            ...
';
                $buffer .= $indent . '                            <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB94340966883e697cfe129f56c37a9a9($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                        <div class="dropdown-menu">
';
                // 'options' section
                $value = $context->find('options');
                $buffer .= $this->sectionC43d78075cfe6dfa7773e54d5465b5ee($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE38a10d944fe314e74a33deb9bfcd1fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#button}}
                    <div class="pr-1">
                        {{> core/single_button}}
                    </div>
                {{/button}}
                {{#select}}
                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ...
                            <span class="sr-only">{{#str}} exportentries, mod_glossary {{/str}}</span>
                        </button>
                        <div class="dropdown-menu">
                            {{#options}}
                                <a class="dropdown-item" href="{{url}}">{{string}}</a>
                            {{/options}}
                        </div>
                    </div>
                </div>
                {{/select}}
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
                
                // 'button' section
                $value = $context->find('button');
                $buffer .= $this->section27e1aab0e94ac577801645a18ae741e1($context, $indent, $value);
                // 'select' section
                $value = $context->find('select');
                $buffer .= $this->section0196ce8f229133fd02db77999d70dea3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4091e482652a9bc75fbaf97aa5990815(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-xs pr-1">
                {{> core/url_select }}
            </div>
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
                
                $buffer .= $indent . '            <div class="col-xs pr-1">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section936cc8feaec869fd362c699dfe57eef8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-xs">
                {{> core/search_input }}
            </div>
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
                
                $buffer .= $indent . '            <div class="col-xs">
';
                if ($partial = $this->mustache->loadPartial('core/search_input')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
