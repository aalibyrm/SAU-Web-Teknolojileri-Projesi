function FilmAra() {

    const apiKey = '86234053f2744ca99ffefd0d24ebe06a';
    const searchQuery = document.getElementById('film').value;
    const apiUrl = `https://api.themoviedb.org/3/search/movie?api_key=${apiKey}&query=${searchQuery}`;

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('İstek başarısız! HTTP hata kodu: ' + response.status);
            }
            return response.json();
        })
        .then(data => {

            const movie = data.results[0];
            if (!movie) {
                console.log('Aranan film bulunamadı.');
                return;
            }

            const filmSonuclariDiv = document.getElementById('filmSonuclari');
            filmSonuclariDiv.innerHTML = '';
            const filmAdi = movie.title;
            const yayinTarihi = movie.release_date;
            const konu = movie.overview;
            const posterPath = movie.poster_path;

            const filmBilgileri = document.createElement('div');
            filmBilgileri.innerHTML = `
                <h3>Film adı: ${filmAdi}</h3>
                <p>Yayın tarihi: ${yayinTarihi}</p>
                <p>Konu: ${konu}</p>
            `;

            if (posterPath) {
                const img = document.createElement('img');
                img.src = `https://image.tmdb.org/t/p/w200${posterPath}`;
                filmBilgileri.appendChild(img);
            }

            filmSonuclariDiv.appendChild(filmBilgileri);
        })
        .catch(error => {
            console.error('Hata:', error);
        });
}

function OyunAra() {
    const searchQuery = document.getElementById('oyun').value;
    const apiKey = 'efd2d6a1b41d4645966417c5bd48e663';

    const apiUrl = `https://api.rawg.io/api/games?key=${apiKey}&search=${searchQuery}`;

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('İstek başarısız! HTTP hata kodu: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            displayGames(data.results);
        })
        .catch(error => {
            console.error('Hata:', error);
        });
}

function displayGames(games) {
    const oyunSonuclariDiv = document.getElementById('oyunSonuclari');
    oyunSonuclariDiv.innerHTML = '';

    if (games.length === 0) {
        oyunSonuclariDiv.textContent = 'Oyun bulunamadı.';
        return;
    }

    const ul = document.createElement('ul');
    for (let i = 0; i < Math.min(2, games.length); i++) {
        const game = games[i];
        const li = document.createElement('li');
        li.innerHTML = `<h3>${game.name}</h3>`;
        if (game.background_image) {
            const img = document.createElement('img');
            img.src = game.background_image;
            img.alt = game.name;
            img.style.maxWidth = '200px';
            li.appendChild(img);
        }
        ul.appendChild(li);
    }

    oyunSonuclariDiv.appendChild(ul);
}
