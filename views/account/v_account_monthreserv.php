
<h2>Резерв месяц</h2>
<fieldset id="innerfieldset2">
    <legend>Данные воздушного судна</legend>
   <?=Form::open(Kohana::$config->load('conf_route.menu_monthreserv'))?>

<table  width="600" cellspacing="5">     
            <tr>
                <td><?=Form::label("plane_dayreserv",'Выбор ресурса')?></td>
                <td><SELECT NAME="plane_dayreserv" VALUE="<?=$current_plane->plane?>">
                     <?foreach($planeArray as $planeArray):?>
                     <OPTION VALUE="<?=$planeArray->id?>"><?=$planeArray->plane?>
                     <?endforeach?></td>
                <td><?=Form::submit('monthreserv','Найти')?></td>
            </tr>
            <tr>
                <td><?=Form::label("month",'Выбор месяца/года')?></td>
                <td><?=Form::select('month',Kohana::$config->load('datepicker.month'))?>&nbsp;&nbsp;
                    <SELECT NAME="year" VALUE="<?=date("Y")?>">
                               
                                    <?php (int)$date = date("Y");
                                    $x = ($date*1)+10;
                                    while($date <= $x)
                                    {
                                        echo '<OPTION VALUE="'.$date.'">'.$date;
                                        $date++;
                                    }?>
                             </SELECT></td>
                <?=Form::close()?>
                <td><input id ="knopka_month_reserv" type="button" value="Бронь" /></td>
            </tr>
            
            
        </tbody>
    </table>


</fieldset>

<table border="1" id="table_month">
         <tr>
             <td colspan="7" id="head_month"><h1><div id="datepker_month_header"><?=Kohana::$config->load('month.'.$month.'')?>/<?=$year?>/</div></h1></td>
            
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
    while($i<=$sum_day) // прокрутка всего месяца
    {
        echo "<tr>";
            while($x <= 7) // прокрутка недели
            {
                if($x < $num_day AND $i==1) // если месяц начиается не с поедельника
                {
                    echo "<td ><div class='buisetable'></div></td>";
                }
                else 
                {
                    if($i<=$sum_day) 
                    {
                        if(in_array ($i,$array_busy_day)) // если день зарезервирован
                        {
                            echo "<td class='datebusy' id='".$i."><div class='buisetable'></div><table border='0' class='datepick'>";
                        }
                        else
                        {
                            echo "<td class='datenum' id='".$i."'><div class='buisetable'></div><table border='0' class='datepick'>";
                        }
                        
                       
                       $hours = (count($origin_end_array)/2)+$origin;
                       $s=$origin;
                       
                       while($s <= $hours)
                       {
                            
                             if(isset($array_reserv_all_month_self[$i][$s]) and $array_reserv_all_month_self[$i][$s]!= null)
                            {
                                echo "<tr><td class='slim_b_self'></td></tr>";
                            }
                           
                            elseif(isset($array_reserv_all_month[$i][$s]) and $array_reserv_all_month[$i][$s]!= null)
                            {
                                echo "<tr><td class='slim_b'></td></tr>";
                            }
                          
                            else
                            {
                                echo    "<tr><td class='slim'></td></tr>";
                                
                            }
                                $s+=0.5;
                        }
                        
                              echo    "</table>".$i."</td>";
                              
                       }
                       else{echo "<td><div class='buisetable'></div></td>";}
                       $i++;
                }
                $x++;
                    
            }
            $x=1;
        echo "</tr>";
        
      
    }
    ?>  
</table>



<p>Список забронированых полетов на день</p>
<table class="table_resourse" width="500" border="1">
    <thead>
        <tr>
            <th>Имя</th>
            <th>Время вылета</th>
            <th>Дата вылета</th>
            <th>Время прилета</th>
            <th>Дата прилета</th>
        </tr>
    </thead>
    <tbody>
        <?foreach($users_reserv as $user_reserv):?>
        <tr>
            <td><?=HTML::anchor(Kohana::$config->load('conf_route.menu_attendance_us').$user_reserv->id_user, $user_reserv->user->username)?></td>
            <td><?=$user_reserv->start_time?></td>
            <td><?=$user_reserv->date_finish?></td>
            <td><?=$user_reserv->finish_time?></td>
            <td><?=$user_reserv->date_reserv?></td>
        </tr>
      <?endforeach?>
    </tbody>
</table>
<p class="hide_data" id="month_for_monthreserv"><?=$month;?></p>
<p class="hide_data" id="yaer_for_monthreserv"><?=$year;?></p>
<p class="hide_data" id="id_plane_for_monthreserv"><?=$id_plane;?></p>
<p class="hide_data" id="num_resmonth"><?=$id;?></p>
<p class="hide_data" id="origin_for_monthreserv"><?=$origin;?></p>
<p class="hide_data" id="end_for_monthreserv"><?=$end;?></p>
<p class="hide_data" id="id_club_for_monthreserv"><?=$id_club;?></p>
<p  id="test"></p>