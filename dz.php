<style>
    .circle {
        float:left;
        width:50px;
        height: 50px;
        border-radius: 50%;
        background-color:blue;
    }
</style>
<?php

//dz3

for($i = 1; $i <= 10; $i++) {
    echo '<div class="circle"></div>';
}
    echo "<div></br></br></br></br></div>";

//dz4

    $binary = "110110";
    $decimal = bindec($binary);
    $hex = dechex($decimal);
    echo "<p>Number: $binary</p>" . PHP_EOL . "<p>Converted: $hex</p>" . PHP_EOL;