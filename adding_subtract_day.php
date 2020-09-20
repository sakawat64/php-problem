<?php
$collection_day = "Sunday";
$issue_date = $_POST['loan_dateout'];
		for($i = 0; $i<7 ; $i++)
		{
			$srt = date('d.m.Y', strtotime($issue_date . " +$i day"));
			$timestamp = strtotime($srt);
			$curr_day = date('l', $timestamp);
			if($curr_day == $collection_day)
			{
				$reduce_date = date('d.m.Y', strtotime($srt . " -$reploandays day"));
				$loan_dateout = strtotime(sanitize($db_link, $reduce_date));
				//echo "fff";
				//die;
			}
		}