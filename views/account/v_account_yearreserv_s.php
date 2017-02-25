<h2>Резерв год</h2>

<fieldset>
    <legend>Данные воздушного судна</legend>
   <?=Form::open(Kohana::$config->load('conf_route.menu_yearreserv'))?>

<table  width="600" cellspacing="5">
        
            <tr>
                <td><?=Form::label("plane_dayreserv",'Выбор ресурса')?></td>
                <td><SELECT NAME="plane_dayreserv">
                                <OPTION VALUE="">-
                         <?foreach($planeArray as $planeArray):?>
                            
                            <OPTION VALUE="<?=$planeArray->id?>"><?=$planeArray->plane?>
                        <?endforeach?> 
                </td>
                <td><?=Form::submit('yearreserv','Найти')?></td>
            </tr>
            <tr>
                <td><?=Form::label("year",'Выбор года')?></td>
                <td><?=Form::select('year',Kohana::$config->load('datepicker.year'))?></td>
                <td></td>
            </tr>
            
            
        </tbody>
    </table>




<?=Form::close()?>

</fieldset>

