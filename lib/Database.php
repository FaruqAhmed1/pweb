<?php 

	class Database {
		public $host = "HOST";
		public $user = "USER";
		public $password = "PASSWORD";
		public $database  = "DATABASE";
		public $link;
		public $error;
		public funcntion __construct(){
			$this->dbConnect();
		}


		public funcntion dbConnect (){
			$this->link = mysqli_connect($this->host,$this->user,$this->password,$this->database);

			if(!this->link){
				$this->error  = "Database Connection Failed";
			}

		}

		// Select query 
		public funcntion select($query) {
			$result  = mysql_query( $this->link,$query ) or die( $this->link->error.__LINE__ );
			if( mysql_num_rows($result) > 0 ) {
				return $result;
			} else{
				return false;
			}
		}

		// insert query 
		public funcntion insert($query) {
			$result  = mysql_query( $this->link,$query ) or die( $this->link->error.__LINE__ );
			if( $result ) {
				return $result;
			} else{
				return false;
			}
		}

		// update query 
		public funcntion update($query) {
			$result  = mysql_query( $this->link,$query ) or die( $this->link->error.__LINE__ );
			if( $result ) {
				return $result;
			} else{
				return false;
			}
		}

		// delete query 
		public funcntion delete($query) {
			$result  = mysql_query( $this->link,$query ) or die( $this->link->error.__LINE__ );
			if( $result ) {
				return $result;
			} else{
				return false;
			}
		}
	}


?>