<?php
$name = $_POST['name'];
//pega os dados que foi digitado no ID name.

$email = $_POST['email'];
//pega os dados que foi digitado no ID email.

$subject = $_POST['subject'];
//pega os dados que foi digitado no ID sebject.

$message = $_POST['mengagem'];
//pega os dados que foi digitado no ID message.
$myEmail = "wilson.leal@astraleditora.com.br";//é necessário informar um e-mail do próprio domínio
$headers = "From: $myEmail\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Formulário enviado\n";
$corpo .= "nome: " . $name . "\n";
$corpo .= "email: " . $email . "\n";
$corpo .= "telefone: " . $telefone . "\n";
$corpo .= "assunto: " . $assunto . "\n";
$corpo .= "msg: " . $mensagem . "\n";

$email_to = 'astraleditora.rj@gmail.com';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo, $headers);
//enviando o email.

if ($status) {
  echo "<script> alert('Formulário enviado com sucesso!'); </script>";
  
//mensagem de form enviado com sucesso.

} else {
  echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
  
//mensagem de erro no envio. 

}
?>