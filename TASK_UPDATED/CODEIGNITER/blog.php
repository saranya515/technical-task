<?php
session_start();

$na=$_SESSION['name'];
class Blog extends CI_Controller {

	public function index()
	{
		echo $na;
	}
public function in() {
$data["titl"] = $na;
   
 
    

$this->load->view("header",$data);
$this->load->model('blog_model');
$news["my"] = $this->blog_model->getappname();

$len1=sizeof($news["my"]);
$data["len"]=$len1;
$this->load->view("fb",$news);

}

public function verify()
{


$memberid = $this->input->post( 'color', TRUE ) ; 

//$this->load->view("footr");



 $dbconnect = $this->load->database();


    
      $this->load->model('blog_model');
      
//print '<pre>';
//$ar[]=$this->blog_model->get_last_item();
print_r($this->blog_model->getinstalls($memberid));
//array ( $in, $ger, $it);
 foreach ($this->blog_model->getinstalls($memberid) as $row)
   {
      $ar['id']= $row->id;
      $ar['name']= $row->name;
      $ar['india']=$row->india;
$ar['germany']=$row->germany;
$ar['italy']=$row->france;
   }

$in=$ar['name'];
echo '<font size="5" color="blue">';
echo "THE APP YOU HAVE SELECTED IS <B>".'<font size="7" color="red">'.$in."</B></font></BR>";
echo '</font>';
$ar1=array(3);

$ar1[0]=$ar['india'];
$ar1[1]=$ar['germany'];
$ar1[2]=$ar['italy'];



$seri[] = array ( 'name' => 'installs', 'data' =>  $ar1);

//$json = array();
//array_push($json,$seri);
//print json_encode($json);


$this->view_data['seri'] = json_encode($seri,JSON_NUMERIC_CHECK);
print_r($this->view_data['seri']);
//$this->view_data['a1'] = json_encode($a1);
 $this->load->view('graph', $this->view_data);

}

}
?>