

<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/css/style.css">
      <title></title>
      <script>


        function checkCurso(){
          if (form2.curso.value == ""){
            alert("Selecione o curso!");
            form2.curso.focus();
          }
          return;
        }

        function checkCurso(){
    if (form2.curso.value == ""){
      alert("Selecione o curso!");
      form2.curso.focus();
    }
    return;
  }

         function confirma() {
             if (!confirm('Desejar excluir o usuário?')) {
                 return false;
             }
         
             return true;
         }
         
         function gerar() {
             if (!confirm('Desejar gerar Certificado para esse aluno?')) {
                 return false;
             }
         
             return true;
         }
         
         $(document).ready(function() {
             $('#tbalunos').DataTable( {
                 "ajax": "data/arrays.txt"
             } );
         } );
      </script>
   </head>
   <body>
      <?= csrf_field(); ?>
      <?php
         $uri = service('uri');
         ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <a class="navbar-brand" style="color: #FFD700" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
               
              
               <?php if (! session()->get('loggedUser')): ?>
            
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="Auth/">Login</a>
                  </li>
               </ul>



               <?php else: ?>
               



<!-- parte admin -->
               <?php if (session()->get('tipoUser') == 1): ?>

               <ul class="navbar-nav mr-auto">

<li class="nav-item">
   <a class="nav-link" style="color: #FFD700" href="/UserController/">Lista usuários</a>
</li>

<li class="nav-item">
   <a class="nav-link" style="color: #FFD700" href="/CertificadoController/">Gerar Certificados</a>
</li>

</ul>


               <?php else: ?>
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
         <a class="nav-link" href="/AvaController/pre">PRÉ CURSO</a>
      </li>

         
                  <li class="nav-item">
         <a class="nav-link" href="/AvaController/ava_int">AVALIAÇÃO DE INSTRUÇÃO</a>
</li>


         
                  <li class="nav-item">
         <a class="nav-link" href="/AvaController/ava_curso">AVALIAÇÃO FINAL DO CURSO</a>
</li>


         
                  <li class="nav-item">
         <a class="nav-link" href="/AvaController/pos">PÓS CURSO</a>
</li>

<li class="nav-item">
         <a class="nav-link" href="/AvaController/ficha_critica">FICHA CRÍTICA</a>
</li>
</ul>
               <?php endif; ?>

<!-- fim admin -->

   


               <ul class="navbar-nav my-2 my-lg-0">
                  <li class="nav-item">
                     <a href="<?= site_url('LogoutController'); ?>">Logout</a>
                  </li>
               </ul>
               <?php endif; ?>

               <ul class="navbar-nav my-2 my-lg-0">
                  <li class="nav-item">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </li>
               </ul>

               <ul class="navbar-nav my-2 my-lg-0">
                  <li class="nav-item">
                     <a style="color: #FFD700" href="http://172.16.2.173/owncloud" target="_blank">Onlyoffice</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

