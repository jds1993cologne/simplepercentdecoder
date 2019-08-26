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
				
				$decodedString = decodePercentURI($textString);
			
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
				
				document.write("Original String: " + testString + "<br/>"); 
				
				decodedString = decodePercentURI(textString);
			
				document.write("Decodierter String: " . decodedString . "<br/>");
				
				encodedString = encodePercentURI(decodedString);
				
				document.write("Encodierter String: " . encodedString . "<br/>");
				
			</script>
		</p>
	</body>
</html>
