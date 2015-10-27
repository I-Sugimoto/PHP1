<?php
  
// 1000で試したら、全然違う数も入っていた。
for ($i = 1; $i <= 100; $i++)
{   
	if($i == 2|| $i == 3 || $i == 5 ||$i == 7)
	{
       echo $i . '<br>';
       continue;
	}
    elseif ($i == 1 ||$i % 2 == 0 || $i % 3 == 0 || $i % 5 == 0 || $i % 7 == 0)
    {
       continue;
    }
    else
    {
       echo $i . '<br>';
    }

}

