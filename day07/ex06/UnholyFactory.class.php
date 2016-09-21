<?php
class UnholyFactory {
	public $list = array();

	public function absorb($fighter) {
		if (!is_subclass_of($fighter, 'Fighter')) {
			echo "(Factory can't absorb this, it's not a fighter)\n";
			return;
		}
		foreach ($this->list as $f) {
			if ($f->name == $fighter->name) {
				echo "(Factory already absorbed a fighter of type " . $fighter->name . ")\n";
				return;
			}
		}
		array_push($this->list, $fighter);
		echo "(Factory absorbed a fighter of type " . $fighter->name . ")\n";
	}

	public function fabricate($fighter) {
		foreach ($this->list as $f) {
			if ($f->name == $fighter) {
				echo "(Factory fabricates a fighter of type " . $fighter . ")\n";
				return $f;
			}

		}
		echo "(Factory hasn't absorbed any fighter of type " . $fighter . ")\n";
		return NULL;
	}
}
?>