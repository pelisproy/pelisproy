<h3>Se han encontrado los siguientes resultados</h3>
<?php foreach ($buscadorDirector as $director):?>
<b><?=$director['director'];?></b><br/>
	Dirigió en:
<a href=<?=$actor['id'];?>><?=$director['nombre']?></a><br/>
<?php endforeach;?>