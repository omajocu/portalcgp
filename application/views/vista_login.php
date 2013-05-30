<?php 
    $this->load->helper("form");
    
    echo validation_errors();
    
    echo form_open("login/index");

    // Generamos el campo email del formulario
    $data = array
    (
        'name' => 'username',
        'id' => 'username',
        'value' => '',
        'maxlength' => '100',
        'size' => '50'
    );
    $data['value'] = set_value('name');
    
    echo form_label("Usuario: ");
    echo form_input($data);
    echo form_error('usuario');
    echo "<br/>";

    // Generamos el campo password
    $data = array
    (
        'name' => 'password',
        'id' => 'password',
        'size' => '50'
    );
    $data['value'] = set_value('passcode');
    
    echo form_label("Password: ");
    echo form_password($data);
    echo form_error("pass");
    echo "<br/>";

    // Generamos el botón de submit
    echo form_submit("submit", "Entrar");
    
    echo form_close();
?>

