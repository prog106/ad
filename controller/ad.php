<?
require_once "config/util.php";
require_once "model/ad.php";
class AdController {

    function doadform($param_id=0) {
        if($param_id > 0) {
            $params = array('id' => $param_id);
            $row = AD::ad_select($params);
        }
        include "template/adform.html";
    }

    function doadinsert($params) {
        foreach($params as $k => $v) {
            $parameter['ad_'.$k] = $v;
        }
        return AD::ad_insert($parameter);
    }

    function doadupdate($params) {
        foreach($params as $k => $v) {
            if($k != 'id') $parameter['ad_'.$k] = $v;
            else $where[$k] = $v;
        }
        return AD::ad_update($parameter, $where);
    }
}
?>
