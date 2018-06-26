<?php
// FORM CONTACT
function form_contact () {
  $errors = [];
  $nome = trim($_POST['nome']);
  $email = trim($_POST['email']);
  $telefone = trim($_POST['telefone']);
  $mensagem = trim($_POST['mensagem']);

  // Email
  if (empty($email)) {
    $errors[] = 'Por favor digite um e-mail.';
  } else if (!is_email($email)) {
    $errors[] = 'O e-mail digitado não é válido.';
  }

  // Template de envio
  if (!count($errors) > 0) {
    $emailTo = get_field('email_formulario');
    $body = "E-mail de contato do site:\n\n";
    if ($nome) {
      $body .= "Nome: $nome\n";
    }
    if ($email) {
      $body .= "E-mail: $email\n";
    }
    if ($telefone) {
      $body .= "Telefone: $telefone\n";
    }
    if ($mensagem) {
      $body .= "\nMensagem: $como_ajudar";
    }

    $assunto = 'Contato - Site Beauty Lounge Estética';
    $headers = "From: $email" . "\r\n";

    $result = wp_mail($emailTo, $assunto, $body, $headers);

    if ($result) {
      die(json_encode([
        'success' => true,
        'message' => 'Mensagem enviada com sucesso!'
      ]));
    }

    die(json_encode([
      'success' => false,
      'message' => 'Erro ao enviar mensagem!'
    ]));
  }

  die(json_encode([
    'success' => false,
    'message' => $errors[0]
  ]));
}

// Custom ajax calls
add_action( 'wp_ajax_nopriv_form_contact', 'form_contact' );
add_action( 'wp_ajax_form_contact', 'form_contact' );