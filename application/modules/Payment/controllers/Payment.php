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
		$data['data']=select_where($this->tbl_payment,'invoice',$_POST['order_number'])->row();
		$data['product']=select_where($this->tbl_payment_product,'id_payment',$data['data']->id)->result();
		$data['page'] = $this->load->view('Payment/finish',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function tmp_payment(){
		$data = $this->controller_attr;
		if($this->session->userdata('id')){
			$data_tmp=select_where($this->tbl_tmp_payment,'id_member',$this->session->userdata('id'))->num_rows();
			
		if($data_tmp>0){
			$this->db->query("DELETE FROM dc_tmp_payment WHERE dc_tmp_payment.id_member = '".$this->session->userdata('id')."'");
		}
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
		}
		if($this->input->post('quantity2')>=1){
			$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'price'=>$program->price2,
			'type_room'=>'triple',
			'qtt'=>$this->input->post('quantity2'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}
		if($this->input->post('quantity3')>=1){
			$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'price'=>$program->price3,
			'type_room'=>'double',
			'qtt'=>$this->input->post('quantity3'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}

		if($this->input->post('quantity3')<=0 and $this->input->post('quantity2')<=0 and $this->input->post('quantity1')<=0){
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
		$invoice="AN".generateRandom();
		$data_payment=array(
			'invoice' => $invoice,
			'id_member' => $this->session->userdata('id'),
			'total_amount'=>$this->input->post('total_amount'),
			'total_amount_ppn'=> $this->input->post('ppn'),
			'type_transaction' =>$this->input->post('pembayaran'),
			'id_voucher' => 0,
			'total_amount_ppn'=> $this->input->post('ppn')+$this->input->post('total_amount'),
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
    $words = sha1($amount.".00".'51168NCpDfgS383l'.$data_payment['invoice']);
    $form='<form action="https://staging.doku.com/Suite/Receive" id="MerchatPaymentPage" name="MerchatPaymentPage" method="post"  >
    <input name="BASKET" type="hidden" id="BASKET" value="Basket testing 1,'.$amount.'.00,1,'.$amount.'.00" size="100" />
    <input name="MALLID" type="hidden" id="MALLID" value="5116" size="12" />
    <input name="CHAINMERCHANT" type="hidden" id="CHAINMERCHANT" value="NA" size="12" />
    <input name="CURRENCY" type="hidden" id="CURRENCY" value="360" size="3" maxlength="3" />
    <input name="PURCHASECURRENCY" type="hidden" id="PURCHASECURRENCY" value="360" size="3" maxlength="3" />
    <input name="AMOUNT" type="hidden" id="AMOUNT" value="'.$amount.'.00" size="12" />
    <input name="PURCHASEAMOUNT" type="hidden" id="PURCHASEAMOUNT" value="'.$amount.'.00" size="12" />
    <input name="TRANSIDMERCHANT" type="hidden" id="TRANSIDMERCHANT" size="16" value="'.$data_payment["invoice"].'" />
    <input type="hidden" id="WORDS" name="WORDS"  size="60" value="'.$words.'" />
    <input value="'.date('YmdHis').'" name="REQUESTDATETIME" type="hidden" id="REQUESTDATETIME" size="14" maxlength="14" />
    <input type="hidden" id="SESSIONID" name="SESSIONID" value="'.$sess.'" />
    <input name="PAYMENTCHANNEL" type="hidden" id="PAYMENTCHANNEL" value="'.$this->input->post("pembayaran").'"  />
    <input name="EMAIL" type="hidden" id="EMAIL" value="'.$this->session->userdata("email").'" size="12" />
    <input name="NAME" type="hidden" id="NAME" value="'.$this->session->userdata("firstname").'" size="30" maxlength="50" />
    <input name="ADDRESS" type="hidden" id="ADDRESS" value="" size="50" maxlength="50" />
    <input name="COUNTRY" type="hidden" id="COUNTRY" value="360" size="50" maxlength="50" />
    <input name="STATE" type="hidden" id="STATE" value="" size="50" maxlength="50" />
    <input name="CITY" type="hidden" id="CITY" value="" size="50" maxlength="50" />
    <input name="PROVINCE" type="hidden" id="PROVINCE" value="" size="50" maxlength="50" />
    <input name="ZIPCODE" type="hidden" id="ZIPCODE" value="" size="6" maxlength="10" />
    <input name="HOMEPHONE" type="hidden" id="HOMEPHONE" value="" size="12" maxlength="20" />
    <input name="MOBILEPHONE" type="hidden" id="MOBILEPHONE" value="" size="12" maxlength="20" />
    <input name="WORKPHONE" type="hidden" id="WORKPHONE" value="" size="12" maxlength="20" />
    <input name="BIRTHDATE" type="hidden" id="BIRTHDATE" value="" size="12" maxlength="20" />
</form>';
    			$form.="<script language=\"JavaScript\" type=\"text/javascript\">";
    			$form.="document.getElementById('MerchatPaymentPage').submit();";
    			$form.="</script>";
    			echo $form;
            
	}else{
		echo"wleee";
	}
	}
	function regnotify(){
              error_reporting(E_ALL ^ E_NOTICE);
       if($_POST['TRANSIDMERCHANT']) {
        $order_number = $_POST['TRANSIDMERCHANT'];
        
  }elseif($_POST['BILLNUMBER']){
    $order_number = $_POST['BILLNUMBER'];
  }
        else { $order_number = 0; }
    $totalamount = $_POST['AMOUNT'];
    $words    = $_POST['WORDS'];
    $statustype = $_POST['STATUSTYPE'];
    $response_code = $_POST['RESPONSECODE'];
    $approvalcode   = $_POST['APPROVALCODE'];
    $status         = (isset($_POST['STATUS']) ? $_POST['STATUS'] :  $_POST['RESULTMSG'] );
    
   $paymentcode = $_POST['PAYMENTCODE'];
   $session_id = $_POST['SESSIONID'];
   $bank_issuer = $_POST['BANK'];
    $cardnumber = $_POST['CARDNUMBER'];
    $payment_date_time = date('Y-m-d H:i:s');
    $customer=$_POST['CUSTOMERID'];
   $verifyid = $_POST['VERIFYID'];
   $sql = "select transidmerchant,totalamount from doku where transidmerchant='".$order_number."'and trxstatus='Requested'";
  $checkout=$this->db->query($sql)->row_array();
  $hasil=$checkout['transidmerchant'];
  $amount=$checkout['totalamount'];
    if ($status=="SUCCESS") {
       //             $sql = "UPDATE doku SET trxstatus='Success', words='$words', statustype='$statustype',
       //       trxstatus='$status', payment_channel='$paymentchannel', creditcard='$cardnumber',
       // payment_date_time='$payment_date_time' where transidmerchant='$order_number'";
       //             // echo "sql : ".$sql;
       //             //$qz=$this->db->query("UPDATE sv_invoices SET status='Paid' WHERE no_invoice='$order_number'");
       //              $qzz=$this->db->query("UPDATE sv_donatur SET status='Active' WHERE id='$customer'");
       //              $qzzz=$this->db->query("UPDATE sv_invoices SET status='Paid' WHERE no_invoice='$order_number'");
       //              $result = $this->db->query($sql) ;
       //              if(!$result){die("Stop2");}
          
          // $this->load->library('email');
          //   $config['protocol'] = 'sendmail';
          //   $config['mailtype'] = 'html';
          //   $config['charset'] = 'iso-8859-1';
          //   $config['wordwrap'] = TRUE;

          //   $this->email->initialize($config);
         
        
          //   $this->email->from('donasi@yappika-actionaid.or.id', 'Donasi YAPPIKA');
          //   $this->email->to($data['email']); 
          // //$this->email->cc('another@another-example.com'); 
          // //$this->email->bcc('them@their-example.com'); 
          //   $mail=$this->load->view('donasi/mail_sukses',NULL,TRUE);

          //   $this->email->subject('Terima Kasih Untuk Donasi Anda');
          //   $this->email->message($mail);

          //   $this->email->send(); 
      
    } else {
      // $sql = "UPDATE doku set trxstatus='Failed' where transidmerchant='".$order_number."'";
      // $result = $this->db->query($sql) ;
      //                     if(!$result){die("Stop3");}
      //         $this->load->library('email');
      //     $config['protocol'] = 'sendmail';
      //     $config['mailtype'] = 'html';
      //     $config['charset'] = 'iso-8859-1';
      //     $config['wordwrap'] = TRUE;

      //     $this->email->initialize($config);
        
        
      //     $this->email->from('donasi@yappika-actionaid.or.id', 'Donasi YAPPIKA');
      //     $this->email->to($data['email']); 
      //     //$this->email->cc('another@another-example.com'); 
      //     //$this->email->bcc('them@their-example.com'); 
      //     $mail=$this->load->view('donasi/mail_failed',NULL,TRUE);

      //     $this->email->subject('Terima Kasih Untuk Dukungan Anda');
      //     $this->email->message($mail); 

      //     $this->email->send();
 
 
    }
    echo 'Continue';
  
  }

}

