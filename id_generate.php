<?php
$data = $obj->details_by_cond("tbl_agent", "ag_status='1' ORDER BY ag_id DESC");

    if (($data['ag_id'] + 1) < 10) {
        $STD = "CUS000";
    } else if (($data['ag_id'] + 1) < 100) {
        $STD = "CUS000";
    } else if (($data['ag_id'] + 1) < 1000) {
        $STD = "CUS00";
    } else if (($data['ag_id'] + 1) < 10000) {
        $STD = "CUS0";
    } else {
        $STD = "CUS";
    }
    $STD .= $data['ag_id'] + 1;
?>