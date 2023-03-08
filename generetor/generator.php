<?php 



class generating implements generate_int {


    public function generator($length = 10): string
    {
      $str = "";

      $arr = array();

      $arr[] = range("a", "z");

      for($i = 0; $i < $length; $i++) {

        $rand = rand(0, 25);
        $str .= $arr[0][$rand];
      }


      return $str;
    }
    
}