import { addFavorites } from "./user/user.js";

function createTvSlider(container) {
  container.slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    centerMode: false,
    arrows: true,
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 2000,
          centerMode: true,
          infinite: true,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: false
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      },
      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      }
    ]
  });
}

function destroySlider(container) {
  container.slick("unslick");
}

function getPrograms(date, time) {
  let dataProgram = {
    function: "getPrograms",
    date,
    time
  };

  let nowSliderCanalClaro = $(".today-claro-slider");
  let nowSliderConcertChannel = $(".today-concert-channel-slider");

  $.ajax({
    type: "POST",
    data: dataProgram,
    url: "../../adapters/program.php",
    success: function(result) {
      let json = JSON.parse(result);
      console.log(json);

      /* SLIDER "AHORA EN VIVO CANAL CLARO*/
      let programingCanalClaro = json.data[0].programing[0].programs;
      let programingConcertChannel = json.data[1].programing[0].programs;

      destroySlider(nowSliderCanalClaro);
      destroySlider(nowSliderConcertChannel);

      programingCanalClaro.forEach((program, index) => {
        let programCanalClaro;

        if (index == 0) {
          programCanalClaro = `
          <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button" _id="${program.id_program}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>
                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                <a href="sinopsis.php">
                    <div class="thumbnail">
                        <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                    </div>
                    <div class="a-claro-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.title}</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
          `;
        } else {
          programCanalClaro = `
          <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button" _id="${program.id_program}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>
                
                <a href="sinopsis.php">
                    <div class="thumbnail">
                        <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                    </div>
                    <div class="a-claro-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.title}</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
          `;
        }
        nowSliderCanalClaro.append(programCanalClaro);
      });

      let programConcertChannel;
      programingConcertChannel.forEach((program, index) => {
        if (index == 0) {
          programConcertChannel = `
          <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button" _id="${program.id_program}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>
                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                <a href="sinopsis.php">
                    <div class="thumbnail">
                        <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-concert-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.title}</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
          `;
        } else {
          programConcertChannel = `
          <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button" _id="${program.id_program}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>
                
                <a href="sinopsis.php">
                    <div class="thumbnail">
                        <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-concert-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.title}</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
          `;
        }
        nowSliderConcertChannel.append(programConcertChannel);
      });

      createTvSlider(nowSliderCanalClaro);
      createTvSlider(nowSliderConcertChannel);
      addFavorites();
      /* END SLIDER "AHORA EN VIVO CANAL CLARO*/
    }
  });
}

export { getPrograms };
