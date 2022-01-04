<?php 
    if(isset($_POST['getData'])){
        $conn = new mysqli('localhost', 'root', '', 'pictures');

        $start = $conn->real_escape_string($_POST['start']);
        $limit = $conn->real_escape_string($_POST['limit']);
        $count = $start+1;
        $sql = $conn->query("SELECT count FROM placecount LIMIT $start, $limit");
        
        if($sql->num_rows >0 ){
           $respones = ""; 
           $db = new PDO("mysql:host=localhost;dbname=pictures","root","");
           while($data = $sql->fetch_array()){ ?>
            <div class="rwd_slider_container_wrapper">
                    <div class="rwd_slider_container">
                        <div class="slider_container">       
            <?php $response =
                $index = 1;   
                for(;$index <=3; $index++){
                    $row = $db->query("SELECT * FROM demo WHERE `classify` = $count AND `num` = $index");?>   
                    <div> 
                       <?php
                       foreach($row as $img)?>
                       <img src="<?=$img["name"]?>" alt="pure css3 slider"/>
                       <?php
                       foreach($row as $img)?>
                       <a href="<?=$img["url"]?>"><span class="info"><?=$img["place"]?></span></a>
                   </div> 
               <?php
               };           
               echo'
                        </div>
                    </div>
            </div>';  
            $count++; 
            } 
            exit($response);
        }else {
            exit('reachedMax');
        }
           
        
    }?>





