<?php require_once('config.php');
    $url = 'https://fcm.googleapis.com/fcm/send';

    $api_key = 'BDAIQOWuKYroePobqhvpEJKBZcbETGfaldJkyOvZvYYqqhQUnIB9ZDseyAFbMlObLNaJ4jpzYB1gXK3JrfiXtrI';
    $msg=[
        'title'=>'रिजल्ट - Indraprastha Satta',
        'body'=>'आज का  रिजल्ट  आ चुका है',
        'icon'=>'favicon.png',
        'image'=>'https://indraprasthasatta.com/assets/images/favicon.png',
        'click_action'=>'https://indraprasthasatta.com/#result'
        ];
    $fields = array (
        'registration_ids' => $users,
        'data' => $msg
    );

    //header includes Content type and api key
    $headers = array(
        'Content-Type:application/json',
        'Authorization:key='.$api_key
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);
    //dd('Firebase',$result);
    return $result;
?>