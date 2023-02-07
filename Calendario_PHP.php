<?php
    $month = date('n');
    $year = date('Y');
    $first_day = mktime(0,0,0,$month, 1, $year);
    $title = date('F', $first_day);
              switch ($title) {
                case "January":
                  $title = "Enero";
                  break;
                case "February":
                  $title = "Febrero";
                  break;
                case "03":
                  $title = "March";
                  break;
                case "04":
                  $title = "April";
                  break;
                case "05":
                  $title = "May";
                  break;
                case "06":
                  $title = "June";
                  break;
                  case "07":
                  $title = "July";
                  break;
                    case "08":
                        $title = "August";
                        break;
                        case "09":
                            $title = "Septiembre";
                            break;
                            case "10":
                                $title = "Octuber";
                                break;
                                case "11":
                                    $title = "November";
                                    break;
                                    case "12":
                                        $title = "December";
                                        break;
              }
    $day_of_week = date('D', $first_day);
    $today = date('j');
    switch($day_of_week){
        case "Sun": $blank = 0; break;
        case "Mon": $blank = 1; break;
        case "Tue": $blank = 2; break;
        case "Wed": $blank = 3; break;
        case "Thu": $blank = 4; break;
        case "Fri": $blank = 5; break;
        case "Sat": $blank = 6; break;
    }
    $days_in_month = cal_days_in_month(0, $month, $year);
    echo "<table  width=794>";
    echo "<tr><th colspan=60> $title $year </th></tr>";
    echo "<tr><td width=42>Domingo</td><td width=42>Lunes</td><td width=42>Martes</td><td width=42>Miercoles</td><td width=42>Jueves</td><td width=42>Viernes</td><td width=42>Sábado</td></tr>";
    $day_count = 1;
    echo "<tr>";
    
    while ( $blank > 0 )
    {
        echo "<td></td>";
        $blank = $blank-1;
        $day_count++;
    }
    $day_num = 1;
    while ( $day_num <= $days_in_month )
    {
        if($day_num == $today){
            echo "<td class='today'> $day_num </td>";
        }else{
            echo "<td> $day_num </td>";
        }
        $day_num++;
        $day_count++;
        if ($day_count > 7)
        {
            echo "</tr><tr>";
            $day_count = 1;
        }
    }
    while ( $day_count >1 && $day_count <=7 )
    {
        echo "<td> </td>";
        $day_count++;
    }
    echo "</tr></table>";
    echo "<br>";
    ?>
    <style>
      .today{
         background-color: yellow;
      }
      table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th {
  text-align:center;
  background-color: #dddddd;
}
</style>