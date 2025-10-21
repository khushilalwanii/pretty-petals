<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$userMessage = strtolower(trim($input['message']));

$responses = [
    "hi" => "hello"
    "price" => "check it out"
    "what flowers do you sell?" => "We offer roses, tulips, lilies, orchids, and more!",
    "do you deliver?" => "Yes, we deliver within a 50-mile radius of our shop.",
    "what are your hours?" => "We are open from 9 AM to 8 PM, Monday through Saturday.",
    "hello" => "Hello! How can I assist you today?",
    "bye" => "Goodbye! Have a great day!"
];

$response = "Sorry, I don't understand that. Can you rephrase?";
foreach ($responses as $question => $answer) {
    if (strpos($userMessage, $question) !== false) {
        $response = $answer;
        break;
    }
}

echo json_encode(['response' => $response]);
