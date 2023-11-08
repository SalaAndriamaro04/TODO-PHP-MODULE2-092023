<?php
    //--Affichage items 
    function displayItem($item){
        
        $editItemId = get('editItem');
        if($editItemId==$item['id']){
            $html='<form action="editItem.php" method="POST">';
            $html.='<input type="hidden" name="editItem" value="'.$item['id'].'">';
            $html.='<div class="input-group input-group-sm">
                        <input type="text" class="form-control" name="intitule" value="'.$item['intitule'].'">
                        <span class="input-group-append">
                        <button type="submit" class="btn btn-info btn-flat">
                        OK
                        </button>
                        </span>
                    </div>';
            $html.='</form>';
        }else{
            
            $html =   '<li class="'. 
                        //Test pour activer le css de class 'done' lors du cochage
    
                        ($item['checked']?'done':' ').
                        '">
                        <!-- checkbox -->
                        <div class="icheck-primary d-inline ml-2">
                        <a href="toogleItem.php?item='.$item['id'].'">';
                        if($item['checked']){
                            $html.='<i class="far fa-check-square"> </i>';
                        }else{
                            $html.='<i class="far fa-square"> </i>';
                        }

                        //nom de votre TODO affiché, et le boutton d'édition et de suppression
            $html.='    </a></div>
                        <!-- todo text -->
                        <span class="text">'.
                        $item['intitule']
                        .'</span>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                        <a href="index.php?editItem='.$item['id'].'">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="deleteItem.php?item='.$item['id'].'">
                            <i class="fas fa-trash"></i>
                        </a>
                        </div>
                    </li>';
        }
      return $html;
  }

#TODO à supprimer  
//--Récupération items
function getItems(){
    return unserialize(file_get_contents(FILE_NAME));
}

#TODO à supprimer
//--Enregistrement modification de checkbox des items
function saveItems($items){
file_put_contents(FILE_NAME, serialize($items));
}

?>