

<html>
<head>
  <title>Enviando E-mail com PHP - DevMedia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
    <h1 class="text-center">Fotoin</h1>
    <h2>Serviços personalizados </h2>
<div class="row mt-5">
    <div class="col-md-6">
          <img src="img/3.png" class="img-fluid" alt="">
    </div>
    <div class="col-md-6 ">
      <div class="text-center">
            <h3>Envelopes</h3>
            <p>Empresas organizadas e sofisticadas utilizam envelopes personalizados.</p>
            <p>Tamanhos na medida da sua necessidade.</p>
            <p>impresso em papel Off-Set couchê ou recilato, com acabemnto do envelope simples ou detalhado.</p>
            Formatos:

      </div>
           

            <ul>
             
             <li>Carta 23x11,5cm;</li> 
             <li>Comercial 16,7x10,5cm;</li> 
             <li>Meio Saco 17,5x24,5cm;</li> 
             <li>Saco 25x35cm;</li> 
             <li>Tamanho adequando ao cliente</li> 
              Cores:
             Frente ou frente e verso;
              Acabamento:
              Faca Especial, dobra e cola branca.
            </ul>
    </div>
  </div>


</div>
<div class="d-flex justify-content-center mt-3">
<form action="enviar.php" name="form_contato" method="post">
  <div class="form-group">
  <p class="titulo">Formulário <small class="asteristico">*Campos Obrigatorios</small></p>
    <div>
    <label for="">Nome <sup class="asteristico">*</sup></label>
    <input type="text" name="nome" class="form-control" maxlength="40" />

    </div>
    <div >
    <label for="">Telefone <sup class="asteristico">*</sup></label>
    <input type="text" name="telefone" class="form-control" maxlength="14" />

    </div>
    <div >
    <label for="">Email <sup class="asteristico">*</sup></label>
    <input type="text" name="email" class="form-control"  />

    </div>
    <div >
      <label for="">Mensagem <sup class="asteristico">*</sup></label>
      <textarea name="msg" class="form-control" cols="16" rows="5"></textarea>
    </div>
   
    
    
  </div>
  <button type="reset" class="btn btn-secondary">Limpar</button>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>


</div>

</body>
</html>

<style type="text/css">
  body{
    font-size:12px;
    font-family:Verdana, Geneva, sans-serif;
    background-color:black;
    color:white;
  }
  #contato_form{
    width:500px;
    min-height:175px;
    color:#999;
    margin:auto;
  }
  .asteristico{
    color:#F00;
  }
  </style>

