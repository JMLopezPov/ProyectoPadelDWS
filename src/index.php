<?php

//    //"1ºSOLUCIÓN."
//    include_once("app/Persona.php");
//    use \app\Persona;

    //"2º SOLUCIÓN."
    namespace  app;
    use App\Enums\LadoPreferido;
    use App\Enums\ManoHabil;
    use App\Horarios\Intervalo;
    use App\Personas\Jugador;
    use App\Personas\Persona;

    include_once("app/Personas/Persona.php");
    include_once("app/Personas/Jugador.php");
    include_once("app/Enums/ManoHabil.php");
    include_once("app/Enums/LadoPreferido.php");
    include_once ("app/Horarios/Intervalo.php");

    $Persona = new Persona('123456789N', 'Javier', 'Gonzalez');

    var_dump($Persona);

    $Jugador = new Jugador("87654321",
                        "Rocio",
                        "Martinez",
                        1,
                        ManoHabil::Izquieda,
                        LadoPreferido::Izquiedo,
                        );


    var_dump($Jugador);

    $intervalo1 = new Intervalo('8.00', '9.00');
    $intervalo2 = new Intervalo('9.00', '10.00');
    $intervalo3 = new Intervalo('10.00', '11.00');
    $intervalo4 = new Intervalo('11.00', '12.00');

    var_dump($intervalo1);
    echo "<br/>";

    var_dump($intervalo2);
    echo "<br/>";

    var_dump($intervalo3);
    echo "<br/>";

    var_dump($intervalo4);
    echo "<br/>";

    $arrayIntervalos = [$intervalo1,$intervalo2,$intervalo3,$intervalo4];

    print_r($arrayIntervalos);

    foreach ($arrayIntervalos as $i){
        echo "El intervalo comienza a las " . $i->getHoraInicio() . " y acaba a las " . $i->getHoraFin() . " . <br/>";
    }

    echo "El intervalo2 está en la posición: " .  array_search($intervalo2, $arrayIntervalos);

    //echo "Funciona??";

?>
