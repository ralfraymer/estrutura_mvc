<?php 
class Ads extends Model{

    public function getQtd(){
        $sql = "SELECT COUNT(*) AS c FROM ads"; 
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0 ){           
            $sql = $sql->fetch(); 
            return $sql['c'];
        } else{
            return 0;
        }
    }

}