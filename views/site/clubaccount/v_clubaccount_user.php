<?=HTML::anchor(Kohana::$config->load('conf_route.clubmenu_attendance'), 'назад', array("class" => "redactor_personal_info"))?>
<h2>Личный кабинает</h2> 
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
        
</table>
</div>

<div class="massage_window"> 
    <div>
        <?foreach($massages as $massage):?>
            <p><?=$massage->user->username;?>:  <?=$massage->text;?></p>
           <p> <?=$massage->date;?></p>
            <hr>
            <? endforeach; ?>
    </div>
</div>

<div>
    <div>Сообщеия</div>
    <div><?=Form::open(Kohana::$config->load('conf_route.clubmenu_attendance_us').$id_user);?>
       <?=Form::textarea('text','',array('size' => 20,'rows'=>10, 'cols'=>80));?></br>
        <?=Form::submit('massage_user','Отправить');?>
        <?=Form::close();?>
    </div>
   
</div>
