<html>
    <body>
        <h1>Notícias</h1>

        <ul>
            <?php foreach ($data['news'] as $new): ?>
                <!--li><?php //echo utf8_encode($new['titulo']); ?></li-->
            <li><a href="./noticias/<?php echo $new['id']; ?>"><?php echo $new['titulo']; ?></a></li>
            <?php endforeach; ?>
        </ul>
        
        <form method="POST">
            <input type="text" name="nome" />
            <input type="submit" value="Enviar" />
        </form>
        
    </body>
</html>
