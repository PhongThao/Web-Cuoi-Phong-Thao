<?php 
// if(!isset($_POST['name']) && !isset($_POST['email'])) {
//     exit(json_encode(array(
//         'success' => false,
//         'msg' => 'Bạn chưa nhập thông tin!!'
//     )));
// }
// $name = $_POST['name'];
// $email = $_POST['email'];
// $apiToken = '5720687237:AAHRglfkYyAr2zEl1gO76F4RYfOcHSm3nH8';
// $chat_id = '1243253726';
// // if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $text = [
//         'text' => 'Tin nhắn mới: <b>' . $name . '</b> Nội dung là: <b>' . $email .'</b>',
//         'parse_mode' => 'html'
//     ];
//     $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&" . http_build_query($text));
//     exit(json_encode(array(
//         'success' => true,
//         'msg' => 'Cảm ơn bạn rất nhiều'
//     )));
// }
// if(strlen($email) == 10) {
//     $text = [
//         'text' => 'Có bạn mới đăng ký: <b>' . $name . '</b> SĐT là: <b>' . $email .'</b>',
//         'parse_mode' => 'html'
//     ];
//     $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&" . http_build_query($text));
//     exit(json_encode(array(
//         'success' => true,
//         'msg' => 'Cảm ơn bạn rất nhiều'
//     )));
// }
// exit(json_encode(array(
//     'success' => false,
//     'msg' => ''
// )));

?>