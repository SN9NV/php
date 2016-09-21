<?php
class NightsWatch {
	public $recruited;

	public function recruit($new) {
		$this->recruited[] = $new;
	}

	public function fight() {
		foreach ($this->recruited as $new_recruit) {
			$impliments = class_implements($new_recruit);
			if (array_key_exists('IFighter', $impliments)) {
				$new_recruit->fight();
			}
		}
	}
}
?>