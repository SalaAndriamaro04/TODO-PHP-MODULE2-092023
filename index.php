<?php
include('config/app.php');
include('config/bd.php');
include('connexion.php');
include('html/header.php');
include('fct/item.php');
include('fct/request.php');

?>

  <!-- /.row -->
  <div class="row">
      <div class="col-12">
          <div class="card">
              
          <!-- /.card-header -->
            <div class="card-body">
            <!-- Formulaire d'ajout-->
              <form action="addItem.php" method='POST'>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" name="intitule">
                  <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat">+</button>
                  </span>
                </div>
              </form>
            <!-- Liste -->
              <ul class="todo-list " data-widget="todo-list">
            
            <!-- /. Code php pour afficher la TODO list  -->  
              <?php
              #TODO à modifier utilisant SELECT
              $query='SELECT * FROM todo';
              $stmt=$pdo->query($query);
              while($item = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo displayItem($item);
              } 
              
              ?>
                </ul>
              </div>
             
            </div>
          </div>  
        </div>

<?php
include('html/footer.php');
?>