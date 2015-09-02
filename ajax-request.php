<?php 
// $project_root=__DIR__;
// require $project_root.'/smarty-include.php';
include_once('classes.php');

// delete advert
if (isset($_GET['del'])) {
    $id = (int) $_GET['del'];
    Ads::deleteAdvert($id);
}

// if form was submitted
if (isset($_GET['formSubmit'])) {
    $ad=new Ads($_POST);
    $ad->save();
}

if (isset($_GET['tableUpdate'])) {
    global $db;

    $lastRow = $db->query('SELECT * FROM adverts ORDER BY MAX(id)');
    print_r( $lastRow );
}
// // insert advert to form
// if ( isset($_GET['id']) ) { // просмотр объявления
// 		$instance = AdsStore::instance()->getAllAdsFromDb();
//     $id = (int) $_GET['id'];
// 		var_dump($id);
// 		$smarty = new Smarty;
//     $instance->advertForForm($id); 
// }