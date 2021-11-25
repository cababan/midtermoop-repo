<?php 
    class RegisterPatient {
        private $Name;
        private $age;
        private $gender;
        private $address;
        private $consoltation_text;
        
        function __construct() {
            $this->Name = isset($_POST['name']) ? $_POST['name'] : null;
            $this->age = isset($_POST['age']) ? $_POST['age'] : null;
            $this->gender = isset($_POST['gender']) ? $_POST['gender'] : null;
            $this->address = isset($_POST['address']) ? $_POST['address'] : null;
        }
        function start() {
            if (empty($this->Name)||empty($this->age)||empty($this->gender)||empty($this->address)) {
                echo '<h1 class="text-center bg-danger"> Input is Empty</h1>';  
            }
            else
            {
                echo '<h1 class="text-center bg-success">You are registered!</h1>';  
                $val1=$this->Name;
                $name=($val1);
                $val2=$this->age;
                $age=($val2);
                $val3=$this->gender;
                $gender=($val3);
                $val4=$this->address;
                $address=($val4);
                $val5=$this->consoltation_text;
                $text=($val5);
                
                date_default_timezone_set('Asia/Manila');
                $date = date('m/d/Y h:i:s a', time());
                $all=$val1." ".$val2." ".$val3." ".$val4." ".$date;
                $name = strtolower($all);
                $name = preg_split('/\.|\!/', $name);              
                
                foreach ($name as &$sentence) {
                    $sentence = ucwords(trim($sentence));
                }
                $output = "";
                $arr = explode("\n", $sentence);
                foreach ($arr as $word){
                    $output .= ''.trim($word)."\n";
                }
                $fp = fopen('data.txt', 'a');
                fwrite($fp, $output);
                fclose($fp);
            }
        }
    }
?>
