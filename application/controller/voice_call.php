<?php
class Voice_call extends Kiel_Controller
{

	public function call_in_post()
	{
		require('tropo_voice/tropo.class.php');

		try {
		  // If there is not a session object in the POST body,
		  // then this isn't a new session. Tropo will throw
		  // an exception, so check for that.
		  $session = new Session();
		} catch (TropoException $e) {
		  // This is a normal case, so we don't really need to 
		  // do anything if we catch this.
		}

		$caller = $session->getFrom();

		$tropo = new Tropo();
		// $caller now has a hash containing the keys: id, name, channel, and network
		$tropo->say("Hello Nicole Tibay. I love you.");
		$tropo->renderJSON();

	}
	public function test_get()
	{
		
	}

}

?>
