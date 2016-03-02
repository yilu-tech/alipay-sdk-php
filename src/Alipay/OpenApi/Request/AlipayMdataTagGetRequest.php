<?php
namespace Alipay\OpenApi\Request;
/**
 * ALIPAY API: alipay.mdata.tag.get request
 *
 * @author auto create
 * @since 1.0, 2015-03-11 14:09:56
 */
class AlipayMdataTagGetRequest
{
	/** 
	 * 所需标签列表.
	 **/
	private $requiredTags;
	
	/** 
	 * 用户的支付宝Id
	 **/
	private $userId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;

	
	public function setRequiredTags($requiredTags)
	{
		$this->requiredTags = $requiredTags;
		$this->apiParas["required_tags"] = $requiredTags;
	}

	public function getRequiredTags()
	{
		return $this->requiredTags;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "alipay.mdata.tag.get";
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl=$notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
	}

	public function getTerminalInfo()
	{
		return $this->terminalInfo;
	}

	public function setTerminalInfo($terminalInfo)
	{
		$this->terminalInfo = $terminalInfo;
	}

	public function getProdCode()
	{
		return $this->prodCode;
	}

	public function setProdCode($prodCode)
	{
		$this->prodCode = $prodCode;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

}
