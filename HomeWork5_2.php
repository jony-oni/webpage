<?php
    if(isset($_POST['y']) && strlen($_POST['y']) > 0 && isset($_POST['m']) && strlen($_POST['m']) > 0) {
        $m = $_POST["m"];
        $y = $_POST["y"];
        if(checkdate($m,1,$y)) {
            $firstweekday = getDate(mktime(0,0,0,$m,1,$y)); 
            $firstweekday = $firstweekday['wday'];
            $lastday = date("t", mktime(0,0,0,$m,1,$y)); 
            $fc = ceil(($firstweekday+$lastday)/7); 
            $count = $fc*7; 
            $j=1;
            echo "<table border='1' width=\"500\" bordercolor=\"#0000FF\">";
            echo "<tr bgcolor=\"#66FFFF\" align=\"center\"><td colspan=\"7\">". $y."년 ".$m."월 달력</td></tr>";
            echo "<tr align=\"right\" bgcolor=\"#FF99FF\"><td>일</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td><td>토</td></tr>";
            for($i=1; $i<=$count; $i++){
                if($i%7==1){
                    echo "<tr>";
                }
                echo "<td>";
                if($i>$firstweekday && $j<=$lastday){
                    echo $j;
                    $j++;
                }
                else {
                    echo "&nbsp;";
                }
                echo "</td>";
                if($i%7==0){
                    echo "</tr>";
                }
            }
            echo "</table>";
            echo "<br/>";        
        }
    }
    
    ?>