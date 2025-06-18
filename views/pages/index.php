 <style>
    body {
      background-color: #1a1a1a;
      color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .titulo {
      color: #dc3545; 
      font-weight: bold;
      letter-spacing: 2px;
    }
    .borde-oro {
      border: 2px solid #bfa046;
      border-radius: 10px;
      padding: 20px;
      background-color: #2c2c2c;
      box-shadow: 0 0 20px rgba(191, 160, 70, 0.5);
    }
    .imagen {
      border-radius: 10px;
      border: 3px solid #dc3545;
    }
    .linea {
      height: 4px;
      background: linear-gradient(to right, #dc3545, #ffc107, #bfa046);
      margin: 30px auto;
      width: 60%;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row mb-4">
      <div class="col text-center">
        <h1 class="titulo display-4">Examen Final</h1>
        <div class="linea"></div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 borde-oro text-center">
        <p class="fs-5">Bienvenido al examen final. Esta es tu oportunidad para demostrar todo lo aprendido.</p>
        <img src="./images/cit.png" class="img-fluid imagen mt-3" alt="Imagen del examen">
      </div>
    </div>
  </div>
<script src="build/js/inicio.js"></script>