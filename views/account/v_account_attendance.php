<?if($errors):?>
<?foreach($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<h2>Участники клуба::</h2>
<?foreach($users as $users):?>

<table  width=630 heigt=100 >
        <tr>
            <td rowspan=4 width=80 heigt=120 ><div class="users_img_cont"><?=HTML::image(Kohana::$config->load('foto_route.foto_ava_small').$users->img);?></div></td>
            <td><?=HTML::anchor(Kohana::$config->load('conf_route.menu_attendance_us').$users->id,$users->username)?></td>
            
        </tr>
        <tr>
            <td>Город: <?=$users->userinfo->city?></td>
        </tr>
         <tr>
            <td>Телефон: <?=$users->telephone?></td>
        </tr>
         
         
        
</table>  
<?=$pagination;?>
<hr>
<?endforeach?>
<div>
    <div>Отправить всем сообщение</div>
    <div><?=Form::open(Kohana::$config->load('conf_route.menu_attendance'));?>
       <?=Form::textarea('text','',array('size' => 20,'rows'=>10, 'cols'=>80));?></br>
        <?=Form::submit('massage','Отправить');?>
        <?=Form::close();?>
    </div>
    <div>
        <?foreach($users as $users):?>
            
            <hr>
            <? endforeach; ?>
    </div>
</div>
