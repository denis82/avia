<h2>
    Резерв день
</h2>
<?= Form::open(Kohana::$config->load('conf_route.menu_dayreserv')) ?>
<table class="tabletime" border="2">
 
        <tr>
            <td class="th" width="300"><?=Kohana::$config->load('week.'.$day_of_week)?>,<?=$data_resurse_array?></td>
            <td width="300"><?=Form::input("dayreserv", $select_date, array('class' => 'simple_datepicker', 'style'=>'border:0;')) ?></td>
        </tr>
        <tr>
            <td width="300"><?=$plane_name->plane?></td>
            <td width="300">
                <SELECT NAME="plane_dayreserv" >
                     <OPTION VALUE=""><?=$select_resourse;?>
                     <?foreach($planeArray as $planeArray):?>
                     <OPTION VALUE="<?=$planeArray->id?>"><?=$planeArray->plane?>
                     <?endforeach?>
                     <?= Form::submit("find_resourse", "Найти") ?>
                     <?= Form::close() ?>
           </td>
        </tr>

</table>

<?php
function th_res($col,$or)
{
    if(isset($col) and $col!=null){
    for($k=0;$k<$col;$k++)
                {echo'<th width="100" class="th" colspan="2">'.$or.':00<div class="bone"></th>';
                $or+=1;
                }
    }
    else{
        for($k=0;$k<6;$k++)
                {echo'<th width="100" class="th" colspan="2">'.$or.':00<div class="bone"></th>';
                $or+=1;
                }
    }
}
function td_res($col,$h_h,$arr_reserv_time,$arr_reserv_time_self)
{
    if(isset($col) and $col!=null){
    for($k=0;$k<$col*2;$k++)
                {
                    $time_h_h = $h_h*10;
                if(in_array($h_h, $arr_reserv_time))
                {
                    echo'<td class="pr_square" id="'.$time_h_h.'"><div class="bone_h"><input type="checkbox" id ="'.$time_h_h.'_box" name ="'.$h_h*(10).'" class="checkbox_dayreserv"></td>';
                }
                elseif(in_array($h_h, $arr_reserv_time_self))
                {
                    echo'<td class="self_square" id="'.$time_h_h.'"><div class="bone_h"><input type="checkbox" id ="'.$time_h_h.'_box" name ="'.$h_h*(10).'" class="checkbox_dayreserv"></td>';
                }
                else 
                {
                    echo'<td class="square" id="'.$time_h_h.'"><div class="bone_h"><input type="checkbox" id = "'.$time_h_h.'_box" name = "'.$h_h*(10).'" class="checkbox_dayreserv"></td>';
                }
                $h_h+=0.5;
                }
                
    }
    else{
        for($k=0;$k<12;$k++)
                {
                $time_h_h = $h_h*10;
                if(in_array($h_h, $arr_reserv_time))
                {
                    echo'<td class="pr_square" id="'.$time_h_h.'"><input type="checkbox" id ="'.$time_h_h.'_box" name ="'.$h_h*(10).'" class="checkbox_dayreserv"><div class="bone_h"></td>';
                }
                elseif(in_array($h_h, $arr_reserv_time_self))
                {
                    echo'<td class="self_square" id="'.$time_h_h.'"><input type="checkbox" id ="'.$time_h_h.'_box" name ="'.$h_h*(10).'" class="checkbox_dayreserv"><div class="bone_h"></td>';
                }
                else 
                {
                    echo'<td class="square" id="'.$time_h_h.'"><input type="checkbox" id = "'.$time_h_h.'_box" name = "'.$h_h*(10).'" class="checkbox_dayreserv"><div class="bone_h"></td>';
                }
                $h_h+=0.5;
                }
    }
}
$d=$end-$origin+1; // получаем количество ячеек
$i=0;
$half_huor = $origin*1;
echo '<form name="select_time_day" action="dayreserv" method="POST">';
while($i<$d){

    {
    echo'<table border="2"  class="tabletime">
    <thead>
        <tr>';
            if($d-$i==1){th_res(1,$origin);}
            if($d-$i==2){th_res(2,$origin);}
            if($d-$i==3){th_res(3,$origin);}
            if($d-$i==4){th_res(4,$origin);}
            if($d-$i==5){th_res(5,$origin);}
            if($d-$i>=6){th_res(0,$origin); $origin+=6;}
     echo  ' </tr>
    </thead>
    <tbody>
        <tr>';
            if($d-$i==1){td_res(1,$half_huor,$arr_reserv_time,$arr_reserv_time_self);}
            if($d-$i==2){td_res(2,$half_huor,$arr_reserv_time,$arr_reserv_time_self);}
            if($d-$i==3){td_res(3,$half_huor,$arr_reserv_time,$arr_reserv_time_self);}
            if($d-$i==4){td_res(4,$half_huor,$arr_reserv_time,$arr_reserv_time_self);}
            if($d-$i==5){td_res(5,$half_huor,$arr_reserv_time,$arr_reserv_time_self);}
            if($d-$i>=6){td_res(0,$half_huor,$arr_reserv_time,$arr_reserv_time_self);}
    echo    '</tr>
        
    </tbody>
</table>';
    }

$i+=6;
$half_huor+=6;
}

?>
<?if(isset($id) and isset($id_plane)):?>
<?=Form::input('num_res', $id, array('class' => 'hide_data', 'id'=>'num_res')) ?>
<?=Form::input("num_plane", $id_plane, array('class' => 'hide_data', 'id'=>'num_plane')) ?>
<?=Form::input("date_to_reserv", $data_resurse_array, array('class' => 'hide_data', 'id'=>'date_to_reserv')) ?>

<?endif?>
<input type="submit" name="reserv_hours" value="Бронь" id ="knopka"/></form>


<p>Список забронированых полетов на день</p>
<table class="table_resourse" width="500" border="1">
    <thead>
        <tr>
            <th>Имя</th>
            <th>Время полета</th>
        </tr>
    </thead>
    <tbody>
        <?foreach($users_reserv as $user_reserv):?>
        <tr>
            <td><?=HTML::anchor(Kohana::$config->load('conf_route.menu_chat_us').$user_reserv->id_user, $user_reserv->user->username)?></td>
            <td><?=$user_reserv->start_time?>-<?=$user_reserv->finish_time?></td>
        </tr>
      <?endforeach?>
    </tbody>
</table>


