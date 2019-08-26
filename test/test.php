<html>
	<head>
		<title>SimplePercentDecoder-Test</title>
	</head>
	<body>
		<h2>PHP</h2>
		<p>
			<?php
			
				include "../php/percentdecoder.php";
				
				$testString = "A A!A\"A#A\$A%A&A'A(A)A*A+A,A-A.A/A:A;A<A=A>A?A@A[A\A]A{A|A}";
				
				echo "Original String: " . $testString . "<br/>";
				
				$decodedString = decodePercentURI($testString);
			
				echo "Decodierter String: " . $decodedString . "<br/>";
				
				$encodedString = encodePercentURI($decodedString);
				
				echo "Encodierter String: " . $encodedString . "<br/>";
				
			?>
		</p>
		<h2>JS</h2>
		<p>
			<script type="text/javascript" src="../js/percentdecoder.js"></script>
			<script type="text/javascript">
				
				var testString = "A A!A\"A#A$A%A&A'A(A)A*A+A,A-A.A/A:A;A<A=A>A?A@A[A\A]A{A|A}";
				
				document.getElementById("originalstring").innerHTML = testString;
				
				decodedString = decodePercentURI(testString);
			
				document.getElementById("decodedString").innerHTML = decodedString;
				
				encodedString = encodePercentURI(decodedString);
				
				document.getElementById("encodedString").innerHTML = encodedString;
				
			</script>
			Original String: <span id="originalstring"></span><br />
			Decodierter String: <span id="decodedString"></span><br />
			Encodierter String: <span id="encodedString"></span><br />
		</p>
	</body>
</html>
