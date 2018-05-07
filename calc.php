<?
$percent = 10; //процентная ставка банка

$date = explode("/",$_POST["date"]); //разбиваем дату
$days = date("t", strtotime($date[2]."-".$date[1])); //находим количество дней в месяце оформления вклада

//! Я не совсем понял, что значит "daysy - количество дней в году" и предположил,
//! что это количество дней в сроке вклада
$now = time($date[2]."-".$date[1]."-".$date[0]); //находим в секундах дату оформления вклада
$year = $date[2] + $_POST["term"]; //к году оформления вклада прибавляем срок вклада
$term = strtotime($year."-05-09");
$datediff = floor(($term - $now) / (60 * 60 * 24)); //находим разницу между сроком вклада и датой оформления вклада

if($_POST["radio"] === "yes"){
  $summn = $_POST["pole1"] + ($_POST["pole1"] + $_POST["pole2"]) * $days * ($percent / $datediff);
} else
if($_POST["radio"] === "no"){
  $summn = $_POST["pole1"] + $_POST["pole1"] * $days * ($percent / $datediff);
}
echo $summn;
?>
