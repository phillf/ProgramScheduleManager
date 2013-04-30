<?php
/**
 * PowerCast Radio Schedule Manager
 *
 * This PHP script is the class file for PowerCast Radio Schedule Manager.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Program Schedule Management System
 * @package    PCR-Schedule-Manager
 * @author     Phill Fernandes <pfernandes@techweekmedia.com>
 * @copyright  2013 TechWeek Media
 * @copyright  2013 Facepunch.com Forum Members
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    v. 0.1
 * @since      File available since Release 0.1
 */

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/config.php'); 

 class ScheduleClass {
 
	function __construct() 
	{
		$this->connect();
	}
	
	//Database Connection Function
	//This will be rewritten to use the improved version of the MySQL driver, MySQLi, very soon.
	function connect()
	{
			$myconn = mysql_connect(DB_Host, DB_Username, DB_Password);
			if($myconn)
			{
				$seldb = mysql_select_db(DB_Name, $myconn);
				
				if($seldb)
				{
					$this->con = true;
					return true; 
				} 
				else
				{
					$error = mysql_error();
					return HEADER ("LOCATION: index.php#tab8?error=1"); //return MySQL error to be handled in index.php  
				}
			} 
			else
			{
					$error = mysql_error();
					return HEADER ("LOCATION: /projects/IHCDLibrary/#tab8?error=1"); //return MySQL error to be handled in index.php
			}
			
	}
	
	/** Begin Recrod Management **/

	// This function will be used to populate the edit show form.
	function getShow($ID)
	{
		$query = "SELECT * FROM PCR_Show_Schedule WHERE ID = $ID";
		$result = mysql_query($query);
		if($result == false) { 
			echo "Query Failed for reason '" . mysql_error() . "'";
			echo $query;	 
			return false;
		}
		else if (mysql_num_rows($result) == 0)
		{
			return $_POST ['error'] = "NoRecord";
		}
		$Show = mysql_fetch_array($result);
		return $Show;
	}

	function addShow ($AirTime, $EndTime, $ShowName, $ShowDesc, $Sunday, $Monday, $Tuesday, $Wednesday, $Thursday, $Friday, $Saturday)
	{
	
		$query = "INSERT INTO PCR_Show_Schedule(AirTime, EndTime, ShowName, ShowDesc, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday) VALUES ('$AirTime', '$EndTime', '$ShowName', '$ShowDesc', '$Sunday', '$Monday', '$Tuesday', '$Wednesday', '$Thursday', '$Friday', '$Saturday')";
		$result = mysql_query($query);
		if (!$result)
		{
			return HEADER ("LOCATION: /?error=1");
			
		}
		return HEADER ("LOCATION: /?error=2");
	}
	
	function removeShow ($ID)
	{
		$query = "DELETE FROM `powercas_radio_schedule`.`PCR_Show_Schedule` WHERE `PCR_Show_Schedule`.`ID` = '$ID'";
		$result = mysql_query($query);
		if (!$result)
		{
			return HEADER ("LOCATION:" . $_SERVER['HTTP_REFERER'] . "/?error=1");
			
		}
		return HEADER ("LOCATION:" . $_SERVER['HTTP_REFERER'] . "/?error=2");
	}

	function saveShow ($ID, $AirTime, $EndTime, $ShowName, $ShowDesc, $Sunday, $Monday, $Tuesday, $Wednesday, $Thursday, $Friday, $Saturday)
	{
		$query = "UPDATE PCR_Show_Schedule SET `AirTime` = '".$AirTime."', `EndTime` = '".$EndTime."', `ShowName` = '".$ShowName."' , `ShowDesc` = '".$ShowDesc."' , `Sunday` = '".$Sunday."' , `Monday` = '".$Monday."' , `Tuesday` = '".$Tuesday."' , `Wednesday` = '".$Wednesday."' , `Thursday` = '".$Thursday."' , `Friday` = '".$Friday."' , `Saturday` = '".$Saturday."' WHERE `ID` = '".(int)$ID."'";
		$result = mysql_query($query);
		if (!$result)
		{
			die('Query Failed: ' . mysql_error());
		}
		return HEADER('/admin/?error=1');
	}
	/** End Record Management **/


	/** Begin Generalized Display **/
	function getAllShows ()
	{
		$query = "SELECT * FROM PCR_Show_Schedule";
		$result = mysql_query($query);
		if($result == false) { 
			echo "Query Failed for reason '" . mysql_error() . "'"; 
			return false;
		}
		else if (mysql_num_rows($result) == 0)
		{
			return $_POST ['error'] = "NoRecords";
		}
		while ($row_ID = mysql_fetch_array($result))
			$Shows[] = $row_ID;
		return $Shows;
	}
	/** End Generalized Display **/

	/** Begin Day Based Display **/
	function getShowsOnDay ($Day)
	{
			$query = "SELECT * FROM PCR_Show_Schedule WHERE $Day = 1 ORDER BY AirTime ASC";
			$result = mysql_query($query);
			if($result == false) { 
				echo "Query Failed for reason '" . mysql_error() . "'"; 
				return false;
			}
			while ($row_ID = mysql_fetch_array($result))
					$Shows[] = $row_ID;
			return $Shows;
	}
	/** End Day Based Display **/
}
?>