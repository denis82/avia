<?if($errors):?>
<?foreach($errors as $error):?>
<div class="error"><?=($error)?></div>
<?endforeach?>
<?endif?>
<?=HTML::anchor(Kohana::$config->load('conf_route.clubmenu_resources'), 'назад', array("class" => "redactor_personal_info"))?>
<h2>
    Управление ресурсами 
</h2>


<fieldset id="innerfieldset2">
    <legend>Данные воздушного судна</legend>
    
        <?=Form::open (Kohana::$config->load('conf_route.clubmenu_plane_edit').$id_plane,array('enctype'=>'multipart/form-data'))?>     
    <table>
                <tr>
                <td><?=Form::label('resource_id', 'Воздушное судно')?></td>
                <td>
                 <SELECT NAME="transport">
                                <OPTION VALUE="<?=$plane['transport']?>">
                         <?foreach($resourcesArray as $resource):?>
                            
                            <OPTION VALUE="<?=$resource->id?>"><?=$resource->transport?>
                        <?endforeach?> </SELECT>  
                </td>
                    
                </tr>
            
                <tr>
                    <td><?=Form::label('plane', 'Название воздуного судна')?></td>
                    <td><?=Form::input('plane', $plane['plane']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('ser_num', 'серийный номер')?></td>
                    <td><?=Form::input('ser_num',$plane['ser_num']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('date_reliased', 'Дата изготовления')?></td>
                    <td><?=Form::input('date_reliased', $plane['date_reliased'] ,array('type'=>'text','class'=>'simple_datepicker'))?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('property', 'Собственник')?></td>
                    <td><?=Form::input('property',$plane['property']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('register', 'Место регистрации(регион РФ)')?></td>
                    <td><?=Form::input('register',$plane['register']);?></td>
                 </tr>
                <tr>
                    <td><?=Form::label('type', 'Тип самолета')?></td>
                    <td><?=Form::input('type',$plane['type']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('power_of_engine', 'Мощность двигателей')?></td>
                    <td><?=Form::input('power_of_engine',$plane['power_of_engine']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('type_of_engine', 'Тип и количество двигателей')?></td>
                    <td><?=Form::input('type_of_engine',$plane['type_of_engine']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('mileage', 'Часовой налёт')?></td>
                    <td><?=Form::input('mileage',$plane['mileage']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('weigth', 'Максимальная взлетная масса')?></td>
                    <td><?=Form::input('weigth',$plane['weigth']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('sertificat', 'Наличие сертификата летной одности')?></td>
                    <td><?=Form::checkbox('sertificat');?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('sertificat_fly_price', 'Стоимость сертификата летной одности')?></td>
                    <td><?=Form::input('sertificat_fly_price',$plane['sertificat_fly_price']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('best_to', 'Годен до')?></td>
                    <td><?=Form::input('best_to', $plane['best_to'] ,array('type'=>'text','class'=>'simple_datepicker'))?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('insurance', 'Наличие страховки')?></td>
                    <td><?=Form::checkbox('insurance');?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('price_insurance', 'Стоимость страховки')?></td>
                    <td><?=Form::input('price_insurance', $plane['price_insurance']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('type_insurance', 'Тип страховки')?></td>
                    <td><?=Form::select('type_insurance',array('Классический','Авангард'));?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('fuel', 'Марка горючего')?></td>
                    <td><?=Form::select('fuel',array('АИ92','ДТ'));?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('fuel_consumption', 'Расход горючего')?></td>
                    <td><?=Form::input('fuel_consumption',$plane['fuel_consumption']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('transprt_nalog', 'Транспортный налог')?></td>
                    <td><?=Form::input('transprt_nalog',$plane['transprt_nalog']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('hour_trafic_fuel', 'Расход часовой')?></td>
                    <td><?=Form::input('hour_trafic_fuel',$plane['hour_trafic_fuel']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('fuel_price', 'Стоимость топлива')?></td>
                    <td><?=Form::input('fuel_price',$plane['fuel_price']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('price_sertificat', 'Стоимость сертификации')?></td>
                    <td><?=Form::input('price_sertificat',$plane['price_sertificat']);?></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('else_p', 'Дополнительно')?></td>
                    <td><textarea rows="10" cols="45" name="else_pl"><?=$plane['else_pl']?></textarea></textarea></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('broken_dow', 'Записи с бортового журнала')?></td>
                    <td><textarea rows="10" cols="45" name="broken_down"><?=$plane['broken_down']?></textarea></td>
                 </tr>
                 <tr>
                    <td><?=Form::label('images', 'Загрузить изображения')?>:</td>
                    <td><?=Form::file('images[]', array('id' => 'multi'))?></td>
                 </tr>
                 <tr>
                    <td></td>
                    <td><?=Form::submit('submit','Изменить')?></td>
                 </tr>
                 </table>
    
            <?=Form::close()?>
        
        
    
</fieldset>

	