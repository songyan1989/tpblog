<?php
namespace Admin\Model;
use Think\Model;//继承核心类
class SettingModel extends Model{
    function getAll(){
       // echo 123;
      $data= $this -> select();
      $result=array();
      foreach($data as $row){
           $result[$row['key']]= $row['value'];
      }
    //   将多维数组转化为一维数组
     // var_dump($result);
      return $result;
    }
}
?>
<!--自定义一个模型，模型中定义一个类-->