<?php error_reporting( E_ALL );?>
<?php ini_set( 'display_errors', 1 );?>
<?php

require_once './vendor/autoload.php';

use app\ArrayPart;
use app\LogicalPart;
use app\zoo\FactoryFish;
use app\zoo\FactoryAnimals;
use app\storage\ObjectCollection;
use app\storage\ObjectDataStorage;


/**
 * Logical Part.
 */
$logicalPart = new LogicalPart();

$logicalPart->evilClown("Evil clown don't smile :(((((");

$logicalPart->luckyTickets(['123123', '234215', '005230', '452432', '061520', '34532']);


/**
 * Arrays Part.
 */
$arrayPart = new ArrayPart();

$arrayPart->reverseString("Hello dev-pro!");

$arrayPart->getWords("After several days of rain that nearly floods Derry, Maine, five-year-old Georgie Denbrough goes
outside to play. He brings with him a paper boat his older brother, Bill, made for him while sick in
bed. Georgie helps with the boat by retrieving a box of paraffin from the shelves by the cellar stairs,
even though the power is out and Georgie imagines a monster lives in the cellar. Bill melts the
paraffin in a bowl, and the boys laugh and joke together while they smear the paraffin over the
folded newspaper boat to waterproof it. Before Georgie goes out to play, he kisses Bill's cheek, and
Bill tells Georgie to be careful.
Even though the rains have slackened, the gutters run with water. In his yellow hat and slicker,
Georgie follows his boat as it sails along Witcham Street, wishing Bill could be with him to see it go
because Georgie is not as good as Bill at telling stories about what he sees. A current takes the
boat into a storm drain, and Georgie peeks inside to look for it.
In the drain Georgie sees a pair of yellow eyes. Scared, he begins to back away, but a voice speaks
to him. Georgie looks back and sees a clown; the clown introduces himself as \"Mr. Bob Gray, also
known as Pennywise the Dancing Clown.\" Georgie at first thought the drain smelled like his scary
cellar at home, but now he can smell a carnival. Pennywise has Georgie's boat in one hand and a
balloon in the other; he offers Georgie both. When Georgie reaches forward, Pennywise grabs
Georgie's arm and rips it off. Georgie dies immediately. Dave Gardner, arriving \"only 45 seconds
after the first scream,\" finds Georgie's body.
The sheriff tells reporters Georgie must have got his arm stuck in a fast current in the storm drain.
Mrs. Denbrough is sedated in the local emergency room; Bill remains sick in bed, listening to his
father weep in another room. The paper boat continues through the sewers to the Penobscot River
and out to sea as the rain clouds break overhead.");

$arrayPart->sumAllElementsArray([[2, 4, 1, 3], [2, 2],[2, 7, 5]]);

$arrayPart->getUniqueWords("Lorem ipsum dolor sit amet lorem dolor Sit ipsum Amet");

$arrayPart->mirrorLetter("HELLO WORLD!");


/**
 * OOP Part Zoo.
 */

/** @var \app\zoo\animals\Elephant $elephant */
$elephant = FactoryAnimals::create(FactoryAnimals::ELEPHANT);

/** @var \app\zoo\animals\Cougar $cougar */
$cougar = FactoryAnimals::create(FactoryAnimals::COUGAR);

echo $elephant->getType();

echo $elephant->growls()  . "<br>";

echo $cougar->getType();

echo $cougar->growls() . "<br>";

/** @var \app\zoo\fish\Shark $shark */
$shark = FactoryFish::create(FactoryFish::SHARK);

echo $shark->getType();

echo $shark->swimDeep() . "<br>";


/**
 * OOP Part Collection.
 */
$collection = new ObjectDataStorage(new ObjectCollection());

$object = new stdClass();

$object2 = new stdClass();

$collection->add($object, "First object");

$collection->add($object2, "Second object");

$collection->getHash($object);

$collection->current();

$collection->check($object);

$collection->remove($object2);

$collection->getObjectList();


