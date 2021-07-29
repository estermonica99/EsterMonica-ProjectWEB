<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MABIM ELEKTRO 2021</title>
  <link rel="stylesheet" href="stylevideo.css">
</head>
<body>
  <section class="showcase">
    <header>
      <h2 class="logo">MASA BIMBINGAN ELEKTRO 2021 &#10024;</h2>
      <div class="toggle"></div>
    </header>
    <video src="videobackground.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>Electrical Engineering! </h2> 
      <h3>We Power The World, We Strong Together!! &#9889;</h3>
      <p>All people are created equal, but only the finest become Electricians. Use the right tool, for the right job, in the right way!</p>
      <a href="./Explore/explore.html">Explore</a>
    </div>
    <ul class="social">
      <li><a href="https://web.facebook.com/hmelektropnj"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="https://twitter.com/hme_pnj?s=21"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="https://www.instagram.com/konektor.2020/"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      <li><a href="https://drive.google.com/drive/folders/1fOqaxIz7Pw_Plv9GLyp4gKKK8GPJPtdz?usp=sharing">CHAPTER</a></li>
      <li><a href="https://drive.google.com/drive/folders/1012K7iMIo0-JOFI9qHavdlHSRifxyftH?usp=sharing">VIDEO</a></li>
      <li><a href="./PHOTO/picture.html">PHOTO<a></li>
      <li><a href="https://docs.google.com/forms/d/1y51agJUf0wLtfHQ7WM3lHOO5LDC0_eerX7DzazainNU/edit?usp=sharing">CONTACT US</a></li>
    </ul>
  </div>

  <script>
    const menuToggle = document.querySelector('.toggle')
    const showcase = document.querySelector('.showcase')

    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active')
      showcase.classList.toggle('active')
    })
  </script>
</body>
</html>