<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Payment extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Payment','controller_name' => 'Payment');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$tmp=select_where($this->tbl_tmp_payment,'id_member',$this->session->userdata('id'));
		foreach ($tmp->result() as $key) {
			$key->program=select_where($this->tbl_program,'id',$key->id_program)->row();
		}
		$data['data']=$tmp;
		$data['page'] = $this->load->view('Payment/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function finish(){
		$data = $this->controller_attr;
		$data['function']='finish';
		$data['list']='';
		$data['page'] = $this->load->view('Payment/finish',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function tmp_payment(){
		$data = $this->controller_attr;
		if($this->session->userdata('id')){
		$program=select_where($this->tbl_program,'id',$this->input->post('id_program'))->row();
		if($this->input->post('quantity1')>=1){
		$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'price'=>$program->price1,
			'type_room'=>'quad',
			'qtt'=>$this->input->post('quantity1'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}elseif($this->input->post('quantity2')>=1){
			$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'price'=>$program->price2,
			'type_room'=>'double',
			'qtt'=>$this->input->post('quantity2'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}elseif($this->input->post('quantity3')>=1){
			$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'price'=>$program->price3,
			'type_room'=>'triple',
			'qtt'=>$this->input->post('quantity3'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}else{
			$this->session->set_flashdata('msg','Maaf anda harus mengisi salah satu quantity');
			redirect(site_url('Program/detail/'.$program->id.'/'.str_replace(" ", "-", $program->title)));
		}
		if($insert){
			redirect(site_url('Payment'));
		}else{
			echo"error";
		}
		}else{
			$this->session->set_flashdata('msg','Maaf anda harus login terlebih dahulu untuk memesan program');
			redirect(site_url('Account/login'));
		}
	}

	function submit_payment(){
		$invoice="#AN".generateRandom();
		$data_payment=array(
			'invoice' => $invoice,
			'id_member' => $this->session->userdata('id'),
			'total_amount'=>$this->input->post('total_amount'),
			'total_amount_ppn'=> $this->input->post('ppn'),
			'type_transaction' =>$this->input->post('pembayaran'),
			'id_voucher' => '',
			'date_created' => date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_payment,$data_payment);
		$id_payment=$this->db->insert_id();
		$no=$this->input->post('no');
	for ($i=1; $i <=$no; $i++) { 
		$product=array(
			'id_payment' => $id_payment,
			'id_program' => $this->input->post('id_program'.$i),
			'type_room' => $this->input->post('type_room'.$i),
			'qtt'=>$this->input->post('qtt'.$i),
			'total_amount'=> $this->input->post('total_amountp'.$i),
			'date_created' => date('Y-m-d H:i:s'),

		);
		$insert=$this->db->insert($this->tbl_payment_product,$product);
	
	}
	if($insert){
		$this->db->query("INSERT INTO doku SET transidmerchant='".$data_payment['invoice']."',trxstatus='Requested'");
		$amount=$this->input->post('total_amount')+$this->input->post('ppn');
		$this->db->query("DELETE FROM ".$this->tbl_tmp_payment." where ".$this->tbl_tmp_payment.".id_member ='".$this->session->userdata('id')."' ");
		$sess=md5(date("Y-m-d H:i:s").rand(111,999));
    $words = sha1($amount.".00".'25239E9Zo7aplQ0N'.$data_payment['invoice']);
    $form = "<form id='order' name='order' method='post' action='http://staging.doku.com/Suite/Receive'>";
                                                        
    $form .= "<input type='hidden' name='MALLID' value='2523'>";
    $form .= "<input type='hidden' name='CHAINMERCHANT' value='NA'>";
                $form .= "<input type='hidden' name='TRANSIDMERCHANT' value='q1HokwZ9HEWU'>";
    $form .= "<input type='hidden' name='CURRENCY' value='360'>";
    $form .= "<input type='hidden' name='PURCHASECURRENCY' value='360'>";
                $form .= "<input type='hidden' name='AMOUNT' value='".$amount.".00'>";
                $form .= "<input type='hidden' name='REGISTERAMOUNT' value='".$amount.".00'>";
                $form .= "<input type='hidden' name='PURCHASEAMOUNT' value='".$amount.".00'>";
    $form .= "<input type='hidden' name='SESSIONID' value='".$this->session->userdata('id')."'>";
                $form .= "<input type='hidden' name='REQUESTDATETIME' value='".date('YmdHis')."'>";
    $form .= "<input type='hidden' name='SHAREDKEY' value='9E9Zo7aplQ0N'>";
                $form .= "<input type='hidden' name='WORDS' value='".$words."'>";
    $form .= "<input type='hidden' name='CUSTOMERID' value='".$this->session->userdata('id')."'>";
                $form .= "<input type='hidden' name='NAME' value='".$this->session->userdata('firstname')."'>";
    $form .= "<input type='hidden' name='BASKET' value='Payment,".$amount.",1,".$amount."'>";
                $form .= "<input type='hidden' name='EMAIL' value='".$this->session->userdata('email')."'>";
                $form .= "<input type='hidden' name='ADDRESS' value=''>";
                $form .= "<input type='hidden' name='CITY' value=''>";
                $form .= "<input type='hidden' name='STATE' value=''>";
                $form .= "<input type='hidden' name='ZIPCODE' value=''>";
    /*BILL*/	$form .= "<input type='hidden' name='PAYMENTCHANNEL' value='15'>";
				$form .= "<input type='hidden' name='BILLNUMBER' value='".$data_payment['invoice']."'>"; 
				
                $form .= "<input type='hidden' name='BILLDETAIL' value='Pembayaran Annisa Travel'>"; 
				
				 $form .= "<input type='hidden' name='BILLDETAIL' value='Pembayaran Annisa Travel'>"; 
				   
                $form .= "<input type='hidden' name='FLATSTATUS' value='TRUE'>";
                $form .= "<input type='hidden' name='MOBILEPHONE' value=''>";
                $form .= "</form>";
    			$form.="<script language=\"JavaScript\" type=\"text/javascript\">";
    			$form.="document.getElementById('order').submit();";
    			$form.="</script>";
    			echo $form;
            
	}else{
		echo"wleee";
	}
	}
	function notify(){
		if($_POST['TRANSIDMERCHANT']) {
        $order_number = $_POST['TRANSIDMERCHANT'];
        
	} 
else {
	$order_number = 0;
	}
    
    $totalamount = $_POST['AMOUNT'];
    $words    = $_POST['WORDS'];
    $statustype = $_POST['STATUSTYPE'];
    $response_code = $_POST['RESPONSECODE'];
    $approvalcode   = $_POST['APPROVALCODE'];
    $status         = $_POST['RESULTMSG'];
    $paymentchannel = $_POST['PAYMENTCHANNEL'];
    $paymentcode = $_POST['PAYMENTCODE'];
    $session_id = $_POST['SESSIONID'];
    $bank_issuer = $_POST['BANK'];
    $cardnumber = $_POST['MCN'];
    $payment_date_time = $_POST['PAYMENTDATETIME'];
    $verifyid = $_POST['VERIFYID'];
    $verifyscore = $_POST['VERIFYSCORE'];
    $verifystatus = $_POST['VERIFYSTATUS'];

// Validasi Wors
   $MALLID =''; //input mallid
   $SHAREDKEY =''; //input sharedkey
   
   $WORDS_GENERATED = sha1($totalamount.$MALLID.$SHAREDKEY.$order_number.$status.$verifystatus);    
   if ( $words == $WORDS_GENERATED ) {

// Basic SQL
	$sql = "select transidmerchant,totalamount from doku where transidmerchant='".$order_number."'and trxstatus='Requested'";
	$checkout = $this->db->query($sql);
	// echo "sql : ".$sql;
	// $hasil=$checkout['transidmerchant'];
	// $amount=$checkout['totalamount'];

// Custom Field

	if (!$hasil) {

	  echo 'Stop1';

	} else {

		if ($status=="SUCCESS") {
                   $sql = "UPDATE doku SET trxstatus='Success', words='$words', statustype='$statustype', response_code='$response_code', approvalcode='$approvalcode',
		         trxstatus='$status', payment_channel='$paymentchannel', paymentcode='$paymentcode', session_id='$session_id', bank_issuer='$bank_issuer', creditcard='$cardnumber',
			 payment_date_time='$payment_date_time', verifyid='$verifyid', verifyscore='$verifyscore', verifystatus='$verifystatus' where transidmerchant='$order_number'";
        // echo "sql : ".$sql;
		$result = $this->db->query($sql);
		  
		} else {
 
 		  $sql = "UPDATE doku set trxstatus='Failed' where transidmerchant='".$order_number."'";

		  $result = $this->db->query($sql);
 
 
		}
		echo 'Continue';
	
	}
	
} else {
	echo "Stop | Words not match";
	}
	}

	function identty(){

	}
}

