<?php

namespace Omnipay\WechatPay\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Class BaseAbstractRequest
 * @package Omnipay\WechatPay\Message
 */
abstract class BaseAbstractRequest extends AbstractRequest
{
    /**
     * Production endpoint
     */
    protected $endpoint = 'https://api.mch.weixin.qq.com/';
    /**
     * wechatpay Uri
     */
    protected $uri='';
    
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    public function getEndpoint(){
        return $this->endpoint.$this->uri;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->getParameter('app_id');
    }


    /**
     * @param mixed $appId
     */
    public function setAppId($appId)
    {
        $this->setParameter('app_id', $appId);
    }


    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->getParameter('api_key');
    }


    /**
     * @param mixed $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->setParameter('api_key', $apiKey);
    }


    /**
     * @return mixed
     */
    public function getMchId()
    {
        return $this->getParameter('mch_id');
    }


    /**
     * @param mixed $mchId
     */
    public function setMchId($mchId)
    {
        $this->setParameter('mch_id', $mchId);
    }

    /**
     * @return mixed
     */
    public function getSubMchId()
    {
        return $this->getParameter('sub_mch_id');
    }


    /**
     * @param mixed $subMchId
     */
    public function setSubMchId($mchId)
    {
        $this->setParameter('sub_mch_id', $mchId);
    }

    /**
     * 子商户 app_id
     *
     * @return mixed
     */
    public function getSubAppId()
    {
        return $this->getParameter('sub_appid');
    }


    /**
     * @param mixed $subAppId
     */
    public function setSubAppId($subAppId)
    {
        $this->setParameter('sub_appid', $subAppId);
    }
}
