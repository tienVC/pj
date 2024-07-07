<?php

require_once("model.php");

class Sale extends Model
{
    public function getKM($maKm)
    {
        $query =  "SELECT * from khuyenmai WHERE MaKm = $maKm";

        require("result.php");

        return $data;
    }
}
