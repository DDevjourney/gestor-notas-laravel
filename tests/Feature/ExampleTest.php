<?php

it('la aplicación responde con éxito', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});