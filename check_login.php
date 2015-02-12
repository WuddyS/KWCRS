<?php
	session_start();

	 if (isset($_POST['submit1'])){
		$uname = $_POST["username"];
	  	$pword = $_POST['password'];
	  	if($uname ==""){
	  			echo "คุณยังไม่ได้กรอกชื่อผู้ใช้ครับ";
		} else if($pword =="") {      
				echo "คุณยังไม่ได้กรอกรหัสผ่านครับ";
		} else {                                     
			include ("include/config.php");

			$check_log = "SELECT * from member_tbl where (Username='".$uname."' and Password='".$pword."')";
			$result = mysql_query($check_log);
			$num = mysql_num_rows($result);
			if($num <= 0) {                                                         
				echo "Username หรือ Password อาจจะผิดกรุณา Login ใหม่อีกครั้ง <br /><a href='listreport.html'>Back</a>";
			} else {
				while ($data = mysql_fetch_array($result) ) 
				{
					if($data[Status] == 'admin'){                          							//ตรวจสอบสถานะของผู้ใช้ว่าเป็น Admin
						echo "Hi Welcome Back Admin <br />";             							//สร้าง session สำหรับให้ admin นำค่าไปใช้งาน
							$_SESSION[ses_userid] = session_id();          							//สร้าง session สำหรับเก็บค่า ID
							$_SESSION[ses_username] = $username;      								//สร้าง session สำหรับเก็บค่า Username
							$_SESSION[ses_status] = "admin";										//สร้าง session สำหรับเก็บค่า Admin		          
						echo "<meta http-equiv='refresh' content='1;URL=admin.php'>";				//ส่งค่าจากหน้านี้ไปหน้า FAQ.html						
					} else if($data[Status] == 'user') {											//ตรวจสอบสถานะของผู้ใช้งานว่าเป็น user
							$_SESSION[ses_userid] = session_id();                      				//สร้าง session สำหรับให้ User นำไปใช้งาน
							$_SESSION[ses_username] = $username;									//สร้าง session สำหรับเก็บค่า Username
							$_SESSION[ses_status] = "user";							 				//ตรวจสอบสถานะของผู้ใช้งานว่าเป็น user
						echo "<meta http-equiv='refresh' content='1;URL=storage.php'>"; 			//ส่งค่าจากหน้านี้ไปหน้า storage.html						
					}
				}
			}
		}
	 }
?>