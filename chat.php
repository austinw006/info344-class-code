<html>
	<head>
	</head>
	
	<body>
		<?php
		function getConnection() {
			$dbHost = '159.203.233.236';
			$dbDatabase = 'info344chat';
			$dbUser = 'info344student';
			$dbPassword = 'GoHawks123';
			
			try {
				$conn = new PDO("mysql:host=$dbHost;dbname=$dbDatabase", 
				$dbUser, $dbPassword);
				
				return $conn;
				
			} catch(PDOException $e) {
				die('Could not connect' . $e);
			}			
		}		
		class chat{
			protected $conn;
			
			public function __construct($conn){
				$this->conn = $conn;
			}
			
			public function chat() {
				$sql = 'select * from message LIMIT 10 desc';
				$stmt = $this->conn->prepare($sql);
				$stmt->execute;
				if (!$success){
					trigger_error($stmt->errorInfo());
					return false;
				} else {
					return $stmt->fetchAll();
				}
			}
		}
		
		$conn = getConnection();
		$chatModel = new chat($conn);			
		?>
		
		<?php foreach($chatModels as $chatModel): ?>
		<li>	
			<?= htmlentities($chatModel['']) ?>,
			<?= htmlentities($match['state']) ?>
			<?= htmlentities($match['zip']) ?>
			<?= htmlentities($match['country']) ?>
		</li>
		<?php endforeach; ?>
		
	</body>
</html>