<?php 


// se existe evento RETORNA 1, SENAO EXISTE RETORNA 0
// horario 2021-05-10 07:00:00
function verifica_evento_agenda($con, $horario){
  /*   $sql = "SELECT count(*) as tem_evento FROM events
    WHERE start = '$horario'"; */
  
    $sql = "SELECT count(*) as tem_evento FROM events
    WHERE start <= '$horario' and end >= '$horario'";

     $result = mysqli_query($con,$sql); 
     while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
     $resp = $row['tem_evento'];                           
     endwhile;

     if ($resp != '0'){
        $sql = "SELECT * FROM events WHERE start <= '$horario' and end >= '$horario'";
        
        $result = mysqli_query($con,$sql);

        $arrEvento = array();
        $arrEvento[] = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        return $arrEvento;
     }
     else {
        return $resp;
     }
       
  }


/*   
function TimeConvertionLocalHour($UTC_Time) {
    date_default_timezone_set('UTC');
    $sTime = date("Y-m-d h:i:sa");
    $ts3 = strtotime(date("G:i:s"))-strtotime($sTime); 
    $utc = explode(" ",$UTC_Time);
    $time = strtotime($utc[1]);
    date_default_timezone_set("America/Sao_Paulo");
    $time += $ts3;  // Add the difference
    return $utc[0]." ".date("H:i:s", $time);
  } */


    
function TimeConvertionLocalHour($UTC_Time) {
    date_default_timezone_set('UTC');
    $sTime = date("Y-m-d h:i:sa");
    $ts3 = strtotime(date("G:i:s"))-strtotime($sTime); 
    $utc = explode(" ",$UTC_Time);
    $time = strtotime($utc[1]);
    date_default_timezone_set("America/Sao_Paulo");
    $time += $ts3;  // Add the difference
    return $utc[0]." ".date("H:i:s", $time);
  }


  function beep ($int_beeps = 1) {
    $string_beeps='';
    for ($i = 0; $i < $int_beeps; $i++): $string_beeps .= "\x07"; endfor;
    isset ($_SERVER['SERVER_PROTOCOL']) ? false : print $string_beeps;
  }

  function cli_beep() {
    fprintf ( STDOUT, "%s", "\x07" );
}