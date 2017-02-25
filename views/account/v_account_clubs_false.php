Вы являетесь членом клуба "<?=$club_name;?>"
<?=Form::open (Kohana::$config->load('conf_route.menu_clubs'))?>
<?=Form::button('delete_club_by_user','Отписаться')?>
<?=Form::close()?>

