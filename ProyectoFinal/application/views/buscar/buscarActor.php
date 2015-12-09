<h3>Se han encontrado los siguientes resultados</h3>
<?php foreach ($buscadorActor as $actor):?>
	<b><?=$actor['actor'];?></b><br/>
	Aparece en:
	<a href=<?=$actor['id'];?>><?=$actor['nombre'];?></a><br/>
<?php endforeach;?>