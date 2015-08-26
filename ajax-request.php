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
    // update advert
    if (isset($_GET['id'])) {
        $post = $_POST;
        $post['id'] = (int) $_GET['id'];
        $ad=new Ads($post);
        $ad->save();
    // add advert
    } else {
        $ad=new Ads($_POST);
        $ad->save();
    }
}

// // insert advert to form
// if ( isset($_GET['id']) ) { // просмотр объявления
// 		$instance = AdsStore::instance()->getAllAdsFromDb();
//     $id = (int) $_GET['id'];
// 		var_dump($id);
// 		$smarty = new Smarty;
//     $instance->advertForForm($id); 
// }