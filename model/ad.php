<?
class AD {
    function ad_list() {
        $db = new MySQL();
        $sql = "SELECT * FROM ad WHERE now() BETWEEN ad_startdate AND ad_enddate ORDER BY ad_money DESC, id DESC";
        $result = $db->ExecuteSQL($sql);
        return $result;
    }

    function ad_insert($params) {
        $db = new MySQL();
        return $db->Insert($params, 'ad');
    }

    function ad_update($params, $where) {
        $db = new MySQL();
        return $db->Update('ad', $params, $where);
    }

    function ad_select($params) {
        $db = new MySQL();
        return $db->Select('ad', $params);
    }

    function rsslist($slimit=0, $limit=20, $cron_id=1, $where=1) {
        $db = new MySQL();
        $sql = "SELECT *, (d_now_sell_cnt/d_max_sell_cnt)*100 as per FROM rss_data WHERE cron_id = '".$cron_id."'";
        $sql .= $where;
        $sql .= " ORDER BY d_ed_date ASC, per DESC, d_now_sell_cnt DESC, d_discount_rate DESC LIMIT ".$slimit.", ".$limit;
        $result = $db->ExecuteSQL($sql);
        return $result;
    }
}
?>
