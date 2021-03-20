<?php 

namespace App;

use App\RnaTranscription;

$rnaTranscription = new RnaTranscription;

echo ($rnaTranscription->toRna('C'));

?>