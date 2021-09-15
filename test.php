<!doctype html>
<html lang="fr">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Test</title>
  </head>
  <body>
    <?php require("./partial/_navBar.php"); ?>
    <div class= "container">
      <h1>Test</h1>
      <pre>
     résultats php
      =====================================
      <?php
      // chaine de caractère ou string
     
      //entier  ou int
      // $truc = 3.14 ;
      // var_dump($texte);
      //décimal ou float
      // $decimal = 3.14;

      //tableau ou array
      // $tab = [];
      // $tab[] = $texte;
      // $tab[] = $truc;
      // $tab[] = $décimal;

      // $tab = ["vegetable", "carotte"];

      // bouléen
      //$check = false;

      // for varaible in databases
      // $thing_s_text = "écriture en snack case";
      // pour les nom de class
      // $TexteDuMachin = "écriture en Pascal case ou upper camel case";
      // les variables en php, js, les nom des fichiers standard etc...
      // $texteDuMachin = "écriture en camel case";


      // //chaine de caractère avec des simples cotes
      // $name = 'Costa';

      // // chaine de caractère avec des doubles cotes
      // $firstName = "Léo";
      // //concaténation
      // $fullName = $firstName .' '. $name;

      // $fullName2 = "$firstName $name";


      // echo "il s'appelle $fullName ";

    //   // ancienne manière
    //   $tab = array(
    //   "valeur1",
    //   "valeur2"
    // );

    //   //manière actuelle

    //   $actualArray = [
    //     "value1",
    //     "value2",
    //     7 ,
    //     9.4 ,
    //     ["tab2 valeur1",
    //     4],
    //     "coucou",
    //   ];

    //   $associatArray = [
    //     "name" => "Costa",
    //     "first Name" => "Léo",
    //   ];

    //   var_dump($associatArray["first Name"]);

    // $tab = ["coucou"];

    // $tab1 = [
    //   'tab1Key1' => " tableau 1 valeur 1",
    //   'tab1Key2' => " tableau 1 valeur 2",
    //   'tab1Key3' => " tableau 1 valeur 3",
    // ];
    // $tab2 = [
    //   'tab2Key1' => " tableau 2 valeur 1",
    //   'tab2Key2' => " tableau 2 valeur 2",
    //   'tab2Key3' => [
    //     'keyTruc' =>" tableau 2 valeur 3",
    //     'keyMachin' => "autre chose",
    //   ],
    // ];
    // $tab3 = [
    //   'tab3Key1' => " tableau 3 valeur 1",
    //   'tab3Key2' => " tableau 3 valeur 2",
    //   'tab3Key3' => " tableau 3 valeur 3",
    // ];
    // $tab = [
    //   'tab1' => " tab1",
    //   'tab2' => " tab2",
    //   'tab3' => " tab3",
    // ];
    // 
    
    //encode message 
    // $message = "APPRENDRE PHP EST UNE CHOSES FORMIDABLE";
    // $key = "BACKEND";
    // $messageTab = str_split($key);
    // $keyTab = str_split($key);
    // $keySize = count($keyTab);
    
    // $encodedMessage = [];
    // $keyCounter = 0;
    // foreach ($messageTab as $pointer => $letterToEncode) {
    //   $positionKeyLetter = $keyCounter % $keySize;
    //   $keyLetter = $keyTab[$positionKeyLetter]
    //   if ($letterToEncode != " "){
    //       $encodedMessage[] = $vigenere[$letterToEncode][$keyLetter];
    //   } else{
    //       $encodedMessage[] = " ";
    //   }
    //   $keyCounter++;
    // }

    // $cryptedMessage = implode($encodedMessage)
    // var_dump()
    // 

<!-- decode message -->
    
    $encodeMessage = "TWA PEE WM TESLH WL LSLVNMRJ";
    $key4decode = "VIGENERE";
    $encodeMessageTab2 = str_split($encodeMessage);
    $key4decodeTab2 = str_split($key4decode);
    $key4decodeSize = count($keyTab);
    
    
    $keyCounter2 = 0;
    foreach ($messageTab as $pointer => $letterToDecode) {
    $positionKeyLetter2 = $keyCounter % $key4decodeSize;
    $keyLetter2 = $key4decodeTab2[$positionKeyLetter2]
    if ($letterToDecode != " "){
        for ($i = 0; $i < $sizeAlphabet; $i++) {
          $lineToDecode = $alphabetTab[$i]
          if ($vigenere[$i][$keyLetter2] == $letterToDecode {

          }
        }
    } else{
        $encodedMessage[] = " ";
    }
    $keyCounter2++;
   }

    $cryptedMessage = implode($encodedMessage)
    var_dump()
    ?>
    
     affichage d'une donné précise: <?php echo $tab['tab2']['tab2Key3']['keyMachin']; ?>
      
      =====================================
      </pre>
    </div>
    <script src="./bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>