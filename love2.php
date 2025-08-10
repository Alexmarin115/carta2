<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carta </title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #fdf3e7;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .carta {
      background: #fffaf5;
      border-radius: 25px;
      padding: 30px;
      width: 90%;
      max-width: 600px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      text-align: center;
      position: relative;
    }

    .mensaje {
      font-size: 18px;
      color: #333;
      margin-bottom: 20px;
    }

    .arbol {
      width: 200px;
      height: 200px;
      margin: 0 auto;
      position: relative;
    }

    .tronco {
      width: 20px;
      height: 60px;
      background: #5C4033;
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 5px;
    }

    .corazon {
      position: absolute;
      width: 20px;
      height: 20px;
      background: #F55A8C;
      transform: rotate(45deg);
      animation: flotar 6s infinite ease-in;
    }

    .corazon::before,
    .corazon::after {
      content: "";
      position: absolute;
      width: 20px;
      height: 20px;
      background: #F55A8C;
      border-radius: 50%;
    }

    .corazon::before {
      top: -10px;
      left: 0;
    }

    .corazon::after {
      left: -10px;
      top: 0;
    }

    /* Distribuir corazones al azar */
    .corazon:nth-child(n+2) {
      top: calc(20% + (60% * random));
      left: calc(10% + (80% * random));
      animation-delay: calc(1s * random);
    }

    @keyframes flotar {
      0% { transform: translateY(0) rotate(45deg); opacity: 1; }
      100% { transform: translateY(60px) rotate(45deg); opacity: 0; }
    }

    .contador {
      font-size: 16px;
      margin-top: 30px;
      color: #444;
    }

    .tiempo {
      font-weight: bold;
      font-size: 18px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="carta">
    <div class="mensaje">
      <p>Una flor para otra Flor :) </p>
      <p>Si pudiera elegir un lugar seguro, sería a tu lado.<br>
      Cuanto más tiempo estoy contigo, más te amo.<br>
      Este texto es solo un ejemplo de lo mucho que te quiero.</p>
    </div>

    <div class="arbol">
      <div class="tronco"></div>
      <!-- Corazones -->
      <div class="corazon" style="top:20px; left:40px; animation-delay: 0s;"></div>
      <div class="corazon" style="top:30px; left:100px; animation-delay: 1s;"></div>
      <div class="corazon" style="top:10px; left:70px; animation-delay: 2s;"></div>
      <div class="corazon" style="top:50px; left:130px; animation-delay: 2.5s;"></div>
      <div class="corazon" style="top:40px; left:20px; animation-delay: 3s;"></div>
      <div class="corazon" style="top:60px; left:90px; animation-delay: 4s;"></div>
      <div class="corazon" style="top:30px; left:160px; animation-delay: 5s;"></div>
    </div>

    <div class="contador">
      <p>Mi amor por ti comenzó hace...</p>
      <div class="tiempo" id="tiempo"></div>
    </div>
  </div>

  <script>
    const tiempoEl = document.getElementById("tiempo");
    const inicio = new Date("2024-03-26T00:00:00"); // Cambia esta fecha si lo deseas

    function actualizarContador() {
      const ahora = new Date();
      const diferencia = ahora - inicio;

      const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
      const horas = Math.floor((diferencia / (1000 * 60 * 60)) % 24);
      const minutos = Math.floor((diferencia / (1000 * 60)) % 60);
      const segundos = Math.floor((diferencia / 1000) % 60);

      tiempoEl.textContent = `${dias} días ${horas} horas ${minutos} minutos ${segundos} segundos`;
    }

    setInterval(actualizarContador, 1000);
    actualizarContador();
  </script>
</body>
</html>
