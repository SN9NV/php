<?php
class Tyrion {
	public function sleepWith($class) {
		switch (get_class($class)) {
			case "Jaime" : {
				print("Not even if I'm drunk !\n");
			}
			case "Stark" : {
				print("Let's do this.\n");
			}
			case "Lannister" : {
				print("Not even if I'm drunk !\n");
			}
		}
	}
}
?>
