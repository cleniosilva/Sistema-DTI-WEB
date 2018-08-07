<h1>Chamado: <?php echo $chamados->id_cha; ?></h1>
<p><b>Nome requisitante:</b> <?php echo $chamados->nome_requisitante; ?></p>
<p><b>E-mail requisitante:</b> <?php echo $chamados->email_cha; ?></p>
<p><b>Telefone requisitante:</b> <?php echo $chamados->telefone_cha; ?></p>
<p><b>Unidade requisitante:</b> 
<?php 

$tamanho = count($unidades);

for($i = 0; $i < $tamanho;$i++):
    if($chamados->id_unid == $unidades[$i]->id_unid):
        echo $unidades[$i]->nome_unid;
    endif;
endfor;
?></p>
<p><b>Data do chamado:</b> <?php echo $chamados->data_cha; ?></p>
<p><b>Horário do chamado:</b> <?php echo $chamados->horario_cha; ?></p>
<p><b>Problema:</b> <?php echo $chamados->descricao_servico; ?></p>
<p><b>Status:</b> <?php if($chamados->status == 1){echo 'Aberto';}else{echo 'Solucionado';} ?></p>
<p><b>Observação do Atendimento:</b> <?php echo $chamados->observacao_atend; ?></p>
<p><b>Tecnico:</b> <?php 
$tama = count($tecnicos);

for($i=0; $i < $tama;$i++):
    if($chamados->id_tecni == $tecnicos[$i]->id_tecni):
        echo $tecnicos[$i]->nome_tecni;
    endif;
endfor;

?></p>


