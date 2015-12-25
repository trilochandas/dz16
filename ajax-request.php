<?php 
// $project_root=__DIR__;
// require $project_root.'/smarty-include.php';
include_once('classes.php');
include_once('smarty-include.php');

// delete advert
if (isset($_GET['del'])) {
    $id = (int) $_GET['del'];
    Ads::deleteAdvert($id);
}

// if form was submitted
if (isset($_GET['formSubmit'])) {
    global $db;
    global $smarty;
    // global $row; 
    $response = [];
    $id;

    $ad=new Ads($_POST);
    // сохраняем объявление
    $ad->save();
    $id = $ad->getId();
    // var_dump($a);
    $newInstance = AdsStore::instance();
    $response['id'] = $id;
    $response['row'] = $newInstance->getAllAdsFromDb()->getUpdatedAdvert($id);
    echo (json_encode( $response ));
    // echo ($row);
    
    // $all = $db->select('select * from adverts');
    // $row='';
    // foreach ($all as $value) {
    //     $smarty->assign('ad',$value);
    //     $row.=$smarty->fetch('table_row.tpl.html');
    // }
    // $smarty->assign('ads_rows',$row);


    // $id = $ad->getId();

    // $resp = $db->query('SELECT * FROM adverts WHERE ID=?', $id);
    // if ($resp[0]['type'] == 'private') {
    //     $ad = new PrivateAdverts($resp[0]);
    // } elseif ($resp[0]['type'] == 'company') {
    //     $ad = new CompanyAdverts($resp[0]);
    // }
    // $smarty->assign('ad', $ad);
    // $row=$smarty->fetch('table_row.tpl.html');
    // echo($row);
}

// if (isset($_GET['tableUpdate'])) {
//     global $db;
//     global $smarty;

    // $lastRow = $db->query('SELECT * FROM adverts ORDER BY ID DESC LIMIT 1');
    // // var_dump( $lastRow );
    // if ($lastRow[0]['type'] == 'private') {
    //     $ad = new PrivateAdverts($lastRow[0]);
    //     // var_dump($ad);
    // } elseif ($lastRow[0]['type'] == 'company') {
    //     $ad = new CompanyAdverts($lastRow[0]);
    //     // var_dump($ad);
    // }
    // $smarty->assign('ad', $ad);
    // $row = $smarty->fetch('table_row.tpl.html');
    // $test = 'asdfasdfasdf';

    // $query = $db->query('SELECT * FROM adverts');
    // $row = '';
    // foreach ($query as $key => $value) {
    //     $smarty->assign('ad', $value);
    //     $row.=$smarty->fetch('table_row.tpl.html');
    // }
    // echo $row;
// }

// // insert advert to form
// if ( isset($_GET['id']) ) { // просмотр объявления
// 		$instance = AdsStore::instance()->getAllAdsFromDb();
//     $id = (int) $_GET['id'];
// 		var_dump($id);
// 		$smarty = new Smarty;
//     $instance->advertForForm($id); 
// }