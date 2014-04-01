<?php
class AboutIndexController extends ViewController {

	protected function control() {
		$this->render( array(
			'view' => 'about/index.php'
		));
	}
}
?>