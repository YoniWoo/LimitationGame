<?php
include ('init.inc.php');
$mysqliResult = $mysqli->query("SELECT * FROM participants WHERE handicap ='aveugles'");

while($participant = $mysqliResult->fetch_assoc())
{
    $contenu .= '<div class="item">
    <div class="item-image">
        <img src="' .$participant['image']. '" alt="Candidats handicapé trisomoque" class="myImage">
        <div class="' .$participant['label_class']. '" id="label">' .$participant['label']. '</div>
    </div>
    <div class="item-body">
        <div class="btn-item">
            <div class="switcher">
                <input type="checkbox" checked class="check">
                <div class="btn">
                    <div class="rond">
                    </div>
                </div>
            </div>
        </div>
        <div class="item-description">
            <p class="prenom">' .$participant['prenom'] .' '. $participant['age'].' ans</p>
            <p class="description">' .$participant['description']. '</p>
            <img src="' .$participant['image_handicap'].'" class="icon__categorie" alt="">
            <p class="info-qualite">' .$participant['qualite_un']. '<br>' .$participant['qualite_deux']. '<br>' .$participant['qualite_trois']. '</p>
        </div>
    </div>
</div>';
}

echo $contenu;
?>