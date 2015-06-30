<?php
class Blog_model extends CI_Model
{
public function getappname()
{
$fi=array();
$ab="http://localhost:8080/FRWS/rest/helo";

$xmlfile = file_get_contents($ab);
		$ob= simplexml_load_string($xmlfile);
		$json  = json_encode($ob);
		$co = json_decode($json, true);
 
for ($x = 0; $x <= 3; $x++) {

$fi[$x]=$co['msg'][$x]['name'];



}


return $fi;
}

public function getinstalls($memberid)
{

$ab="http://localhost:8080/FRWS/rest/helo";

$xmlfile = file_get_contents($ab);
		$ob= simplexml_load_string($xmlfile);
		$json  = json_encode($ob);
		$co = json_decode($json, true);

for ($x1 = 0; $x1 <= 2; $x1++) {

$abcd=$co['msg'][$x1]['name'];
if ($abcd==$memberid)
{ 
 
//echo $co['msg'][$x1]['india'];
$ar[0]=$co['msg'][$x1]['india'];
echo "<br>";
//echo $co['msg'][$x1]['germany'];
$ar[1]=$co['msg'][$x1]['germany'];
echo "<br>";
//echo $co['msg'][$x1]['italy'];
$ar[2]=$co['msg'][$x1]['italy'];
//echo "<br>";


$in=$ar[0];
$ger=$ar[1];
$it=$ar[2];
$myfile = fopen("column-data.txt", "w") or die("Unable to open file!");

$array = array('countrys','india', 'germany', 'france');
$comma_separated = implode(",", $array);

fwrite($myfile,$comma_separated);
fclose($myfile);

$fh = fopen("column-data.txt", 'a') or die("can't open file");

$stringData = "\n";
fwrite($fh, $stringData);
$array1 = array('installs',$in, $ger, $it) ;
//echo "<br>";
$comma_separated1 = implode(",", $array1);

fwrite($fh,$comma_separated1);

fclose($fh);

}

}


$this->db->where('name', $memberid);
    //$this->db->order_by('name', 'DESC');
    $query = $this->db->get('chart');
    
    return $query->result();
  


}
}
?>