<?php
declare (strict_types = 1);

function render_template(string $template, array $data = []){
    extract($data);
    require "templates/$template.php";
}
function get_data($url){
    $result = file_get_contents($url);
    return json_decode($result, true);
}
$data = get_data(API_URL);

function get_until_message (int $days): string
{
    return match (true){
        $days === 0 => "Hoy se estrena!",
        $days === 1 => "Mañana se estrena!",
        $days < 7 => "Se estrena esta semana!",
        $days < 30 => "Se estrena este mes!",
        default => "$days dias para el estreno!"
};
}
$until_message = get_until_message($data["days_until"]);
?>