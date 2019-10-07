<?php
	include("../../classeLayout../classeCabecalhoHTML.php");
    $c = new CabecalhoHTML();
    $c->add_menu(array("funcao"=>"Funcao", "regiao"=>"regiao", "pais"=>"Pais", "localizacao"=>"Localização"))
	$c->exibe();

	include("conexao.php");
	
    $sql = "SELECT ID_LOCALIZACAO, ENDERECO, CEP, CIDADE, ESTADO, NOME_PAIS  
            FROM LOCALIZACAO INNER JOIN PAIS ON LOCALIZACAO.ID_PAIS = PAIS.ID_PAIS ORDER BY ENDERECO";
	
	$stmt = $conexao->prepare($sql);
	
	// contem os resultados
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>ID DA LOCALIZACAO</th>
                <th>ENDERECO</th>
				<th>CEP</th>
                <th>CIDADE</th>
                <th>PAIS</th>
                
			</tr>
		  </thead>
		  <tbody>
		  ";

	//fetch a cada chamada ele retina um dado e armazena na variavel $linha
	while($linha=$stmt->fetch()){
		echo "<tr>
				<td>".$linha["ID_LOCALIZACAO"]."</td>
				<td>".$linha["ENDERECO"]."</td>
                <td>".$linha["CEP"]."</td>
                <td>".$linha["CIDADE"]."</td>
                <td>".$linha["PAIS"]."</td>
                <td>

					
                    <form method='post' action='remover.php'>
                        <input type='hidden' name='tabela' value='funcao' />    
						<input type='hidden' name='id' value='".$linha["ID_LOCALIZACAO"]."' />
						<button>Remover</button>
					</form>
					
				</td>
		      </tr>";
	}
	echo "</tbody>
		</table>";
?>