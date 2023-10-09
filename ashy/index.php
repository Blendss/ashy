<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="docs/style.css">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moda brasileira</title>
</head>

<body>

  <?php include 'navbar.php'; ?>

  <div>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="docs/img/img01.jpg" class="foto">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="docs/img/img02.jpg" class="foto">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="docs/img/img03.jpg" class="foto">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="docs/img/img04.jpg" class="foto">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
    </div>
    <div class="divresponsive">
      <h1 style="text-align: center; font-family: 'Poppins',sans-serif;">
      História da moda a partir dos anos 60
      </h1>
      <p class="texto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </p>
    </div>
  </div>

</body>
<script src="docs/slider.js"></script>
<script src="docs/script.js"></script>

</html>