<br/>
<?if($errors):?>
<?foreach($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<a href = "<?=Kohana::$config->load('conf_route.clubaccount')?>" class = "redactor_personal_info">назад</a>
<h2>Редактирование личных данных администратора</h2>
    


<?=Form::open(Kohana::$config->load('conf_route.clubmenu_profile'))?>
<table width="630" cellspacing="5">
    <tr>
        <td ><?=Form::label('name', 'Имя')?>:</td>
        <td><?=Form::input('name',$info->name, array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('sur_name', 'Фамилия')?>:</td>
        <td><?=Form::input('sur_name',$info->sur_name, array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('father_name', 'Отчество')?>:</td>
        <td><?=Form::input('father_name', $info->father_name , array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('born_date', 'Дата рождения')?>:</td>
        <td><?=Form::input('born_date', $info->born_date , array('size' => 20,'class'=>'simple_datepicker'))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('fly_since', 'Летаю с')?>:</td>
        <td><?=Form::select('fly_since',Kohana::$config->load('datepicker.year'))?></td>
    
    </tr>
    <tr>
        <td ><?=Form::label('favorite_type', 'Любимые типы')?>:</td>
        <td><?=Form::input('favorite_type',$info->favorite_type, array('size' => 20))?></td>
    
    </tr>
    <tr>
        <td ><?=Form::label('city', 'Город')?>:</td>
        <td><?=Form::input('city', $info->city, array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('adress', 'Адрес')?>:</td>
        <td><?=Form::input('adress', $info->adress , array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('marker_bc', 'Класс и тип')?>:</td>
        <td><SELECT NAME="marker_bc">
    <OPTION VALUE="<?=$info->marker_bc ?>" selected><?=$info->marker_bc?>
    <OPTION VALUE="С одним двигателем, сухопутный">С одним двигателем, сухопутный
    <OPTION VALUE="С одним двигателем, гидросамолет">С одним двигателем, гидросамолет
    <OPTION VALUE="Многодвигательный, сухопутный" >Многодвигательный, сухопутный
    <OPTION VALUE="Многодвигательный, гидросамолет">Многодвигательный, гидросамолет
</SELECT></td>
    </tr>
    <tr>
        <td><?=Form::label('type_license', 'Тип лиензии')?>:</td>
        <td><SELECT NAME="type_license">
    <OPTION VALUE="<?=$info->type_license?>" selected><?=$info->type_license?> 
    <OPTION VALUE="Свидетельство частного пилота" >Свидетельство частного пилота
    <OPTION VALUE="Свидетельство коммерческиго пилота">Свидетельство коммерческиго пилота
    <OPTION VALUE="Свидетельство линейного пилота" >Свидетельство линейного пилота
    <OPTION VALUE="Свидетельство пилота СЛА">Свидетельство пилота СЛА
    <OPTION VALUE="Свидетельство пилота планера">Свидетельство пилота планера
</SELECT></td>
    </tr>
    <tr>
        <td><?=Form::label('another_marks', 'Другие отметки')?>:</td>
        <td><SELECT NAME="another_marks">
    <OPTION VALUE="<?=$info-> another_marks?>" selected><?=$info-> another_marks?>            
    <OPTION VALUE="Право выполнения ночных полетов" >Право выполнения ночных полетов
    <OPTION VALUE="Право полетов по приборам">Право полетов по приборам
    <OPTION VALUE="Право работы инструктором" >Право работы инструктором
</SELECT></td>
    </tr>
    <tr>
        <td ><?=Form::label('license_till', 'Срок действия лиензии')?>:</td>
        <td><?=Form::input('license_till',$info->license_till, array('size' => 20,'class' => 'simple_datepicker'))?></td>
    </tr>
    <tr>
        <td><?=Form::label('graph', 'Графа')?>:</td>
        <td><?=Form::input('graph',$info->graph, array('size' => 20))?></td>
    </tr>
    
    <tr>
        <td ><?=Form::label('graph_till', 'Срок действия')?>:</td>
        <td><?=Form::input('graph_till',$info->graph_till, array('size' => 20,'class' => 'simple_datepicker'))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('about_me', 'Обо мне')?>:</td>
        <td><?=Form::textarea('about_me',$info->about_me, array('size' => 20,'rows'=>10, 'cols'=>35))?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><?=Form::submit('infoadmin', 'Изменить данные')?></td>
    </tr>
</table>
<?=Form::close()?>

