<?php


namespace blogqiwogames;
use PDO;


class Database
{

    /**
     * Init connexion PDO
     */
    public function getPDO()
    {
        try {
            $dbh = new PDO('mysql:host=mysql-qiwo-indie-games.alwaysdata.net;dbname=qiwo-indie-games_db', '209913', 'Sladpowa38');
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getDatas()
    {
        $dbh = new PDO('mysql:host=mysql-qiwo-indie-games.alwaysdata.net;dbname=qiwo-indie-games_db', '209913', 'Sladpowa38');
        foreach ($dbh->query('SELECT * FROM games') as $row) {
            ?>

            <h2 class="space-before">
                <?php
                echo $row['title'];
                ?>
                <br>
                <span class="text-muted">
                    Jeux de plateforme 2D
                </span>
            </h2>
            <p>
                <?php
                echo $row['content']
                ?>
            </p>
            <a class="btn btn-lg btn-outline-warning" target="_blank" href="<?php echo $row['link'] ?>">JOUER</a><br>
            <br>

            <?php
        }
    }

    public function getInfos()
    {
        $dbh = new PDO('mysql:host=mysql-qiwo-indie-games.alwaysdata.net;dbname=qiwo-indie-games_db', '209913', 'Sladpowa38');
        foreach ($dbh->query('SELECT * FROM infos') as $row) {
            ?>
            <div class="container-fluid nes-container is-rounded is-dark animated slideInUp" id="infos-content"><br><br>
                <?php
                echo '<h3 class="nes-text is-error">' . $row['title'] . '</h3>';
                echo '<br><h4 class="nes-text is-warning">' . $row['subtitle'] . '</h4>';
                ?>
                <img class="tools-img" src="<?php echo $row['image']; ?>"/>
                <?php
                echo '<hr>';
                echo '<h5 class="nes-text is-success">Description :</h5><p style="text-align: left">' . $row['content'] . '</p><br>';
                ?>
                <a class="nes-btn is-primary" target="_blank" href="<?php echo $row['link'] ?>">Site officiel</a><br>
                <?php
                echo '<p>Posté le :<em>' . $row['date'] . '</em></p>'

                ?>
            </div>
            <?php
        }
    }
}


