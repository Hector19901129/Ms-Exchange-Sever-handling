<?php

include "init.php";

$ec = new ExchangeClient();
$ec->init("bsolidario\Geovanny", "Solidario2018");
$messages = $ec->get_messages($limit = 50, $onlyunread = false, $folder = "inbox", $folderIdIsDistinguishedFolderId = true);

$display = "<table style='border: 2px solid black;'>";

foreach($messages as $message){

    $display .= "<tr style='border: 2px solid black;'><td style='border: 2px solid black;'>". $message->subject . "</td><td style='border: 2px solid black;'>". $message->time_sent. "</td><td style='border: 2px solid black;'>". $message->bodytext. "</td></tr>";
}

$display .= "</table>";
echo($display);
?>