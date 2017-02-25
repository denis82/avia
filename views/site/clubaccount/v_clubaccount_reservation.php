<?if($errors):?>
<?foreach($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<h2>
    Бронирование
</h2>
<fieldset id="innerfieldset2">
    <legend>Список по периодам</legend>
    
           <?=Form::open()?> 
            <table  width="780">
                
                    <tr>
                        <td><?=Form::label('resourse', 'Название ресурса')?></br>
                            <SELECT NAME="resourse">
                                <OPTION VALUE="">-
                         <?foreach($resurse_name as $resurse):?>
                            
                            <OPTION VALUE="<?=$resurse->id?>"><?=$resurse->plane?>
                        <?endforeach?> 
                </td>
                        <td><?=Form::label('name_user', 'Участник клуба')?></br>
                
                        <SELECT NAME="name_user">
                            <OPTION VALUE="">-
                         <?foreach($user_name as $user):?>
                            
                            <OPTION VALUE="<?=$user->id?>"><?=$user->username?>
                        <?endforeach?>   
                          
                        </SELECT></td>
                        <td><?=Form::label('filter_from', 'Даты с  ')?>
                            <?=Form::input('filter_from', '',array('type'=>'text','class'=>'from'))?></td>
                            <td><?=Form::label('filter_to', '  по  ')?>
                            <?=Form::input('filter_to', '',array('type'=>'text','class'=>'to'))?></td>
                    </tr>
                
            </table>
    <?=Form::submit('user_sort','Поиск')?>
     <?=Form::close()?>
          
                
        
    <table width="780" class="table_resourse" >
        <thead>
            <tr class='head_color'>
                <th width="100" class='head_color'>Ник</th>
                <th width="80" class='head_color'>Дата вылета</th>
                <th width="80" class='head_color'>Время вылета</th>
                <th width="80" class='head_color'>Дата прилета </th>
                <th width="80" class='head_color'>Время прилета </th>
                <th>Пилот</th>
                <th>Воз. судно</th>
                <th width="32">Удл.</th>
                <th width="32">Сохр.</th>
                <th width="32">Пров.</th>
            </tr>
        </thead>
        <tbody>
           <?if(isset($small_array)):?>
           <? foreach ($small_array as $v):?> 
                
               
           <tr class="select_tr_reserv" abbr="<?=$v[6]?>">
                <td ><?=$v[0]?></td>
                <td class="select_for_edit" abbr="<?=$v[6]?>"><?=Form::input('date_start',$v[3], array('type'=>'text','class'=>'simple_datepicker','size'=>8,'abbr'=>'d_s'.$v[6]))?></td>
                <td class="select_for_edit" abbr="<?=$v[6]?>"><?=Form::input('time_start',$v[2], array('size'=>6,'class'=>'block_change','abbr'=>'t_s'.$v[6]))?></td>
                <td class="select_for_edit" abbr="<?=$v[6]?>"><?=Form::input('date_finish',$v[1], array('type'=>'text','class'=>'simple_datepicker','size'=>8,'abbr'=>'d_f'.$v[6]))?></td>
                <td class="select_for_edit" abbr="<?=$v[6]?>"><?=Form::input('time_finish',$v[4], array('size'=>6,'class'=>'block_change','abbr'=>'t_f'.$v[6]))?></td>
                <td class="select_for_edit" abbr="<?=$v[6]?>">jhlkhl</td>
                <td class="select_for_edit" abbr="<?=$v[6]?>"><?=$v[5]?></td>
                <td><?=HTML::image("media/img/delete.png",array('abbr'=>$v[6],'class'=>'delete_rserv'))?></td> 
                <td class="mark_sob"><?=HTML::image("media/img/Save_24x24.png",array('abbr'=>$v[6],'class'=>'edit_rserv_data'))?></td>
                <td width="32"><?=HTML::image("media/img/Check_24x24.png",array('abbr'=>'check'.$v[6],'class'=>'check_reserv'.$v[7]))?></td>
                
                </tr>
            
                <?endforeach?>
             <?endif?>
             
            
            
        </tbody>
    </table>

</fieldset>


