

<h2>Информация о пользователе</h2> 
<div id="space_admin_info">
    <div id="space_admin_image"><?=HTML::image("media/uploads/".$personal_info->img)?></div>

<table width="400" cellspacing="5">
    
        <tr>
            <td>Ник:</td>
            <td><?=$personal_info->first_name;?></td>
        </tr>
        <tr>
            <td>Телефон:</td>
            <td><?=$personal_info->telephone;?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?=$personal_info->email;?></td>
        </tr>
        <?=Form::open(Kohana::$config->load('conf_route.clubmenu_toclub'))?>
        <tr>
            <td><?=Form::label('cat', "Новичек");?>:</td>
            <td><?=Form::radio('cat', '1/'.$user_array->id,true);?></td>
        </tr>
        <tr>
            <td><?=Form::label('cat', "Продвинутый");?>:</td>
            <td><?=Form::radio('cat', '2/'.$user_array->id);?></td>
        </tr>
        <tr>
            <td><?=Form::label('cat', "Гуру");?>:</td>
            <td><?=Form::radio('cat', '3/'.$user_array->id);?></td>
        </tr>
        <tr>
            <td><?=Form::label('cat', "Исключить");?>:</td>
            <td><?=Form::radio('cat', '4/'.$user_array->id);?></td>
        </tr>
        <tr>
            <td><?=Form::label('cat', "Отказатьть");?>:</td>
            <td><?=Form::radio('cat', '5/'.$user_array->id);?></td>
        </tr>
        <tr>
            <td><?=Form::label('ok', "Подтвердить");?>:</td>
            <td><?=Form::submit('ok','ok', array("id"=>'$user_array[$i]->id', "class"=>"ok_button"));?></td>
        </tr>
        <?=Form::close()?>
</table>
    
</div>

