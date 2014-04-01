<?php
class AboutTeamController extends ViewController {

	protected function control() {
		$this->render( array(
			'view' => 'about/team.php'
		));
	}
}
?>