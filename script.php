<?php


$string= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ipsa atque voluptas pariatur amet soluta magni eum eius facilis, impedit enim assumenda, ad fuga inventore harum obcaecati quibusdam iure nobis.
Nemo alias sit quia reprehenderit voluptas voluptatum, tempore maxime minus nisi, ex magni! Nisi voluptates maxime fugit laborum, sequi necessitatibus impedit voluptate consequuntur alias, inventore, blanditiis nam quae repellendus facilis.
Ducimus velit alias, deleniti quasi eligendi odit unde ratione. Fuga unde ea quia recusandae tempore quod eos atque aut reiciendis soluta autem non, ipsum perspiciatis! Possimus sed omnis unde iure.
Iusto, officia delectus eum quo reprehenderit molestias provident facere corporis numquam esse impedit, debitis aspernatur aut. In illum impedit nulla magni, sed necessitatibus ad, molestias, accusantium ipsam expedita vitae eaque.
Consectetur assumenda nesciunt harum ratione? Vero dolore id animi laborum similique corporis veritatis magnam explicabo. Doloribus hic libero non veritatis, eaque voluptatum, numquam quibusdam, sequi praesentium iusto ipsum rerum architecto.
Unde doloremque ipsum a aut debitis saepe excepturi quaerat. Maxime, tempora unde. Fugit nihil beatae tenetur possimus laboriosam modi voluptas dolorum officia atque explicabo magnam laudantium quis cupiditate, totam nesciunt.
In aliquid delectus perferendis cum dolore! Tempora aperiam itaque voluptatibus nisi voluptatum dignissimos quo porro nemo nobis, at vero aspernatur commodi iure culpa fugiat! Officiis debitis vitae quidem placeat eius!
Cupiditate quidem corrupti distinctio odio laboriosam autem doloremque quo culpa perferendis voluptatum, nostrum facere, aut in exercitationem vero ducimus? Magnam accusamus id, itaque ipsum necessitatibus atque officia totam officiis impedit.
Est numquam, delectus repellendus quos voluptate ipsa error perspiciatis tempore excepturi ratione reprehenderit nemo beatae a amet facere eaque eius dolore earum pariatur! Ipsam assumenda corporis, distinctio animi repellat aliquid.
Dolore totam consectetur sapiente neque, eveniet voluptates quis quod id sed ipsam labore. Excepturi provident optio quis ea unde, temporibus, placeat, quidem voluptates laborum animi fugiat perferendis. Harum, dolorem laborum.";

echo $string;
echo "<br>";
echo "<br>";
echo "<br>";
echo "Il precedente paragrafo ha ". strlen($string) . " caratteri";

$negative_word= $_GET["neg_word"];
echo "<br>";
echo "<br>";
echo "La parola da evitare è : ".$negative_word;

echo "<br>";
echo "<br>";
echo "<br>";

$newString=str_replace("Lorem", "***", $string);
echo $newString;
echo "<br>";
echo "<br>";
echo "<br>";
echo "Il nuovo  paragrafo ha ". strlen($newString) . " caratteri";



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_BADWORDS</title>
</head>
<body>
    





</body>
</html>



