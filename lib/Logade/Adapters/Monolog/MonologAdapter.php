<?php
/*
 * Copyright (c) 2011 Sergei Lissovski, http://sergei.lissovski.org
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:

 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Logade\Adapters\Monolog;

use Logade\Logger;

/**
 * @author Sergei Lissovski <sergei.lissovski@gmail.com>
 */ 
class MonologAdapter implements Logger
{
    /**
     * @var \Monolog\Logger
     */
    protected $logger;

    /**
     * @return \Monolog\Logger
     */
    public function getWrappedLogger()
    {
        return $this->logger;
    }

    public function __construct(\Monolog\Logger $logger)
    {
        $this->logger = $logger;
    }
    
    public function debug($message, array $context = array())
    {
        return $this->logger->addDebug($message, $context);
    }

    public function info($message, array $context = array())
    {
        return $this->logger->addInfo($message, $context);
    }

    public function error($message, array $context = array())
    {
        return $this->logger->addError($message, $context);
    }

    public function warning($message, array $context = array())
    {
        return $this->logger->addWarning($message, $context);
    }

    public function critical($message, array $context = array())
    {
        return $this->logger->addCritical($message, $context);
    }

    public function alert($message, array $context = array())
    {
        return $this->logger->addAlert($message, $context);
    }
}
