<?php
/* 
    align : string(6) "center"
    alignText : string(6) "center"
    alignContent : string(6) "center"
    fullHeight : bool(false)

    anchor : string(3) "neo"
    className : string(5) "class"
    textColor : string(9) "vivid-red"
    backgroundColor : string(4) "blue"
    id : string(42) "block_06771c0b-33a6-4c2d-85e7-78b9c231c229"
    full_height : bool(false)
    align_text : string(6) "center"
    align_content : string(6) "center"
    style : array(3) { ["typography"]=> array(1) { ["lineHeight"]=> string(3) "1.5" } ["spacing"]=> array(3) { ["padding"]=> array(4) { ["top"]=> string(21) "var:preset|spacing|30" ["bottom"]=> string(21) "var:preset|spacing|30" ["left"]=> string(21) "var:preset|spacing|30" ["right"]=> string(21) "var:preset|spacing|30" } ["margin"]=> array(4) { ["right"]=> string(21) "var:preset|spacing|30" ["left"]=> string(21) "var:preset|spacing|30" ["top"]=> string(21) "var:preset|spacing|30" ["bottom"]=> string(21) "var:preset|spacing|30" } ["blockGap"]=> string(21) "var:preset|spacing|30" } ["dimensions"]=> array(1) { ["minHeight"]=> string(5) "230px" } }

    $style = array(
    "typography" => array(
        "lineHeight" => "1.5"
    ),
    "spacing" => array(
        "padding" => array(
            "top" => "var:preset|spacing|30",
            "bottom" => "var:preset|spacing|30",
            "left" => "var:preset|spacing|30",
            "right" => "var:preset|spacing|30"
        ),
        "margin" => array(
            "right" => "var:preset|spacing|30",
            "left" => "var:preset|spacing|30",
            "top" => "var:preset|spacing|30",
            "bottom" => "var:preset|spacing|30"
        ),
        "blockGap" => "var:preset|spacing|30"
    ),
    "dimensions" => array(
        "minHeight" => "230px"
    )
);

$padding = $style["spacing"]["padding"];
$top = $padding["top"];
$bottom = $padding["bottom"];
$left = $padding["left"];
$right = $padding["right"];

echo "Top: " . $top . "<br>";
echo "Bottom: " . $bottom . "<br>";
echo "Left: " . $left . "<br>";
echo "Right: " . $right . "<br>";

$padding = $style["spacing"]["padding"];
$top = extractNumber($padding["top"]);
$bottom = extractNumber($padding["bottom"]);
$left = extractNumber($padding["left"]);
$right = extractNumber($padding["right"]);

function extractNumber($string) {
    $matches = [];
    preg_match('/\d+/', $string, $matches);
    if (count($matches) > 0) {
        return $matches[0];
    }
    return null;
}

echo "Top: " . $top . "<br>";
echo "Bottom: " . $bottom . "<br>";
echo "Left: " . $left . "<br>";
echo "Right: " . $right . "<br>";
    
 */

?>
<div class="wep_block">
    <a href="" class="wep_button wep_button--primary">Nút bấm</a>
</div>