<?php
class Fecha {
    private $meses = [
        1 => ["nombre" => "Enero", "dias" => 31],
        2 => ["nombre" => "Febrero", "dias" => 28],
        3 => ["nombre" => "Marzo", "dias" => 31],
        4 => ["nombre" => "Abril", "dias" => 30],
        5 => ["nombre" => "Mayo", "dias" => 31],
        6 => ["nombre" => "Junio", "dias" => 30],
        7 => ["nombre" => "Julio", "dias" => 31],
        8 => ["nombre" => "Agosto", "dias" => 31],
        9 => ["nombre" => "Septiembre", "dias" => 30],
        10 => ["nombre" => "Octubre", "dias" => 31],
        11 => ["nombre" => "Noviembre", "dias" => 30],
        12 => ["nombre" => "Diciembre", "dias" => 31]
    ];

    // Método para comprobar si el año es bisiesto
    public function esBisiesto($anio) {
        return ($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0);
    }

    // Método para ajustar los días de febrero si es año bisiesto
    public function ajustarFebrero($anio) {
        if ($this->esBisiesto($anio)) {
            $this->meses[2]["dias"] = 29;
        }
    }

    // Método para obtener el nombre y los días del mes correspondiente
    public function obtenerMesYDias($mes) {
        return $this->meses[$mes];
    }
}
?>
