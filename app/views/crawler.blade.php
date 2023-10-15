   
    	<?php
			//$uri = "http://www.google.it";
			
			//$sito = @file_get_contents($uri);
			foreach($indirizzi as $indirizzo)
			{
				echo $indirizzo->indirizzo . "<br>";
				$url = $indirizzo->indirizzo;
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_URL, $url);
				$out = curl_exec($ch);
				curl_close($ch);
				$sito = strtolower($out);
			
				$pos1 = strpos($sito, "<title>");
				if($pos1>0){
					$pos2 = strpos($sito, ">", $pos1);
					$pos3 = strpos($sito, "<", $pos2+2);
					$pos2++;
					$titolo=substr($sito ,$pos2,$pos3-$pos2); 
					
					echo $titolo."<br><br>";
					
				}
				
				$pos1 = strpos($sito, "description");
				if($pos1 > 0) $pos1 = strpos($sito, "content", $pos1); 
				if($pos1>0){
					$pos2 = strpos($sito, "\"", $pos1);
					$pos3 = strpos($sito, "\"", $pos2+2);
					$pos2++;
					$descrizione=substr($sito ,$pos2,$pos3-$pos2); 
					
					echo $descrizione."<br>";
					
				}
				
				$pos1 = strpos($sito, "keywords");
				if($pos1 > 0) $pos1 = strpos($sito, "content", $pos1); 
				if($pos1>0){
					$pos2 = strpos($sito, "\"", $pos1);
					$pos3 = strpos($sito, "\"", $pos2+2);
					$pos2++;
					$keywords=substr($sito ,$pos2,$pos3-$pos2); 
					
					echo $keywords."<br>";
					
				}
				echo "<p>&nbsp;</p>";
			
			}
					
		?>
   