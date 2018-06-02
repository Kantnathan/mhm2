<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
	CoinPayments.net API Class - v1.0
	Copyright 2014-2016 CoinPayments.net. All rights reserved.	
	License: GPLv2 - http://www.gnu.org/licenses/gpl-2.0.txt
*/

class Domainapi {
	private $auth_id = '654999';
	private $api_key = 'XGARmhplB2C4cy12xtAuPYaxydIa3Gf2';
	private $ch = null;
	
	public function Setup($auth_id, $api_key) {
		$this->auth_id = $auth_id;
		$this->api_key = $api_key;
		$this->ch = null;
	}
	
	/**
	 * Gets the current CoinPayments.net exchange rate. Output includes both crypto and fiat currencies.
	 * @param short If short == TRUE (the default), the output won't include the currency names and confirms needed to save bandwidth.
	 */
	public function GetRates($short = TRUE) {
		$short = $short ? 1:0;
		return $this->api_call('rates', array('short' => $short));
	}

	/**
	 * Gets your current coin balances (only includes coins with a balance unless all = TRUE).<br />
	 * @param all If all = TRUE then it will return all coins, even those with a 0 balance.
	 */
	public function GetBalances($all = FALSE) {		
		return $this->api_call('balances', array('all' => $all ? 1:0));
	}
	
	/**
	 * Creates a basic transaction with minimal parameters.<br />
	 * See CreateTransaction for more advanced features.
	 * @param amount The amount of the transaction (floating point to 8 decimals).
	 * @param currency1 The source currency (ie. USD), this is used to calculate the exchange rate for you.
	 * @param currency2 The cryptocurrency of the transaction. currency1 and currency2 can be the same if you don't want any exchange rate conversion.
	 * @param address Optionally set the payout address of the transaction. If address is empty then it will follow your payout settings for that coin.
	 * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
	 * @param buyer_email Optionally (recommended) set the buyer's email so they can automatically claim refunds if there is an issue with their payment.
	 */
	public function CreateTransactionSimple($amount, $currency1, $currency2, $address='', $ipn_url='', $buyer_email='') {		
		$req = array(
			'amount' => $amount,
			'currency1' => $currency1,
			'currency2' => $currency2,
			'address' => $address,
			'ipn_url' => $ipn_url,
			'buyer_email' => $buyer_email,
		);
		return $this->api_call('create_transaction', $req);
	}

	public function CreateTransaction($req) {
		// See https://www.coinpayments.net/apidoc-create-transaction for parameters
		return $this->api_call('create_transaction', $req);
	}

	/**
	 * Creates an address for receiving payments into your CoinPayments Wallet.<br />
	 * @param currency The cryptocurrency to create a receiving address for.
	 * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
	 */
	public function GetCallbackAddress($currency, $ipn_url = '') {		
		$req = array(
			'currency' => $currency,
			'ipn_url' => $ipn_url,
		);
		return $this->api_call('get_callback_address', $req);
	}

	/**
	 * Creates a withdrawal from your account to a specified address.<br />
	 * @param amount The amount of the transaction (floating point to 8 decimals).
	 * @param currency The cryptocurrency to withdraw.
	 * @param address The address to send the coins to.
	 * @param auto_confirm If auto_confirm is TRUE, then the withdrawal will be performed without an email confirmation.
	 * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
	 */
	public function CreateWithdrawal($amount, $currency, $address, $auto_confirm = FALSE, $ipn_url = '') {		
		$req = array(
			'amount' => $amount,
			'currency' => $currency,
			'address' => $address,
			'auto_confirm' => $auto_confirm ? 1:0,
			'ipn_url' => $ipn_url,
		);
		return $this->api_call('create_withdrawal', $req);
	}

	/**
	 * Creates a transfer from your account to a specified merchant.<br />
	 * @param amount The amount of the transaction (floating point to 8 decimals).
	 * @param currency The cryptocurrency to withdraw.
	 * @param merchant The merchant ID to send the coins to.
	 * @param auto_confirm If auto_confirm is TRUE, then the transfer will be performed without an email confirmation.
	 */
	public function CreateTransfer($amount, $currency, $merchant, $auto_confirm = FALSE) {		
		$req = array(
			'amount' => $amount,
			'currency' => $currency,
			'merchant' => $merchant,
			'auto_confirm' => $auto_confirm ? 1:0,
		);
		return $this->api_call('create_transfer', $req);
	}

	/**
	 * Creates a transfer from your account to a specified $PayByName tag.<br />
	 * @param amount The amount of the transaction (floating point to 8 decimals).
	 * @param currency The cryptocurrency to withdraw.
	 * @param pbntag The $PayByName tag to send funds to.
	 * @param auto_confirm If auto_confirm is TRUE, then the transfer will be performed without an email confirmation.
	 */
	public function SendToPayByName($amount, $currency, $pbntag, $auto_confirm = FALSE) {		
		$req = array(
			'amount' => $amount,
			'currency' => $currency,
			'pbntag' => $pbntag,
			'auto_confirm' => $auto_confirm ? 1:0,
		);
		return $this->api_call('create_transfer', $req);
	}

	public function check_availability($domaine, $tld, $tlds){
		$req = array(
			'domain-name'=>$domaine,
			'tlds'=>substr($tld,1),
		);
		$reqs = http_build_query($req, '', '&');
		foreach($tlds as $tl){
			if($tld!=$tl->extension) $reqs .= '&tlds='.substr($tl->extension,1);
		}
		return $this->api_call('GET', 'https://domaincheck.httpapi.com/api/domains/available.json', $reqs, false);
	}

	public function sign_up($user){
		$req = array(
			'username'=>$user->email,
			'passwd'=>$this->generatepwd(),
			'name'=>$user->first_name.' '.$user->last_name,
			'company'=>$user->first_name,
			'address-line-1'=>$user->quartier,
			'city'=>$user->address,
			'state'=>$user->state,
			'country'=>$user->country,
			'zipcode'=>$user->postcode,
			'phone-cc'=>$user->postcode,
			'phone'=>$user->phone,
			'lang-pref'=>'fr',
		);
		return $this->api_call('GET', 'https://httpapi.com/api/customers/v2/signup.xml', $reqs, false);
	}

	private function generatepwd(){
		$low = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789~*!@$#%_+.?:,{})';
		$pwd = '';$i=strlen($low)-1;
		while(strlen($pwd)<10){
			$pwd .= $low[rand(0,$i)];
		}
		return $pwd;
	}
	
	private function is_setup() {
		return (!empty($this->auth_id) && !empty($this->api_key));
	}
	
	private function api_call($method, $link, $req = array(), $test=true) {
		if (!$this->is_setup()) {
			return array('error' => 'You have not called the Setup function with your private and public keys!');
		}
		
		// Set the API command and required fields
    	$post_data = 'auth-userid='.$this->auth_id.'&api-key='.$this->api_key.'&';
	    
		// Generate the query string
		if(is_array($req)){
			$post_data .= http_build_query($req, '', '&');
		}else{
			$post_data .= $req;
		}
	    
		// Calculate the HMAC signature on the POST data
		//$hmac = hash_hmac('sha512', $post_data, $this->private_key);
	    
		// Create cURL handle and initialize (if needed)
		if($method=='POST'){
			$this->ch = curl_init($link);
			curl_setopt($this->ch, CURLOPT_POSTFIELDS, $post_data);
		}else if($method=='GET') {
			$this->ch = curl_init($link.'?'.$post_data);
		}
		//print_r($link.'?'.$post_data);
		curl_setopt($this->ch, CURLOPT_FAILONERROR, TRUE);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, 0);
		
		//curl_setopt($this->ch, CURLOPT_HTTPHEADER, array('HMAC: '.$hmac));
		
	    
		$data = curl_exec($this->ch);                
		if ($data !== FALSE) {
			if (PHP_INT_SIZE < 8 && version_compare(PHP_VERSION, '5.4.0') >= 0) {
				// We are on 32-bit PHP, so use the bigint as string option. If you are using any API calls with Satoshis it is highly NOT recommended to use 32-bit PHP
				$dec = json_decode($data, TRUE, 512, JSON_BIGINT_AS_STRING);
			} else {
				$dec = json_decode($data, TRUE);
			}
			if ($dec !== NULL && count($dec)) {
				return $dec;
			} else {
				// If you are using PHP 5.5.0 or higher you can use json_last_error_msg() for a better error message
				return array('error' => 'Unable to parse JSON result ('.json_last_error().')');
			}
		} else {
			return array('error' => 'cURL error: '.curl_error($this->ch));
		}
	}
};
