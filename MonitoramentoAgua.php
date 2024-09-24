<?php
class MonitoramentoAgua {
    protected $qualidadeAgua;

    public function __construct($qualidade) {
        $this->qualidadeAgua = $qualidade;
    }

    public function verificarQualidade() {
        return "A qualidade da água está em: " . $this->qualidadeAgua . " ppm.";
    }
}
?>
