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
			$key->program_day=select_where($this->tbl_program_day,'id',$key->id_program_day)->row();
		}
		$data['data']=$tmp;
		$data['page'] = $this->load->view('Payment/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function finish($invoice=null){
		$data = $this->controller_attr;
		$data['function']='finish';
		if(isset($_POST['order_number'])){
			$invoice=$_POST['order_number'];
			$this->email_invoice($invoice);
		}
		$this->email_invoice($invoice);
		$data['data']=select_where($this->tbl_payment,'invoice',$invoice)->row();
		$product=select_where($this->tbl_payment_product,'id_payment',$data['data']->id)->result();
		foreach ($product as $key) {
			$program=select_where($this->tbl_program,'id',$key->id_program)->row();
			$key->program=$program;
		}
		$data['doku']=select_where($this->tbl_doku,'transidmerchant',$data['data']->invoice)->row();
		$data['product']=$product;
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
		$day_program=select_where($this->tbl_program_day,'id',$this->input->post('date'))->row();
		$req_qty=$this->input->post('quantity1')+$this->input->post('quantity2')+$this->input->post('quantity3');
		if($req_qty>$day_program->stock){
			$this->session->set_flashdata('msg','Maaf stock dari tanggal yang anda pilih kurang dari quantity yang anda input.');
			redirect(site_url('Program/detail/'.$program->id.'/'.str_replace(" ", "-", $program->title)));
		}
		
		if($this->input->post('quantity1')>=1){
		if($program->disc>0){
			 $a=($program->price1/100)*$program->disc; 
			 $price=$program->price1-$a;
		}else{
			$price=$program->price1;
		}
		$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'id_program_day'=>$this->input->post('date'),
			'price'=>$price,
			'type_room'=>'quad',
			'qtt'=>$this->input->post('quantity1'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}
		if($this->input->post('quantity2')>=1){
			if($program->disc>0){
			 $a=($program->price2/100)*$program->disc; 
			 $price=$program->price2-$a;
		}else{
			$price=$program->price2;
		}
			$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'id_program_day'=>$this->input->post('date'),
			'price'=>$price,
			'type_room'=>'triple',
			'qtt'=>$this->input->post('quantity2'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}
		if($this->input->post('quantity3')>=1){
			if($program->disc>0){
			 $a=($program->price3/100)*$program->disc; 
			 $price=$program->price3-$a;
		}else{
			$price=$program->price3;
		}
			$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'id_program_day'=>$this->input->post('date'),
			'price'=>$price,
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
		if($this->input->post('kartu_kredit')!=''){
			$payment='doku';
			$payment_channel=$this->input->post('kartu_kredit');
		}elseif($this->input->post('internet_banking')!=''){
			$payment='doku';
			$payment_channel=$this->input->post('internet_banking');
		}
		elseif($this->input->post('alfamart')!=''){
			$payment='doku';
			$payment_channel=$this->input->post('alfamart');
		}elseif($this->input->post('atm_transfer')!=''){
			$payment='transfer';
			$payment_channel=$this->input->post('atm_transfer');
		}else{
			$this->session->set_flashdata('msg','Maaf, silahkan pilih salah satu metode pembayaran untuk bisa melanjutkan proses.');
			redirect('Payment');
		}
		if($this->input->post('voucher')!=''){
			$voucher=select_where_array($this->tbl_voucher,$array=array('kode_voucher'=>$this->input->post('voucher'),'status'=>0));
			if($voucher->num_rows()>0){
				$voucher=$voucher->row();
				$id_voucher=$voucher->id;
				$amount_voucher=$voucher->amount;
			}else{
				$this->session->set_flashdata('msg','Maaf, Kode voucher yang anda input tidak tersedia.');
				redirect('Payment');
			}
		}else{
			$id_voucher=0;
			$amount_voucher=0;
		}
		$invoice="AN".generateRandom();
		$data_payment=array(
			'invoice' => $invoice,
			'id_member' => $this->session->userdata('id'),
			'id_program_day' => $this->input->post('day_program'),
			'total_amount'=>$this->input->post('total_amount'),
			'total_amount_ppn'=> $this->input->post('ppn'),
			'type_transaction' =>$payment_channel,
			'id_voucher' => $id_voucher,
			'voucher_amount' => $amount_voucher,
			'total_all_amount'=> $this->input->post('ppn')+$this->input->post('total_amount')-$amount_voucher,
			'date_created' => date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_payment,$data_payment);
		$id_payment=$this->db->insert_id();
		$no=$this->input->post('no');
		$qtt=0;
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
	$qtt+=$this->input->post('qtt'.$i);
	}
	if($insert){
		$this->db->query("INSERT INTO doku SET transidmerchant='".$data_payment['invoice']."',trxstatus='Requested',payment_channel='".$payment_channel."'");
		$id_doku=$this->db->insert_id();
		$this->db->query("UPDATE ".$this->tbl_payment." SET id_doku='".$id_doku."' where invoice='".$data_payment['invoice']."'");
		$day_program=select_where($this->tbl_program_day,'id',$this->session->userdata('day_program'))->row();
		$exe_qtt=$day_program->stock-$qtt;
		$this->db->query("UPDATE ".$this->tbl_program_day." SET stock='".$exe_qtt."' where id='".$this->input->post('day_program')."'");
		$amount=$data_payment['total_all_amount'];
		$this->db->query("DELETE FROM ".$this->tbl_tmp_payment." where ".$this->tbl_tmp_payment.".id_member ='".$this->session->userdata('id')."' ");
		if($payment=='doku'){
		$sess=md5(date("Y-m-d H:i:s").rand(111,999));
    $words = sha1($amount.".00".'28048NCpDfgS383l'.$data_payment['invoice']);
    $form='<form action="https://pay.doku.com/Suite/Receive" id="MerchatPaymentPage" name="MerchatPaymentPage" method="post"  >
    <input name="BASKET" type="hidden" id="BASKET" value="Basket testing 1,'.$amount.'.00,1,'.$amount.'.00" size="100" />
    <input name="MALLID" type="hidden" id="MALLID" value="2804" size="12" />
    <input name="CHAINMERCHANT" type="hidden" id="CHAINMERCHANT" value="NA" size="12" />
    <input name="CURRENCY" type="hidden" id="CURRENCY" value="360" size="3" maxlength="3" />
    <input name="PURCHASECURRENCY" type="hidden" id="PURCHASECURRENCY" value="360" size="3" maxlength="3" />
    <input name="AMOUNT" type="hidden" id="AMOUNT" value="'.$amount.'.00" size="12" />
    <input name="PURCHASEAMOUNT" type="hidden" id="PURCHASEAMOUNT" value="'.$amount.'.00" size="12" />
    <input name="TRANSIDMERCHANT" type="hidden" id="TRANSIDMERCHANT" size="16" value="'.$data_payment['invoice'].'" />
    <input type="hidden" id="WORDS" name="WORDS"  size="60" value="'.$words.'" />
    <input value="'.date('YmdHis').'" name="REQUESTDATETIME" type="hidden" id="REQUESTDATETIME" size="14" maxlength="14" />
    <input type="hidden" id="SESSIONID" name="SESSIONID" value="'.$sess.'" />
    <input name="PAYMENTCHANNEL" type="hidden" id="PAYMENTCHANNEL" value="'.$payment_channel.'"  />
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
    			redirect('Payment/finish/'.$data_payment['invoice']);
    		}
            
	}else{
		echo"wleee";
	}
	}
	function regnotify(){
		$this->db->query("INSERT INTO notif SET msg='".serialize($_POST)."',created_date='".date('Y-m-d H:i:s')."'");
		//$id_doku=17;
		$id_doku=$this->db->insert_id();
		$notif=select_where('notif','id',$id_doku);
		if($notif->num_rows()>0){
			$notif=$notif->row();
			$doku=unserialize($notif->msg);
			$order_number = $doku['TRANSIDMERCHANT'];
			$totalamount = $doku['AMOUNT'];
    		$words    = $doku['WORDS'];
    		$statustype = $doku['STATUSTYPE'];
    		$response_code = $doku['RESPONSECODE'];
    		$approvalcode   = $doku['APPROVALCODE'];
    		$status         = $doku['RESULTMSG'];
    		$paymentchannel = $doku['PAYMENTCHANNEL'];
    		$session_id = $doku['SESSIONID'];
    		$bank_issuer = $doku['BANK'];
    		$cardnumber = $doku['MCN'];
    		$payment_date_time = $doku['PAYMENTDATETIME'];
    		$verifyid = $doku['VERIFYID'];
    		$verifyscore = $doku['VERIFYSCORE'];
    		$verifystatus = $doku['VERIFYSTATUS'];
    		if($status=='SUCCESS'){
    			$data=array(
    				'transidmerchant' => $order_number,
    				'totalamount' =>$totalamount,
    				'words'=>$words,
    				'statustype'=>$statustype,
    				'response_code'=>$response_code,
    				'approvalcode'=>$approvalcode,
    				'trxstatus'=>'Success',
    				'payment_channel'=>$paymentchannel,
    				'session_id'=>$session_id,
    				'bank_issuer'=>$bank_issuer,
    				'payment_date_time'=>date('Y-m-d H:i:s'),
    			);
    			$update=update('doku',$data,'transidmerchant',$order_number);
    			if($update){
    				echo"Continue";
    			}
    			else{
    				echo "Stop";
    			}
    		}else{
    			$data=array(
    				'trxstatus'=>'Failed',
    				'payment_date_time'=>date('Y-m-d H:i:s'),
    			);
    			$update=update('doku',$data,'transidmerchant',$order_number);
    		}
		}else{
			echo "Stop1";
		}

  
  }
function notify(){
	echo "Continue";
}

function email_invoice($invoice){
	$data['data']=select_where($this->tbl_payment,'invoice',$invoice)->row();
		$product=select_where($this->tbl_payment_product,'id_payment',$data['data']->id)->result();
		$data['member']=select_where($this->tbl_member,'id',$data['data']->id_member)->row();
		foreach ($product as $key) {
			$program=select_where($this->tbl_program,'id',$key->id_program)->row();
			$key->program=$program;
		}
		$data['product_rek']=select_where_array($this->tbl_program,$array=array('promo' =>1,'lang'=>$this->lang->lang()))->row();
		$data['produck_rek_image']=select_where($this->tbl_program_images,'id_program',$data['product_rek']->id)->row();
		$data['doku']=select_where($this->tbl_doku,'transidmerchant',$data['data']->invoice)->row();
		$data['product']=$product;
	$message=$this->load->view('Payment/email_inv',$data,TRUE);
	$config = Array(
'protocol' => 'smtp',
'smtp_host' => 'ssl://smtp.googlemail.com',
'smtp_port' => 465,
'smtp_user' => 'noreply@annisatravel.com',
'smtp_pass' => 'annisa2017yes',
'mailtype'  => 'html', 
'charset'   => 'iso-8859-1'
);
$this->load->library('email', $config);
$this->email->set_newline("\r\n");

$this->email->from('noreply@annisatravel.com', 'Annisa Travel');
    $this->email->to($data['member']->email);
    $this->email->subject('Invoice');
    $this->email->message($message);
    $this->email->send();
}
function email(){
	$config = Array(
'protocol' => 'smtp',
'smtp_host' => 'ssl://smtp.googlemail.com',
'smtp_port' => 465,
'smtp_user' => 'info@annisatravel.com',
'smtp_pass' => 'annisa2017oke',
'mailtype'  => 'html', 
'charset'   => 'iso-8859-1'
);
$this->load->library('email', $config);
$this->email->set_newline("\r\n");

$this->email->from('info@annisatravel.com', 'Annisa Travel');
    $this->email->to('ilhamudzakir@gmail.com');
    $this->email->subject('coba');
    $message = "Thanks for signing up! Your account has been created...!";
    $this->email->message($message);
    if ( ! $this->email->send()) {
        show_error($this->email->print_debugger());
    } 
}

}


