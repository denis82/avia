<h2>Резерв год</h2>

<fieldset>
    <legend>Данные воздушного судна</legend>
   <?=Form::open(Kohana::$config->load('conf_route.menu_yearreserv'))?>

<table  width="600" cellspacing="5">
        
            <tr>
                <td><?=Form::label("plane_dayreserv",'Выбор ресурса')?></td>
                <td><SELECT NAME="plane_dayreserv">
                                <OPTION VALUE="">-
                         <?foreach($planeArray as $planeArray):?>
                            
                            <OPTION VALUE="<?=$planeArray->id?>"><?=$planeArray->plane?>
                        <?endforeach?> 
                </td>
                <td><?=Form::submit('yearreserv','Найти')?></td>
            </tr>
            <tr>
                <td><?=Form::label("year",'Выбор года')?></td>
                <td><?=Form::select('year',Kohana::$config->load('datepicker.year'))?></td>
                <td></td>
            </tr>
            
            
        </tbody>
    </table>




<?=Form::close()?>

</fieldset>

<?php $id_for_days = 1; ?>
<?  foreach($month_num as $key =>$month_num):?>

        
<table border="1" id="table_month">
         <tr>
             <td colspan="7" id="head_month"><h1><div id="datepker_month_header"><?=Kohana::$config->load('month.'.$key.'')?>/<?=$year?>/</div></h1></td>
            
        </tr>
         <tr id="underhead_month">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="month_th_light">понед</td>
            <td class="month_th_dark">вторник</td>
            <td class="month_th_light">среда</td>
            <td class="month_th_dark">четверг</td>
            <td class="month_th_light">пятница</td>
            <td class="month_th_dark">суббота</td>
            <td class="month_th_light">воскр</td>
        </tr>
 <?php 
    
   
    $i=1;// число месяца
    $x=1;
    while($i<=$month_num['sum_day']){
        echo "<tr>";
            while($x <= 7){
                if($x < $month_num['num_day'] AND $i==1){
                    echo "<td ><div class='buisetable'></div></td>";
                }
                else{
                    if($i<=$month_num['sum_day']){
                   echo "<td class='datenum' id='".$id_for_days."'><div class='buisetable'></div><table border='0' class='datepick'>";
                       
                       $hours = (count($origin_end_array)/2)+$origin;
                       
                       $s=$origin;
                       
                       while($s <= $hours){
                           
                       if(isset($array_reserv_all_month[$i][$s]) and $array_reserv_all_month[$i][$s]!= null){
                           
                           echo "<tr><td class='slim_b'></td></tr>";
                       }else{
                       echo    "<tr><td class='slim'></td></tr>";}
                       $s+=0.5;
                       }
                        
                              echo    "</table>".$i."</td>";}
                    else{echo "<td><div class='buisetable'></div></td>";}
                   $i++;
                  
                }
                $x++;
                
            }
            $x=1;
        echo "</tr>";
        //$i++;
    }
    
    ?> 
    
        
     
</table>
</br></br>
<?endforeach?>