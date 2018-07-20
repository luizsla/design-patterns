<?php
/**
 * Interface PHP que molda os obervadores da criação de notas fiscais.
 * @author Luiz Eduardo Amorim
 */
interface ExercutarAoCriar {
    public function execute(\NotaFiscal $objeto);
}
