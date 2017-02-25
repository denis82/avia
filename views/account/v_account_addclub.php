
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error">
<?=$error?></div>
<?endforeach?>
<?endif?>
<?if($well_done):?>
<div class="create_new_club"><?=$well_done?></div>
<?endif?>
<h2>Создание клуба</h2>   

<table width="630" >
        <tr>
            <td>Для добавления нового клуба заполните форму</td>
            <td class ="align_text"></td>
        </tr>
        <tr>
            <td></td>
            <td class="redactor_personal_align"></td>
            
        </tr>
</table>
<?=Form::open (Kohana::$config->load('conf_route.menu_addclub'),array('enctype'=>'multipart/form-data'))?>
<div id="space_admin_info">
    
    <div class="admin_panel"><?=Form::label('club_name', 'Название клуба')?></div>
    </br>
    <div><?=Form::input('club_name',$post['club_name'],array("class"=>"input_club"))?></div>
    </br>
    
    <div class="admin_panel"><?=Form::label('about_club', 'Коротко о клубе')?></div>
    </br>
    <div><?=Form::textarea('about_club', $post['about_club'],array('type'=>'text','cols'=>40,'rows'=>6,"class"=>"input_club"))?></div>
    </br>
    
    <div class="admin_panel"><?=Form::label('air_park', 'Воздушный парк')?></div>
    </br>
    <div><?=Form::input('air_park',$post['air_park'],array("class"=>"input_club"))?></div>
    </br>
    
     <div class="admin_panel">
     
     <?=Form::label('city', 'Город')?></div>
    
    </br>
    
    <SELECT NAME="city" >
                     <OPTION VALUE="">Выбрать город
                     <?foreach($cities as $city):?>
                     <OPTION VALUE="<?=$city->id?>"><?=$city->city?>
                     <?endforeach?>
   
     </SELECT >
    
    
    </br></br>
    <div class="admin_panel">
     
     <?=Form::label('region_id', 'Регион')?></div>
    
    </br>
    
    <SELECT NAME="region_id" >
                     <OPTION VALUE="">Выбрать регион
                     <?foreach($regions as $region):?>
                     <OPTION VALUE="<?=$region->id?>"><?=$region->region?>
                     <?endforeach?>
   
     </SELECT >
    
    
    </br></br>
    <div class="admin_panel"><?=Form::label('adress_ur', 'Юридический адрес')?></div>
    </br>
    <div><?=Form::input('adress_ur', $post['adress_ur'] , array("class"=>"input_club","size"=> 60))?></div>
   </br>
    <div class="admin_panel">Время доступности ресурса/ч.:</div>
    <div>
            <p>
            <?=Form::input('time_origin', '',array('type'=>'text','id'=>'amount','style'=>'border:0; color:#f6931f; font-weight:bold;'))?>
             <?=Form::input('time_end', '',array('type'=>'text','id'=>'amoun','style'=>'border:0; color:#f6931f; font-weight:bold;'))?>    
            </p>
            <div id="slider-range"></div></br>
        </div>
   
   
    </br>
       <div class="admin_panel">Вступительный взнос</div>
       </br>
        <div><?=Form::input('tax', $post['tax'],array("class"=>"input_club"))?></div>
        </br>
</div>
<div class="admin_panel">Загрузить изображение</div>
       </br>
        <?=Form::file('images[]', array('id' => 'multi'))?>
</br>
<?=Form::submit('submit','Сохранить')?>
<?=Form::close()?>


</br>
