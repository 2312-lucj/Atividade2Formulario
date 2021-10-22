<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 2 formulário</title>
</head>
<body>

<?php
/*Nome: Lucas Vinicius de Oliva
Curso: DS
Matéria: PW2
Módulo: 2
Sala: 2H*/
?>

	<h1>Atividade 2 Formulário</h1>
   <hr>

	<form name="atvd" method="post" action="formulario.php"> 
	<h3>O que você achou do site?</h3>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	<input type="radio" name="opniao" value="MB"/>Muito Bom
    <input type="radio" name="opniao" value="B"/>Bom
    <input type="radio" name="opniao" value="R"/>Regular
    <input type="radio" name="opniao" value="UL"/>Um Lixo
    <br/>

    <h3>Qual a seção que você mais gostou?</h3>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <select>
    <option value="EC"> Em Cartaz </option>
    <option value="TS"> Trilha Sonora </option>
    <option value="G"> Galeria </option>
    <option value="B"> Bilheteria </option>
    <option value="O"> Outra </option>
    </select>
    Outra: <input type="text" name="Outra" size="40" maxlength="20"> <br/>

    <h3>Digite a sua opnião abaixo:</h3>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <textarea name="op" cols="50" rows="8">
    </textarea>
   <br/>

   <h3>Diga-nos como entrar em contato com você:</h3>

   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Nome&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nome" size="60" maxlength="25">
   <br/>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   E-mail&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="e-mail" size="60" maxlength="25"><br/>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Fone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="fone" size="60" maxlength="25"> 
   <br/>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   FAX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="fax" size="60" maxlength="25"> 
   <br/>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="checkbox" name="rec" value="valor">
   Quero receber as novidades do site por e-mail
   <br/> <br/>

<input type="submit" name="EnviarDados" value="Enviar Dados">

   <input type="reset" name="Limpar" value="Limpar Formulário">

</form>
</body>
</html>
