<?
class myTask {
public function revert($text) {
	$count = 0;
	
	$reverse = array_reverse ((preg_match_all('/[!?.]/', $text, $matches, PREG_OFFSET_CAPTURE))[0]);
	$line = preg_replace_callback('/[!?.]/', function ($matches) use (&$count, &$reverse){
            return $reverse[$count++][0];
        }, $text);
		return $line;
	}
}