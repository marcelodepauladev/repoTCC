<?php
require_once 'MonitoramentoAgua.php';

class IrrigacaoAutomatizada extends MonitoramentoAgua {
    private $nivelIrrigacao;

    public function __construct($qualidade, $nivel) {
        parent::__construct($qualidade);
        $this->nivelIrrigacao = $nivel;
    }

    public function ajustarIrrigacao() {
        return "Irrigação ajustada para o nível: " . $this->nivelIrrigacao;
    }
}

// Exemplo de uso
$irrigacao = new IrrigacaoAutomatizada(7.5, 3);
echo $irrigacao->verificarQualidade();
echo $irrigacao->ajustarIrrigacao();
?>
