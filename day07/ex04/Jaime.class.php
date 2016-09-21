<?php
class Jaime {
	public function sleepWith($class) {
		switch (get_class($class)) {
			case "Tyrion" : {
				print("Not even if I'm drunk !\n");
			}
			case "Stark" : {
				print("Let's do this.\n");
			}
			case "Lannister" : {
				print("With pleasure, but only in a tower in Winterfell, then.\n");
			}
		}

	}
}
?>