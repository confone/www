<?php
class AboutContactController extends ViewController {

	protected function control() {
		$this->render( array(
			'view' => 'about/contact.php'
		));
	}
}
?>