<?
class AD {
    function ad_list() {
        $db = new MySQL();
        $sql = "SELECT * FROM ad WHERE now() BETWEEN ad_startdate AND ad_enddate ORDER BY id DESC";
        $result = $db->ExecuteSQL($sql);
        return $result;
    }

    function ad_insert($params) {
        $db = new MySQL();
        $param = array(
            'ad_startdate' => $params['startdate']
            ,'ad_enddate' => $params['enddate']
            ,'ad_title' => $params['title']
            ,'ad_desc' => $params['desc']
            ,'ad_money' => $params['money']
            ,'ad_img1' => $params['img1']
            ,'ad_img2' => $parmas['img2']
            ,'ad' => 'prog106@gmail.com'
        );
        $db->Insert($parma, 'ad');
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
