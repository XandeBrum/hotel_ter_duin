<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Overzicht reserveringen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <br><br>
  
        <?php
    


        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
            $key = $from."_code";
          
            ?>

            <table class="table table-striped">
            <caption style="caption-side:top"><h2>Overzicht Kamers</h2></caption>
            
            <?php 
            // DE KOLOMNAMEN WORDEN OPGEHAALD
            $columns = array_keys($dataset[0]);
            ?>
            
            <tr>
                <?php foreach($columns as $column){ ?>
                    <th>
                        <strong>
                            <?php echo $column?>
                        </strong>
                    </th>
                <?php } ?>
                <th colspan="2">action</th>
            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>
                    <td>
                        <a href="/reserveren.php?kamer_code=<?php echo $row_id;?>?klant_code=<?php session_start(); echo $_SESSION['klant_code']; session_abort();?>                   
                         "class="btn btn-primary">Reserveer</a>
                         
                    </td>
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>