<?php

//Check if we got a response
if(isset($_POST['content'])) {
   $content = $_POST['content'];

//Include sphinxapi (need to match exact version for client)
require('sphinxapi.php');

$s = new SphinxClient;
$s->setServer("sphinxsearch", 9312);
$s->setMatchMode(SPH_MATCH_ANY);
$s->setMaxQueryTime(3);

$result = $s->query($content, 'hackernews');

if ( $result === false ) {
    echo "Query failed: " . $s->GetLastError() . ".\n";
  }

var_dump($result);
?>

<p>Thanks for submitting the form</p>

<?php
} else {
// form not submitted so show the form
?>

<form class="" action="#" method='POST'>
<label>Content:</label><input name="content" required id="content" />
<button class="login-button" type="submit" title="Confirm">Confirm</button>
</form>
<?php 
}
?>
