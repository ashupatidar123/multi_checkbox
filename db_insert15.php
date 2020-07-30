<?php 

$path = $_SERVER['DOCUMENT_ROOT'];

include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';

global $wpdb;

$user_id=get_current_user_id();
$table = $wpdb->prefix.'cropOSPModule';
$form_id=$_POST['farmId'];
$year_temp=$_POST['year_temp'];

if($_POST['type']=='insert')
{

  $checkboxes1=array(); $checkboxes2=array();
  $checkboxes3=array(); $checkboxes4=array();

  if($_POST['myCheckboxes1']){
    $checkboxes1 = array('section2_check_1'=>$_POST['myCheckboxes1']);
  }

  if($_POST['myCheckboxes2']){
    $checkboxes2 = array('section2_check_2'=>$_POST['myCheckboxes2']);
  }

  if($_POST['myCheckboxes3']){
    $checkboxes3 = array('section2_check_3'=>$_POST['myCheckboxes3']);
  }

  if($_POST['myCheckboxes4']){
    $checkboxes4 = array('section2_check_4'=>$_POST['myCheckboxes4']);
  }
   
  $textbox1_1=array(); $textbox1_2=array(); $textbox1_3=array(); $textbox1_4=array(); 
  $textbox1_5=array(); $textbox1_6=array(); $textbox1_7=array(); $textbox1_8=array();

  if($_POST['section1_text_1']){
    $textbox1_1 = array('section1_text_1'=>$_POST['section1_text_1']);
  }
  if($_POST['section1_text_2']){
    $textbox1_2 = array('section1_text_2'=>$_POST['section1_text_2']);
  }
  if($_POST['section1_text_3']){
    $textbox1_3 = array('section1_text_3'=>$_POST['section1_text_3']);
  }
  if($_POST['section1_text_4']){
    $textbox1_4 = array('section1_text_4'=>$_POST['section1_text_4']);
  }
  if($_POST['section1_text_5']){
    $textbox1_5 = array('section1_text_5'=>$_POST['section1_text_5']);
  }
  if($_POST['section1_text_6']){
    $textbox1_6 = array('section1_text_6'=>$_POST['section1_text_6']);
  }
  if($_POST['section1_text_7']){
    $textbox1_7 = array('section1_text_7'=>$_POST['section1_text_7']);
  }
  if($_POST['section1_text_8']){
    $textbox1_8 = array('section1_text_8'=>$_POST['section1_text_8']);
  }

  $textbox2_1=array(); $textbox2_2=array(); $textbox2_3=array(); 
  $textbox2_4=array(); $textbox2_5=array(); $textbox2_6=array();

  if($_POST['section2_text_1']){
    $textbox2_1 = array('section2_text_1'=>$_POST['section2_text_1']);
  }
  if($_POST['section2_text_2']){
    $textbox2_2 = array('section2_text_2'=>$_POST['section2_text_2']);
  }
  if($_POST['section2_text_3']){
    $textbox2_3 = array('section2_text_3'=>$_POST['section2_text_3']);
  }
  if($_POST['section2_text_4']){
    $textbox2_4 = array('section2_text_4'=>$_POST['section2_text_4']);
  }
  if($_POST['section2_text_5']){
    $textbox2_5 = array('section2_text_5'=>$_POST['section2_text_5']);
  }
  if($_POST['section2_text_6']){
    $textbox2_6 = array('section2_text_6'=>$_POST['section2_text_6']);
  }
  
  $radio1_1=array(); $radio1_2=array(); $radio1_3=array();
  $radio1_4=array(); $radio1_5=array(); $radio1_6=array();

  if($_POST['section1_1']){
    $radio1_1 = array('section1_1'=>$_POST['section1_1']);
  }
  if($_POST['section1_2']){
    $radio1_2 = array('section1_2'=>$_POST['section1_2']);
  }
  if($_POST['section1_3']){
    $radio1_3 = array('section1_3'=>$_POST['section1_3']);
  }
  if($_POST['section1_4']){
    $radio1_4 = array('section1_4'=>$_POST['section1_4']);
  }
  if($_POST['section1_5']){
    $radio1_5 = array('section1_5'=>$_POST['section1_5']);
  }
  if($_POST['section1_6']){
    $radio1_6 = array('section1_6'=>$_POST['section1_6']);
  }


  $radio2_1=array(); $radio2_2=array(); $radio2_3=array();
  $radio2_4=array(); $radio2_5=array(); $radio2_6=array();

  if($_POST['section2_1']){
    $radio2_1 = array('section2_1'=>$_POST['section2_1']);
  }
  if($_POST['section2_2']){
    $radio2_2 = array('section2_2'=>$_POST['section2_2']);
  }
  if($_POST['section2_3']){
    $radio2_3 = array('section2_3'=>$_POST['section2_3']);
  }
  if($_POST['section2_4']){
    $radio2_4 = array('section2_4'=>$_POST['section2_4']);
  }
  if($_POST['section2_5']){
    $radio2_5 = array('section2_5'=>$_POST['section2_5']);
  }
  if($_POST['section2_6']){
    $radio2_6 = array('section2_6'=>$_POST['section2_6']);
  }

  $result=array();

  $result = array_merge($checkboxes1,$checkboxes2,$checkboxes3,$checkboxes4,$textbox1_1,$textbox1_2,$textbox1_3,$textbox1_4,$textbox1_5,$textbox1_6,$textbox1_7,$textbox1_8,$textbox2_2,$textbox2_3,$textbox2_4,$textbox2_5,$textbox2_6,$radio1_1,$radio1_2,$radio1_3,$radio1_4,$radio1_5,$radio1_6,$radio2_1,$radio2_2,$radio2_3,$radio2_4,$radio2_5,$radio2_6);

	$myCheckboxes = serialize($result);

	$data = array('user_id' => $user_id, 'form_id'=>'cropOSPModule15EquipmentTransportationStorage','year'=>$year_temp,'options'=>$myCheckboxes);

	$format = array('%s','%s','%s','%s');

	$rowcount = $wpdb->get_var("SELECT COUNT(*) FROM $table WHERE user_id='$user_id' AND form_id='cropOSPModule15EquipmentTransportationStorage' AND year='$year_temp'");

	if($rowcount>=1){
		$wpdb->update($table, array('options'=>$myCheckboxes), array('user_id'=>$user_id,'form_id'=>'cropOSPModule15EquipmentTransportationStorage','year'=>$year_temp));
	}
	else{
		$wpdb->insert($table,$data,$format);
	} 
	return true;

}		
else if($_POST['type']=='get_data'){

  $rowcount = $wpdb->get_results("SELECT options FROM $table WHERE user_id='$user_id' AND form_id='cropOSPModule15EquipmentTransportationStorage' AND year='$year_temp'");

	if($rowcount){
		
    $Response=unserialize($rowcount[0]->options);
		echo json_encode($Response);
    
	}
}

?>