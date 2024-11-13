<style>h1{background-color: #036;color: #fff;}h2{background-color: yellowgreen;color: palegreen;}h3{background-color: #DEDEDE;color: #141414;}</style>
<?php 

    print("
        <form action=\"./gacha.php\" method=\"post\">
            1回
            <input type=\"text\" name=\"usestone\" id=\"\">個消費で<br><br>
            確率
            <input type=\"text\" name=\"kakuritu\" id=\"\">%の<br><br>
            <input type=\"number\" name=\"ren\" id=\"\">連を<br><br>
            <input type=\"number\" name=\"kai\" id=\"\">回<br><br>回す<br><br>
            <input type=\"submit\" value=\"send\">
        </form>
    ");

    $kakuritu = htmlspecialchars($_POST["kakuritu"],ENT_QUOTES);
    $notpercent = $kakuritu / 100;print($notpercent."<br>");
    $min = 1;
    $max = ceil(1/$notpercent-1);print($max."<br>");

    $kai = htmlspecialchars($_POST["kai"],ENT_QUOTES);
    $ren = htmlspecialchars($_POST["ren"],ENT_QUOTES);
    $gacha = $kai * $ren;

    $onceusestone = htmlspecialchars( $_POST["usestone"],ENT_QUOTES );
    
    print("確率{$kakuritu}%を{$ren}連{$kai}回 回す<br>1回○○を{$onceusestone}使用<hr>");

    for ( $i = 1; $i<= $gacha; $i++ ) {
        $gacharesult = rand( $min , $max );
        if ( $gacharesult <= 500 ) {
            print("<hr><h1>\"A\"get ↓ </h1><hr>");
        }elseif( $gacharesult >= 501 && $gacharesult <= 2833 ) {
            print("<hr><h2>\"B\"get ↓ </h2><hr>");
        }else{
            print("<hr><h3>\"C\"get ↓ </h3><hr>");
        }
        print("{$ren}連 を {$kai}回 {$i}連目 {$gacharesult} <br>");
    }
    if ( $ren >= 11 ) {
        $usedstone = ( ( $ren -1 ) ) * $kai * $onceusestone ;
    }else{
        $usedstone = $ren * $kai * $onceusestone ;
    }
    print("<hr>{$usedstone}個消費");
?> 