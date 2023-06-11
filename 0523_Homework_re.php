<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>0523_Homework</title>


    <style>
        table,th,td{
            border: 1px rgb(184, 184, 184) solid;
            text-align: center;
        }
        th{
            background-color: hwb(345 66% 0%);
            color: white;
        }
        .toppage{
            height: 40px;
        }   
        .parkimg{
            margin-bottom: 20px;
        }

        
    </style>

    <script>
        
    function displayDateTime() {
        var currentDateTime = new Date();
        var dateString = currentDateTime.toLocaleDateString();
        var timeString = currentDateTime.toLocaleTimeString();

        document.getElementById('datetime').innerHTML = "▶ 현재 시각은: " + dateString + " " + timeString + " 입니다."; 
    }

    window.onload = function() {
        displayDateTime();
    };

    function displayCustomerName() {
            var customerName = document.getElementById('name').value;
            document.getElementById('result').innerHTML =  customerName + " 고객님 감사합니다 ! " ;
        }
    </script>
</head>

<div class="parkimg">
    <img src="img/9.png" alt="놀이공원">
</div>
<form action="0523_Homework_re.php" method="post">
    <body>
    
        <div class="toppage">
            <label for="name">▶ 고객 성함</label>   
            <input type="text" id="name" name="name">    
            <input type="submit" name="calculate" value="합계">
            
        </div>
    
    
    
    
        <table style="width:1000px">
            
            <tr>
                <th>NO</th>
                <th>구분</th>
                <th colspan="2">어린이</th>
                <th colspan="2">어른</th>
                <th>비고</th>
            </tr>
        
            <tr>
                <td>1</td>
                <td>입장권</td>
                <td>7,000</td>
                <td>                
                    <input type="number" name="GeneralChild" value="0" min="0">
                </td>
                <td>10,000</td>
                <td>
                    <input type="number" name="GeneralAdult" value="0" min="0">
                </td>
                <td>입장</td>            
            </tr>
    
            <tr>
                <td>2</td>
                <td>BIG3</td>
                <td>12,000</td>
                <td>
                    <input type="number" name="ThreeRideChild" value="0" min="0">
                </td>
                <td>16,000</td>
                <td>
                    <input type="number" name="ThreeRideAdult" value="0" min="0">
                </td>
                <td>입장+놀이3종</td>            
            </tr>
    
            <tr>
                <td>3</td>
                <td>자유이용권</td>
                <td>21,000</td>
                <td>
                    <input type="number" name="DayPassChild" value="0" min="0">
                </td>
                <td>26,000</td>
                <td>
                    <input type="number" name="DayPassAdult" value="0" min="0">
                </td>
                <td>입장+놀이자유</td>            
            </tr>
    
            <tr>
                <td>4</td>
                <td>연간이용권</td>
                <td>70,000</td>
                <td>
                    <input type="number" name="AnnualPassChild" value="0" min="0">
                </td>
                <td>90,000</td>
                <td>
                    <input type="number" name="AnnualPassAdult" value="0" min="0">
                </td>
                <td>입장+놀이자유</td>            
            </tr>
        </table>
    
        <p id="datetime"></p>
        



<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $customerName = $_POST['name'];

    
    $ticketCounts = array(
        'GeneralChild' => $_POST['GeneralChild'],
        'GeneralAdult' => $_POST['GeneralAdult'],
        'ThreeRideChild' => $_POST['ThreeRideChild'],
        'ThreeRideAdult' => $_POST['ThreeRideAdult'],
        'DayPassChild' => $_POST['DayPassChild'],
        'DayPassAdult' => $_POST['DayPassAdult'],
        'AnnualPassChild' => $_POST['AnnualPassChild'],
        'AnnualPassAdult' => $_POST['AnnualPassAdult']
    );

    
    $ticketPrices = array(
        'GeneralChild' => 7000,
        'GeneralAdult' => 10000,
        'ThreeRideChild' => 12000,
        'ThreeRideAdult' => 16000,
        'DayPassChild' => 21000,
        'DayPassAdult' => 26000,
        'AnnualPassChild' => 70000,
        'AnnualPassAdult' => 90000
    );

    
    $totalAmount = 0;
    foreach ($ticketCounts as $ticketType => $count) {
        $price = $ticketPrices[$ticketType];
        $totalAmount += $price * $count;
    }
?>


<?php echo $customerName; ?> 고객님, 감사합니다! <br>
선택하신 티켓의 가격은 <?php echo $totalAmount; ?> 원입니다.

<?php
}
?>


    
</form>


</body>
</html>