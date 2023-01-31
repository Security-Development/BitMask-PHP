<?php

trait BitMasking {
    public static function add(int &$a1, int $a2) : void {
        $a1 |= 1 << $a2;
    }

    public static function remove(int &$a1, int $a) : void {
        $a1 &= ~(1 << $a2);
    }
    
    public static function is_check(int $a1, int $a2) : bool {
    	return $a1 & (1 << $a2);
    }
}


class IO {
	use BitMasking;
	
	public function main() : void {
		$b = 0;
		self::add($b, 0);
		self::add($b, 3);
		echo decbin($b);
	}
}

$a = new IO();
$a->main();

?>
