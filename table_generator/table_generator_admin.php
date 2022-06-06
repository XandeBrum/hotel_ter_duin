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
            <caption style="caption-side:top"><h2>Overzicht alle reserveringen</h2></caption>
            
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
                        <a href="edit-reservering.php?reserverings_code=<?php echo trim($row['reserverings_code']); ?>
                        ?van=<?php echo trim($row['van']); ?>
                        ?tot=<?php echo trim($row['tot']); ?>"
                        class="btn btn-primary" >Edit</a>
                    </td>
                    <td>
                        <a href="delete-reservering.php?reserverings_code=<?php echo $row['reserverings_code']; ?>" class="btn btn-danger" >Delete</a>
                    </td>
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>