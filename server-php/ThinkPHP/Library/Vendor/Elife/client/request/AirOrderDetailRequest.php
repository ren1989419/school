<?php
/**
 * API: qianmi.elife.air.order.detail request
 * 
 * @author auto create
 * @since 1.0
 */
class AirOrderDetailRequest
{
	private $apiParas = array();

	/** 
	 * 订单编号
	 */
	private $tradeNo;

	public function setTradeNo($tradeNo)
	{
		$this->tradeNo = $tradeNo;
		$this->apiParas["tradeNo"] = $tradeNo;
	}
	public function getTradeNo() {
		return $this->tradeNo;
	}

	public function getApiMethodName()
	{
		return "qianmi.elife.air.order.detail";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->tradeNo, "tradeNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
