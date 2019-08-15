<?php 
require(ROOT_PATH . "/php/db.php");

function getMenuLinks($conn){
   
    $SelectMenu = "SELECT `id`,`name`,`link` FROM `menu` ORDER BY `id` ASC";
    $resultSelectMenu = $conn->query($SelectMenu);
    
    if($resultSelectMenu->num_rows > 0){
        while($row = $resultSelectMenu->fetch_assoc()) {
        
        echo '<li class="nav-item"><a href="/'.$row['link'].'.php" class="nav-link pl-0">'.$row['name'].'</a></li>';
    }
  }
} 
