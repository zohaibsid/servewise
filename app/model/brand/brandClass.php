<?php 
//require("../../db/classDatabaseManager.php");

	class Brand{
		
		private $query;
		private $db;	
		
			function __construct(){
				$this->db=new databaseManager();
			}
			
			function addnewbrand($name,$userid)
{
					$this->query="insert into brand(name,user_id,created_date) values(?,?,CURRENT_DATE())";
				$result=$this->db->executeQuery($this->query,array($name,$userid),"create");
					if($result){
						return $result;
						}    
				    else{
						return false;
						}
				}
		

				function getallbrands(){
					$this->query="select * from brand ";
				$result=$this->db->executeQuery($this->query,array(),"sread");
				return $result;
				}
				
				
				

	}

?>