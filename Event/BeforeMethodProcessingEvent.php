<?php

namespace TSCore\JsonRpcServerBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use TSCore\JsonRpcServerBundle\Request\IRpcRequest;
use TSCore\JsonRpcServerBundle\Server\PreDispatchResult;

class BeforeMethodProcessingEvent extends Event
{
    /**
     * @var IRpcRequest
    */
    private $rpcRequest;

    /**
     * @var PreDispatchResult
    */
    private $preDispatchResult;

    public function __construct(IRpcRequest $rpcRequest, PreDispatchResult $preDispatchResult)
    {
        $this->rpcRequest = $rpcRequest;
        $this->preDispatchResult = $preDispatchResult;
    }

    public function getPreDispatchResult()
    {
        return $this->preDispatchResult;
    }

    /**
     * @return IRpcRequest
    */
    public function getRpcRequest()
    {
        return $this->rpcRequest;
    }

    /**
     * @param IRpcRequest $rpcRequest
    */
    public function setRpcRequest(IRpcRequest $rpcRequest)
    {
        $this->rpcRequest = $rpcRequest;
    }
}