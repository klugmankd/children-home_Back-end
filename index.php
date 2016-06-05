<?php include_once ("header.php");
    $query_string = "SELECT * FROM childrenHome.news order by idNew desc;";
    $query = mysqli_query($connection, $query_string);
?>
    <div id="modal_form">
        <span id="modal_close"><img src="image/icons/iconClose.png" title="Закрити вікно"></span>
        <form action="controllers/mainController.php" method="get">
            <input type="text" name="title" placeholder="Заголовок статті">
            <input type="file" name="image" placeholder="Зображення">
            <textarea name="article" placeholder="Стаття"></textarea>
            <input type="submit" value="ok">
        </form>
    </div>
    <div id="overlay"></div>
    <div id="news">
        <div id="titleBlock">
           <h2>Новини</h2>
        </div>
        <div id="newsBlock">
            <a id="go"><img id="addNewsButton" src="image/icons/iconAdd.png" title="Додати статтю"></a>
            <?php while ($result = mysqli_fetch_array($query)) {?>
                <div id="bla" class="new">
                    <div class="newsTitle"><h3><?=$result['newsTitle']?></h3></div>
                    <a href="controllers/mainController.php?delete=<?=$result['idNew']?>"><img src="image/icons/iconClose.png" alt=""></a>
                    <div class="newsImage" style="background: url('image/gallery/1.jpg') center;"></div>
                    <div class="newsText"><p><?=$result['newsText']?></p></div>
                    <div class="newsCorrect"></div>
                </div>
            <?php }?>
        </div>
    </div>
<?php include_once("footer.php");