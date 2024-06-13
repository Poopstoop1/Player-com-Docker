<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Player</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>
  <div class="container">
    <div class="card-player">
      <div class="conteudo">
        <img id="capa-musica" src="" alt="">
        <div class="Desc-musica">
          <p id="nome-musica">Pra onde eu irei?</p>
          <span id="artista-musica">Morada</span>
        </div>
        <div class="Controles">
          <button><img id="previous" src="{{ asset('assets/img/voltar.png')}}" alt="Voltar"></button>
          <button id="play"><img src="{{ asset('assets/img/play.png')}}" alt="Play"></button>
          <button id="pause" class="hide"><svg xmlns="http://www.w3.org/2000/svg" style="width: 17px; " viewBox="0 0 320 512">
              <path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z" fill="#E1E1E6"></path>
            </svg></button>
          <button><img id="next" src="{{ asset('assets/img/avancar.png')}}" alt="Avançar"></button>
        </div>
        <div class="Container-progresso">
          <input id="progressBar" type="range" value="0" min="0" max="100" step="1">
        </div>
        <div class="tempo-musica">
          <p id="tempoAtual">00:00</p>
          <p id="tempoTotal">06:00</p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/js/script.js')}}"></script>
</body>
</html>