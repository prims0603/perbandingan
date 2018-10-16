<?php

$varA= $_POST['a'];
$varOF=$_POST['of'];
$varB= $_POST['b'];

if($varA!=0&&$varB!=0)
{
	if($varOF=="==")
		{
			if($varA==$varB)
						{echo "$varA == $varB = true";}
						else
							{echo "$varA == $varB = false";}
		}
		elseif ($varOF=="<") 
				{
					if($varA<$varB)
						{echo "$varA < $varB = true";}
						else
							{echo "$varA < $varB = false";}
				}
				elseif ($varOF==">")
						{
							if($varA>$varB)
								{echo "$varA > $varB = true";}
								else
									{echo "$varA > $varB = false";}	
						}
						elseif ($varOF=="<=") 
								{
									if($varA<=$varB)
										{echo "$varA <= $varB = true";}
										else
											{echo "$varA <= $varB = false";}		
								}
									elseif ($varOF==">=") 
											{
												if($varA>=$varB)
													{echo "$varA >= $varB = true";}
													else
														{echo "$varA >= $varB = false";}		
											}
											elseif ($varOF=="!=") 
													{
														if($varA!=$varB)
															{echo "$varA != $varB = true";}
															else
																{echo "$varA != $varB = false";}		
													}
}
else
{echo "data masih kosong.";}

?>