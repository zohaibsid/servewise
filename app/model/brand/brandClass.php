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
					$this->query="insert into brand(name,vendor_id) values(?,?)";
				$result=$this->db->executeQuery($this->query,array($name,$userid),"create");
					if($result){
						return $result;
						}    
				    else{
						return false;
						}
				}
		

				function getallbrands($vendorid){
					$this->query="select * from brand where vendor_id = ? ";
				$result=$this->db->executeQuery($this->query,array($vendorid),"cread");
				return $result;
				}
				
				
				

	}

?>