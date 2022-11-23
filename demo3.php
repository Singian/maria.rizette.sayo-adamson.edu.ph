//Grade_Shit
			echo "<br><br>";
			$name = "AJUJU";
			$grade = 69;
			if ($grade >= 70) 
			{
				echo "Name: ".$name . "<br>Grade: ". $grade . ", you have passed this semester <br>";
			} 
			elseif (($grade >=60) && ($grade <=69))
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", get remedial for this semester <br>";
			}
			else
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", you have failed this semester <br>";
			}
