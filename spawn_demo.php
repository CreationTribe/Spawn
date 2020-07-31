<?PHP

include("src/classes/Spawn.phc");

$spawn = new \phobostech\spawn\classes\Spawn;

$words = $spawn->word_list(50);
foreach($words as $word){
  echo $word."\r\n";
}
