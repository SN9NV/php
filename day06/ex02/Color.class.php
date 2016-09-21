<?php
	class Color {
		public $red = 0;
		public $green = 0;
		public $blue = 0;
		public static $verbose = false;

		public function __construct (array $colours) {
			if (array_key_exists('rgb', $colours)) {
				$this->red = round(($colours['rgb'] & 0xFF0000) >> 16);
				$this->green = round(($colours['rgb'] & 0x00FF00) >> 8);
				$this->blue = round($colours['rgb'] & 0x0000FF);
			}
			else {
				if (array_key_exists('red', $colours)) {
					$this->red = round($colours['red']);
				}
				if (array_key_exists('green', $colours)) {
					$this->green = round($colours['green']);
				}
				if (array_key_exists('blue', $colours)) {
					$this->blue = round($colours['blue']);
				}
			}
			if ($this::$verbose) {
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n",
					$this->red, $this->green, $this->blue);
			}
		}

		public function __destruct() {
			if ($this::$verbose) {
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n",
					$this->red, $this->green, $this->blue);
			}
		}

		public function __toString() {
			return sprintf("Color( red: %3d, green: %3d, blue: %3d )",
				$this->red, $this->green, $this->blue);
		}

		public static function doc() {
			print(file_get_contents('Color.doc.txt'));
		}

		public function add(Color $that) {
			return new Color(array(
				'red' => round($this->red + $that->red),
				'green' => round($this->green + $that->green),
				'blue' => round($this->blue + $that->blue)));
		}

		public function sub(Color $that) {
			return new Color(array(
				'red' => round($this->red - $that->red),
				'green' => round($this->green - $that->green),
				'blue' => round($this->blue - $that->blue)));
		}

		public function mult($scalar) {
			return new Color(array(
				'red' => round($this->red * $scalar),
				'green' => round($this->green * $scalar),
				'blue' => round($this->blue * $scalar)));
		}
	}
?>
