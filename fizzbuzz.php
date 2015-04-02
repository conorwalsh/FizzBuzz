<html>
	
	<!--******************************************************************
	**********************************************************************
	 
	  Conor Walsh 2015
	     Website: http://www.conorwalsh.net
	     GitHub:  https://github.com/conorwalsh
	  
	  Version 1
	  
	  First created: 1st April 2015
	  Last modified: 2nd April 2015
	  
	 **************************** LICENCE *******************************
	 
	 Copyright (c) 2015 Conor Walsh
	
	 Permission is hereby granted, free of charge, to any person obtaining
	 a copy of this software and associated documentation files (the
	 "Software"), to deal in the Software without restriction, including
	 without limitation the rights to use, copy, modify, merge, publish,
	 distribute, sublicense, and/or sell copies of the Software, and to
	 permit persons to whom the Software is furnished to do so, subject to
	 the following conditions:
	
	 The above copyright notice and this permission notice shall be included
	 in all copies or substantial portions of the Software.
	
	 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
	 OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
	 MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
	 IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
	 CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
	 TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
	 SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	  
	**********************************************************************
	*******************************************************************-->
	
	<head>
		<title>FizzBuzz</title>
	</head>
	
	<body>
		
		<form method="get"action="">
			<label for="i">Limit: </label>
			<input type="number" min="2" value="<?php $limit = $_GET["i"]; if($limit==""){$limit = 100; echo $limit;} else{echo $limit;} ?>" name="i" id="i"/>
			<button type="submit">Go</button>
		</form>
		
		<?php
		
		  	$n = 1;
						
			while ($n <= $limit) {
				if($n % 3 == 0 && $n % 5 == 0){
					echo $n . ": FizzBuzz<br />";
					$n++;
				}
				elseif($n % 3 == 0) {
					echo $n . ": Fizz<br />";
					$n++;
				}
				elseif($n % 5 == 0) {
					echo $n . ": Buzz<br />";
					$n++;
				}
				else {
					echo $n . "<br />";
					$n++;
				}
			}
						
		?>
		
	</body>
	
</html>
