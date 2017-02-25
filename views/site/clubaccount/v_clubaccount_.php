<h2>
    Склад
</h2>
<fieldset id="innerfieldset4">
    <legend>ГСМ</legend>
    <div id="opros">
        <?= Form::open(Kohana::$config->load('conf_route.clubmenu_plane')) ?>
        <div id="radio1">
            <p>
                <?= Form::label('aviafuel', 'Авиабензин') ?>
                <?= Form::select('aviafuel'); ?></p>
            <p>
                <?= Form::label('fuel', 'Бензин') ?>
                <?= Form::select('fuel'); ?></p>
            <p>
                <?= Form::label('oil', 'Масло') ?>
                <?= Form::select('oil'); ?></p>
        </div>
        <div id="progressbar"></div>
    </div>
</fieldset>
<fieldset id="innerfieldset5">
    <legend>Запчасти</legend>
    <div >

        <div >
            <p>  <?= Form::label('zip', 'Запчасти') ?>
                <?= Form::textarea('zip', '', array('type' => 'text', 'class' => 'to')) ?></p>
        </div>


        <p><?= Form::submit('submit', 'Записать') ?>
            <?= Form::close() ?></p>
        <div id="progressbar"></div>
    </div>
</fieldset>

