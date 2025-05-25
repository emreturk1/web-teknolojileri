
document.addEventListener("DOMContentLoaded", () => {

  fetch("https://api.themoviedb.org/3/movie/popular?api_key=f4a3bb0152279aeeb50fe32fffd3d9fb&language=tr-TR&page=1")
    .then(response => response.json())
    .then(data => {
      const filmListesi = document.getElementById("filmListesi");
      data.results.slice(0, 6).forEach(film => {
        filmListesi.innerHTML += `
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
              <img src="https://image.tmdb.org/t/p/w500${film.poster_path}" class="card-img-top" alt="${film.title}">
              <div class="card-body">
                <h5 class="card-title">${film.title}</h5>
                <p class="card-text">${film.overview.substring(0, 100)}...</p>
              </div>
            </div>
          </div>
        `;
      });
    })
    .catch(error => console.error("Film verisi çekilemedi:", error));




  fetch("https://api.rawg.io/api/games?key=30efd1ec27b6456ab2857299493a8b30&page_size=6")
    .then(response => response.json())
    .then(data => {
      const oyunListesi = document.getElementById("oyunListesi");
      data.results.forEach(oyun => {
        oyunListesi.innerHTML += `
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
              <img src="${oyun.background_image}" class="card-img-top" alt="${oyun.name}">
              <div class="card-body">
                <h5 class="card-title">${oyun.name}</h5>
                <p class="card-text">Metacritic: ${oyun.metacritic ?? 'N/A'} | Çıkış: ${oyun.released}</p>
              </div>
            </div>
          </div>
        `;
      });
    })
    .catch(error => console.error("Oyun verisi çekilemedi:", error));



  fetch("https://api.thedogapi.com/v1/images/search?limit=6")
    .then(response => response.json())
    .then(data => {
      const kopekListesi = document.getElementById("kopekListesi");
      data.forEach(kopek => {
        kopekListesi.innerHTML += `
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
              <img src="${kopek.url}" class="card-img-top" alt="Sevimli Köpek">
              <div class="card-body">
                <h5 class="card-title">Sevimli Dost</h5>
                <p class="card-text">Bu köpek TheDogAPI'den rastgele alınmıştır.</p>
              </div>
            </div>
          </div>
        `;
      });
    })
    .catch(error => console.error("Köpek verisi çekilemedi:", error));
});