
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
    
           <?=Form::open(Kohana::$config->load('conf_route.menu_reserv'))?> 
            <table  width="780">
                
                    <tr>
                        <td><?=Form::label('resourse', 'Название ресурса')?></br>
                            <SELECT NAME="resourse">
                                <OPTION VALUE="">-
                         <?foreach($resurse_name as $resurse):?>
                            
                            <OPTION VALUE="<?=$resurse->id?>"><?=$resurse->plane?>
                        <?endforeach?> </SELECT>
                </td>
                        
                        <td><?=Form::label('filter_from', 'Даты с  ')?>
                            <?=Form::input('filter_from', '',array('type'=>'text','class'=>'from'))?></td>
                            <td><?=Form::label('filter_to', '  по  ')?>
                            <?=Form::input('filter_to', '',array('type'=>'text','class'=>'to'))?></td>
                    </tr>
                
            </table>
    <?=Form::submit('user_sort','Поиск')?>
     <?=Form::close()?>
          
<?if($warning):?>
<div class="warning">*<?=$warning?></div>
<?endif?>                
   
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
           <?if(isset($result_sort)):?>
           <? foreach ($result_sort as $result_sort):?> 
                
               
           <tr class="select_tr_reserv" abbr="<?=$result_sort->order_uniq?>">
                <td ><?=$result_sort->user->username?></td>
                <td class="select_for_edit" abbr="<?=$result_sort->order_uniq?>"><?=Form::input('date_start',$result_sort->date_finish, array('type'=>'text','class'=>'simple_datepicker','size'=>8,'abbr'=>'d_s'.$result_sort->order_uniq))?></td>
                <td class="select_for_edit" abbr="<?=$result_sort->order_uniq?>"><?=Form::input('time_start',$result_sort->start_time, array('size'=>6,'class'=>'block_change','abbr'=>'t_s'.$result_sort->order_uniq))?></td>
                <td class="select_for_edit" abbr="<?=$result_sort->order_uniq?>"><?=Form::input('date_finish',$result_sort->date_reserv, array('type'=>'text','class'=>'simple_datepicker','size'=>8,'abbr'=>'d_f'.$result_sort->order_uniq))?></td>
                <td class="select_for_edit" abbr="<?=$result_sort->order_uniq?>"><?=Form::input('time_finish',$result_sort->finish_time, array('size'=>6,'class'=>'block_change','abbr'=>'t_f'.$result_sort->order_uniq))?></td>
                <td class="select_for_edit" abbr="<?=$result_sort->order_uniq?>">jhlkhl</td>
                <td class="select_for_edit" abbr="<?=$result_sort->order_uniq?>"><?=$result_sort->plane->plane?></td>
                <td><?=HTML::image("media/img/delete.png",array('abbr'=>$result_sort->order_uniq,'class'=>'delete_rserv'))?></td> 
                <td class="mark_sob"><?=HTML::image("media/img/Save_24x24.png",array('abbr'=>$result_sort->order_uniq,'class'=>'edit_rserv_data'))?></td>
                <td width="32"><?=HTML::image("media/img/Check_24x24.png",array('abbr'=>'check'.$result_sort->order_uniq,'class'=>'check_reserv'.$result_sort->status))?></td>
                
                </tr>
            
                <?endforeach?>
             <?endif?>
             
            
            
        </tbody>
    </table>

</fieldset>



