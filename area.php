<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ареал</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/secondary_pages.css" />
    <link rel="stylesheet" href="css/footer.css" />
  </head>
  <body>
  <?php include_once 'php/header.php'; ?>

    <main>
      <section class="area__map">
        <h1 class="area__map-main_title">АРЕАЛ</h1>
        <div class="container">
          <div class="area__map-inner">
            <div class="area__map-inner_content-box">
              <img src="img/area_page/bigmap.png" alt="" class="map-pic" />
              <img
                src="img/area_page/meerkat_teacher.png"
                alt=""
                class="meerkat-teacher-pic"
              />
              <img
                src="img/area_page/meerkat_baby.png"
                alt=""
                class="meerkat-baby-pic"
              />
            </div>
            <div class="area__map-inner_info">
              <h2 class="area__map-title">Южная Африка</h2>
              <p class="area__map-paragraph">
                является зоной обитания сурикатов
              </p>
              <img src="img/area_page/desert_logo.png" alt="" />
              <p class="area__map-paragraph">Пустыня Калахари</p>
              <img
                class="area__map-inner_info-branching"
                src="img/area_page/branching.png"
                alt=""
              />
              <div class="area__map-inner_info-countries">
                <p class="area__map-info_countries-item">Ангола</p>
                <p class="area__map-info_countries-item">Намибия</p>
                <p class="area__map-info_countries-item">ЮАР</p>
                <p class="area__map-info_countries-item">Ботсваны</p>
                <p class="area__map-info_countries-item">Зимбабве</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="stats">
        <div class="container">
          <div class="stats-inner">
            <div class="stats-inner_content">
              <img
                class="stats-inner_content-fragment"
                src="img/area_page/fragments/fragment_2.png"
                alt=""
              />
              <div class="stats-inner_content-text">
                <p>
                  Сурикаты приспособлены к сухому жаркому климату, способны
                  переносить пыльные бури. Поэтому они живут в пустынях и
                  полупустынях.
                </p>
                <p>
                  Сурикаты предпочитают селиться в районах саванн и открытых
                  равнин, причём в местностях с твёрдым грунтом. Если они живут
                  в горном районе, то убежищами для них служат скалистые
                  пещерки.
                </p>
                <p>
                  Средняя плотность населения зверьков может достигать 12 особе
                  на квадратный километр.
                </p>
              </div>
              <img
                src="img/area_page/meerkat_photo.png"
                alt=""
                class="stats-inner_content-img"
              />
            </div>
            <div class="stats-inner_numbers">
              <img
                class="stats-inner_numbers-img"
                src="img/area_page/chart.png"
                alt=""
              />
              <div class="stats-inner_numbers-text">
                <h2 class="stats-title">В Африке всегда жарко?</h2>
                <p>
                   Для пустыни Калахари характерен тропический пустынный
                  (континентальный) тип климата, где круглый год господствует
                  сухой и жаркий тропический континентальный воздух.
                </p>
                <p>
                   Средние температуры самого тёплого месяца достигают +30…+36
                  °С, самого холодного — +13…+18 °С. Годовая амплитуда
                  возрастает до 20 °С и выше. 
                </p>
              </div>
            </div>
            <div class="stats-inner_numbers-2">
              <div class="stats-inner_numbers-text">
                <h2 class="stats-title">Почему мы выбираем пустыни?</h2>
                <p>
                   Сурикаты приспособлены к сухому жаркому климату, способны
                  переносить пыльные бури. Поэтому они живут в пустынях и
                  полупустынях.
                </p>
                <p>
                   Сурикаты предпочитают селиться в районах саванн и открытых
                  равнин, причём в местностях с твёрдым грунтом. Если они живут
                  в горном районе, то убежищами для них служат скалистые
                  пещерки.
                </p>
                <p>
                   Средняя плотность населения зверьков может достигать 12 особе
                  на квадратный километр.
                </p>
              </div>
              <img
                class="stats-inner_numbers-2-img"
                src="img/area_page/diagram.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include_once 'php/footer.php'; ?>
  </body>
</html>
