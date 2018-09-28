<?php
global $BEAUT_PATH;
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_pli extends HFile{
   function HFile_pli(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// PL/I
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("BEGIN;", "DO;", "IF");
$this->unindent          	= array("ELSE", "END;", "OTHER", "OTHERWISE", "THEN");

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("!", "@", "^", "&", "*", "(", ")", "-", "+", "=", "\\", "/", "{", "}", "[", "]", ":", ";", "'", "<", ">", " ", ",", "	", ".", " ", " ", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("/*");
$this->blockcommentoff   	= array("*/");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"**" => "1", 
			"NO" => "1", 
			"A" => "1", 
			"ABS" => "1", 
			"ADD" => "1", 
			"ADDR" => "1", 
			"ADDSUFF" => "1", 
			"ALIGNED" => "1", 
			"ALL" => "1", 
			"ALLOC" => "1", 
			"ALLOCATE" => "1", 
			"ALLOCATION" => "1", 
			"ALLOCN" => "1", 
			"AND" => "1", 
			"ANY" => "1", 
			"AREA" => "1", 
			"ARG" => "1", 
			"ASCII" => "1", 
			"ASIGN" => "1", 
			"ASM" => "1", 
			"ASSEMBLER" => "1", 
			"ATTENTION" => "1", 
			"ATTN" => "1", 
			"AUTO" => "1", 
			"AUTOMATIC" => "1", 
			"B" => "1", 
			"BACKWARDS" => "1", 
			"BASED" => "1", 
			"BEGIN" => "1", 
			"BIN" => "1", 
			"BINARY" => "1", 
			"BIT" => "1", 
			"BKWD" => "1", 
			"BLKSIZE" => "1", 
			"BOOL" => "1", 
			"BUF" => "1", 
			"BUFFERED" => "1", 
			"BUFFERS" => "1", 
			"BUFND" => "1", 
			"BUFNI" => "1", 
			"BUFSP" => "1", 
			"BUFOFF" => "1", 
			"BUILTIN" => "1", 
			"BY" => "1", 
			"NAME" => "1", 
			"C" => "1", 
			"CALL" => "1", 
			"CEIL" => "1", 
			"CHAR" => "1", 
			"CHARACTER" => "1", 
			"CHECK" => "1", 
			"CLOSE" => "1", 
			"COBOL" => "1", 
			"COL" => "1", 
			"COLUMN" => "1", 
			"COMPILETIME" => "1", 
			"COMPLEX" => "1", 
			"COMPLETION" => "1", 
			"COND" => "1", 
			"CONDITION" => "1", 
			"CONJG" => "1", 
			"CONN" => "1", 
			"CONNECTED" => "1", 
			"CONSECUTIVE" => "1", 
			"CONTROLLED" => "1", 
			"CONV" => "1", 
			"CONVERSION" => "1", 
			"COPY" => "1", 
			"COUNT" => "1", 
			"COUNTER" => "1", 
			"CPLN" => "1", 
			"CPLX" => "1", 
			"CSTG" => "1", 
			"CTL" => "1", 
			"CTLASA" => "1", 
			"CTL360" => "1", 
			"CURRENTSTORAGE" => "1", 
			"D" => "1", 
			"DATA" => "1", 
			"DATAFIELD" => "1", 
			"DATE" => "1", 
			"DB" => "1", 
			"DCL" => "1", 
			"DEC" => "1", 
			"DECIMAL" => "1", 
			"DECLARE" => "1", 
			"DEF" => "1", 
			"DEFAULT" => "1", 
			"DEFINED" => "1", 
			"DELAY" => "1", 
			"DESCRIPTORS" => "1", 
			"DFT" => "1", 
			"DIM" => "1", 
			"DIRECT" => "1", 
			"DISPLAY" => "1", 
			"DIVIDE" => "1", 
			"DO" => "1", 
			"E" => "1", 
			"EDIT" => "1", 
			"ELSE" => "1", 
			"EMPTY" => "1", 
			"END" => "1", 
			"ENDFILE" => "1", 
			"ENDPAGE" => "1", 
			"ENTRY" => "1", 
			"ENVIRONMENT" => "1", 
			"ERF" => "1", 
			"ERFC" => "1", 
			"ERROR" => "1", 
			"EVENT" => "1", 
			"EXCL" => "1", 
			"EXCLUSIVE" => "1", 
			"EXEC" => "1", 
			"EXIT" => "1", 
			"EXP" => "1", 
			"EXT" => "1", 
			"EXTERNAL" => "1", 
			"F" => "1", 
			"FB" => "1", 
			"FBS" => "1", 
			"FETCH" => "1", 
			"FILE" => "1", 
			"FINISH" => "1", 
			"FIXED" => "1", 
			"FIXEDOVERFLOW" => "1", 
			"FLOAT" => "1", 
			"FLOOR" => "1", 
			"FLOW" => "1", 
			"FOFL" => "1", 
			"FORMAT" => "1", 
			"FORTRAN" => "1", 
			"FREE" => "1", 
			"FS" => "1", 
			"GENERIC" => "1", 
			"GET" => "1", 
			"GO" => "1", 
			"TO" => "1", 
			"GOTO" => "1", 
			"HALT" => "1", 
			"HBOUND" => "1", 
			"HIGH" => "1", 
			"IF" => "1", 
			"IGNORE" => "1", 
			"IMAG" => "1", 
			"INDEX" => "1", 
			"INDEXAREA" => "1", 
			"INDEXED" => "1", 
			"INIT" => "1", 
			"INITIAL" => "1", 
			"INPUT" => "1", 
			"INT" => "1", 
			"INTER" => "1", 
			"INTERNAL" => "1", 
			"INTO" => "1", 
			"IRRED" => "1", 
			"IRREDUCIBLE" => "1", 
			"KEY" => "1", 
			"KEYED" => "1", 
			"KEYFROM" => "1", 
			"KEYLENGTH" => "1", 
			"KEYLOC" => "1", 
			"KEYTO" => "1", 
			"LABEL" => "1", 
			"LBOUND" => "1", 
			"LEAVE" => "1", 
			"LENGTH" => "1", 
			"LIKE" => "1", 
			"LINE" => "1", 
			"LINENO" => "1", 
			"LINESIZE" => "1", 
			"LIST" => "1", 
			"LOCATE" => "1", 
			"LOG" => "1", 
			"LOG2" => "1", 
			"LOG10" => "1", 
			"LOW" => "1", 
			"MAIN" => "1", 
			"MAX" => "1", 
			"MIN" => "1", 
			"MOD" => "1", 
			"MULTIBLE" => "1", 
			"NCP" => "1", 
			"NOCHECK" => "1", 
			"NOFLOW" => "1", 
			"NOFORMAT" => "1", 
			"NOLOCK" => "1", 
			"NOMAP" => "1", 
			"NOMAPIN" => "1", 
			"NIMAPOUT" => "1", 
			"NORESCAN" => "1", 
			"NOWRITE" => "1", 
			"NULL" => "1", 
			"OFFSET" => "1", 
			"OFL" => "1", 
			"ON" => "1", 
			"ONCHAR" => "1", 
			"ONCODE" => "1", 
			"ONCOUNT" => "1", 
			"ONFILE" => "1", 
			"ONKEY" => "1", 
			"ONLOC" => "1", 
			"ONSOURCE" => "1", 
			"OPEN" => "1", 
			"OPTIONS" => "1", 
			"ORDER" => "1", 
			"OR" => "1", 
			"OTHER" => "1", 
			"OTHERWISE" => "1", 
			"OUTPUT" => "1", 
			"OVERFLOW" => "1", 
			"P" => "1", 
			"PAGE" => "1", 
			"PAGESIZE" => "1", 
			"PARMSET" => "1", 
			"PASSWORD" => "1", 
			"PENDING" => "1", 
			"PIC" => "1", 
			"PICTURE" => "1", 
			"PLIRETV" => "1", 
			"POINTER" => "1", 
			"POLY" => "1", 
			"POS" => "1", 
			"POSITION" => "1", 
			"PREC" => "1", 
			"PRECISION" => "1", 
			"PRINT" => "1", 
			"PRIORITY" => "1", 
			"PROC" => "1", 
			"PROCEDURE" => "1", 
			"PROD" => "1", 
			"PTR" => "1", 
			"PUT" => "1", 
			"R" => "1", 
			"RANGE" => "1", 
			"READ" => "1", 
			"REAL" => "1", 
			"RECORD" => "1", 
			"RECSIZE" => "1", 
			"RECURSIVE" => "1", 
			"RED" => "1", 
			"REDUCIBLE" => "1", 
			"REENTRANT" => "1", 
			"REFER" => "1", 
			"REGIONAL" => "1", 
			"RELEASE" => "1", 
			"REORDER" => "1", 
			"REPEAT" => "1", 
			"REPLY" => "1", 
			"REREAD" => "1", 
			"RESCAN" => "1", 
			"RETCODE" => "1", 
			"RETURN" => "1", 
			"RETURNS" => "1", 
			"REUSE" => "1", 
			"REVERT" => "1", 
			"REWRITE" => "1", 
			"ROUND" => "1", 
			"SAMKEY" => "1", 
			"SCALARVARYING" => "1", 
			"SEQUENTAL" => "1", 
			"SEQL" => "1", 
			"SET" => "1", 
			"SIGN" => "1", 
			"SIGNAL" => "1", 
			"SIS" => "1", 
			"SIZE" => "1", 
			"SKIP" => "1", 
			"SNAP" => "1", 
			"SORT" => "1", 
			"SQL" => "1", 
			"STATEMENT" => "1", 
			"STATIC" => "1", 
			"STATUS" => "1", 
			"STG" => "1", 
			"STMT" => "1", 
			"STOP" => "1", 
			"STORAGE" => "1", 
			"STREAM" => "1", 
			"STRG" => "1", 
			"STRING" => "1", 
			"STRINGRANGE" => "1", 
			"STRINGSIZE" => "1", 
			"STRZ" => "1", 
			"SUB" => "1", 
			"SUBSCRIPTRANGE" => "1", 
			"SUBSTR" => "1", 
			"SUM" => "1", 
			"SYSIN" => "1", 
			"SYSPRINT" => "1", 
			"SYSTEM" => "1", 
			"TASK" => "1", 
			"THEN" => "1", 
			"TIME" => "1", 
			"TITLE" => "1", 
			"TOTAL" => "1", 
			"TP" => "1", 
			"TRANSIENT" => "1", 
			"TRANSLATE" => "1", 
			"TRANSMIT" => "1", 
			"TRKOFL" => "1", 
			"TRUNC" => "1", 
			"U" => "1", 
			"UFL" => "1", 
			"UNAL" => "1", 
			"UNALIGNED" => "1", 
			"UNBUF" => "1", 
			"UNBUFFERED" => "1", 
			"UNDEFINEDFILE" => "1", 
			"UNDERFLOW" => "1", 
			"UNLOCK" => "1", 
			"UNSPEC" => "1", 
			"UNTIL" => "1", 
			"V" => "1", 
			"VALUE" => "1", 
			"VAR" => "1", 
			"VARIABLE" => "1", 
			"VARYING" => "1", 
			"VB" => "1", 
			"VBS" => "1", 
			"VERIFY" => "1", 
			"VS" => "1", 
			"VSAM" => "1", 
			"WAIT" => "1", 
			"WHEN" => "1", 
			"WHILE" => "1", 
			"WRITE" => "1", 
			"X" => "1", 
			"ZDIV" => "1", 
			"ZEREODIVIDE" => "1", 
			"$SYSTEM" => "2", 
			"%ACT" => "2", 
			"%ACTIVATE" => "2", 
			"%CONTROL" => "2", 
			"%DCL" => "2", 
			"%DEACT" => "2", 
			"%DEACTIVATE" => "2", 
			"%DECLARE" => "2", 
			"%DO" => "2", 
			"%ELSE" => "2", 
			"%END" => "2", 
			"%GO" => "2", 
			"%GOTO" => "2", 
			"%IF" => "2", 
			"%INCLUDE" => "2", 
			"%NOPRINT" => "2", 
			"%NOTE" => "2", 
			"%PRINT" => "2", 
			"%PROC" => "2", 
			"%PROCEDURE" => "2", 
			"%SKIP" => "2", 
			"%THEN" => "2", 
			"CICS" => "2", 
			"COMPTIME" => "2", 
			"BETWEEN" => "3", 
			"DROP" => "3", 
			"GROUP" => "3", 
			"HAVING" => "3", 
			"INSERT" => "3", 
			"DB2SQLCA" => "4", 
			"DELETE" => "4", 
			"FROM" => "4", 
			"IN" => "4", 
			"SELECT" => "4", 
			"UPDATE" => "4", 
			"WHERE" => "4", 
			"+" => "5", 
			"-" => "5", 
			"*" => "5", 
			"//" => "5", 
			"/" => "5", 
			"=" => "5", 
			"&" => "5", 
			">" => "5", 
			"<" => "5", 
			"^" => "5", 
			"!" => "5", 
			"||" => "5", 
			"ACOS" => "6", 
			"ATAN" => "6", 
			"ATAND" => "6", 
			"ATANH" => "6", 
			"COS" => "6", 
			"COSD" => "6", 
			"COSH" => "6", 
			"SIN" => "6", 
			"SIND" => "6", 
			"SINH" => "6", 
			"TAN" => "6", 
			"TAND" => "6", 
			"TANH" => "6");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
