<!DOCTYPE html>
<html lang="pt-br">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título da aba -->
    <title>iFruta | Receber kit</title>

    <!-- Icone da página -->
    <link rel="shortcut icon" href="/images/fruta.ico" type="image/x-icon">

    <!-- Import do css -->
    <link rel="stylesheet" href="/Css/receber.css">

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- import de icon para o botao float -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   </head>

<body>

    <header>
      <img id="logo_header" src="/images/logo_ifrs.png" alt="Logo do IFRS Campus Porto Alegre">
    </header>

    <section class="container">
        <form method="POST" class="container receber" action="/registrar"> 
            <input hidden value="<?= $matricula;?>" name="user" id="user">
            <button type="submit" id="botao_receber">RECEBER</button>
            <p class="matricula" style="text-align=center">
              Matrícula: <?= $matricula;?>
            </p>
        </form>
    </section>
</body>
</html>