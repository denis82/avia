<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><div class="error_text"><?=$error?></div> 
</div>
<?endforeach?>
<?endif?>
<table width="630" >
        <tr>
            <td>Личный кабинет администратора</td>
            <td class ="align_text"><?=$info['sur_name']?><?=$info['name']?>(<?=$user->username?>)</td>
        </tr>
        <tr>
            <td></td>
            <td class="redactor_personal_align"></td>
            
        </tr>
</table>

<?=Form::open (Kohana::$config->load('conf_route.clubaccount'),array('enctype'=>'multipart/form-data'))?>
<table width="630">
        <tr>
            <td width="200">
               <div id="space_admin_image"><?=HTML::image(Kohana::$config->load('foto_route.foto_ava').$user->img)?></div>
            </td>
            <td>
                <div class="admin_panel"><?=Form::label('name', 'Имя')?></div>
    <div><?=Form::input('name',$info['name'], array('size' => 30))?></div>
    </br>
     <div class="admin_panel"><?=Form::label('sur_name', 'Фамилия')?></div>
    
       <div><?=Form::input('sur_name',$info['sur_name'], array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('father_name', 'Отчество')?></div>
    
    <div><?=Form::input('father_name',$info['father_name'], array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('born_date', 'Дата рождения')?></div>
    <div><?=Form::input('born_date', $info['born_date'] , array('size' => 30,'class'=>'simple_datepicker'))?></div>
    
             </br>
             <div class="admin_panel"><?=Form::label('fly_since', 'Летаю с')?></div>
             <div><SELECT NAME="fly_since" VALUE="<?=$info['fly_since']?>">
                               
                                    <?php (int)$date = date("Y");
                                    $x = ($date*1)-50;
                                    while($x <= $date)
                                    {
                                        echo '<OPTION VALUE="'.$x.'">'.$x;
                                        $x++;
                                    }?>
                             </SELECT> 
            </div>
    
             </td>
        </tr>
</table>
 

    <div class="admin_panel"><?=Form::label('favorite_type', 'Любимые типы')?></div>
    <div><?=Form::input('favorite_type',$info['favorite_type'], array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('city', 'Город')?></div>
    <div><?=Form::input('city', $info['city'], array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('adress', 'Адрес')?></div>
    <div><?=Form::input('adress', $info['adress'] , array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('marker_bc', 'Класс и тип')?></div>
    <div><SELECT NAME="marker_bc">
    <OPTION VALUE="<?=$info['marker_bc'] ?>" selected><?=$info['marker_bc']?>
    <OPTION VALUE="С одним двигателем, сухопутный">С одним двигателем, сухопутный
    <OPTION VALUE="С одним двигателем, гидросамолет">С одним двигателем, гидросамолет
    <OPTION VALUE="Многодвигательный, сухопутный" >Многодвигательный, сухопутный
    <OPTION VALUE="Многодвигательный, гидросамолет">Многодвигательный, гидросамолет
</SELECT></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('type_license', 'Тип лиензии')?></div>
    </br>
    <div><SELECT NAME="type_license">
    <OPTION VALUE="<?=$info['type_license']?>" selected><?=$info['type_license']?> 
    <OPTION VALUE="Свидетельство частного пилота" >Свидетельство частного пилота
    <OPTION VALUE="Свидетельство коммерческиго пилота">Свидетельство коммерческиго пилота
    <OPTION VALUE="Свидетельство линейного пилота" >Свидетельство линейного пилота
    <OPTION VALUE="Свидетельство пилота СЛА">Свидетельство пилота СЛА
    <OPTION VALUE="Свидетельство пилота планера">Свидетельство пилота планера
</SELECT></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('another_marks', 'Другие отметки')?></div>
    </br>
    <div><SELECT NAME="another_marks">
    <OPTION VALUE="<?=$info['another_marks']?>" selected><?=$info['another_marks']?>            
    <OPTION VALUE="Право выполнения ночных полетов" >Право выполнения ночных полетов
    <OPTION VALUE="Право полетов по приборам">Право полетов по приборам
    <OPTION VALUE="Право работы инструктором" >Право работы инструктором
</SELECT></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('license_till', 'Срок действия лиензии')?></div>
    </br>
    <div><?=Form::input('license_till',$info['license_till'], array('size' => 30,'class' => 'simple_datepicker'))?></div>
    </br>
    <div class="admin_panel"><?=Form::label('graph', 'Графа')?></div>
    </br>
    <div><?=Form::input('graph',$info['graph'], array('size' => 30))?></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('graph_till', 'Срок действия')?></div>
    </br>
    <div><?=Form::input('graph_till',$info['graph_till'], array('size' => 30,'class' => 'simple_datepicker'))?></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('about_me', 'Обо мне')?></div>
    </br>
    <div><?=Form::textarea('about_me',$info['about_me'], array('size' => 20,'rows'=>10, 'cols'=>35))?></div>
    <tr>
        <td><?=Form::label('images', 'Загрузить изображения')?>:</td>
        <td><?=Form::file('images[]', array('id' => 'multi'))?></td>
    </tr>

<?=Form::submit('infoadmin', 'Изменить данные')?>
<?=Form::close()?>


</br>






