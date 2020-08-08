<?php
function magic8Ball() {
  echo "Por favor realiza tu pregunta";
  echo "\n";
  $question = readline(">> ");
  echo "ok... te entiendo, tu pregunta es: ${question}, y sera respondida muy pronto...";
  echo "\n";
  $number = rand(0,19);
    sleep(2);
  echo "Tu Numero Magico es el : ${number}";
  echo "\n";
  sleep(2);
  echo "Te dire tu respuesta ahora mismo....";
  echo "\n";
  sleep(5);
  echo "La respuesta es.....";
   sleep(5);
  echo "\n";
  echo "\n";
  switch($number){
    case 0:
    echo "Es cierto.";
    break;
    case 2:
    echo "Si, definitivamente.";
    break;
    case 3:
    echo "Puedes asegurarlo.";
    break;
    case 4:
    echo "Segun veo, si.";
    break;
    case 5:
    echo "Puedes contar con ello.";
    break;
    case 6:
    echo "Parece ser que si.";
    break;
    case 7:
    echo "Seguramente";
    break;
    case 8:
    echo "Pinta bien.";
    break;
    case 9:
    echo "Si!.";
    break;
    case 10:
    echo "Todo apunta a que si";
    break;
    case 11:
    echo "Tu conoces la respuesta .";
    break;
    case 12:
    echo "Preguntamelo mas tarde.";
    break;
    case 13:
    echo "Mejor no te lo digo";
    break;
    case 14:
    echo "no puedo predecirlo ahora mismo.";
    break;
    case 15:
    echo "concentrate y pregunta de nuevo.";
    break;
    case 16:
    echo "No cuentes con ello.";
    break;
    case 17:
    echo "Mi respuesta es no.";
    break;
    case 18:
    echo "Mis fuentes dicen que no.";
    break;
    case 19:
    echo "No pinta bien.";
    break;
    case 20:
    echo "Lo dudo Mucho";
    break;
  }
  echo "\n";
}

magic8Ball();

