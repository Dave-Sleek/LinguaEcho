<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voice Recognition App</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
    #output {
      margin-top: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
      min-height: 100px;
    }
    .mic-container {
      margin-top: 20px;
      position: relative;
      width: 100px;
      height: 100px;
      margin: 0 auto;
      cursor: pointer;
    }
    .mic-container img {
      width: 100%;
      height: 100%;
      transition: transform 0.2s;
    }
    .mic-container:hover img {
      transform: scale(1.1);
    }
    .mic-container.pulsing img {
      animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
      0% {
        transform: scale(1);
        box-shadow: 0 0 5px #007BFF;
      }
      50% {
        transform: scale(1.1);
        box-shadow: 0 0 15px #0056b3;
      }
      100% {
        transform: scale(1);
        box-shadow: 0 0 5px #007BFF;
      }
    }
    select {
      padding: 10px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <h1>LinguaEcho 0.1</h1>
  <p>Select a language and click the microphone to speak.</p>
  <label for="language-select">Language:</label>
  <select id="language-select">
  <option value="en-US">English (US)</option>
    <option value="pidgin">Pidgin</option>
    <option value="es-ES">Spanish</option>
    <option value="fr-FR">French</option>
  </select>
  <div class="mic-container" id="mic-container">
    <img src="assets/img/microphone-icon.png" alt="Microphone Icon">
  </div>
  <div id="output">Your speech will appear here...</div>
  <script src="script.js"></script>
  <script async src="https://cse.google.com/cse.js?cx=85f1d797e0c8840de">
</script>
<div class="gcse-search"></div>
</body>
</html>


