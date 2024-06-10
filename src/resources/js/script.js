document.addEventListener("DOMContentLoaded", function () {
    const capaMusica = document.getElementById("capa-musica");
    const nomeMusica = document.getElementById("nome-musica");
    const artistaMusica = document.getElementById("artista-musica");

    const progressBar = document.getElementById("progressBar");
    const tempoAtual = document.getElementById("tempoAtual");
    const tempoTotal = document.getElementById("tempoTotal");
    const buttonPlay = document.querySelector("#play");
    const buttonPause = document.querySelector("#pause");
    const buttonNext = document.querySelector("#next");
    const buttonPrevious = document.querySelector("#previous");

    let music;
    let indexMusicaAtual = 0;
    let interval;

    async function fetchMusicas() {
        const response = await fetch("http://localhost/api/musicas");
        const musicas = await response.json();
        return musicas;
    }

    function formatarTempo(segundos) {
        const min = Math.floor(segundos / 60);
        const seg = Math.floor(segundos % 60);
        return `${min
            .toString()
            .padStart(2, "0")}:${seg.toString().padStart(2, "0")}`;
    }

    function updateMusicTime() {
        const progresso = (music.currentTime / music.duration) * 100;
        progressBar.value = progresso;
        tempoAtual.textContent = formatarTempo(music.currentTime);
    }

    function play() {
        buttonPlay.classList.add("hide");
        buttonPause.classList.remove("hide");
        music.play();
        interval = setInterval(updateMusicTime, 1000);
    }

    function pause() {
        buttonPlay.classList.remove("hide");
        buttonPause.classList.add("hide");
        music.pause();
    }

    async function setMusic(index) {
        if (index < 0) {
            indexMusicaAtual = musicas.length - 1;
        } else if (index >= musicas.length) {
            indexMusicaAtual = 0;
        } else {
            indexMusicaAtual = index;
        }

        const musicas = await fetchMusicas();

        const musica = musicas[indexMusicaAtual];
        artistaMusica.innerHTML = musica.artist;
        nomeMusica.innerHTML = musica.title;
        capaMusica.setAttribute("src", musica.imageUrl);

        if (music) {
            music.pause();
        }
        music = new Audio(musica.audioUrl);
        music.addEventListener("loadedmetadata", function () {
            tempoTotal.textContent = formatarTempo(music.duration);
        });
        music.addEventListener("timeupdate", updateMusicTime);
    }

    buttonPlay.addEventListener("click", play);
    buttonPause.addEventListener("click", pause);

    buttonNext.addEventListener("click", () => {
        pause();
        setMusic(indexMusicaAtual + 1);
        play();
    });
    buttonPrevious.addEventListener("click", () => {
        pause();
        setMusic(indexMusicaAtual - 1);
        play();
    });
    setMusic(indexMusicaAtual);
});
