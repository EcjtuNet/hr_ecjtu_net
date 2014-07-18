<?php
class Table_export extends CI_Controller {
function __construct()
{
parent::__construct();
// Here you should add some sort of user validation
// to prevent strangers from pulling your table data
}
function index()
{
$this->load->database();
$this->db->select('user_info.user_id,user_info.user_name,user_info.user_sex,hr_info.hr_center,hr_info.hr_department,user_info.user_college,user_info.user_major,user_info.user_phone,user_info.user_qq,user_info.user_remarks');
		$this->db->from('hr_user');
		$this->db->join('hr_info','hr_info.hr_id = hr_user.hr_id');
		$this->db->join('user_info','user_info.user_id = hr_user.user_id');
		$query=$this->db->get();
//$query = mb_convert_encoding("gb2312", "UTF-8", $query);
if(!$query)
return false;
// Starting the PHPExcel library
$this->load->library('PHPExcel');
$this->load->library('PHPExcel/IOFactory');
$objPHPExcel = new PHPExcel();
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle('报名表单');
$objPHPExcel->getActiveSheet()->setCellValue('A1', '报名编号');
$objPHPExcel->getActiveSheet()->setCellValue('B1', '姓名');
//$objPHPExcel->getActiveSheet()->setCellValue('A1', 'String');
$objPHPExcel->getActiveSheet()->setCellValue('C1', '性别');
$objPHPExcel->getActiveSheet()->setCellValue('D1', '中心');
$objPHPExcel->getActiveSheet()->setCellValue('E1', '部门');
$objPHPExcel->getActiveSheet()->setCellValue('F1', '学院');
$objPHPExcel->getActiveSheet()->setCellValue('G1', '专业');
$objPHPExcel->getActiveSheet()->setCellValue('H1', '电话');
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'QQ');
$objPHPExcel->getActiveSheet()->setCellValue('J1', '自我介绍');
// Field names in the first row
$fields = $query->list_fields();
$col = 0;
foreach ($fields as $field)
{
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 2, $field);
$col++;
}
// Fetching the table data
$row = 2;
foreach($query->result() as $data)
{
$col = 0;
foreach ($fields as $field)
{
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
$col++;
}
$row++;
}
$objPHPExcel->setActiveSheetIndex(0);
$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
//发送标题强制用户下载文件
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Products_'.date('dMy').'.xls"');
header('Cache-Control: max-age=0');
$objWriter->save('php://output');
}
}
?>