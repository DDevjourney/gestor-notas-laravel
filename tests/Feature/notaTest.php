<?php
use App\Models\Notas;

beforeEach(function () {
    $this->nota = new Notas(['titulo' => 'Comprar leche', 'contenido' => 'Comprar leche en el supermercado']);
});

it('crear nota correctamente', function () {
      expect($this->nota->titulo)
        ->toBe('Comprar leche')
        ->not->toBeEmpty()
        ->toContain('Comprar');
});

it('crear contenido correctamente', function () {
    expect($this->nota->contenido)
        ->toBe('Comprar leche en el supermercado')
        ->not->toBeEmpty()
        ->toContain('supermercado');
});
