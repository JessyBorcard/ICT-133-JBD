<?php
/**
 * Created by PhpStorm
 * Project's name :advanced table	
 * Use :show an advanced table
 * User : Jessy.BORCARD
 * Date : 25.11.2019
 * Time : 14:33
 *
 *
 */
echo '<style>ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

/* Month header */
.month {
  padding: 70px 25px;
 
  background: #1abc9c;
  text-align: center;
}

/* Month list */
.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

/* Previous button inside month header */
.month .prev {
  float: left;
  padding-top: 10px;
}

/* Next button */
.month .next {
  float: right;
  padding-top: 10px;
}

/* Weekdays (Mon-Sun) */
.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color:#ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

/* Days (1-31) */
.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

/* Highlight the "current" day */
.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}</style>';


$currentmonthint = idate("m");
$montharr = array();

for($m = 1; $m <= 12; $m++){

$montharr[$m] = date("F", mktime(0,0,0,$m));
}

$currentmonth = date("F");
$month = date("F", mktime(0,0,0,$currentmonthint));
$currentyear = idate("Y");
$maxdayinmonth = idate("t");
$currentday = date("d");
$daysweek =array();
for ($i = 0; $i<= 7; $i++){
    $row[$i] = array(date("D", mktime(0,0,0,$i)));
    if($i == 7){
        break;
    }
    $daysweek[$i] =  date("D", mktime(0,0,0,$currentmonthint, $i));


}
for ($i = 0; $i<= $maxdayinmonth; $i++){

    if($i == 0){
        $days[$i] =  "";
        $i++;
    }

    $days[$i] =  $i;


}


$monthdisplay = $currentmonth;
$yeardisplay = $currentyear;


$monthdisplay  = @$_POST['month'];

$yeardisplay = @$_POST["year"];
if(isset($monthdisplay)){
    $monthdisplay  = @$_POST['month'];
}else{
    $monthdisplay  = 1;
}
if(isset($yeardisplay)){
    $yeardisplay  = @$_POST['year'];
}else{
    $yeardisplay  = 1 ;
}
echo"<div class='month'>      <ul>".
    "<a>".'<li class="prev">&#10094;</li></a>
    <a><li class="next">&#10095;</li></a>
    <li>'.  $montharr[$monthdisplay] .  '<?php ?>'
      .'</php><br>
      <span style="font-size:18px">'. $currentyear.'</span>
    </li>
  </ul>
</div>
';




if(isset($monthdisplay)){

}else{

}
echo '<ul class="weekdays">';
foreach ($daysweek as  $element){
    echo '<li>' . $element . '</li>';
}

echo '</ul>';
echo '<ul class="days">';
foreach ($days as  $element){
 if($currentday == $element){
     echo '<li>'. '<span class="active">' . $element . '</span>' . '</li>';
 }else {
     echo '<li>' . $element . '</li>';
 }
}

echo '</ul>';




?>
