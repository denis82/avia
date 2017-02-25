
<h2>Резерв месяц</h2>
<fieldset id="innerfieldset2">
    <legend>Данные воздушного судна</legend>
   <?=Form::open(Kohana::$config->load('conf_route.menu_monthreserv'))?>

<table  width="600" cellspacing="5">
        
            <tr>
                <td><?=Form::label("plane_dayreserv",'Выбор ресурса')?></td>
                <td><SELECT NAME="plane_dayreserv" >
                     <OPTION VALUE="">Выбор ресурса
                     <?foreach($planeArray as $planeArray):?>
                     <OPTION VALUE="<?=$planeArray->id?>"><?=$planeArray->plane?>
                     <?endforeach?>
                    </td>
                <td><?=Form::submit('monthreserv','Найти')?></td>
            </tr>
            <tr>
                <td><?=Form::label("month",'Выбор месяца/года')?></td>
                <td><?=Form::select('month',Kohana::$config->load('datepicker.month'))?>&nbsp;&nbsp;<?=Form::select('year',Kohana::$config->load('datepicker.year'))?></td>
                <td></td>
            </tr>
            
            
        </tbody>
    </table>




<?=Form::close()?>

</fieldset>



