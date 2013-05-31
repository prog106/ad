<?
class AD {
    function ad_list() {
        $db = new MySQL();
        $sql = "SELECT d_name, d_desc1, d_desc2, d_url, d_img1, d_img2, d_img3 FROM rss_data ORDER BY id DESC LIMIT 20";
        $result = $db->ExecuteSQL($sql);
        return $result;
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
