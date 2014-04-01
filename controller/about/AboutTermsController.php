<?php
class AboutTermsController extends ViewController {

	protected function control() {
		$this->render( array(
			'view' => 'about/terms.php'
		));
	}
}
?>