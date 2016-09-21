<?php
	class Vector {
		private $_dest;
		private $_orig;
		private $_x;
		private $_y;
		private $_z;
		private $_w;
		public static $verbose = false;

		public function __construct(array $args) {
			$this->_dest = $args['dest'];
			if (array_key_exists('orig', $args)) {
				$this->_orig = $args['orig'];
			}
			else {
				$this->_orig = new Vertex(array('x' => 0.0, 'y' => 0.0, 'z' => 0.0, 'w' => 1.0));
			}
			$this->_x = $this->_dest->x - $this->_orig->x;
			$this->_y = $this->_dest->y - $this->_orig->y;
			$this->_z = $this->_dest->z - $this->_orig->z;
			$this->_w = $this->_dest->w - $this->_orig->w;
			if ($this::$verbose) {
				printf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
			}
		}

		public function __destruct() {
			if ($this::$verbose) {
				printf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
			}
		}

		public function __toString() {
			return sprintf("Vector( x: %.2f, y: %.2f, z: %.2f, w: %.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		}

		public static function doc() {
			print(file_get_contents('Vector.doc.txt'));
		}

		public function __get($name) {
			switch ($name) {
				case 'orig':
					return $this->_orig;
				case 'dest':
					return $this->_dest;
				case 'x':
					return $this->_x;
				case 'y':
					return $this->_y;
				case 'z':
					return $this->_z;
				case 'w':
					return $this->_w;
				default:
					echo "No value with name '$name' exists\n";
					return NULL;
			}
		}

		public function magnitude() {
			return sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z));
		}

		public function normalize() {
			$len = $this->magnitude();
			$tempx = $this->_x / $len;
			$tempy = $this->_y / $len;
			$tempz = $this->_z / $len;
			$temp = new Vertex(array('x' => $tempx, 'y' => $tempy, 'z' => $tempz));
			return new Vector(array('dest' => $temp));
		}

		public function add(Vector $v2) {
			$destx = $this->_dest->x + $v2->dest->x;
			$desty = $this->_dest->y + $v2->dest->y;
			$destz = $this->_dest->z + $v2->dest->z;
			$origx = $this->_orig->x + $v2->orig->x;
			$origy = $this->_orig->y + $v2->orig->y;
			$origz = $this->_orig->z + $v2->orig->z;
			$dest = new Vertex(array('x' => $destx, 'y' => $desty, 'z' => $destz));
			$orig = new Vertex(array('x' => $origx, 'y' => $origy, 'z' => $origz));
			return new Vector(array('dest' => $dest, 'orig' => $orig));
		}

		public function sub(Vector $v2) {
			$destx = $this->_dest->x - $v2->dest->x;
			$desty = $this->_dest->y - $v2->dest->y;
			$destz = $this->_dest->z - $v2->dest->z;
			$origx = $this->_orig->x - $v2->orig->x;
			$origy = $this->_orig->y - $v2->orig->y;
			$origz = $this->_orig->z - $v2->orig->z;
			$dest = new Vertex(array('x' => $destx, 'y' => $desty, 'z' => $destz));
			$orig = new Vertex(array('x' => $origx, 'y' => $origy, 'z' => $origz));
			return new Vector(array('dest' => $dest, 'orig' => $orig));
		}

		public function opposite() {
			$vert = new Vertex(array('x' => -$this->_x, 'y' => -$this->_y, 'z' => -$this->z));
			return new Vector(array('dest' => $vert));
		}

		public function scalarProduct($s) {
			$vert = new Vertex(array('x' => $this->_x * $s, 'y' => $this->_y * $s, 'z' => $this->z * $s));
			return new Vector(array('dest' => $vert));
		}

		public function dotProduct(Vector $v2) {
			return ($this->_x * $v2->x + $this->_y * $v2->y + $this->_z * $v2->z);
		}

		public function cos(Vector $v2) {
			$v1 = $this->normalize();
			$v2 = $v2->normalize();
			return ($v1->x * $v2->x + $v1->y * $v2->y + $v1->z * $v2->z);
		}

		public function crossProduct(Vector $v2) {
			$x = $this->_y * $v2->z - $this->_z * $v2->y;
			$y = $this->_z * $v2->x - $this->_x * $v2->z;
			$z = $this->_x * $v2->y - $this->_y * $v2->x;
			$v = new Vertex(array('x' => $x, 'y' => $y, 'z' => $z));
			return new Vector(array('dest' => $v));
		}
	}
?>
