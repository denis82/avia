
<?= HTML::anchor(Kohana::$config->load('conf_route.menu_attendance'), 'назад', array("class" => "redactor_personal_info")) ?>
<h2>Личный кабинает</h2> 
<div id="space_admin_info">

    <table width="630" >


        <tr >
            <td rowspan=4 width="100"> <div id="space_admin_image"><?= HTML::image(Kohana::$config->load('foto_route.foto_ava') . $personal_info->img) ?></div></td>
            <td>
                <div class="admin_panel"><?= Form::label('username', 'Ник') ?></div>
                </br>
                <div><?= $personal_info->username ?></div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="admin_panel"><?= Form::label('email', 'Email') ?></div>
                </br>
                <div><?= $personal_info->email ?></div></td>
        </tr>
        <tr>
            <td>
                <div class="admin_panel"><?= Form::label('telephone', 'Телефон') ?></div>
                </br>
                <div><?= $personal_info->telephone ?></div>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>

    </table>
    <?if($info['private']== 0):?>
    <p id="account_info_action_switch">Подробенее...</p>
    <div id="account_info_action">  
        <div class='info_hide_1'>
            <div class="admin_panel"><?= Form::label('name', 'Имя') ?></div>
            </br>
            <div><?= $info['name'] ?></div>
            </br>
        </div>
        
        <div class='info_hide_2' abbr="<?= $info['sur_name'] ?>">
            <div class="admin_panel"><?= Form::label('sur_name', 'Фамилия') ?></div>
            </br>
            <div><?= $info['sur_name'] ?></div>
            </br>
        </div>

        <div class='info_hide_3' abbr="<?= $info['born_date'] ?>">
            <div class="admin_panel"><?= Form::label('born_date', 'Дата рождения') ?></div>
            </br>
            <div><?= $info['born_date'] ?></div>
            </br>
        </div>
        
        
        <div class='info_hide_4' abbr="<?= $info['fly_since'] ?>">
        <div class="admin_panel"><?= Form::label('fly_since', 'Летаю с') ?></div>
        </br>
        <div><?= $info['fly_since'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_5' abbr="<?= $info['favorite_type'] ?>">
        <div class="admin_panel"><?= Form::label('favorite_type', 'Любимые типы') ?></div>
        </br>
        <div><?= $info['favorite_type'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_6' abbr="<?= $info['city'] ?>">
        <div class="admin_panel"><?= Form::label('city', 'Город') ?></div>
        </br>
        <div><?= $info['city'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_7' abbr="<?= $info['adress'] ?>">
        <div class="admin_panel"><?= Form::label('adress', 'Адрес') ?></div>
        </br>
        <div><?= $info['adress'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_8' abbr="<?= $info['marker_bc'] ?>">
        <div class="admin_panel"><?= Form::label('marker_bc', 'Класс и тип') ?></div>
        </br>
        <div><?= $info['marker_bc'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_9' abbr="<?= $info['type_license'] ?>">
        <div class="admin_panel"><?= Form::label('type_license', 'Тип лиензии') ?></div>
        </br>
        <div><?= $info['type_license'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_10' abbr="<?= $info['another_marks'] ?>">
        <div class="admin_panel"><?= Form::label('another_marks', 'Другие отметки') ?></div>
        </br>
        <div><?= $info['another_marks'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_11' abbr="<?= $info['license_till'] ?>">
        <div class="admin_panel"><?= Form::label('license_till', 'Срок действия лиензии') ?></div>
        </br>
        <div><?= $info['license_till'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_12' abbr="<?= $info['graph'] ?>">
        <div class="admin_panel"><?= Form::label('graph', 'Графа') ?></div>
        </br>
        <div><?= $info['graph'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_13' abbr="<?= $info['graph_till'] ?>">
        <div class="admin_panel"><?= Form::label('graph_till', 'Срок действия') ?></div>
        </br>
        <div><?= $info['graph_till'] ?></div>
        </br>
        </div>
        
        <div class='info_hide_14' abbr="<?= $info['about_me'] ?>">
        <div class="admin_panel"><?= Form::label('about_me', 'Обо мне') ?></div>
        </br>
        <div><?= Form::textarea('about_me', $info['about_me'], array('size' => 20, 'rows' => 10, 'cols' => 35)) ?></div>
        </br>
        </div>
        </div>
    <?endif?>
</div>



<div class="massage_window"> 
    <div>
        <?foreach($massages as $massage):?>
        <p><?= $massage->user->username; ?>:  <?= $massage->text; ?></p>
        <p> <?= $massage->date; ?></p>
        <hr>
        <? endforeach; ?>
    </div>
</div>


<div>
    <div>Сообщения</div>
    <div><?= Form::open(Kohana::$config->load('conf_route.menu_attendance_us') . $id_user); ?>
        <?= Form::textarea('text', '', array('size' => 20, 'rows' => 10, 'cols' => 80)); ?></br>
        <?= Form::submit('massage_user', 'Отправить'); ?>
        <?= Form::close(); ?>
    </div>

</div>


