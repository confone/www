<?php
class AboutPrivacyController extends ViewController {

	protected function control() {
		$this->render( array(
			'view' => 'about/privacy.php'
		));
	}
}
?>