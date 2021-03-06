<?php
global $BEAUT_PATH;
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_cobol extends HFile{
   function HFile_cobol(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// Cobol
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array("\"");
$this->delimiters        	= array("~", "!", "@", "$", "%", "^", "&", "*", "(", ")", "_", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", ".", "?", "/");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("*");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"accept" => "1", 
			"access" => "1", 
			"acquire" => "1", 
			"actual" => "1", 
			"add" => "1", 
			"address" => "1", 
			"advancing" => "1", 
			"after" => "1", 
			"all" => "1", 
			"allowing" => "1", 
			"alphabet" => "1", 
			"alphabetic" => "1", 
			"alphabetic-lower" => "1", 
			"alphabetic-upper" => "1", 
			"alphanumeric" => "1", 
			"alphanumeric-edited" => "1", 
			"also" => "1", 
			"alter" => "1", 
			"alternate" => "1", 
			"and" => "1", 
			"any" => "1", 
			"apply" => "1", 
			"are" => "1", 
			"area" => "1", 
			"areas" => "1", 
			"as" => "1", 
			"ascending" => "1", 
			"assign" => "1", 
			"at" => "1", 
			"attribute" => "1", 
			"author" => "1", 
			"auto" => "1", 
			"auto-hyphen-skip" => "1", 
			"auto-skip" => "1", 
			"automatic" => "1", 
			"autoterminate" => "1", 
			"background-color" => "1", 
			"background-colour" => "1", 
			"backward" => "1", 
			"basis" => "1", 
			"beep" => "1", 
			"before" => "1", 
			"beginning" => "1", 
			"bell" => "1", 
			"binary" => "1", 
			"blank" => "1", 
			"blink" => "1", 
			"blinking" => "1", 
			"block" => "1", 
			"bold" => "1", 
			"bottom" => "1", 
			"box" => "1", 
			"boxed" => "1", 
			"by" => "1", 
			"c01" => "1", 
			"c02" => "1", 
			"c04" => "1", 
			"c05" => "1", 
			"c06" => "1", 
			"c07" => "1", 
			"c08" => "1", 
			"c09" => "1", 
			"c10" => "1", 
			"c11" => "1", 
			"c12" => "1", 
			"cancel" => "1", 
			"cbl" => "1", 
			"cd" => "1", 
			"centered" => "1", 
			"cf" => "1", 
			"ch" => "1", 
			"chain" => "1", 
			"chaining" => "1", 
			"changed" => "1", 
			"character" => "1", 
			"characters" => "1", 
			"chart" => "1", 
			"class" => "1", 
			"clock-units" => "1", 
			"close" => "1", 
			"cobol" => "1", 
			"code" => "1", 
			"code-set" => "1", 
			"col" => "1", 
			"collating" => "1", 
			"color" => "1", 
			"colour" => "1", 
			"column" => "1", 
			"com-reg" => "1", 
			"comma" => "1", 
			"command-line" => "1", 
			"commit" => "1", 
			"commitment" => "1", 
			"common" => "1", 
			"communication" => "1", 
			"comp" => "1", 
			"comp-0" => "1", 
			"comp-1" => "1", 
			"comp-2" => "1", 
			"comp-3" => "1", 
			"comp-4" => "1", 
			"comp-5" => "1", 
			"comp-6" => "1", 
			"comp-x" => "1", 
			"compression" => "1", 
			"computational" => "1", 
			"computational-1" => "1", 
			"computational-2" => "1", 
			"computational-3" => "1", 
			"computational-4" => "1", 
			"computational-5" => "1", 
			"computational-6" => "1", 
			"computational-x" => "1", 
			"compute" => "1", 
			"configuration" => "1", 
			"console" => "1", 
			"contains" => "1", 
			"content" => "1", 
			"continue" => "1", 
			"control" => "1", 
			"control-area" => "1", 
			"controls" => "1", 
			"conversion" => "1", 
			"convert" => "1", 
			"converting" => "1", 
			"core-index" => "1", 
			"corr" => "1", 
			"corresponding" => "1", 
			"count" => "1", 
			"crt" => "1", 
			"crt-under" => "1", 
			"csp" => "1", 
			"currency" => "1", 
			"current-date" => "1", 
			"cursor" => "1", 
			"cycle" => "1", 
			"cyl-index" => "1", 
			"cyl-overflow" => "1", 
			"data" => "1", 
			"date" => "1", 
			"date-compiled" => "1", 
			"date-written" => "1", 
			"day" => "1", 
			"day-of-week" => "1", 
			"dbcs" => "1", 
			"de" => "1", 
			"debug" => "1", 
			"debug-contents" => "1", 
			"debug-item" => "1", 
			"debug-line" => "1", 
			"debug-name" => "1", 
			"debug-sub-1" => "1", 
			"debug-sub-2" => "1", 
			"debug-sub-3" => "1", 
			"debugging" => "1", 
			"decimal-point" => "1", 
			"declaratives" => "1", 
			"default" => "1", 
			"delete" => "1", 
			"delimited" => "1", 
			"delimiter" => "1", 
			"depending" => "1", 
			"descending" => "1", 
			"destination" => "1", 
			"detail" => "1", 
			"disable" => "1", 
			"disk" => "1", 
			"disp" => "1", 
			"display" => "1", 
			"display-1" => "1", 
			"display-st" => "1", 
			"divide" => "1", 
			"division" => "1", 
			"down" => "1", 
			"draw" => "1", 
			"drop" => "1", 
			"duplicates" => "1", 
			"dynamic" => "1", 
			"echo" => "1", 
			"egcs" => "1", 
			"egi" => "1", 
			"eject" => "1", 
			"emi" => "1", 
			"empty-check" => "1", 
			"enable" => "1", 
			"encryption" => "1", 
			"end" => "1", 
			"end-accept" => "1", 
			"end-add" => "1", 
			"end-call" => "1", 
			"end-chain" => "1", 
			"end-compute" => "1", 
			"end-delete" => "1", 
			"end-display" => "1", 
			"end-divide" => "1", 
			"end-invoke" => "1", 
			"end-multiply" => "1", 
			"end-of-page" => "1", 
			"end-perform" => "1", 
			"end-read" => "1", 
			"end-receive" => "1", 
			"end-return" => "1", 
			"end-rewrite" => "1", 
			"end-search" => "1", 
			"end-start" => "1", 
			"end-string" => "1", 
			"end-subtract" => "1", 
			"end-unstring" => "1", 
			"end-write" => "1", 
			"ending" => "1", 
			"enter" => "1", 
			"entry" => "1", 
			"environment" => "1", 
			"environment-division" => "1", 
			"eol" => "1", 
			"eop" => "1", 
			"eos" => "1", 
			"equal" => "1", 
			"equals" => "1", 
			"erase" => "1", 
			"error" => "1", 
			"escape" => "1", 
			"esi" => "1", 
			"every" => "1", 
			"examine" => "1", 
			"exceeds" => "1", 
			"exception" => "1", 
			"excess-3" => "1", 
			"exclusive" => "1", 
			"exec" => "1", 
			"execute" => "1", 
			"exhibit" => "1", 
			"extend" => "1", 
			"extended-search" => "1", 
			"external" => "1", 
			"externally-described-key" => "1", 
			"factory" => "1", 
			"false" => "1", 
			"fd" => "1", 
			"fh--fcd" => "1", 
			"fh--keydef" => "1", 
			"file" => "1", 
			"file-control" => "1", 
			"file-id" => "1", 
			"file-limit" => "1", 
			"file-limits" => "1", 
			"file-prefix" => "1", 
			"filler" => "1", 
			"final" => "1", 
			"first" => "1", 
			"fixed" => "1", 
			"footing" => "1", 
			"for" => "1", 
			"foreground-color" => "1", 
			"foreground-colour" => "1", 
			"format" => "1", 
			"from" => "1", 
			"full" => "1", 
			"function" => "1", 
			"generate" => "1", 
			"giving" => "1", 
			"global" => "1", 
			"go" => "1", 
			"goback" => "1", 
			"greater" => "1", 
			"grid" => "1", 
			"group" => "1", 
			"heading" => "1", 
			"high" => "1", 
			"high-value" => "1", 
			"high-values" => "1", 
			"highlight" => "1", 
			"i-o" => "1", 
			"i-o-control" => "1", 
			"id" => "1", 
			"identification" => "1", 
			"ignore" => "1", 
			"in" => "1", 
			"index" => "1", 
			"indexed" => "1", 
			"indic" => "1", 
			"indicate" => "1", 
			"indicator" => "1", 
			"indicators" => "1", 
			"inheriting" => "1", 
			"initial" => "1", 
			"initialize" => "1", 
			"initiate" => "1", 
			"input" => "1", 
			"input-output" => "1", 
			"insert" => "1", 
			"inspect" => "1", 
			"installation" => "1", 
			"into" => "1", 
			"invalid" => "1", 
			"invoke" => "1", 
			"invoked" => "1", 
			"is" => "1", 
			"japanese" => "1", 
			"just" => "1", 
			"justified" => "1", 
			"kanji" => "1", 
			"kept" => "1", 
			"key" => "1", 
			"keyboard" => "1", 
			"label" => "1", 
			"last" => "1", 
			"leading" => "1", 
			"leave" => "1", 
			"left" => "1", 
			"lrft-justify" => "1", 
			"leftline" => "1", 
			"length" => "1", 
			"length-check" => "1", 
			"less" => "1", 
			"limit" => "1", 
			"limits" => "1", 
			"lin" => "1", 
			"linage" => "1", 
			"linage-counter" => "1", 
			"line" => "1", 
			"line-counter" => "1", 
			"lines" => "1", 
			"linkage" => "1", 
			"local-storage" => "1", 
			"lock" => "1", 
			"lock-holding" => "1", 
			"locking" => "1", 
			"low" => "1", 
			"low-value" => "1", 
			"low-values" => "1", 
			"lower" => "1", 
			"lowlight" => "1", 
			"manual" => "1", 
			"mass-update" => "1", 
			"master-index" => "1", 
			"memory" => "1", 
			"merge" => "1", 
			"message" => "1", 
			"method" => "1", 
			"mode" => "1", 
			"modified" => "1", 
			"modules" => "1", 
			"more-labels" => "1", 
			"move" => "1", 
			"multiple" => "1", 
			"multiply" => "1", 
			"name" => "1", 
			"named" => "1", 
			"national" => "1", 
			"national-edited" => "1", 
			"native" => "1", 
			"nchar" => "1", 
			"negative" => "1", 
			"next" => "1", 
			"no" => "1", 
			"no-echo" => "1", 
			"nominal" => "1", 
			"not" => "1", 
			"note" => "1", 
			"nstd-reels" => "1", 
			"null" => "1", 
			"nulls" => "1", 
			"number" => "1", 
			"numeric" => "1", 
			"numeric-edited" => "1", 
			"numeric-fill" => "1", 
			"o-fill" => "1", 
			"object" => "1", 
			"object-computer" => "1", 
			"object-storage" => "1", 
			"occurs" => "1", 
			"of" => "1", 
			"off" => "1", 
			"omitted" => "1", 
			"on" => "1", 
			"oostackptr" => "1", 
			"open" => "1", 
			"optional" => "1", 
			"or" => "1", 
			"order" => "1", 
			"organization" => "1", 
			"other" => "1", 
			"others" => "1", 
			"otherwise" => "1", 
			"output" => "1", 
			"overflow" => "1", 
			"overline" => "1", 
			"packed-decimal" => "1", 
			"padding" => "1", 
			"page" => "1", 
			"page-counter" => "1", 
			"paragraph" => "1", 
			"password" => "1", 
			"pf" => "1", 
			"ph" => "1", 
			"pic" => "1", 
			"picture" => "1", 
			"plus" => "1", 
			"pointer" => "1", 
			"pop-up" => "1", 
			"pos" => "1", 
			"position" => "1", 
			"positioning" => "1", 
			"positive" => "1", 
			"previous" => "1", 
			"print" => "1", 
			"print-control" => "1", 
			"print-switch" => "1", 
			"printer" => "1", 
			"printer-1" => "1", 
			"printing" => "1", 
			"prior" => "1", 
			"private" => "1", 
			"procedure" => "1", 
			"procedure-pointer" => "1", 
			"procedures" => "1", 
			"proceed" => "1", 
			"process" => "1", 
			"processing" => "1", 
			"program" => "1", 
			"program-id" => "1", 
			"prompt" => "1", 
			"protected" => "1", 
			"public" => "1", 
			"purge" => "1", 
			"queue" => "1", 
			"quote" => "1", 
			"quotes" => "1", 
			"random" => "1", 
			"range" => "1", 
			"rd" => "1", 
			"read" => "1", 
			"readers" => "1", 
			"ready" => "1", 
			"receive" => "1", 
			"record" => "1", 
			"record-overflow" => "1", 
			"recording" => "1", 
			"records" => "1", 
			"redefines" => "1", 
			"reel" => "1", 
			"reference" => "1", 
			"references" => "1", 
			"relative" => "1", 
			"release" => "1", 
			"reload" => "1", 
			"remainder" => "1", 
			"remarks" => "1", 
			"removal" => "1", 
			"renames" => "1", 
			"reorg-criteria" => "1", 
			"repeated" => "1", 
			"replace" => "1", 
			"replacing" => "1", 
			"report" => "1", 
			"reporting" => "1", 
			"reports" => "1", 
			"required" => "1", 
			"reread" => "1", 
			"rerun" => "1", 
			"reserve" => "1", 
			"reset" => "1", 
			"resident" => "1", 
			"return" => "1", 
			"return-code" => "1", 
			"returning" => "1", 
			"reverse" => "1", 
			"reverse-video" => "1", 
			"reversed" => "1", 
			"rewind" => "1", 
			"rewrite" => "1", 
			"rf" => "1", 
			"rh" => "1", 
			"right" => "1", 
			"right-justify" => "1", 
			"rollback" => "1", 
			"rolling" => "1", 
			"rounded" => "1", 
			"run" => "1", 
			"s01" => "1", 
			"s02" => "1", 
			"s03" => "1", 
			"s04" => "1", 
			"s05" => "1", 
			"same" => "1", 
			"screen" => "1", 
			"scroll" => "1", 
			"sd" => "1", 
			"search" => "1", 
			"section" => "1", 
			"secure" => "1", 
			"security" => "1", 
			"seek" => "1", 
			"segment" => "1", 
			"segment-limit" => "1", 
			"select" => "1", 
			"selective" => "1", 
			"self" => "1", 
			"selfclass" => "1", 
			"send" => "1", 
			"sentence" => "1", 
			"separate" => "1", 
			"sequence" => "1", 
			"sequential" => "1", 
			"service" => "1", 
			"set" => "1", 
			"setshadow" => "1", 
			"shift-in" => "1", 
			"shift-out" => "1", 
			"sign" => "1", 
			"size" => "1", 
			"skip1" => "1", 
			"skip2" => "1", 
			"skip3" => "1", 
			"sort" => "1", 
			"sort-control" => "1", 
			"sort-core-size" => "1", 
			"sort-file-size" => "1", 
			"sort-merge" => "1", 
			"sort-message" => "1", 
			"sort-mode-size" => "1", 
			"sort-option" => "1", 
			"sort-return" => "1", 
			"source" => "1", 
			"source-computer" => "1", 
			"space" => "1", 
			"spaces" => "1", 
			"space-fill" => "1", 
			"special-names" => "1", 
			"standard" => "1", 
			"standard-1" => "1", 
			"standard-2" => "1", 
			"start" => "1", 
			"starting" => "1", 
			"status" => "1", 
			"stop" => "1", 
			"store" => "1", 
			"string" => "1", 
			"sub-queue-1" => "1", 
			"sub-queue-2" => "1", 
			"sub-queue-3" => "1", 
			"subfile" => "1", 
			"subtract" => "1", 
			"sum" => "1", 
			"super" => "1", 
			"supress" => "1", 
			"symbolic" => "1", 
			"sync" => "1", 
			"synchronized" => "1", 
			"sysin" => "1", 
			"sysipt" => "1", 
			"syslst" => "1", 
			"sysout" => "1", 
			"syspch" => "1", 
			"syspunch" => "1", 
			"system-info" => "1", 
			"tab" => "1", 
			"tallying" => "1", 
			"tape" => "1", 
			"terminal" => "1", 
			"terminal-info" => "1", 
			"terminate" => "1", 
			"test" => "1", 
			"text" => "1", 
			"than" => "1", 
			"through" => "1", 
			"thru" => "1", 
			"time" => "1", 
			"time-of-day" => "1", 
			"time-out" => "1", 
			"timeout" => "1", 
			"times" => "1", 
			"title" => "1", 
			"to" => "1", 
			"top" => "1", 
			"totaled" => "1", 
			"totaling" => "1", 
			"trace" => "1", 
			"track-area" => "1", 
			"track-limit" => "1", 
			"tracks" => "1", 
			"trailing" => "1", 
			"trailing-sign" => "1", 
			"transaction" => "1", 
			"transform" => "1", 
			"true" => "1", 
			"type" => "1", 
			"typedef" => "1", 
			"underline" => "1", 
			"underlined" => "1", 
			"unequal" => "1", 
			"unit" => "1", 
			"unlock" => "1", 
			"unstring" => "1", 
			"until" => "1", 
			"up" => "1", 
			"update" => "1", 
			"updaters" => "1", 
			"upon" => "1", 
			"upper" => "1", 
			"upsi-0" => "1", 
			"upsi-1" => "1", 
			"upsi-2" => "1", 
			"upsi-3" => "1", 
			"upsi-4" => "1", 
			"upsi-5" => "1", 
			"upsi-6" => "1", 
			"upsi-7" => "1", 
			"usage" => "1", 
			"use" => "1", 
			"user" => "1", 
			"using" => "1", 
			"value" => "1", 
			"values" => "1", 
			"variable" => "1", 
			"varying" => "1", 
			"wait" => "1", 
			"when-compiled" => "1", 
			"window" => "1", 
			"with" => "1", 
			"words" => "1", 
			"working-storage" => "1", 
			"wrap" => "1", 
			"write" => "1", 
			"write-only" => "1", 
			"write-verify" => "1", 
			"writerszero" => "1", 
			"zero" => "1", 
			"zero-fill" => "1", 
			"zeros" => "1", 
			"zeroes" => "1", 
			"call" => "2", 
			"exit" => "2", 
			"else" => "2", 
			"end-if" => "2", 
			"end-evaluate" => "2", 
			"evaluate" => "2", 
			"if" => "2", 
			"perform" => "2", 
			"then" => "2", 
			"when" => "2", 
			"01" => "3", 
			"15" => "3", 
			"77" => "3", 
			"78" => "3", 
			"z" => "3", 
			"88" => "3", 
			"x" => "4", 
			"02" => "4", 
			"03" => "4", 
			"04" => "4", 
			"05" => "4", 
			"copy" => "5", 
			"d" => "5", 
			"ddebug" => "5");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
