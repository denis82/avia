<table >

        <tr>
            <td>
            <h2>
      Клуб
</h2>
<table border="1">

        <tr>
            <td><div id="space_club_image"><?=HTML::image(Kohana::$config->load('foto_route.foto_club').$one_club->ava_club)?></div></td>
        </tr>
        
        <tr>
            <?if(isset($club_remove) and $club_remove != null):?>
            <td><div class="club_remove" class="remove_resource">Выйти из клуба</div></td>
            <?endif?>
            <?if(isset($club_mem)and $club_mem != null):?>
            <td><div class="club_req" class="remove_resource">Вступить в клуб</div></td>
            <?endif?>
        </tr>

</table>
</td>
        </tr>
        <tr>
            <td><div ><?=$one_club->club_name;?></div>
<div><?=HTML::anchor(Kohana::$config->load('conf_route.menu_clubs'), 'клубы', array("class" => "redactor_personal_info"))?></div></br>
<div><?=HTML::anchor(Kohana::$config->load('conf_route.menu_changeclub'), 'Перейти в друой клуб', array("class" => "redactor_personal_info"))?></div></br></td>
        </tr>

</table>




<hr>
<div class="admin_panel">Коротко о клубе</div>
<div><?=$one_club->about_club;?></div>
<div class="admin_panel">Адреса и дополнительная информация</div>
<div>
    <p>Юридический адрес:<?=$one_club->adress_ur;?></p>
    <p>Время работы: <?=date('H:i',strtotime($one_club->time_origin));?> - <?=date('H:i',  strtotime($one_club->time_end));?></p>
    <p>Планерное звено: <?=$one_club->city;?></p>
</div>
<div class="admin_panel">Схема проезда</div>
<div><?=$one_club->link_map;?></div>
<?if(isset($id_user)):?>
<p class="hide_data" id="id_user"><?=$id_user?></p>
<?endif?>
<?if(isset($id_club)):?>
<p class="hide_data" id="id_club"><?=$id_club?></p>
<?endif?>
<?if(isset($foo)):?>
<p id="foo"><?=$foo?></p>
<?endif?>