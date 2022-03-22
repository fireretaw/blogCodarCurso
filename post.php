<?php 
    include_once("templates/header.php");
    
        if(isset($_GET['id'])){
            
            $postId = $_GET['id'];
            $currentPost;
            echo $postId;
           
            foreach($posts as $post) {    
              
                if($post['id'] == $postId){
                    $currentPost = $post;
                    
                }
            }

        }
?>


<main id="posts-container">
    <div class="content-container">
        <h1 id="main-title"><?php echo $currentPost['title'] ?></h1>
        <p class= "posts-description"> <?= $currentPost['description']?></p>
        <div class="img-container">
            <img src=" <?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="posts-content"><?php echo $currentPost['conteudo'] ?></p>
    </div>
</main>
<aside class="nav-container">
    <h3 class="tags-title">Tags</h3>
        <ul class="tags-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 class="categories-title">Categorias</h3>
        <ul class="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
</aside>    
        
       

        
        
   

<?php
    include_once("templates/footer.php");

?>