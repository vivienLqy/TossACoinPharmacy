<?php

class Doctor extends Model
{

    public function getAllDoctor()
    {
        $this->getConnection();
        $sql = "SELECT dn.name, picd.pathImg , picd.bio FROM doctor_name dn
            INNER JOIN picture_doctor picd ON dn.id = picd.doctor_id;";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
}
