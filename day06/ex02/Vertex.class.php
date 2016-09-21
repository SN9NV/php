<?php
	require "Color.class.php";

	class Vertex {
		private $_x = 0.0;
		private $_y = 0.0;
		private $_z = 0.0;
		private $_w = 1.0;
	 	private $_color;
		public static $verbose = false;

		public static function doc() {
			print(file_get_contents('Vertex.doc.txt'));
		}

		public function __construct(array $args) {
			$this->_x = $args['x'];
			$this->_y = $args['y'];
			$this->_z = $args['z'];
			if (array_key_exists('w', $args)) {
				$this->_w = $args['w'];
			}
			else {
				$this->_w = 1.0;
			}
			if (array_key_exists('color', $args)) {
				$this->_color = $args['color'];
			}
			else {
				$this->_color = new Color(array('rgb' => 0xFFFFFF));
			}
			if ($this::$verbose) {
				printf("Vertex( x:%.2f, y:%.2f, z:%.2f, w:%.2f, %s ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
			}
		}

		public function __get($name) {
			switch ($name) {
				case 'x':
					return $this->_x;
				case 'y':
					return $this->_y;
				case 'z':
					return $this->_z;
				case 'w':
					return $this->_w;
				case 'color':
					return $this->_color;
				default:
					echo "No value with name '$name' exists\n";
					return NULL;
			}
		}

		public function __set($name, $value) {
			switch ($name) {
				case 'x':
					$this->_x = $value;
				case 'y':
					$this->_y = $value;
				case 'z':
					$this->_z = $value;
				case 'color':
					$this->_color = $value;
				default:
					echo "No value with name '$name' exists\n";
			}
		}

		public function __toString() {
			if ($this::$verbose) {
				return sprintf("Vertex( x:%.2f, y:%.2f, z:%.2f, w:%.2f, %s )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
			}
			else {
				return sprintf("Vertex( x:%.2f, y:%.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
			}
		}

		public function __destruct() {
			if ($this::$verbose) {
				printf("Vertex( x:%.2f, y:%.2f, z:%.2f, w:%.2f, %s ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
			}
		}
	}
?>
