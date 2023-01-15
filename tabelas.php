<?php

$sql = "SELECT TB_banco.nome, 
TB_convenio.verba, 
TB_contrato.codigo, 
TB_contrato.data_inclusao, 
TB_contrato.valor, 
TB_contrato.prazo 
FROM TB_banco 
inner join TB_convenio on TB_banco.codigo=TB_convenio.codigo
inner join TB_contrato on TB_convenio.codigo = TB_contrato.codigo";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"] . " - Verba: " . $row["verba"] . " - Codigo Convenio Servico: " .
            $row["codigoConvenioServico"] . " - Data Inclusao: " . $row["data_inclusao"] . " - Valor: " . $row["valor"] . " - Prazo: " . $row["prazo"] . "<br>";
    }
} else {
    echo "Invalid search";
}

$conn->close();


$sql = "SELECT Tb_banco.nome, 
SUM(Tb_convenio.verba) as 'all_budget', 
SUM(Tb_contrato.valor) as 'all_Value', 
MAX(Tb_contrato.data_inclusao) as 'oldContract', 
MIN(Tb_contrato.data_inclusao) as 'newContract' 
FROM Tb_banco 
INNER JOIN Tb_convenio on Tb_banco.codigo = Tb_convenio.banco 
INNER JOIN Tb_convenio_servico ON Tb_convenio_servico.convenio = Tb_convenio.codigo 
INNER JOIN Tb_contrato ON Tb_contrato.convenio_servico = Tb_convenio_servico.codigo 
GROUP BY Tb_banco.nome";


$result = $con->query($sql);

foreach ($result as $cons) {
    print_r($cons);
}
