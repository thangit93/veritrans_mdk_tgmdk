<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：paypay、コマンド名：決済申込の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class PaypayAuthorizeResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * "paypay"： paypay決済<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 決済請求処理後、応答電文に含まれる値を返却します。<br/>
     * 以下の処理結果のいずれかが格納される<br/>
     * - success：正常終了<br/>
     * - failure：異常終了<br/>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     * 処理結果を詳細に表すコードを返却します。<br/>
     * <br/>
     * 4桁ずつ4つのブロックで構成され、各ブロックでサービス毎の処理結果を表します。<br/>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     * 文字列<br/>
     * 処理結果に対するメッセージを返却します。<br/>
     */
    private $merrMsg;

    /**
     * 電文ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $custTxn;

    /**
     * MDKバージョン<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 電文のバージョン番号を返却します。<br/>
     */
    private $txnVersion;

    /**
     * 決済センターとの取引ID<br>
     * 半角数字<br/>
     * 最大桁数：20<br/>
     * (バーコード決済)：paypay側で発番された取引IDを返却します。※1<br/>
     * (オンライン決済(onlinePaymentType="1"（スマートペイメント）))：決済センターとの取引用に決済サーバーで発番した取引IDを返却します。※2<br/>
     * ※1 バーコード決済かつ、mstatus=successの場合、設定されます。<br/>
     * ※2 マーチャント側でのスマートペイメント決済処理でPayPayに連携する情報として必要です。<br/>
     */
    private $paypayOrderId;

    /**
     * paypay決済日時<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * paypay側で決済された日時を返却します。（YYYYMMDDhhmmss形式）<br/>
     * ※バーコード決済かつ、mstatus=successの場合、設定されます。<br/>
     */
    private $paypayPaidDatetime;

    /**
     * レスポンスコンテンツ<br>
     * 文字列<br/>
     * マーチャント側でコンシューマに対して応答するHTMLコンテンツです。自動でpaypayの画面に遷移するためのJavaScriptを含みます。<br/>
     * <br/>
     * ※オンライン決済の場合のみ設定されます。<br/>
     */
    private $responseContents;

    /**
     * 認証開始URL<br>
     * URL<br/>
     * 最大桁数：1024<br/>
     * ブラウザを遷移させるためのHTMLコンテンツを取得するURL<br/>
     * <br/>
     * ※オンライン決済(エージェント接続)の場合のみ設定されます。<br/>
     */
    private $authStartUrl;

    /**
     * 検証環境疎通フラグ<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     * paypayの疎通環境を示すフラグ<br/>
     * - 0 : 本番環境<br/>
     * - 1 : 検証環境<br/>
     * ※オンライン決済(onlinePaymentType="1"（スマートペイメント）)の場合のみ設定されます。<br/>
     */
    private $testEnvFlag;


    /**
     * 結果XML(マスク済み)<br>
     * 半角英数字<br>
     */
    private $resultXml;

    /**
     * PayNowIDオブジェクト<br>
     * オブジェクト<br>
     * PayNowID用項目を格納するオブジェクト<br>
     */
    private $payNowIdResponse;


    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * 決済サービスタイプを設定する<br>
     * @param string $serviceType 決済サービスタイプ<br>
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * 処理結果コードを取得する<br>
     * @return string 処理結果コード<br>
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * 処理結果コードを設定する<br>
     * @param string $mstatus 処理結果コード<br>
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;
    }

    /**
     * 詳細結果コードを取得する<br>
     * @return string 詳細結果コード<br>
     */
    public function getVResultCode()
    {
        return $this->vResultCode;
    }

    /**
     * 詳細結果コードを設定する<br>
     * @param string $vResultCode 詳細結果コード<br>
     */
    public function setVResultCode($vResultCode)
    {
        $this->vResultCode = $vResultCode;
    }

    /**
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getMerrMsg()
    {
        return $this->merrMsg;
    }

    /**
     * エラーメッセージを設定する<br>
     * @param string $merrMsg エラーメッセージ<br>
     */
    public function setMerrMsg($merrMsg)
    {
        $this->merrMsg = $merrMsg;
    }

    /**
     * 電文IDを取得する<br>
     * @return string 電文ID<br>
     */
    public function getMarchTxn()
    {
        return $this->marchTxn;
    }

    /**
     * 電文IDを設定する<br>
     * @param string $marchTxn 電文ID<br>
     */
    public function setMarchTxn($marchTxn)
    {
        $this->marchTxn = $marchTxn;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 取引毎に付くIDを取得する<br>
     * @return string 取引毎に付くID<br>
     */
    public function getCustTxn()
    {
        return $this->custTxn;
    }

    /**
     * 取引毎に付くIDを設定する<br>
     * @param string $custTxn 取引毎に付くID<br>
     */
    public function setCustTxn($custTxn)
    {
        $this->custTxn = $custTxn;
    }

    /**
     * MDKバージョンを取得する<br>
     * @return string MDKバージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDKバージョンを設定する<br>
     * @param string $txnVersion MDKバージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
    }

    /**
     * 決済センターとの取引IDを取得する<br>
     * @return string 決済センターとの取引ID<br>
     */
    public function getPaypayOrderId()
    {
        return $this->paypayOrderId;
    }

    /**
     * 決済センターとの取引IDを設定する<br>
     * @param string $paypayOrderId 決済センターとの取引ID<br>
     */
    public function setPaypayOrderId($paypayOrderId)
    {
        $this->paypayOrderId = $paypayOrderId;
    }

    /**
     * paypay決済日時を取得する<br>
     * @return string paypay決済日時<br>
     */
    public function getPaypayPaidDatetime()
    {
        return $this->paypayPaidDatetime;
    }

    /**
     * paypay決済日時を設定する<br>
     * @param string $paypayPaidDatetime paypay決済日時<br>
     */
    public function setPaypayPaidDatetime($paypayPaidDatetime)
    {
        $this->paypayPaidDatetime = $paypayPaidDatetime;
    }

    /**
     * レスポンスコンテンツを取得する<br>
     * @return string レスポンスコンテンツ<br>
     */
    public function getResponseContents()
    {
        return $this->responseContents;
    }

    /**
     * レスポンスコンテンツを設定する<br>
     * @param string $responseContents レスポンスコンテンツ<br>
     */
    public function setResponseContents($responseContents)
    {
        $this->responseContents = $responseContents;
    }

    /**
     * 認証開始URLを取得する<br>
     * @return string 認証開始URL<br>
     */
    public function getAuthStartUrl()
    {
        return $this->authStartUrl;
    }

    /**
     * 認証開始URLを設定する<br>
     * @param string $authStartUrl 認証開始URL<br>
     */
    public function setAuthStartUrl($authStartUrl)
    {
        $this->authStartUrl = $authStartUrl;
    }

    /**
     * 検証環境疎通フラグを取得する<br>
     * @return string 検証環境疎通フラグ<br>
     */
    public function getTestEnvFlag()
    {
        return $this->testEnvFlag;
    }

    /**
     * 検証環境疎通フラグを設定する<br>
     * @param string $testEnvFlag 検証環境疎通フラグ<br>
     */
    public function setTestEnvFlag($testEnvFlag)
    {
        $this->testEnvFlag = $testEnvFlag;
    }


    /**
     * 結果XML(マスク済み)を設定する<br>
     * @param string $resultXml 結果XML(マスク済み)<br>
     */
    public function _setResultXml($resultXml)
    {
        $this->resultXml = $resultXml;
    }

    /**
     * 結果XML(マスク済み)を取得する<br>
     * @return string 結果XML(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->resultXml;
    }

    /**
     * PayNowIDオブジェクトを設定する<br>
     * @param PayNowIdResponse $payNowIdResponse PayNowIDオブジェクト<br>
     */
    public function setPayNowIdResponse($payNowIdResponse)
    {
        $this->payNowIdResponse = $payNowIdResponse;
    }

    /**
     * PayNowIDオブジェクトを取得する<br>
     * @return PayNowIdResponse PayNowIDオブジェクト<br>
     */
    public function getPayNowIdResponse()
    {
        return $this->payNowIdResponse;
    }



}
