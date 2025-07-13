<?php
$track = $_GET['track'] ?? 'N/A';
$sum = $_GET['sum'] ?? '0.00';
$currency = $_GET['currency'] ?? 'N/A';
$country = $_GET['country'] ?? 'N/A';

$message = "🔱 SEMANGAT 🔱\n\n🏦 : TRAFEE\n👤 : $track\n💵 : $sum\n💱 : $currency\n🌍 : $country\n\n🤑 SAT SET 🤑";

$token = '8123341796:AAEe4zydYlOpAU87635VWsT-YDtbzbLo2ok';
$chat_id = '-1002727947658';
$url = "https://api.telegram.org/bot$token/sendMessage";

$data = ['chat_id' => $chat_id, 'text' => $message];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);

echo "OK";
?>
