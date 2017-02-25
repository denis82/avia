<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><div class="error_text"><?=$error?></div> 
</div>
<?endforeach?>
<?endif?>

<table width="630" >
        <tr>
            <td>Клуб  <?=$club_name->club_name?></td>
            <td class ="align_text"></td>
        </tr>
        <tr>
            <td></td>
            <td class="redactor_personal_align"></td>
            
        </tr>
</table>
<?=Form::open (Kohana::$config->load('conf_route.clubmenu_myclub'),array('enctype'=>'multipart/form-data'))?>
<div id="space_admin_info">
    <div id="space_admin_image"><?=HTML::image(Kohana::$config->load('foto_route.foto_club').$club['ava_club'])?></div>
    <div class="admin_panel"><?=Form::label('club_name', 'Название клуба')?></div>
    </br>
    <div><?=Form::input('club_name',$club['club_name'],array("class"=>"input_club"))?></div>
    </br>
     <div class="admin_panel"><?=Form::label('city', 'Город')?></div>
    
    </br>
    <div><?=Form::input('city',$club['city'],array("class"=>"input_club"))?></div>
    
    </br>
    <div class="admin_panel"><?=Form::label('adress_ur', 'Юридический адрес')?></div>
    </br>
    <div><?=Form::input('adress_ur',$club['adress_ur'], array("class"=>"input_club","size"=> 50))?></div>
    
    </br>    </br>

    <div class="admin_panel"><?=Form::label('about_club', 'Коротко о клубе')?></div>
    </br>
    <div><?=Form::textarea('adress_ur',$club['about_club'], array('rows'=>6, 'cols'=>85))?></div>
    </br>
    
    <div class="admin_panel"><?=Form::label('time_origin', 'Начало работы клуба')?></div>
    </br>
    <div><?=Form::input('time_origin',date('H:i',strtotime($club['time_origin'])),array("class"=>"input_club"))?></div>
   
    </br>
    <div class="admin_panel"><?=Form::label('time_end', 'Окончание работы клуба')?></div>
    </br>
    <div><?=Form::input('time_end',date('H:i',  strtotime($club['time_end'])),array("class"=>"input_club"))?></div>
    
   
   
    </br>
    <div class="admin_panel"><?=Form::label('link_map', 'Код карты')?></div>
    </br>
    <div><?=Form::textarea('link_map', $club['link_map'], array('size' => 20,'rows'=>10, 'cols'=>35))?></div>
    </br>
    <div class="admin_panel">Колличество участников</div>
    <div><?=$count_requests?>
        <p><?=HTML::anchor(Kohana::$config->load('conf_route.clubmenu_toclub'),'Добавить',array("id"=>"adduser"))?></p>
        <?if(isset($club['user_request'])):?>
        <p id="addrequest" ><?=$club['user_request']?></p>
        <?endif?>
    </div>
</div>

        <?=Form::label('images', 'Загрузить изображения',array("class"=>"admin_panel"))?>
        <?=Form::file('images[]', array('id' => 'multi'))?>
</br>
<?=Form::submit('submit','Изменить')?>
<?=Form::close()?>


</br>






