<?php

//var_dump($id);

?>


<article class="single_post">
    <h3 class="title"><?=$title?></h3>
    <div class="content">
        <a href="#">
            <!--TODO change image source by db-->
            <img src="content/uploads/post/<?=$id . '/' . $id . '.png'?>" alt="">
        </a>
        <p class="text">
            <?=$content?>
        </p>
    </div>
</article>
